<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/global_style.css">
    <link rel="stylesheet" href=".style/loaderStyle.css">
    <script src="./scripts/global.js"defer></script>

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
                    <div class="navPills"> <a href="recharger_solde.php" class="pageLink ">Recharger mon solde </a></div>
                </li>
              
                <li>
                    <div class="navPills  offer"> <a href="consultation_offre.php" class="pageLink ">Consulter les Offres </a></div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="selectingBox">
            <form action="#" style="display: none;">
                <input type="radio" name="check1" id="offerCheckbox1" value="value1"/>
                <input type="radio" name="check1" id="offerCheckbox2" value="value2">
            </form>
        </section>

        <section class="containers">
            
            <section class="inputContainer one">
                <h2>Nos Offres internet 😎</h2>
                <h3>Selectionnez une option :</h3>
                <ol class="choices" type="1">
                    <li class="choice">Fun Night -- 1000fcfa(3Go)</li>
                    <li class="choice">Maddest Night --2000(4.5Go)</li>
                    <li class="choice">Insane Night  --5000 (10Go)</li>
                </ol>
                
                <form action="./treatmentPHP/result_consultationAvantage.php" class="consulting_form"><!--Action à modifier lors de l'utilisation de php-->
                    <input type="text" name="telNumber" id="telNumber" minlength="10" maxlength="10" placeholder="entrez votre numéro de téléphone" required>
                    <label for="package">choix:</label>
                    <input type="number" name="package" id="package">
    
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
    
            <section class="inputContainer two ">
                <h2>Nos offres téléphoniques 😏</h2>
                <h3>Selectionnez une option :</h3>
                <ol class="choices" type="1">
                    <li class="choice">Anti Loneliness -- 1000fcfa(30min)</li>
                    <li class="choice">No Depression--2000(1h30min)</li>
                    <li class="choice">True Pleasure  --5000 (10h)</li>
                </ol>
    
                <form action=".\treatmentPHP\result_consultationAvantage2.php" class="consulting_form"><!--Action à modifier lors de l'utilisation de php-->
                    <input type="text" name="telNumber" id="telNumber" minlength="10" maxlength="10" placeholder="entrez votre numéro de téléphone" required><!--à mettre en display none -->
                    <label for="package">choix:</label>
                    <input type="number" name="package" id="package">
    
                    <label for="payment">mode de paiement</label>
                    <select name="payment_Mode" id="payment" aria-placeholder="">
                            <option value="">--choisissez un mode de paiement---</option>
                            <option value="orange">Orange Money</option>
                            <option value="moov">Moov Money</option>
                            <option value="mtn">Mtn Money</option>
                    </select>
                    <button type="submit" class="submit">envoyer</button>
                </form>
            </section>
        </section>
    </main>
    <footer>
        <div class="enterprise">
            <img src="./assets/enterprise.png" alt="Logo entreprise" title="Orange Côte d'ivoire">
        </div>
    </footer>

    <!-- Scripts -->
    <!-- <script src="script.js"></script> -->
</body>
</html>