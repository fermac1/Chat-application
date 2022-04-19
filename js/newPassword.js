var errorHide = document.getElementById("errorAlert");
errorHide.style.display = 'none';  
function validation() {
    var x = document.getElementById("old_password").value;
    var y = document.getElementById("new_password").value;
    var z = document.getElementById("confirm_newPassword").value;
    let error_msg;

    if (x=="" && y=="" && z==""){
        errorHide.style.display = 'block';
        error_msg = '<i class="material-icons icon">error</i> &nbsp;form must be filled out';
        errorHide.innerHTML = error_msg;
        return false;
    }
    if (x=="" || y =="" || z ==""){
        error_msg = '<i class="material-icons icon">error</i> &nbsp;fill required field';
        errorHide.innerHTML = error_msg;
        return false;
    }
    if (y !== z){
        error_msg ="*passwords does not match";
        document.getElementById("error2").innerHTML = error_msg;
     return false;
    }
}