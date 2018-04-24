DROP DATABASE IF EXISTS CHAHEG;
CREATE DATABASE CHAHEG;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
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

DROP TABLE IF EXISTS Permissions;
CREATE TABLE Permissions (
    PermissionID int NOT NULL AUTO_INCREMENT,
    Name varchar(255),
    Description varchar(255),
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(PermissionID)
);

DROP TABLE IF EXISTS TestMaterials;
CREATE TABLE TestMaterials (
    TestID int NOT NULL AUTO_INCREMENT,
    TestName varchar(255),
    TestDescription varchar(255),
    MaterialPath varchar(255),
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(TestID)
);

DROP TABLE IF EXISTS TestQuestions;
CREATE TABLE TestQuestions (
    QuestionID int NOT NULL AUTO_INCREMENT,
    TestID int NOT NULL,
    Question varchar(1000),
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(QuestionID),
    FOREIGN KEY(TestID) REFERENCES TestMaterials(TestID)
);

DROP TABLE IF EXISTS TestAnswers;
CREATE TABLE TestAnswers (
    AnswerID int NOT NULL AUTO_INCREMENT,
    QuestionID int NOT NULL,
    Answer varchar(1000),
    IsAnswer int NOT NULL DEFAULT 0,
    CreatedBy varchar(50),
    CreatedOn DATETIME,
    UpdatedBy varchar(50),
    UpdatedOn DATETIME,
    PRIMARY KEY(AnswerID),
    FOREIGN KEY(QuestionID) REFERENCES TestQuestions(QuestionID)
);

DROP TABLE IF EXISTS Results;
CREATE TABLE Results (
    EntryID int NOT NULL AUTO_INCREMENT,
    UserID int NOT NULL,
    TestID int NOT NULL,
    Score int,
    PRIMARY KEY(EntryID),
    FOREIGN KEY(UserID) REFERENCES Users(UserID),
    FOREIGN KEY(TestID) REFERENCES TestMaterials(TestID)
);


INSERT INTO testmaterials (testid, testname, testdescription, materialpath, createdby, createdon, updatedby, updatedon)
VALUES
    (null, "Test 1", "This is Test 1", "http://my.visme.co/projects/dmvvdg0k-6ep5dm1gwej75dz3","Creator1",NOW(),"Updater1",NOW()),
    (null, "Test 2", "This is Test 2", "https://my.visme.co/projects/kkzxj9jk-18r276j7gn3756qz","Creator2",NOW(),"Updater2",NOW()),
    (null, "Test 3", "This is Test 3", "https://my.visme.co/projects/01oy4v70-64r50193e6kr2pz1","Creator3",NOW(),"Updater3",NOW()),
    (null, "Test 4", "This is Test 4", "https://my.visme.co/projects/dmvdewg1-owpln01w84wn5zd6","Creator4",NOW(),"Updater4",NOW());

INSERT INTO Users (userid, email, password, school, lastname, firstname, permissionid)
VALUES
    (null,"johndoe@aol.com","password","Fairfield University", "Doe", "John", 0),
    (null,"stevewilliams@aol.com","password!2","Quinnipiac University", "Williams", "Steve", 0),
    (null,"admin@gmail.com","adminpassword","Connecticut College", "Adminson", "Admin", 1),
    (null,"christophersuter@gmail.com","chrispassword","Fairfield University", "Suter", "Christopher", 0);

INSERT INTO Results (entryid, userid, testid, score)
VALUES
    (null,1,1,95),
    (null,2,1,79),
    (null,2,2,64),
    (null,1,2,100),
    (null,1,3,100),
    (null,1,4,79),
    (null,1,4,75),
    (null,1,4,40),
    (null,3,1,28),
    (null,3,1,28),
    (null,3,1,28),
    (null,3,2,100);


