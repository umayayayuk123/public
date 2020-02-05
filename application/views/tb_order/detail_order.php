<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            POS (Point of Sale) <small>Transaksi Pesanan</small>
        </h2>
    </div>
</div> 
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="pull-right" >
                            <a href="<?php echo site_url('tb_order/excel/'.$tb_order['no_nota']); ?>" id="tombol-simpan" class="btn btn-success"  ><i class="fa fa-print" ></i> Cetak </a>
                        </div> 

                    </div>      
                </div>
            </div>

            <div class="panel-body">
                <h3>DATA TRANSAKSI PESANAN</h3>
                <br>
                <table class="table table-bordered table-hover">
                <tr>
                        <th width="30%">No Transaksi</th>
                        <td width="5%">:</td>
                        <td><?php echo $tb_order['no_nota'] ?></td>
                    </tr>
                    <tr>
                        <th width="30%">Tanggal Transaksi</th>
                        <td width="5%">:</td>
                        <td><?php echo $tb_order['tanggal_order'] ?></td>
                    </tr>
                    <tr>
                        <th width="30%">Customer</th>
                        <td width="5%">:</td>
                        <td><?php echo $tb_order['nama_customer'] ?></td>
                    </tr>
                    <tr>
                        <th width="30%">Operator</th>
                        <td width="5%">:</td>
                        <td><?php echo get_user($tb_order['operator_id'],'nama_lengkap') ?></td>
                    </tr>
                </table>
                <H3>DETAIL TRANSAKSI PESANAN</H3>
                <br>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                    </tr>
                    <?php $no=1; $total=0; foreach ($detail_order as $r){ ?>
                        <tr class="gradeU">
                            <td><?php echo $no ?></td>
                            <td><?php echo get_tb_order($r->barang_pesanan_id,'nama_barang_pesanan') ?></td>
                            <td><?php echo $r->qty ?></td>
                            <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                            <td>Rp. <?php echo number_format($r->qty*$r->harga,2) ?></td>
                        </tr>
                    <?php $total=$total+($r->qty*$r->harga);
                    $no++; } ?>
                    <tr>
                        <td colspan="4"><b>TOTAL</b></td>
                        <td><b>
                            <?php
                                $jml_qty = $this->model_order->hitung_order_by_id($r->no_nota)->row_array();
                                echo "Rp. ".number_format($jml_qty['total'],2);
                            ?>
                            </b>
                        </td>
                    </tr>
                </table>
            </div>