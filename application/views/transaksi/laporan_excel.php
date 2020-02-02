========================
TRANSAKSI
========================
<br>
<table width="100%" cellpadding="10" cellspacing="0" >
<tr>
        <th width="30%" align="left">Nomor Transaksi</th>
        <td width="5%">:</td>
        <td><?php echo $transaksi['transaksi_id'] ?></td>
    </tr>
    <tr>
        <th width="30%" align="left">Tanggal Transaksi</th>
        <td width="5%">:</td>
        <td><?php echo $transaksi['tanggal_transaksi'] ?></td>
    </tr>
    <tr>
        <th width="30%" align="left">Customer</th>
        <td width="5%">:</td>
        <td><?php echo $transaksi['nama_customer'] ?></td>
    </tr>
    <tr>
        <th width="30%" align="left">Operator</th>
        <td width="5%">:</td>
        <td><?php echo get_user($transaksi['operator_id'],'nama_lengkap') ?></td>
    </tr>
</table>
<br>
<table border="1" cellspacing="0" cellpadding="10" width="100%">
    <tr>
        <th colspan="5"> DETAIL TRANSAKSI</th>
    </tr>
    <tr>
        <th width="5%">No.</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Sub Total</th>
    </tr>
    <?php $no=1; $total=0; foreach ($detail_transaksi as $r){ ?>
        <tr class="gradeU">
            <td><?php echo $no ?></td>
            <td><?php echo get_barang($r->barang_id,'nama_barang') ?></td>
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
                $jml_qty = $this->model_transaksi->hitung_transaksi_by_id($r->transaksi_id)->row_array();
                echo "Rp. ".number_format($jml_qty['total'],2);
            ?>
            </b>
        </td>
    </tr>
</table>