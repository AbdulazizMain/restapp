let menu = document.querySelector(".menu");
let bar = document.querySelector(".rec_menu");


menu.addEventListener("click",()=>{
    if(bar.style.display === "none"){
        bar.style.display = "block";
    }
});
function openNav() {
    document.getElementById("mySidenav").style.left = "0";
    document.getElementById("clos").style.width = "100%";
    document.getElementById("clos").style.height = "100vh";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.left = "-100%";
    document.getElementById("clos").style.width = "0";
    document.getElementById("clos").style.height = "0";
  }
