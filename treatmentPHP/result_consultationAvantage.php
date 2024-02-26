<!-- sera lié à la page de consultation de page  -->
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
            /**
             * Même structure que pour le s autres affichages de résultats sauf que lui il affiche tout les éléments udserDATA
             */

            //  $userData1=[
            //     'phoneNumber'=>'0777243549',
            //     'InternetConnection'=>1,
            //     'moneyAmount'=>10000,
            //     'paymentMode'=>'Orange money'
            //     // La plus part des modiifications se feront au niveau du solde
            // ];

            $phoneNumber = $_GET['telNumber'];
            $wantedMoney = isset($_GET['montant']) ? intval($_GET['montant']) : 0; // Assurez-vous que $wantedMoney est un entier
            $paymentMode = isset($_GET['payment_Mode']) ? $_GET['payment_Mode'] : ''; // Valeur par défaut si la clé n'est pas définie
            $package= intval($_GET['package']);

            include 'functions.php';
            switch($package){
                case 1 : /*$userData1['InternetConnection']+=3; $userData1['moneyAmount']-=1000;*/offerUpdateUserData($phoneNumber,0.3,1000,'internet'); 
                break;

                case 2 : /* $userData1['InternetConnection']+=4.5; $userData1['moneyAmount']-=2000;*/offerUpdateUserData($phoneNumber,1.3,2000,'internet'); 
                break;

                case 3 : /*$userData1['InternetConnection']+=10;$userData1['moneyAmount']-=5000;*/offerUpdateUserData($phoneNumber,0.3,1000,'internet'); 
                break;

                default: echo "Erreur de package";
            }

        ?>
    </main>
    <footer>
        <div class="enterprise">
            <img src="./assets/enterprise.png" alt="Logo entreprise" title="Orange Côte d'ivoire">
        </div>
    </footer>



</body>
</html>