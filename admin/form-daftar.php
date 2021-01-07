<?php session_start() ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Formulir Pendaftaran Siswa Baru | SMK RUS</title>
        <link rel="stylesheet" href="style-form-daftar.css">
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
                            <h3>Daftar</h3>
                    </header>

    <form action="proses-daftar.php" method="POST">
                        <form>
                            <p>
                                <label for="nama"></label>
                                <input type="text" name="nama" placeholder="Nama Lengkap" maxlength="64" pattern="[a-zA-Z]+" />
                            </p>
                            <p>
                                <label for="alamat"></label>
                                <input type="text" name="alamat" placeholder="Alamat Tinggal" />
                            </p>
                            
                            
                            <p> 
                                <label for="sekolah_asal"></label>
                                <input type="text" name="sekolah_asal" placeholder="Asal Sekolah" />
                                
                            </p>

                            <p>
                                <label for="agama"></label>
                                <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Katholik</option>
                                </select>
                            </p>

                            <p>
                                <label for="jenis_kelamin"></label>
                                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                            </p>

                            <p>
                                <input type="submit" name="daftar" class="registerbtn" value="Daftar" />
                            </p>    
                    </form>
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