var showmenu = document.querySelector("#mbmenu-show");
document.querySelector("#mbmenu-icon").addEventListener('click', function(event) {
    if(showmenu.style.display=="block"){
        showmenu.style.display="none";
    }
    else{
        showmenu.style.display="block";
    }
});
6