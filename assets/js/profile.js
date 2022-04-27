$(document).ready(function(){

    $uemail = localStorage.getItem('email');

    $.ajax({
        url: 'assets/php/profile.php',
        type: POST,
        data: $uemail,
        success: function(response){
            if(response ==='"0"'){
                console.log("code: " ,response,", query didnt work");
            }else {
                console.log("user data: " ,response,", Success!");
                $udata = response;
                $name = document.getElementById('profile-name').innerHTML.replace(response[1]);
                $role = document.getElementById('profile-role').innerHTML.replace(response[4]);
            }
        },
        error: function (e) {
            console.log("ERROR: ",e);
        }
    });

    return false;
});