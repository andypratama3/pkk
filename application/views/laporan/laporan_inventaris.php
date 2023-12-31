<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header">
                <h4><b><i class="fa fa-newspaper-o"></i> Data Anggota</b></h4>
            </div>
            <div class="box-body">
                <a href="<?= site_url('laporan/cetak_laporan_inventaris') ?>" class="btn btn-success" style="margin-left: 15px"><i class="fa fa-print"></i> Cetak Laporan</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%" style="text-align:center">No</th>
                                <th>Nama Barang</th>
								<th>Asal Barang</th>
								<th>Tanggal Pinjam</th>
								<th>Tanggal Kembali</th>
								<th>Jumlah</th>
								<th>Tempat Peyimpanan</th>
								<th>Kondisi</th>
								<th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($inventaris_data as $value) { ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
								<td><?= $value->nama_barang ?></td>
								<td><?= $value->asal_brg ?></td>
								<td><?= $value->tanggal_pinjam ?></td>
								<td><?= $value->tanggal_kembali ?></td>
								<td><?= $value->jumlah ?></td>
								<td><?= $value->peyimpanan ?></td>
								<td><?= $value->kondisi ?></td>
								<td><?= $value->keterangan ?></td>
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
