                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS ( Cashier Point of Sale) <small>Tambah Data Operator</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/post'); ?>
                                 <div class="form-group">
                                    <label>ID Operator</label>
                                    <input type="text" class="form-control" name="operator_id" placeholder="masukkan id operator" required>
                                </div>
                                 <div class="form-group">
                                 <label>ID Hak Akses</label>
                                 <input type="text" name="id_hak_akses" class="form-control" placeholder="id hak akses" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->