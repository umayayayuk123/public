                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           C- POS (Cashier Point of Sale) <small>Edit Data JOB Karyawan</small>
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
                                <?php echo form_open('data_job_karyawan/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['job_karyawan_id']?>">
                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input class="form-control" name="nama_karyawan_job" value="<?php echo $record['nama_karyawan_job']?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori JOB</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($data_kategori_job as $k) {
                                            echo "<option value='$k->kategori_job_id'";
                                            echo $record['kategori_job_id']==$k->kategori_job_id?'selected':'';
                                            echo">$k->nama_kategori_job</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" value="<?php echo $record['harga']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('data_job_karyawan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->