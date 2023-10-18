//Définition de fonctions raccourcissantes 
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

//Ex3 : Addition
const addition=()=>{
    const nombre1=parseFloat($("number1").value);
    const nombre2=parseFloat($("number2").value);
    const resultat=nombre1+nombre2;
    $("resultat").textContent=resultat;
};
addEvt("click", "calcul", addition);

//Ex4 : Images
const SelectImage=()=>{
    const ImageSelector=$("imageSelector");
    const DisplayedImage=$("displayedImage");

    const selectedValue=ImageSelector.value;
    DisplayedImage.src=selectedValue;
};
addEvt("change", "imageSelector", SelectImage);

//Ex5 : Alert-mouse-over
const afficherAlerte=()=>{
    alert("0100 1011 1000 1010 0001 0010 0110 1111 1110 0000 1100 0011");
    alert("Vous étiez pourtant prévenu !");
};
addEvt("mouseover", "titre", afficherAlerte);

//Ex7 : Delete-conf
addEvt('click', 'boutonSupprimer', function () {
    const confirmation=confirm("Voulez-vous supprimer cet élément ?");
    if (confirmation){
        const elementASupprimer = $('boutonSupprimer');
        elementASupprimer.parentNode.removeChild(elementASupprimer);
        alert("L'élément a été supprimé.");
    } else{
        alert("L'élément n'a pas été supprimé.");
    }
});

//Ex8 : Toggle-check
const cacherOuAfficherTexte=()=>{
    const checkbox=$("checkbox");
    const texte=$("texte");
    if(checkbox.checked){
        texte.style.display = "block";
    } else{
        texte.style.display = "none";
    }
};
addEvt("change", "checkbox", cacherOuAfficherTexte);

//Ex9 : Form-contact
const envoyerFormulaire=(e)=>{
    e.preventDefault();
    const nom = $("nom").value;
    const email = $("email").value;
    const message = $("message").value;
    console.log("Nom :", nom);
    console.log("E-mail :", email);
    console.log("Message :", message);
};
addEvt("submit", "contactForm", envoyerFormulaire);

//Ex6 : Horloge
function Horloge(){
    const horlogeElement=$('horloge');
    const maintenant=new Date();
    const heures=maintenant.getHours().toString().padStart(2, '0');
    const minutes=maintenant.getMinutes().toString().padStart(2, '0');
    const secondes=maintenant.getSeconds().toString().padStart(2, '0');
    const heureActuelle=`${heures}:${minutes}:${secondes}`;
    horlogeElement.textContent=heureActuelle;
}
setInterval(Horloge, 1000);
Horloge();