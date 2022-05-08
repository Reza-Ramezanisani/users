function my(){
    const links=document.getElementsByClassName("links").item(0);
    const humber=document.getElementsByClassName("icon").item(0);
    if(links.className==="links"){
        links.className+=" res";
    }else{
        links.className="links";
    }
    humber.classList.toggle("change");


}
function clock(){
    let text=document.getElementsByClassName("clock")[0];
    let time=new Date();
    let h=time.getHours();
    let m=time.getMinutes();
    let s=time.getSeconds();
    let pa="AM";
    m=(m<10)? "0"+m:m;
    h=(m<10)? "0"+h:h;
    s=(m<10)? "0"+s:s;
    if(h>12){
        h=h-12;
        pa="PM";
    }
    
    text.innerHTML=`${h}:${m}:${s} ${pa}`;
    
}
setInterval(clock,1000);
function more(){
    const more=document.getElementById("more");
    if(more.style.maxHeight){
        more.style.maxHeight=null;
    }else{
        more.style.maxHeight=more.scrollHeight+"px";
    }
}
function msg() {
    let input_name_msg=document.getElementById('a');
    let [btn,text]=document.getElementsByClassName('j');
    let email=document.getElementById('em');
    if((input_name_msg.value.match(/[^\w\sاآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+/g) || input_name_msg.value.length === 0) || (email.value.length===0 || !email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) ){
        input_name_msg.style.border='1px dashed red';
        email.style.border='1px dashed red';
        btn.style.cursor='not-allowed';
        btn.disabled=true;
        text.style.cursor='not-allowed';
        text.disabled=true;
        text.value='';
    }else{
        input_name_msg.style.border='1px dashed lightblue';
        email.style.border='1px dashed lightblue';
        btn.style.cursor='pointer';
        btn.disabled=false;
        text.style.cursor='auto';
        text.disabled=false;
    }
   console.log(input_name_msg.value.match(/[\w\sآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیا]+/g));

    
}
function switch_bg(x){
    x.classList.toggle('checked');
    document.body.classList.toggle('sm');
}
// setInterval(() => {
//     let cards = document.getElementsByClassName('cards')[0];
//     review().then(suc=>cards.innerHTML = suc).catch(err=>cards.innerHTML = err);
// }, 2000);
// function review(){
//     return new Promise(function (resolve,reject) {
//         let xhr = new XMLHttpRequest();
//         xhr.open("GET",'products_server.php');
//         xhr.onload=()=>{
//             if(xhr.status===200 && xhr.readyState===4){
//                 resolve(xhr.response);
//             }else{
//                 reject(xhr.statusText);
//             }
//         }
//         xhr.send();
//     })
// }
// setInterval(() => {
//     let more = document.getElementById('more');
//     review().then(suc=>more.innerHTML = suc).catch(err=>more.innerHTML = err);
// }, 2000);
// function review(){
//     return new Promise(function (resolve,reject) {
//         let xhr = new XMLHttpRequest();
//         xhr.open("GET",'products_server.php');
//         xhr.onload=()=>{
//             if(xhr.status===200 && xhr.readyState===4){
//                 resolve(xhr.response);
//             }else{
//                 reject(xhr.statusText);
//             }
//         }
//         xhr.send();
//     })
// }
let btn_search = document.getElementById("btn_search");
let input = document.getElementById("food_search");
let todos = document.getElementsByClassName("TODOS")[0];
function Todo_play() {
    todos.classList.add("display");
}
function Todo_remove() {
    todos.classList.remove("display");
}

btn_search.addEventListener("click",function () {
    if(input.value!==''){
      
        let todo = document.createElement("div");
        let trash = document.createElement("i");
        let text = document.createElement("div");
        text.innerHTML=input.value;
        todo.classList.add("todo");
        trash.className+="fas fa-trash";
        trash.style.zIndex="2";
       todo.appendChild(trash);
       todo.appendChild(text);
       todos.appendChild(todo);
        
       todo.addEventListener("click",function () {
       let toDos = document.getElementsByClassName("todo");
       input.value = text.innerHTML;

       for (let i = 0; i < toDos.length; i++) {
           toDos[i].classList.remove("act");
           
       }
       this.classList.add("act");
   })
   todo.addEventListener("click",function (e) {
       let item = e.target;
       if(item.className==="fas fa-trash"){
           item.parentElement.classList.add("fall");
        //    let idTodos=item.parentElement.id;
        //    json = JSON.parse(localStorage.getItem("json"));
        //    for (let i = 0; i < json.length; i++) {
        //        if(json[i].text===idTodos){
        //            json.splice(i,1);
        //            JSON.stringify(localStorage.setItem("json",json));
        //        }
               
        //    }
          
           
                item.parentElement.remove();

            
           
       }
   });
    }
});
window.onscroll=()=>{
    let scrolled = document.getElementsByClassName("scroll")[0];
    if(document.body.scrollTop>=200 ||document.documentElement.scrollTop>=200 ){
        scrolled.classList.add("visible");
       
    }else{
        scrolled.classList.remove("visible");

    }
    scrolled.addEventListener("click",function () {
        document.body.scrollTop=0 
        document.documentElement.scrollTop=0
    })
    
    
    
}
function TABS(x,y) {
    let btn_tab=document.getElementsByClassName("btn_tab");
    for (let index = 0; index < btn_tab.length; index++) {
        btn_tab[index].classList.remove("act");
        
    }
    x.classList.add("act");

    let tabs = document.getElementsByClassName(y)[0];
    let cards=document.getElementsByClassName('card');
    for (let index = 0; index < cards.length; index++) {
         cards[index].style.display="none";
        
    }
    if(tabs){

        for (let i = 0; i < cards.length; i++) {
            if(cards[i].className === tabs.className){
                cards[i].style.display="block";
            }
            
        }
        document.getElementsByClassName('txt_cards')[0].style.display='none';
    }else{
        document.getElementsByClassName('txt_cards')[0].style.display='block';

    }
}
document.getElementsByClassName("btn_tab")[0].onclick();


