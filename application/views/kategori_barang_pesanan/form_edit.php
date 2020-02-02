<h3>Edit Barang Pesanan</h3>
<?php
echo form_open('kategori_barang_pesanan/edit');
?>
<input type="hidden" value="<?php echo $record['kategori_barpes_id']?>" name="kategori_barpes_id">
<table class="table table-bordered">
    <tr><td width="130">Nama Kategori</td>
        <td><div class="col-sm-4""><input type="text" name="kategori_barang_pesanan" placeholder="kategori_barang" class="form-control"
                   value="<?php echo $record['nama_kategori_barpes']?>"></div>
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('kategori_barang_pesanan','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>