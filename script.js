$('#menu-btn').click(function(){
    $('nav .navigation ul').addClass('active')
});
$('#menu-close').click(function(){
    $('nav .navigation ul').removeClass('active')
});

/* JavaScript code for active menu item */
var navItems = document.querySelectorAll("nav ul li a");

for(var i = 0; i < navItems.length; i++) {
if(navItems[i].href === window.location.href) {
    navItems[i].className = "active";
}
}

