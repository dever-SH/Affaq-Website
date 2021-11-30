window.addEventListener('scroll',function(){
    let header= document.querySelector('nav');
    let windowPosition = window.scrollY > 0 ;
    header.classList.toggle('scrolling-active',windowPosition);
})
document.write('<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>');

function info(){
    swal("عذرًا", "لازلنا نعمل على هذه الصفحة", "info");  
}