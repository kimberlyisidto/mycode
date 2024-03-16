# mycode
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAGAYAN DE ORO COLLEGE - PHINMA EDUCATION</title>
    <link rel="stylesheet" href="aboutstyle.css" />   
    <style>
     header {
            height: 120px; /* Adjust the height as needed */
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 10px 12px 0px #e1e1e1; /* Bottom box-shadow */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999; /* Ensure navbar is on top */
        }

        .main {
            width: 90%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

header img {
    margin-top: 100px;
    float: left;
    width: 320px;
    margin-left: -3%;
}

.page-title {
    font-size: 23px;
    float: center; 
    margin-left: 8%;
    margin-top: 80px;
    color: rgb(21, 104, 21);
    letter-spacing: 2px;
    text-shadow: 0px 11px 10px rgba(81,67,21,0.8);
    margin-bottom: 0%;
    margin-right: 10px;
    white-space: nowrap;
}

.menu {
    width: 400px;
    float: left; 
    margin-top: 180px;
    height: -1px;
    padding: 10pv;

}

ul {
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -50%;
    
    
}

ul li {
    list-style: none;
    margin-left: 80px;
    margin-top: 27px;
    font-size: large;
    white-space: nowrap;
    z-index: 5;
}

ul li a {
    text-decoration: none;
    color: #000000;
    font-family: Andale Mono, monospace; 
    font-weight: lighter;
    transition: 0.5s ease-in-out;
    font-weight: bold; 
    
} 

.menu ul li a:hover {
   
    color: green /* Adjust the text color on hover */
}


.active {
    color: rgb(211, 211, 94); 
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
    z-index: 5;
}

        body {
            margin: 0;
            padding-top: 100px; /* Adjust according to navbar height */
        }

        
    </style>
</head>

<body>
    <header>
        <div class="main">
            <img src="logo.jpg" alt="logo" class="logo"> 
            <h2 class="page-title">PHINMA COC SCHOOL JOB LISTINGS</h2>
            <div class="menu">
                <ul> 
                    <li><a href="index.html" class="active">HOME</a></li> 
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="jobvac.php">JOB VACANCIES</a></li> 
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </header>
  
<style>
    
h3{
    margin-top:3%;
    margin-bottom: 2%;
    font-size: 75px;
    font-weight: lighter;
    margin-left:24%;
    text-align: left;
    font-family: 'Brush Script MT', cursive;
}
</style>

   <section id="about-listings">
        <div id="about-listings-text">
            <div class="green-background"></div>
            <h3 class="About Us">About Us</h3>
            <p>
              As a means to support our growth, Phinma Cagayan de Oro College seeks to hire the top
                 and most outstanding staff members. And provide everyone with the best services and 
                 instruction possible.
                 
                 Join us and be part of a dynamic community that values education and nurtures growth.
            </p>  

            <img src="abt2.png" alt="Team Photo" class="team-image">
            <img src="abt1.png" alt="School Photo" class="comers-image">
        </div>
    </section>

    

</body>
</html>
