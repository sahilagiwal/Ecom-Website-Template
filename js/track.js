const email=document.querySelector("#emailft");
const ordernum=document.querySelector("#oft");
const trackbtn=document.querySelector("#trackbtn");
const areaft=document.querySelector("#areaft");


trackbtn.onclick=function (){



    $.ajax({
        url: "functionuser/track.php",
        type: "POST",
        data: {
            email: email.value,
            onum: ordernum.value,

        },
        cache: false,
        success: function(dataResult) {

            // location.reload();
            areaft.innerHTML=dataResult;
        }
    });
}