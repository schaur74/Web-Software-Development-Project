DROP TABLE IF EXISTS jobOpenings;
DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS jobOpenings
(
    openJobID INT NOT NULL AUTO_INCREMENT,
    jobTitle VARCHAR(250) NOT NULL,
    jobDetails VARCHAR(1000) NOT NULL,
    jobLocation VARCHAR(150) NOT NULL,
    PRIMARY KEY(openJobID)
);

CREATE TABLE IF NOT EXISTS users
(
    personID INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(250) NOT NULL,
    lastName VARCHAR(250) NOT NULL,
    userEmail VARCHAR(250) NOT NULL,
    userName VARCHAR(250) NOT NULL,
    userPassword VARCHAR(150) NOT NULL,
    PRIMARY KEY(personID)
);
CREATE TABLE IF NOT EXISTS questions 
(
    questionID INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(250) NOT NULL,
    question VARCHAR(1000) NOT NULL,
    PRIMARY KEY(questionID)
);
