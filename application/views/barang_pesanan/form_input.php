                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data Barang Pesanan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                            <div class="panel-body">
                                <?php echo form_open('barang_pesanan/post'); ?>
                                <div class="form-group">
                                    <label>Nama Barang Pesanan</label>
                                    <input class="form-control" name="nama_barang_pesanan" placeholder="nama barang pesanan" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_barpes_id" class="form-control" required>
                                        <?php foreach ($kategori_barang_pesanan as $k) {
                                            echo "<option value='$k->kategori_barpes_id'>$k->nama_kategori_barpes</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="harga" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('barang_pesanan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->