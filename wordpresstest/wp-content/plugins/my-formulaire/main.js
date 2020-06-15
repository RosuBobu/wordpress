let message;

document.addEventListener("DOMContentLoaded", function(){
    message = document.querySelector(".my-formulaire-info");
    // console.log(message);
    if(typeof(message)!=undefined && message!=null){
        message.addEventListener("click", hideInfo);
    }

});

function hideInfo(){
    message.remove();
}