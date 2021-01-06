<?php include"conn.php"; ?>
<?php  require_once 'sendEmails.php'; ?>

<?php
$errors = array(); 
$success = array(); 
$username = "";
$email = "";
$errors = [];
$success = [];
// REGISTER USER
if (isset($_POST['submit'])) {
    // receive all input values from the form

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $nationalID = mysqli_real_escape_string($conn, $_POST['nationalID']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    

    //ensure that the form is correctly filled by adding (array_push())

    if (empty($username)) {array_push($errors, "Username is required");}
    if (empty($email)) {array_push($errors, "Email is required");}
    if (empty($password_1)) {array_push($errors, "Password is required");}
    if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}



// first check the database to make sure a user , Email does not already exist.

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    while ($row = mysqli_fetch_array($result)) {


        $_SESSION['userid'] = $row['userid'];

    }

    if ($user) { // if user exists
        if ($user['username'] === $username) {array_push($errors, "Username already exists");}
        if ($user['email'] === $email) {array_push($errors, "email already exists");}
    }
// first check the database to make sure a phone , NationalID does not already exist.

    $user_check_query2 = "SELECT * FROM users WHERE nationalID='$nationalID' OR phone='$phone' LIMIT 1";
    $result2 = mysqli_query($conn, $user_check_query2);
    $user2 = mysqli_fetch_assoc($result2);

    while ($row2 = mysqli_fetch_array($result2)) {


        $_SESSION['userid'] = $row2['userid'];

    }

    if ($user2) { // if user exists
        if ($user2['nationalID'] === $nationalID) {array_push($errors, "nationalID already exists");}
        if ($user2['phone'] === $phone) {array_push($errors, "phone already exists");}
    }
	
	
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database'
		// Generate random token
        $token = md5(rand().time());
		
		$sqlit = "INSERT INTO users(username,email,password,phone,address,nationalID,gender,age,token,verified) VALUES('$username','$email','$password','$phone'
			,'$address','$nationalID','$gender','$age','$token','0')";	
	sendVerificationEmail($email, $token);
			
			mysqli_query($conn, $sqlit);
					header('location:login.php');  

	
	}
	}

//--------------------------------------------------------L O G I N-------------------------------------------------------//

if(isset($_POST['login_submit'])){
	 $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {array_push($errors, "Username is required");}
  if (empty($password)) {array_push($errors, "password is required");}

  if (count($errors) == 0) {
  	$password = md5($password);
	
	
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $userid = $row['userid'];
	  $_SESSION['userid'] = $row['userid'];
	  $_SESSION['username'] = $username;
	  $_SESSION['email'] = $email;
	  $_SESSION['image'] = $image;


  	  header('location: home.php');
			 }}else {
  		array_push($errors, "Wrong username or password !");
  	}
  }
  
 mysqli_close($conn);	
 
}


?>














