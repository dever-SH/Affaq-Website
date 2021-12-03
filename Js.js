window.addEventListener('scroll', function () {
  let header = document.querySelector('nav');
  let windowPosition = window.scrollY > 0;
  header.classList.toggle('scrolling-active', windowPosition);
})

// this function take it from 
//(https://www.javascripttutorial.net/javascript-dom/javascript-toggle-password-visibility/) 'with some edits'
function showHidePass(eyeID, inputID) {
  const eye = document.getElementById(eyeID);
  const password = document.getElementById(inputID);
  eye.addEventListener('click', function () {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('bi-eye');
  }
  );
}

function blurr(Div1, Div2) {
  var x = document.getElementById(Div1);
  var y = document.getElementById(Div2);
  x.style.display = "block";
  y.style.filter = "blur(5px)";
  y.style.pointerEvents = "none";
}

function hideBlog(d1, d2) {
  d1.style.display = "none";
  d2.style.filter = "blur(0px)";
  d2.style.pointerEvents = "auto";
}

function hideSign() {
  x = document.getElementById("signinDiv");
  y = document.getElementById("blur");
  x.style.display = "none";
  y.style.filter = "blur(0px)";
  y.style.pointerEvents = "auto";
  x.reset();
}

function showHide(d1, d2) {
  x = document.getElementById(d1); x2 = document.getElementById(d2);
  x.style.display = "block";
  x2.style.display = "none";
  if (d1 == "imgs")
    background('imgT', 'tripT');
  else background('tripT', 'imgT');
}

function background(d1, d2) {
  document.getElementById(d1).style.color = "#9aaebb";
  document.getElementById(d2).style.color = "black";
}


document.write('<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>');

function info() {
  swal("عذرًا", "لازلنا نعمل على هذه الصفحة", "info");
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/*Read more function*/
//This function take it from 'with some edits'
//https://stackoverflow.com/questions/66040167/read-more-read-less-button-when-clicking-on-read-less-it-loses-its-position
function readMore(city) {
  let desc = document.querySelector(`.article[data-city="${city}"] .desc`);
  let dots = document.querySelector(`.article[data-city="${city}"] .dots`);
  let more = document.querySelector(`.article[data-city="${city}"] .more`);
  let button = document.querySelector(`.article[data-city="${city}"] .myBtn`);
  let image = document.querySelector(`.article[data-city="${city}"] .myImage`);
  let Like = document.querySelector(`.article[data-city="${city}"] .like`);
  let Dislike = document.querySelector(`.article[data-city="${city}"] .dislike`);
  if (dots.style.display === "none") {
    desc.style.display = "inline";
    dots.style.display = "inline";
    button.textContent = "أقرأ المزيد";
    more.style.display = "none";
    image.style.display = "none"; //هنا القلب يختفي لين يضغط أقرأ المزيد 
  } else {
    desc.style.display = "none";
    dots.style.display = "none";
    button.textContent = " أقــل";
    more.style.display = "block";
    image.style.display = "inline";
  }
}

//----------- Like function-----------------------
function changeHeart(city) {
  let image = document.querySelector(`.article[data-city="${city}"] .myImage`);
  if (image.src.match("unlike")) {
    image.src = "Picture/like.png";
  } else {
    image.src = "Picture/unlike.png";
  }
}