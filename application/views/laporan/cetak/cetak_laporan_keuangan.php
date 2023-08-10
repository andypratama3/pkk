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
		/* .container{
			margin-top: 30px;		
			border: 2px solid black;
			height: 130px;
			padding: 20px;
			text-align: center;
		}
		.container .left{
			display:flex;
			float: left;	
			margin-left: 150px;
		}
		.container .left h6{
			margin-top: 100px
		}
		.container .right{
			display:flex;
			float: right;	
			margin-right: 150px;		
			border: 2px solid blue;

		}
		.container .content-right{
			tainer .right{
			display:flex;
			float: right;	
			margin-right: 200px;		
			border: 2px solid blue;
		} */
	table {
      border-collapse: collapse;
      width: 100%;
    }
    table, th, td {
     
    }
    td {
      padding: 8px;
      text-align: center;
    }

		
		@media print{@page {size: landscape}}
	</style>
</head>
<body onload="setTimeout(cetak,1000)">
	<div class="mockup">
		<img src="<?php echo base_url('assets/images/logopkk.png') ?>" alt="" srcset="" class="logo_cetak">
		<div class="text-mockup">
			<h4>LAPORAN DATA Keuangan</h4>
			<h4>PKK DESA BUNTON</h6>
			<p style="font-size: 15px;">Sekretariat:JL.Laut No 2,Karangsari,Bunton,Adipala,
			 Cilacap,Jawa Tengah (53271)</p>
		</div>
		<hr style="border: 1px solid black; margin-top: 42px;">
	</div>
	<table class="tg">
	  	<tr>
		    <th class="tg-1wig">No.</th>

			<th class="tg-1wig">Tanggal, Bulan, Tahun</th>
			<th class="tg-1wig">Sumber Dana</th>
			<th class="tg-1wig">Uraian</th>
			<th class="tg-1wig">Nomor Bukti Kas</th>
			<th class="tg-1wig">Jumlah Penerimaa (Rp)</th>
			<th class="tg-1wig">No Urut Pengelaran</th>
			<th class="tg-1wig">Tanggal, Bulan, Tahun</th>
			<th class="tg-1wig">Sumber Dana</th>
			<th class="tg-1wig">Uraian</th>
			<th class="tg-1wig">Nomor Bukti Kas</th>
			<th class="tg-1wig">Jumlah Pengeluaran</th>    
		    
	  	</tr>
	  	<?php
	        $no = 1;
	        foreach ($list_keuangan as $value) { ?>
	  	<tr>
		    <td class="tg-baqh"><?= $no++; ?></td>
			<td class="tg-baqh"><?= $value->tanggal1 ?></td>
			<td class="tg-baqh"><?= $value->sumber_dana1 ?></td>
			<td class="tg-baqh"><?= $value->uraian1 ?></td>
			<td class="tg-baqh"><?= $value->no_bukti_kas1 ?></td>
			<td class="tg-baqh"><?= $value->jml_penerimaan ?></td>
			<td class="tg-baqh"><?= $value->no_urut_pengeluaran ?></td>
			<td class="tg-baqh"><?= $value->tanggal2 ?></td>
			<td class="tg-baqh"><?= $value->sumber_dana2 ?></td>
			<td class="tg-baqh"><?= $value->uraian2 ?></td>
			<td class="tg-baqh"><?= $value->no_bukti_kas2 ?></td>
			<td class="tg-baqh"><?= $value->jml_pengeluaran ?></td>
	  	</tr>
	  	<?php } ?>
	</table>
	<br>
	<table>
    <tr>
      <th><p>Ketua Umum / Ketua</p>
		  Mengetahui</th>
      <th>Nama Kota, .... Tanggal, .... Bulan, .... Tahun <br> <p> Bendahara</p></th>
    </tr>
    <tr>
      <td></td>
	  <tr>
		  <td></td>
	  </tr>
	  <tr>
		  <td></td>
	  </tr>
	  <tr>
		  <td></td>
	  </tr>
	  <td>Tangan Nama Jelas</td>
	  <td>Tangan Nama Jelas</td>
    </tr>
  </table>

	
	
</body>
<script type="text/javascript">
    function cetak(){
        print();
    }
</script>
<meta http-equiv="refresh" content="1; <?= $_SERVER['HTTP_REFERER'];?>">
</html>
