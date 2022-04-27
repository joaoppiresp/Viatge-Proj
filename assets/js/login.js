$('form.login-ajax').on('submit', function(){

    //referencing the form
    var that = $(this),
        url = that.attr('action'),
        method = that.attr('method'),
        data = {};

    //gets only the parts of the form wth attr name
    that.find('[name]').each(function(index, value){
        var that = $(this),
            name =that.attr('name'),
            value = that.val();

        data[name] = value;
    });

    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(response){
            console.log("SUCCESS : " ,response);
        },
        error: function (e) {
            console.log("user not found, try again: ",e);
        }
    });


    return false;

    /*
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
    */
});