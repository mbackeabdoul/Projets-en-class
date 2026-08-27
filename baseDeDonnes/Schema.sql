DROP TABLE IF EXISTS justificatifs, inscriptions, transferts, utilisateurs, eleves, statuts,
    anneeScolaires, roles, matieres, classes, etablissement, responsables CASCADE;

CREATE TABLE responsables (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    telephone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    adresse VARCHAR(150),
    bourse VARCHAR(30) CHECK (bourse IN ('Aucune', 'Partielle', 'Totale')) DEFAULT 'Aucune'
);

INSERT INTO responsables(nom, prenom, telephone, email, adresse, bourse)
VALUES
    ('Ndao', 'Khoudoss', '785439090', NULL, NULL, 'Aucune'),
    ('Ndiaye', 'Tapha', '785439090', NULL, NULL, 'Aucune');

CREATE TABLE etablissement(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

INSERT INTO etablissement(nom)
VALUES ('Primaire al Amal'), ('Primaire Gainde Fatma');

CREATE TABLE classes (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

INSERT INTO classes(nom)
VALUES ('CP'), ('C1'), ('C2'), ('CM1');

CREATE TABLE matieres(
    id_matiere SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE roles(
    id_role SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO roles(nom)
VALUES ('Admin');

-- ========== ANNÉES SCOLAIRES ==========
CREATE TABLE anneeScolaires(
    id SERIAL PRIMARY KEY,
    annee VARCHAR(10) NOT NULL UNIQUE
);

INSERT INTO anneeScolaires(annee)
VALUES ('2026-2027'), ('2025-2026');

-- ========== STATUTS (table libre, non utilisée par l'enum PHP) ==========
CREATE TABLE statuts(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

-- ========== ÉLÈVES ==========
CREATE TABLE eleves(
    id SERIAL PRIMARY KEY,
    matricule VARCHAR(50) NOT NULL UNIQUE,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe VARCHAR(1) CHECK (sexe IN ('M', 'F')),
    date_naissance DATE,
    lieu_naissance VARCHAR(100),
    responsable_id INT NOT NULL REFERENCES responsables(id)
);

INSERT INTO eleves(matricule, nom, prenom, sexe, date_naissance, lieu_naissance, responsable_id)
VALUES
    ('JE-000', 'Ndiaye', 'Assane', 'M', '2015-03-12', 'Dakar', 1),
    ('JE-001', 'Mbaye', 'Ndiaya', 'F', '2016-07-02', 'Thiès', 2),
    ('JE-002', 'Sarr', 'Coach', 'M', '2014-11-25', 'Dakar', 1);

CREATE TABLE utilisateurs(
    id_user SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    passwords VARCHAR(50) NOT NULL UNIQUE,
    role_id INT REFERENCES roles(id_role)
);

INSERT INTO utilisateurs(nom, prenom, email, passwords, role_id)
VALUES
    ('Ndiaye', 'Fatou', 'fatou.mbacke@gmail.com', 'motdepasse123', 1),
    ('Diop', 'Mousstapha', 'mousstapha.diop@gmail.com', 'motdepasse456', 1);

CREATE TABLE transferts(
    id SERIAL PRIMARY KEY,
    eleve_id INT NOT NULL REFERENCES eleves(id),
    etablissment_dorigin VARCHAR(60) NOT NULL,
    statut VARCHAR(30) CHECK(statut IN ('EN ATTENTE', 'INSCRIT', 'NON AFFECTE'))
);

CREATE TABLE inscriptions(
    id SERIAL PRIMARY KEY,
    eleve_id INT REFERENCES eleves(id),
    annee_id INT REFERENCES anneeScolaires(id),
    classe_id INT REFERENCES classes(id),
    id_utilisateur INT REFERENCES utilisateurs(id_user),
    statut VARCHAR(30)
        CHECK (statut IN ('PREINSCRIPTION', 'EN ATTENTE', 'INSCRIT', 'NON AFFECTE'))
        DEFAULT 'PREINSCRIPTION'
);

INSERT INTO inscriptions(eleve_id, annee_id, classe_id, statut)
VALUES
    (1, 1, 1, 'INSCRIT'),
    (2, 1, 1, 'INSCRIT'),
    (3, 1, 2, 'EN ATTENTE');

CREATE TABLE justificatifs(
    id SERIAL PRIMARY KEY,
    inscription_id INT NOT NULL REFERENCES inscriptions(id),
    type_document VARCHAR(50) NOT NULL
        CHECK (type_document IN ('EXTRAIT_NAISSANCE', 'CERTIFICAT_MEDICAL', 'ANCIENS_BULLETINS', 'PHOTOS_IDENTITE')),
    nom_fichier VARCHAR(150),
    chemin_fichier VARCHAR(255),
    statut VARCHAR(20) CHECK (statut IN ('MANQUANT', 'FOURNI')) DEFAULT 'MANQUANT',
    date_ajout TIMESTAMP
);

SELECT * FROM eleves;
SELECT * FROM classes;
SELECT * FROM responsables;
SELECT * FROM inscriptions;
SELECT * FROM justificatifs;