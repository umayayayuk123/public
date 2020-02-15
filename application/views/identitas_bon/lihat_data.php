<style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           C- POS (Cashier Point of Sale) <small>Data Identitas BON</small>
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
                                 <?php echo anchor('identitas_bon/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID BON</th>
                                                <th>Nama</th>
                                                <th>Instansi</th>
                                                <th>Alamat</th>
                                                <th>No_HP</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->no_nota?></td>
                                                <td><?php echo $r->Nama?></td>
                                                <td><?php echo $r->Instansi?></td>
                                                <td><?php echo $r->Alamat?></td>
                                                <td><?php echo $r->No_HP?></td>
                                                
                                                <td class="center">
                                                    <?php echo anchor('identitas_bon/edit/'.$r->no_nota,'Edit'); ?> | 
                                                    <?php echo anchor('identitas_bon/delete/'.$r->no_nota,'Delete'); ?>
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
