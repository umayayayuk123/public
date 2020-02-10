                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Transaksi Arus Kas</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                        		<div class="row">
                        			<div class="col-md-12">
	                        			<div class="pull-right">
                        					<a href="javascript:void(0)" onclick="simpan()" id="tombol-simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</a>
                        					<a href="javascript:void(0)" onclick="kembali()" id="tombol-kembali" class="btn btn-default">&laquo; Kembali</a>
	                        			</div>
                        			</div>		
                        		</div>
                        	</div>

                        	<div class="panel-body" id="panel-simpan">
								<div class="form-group">
									<form class="form-horizontal" method="post" action="<?php echo site_url('transaksi_aruskas/selesai_belanja'); ?>">
									    <label class="col-sm-2 control-label">Nama Karyawan</label>
									    <div class="col-sm-10">
									      <input name="nama_karyawan" placeholder="Masukkan nama karyawan" class="form-control" required>
									    </div>

									    <div class="col-md-12">
									    <br>
									     <button type="submit" name="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Simpan Data</button>
									    	
									    </div>
									</form>
								</div>
                        	</div>
                            <div class="panel-body" id="panel-barang">
                                <?php echo form_open('transaksi_aruskas', array('class'=>'form-horizontal')); ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Jasa</label>
                                        <div class="col-sm-10">
                                        <select name="nama_karyawan_job" id="nama_karyawan_job" class="form-control">
                                            <option value="">- Pilih Jenis Jasa -</option>
                                            <?php foreach ($data_job_karyawan as $kar) { ?>
                                               <option value="<?=$kar->job_karyawan_id?>"><?=$kar->nama_karyawan_job?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Quantity</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="qty" placeholder="QTY" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Tambah Daftar Arus Kas</button> 
                                        </div>
                                    </div>
                                </form>

                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Jenis Arus Kas</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($detail_arus_kas as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_karyawan_job.' - '.anchor('transaksi_aruskas/hapusitem/'.$r->t_aruskas_id,'Hapus',array('style'=>'color:red;')) ?></td>
                                                <td><?php echo $r->qty ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->qty*$r->harga,2) ?></td>
                                            </tr>
                                        <?php $total=$total+($r->qty*$r->harga);
                                        $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="4">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total,2);?></td>
                                            </tr>
                                         

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->

 <script type="text/javascript">
 	$(document).ready(function() {
 		$('#panel-simpan').hide();
 		$('#tombol-kembali').hide();
 		$('#tombol-simpan').show();
 		$('#panel-barang').show();
 	})
 	function simpan() {
 		$('#panel-simpan').show();
 		$('#tombol-kembali').show();
 		$('#tombol-simpan').hide();
 		$('#panel-barang').hide();
 	}
 	function kembali() {
 		$('#panel-simpan').hide();
 		$('#tombol-kembali').hide();
 		$('#tombol-simpan').show();
 		$('#panel-barang').show();	
 	}
 </script>