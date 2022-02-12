$(document).ready(function () {



    $("#modal_sign_in_button").on("click", function (a) {
        a.preventDefault();

        var b = !1,
            c = $("#modal_email").val();
            d = $("#modal_password").val();

        if ($("#modal_email, #modal_password").click(function () {
            $(this).removeClass("error_input")
        }), 0 == c.length) {
            var b = !0;
            $("#modal_email").addClass("error_input");
        } else $("#modal_email").removeClass("error_input");

        if (0 == d.length) {
            var b = !0;
            $("#modal_password").addClass("error_input");
        } else $("#modal_password").removeClass("error_input");

        0 == b && ($("#modal_sign_in_button").attr({
            disabled: "true",
            value: "Creating Account..."
        }), $.ajax(
            {
                url: "includes/loginUser.php",
                method: "post",
                data: $("#loginForm").serialize(),
                dataType: "text",
                failed: function () {
                    $("#mail_fail").fadeIn(500);
                    $("#modal_sign_in_button").removeAttr("disabled").attr("value", "Login");
                },
                success: function (data) {
                    if (data == 1) {
                        $("#mail_success").fadeIn(500);
                        setInterval(function () {
                            window.location = 'http://localhost/centralplay/dashboard-home.php';
                        }, 1000);
                    } else {
                        $("#mail_fail").fadeIn(500);
                        $("#modal_sign_in_button").removeAttr("disabled").attr("value", "Login");
                    }

                }
            }
        ));
    })


    $("#password_reset_button").on("click", function (a) {
        a.preventDefault();

        var b = !1,
            c = $("#email_reset_password").val();

        if ($("#email_reset_password").click(function () {
            $(this).removeClass("error_input")
        }), 0 == c.length) {
            var b = !0;
            $("#email_reset_password").addClass("error_input");
        } else $("#email_reset_password").removeClass("error_input");


        0 == b && ($("#password_reset_button").attr({
            disabled: "true",
            value: "Sending Password Reset Email..."
        }), $.ajax(
            {
                url: "includes/passwordReset.php",
                method: "post",
                data: $("#password_reset_form").serialize(),
                dataType: "text",
                failed: function () {
                    $("#mail_fail").fadeIn(500);
                    $("#password_reset_button").removeAttr("disabled").attr("value", "Password Reset");
                },
                success: function (data) {
                    if (data == 1) {
                        $("#mail_success").fadeIn(500);
                        $("#password_reset_button").attr({
                            disabled: "true",
                        });
                    } else {
                        $("#mail_fail").fadeIn(500);
                        $("#password_reset_button").removeAttr("disabled").attr("value", "Reset Password");
                    }
                }
            }
        ));
    })


    $("#password_update_button").on("click", function (a) {
        a.preventDefault();

        var b = !1,
            c = $("#old_password").val();
            d = $("#new_password").val();

        if ($("#old_password").click(function () {
            $(this).removeClass("error_input")
        }), 0 == c.length) {
            var b = !0;
            $("#old_password").addClass("error_input");
        } else $("#old_password").removeClass("error_input");

        if (0 == d.length) {
            var b = !0;
            $("#new_password").addClass("error_input");
        } else $("#new_password").removeClass("error_input");


        0 == b && ($("#password_update_button").attr({
            disabled: "true",
            value: "Updating Password ..."
        }), $.ajax(
            {
                url: "includes/passwordUpdate.php",
                method: "post",
                data: $("#password_update_form").serialize(),
                dataType: "text",
                failed: function () {
                    $("#mail_fail").fadeIn(500);
                    $("#password_update_button").removeAttr("disabled").attr("value", "Reset Password");
                },
                success: function (data) {
                    if (data == 1) {
                        $("#mail_success").fadeIn(500);
                        $("#password_update_button").remove()
                    } else {
                        $("#mail_fail").fadeIn(500);
                        $("#password_reset_button").removeAttr("disabled").attr("value", "Reset Password");
                    }

                }
            }
        ));
    })

})