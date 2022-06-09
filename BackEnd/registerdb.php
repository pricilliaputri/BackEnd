<?php 
  include 'konekdb.php';
  
  error_reporting(0);
  
  session_start();
  
  if (isset($_SESSION['Enter Username'])) {
      header("Location: ../FrontEnd/register.php");
  }
  
  if (isset($_POST['DAFTAR'])) {
      $username = $_POST['Enter Username'];
      $email = $_POST['Enter Email'];
      $password = ($_POST['Enter Password']);
      
  
      if ($password == $password) {
          $sql = "SELECT * FROM akun WHERE Enter Username='$username'";
          $result = mysqli_query($conn, $sql);
          if (!$result->num_rows > 0) {
              $sql = "INSERT INTO akun (username, email, password)
                      VALUES ('$username', '$email', '$password')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                  echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                  $username = "";
                  $email = "";
                  $_POST['Enter Password'] = "";
              } else {
                  echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
              }
          } else {
              echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
          }
          
      } else {
          echo "<script>alert('Password Tidak Sesuai')</script>";
      }
  }
?>