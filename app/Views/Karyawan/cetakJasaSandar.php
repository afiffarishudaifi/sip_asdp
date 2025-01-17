<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Jasa Sandar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .header img {
            max-height: 80px;
            margin-right: 20px;
        }
        .signature {
            margin-top: 20px;
        }
        .signature div {
            display: inline-block;
            width: 30%;
            text-align: center;
        }
    </style>
</head>
<body>
	<table border="1">
		<tr>
			<center>
				<td>
					<div class="header">
						<img src="<?= base_url() ?>/docs/img/logo.webp" alt="Logo">
						<h2>Data Jasa Sandar Pelabuhan Penajam</h2>
					</div>
				</td>
			</center>
		</tr>
	</table>
    
    <h3>Data Jasa Sandar</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kapal</th>
                <th>Tanggal</th>
                <th>Jam Tambat</th>
                <th>Jam Tolak</th>
                <th>Lama Tambat</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
        	<?php
            $no = 1;
			$total = 0;
            foreach ($laporan as $item) {
				$total = $total + $item['biaya'];
           ?>
            <tr>
                <td width="1%"><?= $no++; ?></td>
                <td><?= $item['namakp']; ?></td>
                <td><?= $item['tanggal']; ?></td>
                <td><?= $item['jam_tambat']; ?></td>
                <td><?= $item['jam_tolak']; ?></td>
                <td><?= $item['lama_tambat'] . ' Menit'; ?></td>
                <td><?= 'Rp. '. number_format($item['biaya'], 0, ',', '.'); ?></td>
            </tr>
			<?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6"><strong>Sub Total</strong></td>
                <td><?= 'Rp. '. number_format($total, 0, ',', '.'); ?></td>
            </tr>
        </tfoot>
    </table>
    
    <div class="signature">
        <div>
            <p>Petugas Tambah</p>
            <br></br>
            <br></br>
            <p>.........................................</p>
        </div>
        <div>
        </div>
        <div>
            <p>Supervisor</p>
            <br></br>
            <br></br>
            <p>.........................................</p>
        </div>
    </div>
</body>
</html>
