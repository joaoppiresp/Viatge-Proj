$(document).ready(function () {
    $("#btnSubmit").click(function (event) {

        // Get form
        var form = $('#loginForm')[0];
 
        // FormData object 
        var data = new FormData(form);
 
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
                console.log("SUCCESS : " ,data);
                $("#btnSubmit").prop("disabled", false);
                //window.location.replace("index.php");
            },
            error: function (e) {
                console.log("user not found, try again: ",e);
                //window.location.reload();
                $("#btnSubmit").prop("disabled", false);
            }
        });
    });
});