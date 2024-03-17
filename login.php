<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<main>
  
<header>
  <img src="lag.png" alt="logo"> 
        </header>


			<div class="Form-box">
			<form action="authenticate.php" method="post">
			<h1>Login Form</h1>

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
				<input type="submit" value="Login">
			</form>
		</div>
</main>
	<style>

		.body{

			background-image: linear-gradient(to left, rgb(7, 116, 25) , rgb(216, 233, 218));

		}
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
		main {
    position: relative;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to left, rgb(7, 116, 25) , rgb(216, 233, 218));
    background-size: cover;
    background-position: center;
    overflow:auto;
}

header img {
    margin-top: 15px;
    float: left;
    width: 320px;
    margin-left: 3%;
    margin-bottom: 1%;
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
.Form-box form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: 100%;
    position: absolute;
    transition: all .5s ease;
    z-index: 7;
}

.input-box {
    width: 80%;
    display: flex;
    justify-content: space-between;
    position: relative;
    border-bottom: 1px solid rgb(5, 2, 2);
    margin: 40px 0px;
}

.input-box input{
    width: 90%;
    position: absolute;
    color: rgb(225, 233, 225);
    font-size: 20px;
    border: none;
    background: none;
    outline: none;
    left: 25%;
    top: -2%;
}
.input-box label{
    transition: .4s;

}
.checkbox{
    width: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}


.goback-buttons {
    display: flex;
    align-items: center;
    margin-bottom: 2%;
    margin-top: 3%;
}

.goback-button {
    color: rgb(255, 255, 255);
    padding: 5px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
  
}
    </style>

</html>
