<div class="content">
	<?php
	
	$sql_d = "SELECT `id_artikel`,`judul`, DATE_FORMAT(`insert_at`, '%d-%m-%Y'), `cover`,`isi` FROM `artikel` WHERE `id_artikel` = `id_artikel` LIMIT 0,1";
	$query_d = mysqli_query($koneksi, $sql_d);
	while ($data_d = mysqli_fetch_row($query_d)) {
		$cover = $data_d[3];
		$judul = $data_d[1];
		$id_artikel = $data_d[0];
		$insert_at = $data_d[2];
		$isi = $data_d[4];
	?>
		<div class="card ar-img-over">
			<img class="card-img" src="admin/cover/<?php echo $cover; ?>" alt="<?php echo $judul ?>">
		</div>
		<div class="row date-time mt-3">
			<div class="col text-right"><?php echo $insert_at ?>
			</div>
		</div>

		<h2><?php echo $judul ?></h2>
		<p><?php echo $isi ?></p>
		
	<?php } ?>
</div>