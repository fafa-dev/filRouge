#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_user           Int  Auto_increment  NOT NULL ,
        code_user         Varchar (50) NOT NULL ,
        nom_user          Varchar (50) NOT NULL ,
        prenom_user       Varchar (50) NOT NULL ,
        categorie         Varchar (50) NOT NULL ,
        date_adhesion     Date NOT NULL ,
        date_fin_adhesion Date NOT NULL ,
        email_user        Varchar (50) NOT NULL ,
        adresse_user      Varchar (50) NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: auteur
#------------------------------------------------------------

CREATE TABLE auteur(
        id_auteur     Int  Auto_increment  NOT NULL ,
        nom_auteur    Varchar (50) NOT NULL ,
        prenom_auteur Varchar (50) NOT NULL
	,CONSTRAINT auteur_PK PRIMARY KEY (id_auteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: theme
#------------------------------------------------------------

CREATE TABLE theme(
        id_theme Int  Auto_increment  NOT NULL ,
        theme    Varchar (50) NOT NULL
	,CONSTRAINT theme_PK PRIMARY KEY (id_theme)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: editeur
#------------------------------------------------------------

CREATE TABLE editeur(
        id_editeur  Int  Auto_increment  NOT NULL ,
        nom_editeur Varchar (50) NOT NULL
	,CONSTRAINT editeur_PK PRIMARY KEY (id_editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: collection
#------------------------------------------------------------

CREATE TABLE collection(
        id_collection   Int  Auto_increment  NOT NULL ,
        type_collection Varchar (50) NOT NULL
	,CONSTRAINT collection_PK PRIMARY KEY (id_collection)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livre
#------------------------------------------------------------

CREATE TABLE livre(
        id_livres     Int  Auto_increment  NOT NULL ,
        code_livre    Int NOT NULL ,
        titre_livre   Varchar (50) NOT NULL ,
        disponibilite Varchar (50) NOT NULL ,
        id_auteur     Int NOT NULL ,
        id_editeur    Int NOT NULL ,
        id_theme      Int NOT NULL ,
        id_collection Int NOT NULL
	,CONSTRAINT livre_PK PRIMARY KEY (id_livres)

	,CONSTRAINT livre_auteur_FK FOREIGN KEY (id_auteur) REFERENCES auteur(id_auteur)
	,CONSTRAINT livre_editeur0_FK FOREIGN KEY (id_editeur) REFERENCES editeur(id_editeur)
	,CONSTRAINT livre_theme1_FK FOREIGN KEY (id_theme) REFERENCES theme(id_theme)
	,CONSTRAINT livre_collection2_FK FOREIGN KEY (id_collection) REFERENCES collection(id_collection)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: emprunter
#------------------------------------------------------------

CREATE TABLE emprunter(
        id_emprunt           Int  Auto_increment  NOT NULL ,
        date_de_retour_livre Date NOT NULL ,
        date_emprunt         Date NOT NULL ,
        status_emprunt       Varchar (50) NOT NULL ,
        id_user              Int NOT NULL ,
        id_livres            Int NOT NULL
	,CONSTRAINT emprunter_PK PRIMARY KEY (id_emprunt)

	,CONSTRAINT emprunter_utilisateur_FK FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
	,CONSTRAINT emprunter_livre0_FK FOREIGN KEY (id_livres) REFERENCES livre(id_livres)
	,CONSTRAINT emprunter_livre_AK UNIQUE (id_livres)
)ENGINE=InnoDB;

