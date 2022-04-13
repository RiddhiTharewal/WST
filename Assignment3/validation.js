function validateEmail(email) {
    let res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return res.test(email);
}
function validateForm() {
    let first_name = document.forms["myForm"]["first_name"].value;
    let last_name = document.forms["myForm"]["last_name"].value;
    let user_name = document.forms["myForm"]["user_name"].value;
    let email = document.forms["myForm"]["email_id"].value;
    let state = document.forms["myForm"]["state"].value;
    let country = document.forms["myForm"]["country"].value;
    if (first_name.length < 2) {
      alert("First Name should have minimum length 2!");
      return false;
    }
    else if (last_name.length < 2) {
        alert("Last Name should have minimum length 2!");
        return false;
    }
    else if (user_name.length < 4) {
        alert("User name should have minimum length 4!");
        return false;
    }
    else if (state.length < 2) {
        alert("State should be have minimum length 2!");
        return false;
    }
    else if (country.length < 2) {
        alert("Country Name should be have minimum length 2!");
        return false;
    }
    else if(validateEmail(email)) {
        return true;
    }
    else{
        alert("Email id invalid");
        return false;
    }
}