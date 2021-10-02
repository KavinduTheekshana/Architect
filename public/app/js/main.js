// ----------- Gallery Show and Hide ---------------
function myGallery() {
  var val = 0;
  var x = document.getElementById("second-menu-gallery");
  if ($("#second-menu-gallery").hasClass("d-none")) {
    $("#second-menu-gallery").removeClass("d-none");
    $("#second-menu-about").addClass("d-none");
    $("#second-menu-gallery-content").addClass("d-none");
    $("#second-menu-awards").addClass("d-none");
    $("#gallery-menu").addClass("active");
    $("#awards-menu").removeClass("active");
    // $("#bottum").addClass("d-none");
    // $("#middle").addClass("full-height");
  } else {
    $("#second-menu-gallery").addClass("d-none");
    $("#second-menu-about").removeClass("d-none");
    $("#second-menu-gallery-content").removeClass("d-none");
    // $("#second-menu-awards").removeClass("d-none");
    $("#gallery-menu").removeClass("active");
    // $("#bottum").removeClass("d-none");
    // $("#middle").removeClass("full-height");
  }
}

function myGalleryMob() {
  if ($("#sub-gallery").hasClass("d-none")) {
    $("#sub-gallery").removeClass("d-none");
    $("#sub-awards").addClass("d-none");
  }else{
    $("#sub-gallery").addClass("d-none");
  }
}

// ----------- Awards Show and Hide ---------------
function myAwards() {
  var val = 0;
  var x = document.getElementById("second-menu-awards");
  if ($("#second-menu-awards").hasClass("d-none")) {
    $("#second-menu-awards").removeClass("d-none");
    $("#second-menu-about").addClass("d-none");
    $("#second-menu-gallery-content").addClass("d-none");
    $("#awards-menu").addClass("active");
  } else {
    $("#second-menu-awards").addClass("d-none");
    $("#second-menu-about").removeClass("d-none");
    $("#second-menu-gallery-content").removeClass("d-none");
    $("#awards-menu").removeClass("active");
  }
  if (!$("#second-menu-gallery").hasClass("d-none")) {
    $("#second-menu-gallery").addClass("d-none");
    $("#gallery-menu").removeClass("active");
  }
}

function myAwardsMob() {
  if ($("#sub-awards").hasClass("d-none")) {
    $("#sub-awards").removeClass("d-none");
    $("#sub-gallery").addClass("d-none");
  }else{
    $("#sub-awards").addClass("d-none");
  }
}

// ----------- Header ----------------
$(document).ready(function () {
  $("#navbar-toggler-menu").click(function (event) {
    // $('.navbar-demo').toggleClass('open-nav');
    $(".navbar-demo").addClass("open-nav");
    $("#navbar-toggler-menu").addClass("d-none");
    $("#header").removeClass("d-none-custom");
    $("#navbar-toggler-times").removeClass("d-none");
  });

  $("#navbar-toggler-times").click(function (event) {
    // $('.navbar-demo').toggleClass('open-nav');
    $(".navbar-demo").removeClass("open-nav");
    $("#navbar-toggler-menu").removeClass("d-none");
    $("#navbar-toggler-times").addClass("d-none");
    $("#header").addClass("d-none-custom");
  });
});

function SplitText(node) {
  var text = node.nodeValue.replace(/^\s*|\s(?=\s)|\s*$/g, "");

  for (var i = 0; i < text.length; i++) {
    var letter = document.createElement("span");
    letter.style.display = "inline-block";
    letter.style.position = "absolute";
    letter.appendChild(document.createTextNode(text.charAt(i)));
    node.parentNode.insertBefore(letter, node);

    var positionRatio = i / (text.length - 1);
    var textWidth = letter.clientWidth;

    var indent = 100 * positionRatio;
    var offset = -textWidth * positionRatio;
    letter.style.left = indent + "%";
    letter.style.marginLeft = offset + "px";
  }

  node.parentNode.removeChild(node);
}

function SplitText2(node) {
  var text = node.nodeValue.replace(/^\s*|\s(?=\s)|\s*$/g, "");

  for (var i = 0; i < text.length; i++) {
    var letter = document.createElement("span");
    letter.style.display = "inline-block";
    letter.style.position = "absolute";
    letter.appendChild(document.createTextNode(text.charAt(i)));
    node.parentNode.insertBefore(letter, node);

    var positionRatio = i / (text.length - 1);
    var textWidth = letter.clientWidth;

    var indent = 100 * positionRatio;
    var offset = -textWidth * positionRatio;
    letter.style.left = indent + "%";
    letter.style.marginLeft = offset + "px";
  }

  node.parentNode.removeChild(node);
}

function SplitText3(node) {
  var text = node.nodeValue.replace(/^\s*|\s(?=\s)|\s*$/g, "");

  for (var i = 0; i < text.length; i++) {
    var letter = document.createElement("span");
    letter.style.display = "inline-block";
    letter.style.position = "absolute";
    letter.appendChild(document.createTextNode(text.charAt(i)));
    node.parentNode.insertBefore(letter, node);

    var positionRatio = i / (text.length - 1);
    var textWidth = letter.clientWidth;

    var indent = 100 * positionRatio;
    var offset = -textWidth * positionRatio;
    letter.style.left = indent + "%";
    letter.style.marginLeft = offset + "px";
  }

  node.parentNode.removeChild(node);
}
function SplitText4(node) {
  var text = node.nodeValue.replace(/^\s*|\s(?=\s)|\s*$/g, "");

  for (var i = 0; i < text.length; i++) {
    var letter = document.createElement("span");
    letter.style.display = "inline-block";
    letter.style.position = "absolute";
    letter.appendChild(document.createTextNode(text.charAt(i)));
    node.parentNode.insertBefore(letter, node);

    var positionRatio = i / (text.length - 1);
    var textWidth = letter.clientWidth;

    var indent = 100 * positionRatio;
    var offset = -textWidth * positionRatio;
    letter.style.left = indent + "%";
    letter.style.marginLeft = offset + "px";
  }

  node.parentNode.removeChild(node);
}

function Justify() {
  var TEXT_NODE = 3;
  var elem = document.getElementById("character_justify");
  var elem2 = document.getElementById("character_justify2");
  var elem3 = document.getElementById("character_justify3");
  var elem4 = document.getElementById("character_justify4");
  elem = elem.firstChild;
  elem2 = elem2.firstChild;
  elem3 = elem3.firstChild;
  elem4 = elem4.firstChild;

  while (elem) {
    var nextElem = elem.nextSibling;

    if (elem.nodeType == TEXT_NODE) SplitText(elem);
    SplitText2(elem2);
    SplitText3(elem3);
    SplitText4(elem4);

    elem = nextElem;
  }
}



// ---------------- gallery Mobile----------------

// var total=0; 
// $(window).load(function() {
//   $('.thumb').each(function() {
//     total += $(this).width();
//   });
// });
// console.log(screen.width);

// console.log(window.innerWidth);





// $(document).ready(function () {
//   var width = $(window).width();
//   console.log(width);
//   if (width<=769) {
//     $(".swiper-slide").removeClass("height");
//   } else {
//     $(".swiper-slide").addClass("height");
//   }
// });




// window.addEventListener("resize", () => {
//     var width = $(window).width();
// if (width<=769) {
//   $(".swiper-slide").removeClass("height");
// } else {
//   $(".swiper-slide").addClass("height");
// }
// });