<?php 

include("../config.php");

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru | SMK RUS</title>
        <link rel="stylesheet" href="style-list-siswa.css">
        <style>
        .button {
            color: white; 
            display:inline-block; 
            padding:10px;
            border-radius: 4px;
        }

        .grey {
            background-color: grey; 
        }

        .black {
            background-color: black;
        }

      
    </style>
    </head>

    <body>
    <?php if(isset($_SESSION["loggedin"])) : ?>

        <div id="container">
            <div id="header">
                <a href="index.php">
                <img src="logo.png">
                </a>
                <h1>SMK Raden Umar Said</h1>
                <p>Jalan Sukun Raya 9, Besito, Gebog, Kudus</p>
            </div>
        </div>

        <div id="container2">
            <div id="body">

                <header>
                    <h3>Siswa yang sudah mendaftar</h3>
                </header>

                <nav>
                    <a href="form-daftar.php">[+] Tambah Baru</a>
                </nav>

                <br>

                <center>

                <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    $number = 0;

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    $number++;
                    echo "<td>".$number."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            </table>
            </center>

            <p>Total: <?php echo mysqli_num_rows($query) ?></p>

            </div>
        </div>

        <div id="footer">
                
                <div id="alamat">
                    <p style="color: rgb(133, 133, 173); font-size: 15px;">Alamat</p>
                    <p style = "margin:0;">Jalan Sukun Raya 9, Besito, Gebog,</p>
                    <p>Kudus, Jawa Tengah 59333</p>
                </div>

                <div id="kontak">
                    <p style="color: rgb(133, 133, 173); font-size: 15px;" >Contact Person</p>
            
                </div> 


                    
                <div id="copyright">
                    <p>Copyright © 2020, RPL RUS Web Dev</p>
                </div>
            </div>
            <?php else:?>
            <h2>ACCESS DENIED, PLEASE LOGIN!</h2>
            <a href="login.php" class="button grey">Click Here!</a>
            <a href="../index.php" class="button black">Back To Home</a>
    <?php endif;?>
    </body>
</html>