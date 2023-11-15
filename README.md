<table>
  <tr>
    <th colspan="2">DATA MAHASISWA</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td>Roswanda Nuraini</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312210328</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI.22.A3</td>
  </tr>
</table>

# <p align="center">Praktikum7 : PHP Dasar</p>

## Langkah-langkah praktikum

1. Install terlebih dahulu untuk XAMPP server di https://www.apachefriends.org . Install XAMPP untuk web server dan kemudian ekstrak file nya dan sesuaikan dimana anda menyimpan file tersebut

2. Menjalankan XAMPP Mengaktifkan XAMPP dengan menekan tombol <b>START</b> ```SERVER APACHE```

![Screenshot (495)](https://github.com/roswanda11/lab7web/assets/115516632/bfd19590-3f42-4476-9dcc-904e7bd4ebde)

3. Buat folder <b>lab7_php_dasar</b> pada root directory web server(c:xampp\htdocs) 

![Screenshot (497)](https://github.com/roswanda11/lab7web/assets/115516632/8e60852e-0f59-4571-8dae-4c2b86d71076)

- Di atas saya membuat folder <b>lab7_php_dasar</b> yang dimana folder itu disimpan dalam folder Lab7Web untuk repository

Kemudian akses directory pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

![Screenshot (498)](https://github.com/roswanda11/lab7web/assets/115516632/205460c9-18d5-4804-9582-af0dd4907851)

## PHP Dasar

4. Buat File baru dengan nama ```php_dasar.php``` pada directory tersebut kemudian buat kode seperti berikut.

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h1>Belajar PHP Dasar</h1>
            <?php
                echo "Hello World";
            ?>
        </body>
        </html>

Kemudian untuk mengakses hasilnya melalui URL http://localhost/lab7_php_dasar/php_dasar.php

![Screenshot (499)](https://github.com/roswanda11/lab7web/assets/115516632/f1daf381-3a84-4c91-ae09-796bfbe3f1c7)

## Variable PHP

5. Menambahkan variabel pada program

        <h2>Menggunakan Variable</h2>
            <?php
               $nim = "312210328";
               $nama = 'Roswanda Nuraini';
               echo "NIM : " . $nim . "<br>";
               echo "Nama : $nama"; 
            ?>

![image](https://github.com/roswanda11/lab7web/assets/115516632/04809ddf-d5fb-4174-8e53-25411d6293f6)

## Predefine Variable $_GET

6. Menggunakan Predefine Variable

        <?php
        echo 'Selamat Datang ' . $_GET['nama'];
        ?>
     
Untuk mengaksesnya gunakan URL http://localhost/lab7_php_dasar/latihan2.php?nama=Roswanda%20Nuraini

![image](https://github.com/roswanda11/lab7web/assets/115516632/a155afb2-13be-4b19-9b8f-f383b299388e)

## Membuat Form

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <title>PHP Dasar</title>
      </head>
      <body>
      <h2>Form Input</h2>
      <form method="post">
          <label>Nama: </label>
          <input type="text" name="nama">
          <input type="submit" value="Kirim">
      </form>
      <?php
      echo 'Selamat Datang ' . $_POST['nama'];
      ?>
      </body>
      </html>

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/52e5927c-660a-4e12-8d54-b317481d1fa5)

## Operator

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PHP Dasar</title>
      </head>
      <body>
      <h2>Operator</h2>
      <?php
      $gaji = 1000000;
      $pajak = 0.1;
      $thp = $gaji - ($gaji*$pajak);
      echo "Gaji sebelum pajak = Rp. $gaji <br>";
      echo "Gaji yang dibawa pulang = Rp. $thp";
      ?>
      </body>
      </html>

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/e37209eb-14f4-44e6-98ee-6e91317fdf12)

## Kondisi IF

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Kondisi IF</h2>
            <?php 
            $nama_hari = date("1");
            if ($nama_hari == "Sunday") {
                echo "Minggu";
            } elseif ($nama_hari == "Monday") {
                echo "Senin";
            } else  {
                echo "Selasa";
            }
            ?>
        </body>
        </html>
        
## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/28a57e61-d2f6-412a-87c2-372a640ddb74)

Jadi, jika Anda menjalankan program ini pada hari Minggu, hasilnya akan "Minggu", jika pada hari Senin, hasilnya akan "Senin", dan untuk hari-hari selain Minggu dan Senin, hasilnya akan "Selasa"

## Kondisi Switch

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Kondisi Switch</h2>
            <?php 
            $nama_hari = date("1");
            switch ($nama_hari) {
                case "Sunday" :
                    echo "Minggu";
                    break;
                case "Monday" :
                    echo "Senin";
                    break;
                case "Tuesday" :
                    echo "Selasa";
                    break;
                case "Wednesday" :
                    echo "Rabu";
                    break;
                case "Thursday" :
                    echo "Kamis";
                    break;
                case "Friday" :
                    echo "Jumat";
                    break;
                default:
                    echo "Sabtu";
            }
            ?>
        </body>
        </html>

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/c61fbc3e-81e2-4e36-b0b0-8f6e1df787f3)

Jadi, hasil akhirnya adalah program akan menampilkan nama hari sesuai dengan hari saat ini. Jika hari saat ini adalah Minggu, outputnya adalah "Minggu", jika Senin, outputnya adalah "Senin", jika Selasa, outputnya adalah "Selasa", dan untuk hari-hari lainnya, outputnya adalah "Sabtu"

## Perulangan For

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Perulangan For</h2>
            <?php 
            echo "Perulangan 1 sampai 10 <br/>" ;
            for ($i=1; $i<=10; $i++) {
                echo "Perulangan ke : " . $i . '<br/>';
            }
            echo "Perulangan Menurun dari 10 ke 1 <br/>" ;
            for ($i=10; $i>=1; $i--) {
                echo "Perulangan ke : " . $i . '<br/>';
            }
            ?>
        </body>
        </html>

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/a82eceba-9aa9-4bbe-9f77-99bebb79f8b9)

Jadi, hasil akhirnya adalah program akan menampilkan dua set pesan:

- Pesan perulangan dari 1 sampai 10.

- Pesan perulangan menurun dari 10 ke 1

## Perulangan While

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Perulangan While</h2>
            <?php 
            echo "Perulangan 1 sampai 10 <br/>";
            $i=1;
            while ($i<=10) {
                echo "Perulangan ke : " . $i . '<br/>';
                $i++;
            }
            ?>
        </body>
        </html>

## Output 

![image](https://github.com/roswanda11/lab7web/assets/115516632/2b0742b9-3e78-4a37-b158-d9e9321d55ca)

Jadi, hasil akhirnya adalah program akan menampilkan pesan "Perulangan ke: [nilai $i]" dari 1 sampai 10. Setiap iterasi menambah nilai $i hingga mencapai 10, dan setelah itu, perulangan akan berhenti.

## Perulangan Dowhile

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Perulangan Do while</h2>
            <?php 
            echo "Perulangan 1 sampai 10 <br/>";
            $i=1;
            do {
                echo "Perulangan ke : " . $i .'<br/>';
                $i++;
            } while ($i<=10);
            ?>
        </body>
        </html>

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/0d205970-01a3-4e5a-a3f0-f6b749aac7f5)

Jadi, hasil akhirnya adalah program akan menampilkan pesan "Perulangan ke: [nilai $i]" dari 1 sampai 10. Meskipun kondisi while diuji setelah blok do dijalankan, kita tetap memastikan bahwa setiap iterasi akan menambah nilai $i, sehingga perulangan tidak berjalan tanpa batas.

## Pertanyaan dan Tugas

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

        <!DOCTYPE html>
        <html lang="en">
        <head>
        	 <meta charset="UTF-8">
         	 <title>PHP Dasar</title>
        </head>
        <style>
            table {
                text-align : center;
            }
            body {
            font-family:  'Lucida Sans Regular',  sans-serif;
            background-image :url("bg1.avif");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        h1 {
          text-align: center;
        }
        
        form {
            text-align: center;
          padding: 25px;
        }
        
        .login {
            padding: 1em;
            margin: auto;
            width: 25em;
            background: linear-gradient(to right,#FF1493, #FFC0CB);
            border-radius: 20px;
        }
           
        label {
            font-size: 10pt;
            color:whitesmoke;
        }
           
        input[type="text"],
        input[type="date"] 
        {
            padding: 15px;
            width: 93%;
            color: black;
            border: 10px;
            font-size: 1em;
            font-family: 'Arial';
            margin: 6px 0px;
            border-radius: 5px
        }
           
        input[type="submit"] {
            
            color: black;
            border: 0;
            margin: 5px 0px;
            padding: 15px;
            border-radius: 5px;
            width: 100%;
            font-family: 'Georgia';
        }
        
        input[type="submit"]:hover {
            background: #042631;
            cursor: pointer;
        }
        
        input[type="radio"] {
            margin: 5px;
            align-items: center;
            cursor: pointer;
        }
        
        p {
          margin: 10px;
        }
        </style>
        <body>
        	<div class="login">
            <form method="post">
            <h1>DATA PEKERJAAN</h1>
                <label> <h3>Nama : </h3></label>
                <input type="text" name="nama" placeholder="Masukkan nama Anda">
                <br>
                <label> <h3>Tanggal Lahir : </h3></label>
                <input type="date" name="tanggal">
                <br>
                <label><h3>Pekerjaan : </h3></label>
                <input type="radio" name="pekerjaan" value="frontend">Frontend Development</input><br>
                <input type="radio" name="pekerjaan" value="software">Software Engginer</input><br>
                <input type="radio" name="pekerjaan" value="backend">Backend Development</input><br>
                <input type="radio" name="pekerjaan" value="support">IT Support</input><br>
                <input type="radio" name="pekerjaan" value="mobile">Mobile Development</input><br>
                <input type="radio" name="pekerjaan" value="programmer">Programmer</input><br>
                <input type="radio" name="pekerjaan" value="lainnya">Lainnya</input><br>
                <br>
                <input type="submit" name="button" value="LIHAT">
                <br>
                <br>
                <h3>Cetak : </h3>
        <table border=1 text-align="center">
            <tr>
                <td>
                <?php
            $lahir = @$_GET['tanggal'];
            $button = @$_POST['button'];
        
            if ($button) {
                $nama=$_POST['nama'];
                $job=@$_POST['pekerjaan'];
                echo "<p>Nama : $nama</p>";
                $tanggal_lahir = new DateTime($_POST['tanggal']);
                $sekarang = new DateTime("today");
                if ($tanggal_lahir > $sekarang) { 
                    $thn = "0";
                    $bln = "0";
                    $tgl = "0";
                }
                $thn = $sekarang->diff($tanggal_lahir)->y;
                $bln = $sekarang->diff($tanggal_lahir)->m;
                $tgl = $sekarang->diff($tanggal_lahir)->d;
                echo "<p>Umur : ";
                echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
                 
                if ($job=="frontend") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 5.100.000/bulan</p>";
                }
                elseif ($job=="software") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 5.500.000/bulan</p>";
                }
                elseif ($job=="backend") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 4.415.000/bulan</p>";
                }
                elseif ($job=="support") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 6.000.000/bulan</p>";
                }
                elseif ($job=="mobile") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 10.500.000/bulan</p>";
                }
                elseif ($job=="programmer") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp. 10.000.000/bulan</p>";
                }
                elseif ($job=="lainnya") {
                    echo "<p>Pekerjaan : $job</p> ";
                    echo "<p>Gaji : Rp.(Sesuai pekerjaan)/bulan</p>";
                }
                else {
                    echo "<p>Pilih Pekerjaan</p>";
                }
                echo "<br><br><p>&copy;" . date("Y") . " Roswanda Nuraini </p>";
            }
            ?>
                </td>
            </tr>
        </table>
        </form>
        </body>
        </html> 

![image](https://github.com/roswanda11/lab7web/assets/115516632/7396ce46-3af5-44f5-89e1-99f707034fe4)

## Output

![image](https://github.com/roswanda11/lab7web/assets/115516632/23bb6515-9916-42ee-be16-c03849627fcb)



















