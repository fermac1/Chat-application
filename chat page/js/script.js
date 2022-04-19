// For the drop Down menu
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems);

  
  });

//   var more_vert = document.getElementById('more_vert');
//  more_vert.addEventListener('click', function(e){
//   more_vert.remove();
//  })
  


function sending(){
    const main = document.getElementById('messages');

    const mtype = document.getElementById('mtype').value;
    const mlist = document.createElement('ul');
    const  mBox = document.createElement('li');
    let  para = document.createElement('p');
    let simage = document.createElement('img');

    para.setAttribute('class', 'para');
    simage.setAttribute('src', '../images/tbw.jpg');
    simage.setAttribute('class', 'p-img');
    mBox.setAttribute('class', 'mBox');

    para.innerHTML = mtype;
    mBox.appendChild(para);
    mBox.appendChild(simage);
    mlist.appendChild(mBox);
   
    
    // this is to make sure that once u click the send button
    // when there is nothing in the imput box, it wont create anything
    if(document.getElementById('mtype').value == "" ||
    document.getElementById('mtype').value ==" "){
    const mBox = "";
  }
    // this it to create the list once all conditons are met
    else{
      // main.appendChild(mlist);
        main.insertBefore(mlist, main.firstChild);
    }


      // this is to empty the input box when you have clicked the send button. 
    document.getElementById('mtype').value ="";

 }

 // for the enter key 
 let inputmtype = document.getElementById('mtype');
inputmtype.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("sendBtn").click();
  }
});




 
//  const incomingmBox = document.createElement('div');
const main = document.getElementById('messages');
const mlist2 = document.createElement('ul');
 const incomingmBox = document.createElement('li');
 const para2 = document.createElement('p');
 let simage2 = document.createElement('img');



 mlist2.setAttribute('class', 'mlist2');
 para2.setAttribute('class', 'para2');
 incomingmBox.setAttribute('class','incomingmBox');
 simage2.setAttribute('class', 'p-img2');
 simage2.setAttribute('src', '../images/tbw.jpg');


 incomingmBox.appendChild(simage2);
 incomingmBox.appendChild(para2);
 mlist2.appendChild(incomingmBox);

//  message.appendChild(mlist2);
 main.insertBefore(mlist2, main.firstChild);


 
para2.innerHTML = 'hellohellohellohellohellohellohellohellohellohellohellohello';




