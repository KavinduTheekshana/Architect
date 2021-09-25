// ----------- Gallery Show and Hide ---------------
function myFunction() {
    var val = 0;
    var x = document.getElementById('second-menu-gallery');
    if ($( "#second-menu-gallery" ).hasClass( "d-none" )) {
        $("#second-menu-gallery").removeClass("d-none");
        $("#gallery-menu").addClass("active");
      } else{
        $("#second-menu-gallery").addClass("d-none");
        $("#gallery-menu").removeClass("active");
      }
  }