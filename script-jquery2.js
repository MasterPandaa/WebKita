function validateForm() {

    var email = $("#email").val();
    var password = $("#password").val();

    if (email === "" || password === "") {
        return false;
    }
}

var passwordInput = $("#password");

function togglePassword(event, inputElement, eyeIcon) {
    event.preventDefault();

    if (inputElement.attr("type") === "password") {
        inputElement.attr("type", "text");
        eyeIcon.removeClass("fa-eye");
        eyeIcon.addClass("fa-eye-slash");
    } else {
        inputElement.attr("type", "password");
        eyeIcon.removeClass("fa-eye-slash");
        eyeIcon.addClass("fa-eye");
    }
}


$("#pass-toggle-btn").on("click", function(event) {
    togglePassword(event, $("#password"), $("#pass-toggle-btn"));
});

var page = window.location.pathname.split("/").pop();

$(function() {

  $(".navigation li a").on("click", function() {
    $(".navigation li").removeClass("active");
    $(this).parent().addClass("active");
  });

  if(page == "home.html") {
    $(".navigation li").eq(0).addClass("active"); 
  }

  if(page == "index2.html") {
    $(".navigation li").eq(1).addClass("active");
  }

  if(page == "index.html") {
    $(".navigation li").eq(2).addClass("active");
  }

});