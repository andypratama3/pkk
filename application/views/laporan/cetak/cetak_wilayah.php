<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Laporan</title>
	<link rel="stylesheet" href="">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logopkk.png') ?>">
	<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0; width: 100%}
		.tg td{font-family:Arial, sans-serif;font-size:12px;padding:5px 2px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg .tg-1wig{font-weight:bold;text-align:left;vertical-align:center;text-align:center;}
		.tg .tg-baqh{text-align:center;vertical-align:top}
		.tg .tg-0lax{text-align:left;vertical-align:top}
		.mockup{position: relative;width: 75%;height: auto;justify-content: center;text-align: center;align-items: top;font-family:Arial, sans-serif;font-size:20px;margin: 0 auto 20px;}
		.mockup .text-mockup{line-height: 0;}
		.logo_cetak{left: 0px;top: 0;position: absolute;float: inline-start;width: 80px;}

		@media print{@page {size: portrait;}}
	</style>
</head>
<body onload="setTimeout(cetak,1000)">
	<div style="text-align: center;font-family:Arial, sans-serif;font-size:20px;">
		<h4>LAPORAN DATA WILAYAH</h4>
	</div>
	<table class="tg" >
	  	<tr>
		    <th class="tg-1wig">No.</th>
		    <th class="tg-1wig">Nama Wilayah</th>
		    <th class="tg-1wig">Alamat Wilayah</th>
	  	</tr>
	  	<?php
	        $no = 1;
	        foreach ($wilayah_data as $value) { ?>
	  	<tr>
		    <td class="tg-baqh"><?= $no++; ?></td>
		    <td class="tg-0lax"><?= $value->nama_wilayah ?></td>
		    <td class="tg-0lax"><?= $value->alamat_wilayah ?></td>
	  	</tr>
	  	<?php } ?>
	</table>
	<h5 style="float: right; margin-right: 20px; width: 130px; text-align: start;">
	<?php echo format_indo(date('Y-m-d'));?>
		<p style="padding: 15px"></p>
		<hr style="margin: 0; border: 0.1px solid black;">
		<p style="margin-top: 4px;">Nama Ketua</p>
	</h5>
</body>
<script type="text/javascript">
    function cetak(){
        print();
    }
</script>
<meta http-equiv="refresh" content="1; <?= $_SERVER['HTTP_REFERER'];?>">
</html>
