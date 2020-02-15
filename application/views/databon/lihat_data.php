<style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS ( Cashier Point of Sale) <small>Data BON</small>
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
                                 <?php echo anchor('databon/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>No Nota</th>
                                                <th>Item Barang</th>
                                                <th>QTY</th>
                                                <th>Harga</th>
                                                <th>Jumlah </th>
                                                <th>Bayar</th>
                                                <th>Sisa </th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->no_nota ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->QTY ?></td>

                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->jumlah,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->bayar,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->sisa_pembayaran,2) ?></td>
                                               <td ><?php echo $r->status_pembayaran ?></td>



                                                <td class="center">
                                                    <?php echo anchor('databon/edit/'.$r->no_nota,'Edit'); ?> | 
                                                    <?php echo anchor('databon/delete/'.$r->no_nota,'Delete'); ?>
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


