const calculateTotal = (id1, id2, resultId) => {
    const input1 = document.getElementById(id1);
    const input2 = document.getElementById(id2);
    const result = document.getElementById(resultId);

    input1.addEventListener('keyup', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });
    input2.addEventListener('keyup', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });

    input1.addEventListener('keydown', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });
    input2.addEventListener('keydown', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });

    input1.addEventListener('keypress', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });
    input2.addEventListener('keypress', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });
    input1.addEventListener('input', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });
    input2.addEventListener('input', () => {
        result.value = Number(input1.value) * Number(input2.value);
    });

};


function all(){
calculateTotal('kmqty', 'km', 'kmtotal');
calculateTotal('extra_kmqty', 'extra_km', 'extra_kmtotal');
calculateTotal('extra_hour', 'extra_hour_qty', 'extra_hour_total');
calculateTotal('toll', 'toll_qty', 'toll_total');
calculateTotal('parking', 'parking_qty', 'parking_total');
calculateTotal('driver', 'driverqty', 'drivertotal');
calculateTotal('night_hold', 'night_hold_qty', 'night_hold_total');
calculateTotal('border_tax', 'border_tax_qty', 'border_tax_total');
calculateTotal('airport', 'airport_qty', 'airport_total');
}

all();

const ids = ["kmtotal","extra_kmtotal","extra_hour_total","toll_total","parking_total","drivertotal","night_hold_total","border_tax_total","airport_total"];
const taxid = ["gst_total","cgst_total","igst_total"];

const calculateTota = () => {
  let total = 0;
  ids.forEach(id => {
    const input = document.getElementById(id);
    total += Number(input.value);
  });
  return total;
};

const taxtotal = () => {
  let total = 0;
  taxid.forEach(id => {
    const input = document.getElementById(id);
    try{
        if(input.value){
        total += Number(input.value);
        }
    }catch{}
  });
  return total;
};

function total(){
    total=calculateTota();
    totaltax=taxtotal();
    document.getElementById("tax_total").value=totaltax;
    
    
    document.getElementById("gross").value=total;

    const selectedValue = document.getElementById("gst").value;
    per=(total*selectedValue)/100
    document.getElementById("gst_total").value=per
    document.getElementById("total_amount").value=total+totaltax

  
    const selectedValue2 = document.getElementById("cgst").value;
    per2=(total*selectedValue2)/100
    document.getElementById("cgst_total").value=per2
  
    const selectedValue3 = document.getElementById("igst").value;
    per3=(total*selectedValue3)/100
    document.getElementById("igst_total").value=per3
}


const numberInputs = document.querySelectorAll('input[type="number"]');

numberInputs.forEach(input => {
  input.addEventListener('input', total)
  input.addEventListener('keyup', total)
  input.addEventListener('keydown', total)
  input.addEventListener('keypress', total)
})



document.getElementById("gst").addEventListener("change", () => {
  const selectedValue = document.getElementById("gst").value;
  total=calculateTota()
  per=(total*selectedValue)/100
  document.getElementById("gst_total").value=per
  totaltax=taxtotal();
  document.getElementById("tax_total").value=totaltax;  
  document.getElementById("total_amount").value=total+totaltax
});

document.getElementById("cgst").addEventListener("change", () => {
  const selectedValue = document.getElementById("cgst").value;
  total=calculateTota()
  per=(total*selectedValue)/100
  document.getElementById("cgst_total").value=per
  totaltax=taxtotal();
  document.getElementById("tax_total").value=totaltax;  
  document.getElementById("total_amount").value=total+totaltax
});

document.getElementById("igst").addEventListener("change", () => {
  const selectedValue = document.getElementById("igst").value;
  total=calculateTota()
  per=(total*selectedValue)/100
  document.getElementById("igst_total").value=per
  totaltax=taxtotal();
  document.getElementById("tax_total").value=totaltax;  
  document.getElementById("total_amount").value=total+totaltax
});

async function customer() {
    function loaddata() {
      const newform = new FormData();
      newform.append("obj", "displaycust");
      return fetch("API/car.php", {
        method: "POST",
        body: newform,
        mode: "cors",
        credentials: "include"
      }).then(response => response.json());
    }
    const data = await loaddata();
    
    data.data.forEach(customer => {
        const optionElement = document.createElement("option");
        optionElement.value = customer.name.toLowerCase();
        optionElement.text = customer.name;
        document.getElementById("customer_select").appendChild(optionElement);
    });
  }


async function vehicle() {
    function loaddata() {
      const newform = new FormData();
      newform.append("obj", "vehicle_display");
      return fetch("API/car.php", {
        method: "POST",
        body: newform,
        mode: "cors",
        credentials: "include"
      }).then(response => response.json());
    }
    const data = await loaddata();
    
    data.data.forEach(vehicle => {
        const optionElement = document.createElement("option");
        optionElement.value = vehicle.vname.toLowerCase();
        optionElement.text = vehicle.vname;
        document.getElementById("vehicle_select").appendChild(optionElement);
    });
}

async function tax() {
    function loaddata() {
      const newform = new FormData();
      newform.append("obj", "tax_display");
      return fetch("API/car.php", {
        method: "POST",
        body: newform,
        mode: "cors",
        credentials: "include"
      }).then(response => response.json());
    }
    const data = await loaddata();
    
    data.data.forEach(tax => {
        const optionElement = document.createElement("option");
        if(tax.tax_name[0]=='G' || tax.tax_name[0]=='g'){
        optionElement.value = tax.tax_percentage.toLowerCase();
        optionElement.text = tax.tax_name;
        document.getElementById("gst").appendChild(optionElement);
        }
    });
    data.data.forEach(tax => {
        const optionElement = document.createElement("option");
        if(tax.tax_name[0]=='c' || tax.tax_name[0]=='C'){
        optionElement.value = tax.tax_percentage.toLowerCase();
        optionElement.text = tax.tax_name;
        document.getElementById("cgst").appendChild(optionElement);
        }
    });
    data.data.forEach(tax => {
        const optionElement = document.createElement("option");
        if(tax.tax_name[0]=='I' || tax.tax_name[0]=='i'){
        optionElement.value = tax.tax_percentage.toLowerCase();
        optionElement.text = tax.tax_name;
        document.getElementById("igst").appendChild(optionElement);
        }
    });
  }

customer();
vehicle();
tax();





const inputIds = ['code', 'date', 'customer', 'vehicle', 'trip', 'period_start', 'period_end', 'visitor_name', 'km', 'extra_km', 'extra_hour', 'toll', 'parking', 'driver', 'night_hold', 'border_tax', 'airpoat', 'cgst', 'sgst', 'igst', 'tax'];
async function submit() {
    function loaddata() {
      const newform = new FormData();
      newform.append("obj", "displaycust");
      inputIds.forEach(id => {
        formData.append(id, document.getElementById(id).value);
      });
      return fetch("API/car.php", {
        method: "POST",
        body: newform,
        mode: "cors",
        credentials: "include"
      }).then(response => response.json());
    }
    const data = await loaddata();
    
    console.log(data)

  }

