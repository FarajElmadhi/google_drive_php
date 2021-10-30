<?php
ob_start();
session_start();
if (isset($_SESSION['username'])) {
    header('location: index.php');
    exit();

  }
@include '../Connections/conect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashPass = sha1($password);
    $stmt = $connect->prepare(" SELECT * FROM users WHERE UserNme = ? AND Pssword = ? LIMIT 1");
    $stmt->execute(array($username, $hashPass));
    $count = $stmt->rowCount();
    $res = $stmt->fetch();
    if ($count > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $res['id'];

        header('location: index.php');
        exit();
    } else { $e = "Error in Username or Password";}
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/addition.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">


  <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/albasha.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b> Panel</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="user" class="form-control" placeholder="Email" autocomplete="off" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="new_password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
  </div>
  <h4 class="text-red text-center" ><?php if(isset($e)){ echo $e; } ?></h4>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' 
    });
  });
</script>
</body>
</html>

<?php ob_end_flush();
 ?>