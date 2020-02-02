                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data Arus Kas</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('arus_kas/post'); ?>
                               <div class="form-group">
                                    <label>ID_KAS</label>
                                    <input class="form-control" name="id_kas" placeholder="ID KAS"  >
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" name="tanggal" type="date" placeholder="tanggal" >
                                </div>
                                <div class="form-group">
                                    <label>Penjualan</label>
                                    <input class="form-control" name="penjualan" type="" placeholder="Penjualan" >
                                <div class="form-group">
                                    <label>Foto Copy</label>
                                    <input class="form-control" name="foto_copy" type="" placeholder="Foto Copy" >
                                </div>
                                <div class="form-group">
                                    <label>Cetakan</label>
                                    <input class="form-control" name="cetakan" type="" placeholder="cetakan" >
                                </div>
                                <div class="form-group">
                                    <label>Banner / Sticker</label>
                                    <input class="form-control" name="banner_sticker" type="" placeholder="Foto Copy" >
                                </div>
                                <div class="form-group">
                                    <label>Laser A3+</label>
                                    <input class="form-control" name="laser_A3" type="" placeholder="Laser A3+" >
                                </div>
                                <div class="form-group">
                                    <label>Sobirin</label>
                                    <input class="form-control" name="Sobirin" type="" placeholder="Sobirin" >
                                </div>
                                <div class="form-group">
                                    <label>Sri</label>
                                    <input class="form-control" name="Sri" type="" placeholder="Sri">
                                </div>
                                <div class="form-group">
                                    <label>Dian</label>
                                    <input class="form-control" name="Dian" type="" placeholder="Dian" >
                                </div>
                                <div class="form-group">
                                    <label>Hariyanto</label>
                                    <input class="form-control" name="Hariyanto" type="" placeholder="Hariyanto" >
                                </div>
                                <div class="form-group">
                                    <label>Mila</label>
                                    <input class="form-control" name="Mila" type="" placeholder="Mila" >
                                </div>
                                <div class="form-group">
                                    <label>Zaenal</label>
                                    <input class="form-control" name="Zaenal" type="" placeholder="Zaenal" >
                                </div>
                                <div class="form-group">
                                    <label>Pendapatan</label>
                                    <input class="form-control" name="pendapatan" type="" placeholder="Pendapatan" >
                                </div>
                                <div class="form-group">
                                    <label>Pengeluaran</label>
                                    <input class="form-control" name="pengeluaran" type="" placeholder="pengeluaran" >
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input class="form-control" name="keterangan" type="" placeholder="Keterangan" >
                                </div>
                               
                                

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('arus_kas','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
