<?php
include '../../koneksi/koneksi.php';

$sql = mysqli_query($konek, "SELECT * FROM tb_kontrol");
$data = mysqli_fetch_array($sql);
$relaysecond = $data['relaysecond'];

 if ($relaysecond == 1) { ?>
    <div class="card-badge red"><?php echo 'ON'; ?></div>
<?php } else { ?>
  <div class="card-badge green"><?php echo 'OFF'; ?></div>
<?php } ?>