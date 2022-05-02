function sabad_action(tis,id) {
   var queryString="";
    let act = tis.id;
     switch (act) {
        case "add":
           queryString = {id:id,act:act,qty:$("#qty_"+id).val(),name:$("#name_"+id).text()};
           break;
           case "empty":
              queryString = {act:act};

              break;
     
        case "remove":
             queryString = {act:act,id:id};

           break;
     }
     jQuery.ajax({
        url:"sabad.php",
        type:"POST",
        data:queryString,
        success:function (data) {
           $("#shop_card").html(data);
           switch (act) {
              case 'add':
                 $(".btn-add_"+id).hide();
                 $(".btn-added_"+id).show();

                 break;
           
                 case 'remove':
                  $(".btn-add_"+id).show();
                  $(".btn-added_"+id).hide();
                 break;
                 case 'empty':
                  $(".add").show();
                  $(".added").hide();
                 break;
           }

        },
        error:function () {},
        complete:function () {
         jQuery.ajax({
            url:"sabad.php",
            type:"POST",
            success:function (res) {
              setTimeout(() => {
               $("#shop_card").html(res)
              }, 100);
    
            }
         });
      }

   
   
   });
}
function qty_sabad(val,id){
   let elem=document.getElementsByClassName("QTY_sabad_"+id)[0];
   let elems=[...document.getElementsByClassName("QTY")];
   let total=document.getElementById("total");
   let elemVal= Number.parseInt(elem.innerText);
   elemVal+=val;
   elemVal=(elemVal === 0)?1:elemVal;
   elem.innerText=elemVal;
   let prices=[...document.getElementsByClassName("PRICE")];
   let x=0;
   // elems.forEach(e1 => {
   //    prices.forEach(e2 => {
   //       x+=Number.parseInt(e2.innerText)*Number.parseInt(e1.innerText);
        
   //    });
   // });
   for (let e1 = 0; e1 < elems.length; e1++) {
      for (let e2 = 0; e2 < prices.length; e2++) {
         x+= Number.parseInt(prices[e2].innerText)*Number.parseInt(elems[e1].innerText);
         break;
      }
       
      
   // }
   total.innerText=" قیمت کلی :"+x+"0 ريال";

   
   
      }
}


