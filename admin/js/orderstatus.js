const brandbtn=document.querySelector(".update");
const orderid=document.querySelector(".orderid");
brandbtn.onclick=function (){
    const status=document.querySelector(".status").value;
    console.log(status, orderid)
    $.ajax({
        url: "../admin/functions/status.php",
        type: "POST",
        data: {
            status: status,
            orderid:orderid.innerHTML,
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.status==1){
                alert("Upated Successfully")
            }

            else{
                alert("Error occured ! Please contact Developer");
            }

        }
    });


}