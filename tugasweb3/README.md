# TUGAS Lab2 PHP Dasar Pemograman Web

## Latihan ke 1

### **Code**
```
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
<h1>Menggunakan Variable</h1>
<?php
$nim = "312110484";
$nama = 'Fauzhan Qhof Pratama';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>

</html>
```
### **Output**
<img src="./image/php_dasar.png" style="margin: auto; width:400px;"><br><br>

### **Penjelasan**
>Code diatas adalah contoh untuk memasukkan value kedalam variabel nama dan nim, setelah itu dilanjutkan dengan menampilkan kedalam web browser

## Latihan ke 2

### **Code**
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <!-- Variabel $_GET -->
  <h4><b>Predefine Variable</b></h4>
  <?php
  echo 'Selamat Datang ' . $_GET['nama']
  ?>
</body>

</html>
```

### **Output**
<img src="./image/Latihan2.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh untuk mendapatkan value dari query 'nama'

## Latihan ke 3

### **Code**
```
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
    echo 'Welcome ' . $_POST['nama'];
    ?>
</body>

</html>
```
### **Output**
<img src="./image/praktikum2.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh untuk mengirimkan value dari form dengan method post dan kemudian diambil menggunakan query `nama`

## Latihan ke 4

### **Code**
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <?php
  $Gaji = 20000000;
  $Pajak = 0.2;
  $thp = $Pajak - ($Gaji *  $Pajak);
  Echo "Gaji sebelum kena pajak = Rp.  $Gaji <br>";
  Echo "Gaji yang bisa dibawa pulang = Rp.  $thp";
  ?>
</body>

</html>
```
### **Output**
<img src="./image/Operator.png" style="margin: auto; width:400px;">


## Latihan ke 5
### **Code**
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <h2>Kondisi If</h2>
  <?php
  $nama_hari = date("l");
  if ($nama_hari == "Sunday") {
    Echo "Sunday";
  } elseif ($nama_hari == "Monday") {
    Echo "Monday";
  } else {
    Echo "Tuesday";
  }
  ?>
</body>
```
### **Output**
<img src="./image/Kondisi_if.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh pengkondisian if else

## Latihan ke 6
### **Code**
```
<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
Switch ($nama_hari) {
  case "Sunday":
    Echo "Sunday";
    Break;
  case "Monday":
    Echo "Senin";
    Break;
  case "Tuesday":
    Echo "Selasa";
    Break;
  Default:
    Echo "Saturday";
}
Echo "/$nama_hari";
?>
```
### **Output**
<img src="./image/Kondisi_switch.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh pengkondisian menggunakan switch case

## Latihan ke 7
### **Code**
```
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
  echo "Perulangan 1 sampai 20 <br />";
  for ($i = 1; $i <= 20; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  echo "Perulangan Menurun dari 20 ke 1 <br />";
  for ($i = 20; $i >= 1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  ?>
</body>

</html>
```
### **Output**
<img src="./image/Perulangan_for.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh perulangan menggunakan for

## Latihan ke 8
### **Code**
```
<h<h2>Perulangan While</h2>
<?php
echo "Perulangan 1 sampai 20 <br />";
$i = 1;
while ($i <= 20) {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
}
?>
```
### **Output**
<img src="./image/Perulangan_while.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh perulangan menggunakan while

## Latihan ke 9
### **Code**
```
<h2>Perulangan Do while</h2>
<?php
echo "Perulangan 1 sampai 20 <br />";
$i = 1;
do {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
} while ($i <= 20);
?>
```
### **Output**
<img src="./image/Perulangan_Do_While.png" style="margin: auto; width:400px;">

### **Penjelasan**
>Code diatas merupakan contoh perulangan menggunakan do while

