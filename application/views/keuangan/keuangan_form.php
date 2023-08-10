<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid">
			<div class="box-header">
				<h4><b><i class="fa fa-tasks"></i> <?= $button ?> Data keuangan</b></h4>
			</div>
			<div class="box-body">
				<form style="padding: 15px;" action="<?= $action; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="datetime">Tahun, Bulan, Tanggal <?= form_error('tanggal1') ?></label>
							<div class="col-md-6">
								<input type="date" class="form-control"  name="tanggal1" id="tanggal1" placeholder="tanggal1" value="<?= $tanggal1; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Sumber Dana <?= form_error('sumber_dana1') ?></label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="sumber_dana1" id="sumber_dana1" placeholder="Sumber Dana" value="<?= $sumber_dana1; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Uraian <?= form_error('uraian1') ?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="uraian1" id="Uraian1" placeholder="uraian" value="<?= $uraian1; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="datetime">Nomor Bukti kas <?= form_error('no_bukti_kas1') ?></label>
							<div class="col-md-6">
								<input type="text" class="form-control"  name="no_bukti_kas1" id="no_bukti_kas1" placeholder="Nomor Bukti kas" value="<?= $no_bukti_kas1; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Jumlah Penerimaan <?= form_error('jml_penerimaan') ?></label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="jml_penerimaan" id="jml_penerimaan" placeholder="jml_penerimaan" value="<?= $jml_penerimaan; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="peyimpanan">No Urut Pengeluaran <?= form_error('no_urut_pengeluaran') ?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="no_urut_pengeluaran" id="no_urut_pengeluaran" placeholder="No Urut Pengeluaran" value="<?= $no_urut_pengeluaran; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="datetime">Tahun, Bulan, Tanggal <?= form_error('tanggal2') ?></label>
							<div class="col-md-6">
								<input type="date" class="form-control"  name="tanggal2" id="tanggal2" placeholder="Tanggal" value="<?= $tanggal2; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Sumber Dana <?= form_error('sumber_dana1') ?></label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="sumber_dana2" id="sumber_dana2" placeholder="Sumber Dana" value="<?= $sumber_dana2; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Uraian <?= form_error('uraian2') ?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="uraian2" id="uUraian2" placeholder="uraian" value="<?= $uraian2; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="datetime">Nomor Bukti kas <?= form_error('no_bukti_kas2') ?></label>
							<div class="col-md-6">
								<input type="text" class="form-control"  name="no_bukti_kas2" id="no_bukti_kas2" placeholder="Nomor Bukti kas" value="<?= $no_bukti_kas2; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2" for="varchar">Jumlah pengeluaran <?= form_error('jml_pengeluaran') ?></label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="jml_pengeluaran" id="jml_pengeluaran" placeholder="jumlah Pengeluaran" value="<?= $jml_pengeluaran; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								<input type="hidden" name="id" value="<?= $id; ?>" />
								<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> <?= $button ?></button>
								<a href="<?= site_url('keuangan') ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

