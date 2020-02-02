                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('databon/post'); ?>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" name="tanggal" placeholder="Tanggal" type="date" required>
                                </div>
                                <div class="form-group">
                                    <label>Item Barang</label>
                                    <input class="form-control" name="item_barang" placeholder="Item Barang" required>
                                </div>
                                <div class="form-group">
                                    <label>QTY</label>
                                    <input class="form-control" name="QTY" placeholder="QTY" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="Harga" required>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input class="form-control" name="jumlah" placeholder="Jumlah / Sisa" required>
                                </div>
                                <div class="form-group">
                                    <label>Sisa</label>
                                    <input class="form-control" name="sisa" placeholder="Jumlah / Sisa" required>
                                </div>
                                <div class="form-group">
                                    <label>Bayar</label>
                                    <input class="form-control" name="bayar" placeholder="Bayar" required>
                                </div>
                                

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('databon','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->