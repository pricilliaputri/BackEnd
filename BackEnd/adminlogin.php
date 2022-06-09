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
    }


    if(isset($_POST["tujuan"])){

        
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $query_sql = "SELECT * FROM admin
                                WHERE nama= '$username' AND password = '$password'";
            
            $result = mysqli_query($conn, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<script> 
                alert('Selamat datang Admin') ;
                </script>";
                    
            }else{
                echo "<script> 
                alert('Username ini tidak terdaftar') ;
                </script>";
            }
    
        
        
    }
    
    
    // tutup koneksi
    mysqli_close($conn);
?>