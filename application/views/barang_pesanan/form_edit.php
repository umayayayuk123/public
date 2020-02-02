                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           C- POS (Cashier Point of Sale) <small>Edit Data Barang Pesanan</small>
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
                            <div class="panel-body">
                                <?php echo form_open('barang_pesanan/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['barang_pesanan_id']?>">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" name="nama_barang_pesanan" value="<?php echo $record['nama_barang_pesanan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_barang_pesanan" class="form-control">
                                        <?php foreach ($kategori_barang_pesanan as $k) {
                                            echo "<option value='$k->kategori_barpes_id'";
                                            echo $record['kategori_barpes_id']==$k->kategori_barpes_id?'selected':'';
                                            echo">$k->nama_kategori_barpes</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" value="<?php echo $record['harga']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('barang_pesanan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->