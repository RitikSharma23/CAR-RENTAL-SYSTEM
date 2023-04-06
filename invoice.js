function totalgross(n){
  total=0;

total=
parseFloat(JSON.parse(n.km).t)+
parseFloat(JSON.parse(n.extra_km).t)+
parseFloat(JSON.parse(n.extra_hour).t)+
parseFloat(JSON.parse(n.toll).t)+
parseFloat(JSON.parse(n.parking).t)+
parseFloat(JSON.parse(n.driver).t)+
parseFloat(JSON.parse(n.night_hold).t)+
parseFloat(JSON.parse(n.border_tax).t)+
parseFloat(JSON.parse(n.airport).t)
return total
}
function totaltax(n){
  total=0;

total=
parseFloat(JSON.parse(n.cgst).rate)+
parseFloat(JSON.parse(n.sgst).rate)+
parseFloat(JSON.parse(n.igst).rate)
return (total*totalgross(n))/100
}
function totalamt(n){
  x1=(totalgross(n))
  x2=(totaltax(n))
  return (x1+x2);
}


async function main() {
    function loaddata() {
      const newform = new FormData();
      newform.append("obj", "invoice_display");
      return fetch("API/car.php", {
        method: "POST",
        body: newform,
        mode: "cors",
        credentials: "include"
      }).then(response => response.json());
    }
    const data = await loaddata();


      if(data.message==true){
        const lastCode = data.data[data.data.length - 1].code; 
        let number = lastCode;
        let incrementedNumber = parseInt(number.substring(2)) + 1;
        incrementedNumber = 'SI' + incrementedNumber.toString().padStart(7, '0');
        document.getElementById("code").value=incrementedNumber
      }else{
        document.getElementById("code").value='SI0000001';

      }
    
    document.getElementById("table-body").innerHTML=""
    if(data.message==true){
      data.data.forEach(i => {
  var row = document.createElement("tr");


  var invoiceId = document.createElement("td");
  invoiceId.innerText = i.code;
  row.appendChild(invoiceId);

  var customerName = document.createElement("td");
  customerName.innerText = i.name;
  row.appendChild(customerName);

  var gstNo = document.createElement("td");
  gstNo.innerText = i.gst;
  row.appendChild(gstNo);

  var vehicleName = document.createElement("td");
  vehicleName.innerText = i.vname;
  row.appendChild(vehicleName);

  var trip = document.createElement("td");
  trip.innerText = (i.trip==1)?"Local":"Out";
  row.appendChild(trip);

  var gross = document.createElement("td");
  gross.innerText = totalgross(i);
  row.appendChild(gross);
  

  var tax = document.createElement("td");
  tax.innerText = totaltax(i);
  row.appendChild(tax);

  var total = document.createElement("td");
  total.innerText = totalamt(i);
  row.appendChild(total);

  var action = document.createElement("td");
  var dropdown = document.createElement("div");
  dropdown.classList.add("dropdown");

  var button = document.createElement("button");
  button.type = "button";
  button.classList.add("btn", "p-0", "dropdown-toggle", "hide-arrow");
  button.setAttribute("data-bs-toggle", "dropdown");

  var icon = document.createElement("i");
  icon.classList.add("bx", "bx-dots-vertical-rounded");
  button.appendChild(icon);
  dropdown.appendChild(button);

  var dropdownMenu = document.createElement("div");
  dropdownMenu.classList.add("dropdown-menu");

  var editLink = document.createElement("a");
  editLink.classList.add("dropdown-item");
  editLink.href = "javascript:void(0);";

  var editIcon = document.createElement("i");
  editIcon.classList.add("bx", "bxs-download", "me-1");
  editLink.appendChild(editIcon);
  editLink.appendChild(document.createTextNode("Download Invoice"));
  editLink.href = "pdf.php?a="+i.code;

  var preLink = document.createElement("a");
  preLink.classList.add("dropdown-item");
  preLink.href = "javascript:void(0);";

  var preIcon = document.createElement("i");
  preIcon.classList.add("bx", "bxs-spreadsheet", "me-1");
  preLink.appendChild(preIcon);
  preLink.appendChild(document.createTextNode("View Invoice"));
  preLink.href = "pdfpre.php?a="+i.code;

  var deleteLink = document.createElement("a");
  deleteLink.classList.add("dropdown-item");
  deleteLink.href = "javascript:void(0);";

  var deleteIcon = document.createElement("i");
  deleteIcon.classList.add("bx", "bx-trash", "me-1");
  deleteLink.appendChild(deleteIcon);
  deleteLink.appendChild(document.createTextNode("Delete"));

  deleteLink.addEventListener("click", function() {
    deletetax(i.code)    
  });

  dropdownMenu.appendChild(editLink);
  dropdownMenu.appendChild(preLink);
  dropdownMenu.appendChild(deleteLink);
  dropdown.appendChild(dropdownMenu);

  action.appendChild(dropdown);
  row.appendChild(action);

  var tableBody = document.getElementById("table-body");
  tableBody.appendChild(row);

      });
    }

}

main();



async function deletetax(id) {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "invoice_delete");
    newform.append("code", id);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }

  let data = await loaddata();

  if(data.message){
    location.reload();
  }else{
    alert("Something Went Wrong! \n Please Try Again Later");
  }
}










