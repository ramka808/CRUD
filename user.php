<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "INSERT INTO `data` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password');";

  try {
    $result = mysqli_query($con, $sql);
    echo   '</div>
    <div class="alert alert-success" role="alert">
      Пользователь добавлен
    </div>';
  } catch (Exception $e) {
    echo   '<div class="alert alert-danger" role="alert">'
      . mysqli_error($con) . '
</div>';
  }
}

?>

<script>
// Используем JavaScript для скрытия alert через 3 секунды
setTimeout(function() {
    var alertElement = document.querySelector('.alert');
    if (alertElement) {
        alertElement.style.display = 'none';
    }
}, 3000);
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container my-5">
    <button class='btn btn-primary my-5'><a class="text-light" href="display.php">Main page</a></button>
    <form method="post">

      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name='name' autocomplete="off">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name='email' autocomplete="off">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile" name='mobile' autocomplete="off">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name='password' autocomplete="off">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>

</html>