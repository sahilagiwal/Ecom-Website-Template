const btn=document.querySelector(".loginbtn");

btn.onclick=function (){
    const email=document.querySelector(".email");
    const pass=document.querySelector(".pass");
    $.ajax({
        url: "../admin/functions/login.php",
        type: "POST",
        data: {
            email: email.value,
            password: pass.value,

        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.status==1){
                window.location.replace("dashboard.php");
            }
            else if(dataResult.status==0){
                alert("Wrong Email or password");
            }
            else{
                alert("Error occured ! Please contact Developer");
            }

        }
    });


}