<h3>Edit Data Kategori JOB</h3>
<?php
echo form_open('data_kategori_job/edit');
?>
<input type="hidden" value="<?php echo $record['kategori_job_id']?>" name="id">
<table class="table table-bordered">
    <tr><td width="130">Nama Kategori JOB</td>
        <td><div class="col-sm-4""><input type="text" name="data_kategori_job" placeholder="kategori job" class="form-control"
                   value="<?php echo $record['nama_kategori_job']?>"></div>
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('data_kategori_job','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>