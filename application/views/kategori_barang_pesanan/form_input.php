                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Data Barang Pesanan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><img src=""></center>

                            </div>
                           
                            <div class="panel-body">
                                <?php echo form_open('kategori_barang_pesanan/post'); ?>
                                <div class="form-group">
                                    <label>Kategori Barang</label>
                                    <input type="text" name="kategori_barang_pesanan" class="form-control" placeholder="kategori" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('kategori_barang_pesanan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->