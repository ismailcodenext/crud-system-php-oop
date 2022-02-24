<?php

    class User{
       public function __construct()
       {
           $host = "localhost";
           $user = "root";
           $password = "";
           $database = "user_reg";
          $this->link = mysqli_connect($host, $user, $password, $database );
       }
       public function saveUser($data){
           $name = $data['name'];
           $email = $data['email'];
           $password = $data['password'];

           $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
           mysqli_query($this->link, $query);
       }

       public function showUser(){
          return mysqli_query($this->link,"SELECT * FROM `users`");
       }
       public function delete_user($id){
           mysqli_query($this->link,"DELETE FROM `users` WHERE id = '$id'");
           header('Location:index.php');
       }
       public function edit_user($id){
           return mysqli_query($this->link,"SELECT * FROM `users` WHERE id ='$id'");
       }
        public function update_user($data){
            $id = $data['id'];
            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            mysqli_query($this->link,"UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id` = '$id'");
            header('Location:index.php');
        }

    }

?>