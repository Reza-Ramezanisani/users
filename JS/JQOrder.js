$(document).ready(function(){
    $("#sub").click(function (e) {
        e.preventDefault();
        let form = new FormData($('#form')[0]) ;
    
        $.ajax({
            type:"POST",
            url:"order_server.php",
            cache:false,
            contentType:false,
            processData:false,
            data:form,
            success:function(data){
                $("#fill_text").html(data).css({
                    "postition":"fixed",
                    "top":0,
                    "width":"100%",
                    "padding":"20px",
                    "background":"gold",
                    "textAlign":"center"
                }).fadeIn(2000).fadeOut(2000);
                if(data==="success"){

                    
                }
               
            },
            error:function(data,status,f){
                $("#fill_text").html(f);
            }
        });
    });
});