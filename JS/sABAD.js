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
function qty_sabad(val,id,act){
   let elem=document.getElementsByClassName("QTY_sabad_"+id)[0];
   let elems=[...document.getElementsByClassName("QTY")];
   let total=document.getElementById("total");
   let elemVal= Number.parseInt(elem.innerText);
   elemVal+=val;
   elemVal=(elemVal === 0)?1:elemVal;
   elem.innerText=elemVal;
   let prices=[...document.getElementsByClassName("PRICE")];
   let x=0;
   let e2=0;
   for (let e1 = 0; e1 < elems.length; e1++) {
      for (;e2 < prices.length;) {
         x+= Number.parseInt(prices[e2].innerText)*Number.parseInt(elems[e1].innerText);
         e2++
         break;
      }
   }
       
      
   // }
   total.innerText=" ???????? ?????? :"+x+"0 ????????";
   // let COOKIE=document.getElementById("COOKIE").innerHTML;
   // let nojson=JSON.parse(COOKIE);
   // let ID=id;
   // nojson.forEach(e => {
   //    if(e['id']===String(ID)){
   //       e['qty']=elemVal;
   //    }
   // });
   // let json= JSON.stringify(nojson);
    

   jQuery.ajax({
      url:"sabad.php",
      type:"POST",
      data:{id:id,act:act,qty:$("#qty_"+id).text()},
     

   });
   // elems.forEach(e1 => {
   //    prices.forEach(e2 => {
   //       x+=Number.parseInt(e2.innerText)*Number.parseInt(e1.innerText);
        
   //    });
   // });

   
   
}


