<style>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>            
             <style type="text/css">
                 .kolom{
                    padding: 6px 6px 6px 6px;
                 }
             </style>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Arus Kas</small>
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
                                <div class="row">
                                    <div class="col-md-2">
                                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('arus_kas/post'); ?>"><i class="fa fa-plus"></i> Arus Kas</a>
                                    </div>
                                    <form action="<?php echo site_url('arus_kas/pdf') ?>" method="post">
                                        <div class="col-md-8">
                                            <input type="date" name="tgl_arus_kas" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-file"></i> Export Data</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table border="1" cellpadding="10" width="100%" cellspacing="0" style="display:block;overflow-x:auto">
                                        <thead>
                                            <tr >
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2" align="center">No.</justify></th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2" >ID_KAS</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">TANGGAL</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">PENJUALAN</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">FOTO COPY</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">CETAKAN</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">BANNER/STICKER</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">LASER A3+</th>
                                                <th style="padding:10px 10px 10px 10px;" colspan="6"><center>DESIGN</center> </th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="3" align="center">PENDAPATAN</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">PENGELUARAN</th>
                                                <th style="padding:10px 10px 10px 10px;" rowspan="2">KETERANGAN</th>
                                                <th style="padding:30px 30px 30px 30px;" rowspan="2">AKSI</th>
                                            <tr> 
                                                <th><center>SOBIRIN</center></th>
                                                <th><center>SRI</center></th>
                                                <th><center>DIAN</center></th>
                                                <th><center>HARIYANTO</center></th>
                                                <th><center>MILA</center></th>
                                                <th><center>ZAENAL</center></th>
                                                
 
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td class="kolom"><?php echo $no ?></td>
                                                <td class="kolom"><?php echo $r->id_kas ?></td>
                                                <td class="kolom" nowrap><?php echo $r->tanggal ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->penjualan,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->foto_copy,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->cetakan,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->banner_sticker,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->laser_A3,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Sobirin,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Sri,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Dian,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Hariyanto,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Mila,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->Zaenal,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->pendapatan,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap>Rp. <?php echo number_format($r->pengeluaran,2) ?></td>
                                                <td class="kolom" style="padding:5px 5px 5px 5px" nowrap><?php echo $r->keterangan ?></td>
                                                <td nowrap class="kolom" class="center">
                                                    <?php echo anchor('arus_kas/edit/'.$r->id_kas,'Edit'); ?> | 
                                                    <?php echo anchor('arus_kas/delete/'.$r->id_kas,'Delete'); ?>
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
