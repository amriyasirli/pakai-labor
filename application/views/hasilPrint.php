
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- General CSS Files -->

  <style>
	.table {
		font-family: verdana, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	.table td, .table th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	.table tr:nth-child(even){background-color: #f2f2f2;}

	.table tr:hover {background-color: #ddd;}

	.table th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #04AA6D;
		color: white;
	}
	h1 h2 h3 h4 h5 h6 small span{
		font-family:verdana;
	}
	.center{
		text-align: center;
		line-height: 0.2;
		font-family:verdana;
	}
	.address{
		text-align: center;
		line-height: 1.5;
		font-size:14px;
		font-family:verdana;
	}
	.img {
		position: absolute;
		top:60px;
		left:40px;
		width:100px
	}
	.title{
		text-align:center; 
		text-decoration:underline;
		font-family:verdana;

	}
	.validator{
		text-align:left;
		margin-left:40px;
		font-family:verdana;
	}
  </style>
</head>

<body>

	<div class="img">
		<img src="<?= base_url('assets/img/logo.png') ?>" alt="logo">
	</div>
	<div class="center">
		<h4>KEMENTERIAN AGAMA REPUBLIK INDONESIA</h4>
		<h3>INSTITUT AGAMA ISLAM NEGERI (IAIN) BUKITTINGGI</h3>
		<h4>LABORATORIUM TERPADU IAIN BUKITTINGGI</h4>
	</div>
	<div class="address">
		<small>Kampus II : Jl. Gurun Aua Kubang Putih Kab. Agam-Sumatera Barat-Telepon/Fax: (0752) 22875</small><br>
		<small>Website : https://old.iainbukittinggi.ac.id </small>
	</div>

	<hr>

	<h4 class="title">LAPORAN PEMAKAIAN LABOR</h4>

	<table class="table">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Ruangan</th>
		<th>Tanggal</th>
		<th>Keterangan</th>
		<th>Status</th>
	</tr>
	<?php
		$no = 1;
		foreach ($pemakaian as $row) :
	?> 
		<tr>
		<td><?= $no++; ?></td>
		<td><?= $row->nama_dosen; ?></td>
		<td><?= $row->ruangan; ?></td>
		<td><?= substr($row->pemakaian_created,0, 10); ?></td>
		<td><?= $row->keterangan; ?></td>
		<td>
			<?= $row->status == 0 ? 'Dipakai' : ($row->status == 1 ? 'Sebelum' : 'Sesudah') ?>
		</td>
		</tr>
		

	<?php endforeach; ?>
	</table>

		<br>
		<br>
		<br>
		<br>
	<div class="validator">
		<span>Mengetahui,</span><br>
		<span>Ka. Unit</span><br>
		<br>
		<br>
		<br>
		<u><b>Syahrul, S.S, M.Pd</b></u><br>
		<span>NIP. 197003252003121008</span>
	</div>

</body>
</html>