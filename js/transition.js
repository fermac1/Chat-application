// for the enter key 
// const searchInput = document.getElementById('searchInput');
// const searchBtn2 = document.getElementById('searchBtn2');
// searchInput.addEventListener("keyup", function(event) {
//   if (event.keyCode === 13) {
//    event.preventDefault();
//    searchBtn2.click();
//   }
// });

// For the drop down Tab
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
  });
  
  const contact = document.getElementById('contact');
  const addBtn = document.getElementById('addBtn');
  const svg = document.getElementById('svg');
  
  // addBtn.addEventListener('click', function(e){
  //   svg.style.display = "none";
  //   contact.style.display = "block";
  // })
  
  
  
  let connectmodal = document.getElementById('connectmodal');
  
  function connect_func(){
    connectmodal.style.display = "flex";
  
  
    window.onclick = function(event) {
      if (event.target == connectmodal) {
        connectmodal.style.display = "none";
      }
    }
  }
  
  
  
  // addBtn.addEventListener('click', function(e){
  //     connectmodal.style.display = "flex";
  // })
  
  // window.onclick = function(event) {
  //     if (event.target == connectmodal) {
  //       connectmodal.style.display = "none";
  //     }
  //   }
  
  