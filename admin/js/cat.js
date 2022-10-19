const brandbtn=document.querySelector(".btnbrandadd");

brandbtn.onclick=function (){
    const brandname=document.querySelector(".bname");
    $.ajax({
        url: "../admin/functions/addcat.php",
        type: "POST",
        data: {
            catgeory: brandname.value
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.status==1){
                alert("Added Successfully")
            }

            else{
                alert("Error occured ! Please contact Developer");
            }

        }
    });


}