<?php
if(isset($email_address) || isset($user_password) ){
$email_address = $_POST['email_address'];
$user_password = $_POST['user_password'];
$error = "";
$conn= new mysqli ('localhost','root','','wdp');

if ($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}else{
    $stmt = $conn->prepare("select* from entry_details where email_address = ?");
    $stmt->bind_param("s",$email_address);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if( $stmt_result-> num_rows > 0){
        $data = $stmt_result-> fetch_assoc();
        
            if($data['user_password'] === $user_password){
                header("Location:landing.html");
                die;
            
            }

            if($data['user_password'] !== $user_password){
                $error="Invalid login";
            }
       
    }
}
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR</title>
    <link rel="stylesheet" href="styles.css">
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
                    <li><a class="login-btn" href="index.php"><button>LOGIN</button></a></li>
                </ul>
            </nav>
        </header>
        <div class="intro">
        <p> Tour - The app that provides information on Travel and Entertainment among other services across 
            The United Kingdom, Mauritius and Kenya.</p>
        </div>

        <div class="heading">
            <h1>Log In</h1>
        </div>
        <?php if(!empty($error)) {?>
        <p class="error"><?php echo $error; ?></p>
        <?php } ?>

        <div class="login-form">
            <form method="post">
                <label>
                    <input type="email" placeholder="Email address" name="email_address" required>
                </label>

                <label>
                    <input type="password" placeholder="Password" name="user_password" required>
                </label>  

                <div class="forgot">
                    <input type="checkbox" name="remember"> Remember me      
                    <span class="psw"><a href="#"> Forgot password? </a></span>
                </div>

                <button type="submit">LOGIN</button>
                
            </form>
        </div>

        <div class="to-sign-up">
        <p>If you do not currently have an account <a href="sign-up.html">sign up</a></p>
        </div>
    </div>

    



    <script src="script.js"></script>
</body>
</html>