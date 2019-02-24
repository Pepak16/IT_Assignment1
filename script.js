//function that checks whether all fields live up to specific constraints
function checkFields() {

    //variables initializes input from fields
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var passwordConfirm = document.getElementById("confirm_password").value;
    //var phone = document.getElementById("phone").value;
    //var email = document.getElementById("email").value;
    //var zip = document.getElementById("zip").value;
    
    var passwordConstraint = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/g;
    if (password === passwordConfirm) {
        if (passwordConstraint.test(password)) {
            return true;
        } else {
            alert("Please check field constraints and try again");
            return false;
        }
    } else {
        alert("Please check field constraints and try again");
        return false;
    }
}