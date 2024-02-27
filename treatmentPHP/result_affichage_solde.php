
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="global_style.css">

    <title>Orange_Souscription</title>
</head>
<body>
    <header>
        <nav class="navbar">
        <ul class="navlinks">
            <li>
                    <div class="navPills"> <a href="../index.php" class="pageLink">Consulter mon solde </a></div>
                </li>
                <li>
                    <div class="navPills"> <a href="../recharger_solde.php" class="pageLink">Recharger mon solde </a></div>
                </li>
              
                <li>
                    <div class="navPills"> <a href="../consultation_offre.php" class="pageLink">Consulter les Offres </a></div>
                </li>
            </ul>
        </nav>
    </header>
    <main>        
    <?php
        include 'functions.php';
            $phoneNumber = $_GET['telNumber'];
            $wantedMoney = isset($_GET['montant']) ? intval($_GET['montant']) : 0; // Assurez-vous que $wantedMoney est un entier
            $paymentMode = isset($_GET['payment_Mode']) ? $_GET['payment_Mode'] : ''; 
        soldUpdate( $phoneNumber, $wantedMoney, $paymentMode);
    ?>
    
    </main>
    <footer>
        <div class="enterprise">
            <img src="./assets/enterprise.png" alt="Logo entreprise" title="Orange Côte d'ivoire">
        </div>
    </footer>


    
</body>
</html>