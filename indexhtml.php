<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="DCS..png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        header {
            background-color: #4CAF50;
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

        .tabs {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            max-width: 1200px;
        }

        .tab {
            flex: 1;
            margin: 10px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        h2 {
            color: #003366;
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            font-weight: bold;
        }

        form input, form select, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #666;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        form button:hover {
            background-color: #e64a19;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #4CAF50;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            animation: moveFooter 2s infinite alternate;
        }

        @keyframes moveFooter {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-10px);
            }
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container form {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .form-container form input::placeholder,
        .form-container form select::placeholder {
            font-style: italic;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Hospital Management System</h1>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="index.php">Records</a></li>
                <li><a href="Health tips.php">Health tips</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="tabs">
            <div class="tab" id="add-patient">
                <h2>Patient Records</h2>
                <form action="save_patient.php" method="post">
                    <label for="name">Patient's Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter patient's name">

                    <label for="age">Patient's Age:</label>
                    <input type="number" id="age" name="age" required placeholder="Enter patient's age">

                    <label for="gender">Patient's Gender:</label>
                    <select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="disease">Patient's Disease:</label>
                    <input type="text" id="disease" name="disease" required placeholder="Enter patient's disease">

                    <label for="email">Patient's E-mail:</label>
                    <input type="email" id="email" name="E_mail" required>

                    <label for="phone">Patient's Phone Number:</label>
                    <input type="tel" id="phone" name="Phone_number" required>

                    <label for="specialist">Specialist Name:</label>
                    <input type="text" id="specialist" name="specialist" required>

                    <button type="submit">Save Record</button>
                </form>
            </div>

            <div class="tab" id="add-specialist">
                <h2>Specialist Records</h2>
                <form action="save_specialist.php" method="post">
                    <label for="name">Specialist's Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter specialist's name">

                    <label for="age">Specialist's Age:</label>
                    <input type="number" id="age" name="age" required placeholder="Enter specialist's age">

                    <label for="gender">Specialist's Gender:</label>
                    <select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="email">Specialist's E-mail:</label>
                    <input type="email" id="email" name="E_mail" required placeholder="Example: akibaamani2@gmail.com">

                    <label for="phone">Specialist's Phone Number:</label>
                    <input type="tel" id="phone" name="Phone_number" required placeholder="Tel: 0795909019">

                    <button type="submit">Save Record</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Hospital Management System. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
