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
    nom VARCHAR(100) NOT NULL,
    adresse VARCHAR(100) NOT NULL
);

CREATE TABLE classes (
    id SERIAL PRIMARY KEY,
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

CREATE TABLE inscriptions(
    id SERIAL PRIMARY KEY,
    eleve_id INT REFERENCES eleves(id_eleve),
    annee_id INT REFERENCES anneeScolaires(id_annee),
    classe_id INT REFERENCES classes(id_classe)
);
CREATE TABLE matieres(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE utilisateurs(
    id SERIAL PRIMARY KEY,
    nom  VARCHAR(50) NOT NULL ,
    prenom VARCHAR(50) NOT NULL ,
    email VARCHAR(50) NOT NULL UNIQUE,
    passwords VARCHAR(50) NOT NULL UNIQUE,
    role_id INT REFERENCES roles(id_role)
);

CREATE TABLE roles(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE anneeScolaires(
    id SERIAL PRIMARY KEY,
    annee VARCHAR(10) NOT NULL UNIQUE
);

CREATE TABLE transferts (
    id SERIAL PRIMARY KEY,
    eleve_id INT NOT NULL REFERENCES eleves(id),
    type_transfert VARCHAR(20) NOT NULL,
    etablissement_origine VARCHAR(100),
    etablissement_destination VARCHAR(100),
    date_transfert DATE NOT NULL DEFAULT CURRENT_DATE,
    statut VARCHAR(20) NOT NULL DEFAULT 'En cours',
    CONSTRAINT check_transfert_type CHECK (type_transfert IN ('Entrant', 'Sortant')),
    CONSTRAINT check_transfert_statut CHECK (statut IN ('En cours', 'Valide', 'Refuse'))
);
