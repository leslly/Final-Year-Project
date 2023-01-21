<?php
        $matric = $_POST['matric'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['midname'];
        $midname = $_POST['lastname'];
        $sex = $_POST['sex'];
        $degree = $_POST['degree'];
        $division = $_POST['division'];
        $skill = $_POST['skills'];
        $certification = $_POST['certification'];

        //Database connection
         $conn = new mysqli('localhost', 'root', '0luw@temmy669', 'Careerly');
         if($conn->connect_error){
             die('connection Failed : ' .$conn->connect_error);
         
            }else{
                $stmt = $conn->prepare("insert into students(matric_num,Fname, Lname, Mname, Sex, Degree, Division, SkiLls, Certifications)
                values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $matric, $firstname, $lastname, $midname, $sex, $degree, $division, $skills,$certification);
                $stmt->execute();
                 include 'regSuccessful.html';
                $stmt->close();
                $conn->close();
            }
?>