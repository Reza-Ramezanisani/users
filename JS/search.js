$(function () {
    $("#form_search").submit(function (e) {
        e.preventDefault();
        let search = $("#food_search").val();
        if(search !==""){
            $(".exprore-foods , .menu-food,.footer").fadeOut(100)
            // $(".exprore-foods , .menu-food,.footer").fadeOut(100).ajaxStart(function () {
            //     $("#awite").fadeIn(200);
            // });
            $.post("search.php",{search:search},function (data,status) {
                $("#awite").fadeOut(200);
                $("#result_search").fadeIn(100);
               $("#result_search").html(data);
            });
        }
    });
    $("#food_search").keyup(function () {
        let search = $("#food_search").val();
        if(search===""){
            $(".exprore-foods , .menu-food,.footer").css("display","block");
             $("#result_search").fadeOut(100);
        }
    });
    $("#find").click(function (e) {
           e.preventDefault();
           $(".exprore-foods , .menu-food,.footer").fadeOut(100);
           $("#awite").fadeIn(200);
          
                $("#awite").fadeOut(200);
               $("#find_ifram").fadeIn(200).html('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1661.3446813601481!2d56.95850561793321!3d33.61336352443134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1646305978102!5m2!1sen!2s" width="100%" height="450" style="border:1px solid red;" allowfullscreen="" loading="lazy">map</iframe>');
               
          


    })
});