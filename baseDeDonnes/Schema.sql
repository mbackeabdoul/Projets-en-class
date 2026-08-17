

CREATE TABLE eleves (
    id SERIAL PRIMARY KEY,
    matricule VARCHAR(50) NOT NULL UNIQUE,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_de_naissance DATE NOT NULL,
    statut VARCHAR(20) NOT NULL DEFAULT 'En attente',
    classe_id INT REFERENCES classes(id_classe),
    
    etablissement_id INT  NOT NULL REFERENCES etablissement(id),
    responsable_id INT NOT NULL REFERENCES responsables(id),

    CONSTRAINT check_eleve_statut CHECK (statut IN ('Inscrit', 'Non affece', 'En attente'))
);

CREATE TABLE etablissement (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE classes (
    id_classe SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE responsables (
    id SERIAL PRIMARY KEY,
     nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    telephone VARCHAR(20) NOT NULL
);

INSERT INTO classes(nom)
VALUES ('CP A'), ('CE1 A'),;