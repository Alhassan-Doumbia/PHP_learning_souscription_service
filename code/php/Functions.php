<?php
function offerUpdateUserData($phoneNumber, $quantity, $moneyAmount, $operationType)
{
    //Cette fonction me permet de supprimer la pageConsultationAvantage2 en fait 
    $userPhoneNumber = ['0153669477', '0777243549', '0787108622'];
    $globalUserData = [
        [
            'owner' => 'Al Hassan Doumbia',
            'InternetConnection' => 1,
            'callTime' => 0,
            'moneyAmount' => 10000,
            'paymentMode' => 'Orange money'
        ],
        [
            'owner' => 'Teky Jean Christ',
            'InternetConnection' => 1,
            'callTime' => 0,
            'moneyAmount' => 10000,
            'paymentMode' => 'Orange money'
        ],
        [
            'owner' => 'Diakité Swann Davy',
            'InternetConnection' => 1,
            'callTime' => 0,
            'moneyAmount' => 10000,
            'paymentMode' => 'Orange money'
        ]
    ];
    try {
        $index = array_search($phoneNumber, $userPhoneNumber);
        if ($operationType === 'call') {
            if ($index !== false) {
                echo "<h2>" . $globalUserData[$index]['owner'] . " vos avantages sont les suivants : </h2> <br>";
                echo "<p>données mobiles :" . ($globalUserData[$index]['callTime'] += $quantity) . " Go </p><br>";
                echo "<p>solde :" . ($globalUserData[$index]['moneyAmount'] -= $moneyAmount) . " Fcfa<p>";
            } 
            
            else {
                echo "Numéro de téléphone non trouvé.";
            }

        } 
        else if ($operationType === 'internet') {
            if ($index !== false) {
                echo "<h2>" . $globalUserData[$index]['owner'] . " vos avantages sont les suivants : </h2> <br>";
                echo "<p>données mobiles :" . ($globalUserData[$index]['InternetConnection'] += $quantity) . " Go </p><br>";
                echo "<p>solde :" . ($globalUserData[$index]['moneyAmount'] -= $moneyAmount) . " Fcfa<p>";
            } 
            
            else {
                echo "Numéro de téléphone non trouvé.";
            }
        }
    } catch (\Throwable $th) {
        echo ("Il y a une erreur du type : " . $th->getMessage() . " dans la fonction updateUserData");
    }
}

// La base de donée utilisateur seront en global comme ça les fonctions pourrotn dynamiquement les mettre à jours 

        // Récupération des données du formulaire
$phoneNumber = $_GET['telNumber'];
$wantedMoney = isset($_GET['montant']) ? intval($_GET['montant']) : 0; // Assurez-vous que $wantedMoney est un entier
$paymentMode = isset($_GET['payment_Mode']) ? $_GET['payment_Mode'] : ''; // Valeur par défaut si la clé n'est pas définie

function soldUpdate($phoneNumber,$quantity){
    // Form related  data
        $phoneNumber = $_GET['telNumber'];
        $wantedMoney = isset($_GET['montant']) ? intval($_GET['montant']) : 0; // Assurez-vous que $wantedMoney est un entier
        $paymentMode = isset($_GET['payment_Mode']) ? $_GET['payment_Mode'] : ''; // Valeur par défaut si la clé n'est pas définie
       
        $userPhoneNumber = ['0153669477', '0777243549', '0787108622'];
        $index = array_search($phoneNumber, $userPhoneNumber);
        
        //userDatas manipulation
        $globalUserData[$index]['moneyAmount'] += $wantedMoney;
        $globalUserData[$index]['paymentMode']= $paymentMode;
        // Affichage à l'écran de la page
        echo "<h1>Votre solde est de : ".$globalUserData[$index]['moneyAmount'] ."</h1>";

}






// ya vla les erreurs de reference dans ce code à cuse du scope des variables 