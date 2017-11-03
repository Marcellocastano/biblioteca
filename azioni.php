<?php
include_once 'includes/db_connect.php';




if(isset($_POST['azione']) && $_POST['azione']== "aggiungi"){
    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $telefono = $_POST['telefono'];
    $data = $_POST['data'];
    $sesso = $_POST['sesso'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $query = "INSERT INTO utente (id_tipo_utente, nome, cognome, telefono, data_registrazione, sesso, email, password) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ";

    $bound = array($tipo, $nome, $cognome, $telefono, $data, $sesso, $email, $password);

    $stmt = $db->prepare($query);
    $stmt->execute($bound);

    if ($stmt->rowCount() == 1){
        header("location: protetta.php");
    }
    else{
        echo 'errore';
    }
}

if (isset($_GET['azione']) && $_GET['azione']=="cancella") {
    
    
        $query = " DELETE FROM utente WHERE id = ?
        ";
        $bound = array($_GET['id'])   ;
        $stmt = $db->prepare($query);
        $stmt->execute($bound);

       
    
        if ($stmt->rowCount() == 1){
            header("location: protetta.php");
        }
        
}
























?>