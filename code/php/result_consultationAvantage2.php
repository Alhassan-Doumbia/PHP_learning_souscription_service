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
                    <div class="navPills"> <a href="index.php" class="pageLink">Consulter mon solde </a></div>
                </li>
                <li>
                    <div class="navPills"> <a href="recharger_solde.php" class="pageLink">Recharger mon solde </a></div>
                </li>
              
                <li>
                    <div class="navPills"> <a href="consultation_offre.php" class="pageLink">Consulter les Offres </a></div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            /**
             * Même structure que pour le s autres affichages de résultats sauf que lui il affiche tout les éléments udserDATA
             */

             $userData1=[
                'phoneNumber'=>'0777243549',
                'InternetConnection'=>1,
                'callMinutes'=>0,
                'moneyAmount'=>10000,
                'paymentMode'=>'Orange money'
                // La plus part des modiifications se feront au niveau du solde
            ];

            $phoneNumber= $_GET['telNumber'];
            $WantedMoney= intval($_GET["montant"]); 
            $PaymentMode= $_GET['payment_Mode'];
            $package= intval($_GET['package']);

            switch($package){
                case 1 : $userData1['callMinute']+=3; $userData1['moneyAmount']-=1000; 
                break;

                case 2 :  $userData1['callMinutes']+=4.5; $userData1['moneyAmount']-=2000;
                break;

                case 3 : $userData1['callMinutes']+=10;$userData1['moneyAmount']-=5000;
                break;

                default: echo "Erreur de package";
            }

            echo" <h2> ".$phoneNumber."vos avantages sont les suivants : </h2> <br>";
            echo"<p>données mobiles :".$userData1['InternetConnection']."Go </p><br>";
            echo"<p>Minutes d'appel :".$userData1['callMinutes']."min </p><br>";
            echo"<p>solde :".$userData1['moneyAmount']."Fcfa<p>";

        ?>
    </main>
    <footer>
        <div class="enterprise">
            <img src="./assets/enterprise.png" alt="Logo entreprise" title="Orange Côte d'ivoire">
        </div>
    </footer>



</body>
</html>