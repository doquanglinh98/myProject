var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

// function myFunction() {
   
//     document.write('<button >MUA VÉ </button>');
// }
// function clearCoor() {
   
//     document.write(' <h4>Wreck it ralph 2-Phá đảo thế giới ảo</h4> ');
//  }


// form login
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// var modal = document.getElementById('formCreate');

// create account
// var modal1 = document.getElementById('id02');
// var modal1 = document.getElementById('formCreate');

// window.onclick = function(event) {
//     document.getElementById("id01").style.display="none";

//     if (event.target == modal1) {
//         modal.style.display = "none";
//     }
// }
// document.getElementById("formCreate").innerHTML = 
// "The full URL of this page is:<br>" + window.location.href;
// function openFun() {
//     window.open("http://localhost:8013/BookingCinema/formCreate.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
// }
var modal2 = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}