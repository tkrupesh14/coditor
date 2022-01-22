// file menu
const file = document.querySelector(".file");
const fileMenu =     document.querySelector(".file-menu");

file.addEventListener('dblclick', function(e) {
   e.preventDefault();
   let topPosition = e.clientY;
   let leftPosition = e.clientX;
   fileMenu.classList.add("active");
   fileMenu.style.left = leftPosition + "px";
   fileMenu.style.top = topPosition + "px";
  }, false);
   window.addEventListener("click", () => {
fileMenu.classList.remove("active");
   })

//    edit menu
const edit = document.querySelector(".edit");
const editMenu =     document.querySelector(".edit-menu");

edit.addEventListener('dblclick', function(e) {
   e.preventDefault();
   let topPosition = e.clientY;
   let leftPosition = e.clientX;
   editMenu.classList.add("active");
   editMenu.style.left = leftPosition + "px";
   editMenu.style.top = topPosition + "px";
  }, false);
   window.addEventListener("click", () => {
editMenu.classList.remove("active");
   })

 
