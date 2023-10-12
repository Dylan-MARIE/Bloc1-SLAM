$=function(id){
    return document.getElementById(id);
}
const bt= $("bt-hello");
console.log(bt);
bt && bt.addEventListener("click", function (){
        alert("Hello !!!!!!")
    });

$("bt-clear").addEventListener("click", function(){document.body.innerHTML=""})

$("bt-dom").addEventListener("click", function(){
    debugger;
    const h2=document.createElement("h2");
    $("content").appendChild(h2);
    h2.innerText="Sous titre ajouté dynamiquement";
    const img=document.createElement("img");
    img.src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/02/02/10/archer-pi.jpg?width=1200"
    $("content").appendChild(img);
    img.style.width="5000px";
});