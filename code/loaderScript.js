//  Fonctiond sleep
function displayLoadingComponent(lapse) {
    return new Promise((resolve) => {
      console.log("promesse réussie");
      setTimeout(() => {
        resolve();
      }, lapse);
    });
  }
  const inputContainer = document.querySelector(".inputContainer");
  
  // utiliser le noeud main au lieu du input container , c'est miux comme ca
  window.addEventListener("load", async function (e) {
    try {
      const CONTAINER = document.querySelector(".container");
      inputContainer.style.display = "none";
      CONTAINER.style.display = "flex";
  
      await displayLoadingComponent(2000);
      CONTAINER.style.display = "none";
      inputContainer.style.display = "flex";
    } catch (error) {
      console.error(
        ` il ya un problème a niveau du chargement du loader : ${error}`
      );
    }
  });
  