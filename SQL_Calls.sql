#Reporting
#Show scores for all tests user has taken
SELECT testmaterials.testname, results.score, results.updatedon FROM testmaterials 
	JOIN results ON testmaterials.TestID=results.TestID 
    WHERE userid = 1;

#Show all users scores for a certain test
SELECT users.FirstName, users.LastName, results.score, results.updatedon FROM users 
	JOIN results ON users.userid=results.userid 
    WHERE testid = 1
    ORDER BY users.LastName;

#Show all users scores on all exams
SELECT users.FirstName, users.LastName, results.score, results.updatedon FROM users 
	JOIN results ON users.userid=results.userid
    ORDER BY users.LastName;

#Show all users scores for a certain user who attend a certain school
SELECT users.FirstName, users.LastName, testmaterials.TestName, results.score, results.updatedon FROM users 
	JOIN results ON users.userid=results.userid 
	JOIN testmaterials ON results.testid=testmaterials.testid
	WHERE school = "Fairfield University"
    ORDER BY users.LastName;

#Show all scores on a certain exam from all users from a certain school
SELECT users.FirstName, users.LastName, testmaterials.TestName, results.score, results.updatedon FROM users 
	JOIN results ON users.userid=results.userid 
	JOIN testmaterials ON results.testid=testmaterials.testid
	WHERE school = "Fairfield University" AND results.testid = 4
    ORDER BY users.LastName;

#Tests Page (Select all tests the user has not taken)
SELECT TestName, TestDescription, MaterialPath FROM testmaterials
WHERE testid NOT IN (select testid from results where userid = 4 and score > 80) 
having (select count(testid) from results where userid = 4 and testid=testmaterials.testid) < 3;
	
#Account Page
SELECT firstname, lastname, email, school from users WHERE userid = 1;

# Select random questions for a specific test
SELECT questionid, question FROM testquestions WHERE testid = 4
ORDER BY RAND() LIMIT 10;

SELECT questionid, answerid, answer, isanswer from testanswers where questionid in (62, 70, 80, 74)
ORDER BY questionid, rand();

#Select correct answers given the questionsID
select questionid, answerid from testanswers where questionid in (1,2,3,4,5,6,7,8,9) and isanswer = 1;