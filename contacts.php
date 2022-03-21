<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR</title>
    <link rel="stylesheet" href="contacts.css">
</head>
<body>
    <div class ="container">
        <header class= header>
            <div class="logo">
                <a href="#"><img src="Pics/Logo2.png" alt = "Logo"></a>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#">CONTACTS</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="sign-up.html">SIGN UP</a></li>
                    <li><a class="login-btn" href="index.html"><button>LOGIN</button></a></li>
                </ul>
            </nav>
        </header>
        <div class="intro">
        <p> Tour - The app that provides information on Travel and Entertainment among other services across 
            The United Kingdom, Mauritius and Kenya.</p>
        </div>


        <div class="login-form">
            <form action="register.php" method="post">
                <label>
                    <input type="text" placeholder="Full name" name="name" required>
                </label>

                <label>
                    <input type="email" placeholder="Contact email" name="email" required>
                </label> 
             
                <label>
                    <input type="text" placeholder="Subject" name="subject" required>
                </label> 

                <label>
                    <input type="number" placeholder="Contact phone number" name="contact" required>
                </label> 

                <label>
                    <input type="text" placeholder="Message" name="message" required>
                </label> 

                <button name ="save" type="submit">SEND MESSAGE</button>
                
            </form>
        </div>

    </div>

    



    <script src="script.js"></script>
</body>
</html>