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