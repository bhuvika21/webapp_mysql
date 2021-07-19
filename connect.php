<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$department = filter_input(INPUT_POST, 'department');
$mobile = filter_input(INPUT_POST, 'mobile');
if (!empty($name)){
if (!empty($email)){
if (!empty ($department)){
if (!empty ($mobile)){
$host = "website0404.mysql.database.azure.com";
$dbusername = "mahesh@website0404";
$dbpassword = "mko098ijn123!@#";
$dbname = "employee";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (name, email, department, mobile)
values ('$name','$email','$department','$mobile')";
}
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
$conn->close();
}
}
else {
	echo "mobile should not be empty";
die();
}
}
else {
	echo "department should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 1500;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="result.php" method="post">
                        <input type="submit" class="btn btn-primary" name="submit" value="Check Records">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

