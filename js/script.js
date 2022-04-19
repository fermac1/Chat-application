

//password visibility 
  var icon = document.getElementById('icon');
  const inputpass = document.getElementById('password');
    var clicked = 0;
  icon.addEventListener('click', function (e) {
    e.preventDefault();
 if(clicked == 0){
    this.innerHTML='visibility_off';
        clicked = 1;
}
else{
    this.innerHTML='visibility';
    clicked = 0;
}
    const type = inputpass.getAttribute('type');
 if(type === "password"){
    inputpass.setAttribute('type', 'text');
}
else{
    inputpass.setAttribute('type', 'password');

}
    
});

//splash page
const container_modal = document.getElementById('container_modal');
const logo = document.getElementById('logo');
const svg = document.getElementById('svg');

document.addEventListener('DOMContentLoaded', function(e){
    setTimeout(function(){
        container_modal.classList.add('display-none');
    }, 4000)
})

document.addEventListener('DOMContentLoaded', function(e){
    setTimeout(function(){
        logo.style.display = "none"
        svg.style.display = "none"

    }, 3500)
})



//confirm password visibility
  const confirm_icon = document.getElementById('confirm_icon');
  const confirm_pass = document.getElementById('confirm_password');
    
  confirm_icon.addEventListener('click', function (e) {
    e.preventDefault();
if(clicked == 0){
       this.innerHTML='visibility_off';
           clicked = 1;
   }
   else{
       this.innerHTML='visibility';
       clicked = 0;
   }
    const type = confirm_pass.getAttribute('type');
 if(type === "password"){
    confirm_pass.setAttribute('type', 'text');
}
else{
    confirm_pass.setAttribute('type', 'password');

}
    
});

//error message
var errorHide = document.getElementById("errorAlert");
errorHide.style.display = 'none';    
function validation() {
  var x = document.getElementById("email").value;
  var y = document.getElementById("password").value;
  var z = document.getElementById("confirm_password").value;
  var check = document.getElementById("checkbox");
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
  if (!check.checked){
      error_msg ="*accept terms and condition";
      document.getElementById("cError").innerHTML = error_msg;
      return false;
  }
}





