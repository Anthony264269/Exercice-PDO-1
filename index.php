<?php
// 1 er étape
require_once('./database_connect.php');

// 2 eme étape
//exercice 1
//$request = $database->query('SELECT * FROM clients');
//$clients = $request->fetchAll();
//foreach ($clients as $client) {
//    echo ($client['lastName'] . " " . $client['firstName'] . '<br>');
//}


//exercice 2
//$request = $database->query('SELECT * FROM showtypes');
//$showtypes = $request->fetchAll();
//foreach($showtypes as $showtype){
//    echo ($showtype['type'].'<br>');
//}

//exercice 3
//$request = $database->query('SELECT * FROM clients LIMIT 20');
//$clients = $request->fetchAll();
//foreach($clients as $client){
//    echo ($client['lastName']." ".$client['firstName'].'<br>');
//}

//exercice 4
//solution 1    A REVOIR!!!!!!!!!!!!!!!!!
//$request = $database->query('SELECT * FROM clients');
//$clients = $request->fetchAll();
//
//foreach($clients as $client){
//    if($client['card']==true){
//    echo ($client['lastName']." ".$client['firstName'].'<br>');
//}}
//solution 2
// $request = $database->query('SELECT * FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId =  1');
//
// $clients = $request ->fetchAll();
//
// foreach ($clients as $client) {
//     echo($client['lastName'] . " ". $client['firstName'] . " <br>");
// }

//exercice 5
//$request = $database->query("SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName");
//$clients = $request->fetchAll();
//
//foreach($clients as $client){
//    echo ($client['lastName']." ".$client['firstName'].'<br>');
//}

//exercice 6
//$request = $database->query("SELECT * FROM shows ORDER BY title");
//$shows = $request->fetchAll();
//
//foreach($shows as $show){
//    echo ($client['title']."<br> ".$client['performer']."<br> ".$client['date']." <br>".$client['duration'].'<br>');
//}

//exercice 7
$request = $database->query("SELECT * FROM clients LEFT JOIN cards ON clients.cardNumber = cards.cardNumber");
$clients = $request->fetchAll();


foreach($clients as $client){
    if($clients['cardTypesId'] === 1){
    echo '<p>'.$client['lastName']." ".$client['firstName']." a une carte fidélité ".$client['birthDate']." n=° ".$client['cardNumber'] .'</p>';
}else{
    echo '<p>'.$client['lastName']." ".$client['firstName']." n'a pas de carte fidélité ".$client['birthDate']." ".'</p>';
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>