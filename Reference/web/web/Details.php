<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        
        /* @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,700;1,300;1,500;1,700&display=swap'); */

        table{
            margin-left:auto;
            margin-right: auto;
            margin-top:auto;
            margin-bottom:auto;

            
        }

         th{
            background-color: black;
            color:white;
            border:1px solid black;
            padding:1.5em;
            border-radius:10px;
        }

        td{
            color:black;
            background-image: linear-gradient(to right, #D63B42, white);
            border-radius: 5px;
            text-align: center;
            padding: 1em;
            font-family: 'Ubuntu', sans-serif;

        }


        body{
            background-color:#2F2FA2;
        }

        .return{
            float:right;
            height: 30px;
            width:100px;
            margin-right:50px
        }
    </style>
</head>
<body>

        <center><a href="home.html"><img src="logo.png" alt="Logo" width="20%"></a></center>
        
   <center> <table>
        <tr>
            <th>Course</th>
            <th>Skill Required</th>
            <th>Division Required</th>
            <th>Certification Required</th>
            <th>Degree Required</th>
            <th>Job Available</th>
            </tr>
 <?php
$conn = new mysqli('localhost', 'root', '0luw@temmy669', 'Careerly');
if($conn->connect_error){
    die('connection Failed : ' .$conn->connect_error);

   }

   $course = $_GET['Course'];
$result = mysqli_query($conn,"SELECT * FROM Careers WHERE Course = '$course'");
while($row = mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['Course']."</td>";
    echo"<td>".$row['Skill_Required']."</td>";
    echo"<td>".$row['Division_Required']."</td>";
    echo"<td>".$row['Certification_Required']."</td>";
    echo"<td>".$row['Degree_Required']."</td>";
    echo"<td>".$row['Job_Available']."</td>";
    echo"</tr>";
}
?>
    </table>

        <a href="findRequirements.html" class = "return"><button>Go Back To Form</button></a>
</center>
</body>
</html>

<?php
mysqli_close($conn);
?>
