<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptDemo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE Student(
    StudentID int(9) PRIMARY KEY,
    FirstName varchar(50),
    LastName varchar(50),
    DateOfBirth varchar(50),
    Email varchar(50),
    Phone int(11)
    )";

$sql = "CREATE TABLE Course(
    CourseID varchar(50) PRIMARY KEY,
    CourseName varchar(50),
    Credits int(2)
    )";

$sql = "CREATE TABLE Instructor(
    InstructorID int(9) PRIMARY KEY,
    FirstName varchar(50),
    LastName varchar(50),
    Email varchar(50),
    Phone int(11)
    )";

$sql = "CREATE TABLE Enrollment(
    EnrollmentID int(50) PRIMARY KEY,
    StudentID int(9),
    CourseID varchar(50),
    FOREIGN KEY (StudentID) REFERENCES student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID),
    EnrollmentDate date,
    Grade int(3)
    )";

$sql = "INSERT INTO Student(StudentID, FirstName, LastName, DateOfBirth, Email, Phone)
VALUES ('226162453', 'Christian', 'Dawang', '2004-02-16', 'cd@gmail.com',
'123456789')";

if ($conn->query($sql) === TRUE) {
    echo "<br> All Good";
  } else {
    echo "<br> All Not Good" . $conn->error;
  }

?>