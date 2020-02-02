                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Edit Data Arus Kas</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form method="post" action="<?php echo site_url('arus_kas/edit') ?>">
                                <input type="hidden" name="id_kas" value="<?php echo $record['id_kas']?>">
                                 
                                <div class="form-group">
                                    <label>ID KAS</label>
                                    <input class="form-control" name="id_kas" value="<?php echo $record['id_kas']?>">
                                </div>
                                <div class="form-group">
                                    <label>TANGGAL</label>
                                    <input class="form-control" name="tanggal" value="<?php echo $record['tanggal']?>">
                                </div>
                                <div class="form-group">
                                    <label>PENJUALAN</label>
                                    <input class="form-control" name="penjualan" value="<?php echo $record['penjualan']?>">
                                </div>
                                <div class="form-group">
                                    <label>FOTO COPY</label>
                                    <input class="form-control" name="foto_copy" value="<?php echo $record['foto_copy']?>">
                                </div>
                                <div class="form-group">
                                    <label>CETAKAN</label>
                                    <input class="form-control" name="cetakan" value="<?php echo $record['cetakan']?>">
                                </div>
                                <div class="form-group">
                                    <label>BANNER / STICKER</label>
                                    <input class="form-control" name="banner_sticker" value="<?php echo $record['banner_sticker']?>">
                                </div>
                                <div class="form-group">
                                    <label>LASER A3+</label>
                                    <input class="form-control" name="laser_A3" value="<?php echo $record['laser_A3']?>">
                                </div>
                                <div class="form-group">
                                    <label>SOBIRIN</label>
                                    <input class="form-control" name="Sobirin" value="<?php echo $record['Sobirin']?>">
                                </div>
                                <div class="form-group">
                                    <label>SRI</label>
                                    <input class="form-control" name="Sri" value="<?php echo $record['Sri']?>">
                                </div>
                                <div class="form-group">
                                    <label>DIAN</label>
                                    <input class="form-control" name="Dian" value="<?php echo $record['Dian']?>">
                                </div>
                                <div class="form-group">
                                    <label>HARIYANTO</label>
                                    <input class="form-control" name="Hariyanto" value="<?php echo $record['Hariyanto']?>">
                                </div>
                                <div class="form-group">
                                    <label>MILA</label>
                                    <input class="form-control" name="Mila" value="<?php echo $record['Mila']?>">
                                </div>
                                <div class="form-group">
                                    <label>ZAENAL</label>
                                    <input class="form-control" name="Zaenal" value="<?php echo $record['Zaenal']?>">
                                </div>
                                <div class="form-group">
                                    <label>Pendapatan</label>
                                    <input class="form-control" name="pendapatan" value="<?php echo $record['pendapatan']?>">
                                </div>
                                <div class="form-group">
                                    <label>PENGELUARAN</label>
                                    <input class="form-control" name="pengeluaran" value="<?php echo $record['pengeluaran']?>">
                                </div>
                                <div class="form-group">
                                    <label>KETERANGAN</label>
                                    <input class="form-control" name="keterangan" value="<?php echo $record['keterangan']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('arus_kas','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->