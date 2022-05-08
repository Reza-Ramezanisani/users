$(function () {
    $(".pardaght").click(function (e) {
        let Pardaght=this.id;
        
        e.preventDefault();
        let COOKIE=document.getElementById("COOKIE").innerHTML;
        
        $.ajax({
            type:"POST",
            url:"send_shop_server.php",
            dataType:"text",
            data:{data:COOKIE,name:$("#name").val(),tel:$("#tel").val(),address:$("#address").val(),pool:Pardaght},
            success:function(data){
                $("#fill_text").html(data).css({
                    "postition":"fixed",
                    "top":0,
                    "width":"100%",
                    "padding":"20px",
                    "background":"gold",
                    "textAlign":"center"
                }).fadeIn(2000);
               
               
            },
            error:function(data,status,f){
                $("#fill_text").html(f);
            }
        });
        // let nojson=JSON.parse(COOKIE);
        // let json= JSON.stringify(nojson);
    }) ;
    
});