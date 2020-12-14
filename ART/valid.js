const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');


function validateForm() 
{
    var x = document.forms["form"]["name"].value;
    if (x == "") {
      document.getElementById('user').innerHTML = "* Enter username";
      return false;
    }
    if(x.length <= 2){
        document.getElementById('user').innerHTML = "* Enter atleast 3 characters";
      return false;
    }
    if(!isNaN(x)){
        document.getElementById('user').innerHTML = "* Usernamename cannot have only numbers";
      return false;
    }
    if(x.length <= 2){
        document.getElementById('user').innerHTML = "* Enter atleast 3 characters";
      return false;
    }

    var x = document.forms["form"]["email"].value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    if (x == "") {
      document.getElementById('emailid').innerHTML = "* Please enter email ID";
      return false;
    }
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
      document.getElementById('emailid').innerHTML = "* Please enter correct email ID";
      return false;
    }
    var x = document.forms["form"]["password"].value;
    if (x == "") {
      document.getElementById('pass').innerHTML = "* Enter Password";
      return false;
    }
    if(x.length <= 5){
        document.getElementById('pass').innerHTML = "* Enter atleast 6 characters";
      return false;
    }
    return( true );
}
