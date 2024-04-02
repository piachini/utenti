<?php

//parametri di connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
        
// connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);
        
// verifica connessione
if ($conn->connect_error) {
   die("Connessione al database falluta: ". $conn->connect_error);
}

// Verifica se i dati sono stati inviati dal form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi i dati dal form
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];

    // Query SQL per inserire un nuovo utente nel database
    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$nome', '$cognome', '$email')";

    // Esegui la query e verifica se è stata eseguita con successo
    if ($conn->query($sql) === TRUE) {
        echo "Nuovo utente inserito con successo";
    } else {
        echo "Errore durante l'inserimento del nuovo utente: " . $conn->error;
    }
}

// Chiusura connessione al database
$conn->close();
?>
