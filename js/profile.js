let changeImg = document.getElementById('changeImg');
let modal = document.getElementById('modal');

changeImg.addEventListener('click', function(e){
    modal.style.display = "flex";
})

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = null;
    }
  }





const profile_photo = document.getElementById('input_profile_photo');
const cover_photo = document.getElementById('input_cover_photo');
const preview_content = document.getElementById('preview_content');
const preview_image1 = document.getElementById('cover_photo');
const preview_modal = document.getElementById('preview_modal');
const preview_image2 = document.getElementById('profile_photo');


cover_photo.addEventListener('click', function(e){
  preview_modal.style.display = "flex";
      modal.style.display = "none";
    preview_image2.style.display = "none";

  })



cover_photo.addEventListener("change", function(){
  const file = this.files[0];

  if (file) {
     const reader = new FileReader();

     preview_image1.style.display = "block";
     preview_image2.style.display = "none";

     reader.addEventListener("load", function() {
      preview_image1.setAttribute("src", this.result);
     })
    
     reader.readAsDataURL(file); 
      

  }
  else{
    preview_image1.style.display = null;
     
  }

})


  


profile_photo.addEventListener("change", function(){
  const file = this.files[0];

  if (file) {
     const reader = new FileReader();

     preview_image2.style.display = "block";
     preview_image1.style.display = "none";

     reader.addEventListener("load", function() {
      preview_image2.setAttribute("src", this.result);
     })
    
     reader.readAsDataURL(file); 
      

  }
  else{
    preview_image2.style.display = null;
     
  }
})

profile_photo.addEventListener('click', function(e){
  preview_modal.style.display = "flex";
  modal.style.display = "none";
  preview_image1.style.display = "none";

})



let cancel = document.getElementById('cancel');
function cancelFunc(){
     preview_modal.style.display = null;

}
