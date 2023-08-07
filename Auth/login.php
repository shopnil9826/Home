<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
       body {
    
    text-align: center;
    Background-color: sky
}
.container {
                width: 400px;
                margin:  auto;
                padding: 50px;
                border: 5px solid #ccc;
                border-radius: 5px;
                background-color: blue;
        }

        h2 {
                text-align: center;
        }
        
        .error {
                color: red;
        }

        label {
                display: block;
                margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 50px;
                border: 5px solid #ccc;
                border-radius: 4px;
        }

        button[type="submit"] {
                width: 100%;
                padding: 8px;
                background-color: #4caf50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
        }

        button[type="submit"]:hover {
                background-color: #45a049;
        }

        p {
                text-align: center;
                margin-top: 150px;
        }
        </style>

<body>
    <div class="container">
        <form action="login_process.php" method="post">
            <h2>login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php  } ?>
    

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required> <br> <br>

            <button type="submit" name="login">Login</button>
            <p>Already have an account? <a href="register.php">Register</a></p>



    </div>

</body>

</html>