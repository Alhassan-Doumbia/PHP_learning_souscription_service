
// ===========================Debut fonctions
function setCongratsStyle(startdisplay, color, textContent, enddisplay) {
  congrats.style.display = startdisplay;
  congrats.style.color = color;
  congrats.textContent = textContent;
  congrats.style.display = enddisplay;
}

function disablingCall() {
  console.log("fonction disabling call  lancée ");
  const InternetContainer = document.querySelector(".one");
  const callContainer = document.querySelector(".two");

  console.log("récupération des valeurs des choix terminée ");

  function toggleContainerAppearing(containerToShow, containerToHide) {
    containerToShow.classList.remove("disabled");
    containerToHide.classList.add("disabled");
  }
  try {
    if (InternetContainer.classList.contains("disabled")) {
      toggleContainerAppearing(InternetContainer, callContainer);
      console.log("bloc internet desactivée ");
    } else {
      callContainer.classList.add("disabled");
      console.log("bloc internet desactivée ");
    }
  } catch (e) {
    console.error(
      `Il ya une erreur du type ${e} au niveau de la fonction disabling`
    );
  }
}

function disablingInternet() {
  console.log("fonction  disabling internet lancée ");
  const InternetContainer = document.querySelector(".one");
  const callContainer = document.querySelector(".two");

  console.log("récupération des valeurs des choix terminée ");

  function toggleContainerAppearing(containerToShow, containerToHide) {
    containerToShow.classList.remove("disabled");
    containerToHide.classList.add("disabled");
  }
  try {
    if (callContainer.classList.contains("disabled")) {
      toggleContainerAppearing(callContainer, InternetContainer);
      console.log("bloc appel desactivée ");
    } else {
      InternetContainer.classList.add("disabled");
      console.log("bloc appel desactivée ");
    }
  } catch (e) {
    console.error(
      `Il ya une erreur du type ${e} au niveau de la fonction disabling`
    );
  }
}

// ================Fin fonctions=====================


const congrats = document.querySelector(".congrats");
if (congrats) {
  congrats.style.display = "none";
}
const submitButton = document.querySelector(".submit");
const inputField = document.querySelector("#telNumber");

inputField.addEventListener("input", (e) => {
  let telNumberInput = document.querySelector("#telNumber").value;
  if (telNumberInput !== "" && telNumberInput.length === 10) {
    setCongratsStyle(
      "none",
      "#FF3D00",
      "hum🤔... un numéro  orange ? très bon choix🤩",
      "block"
    );
  } else {
    setCongratsStyle(
      "none",
      "#161616",
      "Veuillez entrer votre numéro de téléphone",
      "block"
    );
  }
});

// ++++ debugage 
let counter = 0;
window.addEventListener("click", () => {
  counter++;
  console.log(counter);
});
// ++++ debugage 

/**
 * Manipulation des offres
 */
// Mise à disposition
const InternetContainer = document.querySelector(".one");
const callContainer = document.querySelector(".two");

InternetContainer.addEventListener("click", disablingCall);
callContainer.addEventListener("click", disablingInternet);
