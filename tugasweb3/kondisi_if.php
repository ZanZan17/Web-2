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
