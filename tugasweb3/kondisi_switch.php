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