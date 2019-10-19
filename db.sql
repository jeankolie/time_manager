

CREATE TABLE annee(
        id_annee Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL
	,CONSTRAINT annee_PK PRIMARY KEY (id_annee)
)ENGINE=InnoDB;



CREATE TABLE personnel(
        id_personnel Int  Auto_increment  NOT NULL ,
        nom          Varchar (150) NOT NULL ,
        login        Varchar (50) NOT NULL ,
        password     Varchar (100) NOT NULL
	,CONSTRAINT personnel_PK PRIMARY KEY (id_personnel)
)ENGINE=InnoDB;


CREATE TABLE matiere(
        id_matiere Int  Auto_increment  NOT NULL ,
        nom        Varchar (100) NOT NULL ,
        slug       Varchar (100) NOT NULL
	,CONSTRAINT matiere_PK PRIMARY KEY (id_matiere)
)ENGINE=InnoDB;


CREATE TABLE departement(
        id_departement Int  Auto_increment  NOT NULL ,
        nom            Varchar (100) NOT NULL ,
        responsable    Varchar (100) NOT NULL ,
        slug           Varchar (100) NOT NULL
	,CONSTRAINT departement_PK PRIMARY KEY (id_departement)
)ENGINE=InnoDB;


CREATE TABLE semestre(
        id_semestre Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        slug        Varchar (50) NOT NULL
	,CONSTRAINT semestre_PK PRIMARY KEY (id_semestre)
)ENGINE=InnoDB;


CREATE TABLE licence(
        id_licence Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        slug       Varchar (50) NOT NULL
	,CONSTRAINT licence_PK PRIMARY KEY (id_licence)
)ENGINE=InnoDB;


CREATE TABLE appartenir(
        id_personnel   Int NOT NULL ,
        id_departement Int NOT NULL
	,CONSTRAINT appartenir_PK PRIMARY KEY (id_personnel,id_departement)

	,CONSTRAINT appartenir_personnel_FK FOREIGN KEY (id_personnel) REFERENCES personnel(id_personnel)
	,CONSTRAINT appartenir_departement0_FK FOREIGN KEY (id_departement) REFERENCES departement(id_departement)
)ENGINE=InnoDB;


CREATE TABLE associer(
        id_departement Int NOT NULL ,
        id_matiere     Int NOT NULL
	,CONSTRAINT associer_PK PRIMARY KEY (id_departement,id_matiere)

	,CONSTRAINT associer_departement_FK FOREIGN KEY (id_departement) REFERENCES departement(id_departement)
	,CONSTRAINT associer_matiere0_FK FOREIGN KEY (id_matiere) REFERENCES matiere(id_matiere)
)ENGINE=InnoDB;


CREATE TABLE sender(
        id_departement Int NOT NULL ,
        id_licence     Int NOT NULL
	,CONSTRAINT sender_PK PRIMARY KEY (id_departement,id_licence)

	,CONSTRAINT sender_departement_FK FOREIGN KEY (id_departement) REFERENCES departement(id_departement)
	,CONSTRAINT sender_licence0_FK FOREIGN KEY (id_licence) REFERENCES licence(id_licence)
)ENGINE=InnoDB;


CREATE TABLE enseigne(
        id_departement Int NOT NULL ,
        id_annee       Int NOT NULL ,
        id_matiere     Int NOT NULL ,
        id_semestre    Int NOT NULL ,
        id_licence     Int NOT NULL ,
        professeur     Varchar (150) NOT NULL ,
        jour           Varchar (15) NOT NULL ,
        intervale       Varchar (15) NOT NULL
	,CONSTRAINT enseigne_PK PRIMARY KEY (id_departement,id_annee,id_matiere,id_semestre,id_licence)

	,CONSTRAINT enseigne_departement_FK FOREIGN KEY (id_departement) REFERENCES departement(id_departement)
	,CONSTRAINT enseigne_annee0_FK FOREIGN KEY (id_annee) REFERENCES annee(id_annee)
	,CONSTRAINT enseigne_matiere1_FK FOREIGN KEY (id_matiere) REFERENCES matiere(id_matiere)
	,CONSTRAINT enseigne_semestre2_FK FOREIGN KEY (id_semestre) REFERENCES semestre(id_semestre)
	,CONSTRAINT enseigne_licence3_FK FOREIGN KEY (id_licence) REFERENCES licence(id_licence)
)ENGINE=InnoDB;


CREATE TABLE comporte(
        id_semestre Int NOT NULL ,
        id_licence  Int NOT NULL
	,CONSTRAINT comporte_PK PRIMARY KEY (id_semestre,id_licence)

	,CONSTRAINT comporte_semestre_FK FOREIGN KEY (id_semestre) REFERENCES semestre(id_semestre)
	,CONSTRAINT comporte_licence0_FK FOREIGN KEY (id_licence) REFERENCES licence(id_licence)
)ENGINE=InnoDB;

