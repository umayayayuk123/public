                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Edit Data Karyawan</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('karyawan/edit'); ?>
                                <input type="hidden" name="ID_Karyawan" value="<?php echo $record['ID_Karyawan']?>">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="Nama" value="<?php echo $record['Nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jk">
                                        <option>- Pilih Jenis Kelamin -</option>
                                        <option value="Laki-Laki" <?php if ($record['Jenis_Kelamin']=='Laki-Laki') {
                                            echo "selected";
                                        } ?>>Laki - Laki</option>
                                        <option value="Perempuan"  <?php if ($record['Jenis_Kelamin']=='Perempuan') {
                                            echo "selected";
                                        } ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>JOB</label>
                                    <input class="form-control" name="JOB" value="<?php echo $record['JOB']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('karyawan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->