
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$data = mysqli_connect($host, $user, $password, $db);


if ($data === false) {
    die("Connection error");
}

// Hash the password before storing it in the database
$hashedPassword = password_hash('1234', PASSWORD_DEFAULT);

// Example registration query
$username = "admin";
$sql = "INSERT INTO login (username, password, usertype) VALUES ('$username', '$hashedPassword', 'admin')";
$result = mysqli_query($data, $sql);


mysqli_close($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css" />  
    <style>
        .submit-button {
            width: 100%;
            height: 100px;
            cursor: pointer;
            border-radius: 10px;
            color: #000000;
            text-decoration: none;
            border: 1px solid #171a17;
            margin: 20px 0px;
            padding: 8px 12px;
            font-weight: bold;
            font-size: 17px;
            margin-bottom: 3%;
        }
        .Form-box{
    position: relative;
    width: 400px;
    height: 550px;
    background-color: #009b0d;
    backdrop-filter: blur(100px);
    color: rgb(248, 248, 248);
    font-size: 19px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 16px;
     margin-left: 37%;
     margin-bottom:1%;
     margin-top: 2%;
     margin-bottom: 2%;
     z-index: 3;
    transition: transform .6s ease, height .2s ease-in-out;
        }
    </style>

    <title>Login Form</title>
</head>
<body>
<script>
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username === "" || password === "") {
        document.getElementById("errorMessage").style.display = "block";
    } else {
        // If validation passes, you can perform further actions here
        // For example, you can use JavaScript to send the form data via AJAX
        alert("Form submitted successfully!");
    }
}
</script>

    <main>
        <header>
            <img src="lag.png" alt="logo"> 

        </header>
        
        <div class="Form-box">
            <form action="login.php" method="post" class="Login-form">
                <h1>Admin Login</h1>
                <div class="input-box">
                    <input type="text" name="username" required>
                    <label>Username:</label>
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password:</label>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
                <div class="checkbox">
                    <span>
                        <input type="checkbox" id="login-checkbox">
                        <label for="login-checkbox">Remember Me</label>
                    </span>
                    <h5>Forget password ?</h5>
                </div>

                <div class="submitt-buttons"> 
                <button type="button" onclick="validateForm()">Submit</button>
    </div>
    <div id="errorMessage" style="color: red; display: none;">Please fill in both email and password fields</div>
</div>
            <!--<a href="admin.php" class="submit-button"> Submit</a></h5> -->

             </div>
                </div>
                <div class="goback-buttons"> 
                    <a href="index.html" class="goback-button">Go Back &#x2190</a>
                </div>
            </form>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="script.js"></script>
    </main>


</body>
</html>