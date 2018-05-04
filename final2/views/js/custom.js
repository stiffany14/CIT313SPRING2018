$("#signup").validate();
$("#matchPass").hide();
$("#addPostForm").validate();
$("#updateProfile").validate();

//check if the password values match
$("#btnSignUp").click(function() {
    if ($("#password").val() != $("#password2").val()) {
        $("#matchPass").show();
        event.preventDefault();
    }
});

$("#btnProfileUpdate").click(function() {
    if ($("#password").val() != $("#password2").val()) {
        $("#matchPass").show();
        event.preventDefault();
    }
});