INSERT INTO TestQuestions (questionid, testid, question, createdby, createdon, updatedby, updatedon)
VALUES
    (null, 1,"What is 1+1","Christopher",NOW(),null,null),
    (null, 1,"What is 1+2","Christopher",NOW(),null,null),
    (null, 1,"What is 1+3","Christopher",NOW(),null,null),
    (null, 1,"What is 1+4","Christopher",NOW(),null,null),
    (null, 1,"What is 1+5","Christopher",NOW(),null,null),
    (null, 1,"What is 1+6","Christopher",NOW(),null,null),
    (null, 1,"What is 1+7","Christopher",NOW(),null,null),
    (null, 1,"What is 1+8","Christopher",NOW(),null,null),
    (null, 1,"What is 1+9","Christopher",NOW(),null,null),
    (null, 1,"What is 1+10","Christopher",NOW(),null,null),
    (null, 1,"What is 1+11","Christopher",NOW(),null,null),
    (null, 1,"What is 1+12","Christopher",NOW(),null,null),
    (null, 1,"What is 1+13","Christopher",NOW(),null,null),
    (null, 1,"What is 1+14","Christopher",NOW(),null,null),
    (null, 1,"What is 1+15","Christopher",NOW(),null,null),
    (null, 1,"What is 1+16","Christopher",NOW(),null,null),
    (null, 1,"What is 1+17","Christopher",NOW(),null,null),
    (null, 1,"What is 1+18","Christopher",NOW(),null,null),
    (null, 1,"What is 1+19","Christopher",NOW(),null,null),
    (null, 1,"What is 1+20","Christopher",NOW(),null,null),

    (null, 2,"What is 1+21","Christopher",NOW(),null,null),
    (null, 2,"What is 1+22","Christopher",NOW(),null,null),
    (null, 2,"What is 1+23","Christopher",NOW(),null,null),
    (null, 2,"What is 1+24","Christopher",NOW(),null,null),
    (null, 2,"What is 1+25","Christopher",NOW(),null,null),
    (null, 2,"What is 1+26","Christopher",NOW(),null,null),
    (null, 2,"What is 1+27","Christopher",NOW(),null,null),
    (null, 2,"What is 1+28","Christopher",NOW(),null,null),
    (null, 2,"What is 1+29","Christopher",NOW(),null,null),
    (null, 2,"What is 1+30","Christopher",NOW(),null,null),
    (null, 2,"What is 1+31","Christopher",NOW(),null,null),
    (null, 2,"What is 1+32","Christopher",NOW(),null,null),
    (null, 2,"What is 1+33","Christopher",NOW(),null,null),
    (null, 2,"What is 1+34","Christopher",NOW(),null,null),
    (null, 2,"What is 1+35","Christopher",NOW(),null,null),
    (null, 2,"What is 1+36","Christopher",NOW(),null,null),
    (null, 2,"What is 1+37","Christopher",NOW(),null,null),
    (null, 2,"What is 1+38","Christopher",NOW(),null,null),
    (null, 2,"What is 1+39","Christopher",NOW(),null,null),
    (null, 2,"What is 1+40","Christopher",NOW(),null,null),

    (null, 3,"What is 1+41","Christopher",NOW(),null,null),
    (null, 3,"What is 1+42","Christopher",NOW(),null,null),
    (null, 3,"What is 1+43","Christopher",NOW(),null,null),
    (null, 3,"What is 1+44","Christopher",NOW(),null,null),
    (null, 3,"What is 1+45","Christopher",NOW(),null,null),
    (null, 3,"What is 1+46","Christopher",NOW(),null,null),
    (null, 3,"What is 1+47","Christopher",NOW(),null,null),
    (null, 3,"What is 1+48","Christopher",NOW(),null,null),
    (null, 3,"What is 1+49","Christopher",NOW(),null,null),
    (null, 3,"What is 1+50","Christopher",NOW(),null,null),
    (null, 3,"What is 1+51","Christopher",NOW(),null,null),
    (null, 3,"What is 1+52","Christopher",NOW(),null,null),
    (null, 3,"What is 1+53","Christopher",NOW(),null,null),
    (null, 3,"What is 1+54","Christopher",NOW(),null,null),
    (null, 3,"What is 1+55","Christopher",NOW(),null,null),
    (null, 3,"What is 1+56","Christopher",NOW(),null,null),
    (null, 3,"What is 1+57","Christopher",NOW(),null,null),
    (null, 3,"What is 1+58","Christopher",NOW(),null,null),
    (null, 3,"What is 1+59","Christopher",NOW(),null,null),
    (null, 3,"What is 1+60","Christopher",NOW(),null,null),

    (null, 4,"What is 1+61","Christopher",NOW(),null,null),
    (null, 4,"What is 1+62","Christopher",NOW(),null,null),
    (null, 4,"What is 1+63","Christopher",NOW(),null,null),
    (null, 4,"What is 1+64","Christopher",NOW(),null,null),
    (null, 4,"What is 1+65","Christopher",NOW(),null,null),
    (null, 4,"What is 1+66","Christopher",NOW(),null,null),
    (null, 4,"What is 1+67","Christopher",NOW(),null,null),
    (null, 4,"What is 1+68","Christopher",NOW(),null,null),
    (null, 4,"What is 1+69","Christopher",NOW(),null,null),
    (null, 4,"What is 1+70","Christopher",NOW(),null,null),
    (null, 4,"What is 1+71","Christopher",NOW(),null,null),
    (null, 4,"What is 1+72","Christopher",NOW(),null,null),
    (null, 4,"What is 1+73","Christopher",NOW(),null,null),
    (null, 4,"What is 1+74","Christopher",NOW(),null,null),
    (null, 4,"What is 1+75","Christopher",NOW(),null,null),
    (null, 4,"What is 1+76","Christopher",NOW(),null,null),
    (null, 4,"What is 1+77","Christopher",NOW(),null,null),
    (null, 4,"What is 1+78","Christopher",NOW(),null,null),
    (null, 4,"What is 1+79","Christopher",NOW(),null,null),
    (null, 4,"What is 1+80","Christopher",NOW(),null,null);


