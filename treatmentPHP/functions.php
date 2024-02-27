<?php
function offerUpdateUserData($phoneNumber, $quantity, $moneyAmount, $operationType)
{ 
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
            if ($index !== false&& isset($globalUserData[$index])) {
                echo "<h2>" . $globalUserData[$index]['owner'] . " vos avantages sont les suivants : </h2> <br>";
                echo "<p>données mobiles :" . ($globalUserData[$index]['callTime'] += $quantity) . " Go </p><br>";
                echo "<p>solde :" . ($globalUserData[$index]['moneyAmount'] -= $moneyAmount) . " Fcfa<p>";
            } 
            else {
                echo "Numéro de téléphone non trouvé.";
            }
        } 
        else if ($operationType === 'internet') {
            if ($index !== false && isset($globalUserData[$index])) {
                echo "<h2>" . $globalUserData[$index]['owner'] . " vos avantages sont les suivants : </h2> <br>";
                echo "<p>données mobiles :" . ($globalUserData[$index]['InternetConnection'] += $quantity) . " Go </p><br>";
                echo "<p>solde :" . ($globalUserData[$index]['moneyAmount'] -= $moneyAmount) . " Fcfa<p>";
            }  else {
                echo "Numéro de téléphone non trouvé.";
            }
        }
    } catch (\Throwable $th) {
        echo ("Il y a une erreur du type : " . $th->getMessage() . " dans la fonction updateUserData");
    }
}

function soldUpdate($phoneNumber, $quantity, $paymentMode){
    // Récupérer l'index après avoir mis à jour les données utilisateur
    // entrer les données utilisaturs comme ça à la bourre est deg mais bon, je e sais pas manipuer les bases de données donc bon
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
    $userPhoneNumber = ['0153669477', '0777243549', '0787108622'];
    $index = array_search($phoneNumber, $userPhoneNumber);
    if ($index !== false && isset($globalUserData[$index])) {
         $globalUserData[$index]['moneyAmount'] += $quantity;
         $globalUserData[$index]['paymentMode']= $paymentMode;
         echo "<h2>". $globalUserData[$index]['owner'] . "  votre solde est de :  </h2> <br>";
         echo "<p>" .$globalUserData[$index]['moneyAmount'] ."</p>";
        
    } else {
        echo "<h1>Utilisateur introuvable.</h1>";
    }
};
 