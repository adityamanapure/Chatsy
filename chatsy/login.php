<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>

<html>
  <style>
  body {
    background-image: url('background/login-bg.jpg');
    background-repeat: no-repeat;
    background-position: left center;
    background-position: 10% center;
    background-size:90vb 80vh;
  
    
   
    }
    .wrapper {
  position: absolute;
  right: 200px;
  display: flex;
}
</style>
<body>
  <div class="wrapper">
    
    <section class="form login">
      <header>CHATSY</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="signup.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
