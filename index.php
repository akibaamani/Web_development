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
            background-color: blacks;
            color: blue;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        form button:hover {
            background-color:rgb(27, 200, 235);
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

    <main>
    
        <section id="add-patient">
            <fieldset>
            <h2><center>Patient  Records</center></h2>
            <form action="save_patient.php" method="post">
                <label for="name"><center>Patient's Name:</center></label>
                <center><input type="text" id="name" name="name" required  placeholder="Enter patient's name"></center><br>

                <label for="age"><center>Patient's Age:</center></label>
                <center><input type="number" id="age" name="age" required placeholder="Enter patient's age"></center><br>

                <label for="gender"><center>Patient's Gender:</center></label>
                <center> <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select></center><br>

                <label for="desease"><center>Patient's Disease:</center></label>
                <center><input type="disease"name="disease" required placeholder="Enter patient's disease"></center><br>

                <label for="E_mail"><center>Patient's E_mail:</center></label>
                <center><input type="E_mail" name="E_mail" required></center><br>

                <label for="Phone_number"><center>Patients Phone_number:</center></label>
                <center><input type="number" id="Phone_number" name="Phone_number" required></center><br>

                <label for="Specialist"><center>Specialist Name:</center></label>
                <center><input type="text" id="specialist" name="specialist" required></center><br>
                <center><button type="submit">Save Record</button></center>

                <center>
                </center>
            </form>
    </fieldset>
        </section>

    </main>
    <main>
    <section id="add-specialist">
            <fieldset>
            <h2><center>Specialist  Records</center></h2>
            <form action="save_specialist.php" method="post">
                <label for="name"><center>Specialist's Name:</center></label>
                <center><input type="text" id="name" name="name" required  placeholder="Enter specialist's name"></center><br>

                <label for="age"><center>Specialist's Age:</center></label>
                <center><input type="number" id="age" name="age" required placeholder="Enter specialist's age"></center><br>

                <label for="gender"><center>Specialist's Gender:</center></label>
                <center> <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select></center><br>

                <label for="E_mail"><center>Specialist's E_mail:</center></label>
                <center><input type="Specialist" name="E_mail" required paceholder="Example:akibaamani2@gmail.com"></center><br>

                <label for="Phone_number"><center>Specialist's Phone_number:</center></label>
                <center><input type="text" id="Phone_number" name="Phone_number" required placeholder="Tel:0795909019"></center><br>


                <center><button type="submit">Save Record</button></center>
            </form>
    </fieldset>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Hospital Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
