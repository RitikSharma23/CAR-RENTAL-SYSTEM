async function fetchData() {
    const newform = new FormData();
    newform.append("obj", "check_auth");
    let response = await fetch("http://localhost/test.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include",
      cache:"default",
    
    });
  
    let data = await response.json();
  
    console.log(data.message)
  }
  fetchData();

  