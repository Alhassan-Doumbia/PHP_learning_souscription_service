<!DOCTYPE html>
<html lang="fr">
    <!-- Sera lié à la page de consultation des offres-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/global_style.css">
    <link rel="stylesheet" href="./style/loaderStyle.css">
    <script src="./scripts/global.js" defer></script>
    <script src="./scripts/loaderScript.js" defer></script>
    <title>Orange_Souscription</title>


</head>
<body>
    <header>
        <nav class="navbar">
        <ul class="navlinks">
            <li>
                    <div class="navPills"> <a href="index.php" class="pageLink ">Consulter mon solde </a></div>
                </li>
                <li>
                    <div class="navPills recharge"> <a href="recharger_solde.php" class="pageLink ">Recharger mon solde </a></div>
                </li>
              
                <li>
                    <div class="navPills "> <a href="consultation_offre.php" class="pageLink ">Consulter les Offres </a></div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container">
            <div class="loader"></div>
        </section>
        <section class="containers">

            <section class="inputContainer">
                <h2>Vous allez devoir entrer votre numéro de téléphone...</h2>
                <form action="./treatmentPHP/result_affichage_solde.php" class="recharge_form"><!--Action à modifier lors de l'utilisation de php-->
                   
                    <input type="text" name="telNumber" id="telNumber" minlength="10" maxlength="10" placeholder="entrez votre numéro de téléphone" required >
                    <p class="congrats" ">hum🤔... un numéro  orange ? très bon choix🤩 </p><!--à mettre en display none -->
                   
                    <label for="montant">Montant</label>
                    <input type="text" name="montant" id="montant"  maxlength="10" placeholder="entrez le montant" required>
    
                    <label for="payment">mode de paiement</label>
                    <select name="payment_Mode" id="payment" aria-placeholder="">
                            <option value="">--choisissez un mode de paiement---</option>
                            <option value="orange">Orange Money</option>
                            <option value="moov">Moov Money</option>
                            <option value="mtn">Mtn Money</option>
                    </select>
                    
                    <input type="submit" class="submit" value="envoyer">
                </form>
            </section>
        </section>
    </main>
    <footer>
        <div class="enterprise">
            <img src="./assets/enterprise.png" alt="Logo entreprise" title="Orange Côte d'ivoire">
        </div>
    </footer>

</body>
</html>