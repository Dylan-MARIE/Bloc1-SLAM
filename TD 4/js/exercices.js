//Définition de fonctions raccourcicantes 
const $=(id)=>document.getElementById(id);

const addEvt=function (type,id,listener){
    const elm=$(id);
    elm && elm.addEventListener(type,listener);
};

//Ex1 : Background-color
addEvt("click","bt-bg", function(){
    const color=$("selected-color").value;
    document.body.style.backgroundColor=color;
});

//Ex2 : Add-select
addEvt("click","bt-add",function(){
    document.querySelectorAll(".liste").forEach(
    (elm)=>{
        const tagName=elm.tagName=="Select"?"option":"li";
    const li=document.createElement("li");
    li.innerText=$("selected-text").value;
    elm.appendChild(li);
    }  
    );
});