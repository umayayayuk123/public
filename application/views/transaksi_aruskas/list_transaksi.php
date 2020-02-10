<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            DATA TRANSAKSI ARUS KAS
        </h2>
    </div>
</div> 
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
        <center><img src=""></center>
        </div> 
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Karyawan</th>
                                <th>Operator</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($transaksi_aruskas as $r) { ?>
                            <tr class="gradeU">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->tanggal_kas ?></td>
                                <td><?php echo $r->nama_karyawan ?></td>
                                <td><?php echo get_user($r->operator_id,'nama_lengkap') ?></td>
                                <td>
                                    <?php
                                        $jml_qty = $this->model_transaksi_aruskas->hitung_transaksi_by_id($r->aruskas_id)->row_array();
                                        echo "Rp. ".number_format($jml_qty['total']);
                                    ?>
                                        
                                </td>
                                <td align="center">
                                    <a class="btn btn-primary" href="<?php echo  site_url('transaksi_aruskas/detail_transaksi_by_id/'.$r->aruskas_id)?>"><i class="fa fa-search"></i> Detail</a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->


