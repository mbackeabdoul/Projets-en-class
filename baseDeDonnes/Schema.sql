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
VALUES ('CP '), ('C1'),;

CREATE TABLE matieres(
    id_matiere SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE roles(
    id_role SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE utilisateurs(
    id_user SERIAL PRIMARY KEY,
    nom  VARCHAR(50) NOT NULL ,
    prenom VARCHAR(50) NOT NULL ,
    email VARCHAR(50) NOT NULL UNIQUE,
    passwords VARCHAR(50) NOT NULL UNIQUE,
    role_id INT REFERENCES roles(id_role)
);

CREATE TABLE anneeScolaires(
    id SERIAL PRIMARY KEY,
    annee VARCHAR(10) NOT NULL UNIQUE
);

CREATE Table transferts(
    id SERIAL PRIMARY KEY,
    id SERIAL PRIMARY KEY,
    eleve_id INT NOT NULL REFERENCES eleves(id),
    type_transfert VARCHAR(50) NOT NULL,
    etablissment_dorigin VARCHAR (60) NOT NULL,
    etablissement_final VARCHAR(50) NOT NULL,
    statu VARCHAR(50) NOT NULL,
    date_tranferts DATE NOTNULL,
    CONSTRAINT check_transfert_type CHECK (type_transfert IN ('Entrant', 'Sortant')),
    CONSTRAINT check_transfert_statut CHECK (statut IN ('En cours', 'Valide', 'Rejeter'))

); 
CREATE TABLE inscriptions(
    id SERIAL PRIMARY KEY,
    eleve_id INT REFERENCES eleves(id_eleve),
    annee_id INT REFERENCES anneeScolaires(id_annee),
    classe_id INT REFERENCES classes(id_classe)
);
CREATE Table statuts(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

