<?php
require_once 'user.php';
$user = new User();

$id  = $_GET['id'];
$data = $user->edit_user($id);
$data = mysqli_fetch_assoc($data);

if(isset($_POST['update_user'])){
    $user->update_user($_POST);
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD WITH OOP PHP</title>
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-center mb-3">Edit User</h3>
            <form class="form-control" action="" method="POST">
                <div class="mb-3 mt-3">
                    <input type="hidden" class="form-control" name="id" value="<?= $data['id']?>">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?= $data['name']?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?= $data['email']?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control"  placeholder="Enter password" name="password" value="<?= $data['password']?>">
                </div>
                <button type="submit" value="save" name="update_user"  class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>
</div>











<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
