                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Tambah Data Kategori JOB</small>
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
                                <?php echo form_open('data_kategori_job/post'); ?>
                                <div class="form-group">
                                    <label>Nama Kategori JOB</label>
                                    <input type="text" name="data_kategori_job" class="form-control" placeholder="kategori Job" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('kategori','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->