// Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Welcome to Imperial!") 
                    return true; 
                } 
            } 



            function showpassword() {
  var x = document.getElementById("txtNewPassword");
  var y = document.getElementById("txtConfirmPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
          }
if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
          }



}