
// Activates buttons for movement
$(document).ready(function () {
    $("#button-sign-up").click(function () {
        $("#slider").animate({
            right: "+=423px"
        }, 700);
    });
});

$(document).ready(function () {
    $("#button-login").click(function () {
        $("#slider").animate({
            right: "-=423px"
        }, 700);
    });
});




// Changes active field background
$(document).ready(function () {
    $(document).on('mousemove', function (e) {
        $('#cursor').css({
            left: e.pageX,
            top: e.pageY
        });
    })
});



// Hides and shows LOGIN and SIGN UP buttons
function showhide(id) {
    var divid = document.getElementById(id);
    var divs = document.getElementsByClassName('hide');
    var showElement = true;
    if (divid.style.display === 'block') {
        showElement = false;
    }
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
    }
    if (showElement) {
        divid.style.display = 'block';
    }
    return false;
}


