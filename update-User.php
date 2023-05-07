<html>
<head>
<title>Slime Rate/Review</title>
<?php require_once('header.php'); ?>
</head>
<?php 
require_once('loginconnection.php');


global $conn;







if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sqlQuery = "UPDATE users
                        SET
                        Username = :Username,
                        Password = :Password,
                        user_type = :user_type,
                    WHERE email = :email";
    
    $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Username', $_POST['Username']);
        $stmt->bindValue(':Password', $_POST['Password']);
        $stmt->bindValue(':user_type', $_POST['user_type']);
        $stmt->execute();
        //Go to login page to test out new sign in   
        header("Location: admin-index.php");
    }
?>
<style>
body{
background-image: url('photos/background.jpg');
background-size: cover;
font-family: 'Ubuntu', sans-serif;
padding-top: 200px;
}
.wrapper {
    text-align:center;
}
.col-4 {
background: rgba(0,0,0,0.25);
        width: 400px;
        height: 320px;
        margin: auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.4);   
}
.sign {
        padding-top: 40px;
        color: white;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
.form-group {
width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
}

.log-in {
      cursor: pointer;
        border-radius: 5em;
        color: #FFF;
        background: #0d0a02;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
.signup {
color: #0d0a02;
cursor: pointer;
        border-radius: 5em;
        color: #FFF;
        background: #0d0a02;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}
</style>


<body>
	<div class="container mt-3 mb-3">
		<form method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<p class="sign" align="center">Update a User</p>

					<div class="form-group">
						<input type="text" class="form-control" id="Username" placeholder="Enter Username" name="Username" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Password" placeholder="Enter Password" name="Password" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="user_type" placeholder="Enter Type of User" name="user_type" required>
					</div>
										<div class="form-group">
						<input type="text" class="form-control" id="Email" placeholder="Enter Email of User" name="Email" required>
					</div>
		<br>

					
					
					<button type="submit" name = "submit" class="log-in">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>


