                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data JOB Karyawan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                            <div class="panel-body">
                                <?php echo form_open('data_job_karyawan/post'); ?>
                                <div class="form-group">
                                    <label>Nama JOB</label>
                                    <input class="form-control" name="nama_karyawan_job" placeholder="nama job karyawan" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_job_id" id="kategori_job_id" class="form-control">
                                        <option value="">- Pilih Kategori JOB-</option>
                                        <?php foreach ($data_kategori_job as $b) { ?>
                                        <option value="<?=$b->kategori_job_id?>"><?=$b->nama_kategori_job?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="harga" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('data_job_karyawan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->