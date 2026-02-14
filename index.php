<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap PHP Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background:url('images/2.png') no-repeat; background-size:100% 100%">
<div class="container">
  <div class="jumbotron">
    <form method="post" action="">
      <div class="form-group">
        <label for="firstname">Name:</label>
        <input type="text" class="form-control" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="gmail">Gmail:</label>
        <input type="email" class="form-control" name="gmail" required>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $gmail     = $_POST['gmail'];

    $servername = "database-1.ch6eoeg84367.eu-north-1.rds.amazonaws.com";
    $username   = "intel";
    $password   = "intel123";
    $db         = "intel";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO data (firstname, gmail) VALUES (?, ?)");
    $stmt->bind_param("ss", $firstname, $gmail);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>New record created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
