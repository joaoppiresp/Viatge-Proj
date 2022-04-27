$(document).ready(function(){

    $uemail = localStorage.getItem('email');

    $.ajax({
        url: 'assets/php/profile.php',
        type: POST,
        data: data,
        success: function(response){
            if(response ==='"0"'){
                console.log("code: " ,response,", query didnt work");
            }else {
                console.log("user data: " ,response,", Success!");
                $udata = response;
                
            }
        },
        error: function (e) {
            console.log("ERROR: ",e);
        }
    });

    return false;
});