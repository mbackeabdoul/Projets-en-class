CREATE TABLE eleves (
    id SERIAL PRIMARY KEY,
    matricule VARCHAR(50) NOT NULL UNIQUE,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    responsable_id INT NOT NULL REFERENCES responsables(id),
    
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
    eleve_id INT NOT NULL REFERENCES eleves(id),
    etablissment_dorigin VARCHAR (60) NOT NULL,
    statut varchar(30) check(statut in ('EN ATTENTE', 'INSCRIT', 'NON AFFECTE'))
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

