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
    FOREIGN KEY(UserID) REFERENCES Users(UserID),
    FOREIGN KEY(TestID) REFERENCES TestMaterial(TestID)
);