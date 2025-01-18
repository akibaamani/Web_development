
<?php
include("conection.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="DCS..png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            color: #333;
        }

        header {
            background-color: aqua;
            color: #fff;
            padding: 30px 50px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 10px 0 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        main {
            padding: 300px;
        }

        section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 1px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
       .section2 {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 1px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        

        h2 {
            color: #0077cc;
        }

        form label {
            display: block;
            margin: 8px 0 5px;
            font-weight: bold;
        }

        form input, form select, form button {
            width: 80%;
            display: block;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form button {
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        form button:hover {
            background-color: #005fa3;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: aqua;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        fieldset{
            padding: 10%;
            width:50%;
        }
        table{
            color:aqua;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hospital Management System</h1>
        <nav>
            <ul>
            <li><a href="Home.php">Home</a></li>
                <li><a href="index.php"> Records</a></li>
                <li><a href="Health tips.php">Health tips</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </nav>
    </header>
    <left>
        <main>
<table border=”2” cellpadding=”3” cellspacing=”3”>
<Caption><b> Patient records</b></caption>
<tr>
    <th>No</th>
<th>Patient's Name</th>
<th>Patient's Age</th>
<th>Patient's Gender</th>
<th>Patient's Disease</th>
<th>Patient's E_mail</th>
<th>Patient's Phone</th>
<th>Specialist Name</th>
<th>Action</th>
</tr>
<?php
$sel="SELECT * FROM patients";
$SELQUERY=mysqli_query($conn,$sel);
$id=0;
while($fetch=mysqli_fetch_array($SELQUERY)){

    $fname=$fetch['name'];
    $age=$fetch['age'];
    $gender=$fetch['gender'];
    $disease=$fetch['disease'];
    $email=$fetch['E_mail'];
    $specialist=$fetch['Specialist'];
    $phone_number=$fetch['Phone_number'];
    $id++;
    ?>

    <tr>
    <th><?php echo $id;?></th>
<th><?php echo $fname;?></th>
<th><?php echo $age;?></th>
<th><?php echo $gender;?></th>
<th><?php echo $disease;?></th>
<th><?php echo $email;?></th>
<th><?php echo $phone_number;?></th>
<th><?php echo $specialist;?></th>
<th><button type="submit">Update</button>  <button type="submit">Delete</button></th>
</tr>

    <?php
}
?>

   
</table>
    </main>
    <main>
        <label>
    <table border=”2” padding="20px" cellpadding=”3” cellspacing=”3”>
<Caption><b> Specialists</b></caption>

<tr>
<th>No</th>
<th>Specialist's Name</th>
<th>Specialist's Age</th>
<th>Specialist's Gender</th>
<th>Specialist's E_mail</th>
<th>Specialist's Phone</th>
<th>Action</th>
</tr>
<?php
$sel="SELECT * FROM Specialist";
$SELQUERY=mysqli_query($conn,$sel);
$id=0;
while($fetch=mysqli_fetch_array($SELQUERY)){

    $fname=$fetch['name'];
    $age=$fetch['age'];
    $gender=$fetch['gender'];
    $email=$fetch['E_mail'];
    $phone_number=$fetch['Phone_number'];
    $id++;
    ?>

    <tr>
    <th><?php echo $id;?></th>
<th><?php echo $fname;?></th>
<th><?php echo $age;?></th>
<th><?php echo $gender;?></th>
<th><?php echo $email;?></th>
<th><?php echo $phone_number;?></th>
<th><button type="submit">Update</button>  <button type="submit">Delete</button></th>
</tr>

    <?php
}
?>

</table>
    </label>
    </main>
    </left>

    <footer>
        <p>&copy; 2025 Hospital Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