INSERT INTO TestAnswers (answerid, questionid, answer, isanswer, createdby, createdon, updatedby, updatedon)
VALUES
#TEST 1
    (null, 1,"1",0,"Christopher",NOW(),null,null),
    (null, 1,"2",1,"Christopher",NOW(),null,null),
    (null, 1,"3",0,"Christopher",NOW(),null,null),
    (null, 1,"4",0,"Christopher",NOW(),null,null),

    (null, 2,"3",1,"Christopher",NOW(),null,null),
    (null, 2,"4",0,"Christopher",NOW(),null,null),
    (null, 2,"5",0,"Christopher",NOW(),null,null),
    (null, 2,"6",0,"Christopher",NOW(),null,null),

    (null, 3,"1",0,"Christopher",NOW(),null,null),
    (null, 3,"2",0,"Christopher",NOW(),null,null),
    (null, 3,"3",0,"Christopher",NOW(),null,null),
    (null, 3,"4",1,"Christopher",NOW(),null,null),

    (null, 4,"1",0,"Christopher",NOW(),null,null),
    (null, 4,"3",0,"Christopher",NOW(),null,null),
    (null, 4,"5",1,"Christopher",NOW(),null,null),
    (null, 4,"7",0,"Christopher",NOW(),null,null),

    (null, 5,"3",0,"Christopher",NOW(),null,null),
    (null, 5,"4",0,"Christopher",NOW(),null,null),
    (null, 5,"5",0,"Christopher",NOW(),null,null),
    (null, 5,"6",1,"Christopher",NOW(),null,null),

    (null, 6,"3",0,"Christopher",NOW(),null,null),
    (null, 6,"5",0,"Christopher",NOW(),null,null),
    (null, 6,"7",1,"Christopher",NOW(),null,null),
    (null, 6,"9",0,"Christopher",NOW(),null,null),

    (null, 7,"2",0,"Christopher",NOW(),null,null),
    (null, 7,"4",0,"Christopher",NOW(),null,null),
    (null, 7,"6",0,"Christopher",NOW(),null,null),
    (null, 7,"8",1,"Christopher",NOW(),null,null),

    (null, 8,"3",0,"Christopher",NOW(),null,null),
    (null, 8,"6",0,"Christopher",NOW(),null,null),
    (null, 8,"9",1,"Christopher",NOW(),null,null),
    (null, 8,"12",0,"Christopher",NOW(),null,null),

    (null, 9,"10",1,"Christopher",NOW(),null,null),
    (null, 9,"11",0,"Christopher",NOW(),null,null),
    (null, 9,"12",0,"Christopher",NOW(),null,null),
    (null, 9,"13",0,"Christopher",NOW(),null,null),

    (null, 10,"10",0,"Christopher",NOW(),null,null),
    (null, 10,"11",1,"Christopher",NOW(),null,null),
    (null, 10,"12",0,"Christopher",NOW(),null,null),
    (null, 10,"13",0,"Christopher",NOW(),null,null),

    (null, 11,"10",0,"Christopher",NOW(),null,null),
    (null, 11,"11",0,"Christopher",NOW(),null,null),
    (null, 11,"12",1,"Christopher",NOW(),null,null),
    (null, 11,"13",0,"Christopher",NOW(),null,null),

    (null, 12,"10",0,"Christopher",NOW(),null,null),
    (null, 12,"11",0,"Christopher",NOW(),null,null),
    (null, 12,"12",0,"Christopher",NOW(),null,null),
    (null, 12,"13",1,"Christopher",NOW(),null,null),

    (null, 13,"14",1,"Christopher",NOW(),null,null),
    (null, 13,"15",0,"Christopher",NOW(),null,null),
    (null, 13,"16",0,"Christopher",NOW(),null,null),
    (null, 13,"17",0,"Christopher",NOW(),null,null),

    (null, 14,"14",0,"Christopher",NOW(),null,null),
    (null, 14,"15",1,"Christopher",NOW(),null,null),
    (null, 14,"16",0,"Christopher",NOW(),null,null),
    (null, 14,"17",0,"Christopher",NOW(),null,null),

    (null, 15,"14",0,"Christopher",NOW(),null,null),
    (null, 15,"15",0,"Christopher",NOW(),null,null),
    (null, 15,"16",1,"Christopher",NOW(),null,null),
    (null, 15,"17",0,"Christopher",NOW(),null,null),

    (null, 16,"14",0,"Christopher",NOW(),null,null),
    (null, 16,"15",0,"Christopher",NOW(),null,null),
    (null, 16,"16",0,"Christopher",NOW(),null,null),
    (null, 16,"17",1,"Christopher",NOW(),null,null),

    (null, 17,"18",1,"Christopher",NOW(),null,null),
    (null, 17,"19",0,"Christopher",NOW(),null,null),
    (null, 17,"20",0,"Christopher",NOW(),null,null),
    (null, 17,"21",0,"Christopher",NOW(),null,null),

    (null, 18,"18",0,"Christopher",NOW(),null,null),
    (null, 18,"19",1,"Christopher",NOW(),null,null),
    (null, 18,"20",0,"Christopher",NOW(),null,null),
    (null, 18,"21",0,"Christopher",NOW(),null,null),

    (null, 19,"18",0,"Christopher",NOW(),null,null),
    (null, 19,"19",0,"Christopher",NOW(),null,null),
    (null, 19,"20",1,"Christopher",NOW(),null,null),
    (null, 19,"21",0,"Christopher",NOW(),null,null),

    (null, 20,"18",0,"Christopher",NOW(),null,null),
    (null, 20,"19",0,"Christopher",NOW(),null,null),
    (null, 20,"20",0,"Christopher",NOW(),null,null),
    (null, 20,"21",1,"Christopher",NOW(),null,null),

