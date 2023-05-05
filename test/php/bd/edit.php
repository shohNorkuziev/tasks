<?php

$link = mysqli_connect('localhost', 'root', '', 'test');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $sqli=mysqli_query($link, "UPDATE users SET name='$name', surname='$surname' WHERE id=$id");
    header('Location: index.php');
    exit;
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM users WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
    body {
      margin: 0;
      padding: 0;
      display: grid;
      place-items: center;
      min-height: 100vh;
      background-color: #2b2d3f;
      color: #fff;
    }

    table {
      width: 100%;
      max-width: 800px;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid #fff;
    }

    th {
      background-color: #252836;
    }

    tr:nth-child(even){
      background-color: #1f2132;
    }

    button {
      background-color: #c83821;
      border: none;
      color: #fff;
      padding: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: #ff3434;
    }

    form {
      display: inline-block;
    }

    /* New styles for edit form */
    .edit-form {
      display:grid;
      justify-content:space-around;
      background-color: #1f2132;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      max-width: 400px;
      width: 100%;
    }

    .edit-form label {
      display: block;
      margin-bottom: 10px;
    }

    .edit-form input[type="text"] {
      background-color: #252836;
      border: none;
      color: #fff;
      padding: 10px;
      width: 100%;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .edit-form button[type="submit"] {
      background-color: #c83821;
      border: none;
      color: #fff;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .edit-form button[type="submit"]:hover {
      background-color: #ff3434;
    }
  </style>
</head>
<body>
  <div class="edit-form">
    <h1>Edit user</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']?>">
        <label>Surname:</label>
        <input type="text" name="surname" value="<?php echo $row['surname']?>">
        <button type="submit" name="submit">Save changes</button>
    </form>
  </div>
</body>
</html>