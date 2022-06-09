<?php 
    /* nama server kita */
    $servername = "localhost";

    /* nama database kita */
    $database = "geulysskin"; 

    /* nama user yang terdaftar pada database (default: root) */
    $username = "root";

    /* password yang terdaftar pada database (default : "") */ 
    $password = ""; 

    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);

    // mengecek koneksi
    if (!$conn) {
        die("Maaf koneksi anda gagal : " . mysqli_connect_error());
    }else{
        echo "<h1>Yes! Koneksi Berhasil..</h1>";
    }


    if(isset($_POST["tujuan"])){

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $query_sql = "SELECT * FROM akun 
                                WHERE nama = '$username' AND password = '$password'";
            
            $result = mysqli_query($conn, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<script> 
                alert('Selamat datang $username!') ;
                document.location.href = 'index.php';
                </script>";
                    
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        }else{
            $username = $_POST["nama"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            
            $query_sql = "INSERT INTO akun (nama, email, password) 
                                            VALUES ('$username', '$email', '$password')";

            if (mysqli_query($conn, $query_sql)) {
                echo "<script> 
                alert('Selamat akun berhasil terdaftar atas nama : $username!') ;
                document.location.href = '../FrontEnd/login.php';
                </script>";
            } else {
                echo "Pendaftaran Gagal : " . mysqli_error($conn);
            }
        }
    }
    
    
    // tutup koneksi
    mysqli_close($conn);
?>