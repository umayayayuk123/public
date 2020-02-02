                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Edit Data Identitas BON</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('identitas_bon/edit'); ?>
                                <input type="hidden" name="ID_BON" value="<?php echo $record['ID_BON']?>">
                                 
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="Nama" value="<?php echo $record['Nama']?>">
                                </div>
                              <div class="form-group">
                                    <label>Instansi</label>
                                    <input class="form-control" name="Instansi" value="<?php echo $record['Instansi']?>">
                                </div>
                              
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="Alamat" value="<?php echo $record['Alamat']?>">
                                </div>
                                 <div class="form-group">
                                    <label>NO HP</label>
                                    <input class="form-control" name="No_HP" value="<?php echo $record['No_HP']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('identitas_bon','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->