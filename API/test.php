<script>
async function fetchData() {
    const newform = new FormData();
    let response = await fetch("https://unextenuated-membra.000webhostapp.com/API/test.php", {
      method: "POST",
      body: newform,   
      mode: "no-cors",
      credentials: "include",
      cache:"default",
    
    });
  
    let data =await response; 
     
    console.log(data['message'])
  }
  fetchData();
</script>