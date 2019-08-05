window.addEventListener('load', function(){
  // Get the button that opens the modal
  var btn = document.querySelectorAll('.myBtn');

  btn.forEach(function(element){
    element.addEventListener('click', function(event){
      this.parentElement.parentElement.nextElementSibling.style.display="block";
    })
  })


  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

})

// When the user clicks anywhere outside of the modal, close it
  var modales = document.querySelectorAll('.myModal');
  modales.forEach(function(element){
    var close = element.childNodes[5].firstElementChild;
    close.addEventListener('click', function(event){
      if(element.hasAttribute('style')){
        element.removeAttribute("style");
      }
    })
  })

// function bajarDropdown(){
//   var drop = document.getElementById(action)
//   var dropContent = document.querySelector('.dropdown-content')
//   dropContent.style.display = 'block'
//   window.addEventListener('click', function(){
//
//   })
// }
