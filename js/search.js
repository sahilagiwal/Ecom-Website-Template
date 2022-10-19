const search=document.querySelector("#searchpro")
const searchout=document.querySelector(".searchoutput")
search.oninput=function (){
    if(search.value==""){
        searchout.style.display="none";
    }
    else{
        $.ajax({
            url: "../functionuser/seachfromdb.php",
            type: "POST",
            data: {
                searchval: search.value
            },
            cache: false,
            success: function(dataResult) {
                searchout.style.display="block";
                searchout.innerHTML=dataResult;
            }
        });
    }

}