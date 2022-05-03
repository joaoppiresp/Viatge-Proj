$('form.register-ajax').on('submit', function(){

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
        type: method,
        data: data,
        success: function(response){

            if(response ==='"1"'){
                console.log("code: " ,response,", Success on insert!");
                window.location.replace('profile-page.php');
            }else if(response ==='"0"'){
                console.log("code: " ,response,", no success on insert!");
            }else if(response ==='"2"'){
                console.log("code: " ,response,", form not filled correctly!");
            }

        },
        error: function (e) {
            console.log("ERROR: ",e);
        }
    });
});