<!DOCTYPE html>
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
            background-color: grey;
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
    <center>
        <main>
     <fieldset>
       <legend>
        <section id="welcome">
            <h2><b><center>Welcome to the Hospital Management System</center></b></h2>
            <p><center>Manage patient records efficiently and effectively.</center></p>
        </section>
      </legend>
    </fieldset>

    </main>
</center>

    <footer>
        <p>&copy; 2025 Hospital Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
