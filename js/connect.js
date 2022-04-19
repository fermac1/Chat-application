$(document).ready(function(){
    $('#connect').click(function(){
        var inputConnect = document.getElementById('input_connect').value;
    
    if( inputConnect !== ""){
        // document.addEventListener('DOMContentLoaded', function() {
        // var elems = document.querySelectorAll('.modal');
        // var instances = M.Modal.init(elems);
        $('.modal').modal();
//   });
}else{
        alert('empty request! please input a valid connection key');
    
    }
    })

});