#TEST 2

    (null, 21,"22",1,"Christopher",NOW(),null,null),
    (null, 21,"23",0,"Christopher",NOW(),null,null),
    (null, 21,"24",0,"Christopher",NOW(),null,null),
    (null, 21,"25",0,"Christopher",NOW(),null,null),

    (null, 22,"22",0,"Christopher",NOW(),null,null),
    (null, 22,"23",1,"Christopher",NOW(),null,null),
    (null, 22,"24",0,"Christopher",NOW(),null,null),
    (null, 22,"25",0,"Christopher",NOW(),null,null),

    (null, 23,"22",0,"Christopher",NOW(),null,null),
    (null, 23,"23",0,"Christopher",NOW(),null,null),
    (null, 23,"24",1,"Christopher",NOW(),null,null),
    (null, 23,"25",0,"Christopher",NOW(),null,null),

    (null, 24,"22",0,"Christopher",NOW(),null,null),
    (null, 24,"23",0,"Christopher",NOW(),null,null),
    (null, 24,"24",0,"Christopher",NOW(),null,null),
    (null, 24,"25",1,"Christopher",NOW(),null,null),

    (null, 25,"26",1,"Christopher",NOW(),null,null),
    (null, 25,"27",0,"Christopher",NOW(),null,null),
    (null, 25,"28",0,"Christopher",NOW(),null,null),
    (null, 25,"29",0,"Christopher",NOW(),null,null),

    (null, 26,"26",0,"Christopher",NOW(),null,null),
    (null, 26,"27",1,"Christopher",NOW(),null,null),
    (null, 26,"28",0,"Christopher",NOW(),null,null),
    (null, 26,"29",0,"Christopher",NOW(),null,null),

    (null, 27,"26",0,"Christopher",NOW(),null,null),
    (null, 27,"27",0,"Christopher",NOW(),null,null),
    (null, 27,"28",1,"Christopher",NOW(),null,null),
    (null, 27,"29",0,"Christopher",NOW(),null,null),

    (null, 28,"26",0,"Christopher",NOW(),null,null),
    (null, 28,"27",0,"Christopher",NOW(),null,null),
    (null, 28,"28",0,"Christopher",NOW(),null,null),
    (null, 28,"29",1,"Christopher",NOW(),null,null),

    (null, 29,"30",1,"Christopher",NOW(),null,null),
    (null, 29,"31",0,"Christopher",NOW(),null,null),
    (null, 29,"32",0,"Christopher",NOW(),null,null),
    (null, 29,"33",0,"Christopher",NOW(),null,null),

    (null, 30,"30",0,"Christopher",NOW(),null,null),
    (null, 30,"31",1,"Christopher",NOW(),null,null),
    (null, 30,"32",0,"Christopher",NOW(),null,null),
    (null, 30,"33",0,"Christopher",NOW(),null,null),

    (null, 31,"30",0,"Christopher",NOW(),null,null),
    (null, 31,"31",0,"Christopher",NOW(),null,null),
    (null, 31,"32",1,"Christopher",NOW(),null,null),
    (null, 31,"33",0,"Christopher",NOW(),null,null),

    (null, 32,"30",0,"Christopher",NOW(),null,null),
    (null, 32,"31",0,"Christopher",NOW(),null,null),
    (null, 32,"32",0,"Christopher",NOW(),null,null),
    (null, 32,"33",1,"Christopher",NOW(),null,null),

    (null, 33,"34",1,"Christopher",NOW(),null,null),
    (null, 33,"35",0,"Christopher",NOW(),null,null),
    (null, 33,"36",0,"Christopher",NOW(),null,null),
    (null, 33,"37",0,"Christopher",NOW(),null,null),

    (null, 34,"34",0,"Christopher",NOW(),null,null),
    (null, 34,"35",1,"Christopher",NOW(),null,null),
    (null, 34,"36",0,"Christopher",NOW(),null,null),
    (null, 34,"37",0,"Christopher",NOW(),null,null),

    (null, 35,"34",0,"Christopher",NOW(),null,null),
    (null, 35,"35",0,"Christopher",NOW(),null,null),
    (null, 35,"36",1,"Christopher",NOW(),null,null),
    (null, 35,"37",0,"Christopher",NOW(),null,null),

    (null, 36,"34",0,"Christopher",NOW(),null,null),
    (null, 36,"35",0,"Christopher",NOW(),null,null),
    (null, 36,"36",0,"Christopher",NOW(),null,null),
    (null, 36,"37",1,"Christopher",NOW(),null,null),

    (null, 37,"38",1,"Christopher",NOW(),null,null),
    (null, 37,"39",0,"Christopher",NOW(),null,null),
    (null, 37,"40",0,"Christopher",NOW(),null,null),
    (null, 37,"41",0,"Christopher",NOW(),null,null),

    (null, 38,"38",0,"Christopher",NOW(),null,null),
    (null, 38,"39",1,"Christopher",NOW(),null,null),
    (null, 38,"40",0,"Christopher",NOW(),null,null),
    (null, 38,"41",0,"Christopher",NOW(),null,null),

    (null, 39,"38",0,"Christopher",NOW(),null,null),
    (null, 39,"39",0,"Christopher",NOW(),null,null),
    (null, 39,"40",1,"Christopher",NOW(),null,null),
    (null, 39,"41",0,"Christopher",NOW(),null,null),

    (null, 40,"38",0,"Christopher",NOW(),null,null),
    (null, 40,"39",0,"Christopher",NOW(),null,null),
    (null, 40,"40",0,"Christopher",NOW(),null,null),
    (null, 40,"41",1,"Christopher",NOW(),null,null),

