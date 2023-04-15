<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<?php
		// Variabel untuk data diri
		$nama = "yogi manurung";
		$tanggal_lahir = "18 Juli 2002";
		$alamat = "Jl. Sigambal, Tomok, Samosir";
		$jenis_kelamin = "Laki-laki";
		$foto = "foto.jpeg";
		$riwayat_pendidikan = array("SDN 17 Simanindo (2008-2014)", "SMPN 1 Simanindo (2014-2017)", "SMK KALAM KUDUS MEDAN Contoh (2017-2020)", "Universitas MIKROSKIL (2020-sekarang)");
		$hobby = "Bermain musik, Bermain Game, dan Rebahan";
	?>

	<div class="container">
		<h1 class="mt-5 mb-4">Data Diri</h1>
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo $foto; ?>" alt="Foto 3x4" class="img-fluid">
			</div>
			<div class="col-md-9">
				<table class="table">
					<tbody>
						<tr>
							<th>Nama</th>
							<td><?php echo $nama; ?></td>
						</tr>
						<tr>
							<th>Tanggal Lahir</th>
							<td><?php echo $tanggal_lahir; ?></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td><?php echo $alamat; ?></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td><?php echo $jenis_kelamin; ?></td>
						</tr>
						<tr>
							<th>Riwayat Pendidikan</th>
							<td>
								<ul>
									<?php foreach ($riwayat_pendidikan as $pendidikan) : ?>
										<li><?php echo $pendidikan; ?></li>
									<?php endforeach; ?>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Hobby</th>
							<td><?php echo $hobby; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- JavaScript Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
