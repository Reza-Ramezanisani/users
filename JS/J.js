$(function () {
    $('#submit').click(function () {
        let form = new FormData($("#form")[0]);
        $.ajax({
            url:"process_msg.php",
            type:"POST",
            data:form,
            cache:false,
            contentType:false,
            processData:false,
            success:function (data) {
                $(".alert").slideDown(100).html(data).addClass("alert-success").fadeOut(8000);
            },
            error:function (data) {
                $(".alert").slideDown(100).html(data).addClass("alert-success");
            }
        });
    });
});
setInterval(() => {
    let chat = document.getElementsByClassName('chat_box')[0];
    Chat().then(success=>chat.innerHTML=success).catch(err=>chat.innerHTML=err)
}, 1000);
function Chat(){
    return new Promise(function(resolve,reject){
        let xhr = new XMLHttpRequest();
        xhr.open("GET",'chat.php');
        xhr.onload=()=>{
            if(xhr.readyState===4 && xhr.status===200){
                   resolve(xhr.response);
            }else{
                reject(xhr.statusText);
            }
        }
        xhr.send();

    });
}