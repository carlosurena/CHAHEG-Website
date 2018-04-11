DROP DATABASE IF EXISTS 'CHAHEG';
CREATE DATABASE CHAHEG;

CREATE TABLE User (
    UserID int NOT NULL AUTO_INCREMENT,
    Email varchar(255) UNIQUE,
    Password varchar(255),
    School varchar(255),
    LastName varchar(255),
    FirstName varchar(255),
    PermissionID int NOT NULL,
    PRIMARY KEY(UserID),
    FOREIGN KEY(PermissionID) REFERENCES Permissions(PermissionID)
    
);

CREATE TABLE Permission (
    PermissionID int NOT NULL AUTO_INCREMENT,
    Name varchar(255),
    Description BLOB,
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(PermissionID)
);

CREATE TABLE CourseSection (
    SectionID int NOT NULL AUTO_INCREMENT,
    Name varchar(255),
    Description BLOB,
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(SectionID)
);

CREATE TABLE TestMaterial (
    TestID int NOT NULL AUTO_INCREMENT,
    MaterialPath varchar(255),
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(TestID)
);

CREATE TABLE TestQuestion (
    QuestionID int NOT NULL AUTO_INCREMENT,
   	TestID int NOT NULL,
    SectionID int NOT NULL,
    Question BLOB,
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(QuestionID),
    FOREIGN KEY(TestID) REFERENCES TestMaterial(TestID),
    FOREIGN KEY(SectionID) REFERENCES CourseSection(SectionID)
);

CREATE TABLE TestAnswer (
    AnswerID int NOT NULL AUTO_INCREMENT,
    QuestionID int NOT NULL,
    Answer BLOB,
    IsAnswer int NOT NULL DEFAULT 0,
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(AnswerID),
    FOREIGN KEY(QuestionID) REFERENCES TestQuestion(QuestionID)
);

CREATE TABLE Result (
    EntryID int NOT NULL AUTO_INCREMENT,
   	UserID int NOT NULL,
   	TestID int NOT NULL,
    Result int,
    Taken int NOT NULL DEFAULT 0,
    PRIMARY KEY(EntryID),
    FOREIGN KEY(UserID) REFERENCES User(UserID),
    FOREIGN KEY(TestID) REFERENCES TestMaterial(TestID)
);



INSERT INTO coursesection VALUES(null,"test1","This is Test 1", "Creator1", NOW(), "Updater1", NOW());
INSERT INTO coursesection VALUES(null,"test2","This is Test 2", "Creator2", NOW(), "Updater2", NOW());
INSERT INTO coursesection VALUES(null,"test3","This is Test 3", "Creator3", NOW(), "Updater3", NOW());
INSERT INTO coursesection VALUES(null,"test4","This is Test 4", "Creator4", NOW(), "Updater4", NOW());
INSERT INTO coursesection VALUES(null,"test5","This is Test 5", "Creator5", NOW(), "Updater5", NOW());
INSERT INTO coursesection VALUES(null,"test6","This is Test 6", "Creator6", NOW(), "Updater6", NOW());
INSERT INTO coursesection VALUES(null,"test7","This is Test 7", "Creator7", NOW(), "Updater7", NOW());
INSERT INTO coursesection VALUES(null,"test8","This is Test 8", "Creator8", NOW(), "Updater8", NOW());
INSERT INTO coursesection VALUES(null,"test9","This is Test 9", "Creator9", NOW(), "Updater9", NOW());
INSERT INTO coursesection VALUES(null,"test10","This is Test 10", "Creator10", NOW(), "Updater10", NOW());

INSERT INTO testmaterial VALUES(null,"http://my.visme.co/projects/dmvvdg0k-6ep5dm1gwej75dz3","Creator1",NOW(),"Updater1",NOW());
INSERT INTO testmaterial VALUES(null,"https://my.visme.co/projects/kkzxj9jk-18r276j7gn3756qz","Creator2",NOW(),"Updater2",NOW());
INSERT INTO testmaterial VALUES(null,"https://my.visme.co/projects/01oy4v70-64r50193e6kr2pz1","Creator3",NOW(),"Updater3",NOW());
INSERT INTO testmaterial VALUES(null,"https://my.visme.co/projects/dmvdewg1-owpln01w84wn5zd6","Creator4",NOW(),"Updater4",NOW());

INSERT INTO User VALUES(null,"johndoe@aol.com","password","Fairfield University", "Doe", "John", 0);
INSERT INTO User VALUES(null,"stevewilliams@aol.com","password!2","Quinnipiac University", "Williams", "Steve", 0);
INSERT INTO User VALUES(null,"admin@gmail.com","adminpassword","Connecticut College", "Adminson", "Admin", 1);
INSERT INTO User VALUES(null,"christophersuter@gmail.com","chrispassword","Fairfield University", "Suter", "Christopher", 0);

INSERT INTO Result VALUES(null,1,1,95,1);
INSERT INTO Result VALUES(null,2,1,79,1);
INSERT INTO Result VALUES(null,2,2,64,1);
INSERT INTO Result VALUES(null,1,2,100,1);