#TEST 3

    (null, 41,"42",1,"Christopher",NOW(),null,null),
    (null, 41,"43",0,"Christopher",NOW(),null,null),
    (null, 41,"44",0,"Christopher",NOW(),null,null),
    (null, 41,"45",0,"Christopher",NOW(),null,null),

    (null, 42,"42",0,"Christopher",NOW(),null,null),
    (null, 42,"43",1,"Christopher",NOW(),null,null),
    (null, 42,"44",0,"Christopher",NOW(),null,null),
    (null, 42,"45",0,"Christopher",NOW(),null,null),

    (null, 43,"42",0,"Christopher",NOW(),null,null),
    (null, 43,"43",0,"Christopher",NOW(),null,null),
    (null, 43,"44",1,"Christopher",NOW(),null,null),
    (null, 43,"45",0,"Christopher",NOW(),null,null),

    (null, 44,"42",0,"Christopher",NOW(),null,null),
    (null, 44,"43",0,"Christopher",NOW(),null,null),
    (null, 44,"44",0,"Christopher",NOW(),null,null),
    (null, 44,"45",1,"Christopher",NOW(),null,null),

    (null, 45,"46",1,"Christopher",NOW(),null,null),
    (null, 45,"47",0,"Christopher",NOW(),null,null),
    (null, 45,"48",0,"Christopher",NOW(),null,null),
    (null, 45,"49",0,"Christopher",NOW(),null,null),

    (null, 46,"46",0,"Christopher",NOW(),null,null),
    (null, 46,"47",1,"Christopher",NOW(),null,null),
    (null, 46,"48",0,"Christopher",NOW(),null,null),
    (null, 46,"49",0,"Christopher",NOW(),null,null),

    (null, 47,"46",0,"Christopher",NOW(),null,null),
    (null, 47,"47",0,"Christopher",NOW(),null,null),
    (null, 47,"48",1,"Christopher",NOW(),null,null),
    (null, 47,"49",0,"Christopher",NOW(),null,null),

    (null, 48,"46",0,"Christopher",NOW(),null,null),
    (null, 48,"47",0,"Christopher",NOW(),null,null),
    (null, 48,"48",0,"Christopher",NOW(),null,null),
    (null, 48,"49",1,"Christopher",NOW(),null,null),

    (null, 49,"50",1,"Christopher",NOW(),null,null),
    (null, 49,"51",0,"Christopher",NOW(),null,null),
    (null, 49,"52",0,"Christopher",NOW(),null,null),
    (null, 49,"53",0,"Christopher",NOW(),null,null),

    (null, 50,"50",0,"Christopher",NOW(),null,null),
    (null, 50,"51",1,"Christopher",NOW(),null,null),
    (null, 50,"52",0,"Christopher",NOW(),null,null),
    (null, 50,"53",0,"Christopher",NOW(),null,null),

    (null, 51,"50",0,"Christopher",NOW(),null,null),
    (null, 51,"51",0,"Christopher",NOW(),null,null),
    (null, 51,"52",1,"Christopher",NOW(),null,null),
    (null, 51,"53",0,"Christopher",NOW(),null,null),

    (null, 52,"50",0,"Christopher",NOW(),null,null),
    (null, 52,"51",0,"Christopher",NOW(),null,null),
    (null, 52,"52",0,"Christopher",NOW(),null,null),
    (null, 52,"53",1,"Christopher",NOW(),null,null),

    (null, 53,"54",1,"Christopher",NOW(),null,null),
    (null, 53,"55",0,"Christopher",NOW(),null,null),
    (null, 53,"56",0,"Christopher",NOW(),null,null),
    (null, 53,"57",0,"Christopher",NOW(),null,null),

    (null, 54,"54",0,"Christopher",NOW(),null,null),
    (null, 54,"55",1,"Christopher",NOW(),null,null),
    (null, 54,"56",0,"Christopher",NOW(),null,null),
    (null, 54,"57",0,"Christopher",NOW(),null,null),

    (null, 55,"54",0,"Christopher",NOW(),null,null),
    (null, 55,"55",0,"Christopher",NOW(),null,null),
    (null, 55,"56",1,"Christopher",NOW(),null,null),
    (null, 55,"57",0,"Christopher",NOW(),null,null),

    (null, 56,"54",0,"Christopher",NOW(),null,null),
    (null, 56,"55",0,"Christopher",NOW(),null,null),
    (null, 56,"56",0,"Christopher",NOW(),null,null),
    (null, 56,"57",1,"Christopher",NOW(),null,null),

    (null, 57,"58",1,"Christopher",NOW(),null,null),
    (null, 57,"59",0,"Christopher",NOW(),null,null),
    (null, 57,"60",0,"Christopher",NOW(),null,null),
    (null, 57,"61",0,"Christopher",NOW(),null,null),

    (null, 58,"58",0,"Christopher",NOW(),null,null),
    (null, 58,"59",1,"Christopher",NOW(),null,null),
    (null, 58,"60",0,"Christopher",NOW(),null,null),
    (null, 58,"61",0,"Christopher",NOW(),null,null),

    (null, 59,"58",0,"Christopher",NOW(),null,null),
    (null, 59,"59",0,"Christopher",NOW(),null,null),
    (null, 59,"60",1,"Christopher",NOW(),null,null),
    (null, 59,"61",0,"Christopher",NOW(),null,null),

    (null, 60,"58",0,"Christopher",NOW(),null,null),
    (null, 60,"59",0,"Christopher",NOW(),null,null),
    (null, 60,"60",0,"Christopher",NOW(),null,null),
    (null, 60,"61",1,"Christopher",NOW(),null,null),

