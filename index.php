<?php
require_once 'user.php';
$user = new User();

if(isset($_POST['save_user'])){
   $user->saveUser($_POST);
}
$show_user = $user ->showUser();
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
        <div class="col-md-6">
            <h3 class="text-center mb-3">User Registration</h3>
            <form class="form-control" action="" method="POST">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <button type="submit" value="save" name="save_user"  class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mb-3">User List</h3>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($show_user)){
                    ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>

                        <a href="edit.php?id=<?= $row['id']?>">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
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