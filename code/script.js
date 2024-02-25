// gestion du loader
/**
 * ALGORITHME :
 *
 * quand la page a chargé , la partie main est en full display none
 * Le loader ainsi que son container est affiché
 * Une fonction asynchrone appelée sleep basée sur une promesse va tourner pendant environs 3-5 secondes
 * pendant que la fonction est entrain de tourné on a le loader et à la fin du timer , le reste de l'interface est affichée
 * La navbar sera pas cachée par le container et le loader .
 *
 */

// on mettra cette line d ecode avat la fonction
/**
 * const CONTAINER= document.querySelector(".container");
        CONTAINER.style.display="flex";
 */
// La fonction qui va acceuillir le sleep sera  une fonction asynchrone et l'appel de la fonction
//displayLoadingComponent se fera avec un await
// dans cette fonction on aura le bloc avec les champs qi sera d'abord en display none
// puis le await
// après le await le container des champs s'affiche .

const congrats = document.querySelector(".congrats");
if (congrats) {
  congrats.style.display = "none";
}
const submitButton = document.querySelector(".submit");
const inputField = document.querySelector("#telNumber");

inputField.addEventListener("input", (e) => {
  // Récupération de la valeur de l'input à l'intérieur de l'événement
  let telNumberInput = document.querySelector("#telNumber").value;
  // Affichage du paragraphe si le champ est plein
  if (telNumberInput !== "" && telNumberInput.length === 10) {
    congrats.style.display = "none";
    congrats.style.color = "#FF3D00";
    congrats.textContent = "hum🤔... un numéro  orange ? très bon choix🤩";
    congrats.style.display = "block";
  } else {
    congrats.style.display = "none";
    congrats.textContent = "Veuillez entrer votre numéro de téléphone";
    congrats.style.color = "#161616";
    congrats.style.display = "block";
  }
});
// annulation du reload par defaut
submitButton.addEventListener("click", (e) => {
  let telNumberInput = document.querySelector("#telNumber");
  telNumberInput.value = " ";
  congrats.style.display = "none";
});


// Manipulation de la page offres 
// ON recupeère la valeur du bouton radio ; si celui ci ) value 1 , disabled est ajouté lélément two , si l'on choisit l'autre, on 
//enlève disabled et on ajoute à l"élément opposé 

function disablingInternet(){
  console.log("fonction  disabling internet lancée ")
  const InternetContainer=document.querySelector(".one");
  const callContainer=document.querySelector(".two");

  console.log("récupération des valeurs des choix terminée ")

  function toggleContainerAppearing(containerToShow,containerToHide){
    containerToShow.classList.remove("disabled");
    containerToHide.classList.add("disabled");
  }
  try{
      if(callContainer.classList.contains("disabled")){
        toggleContainerAppearing(callContainer,InternetContainer)
        console.log("bloc appel desactivée ")
      }
      else{InternetContainer.classList.add("disabled");console.log("bloc appel desactivée ")}
    }
  catch(e){
      console.error(`Il ya une erreur du type ${e} au niveau de la fonction disabling`);
}
}
let counter=0;
window.addEventListener('click',()=>{
  counter++;
  console.log(counter);

})

function disablingCall(){
  console.log("fonction disabling call  lancée ")
  const InternetContainer=document.querySelector(".one");
  const callContainer=document.querySelector(".two");

  console.log("récupération des valeurs des choix terminée ")

  function toggleContainerAppearing(containerToShow,containerToHide){
    containerToShow.classList.remove("disabled");
    containerToHide.classList.add("disabled");
  }
  try{
      if(InternetContainer.classList.contains("disabled")){
        toggleContainerAppearing(InternetContainer,callContainer)
        console.log("bloc internet desactivée ");
      }
      else{callContainer.classList.add("disabled"); console.log("bloc internet desactivée ");}
    }
  catch(e){
      console.error(`Il ya une erreur du type ${e} au niveau de la fonction disabling`);
}
}
// Mise à disposition

const InternetContainer=document.querySelector(".one");
const callContainer=document.querySelector(".two");

InternetContainer.addEventListener('click',disablingCall);
callContainer.addEventListener('click',disablingInternet);

