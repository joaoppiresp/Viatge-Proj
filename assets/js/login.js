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
        type: method,
        data: data,
        success: function(response){
            console.log("SUCCESS : " ,response);
        },
        error: function (e) {
            console.log("user not found, try again: ",e);
        }
    });

    return false;
});