<style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Kategori Barang Pesanan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><img class ="responsive" src="assets/img/logo.PNG"></center>

                            </div>
                            
                            <div class="panel-heading">
                                 <?php echo anchor('kategori_barang_pesanan/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kategori Barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_kategori_barpes ?></td>
                                                <td class="center">
                                                    <?php echo anchor('kategori_barang_pesanan/edit/'.$r->kategori_barpes_id,'Edit'); ?> | 
                                                    <?php echo anchor('kategori_barang_pesanan/delete/'.$r->kategori_barpes_id,'Delete'); ?>
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
