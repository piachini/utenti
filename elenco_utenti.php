<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Utenti</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Elenco Utenti</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
        </tr>
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

    // echo "Connessione al database riuscita";
    // echo "<br>";

        // Query SQL per selezionare gli utenti
        $sql = "SELECT id, nome, cognome, email FROM utenti";
        $result = $conn->query($sql);

        // Verifica se la query ha restituito dei risultati
        if ($result->num_rows > 0) {
            // Output dei dati di ogni riga
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["cognome"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nessun risultato trovato</td></tr>";
        }

        // Chiusura connessione al database
        $conn->close();
        ?>
    </table>
</body>
</html>
