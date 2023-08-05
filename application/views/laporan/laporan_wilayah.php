<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header">
                <h4><b><i class="fa fa-newspaper-o"></i> Data Wilayah</b></h4>
            </div>
            <div class="box-body">
                <a href="<?= site_url('laporan/cetak_laporan_wilayah') ?>" class="btn btn-success" style="margin-left: 15px"><i class="fa fa-print"></i> Cetak Laporan</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%" style="text-align:center">No</th>
								<th>Nama Wilayah</th>
								<th>Alamat Wilayah</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
                            $no = 1;
                            foreach ($wilayah_data as $wilayah) { ?>
                            <tr>
								<td style="text-align:center"><?= $no++; ?></td>
								<td><?= $wilayah->nama_wilayah ?></td>
								<td><?= $wilayah->alamat_wilayah ?></td>
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