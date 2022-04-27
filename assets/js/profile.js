$(document).ready(function(){

    

    $.ajax({
        url: url,
        type: method,
        data: data,
        success: function(response){

            if(response ==='"1"'){
                console.log("code: " ,response,", Success!");
                window.location.replace('index.php');
            }else if(response ==='"0"'){
                console.log("code: " ,response,", user not found!");
            }else if(response ==='"2"'){
                console.log("code: " ,response,", form not filled correctly!");
            }

        },
        error: function (e) {
            console.log("ERROR: ",e);
        }
    });

    return false;
});