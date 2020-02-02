                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data Karyawan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('karyawan/post'); ?>
                                <div class="form-group">
                                    <label>ID Karyawan</label>
                                    <input class="form-control" name="ID_Karyawan" placeholder="" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="Nama" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                   <label>Jenis Kelamin</label>
                                    <select class="form-control" name="Jenis_Kelamin" required>
                                        <option>- Pilih Jenis Kelamin -</option>
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>JOB</label>
                                    <input class="form-control" name="JOB" placeholder="JOB" required>
                                </div>
                               

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('karyawan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->