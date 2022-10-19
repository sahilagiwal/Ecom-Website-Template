const addtocart=document.querySelectorAll(".addtocart");
const modalclose=document.querySelector(".modalclose");
modalclose.onclick=function (){
    $('#addedtoc').modal('hide');
}
for(let i=0;i<addtocart.length;i++){
    addtocart[i].addEventListener('click',addToCart)
}
function addToCart(event){
    const button=event.target
    let shopItem=button.parentElement.parentElement.parentElement.parentElement.parentElement;
    let itemName=shopItem.querySelector(".itemname").innerText;
    let itemCost=shopItem.querySelector(".itemcost").innerText;
    let productId=shopItem.querySelector(".productid").value;
    let itemImage=shopItem.querySelector(".itemimage").value;
    itemCost=itemCost.substring(1,itemCost.length)
    console.log(itemName," is the product and it cost around ",itemCost," ",productId,' ',itemImage);
    $.ajax({
        url: "functionuser/cartsession.php",
        type: "POST",
        data: {
            id: productId,
            name: itemName,
            price: itemCost,
            image: itemImage,
        },
        cache: false,
        success: function(dataResult) {

            // location.reload();
            $('#addedtoc').modal('show');
        }
    });
}