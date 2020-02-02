                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Data Karyawan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><img src="assets/img/logo.png"></center>

                            </div> 
                            <div class="panel-heading">
                                 <?php echo anchor('karyawan/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="col-md-12">
                                        <br>
                                         <button type="submit" name="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Simpan Data</button>
                                            
                                        </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID KARYAWAN</th>
                                                <th>NAMA</th>
                                                <th>Jenis Kelamin</th>
                                                <th>JOB</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->ID_Karyawan?></td>
                                                <td><?php echo $r->Nama ?></td>
                                                <td><?php echo $r->Jenis_Kelamin ?></td>
                                                <td><?php echo $r->JOB ?></td>




                                                <td class="center">
                                                    <?php echo anchor('karyawan/edit/'.$r->ID_Karyawan,'Edit'); ?> | 
                                                    <?php echo anchor('karyawan/delete/'.$r->ID_Karyawan,'Delete'); ?>
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


