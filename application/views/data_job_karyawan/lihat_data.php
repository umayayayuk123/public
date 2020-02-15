                
                <style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C-POS (Cashier Point of Sale) <small>Data JOB Karyawan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><img class ="responsive" src="assets/img/logo.png"></center>

                            </div>
                            <div class="panel-heading">

                                 <?php echo anchor('data_job_karyawan/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Jenis Job</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_karyawan_job ?></td>
                                                <td><?php echo $r->nama_kategori_job ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td class="center">
                                                    <?php echo anchor('data_job_karyawan/edit/'.$r->job_karyawan_id,'Edit'); ?> | 
                                                    <?php echo anchor('data_job_karyawan/delete/'.$r->job_karyawan_id,'Delete'); ?>
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


