<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid">
			<div class="box-header">
				<h4><b><i class="fa fa-newspaper-o"></i> Data Keuangan</b></h4>
			</div>
			<div class="box-body">
				<div style="padding-left: 15px; padding-bottom: 15px;">
					<?= anchor(site_url('keuangan/create'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary"'); ?>
				</div>
				<div class="table-responsive" style="padding: 15px">
					<table class="table table-bordered" id="mytable">
						<thead>
							<tr>
								<th width="5%" style="text-align:center">No</th>
								<th>Tanggal, Bulan, Tahun</th>
								<th>Sumber Dana</th>
								<th>Uraian</th>
								<th>Nomor Bukti Kas</th>
								<th>Jumlah Penerimaa (Rp)</th>
								<th>No Urut Pengelaran</th>
								<th>Tanggal, Bulan, Tahun</th>
								<th>Sumber Dana</th>
								<th>Uraian</th>
								<th>Nomor Bukti Kas</th>
								<th>Jumlah Pengeluaran</th>
								<th width="15%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $no = 1;
                            foreach ($keuangan_list as $keuangan) { ?>
							<tr>
								<td style="text-align:center"><?= $no++; ?></td>
								<td><?= $keuangan->tanggal1 ?></td>
								<td><?= $keuangan->sumber_dana1 ?></td>
								<td><?= $keuangan->uraian1 ?></td>
								<td><?= $keuangan->no_bukti_kas1 ?></td>
								<td><?= $keuangan->jml_penerimaan ?></td>
								<td><?= $keuangan->no_urut_pengeluaran ?></td>
								<td><?= $keuangan->tanggal2 ?></td>
								<td><?= $keuangan->sumber_dana2 ?></td>
								<td><?= $keuangan->uraian2 ?></td>
								<td><?= $keuangan->no_bukti_kas2 ?></td>
								<td><?= $keuangan->jml_pengeluaran ?></td>
								<td style="text-align:center">
									<a href="<?= site_url('keuangan/read/'.$keuangan->id) ?>" title="Lihat Detail Data"
										class="btn btn-success"><i class="fa fa-eye"></i></a>
									<a href="<?= site_url('keuangan/update/'.$keuangan->id) ?>" title="Ubah Data"
										class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
									<a href="<?= site_url('keuangan/delete/'.$keuangan->id) ?>" title="Hapus Data"
										class="btn btn-danger"
										onclick="javascript: return confirm('Apakah anda yakin ingin nonaktifkan data ini ?')"><i
											class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#mytable').DataTable({
			responsive: true
		});
	});
</script>
