                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Edit Data BON</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('databon/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['no_nota']?>">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal" value="<?php echo $record['tanggal']?>">
                                </div>
                               <div class="form-group">
                                    <label>No Nota</label>
                                    <input class="form-control" name="no_nota" value="<?php echo $record['no_nota']?>">
                                </div>
                                <div class="form-group">
                                    <label>Item Barang</label>
                                    <input class="form-control" name="item_barang" value="<?php echo $record['item_barang']?>">
                                </div>
                                 <div class="form-group">
                                    <label>QTY</label>
                                    <input class="form-control" name="QTY" value="<?php echo $record['QTY']?>">
                                </div>
                                 <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" value="<?php echo $record['harga']?>">
                                </div>
                                 <div class="form-group">
                                    <label>Jumlah</label>
                                    <input class="form-control" name="jumlah" value="<?php echo $record['jumlah_sisa']?>">
                                </div>
                                <div class="form-group">
                                    <label>Sisa</label>
                                    <input class="form-control" name="sisa" value="<?php echo $record['jumlah_sisa']?>">
                                </div>
                                 <div class="form-group">
                                    <label>Bayar</label>
                                    <input class="form-control" name="bayar" value="<?php echo $record['bayar']?>">
                                </div>
                                 <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" value="<?php echo $record['status']?>">
                                </div>


                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('databon','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->