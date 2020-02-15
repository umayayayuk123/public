<style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Data Operator</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><img class="responsive" src="assets/img/logo.png"></center>

                            </div> 
                            <div class="panel-heading">
                                 <?php echo anchor('operator/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Operator</th>
                                                <th>ID Hak Akses</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Login Trakhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->operator_id ?></td>
                                                <td><?php echo $r->id_hak_akses ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->username ?></td>
                                                <td><?php echo $r->last_login ?></td>
                                                <td class="center">
                                                    <?php echo anchor('operator/edit/'.$r->operator_id,'Edit'); ?> | 
                                                    <?php echo anchor('operator/delete/'.$r->operator_id,'Delete'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->