-- Creazione della tabella utenti
CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(50),
    email VARCHAR(100)
);

-- Inserimento di dati di esempio nella tabella utenti
INSERT INTO utenti (nome, cognome, email) VALUES
('Mario', 'Rossi', 'mario.rossi@example.com'),
('Luigi', 'Verdi', 'luigi.verdi@example.com'),
('Giovanna', 'Bianchi', 'giovanna.bianchi@example.com');
