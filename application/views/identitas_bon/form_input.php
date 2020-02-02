                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Point of Sale) <small>Tambah Data Identitas BON</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('identitas_bon/post'); ?>
                                <div class="form-group">
                                    <label>ID BON</label>
                                    <input class="form-control" name="ID_BON" placeholder="ID Bon" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="Nama" placeholder="Nama" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Instansi</label>
                                    <input class="form-control" name="Instansi" placeholder="Instansi" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="Alamat" placeholder="Alamat" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>NO HP</label>
                                    <input class="form-control" name="No_HP" placeholder="No HP" type="text" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('Identitas_bon','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->n