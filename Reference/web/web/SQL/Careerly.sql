CREATE DATABASE Careerly;
USE Careerly;
CREATE TABLE Students(matric_num INT NOT NULL PRIMARY KEY,
					  Fname VARCHAR(25),
                      Lname VARCHAR(25),
                      Mname VARCHAR(25),
                      Sex VARCHAR(1),
                      Degree VARCHAR(20),
                      Division VARCHAR(10),
                      Skils VARCHAR(50),
                      Certifications VARCHAR(25));

CREATE TABLE Careers(Skill_Required VARCHAR(50),
					 Division_Required VARCHAR(50),
					 Certification_Required VARCHAR(50),
                     Degree_Required VARCHAR(100),
					 Phone_Number VARCHAR(11),
					 Job_Available VARCHAR(50)); 
                     
DESCRIBE Careers; 
INSERT INTO CAREERS VALUES ("Data Analysis", "Second Class Upper and above", " ", "B.sc Software Engineering/Computer Science, M.sc Software Engineering/Computer Science", "08045627821", "Data Scientist");
INSERT INTO CAREERS VALUES ("UI/UX", "first class/second class upper", "Any UI/UX Certification", "B.sc in any IT course", "08023489475", "Product Desiger"); 
INSERT INTO CAREERS VALUES ("Web Development", "First Class/second class upper", "any recognized certification", "B.sc in any IT course", "08023489475", "Web Developer");
INSERT INTO CAREERS VALUES ("Ethical Hacking", "First CLass/Second class upper", "Any legitimate Cybersecurity certification", "Minimum of B.sc in any IT course", "08023489475", "Cyber Security Specialist"); 
 
TRUNCATE CAREERS;
                     

                      
						