$(document).ready(function () {
    $("#btnSubmit").click(function (event) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
        // FormData object 
        var data = new FormData($('#loginForm')[0]);
        // disabled the submit button
        $("#btnSubmit").prop("disabled", true);
 
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "assets/php/authentication/login.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data){

                if(data === 0){
                    console.log("user not found, try again");
                    window.location.reload();
                }else{
                    $("#btnSubmit").prop("disabled", false);
                    console.log("SUCCESS : ");
                    //window.location.replace("index.php");
                }

            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#btnSubmit").prop("disabled", false);
            }
        });
    });
});