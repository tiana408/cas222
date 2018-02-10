//HAMBURGER MENU 
$(document).ready(function() {
        $('.menu').click(function() {
                $('ul').toggleClass('active');
                        })
                      })

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');

/* INTERACTIVE PHOTOS */
$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);