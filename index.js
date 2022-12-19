
window.addEventListener('scroll', handleScroll);
function handleScroll() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;  
    var scrolled = (winScroll / height) * 100;

    document.getElementById("progressBar").style.width = scrolled + "%";
}
$( ".scroll" ).scroll( 300 );

function popup() {
    document.querySelector("#toshow").style.display = "inline";
    document.querySelector("#tohid").style.display = "none";
}
