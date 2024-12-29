<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/docs/themeforest/base/assets/images/favicon.ico">
</head>
<body>
	<center>
		<table width="100%">
			<tr>
				<td><center><img src="<?= base_url() ?>/docs/img/logo.webp" width="110" height="70"></center></td>
				<td>
					<center>
					<font size="4"><b>PT ASDP INDONESIA FERRY (Persero) </b></font><br>
					<font size="2">Penajam Kab. Penajam Paser Utara, Kalimantan Timur</font><br>
					<font size="2">Email : klinikmaryam@gmail.com</font><br>
					<font size="2">Kota Balikpapan (63372)</font>
</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><b><hr></b></td>
			</tr>
		</table>
		<center>
			<h3>
				<?= $judul; ?>
			</h3>
		</center>
		<table border="1">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama Kapal</th>
                <th style="text-align: center;">Tanggal</th>
                <th style="text-align: center;">Jam Tambat</th>
                <th style="text-align: center;">Jam Tolak</th>
                <th style="text-align: center;">Lama Tambat</th>
            </tr>
        	<?php
            $no = 1;
            foreach ($laporan as $item) {
            ?>
            <tr>
                <td width="1%" style="text-align: center;"><?= $no++; ?></td>
                <td style="text-align: left;"><?= $item['namakp']; ?></td>
                <td style="text-align: center;"><?= $item['tanggal']; ?></td>
                <td style="text-align: center;"><?= $item['jam_tambat']; ?></td>
                <td style="text-align: center;"><?= $item['jam_tolak']; ?></td>
                <td style="text-align: center;"><?= $item['lama_tambat']; ?></td>
            </tr>
            <?php } ?>
		</table>
	</center>
</body>
	<script>
		window.print();
	</script>
</html>
