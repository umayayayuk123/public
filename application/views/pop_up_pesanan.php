<hr>
<div class="row">
    <div class="col-md-12">
        <?php if ($sukses=="1") {
            echo "<div class='alert alert-success'>$message</div>";
        }else{ 
            echo "<div class='alert alert-danger'>$message</div>";
        }
        ?>
    </div>
</div>
<?php if ($sukses=="1") {?>
    <div class="row">
        <div class="col-md-12">
            <table cellspacing="0" cellpadding="10" width="100%" class="table">
                <tr>
                    <th width="15%">NO NOTA</th>
                    <td width="85%">: <?=$pesanan['no_nota']?></td>
                </tr>
                <tr>
                    <th width="15%">Tanggal Order</th>
                    <td width="85%">: <?=$pesanan['tanggal_order']?></td>
                </tr>
                <tr>
                    <th width="15%">Nama Customer</th>
                    <td width="85%">: <?=$pesanan['nama_customer']?></td>
                </tr>
                <tr>
                    <th width="15%">Operator</th>
                    <td width="85%">: <?=$pesanan['nama_operator']?></td>
                </tr>
                <tr>
                    <th width="15%">Total bayar</th>
                    <td width="85%">: <?=$pesanan['total']?></td>
                </tr>
                <tr>
                    <th width="15%">Status Pesanan</th>
                    <td width="85%">: <?=$pesanan['status_pesanan']?></td>
                </tr>
            </table>
            <div style="border:0.5px dashed grey"></div>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
                <?php $no=0;foreach ($orderan as $o) { $no++;?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?=$o->nama_barang_pesanan?></td>
                        <td><?=$o->qty?></td>
                        <td><?=$o->harga?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php } ?>