#TEST 4

    (null, 61,"62",1,"Christopher",NOW(),null,null),
    (null, 61,"63",0,"Christopher",NOW(),null,null),
    (null, 61,"64",0,"Christopher",NOW(),null,null),
    (null, 61,"65",0,"Christopher",NOW(),null,null),

    (null, 62,"62",0,"Christopher",NOW(),null,null),
    (null, 62,"63",1,"Christopher",NOW(),null,null),
    (null, 62,"64",0,"Christopher",NOW(),null,null),
    (null, 62,"65",0,"Christopher",NOW(),null,null),

    (null, 63,"62",0,"Christopher",NOW(),null,null),
    (null, 63,"63",0,"Christopher",NOW(),null,null),
    (null, 63,"64",1,"Christopher",NOW(),null,null),
    (null, 63,"65",0,"Christopher",NOW(),null,null),

    (null, 64,"62",0,"Christopher",NOW(),null,null),
    (null, 64,"63",0,"Christopher",NOW(),null,null),
    (null, 64,"64",0,"Christopher",NOW(),null,null),
    (null, 64,"65",1,"Christopher",NOW(),null,null),

    (null, 65,"66",1,"Christopher",NOW(),null,null),
    (null, 65,"67",0,"Christopher",NOW(),null,null),
    (null, 65,"68",0,"Christopher",NOW(),null,null),
    (null, 65,"69",0,"Christopher",NOW(),null,null),

    (null, 66,"66",0,"Christopher",NOW(),null,null),
    (null, 66,"67",1,"Christopher",NOW(),null,null),
    (null, 66,"68",0,"Christopher",NOW(),null,null),
    (null, 66,"69",0,"Christopher",NOW(),null,null),

    (null, 67,"66",0,"Christopher",NOW(),null,null),
    (null, 67,"67",0,"Christopher",NOW(),null,null),
    (null, 67,"68",1,"Christopher",NOW(),null,null),
    (null, 67,"69",0,"Christopher",NOW(),null,null),

    (null, 68,"66",0,"Christopher",NOW(),null,null),
    (null, 68,"67",0,"Christopher",NOW(),null,null),
    (null, 68,"68",0,"Christopher",NOW(),null,null),
    (null, 68,"69",1,"Christopher",NOW(),null,null),

    (null, 69,"70",1,"Christopher",NOW(),null,null),
    (null, 69,"71",0,"Christopher",NOW(),null,null),
    (null, 69,"72",0,"Christopher",NOW(),null,null),
    (null, 69,"73",0,"Christopher",NOW(),null,null),

    (null, 70,"70",0,"Christopher",NOW(),null,null),
    (null, 70,"71",1,"Christopher",NOW(),null,null),
    (null, 70,"72",0,"Christopher",NOW(),null,null),
    (null, 70,"73",0,"Christopher",NOW(),null,null),

    (null, 71,"70",0,"Christopher",NOW(),null,null),
    (null, 71,"71",0,"Christopher",NOW(),null,null),
    (null, 71,"72",1,"Christopher",NOW(),null,null),
    (null, 71,"73",0,"Christopher",NOW(),null,null),

    (null, 72,"70",0,"Christopher",NOW(),null,null),
    (null, 72,"71",0,"Christopher",NOW(),null,null),
    (null, 72,"72",0,"Christopher",NOW(),null,null),
    (null, 72,"73",1,"Christopher",NOW(),null,null),

    (null, 73,"74",1,"Christopher",NOW(),null,null),
    (null, 73,"75",0,"Christopher",NOW(),null,null),
    (null, 73,"76",0,"Christopher",NOW(),null,null),
    (null, 73,"77",0,"Christopher",NOW(),null,null),

    (null, 74,"74",0,"Christopher",NOW(),null,null),
    (null, 74,"75",1,"Christopher",NOW(),null,null),
    (null, 74,"76",0,"Christopher",NOW(),null,null),
    (null, 74,"77",0,"Christopher",NOW(),null,null),

    (null, 75,"74",0,"Christopher",NOW(),null,null),
    (null, 75,"75",0,"Christopher",NOW(),null,null),
    (null, 75,"76",1,"Christopher",NOW(),null,null),
    (null, 75,"77",0,"Christopher",NOW(),null,null),

    (null, 76,"74",0,"Christopher",NOW(),null,null),
    (null, 76,"75",0,"Christopher",NOW(),null,null),
    (null, 76,"76",0,"Christopher",NOW(),null,null),
    (null, 76,"77",1,"Christopher",NOW(),null,null),

    (null, 77,"78",1,"Christopher",NOW(),null,null),
    (null, 77,"79",0,"Christopher",NOW(),null,null),
    (null, 77,"80",0,"Christopher",NOW(),null,null),
    (null, 77,"81",0,"Christopher",NOW(),null,null),

    (null, 78,"78",0,"Christopher",NOW(),null,null),
    (null, 78,"79",1,"Christopher",NOW(),null,null),
    (null, 78,"80",0,"Christopher",NOW(),null,null),
    (null, 78,"81",0,"Christopher",NOW(),null,null),

    (null, 79,"78",0,"Christopher",NOW(),null,null),
    (null, 79,"79",0,"Christopher",NOW(),null,null),
    (null, 79,"80",1,"Christopher",NOW(),null,null),
    (null, 79,"81",0,"Christopher",NOW(),null,null),

    (null, 80,"78",0,"Christopher",NOW(),null,null),
    (null, 80,"79",0,"Christopher",NOW(),null,null),
    (null, 80,"80",0,"Christopher",NOW(),null,null),
    (null, 80,"81",1,"Christopher",NOW(),null,null);