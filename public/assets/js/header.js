var showmenu = document.querySelector("#mbmenu-show");
document.querySelector("#mbmenu-icon").addEventListener('click', function(event) {
    if(showmenu.style.display=="block"){
        showmenu.style.display="none";
    }
    else{
        showmenu.style.display="block";
    }
});
var menus = document.querySelectorAll("#mbmenu-show li a");
menus.forEach((val,index)=>{
  val.addEventListener('click',function(){
    if(showmenu.style.display=="block"){
        showmenu.style.display="none";
    }
    else{
        showmenu.style.display="block";
    }
  })
});