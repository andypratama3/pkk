<style>
	.badge-succes{
		background-color: #00a65a;
	}
	.badge-warning{
		background-color: yellow;
	}
</style>
<div class="row">
	<div class="col-md-12">
   		<div class="box box-success box-solid">
    		<div class="box-header">
    			<h4><b><i class="fa fa-eye"></i> Detail Data Inventaris</b></h4>
    		</div>
    		<div class="box-body">
    			<div style="padding: 15px;">
        			<table class="table table-striped">
						<tr>
							<td width="20%"><b>Tahun, Bulan, tanggal</b></td>
							<td><?= $tanggal1; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Sumber Dana</b></td>
							<td><?= $sumber_dana1; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Uraian</b></td>
							<td><?= $uraian1; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Nomor Bukti kas</b></td>
							<td><?= $no_bukti_kas1; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Jumlah Penerimaan</b></td>
							<td><?= $jml_penerimaan; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Nomor Urut Pengeluaran</b></td>
							<td><?= $no_urut_pengeluaran; ?></td>
						</tr>
	
						<tr>
							<td width="20%"><b>Tahun, Bulan, tanggal</b></td>
							<td><?= $tanggal2; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Sumber Dana</b></td>
							<td><?= $sumber_dana2; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Uraian</b></td>
							<td><?= $uraian2; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Nomor Bukti kas</b></td>
							<td><?= $no_bukti_kas2; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Jumlah Pengeluaran</b></td>
							<td><?= $jml_pengeluaran; ?></td>
						</tr>
					</table>
					<a href="<?= site_url('keuangan') ?>" class="btn btn-danger pull-right">
						<i class="fa fa-sign-out"></i> Kembali
					</a>
				</div>
       		</div>
		</div>
	</div>
</div>

