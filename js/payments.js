$(document).ready(function () {

    $("#btnMakePayment").on("click",
        function (){
        console.log("clicked payment");

            $.ajax(
                {
                    url: "payments/payment.php",
                    method: "post",
                    data: {payment: "payment"},
                    dataType: "text",
                    failed: function () {
                      console.log("Failed to make payment");
                    },
                    success: function (data) {
                        if(data ==1) {
                            // TODO::IMPLEMENT USER PAYMENT VERIFICATION EMAIL
                            console.log(data)
                           window.location = 'http://localhost/centralplay/dashboard-home.php';
                        }else {
                            console.log(data);
                        }

                    }
                }
            )
    })

    $("#btnVerifyEmail").on("click",
        function (){

            console.log("clicked verification");

            $.ajax(
                {
                    url: "includes/emailVerification.php",
                    method: "post",
                    data: {verify_email: "email"},
                    dataType: "text",
                    failed: function () {
                        console.log("Failed to make payment");
                    },
                    success: function (data) {
                        if(data == 1){
                            console.log(data);
                            // TODO::IMPLEMENT USER EMAIL VERIFICATION EMAIL
                            // window.location = 'http://localhost/centralplay/email-verification-confrimation.php';
                        }else {
                            console.log(data);
                        }

                    }
                }
            )


        });
})