                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            C- POS (Cashier Point of Sale) <small>Tambah Data Barang</small>
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('databon/post'); ?>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" name="tanggal" placeholder="Tanggal" type="date"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Item Barang</label>
                                    <select name="item_barang" id="item_barang" class="form-control">
                                        <option value="">- Pilih Barang-</option>
                                        <?php foreach ($barang as $b) { ?>
                                        <option value="<?=$b->barang_id?>"><?=$b->nama_barang?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" id="harga" placeholder="Harga" required
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>QTY</label>
                                    <input class="form-control" id="qty" name="QTY" placeholder="QTY" required
                                    onKeyPress="return goodchars(event,'0123456789  ',this)">
                                </div>
                                <div class="form-group">
                                    <label>Total Jumlah</label>
                                    <input class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required readonly>
                                </div>
                                <div class="form-group">
                                    <label>Bayar</label>
                                    <input class="form-control" name="bayar" placeholder="Bayar" required>
                                </div>


                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> |
                                <?php echo anchor('databon','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->

                <script>
                    $('#item_barang').change(function () {
                        var id_barang = $(this).val();
                        $.ajax({
                            url: "<?php echo site_url('barang/get_barang_by_id_return_json') ?>",
                            type: 'post',
                            dataType: 'JSON',
                            data: {
                                id_barang: id_barang,
                            },
                            success: function (response) {
                                $('#harga').val(response.barang.harga);
                            }
                        });
                    });

                    $( "#qty" ).keypress(function() {
                        //jumlah = qty +harga
                        var qty = parseInt($('#qty').val());
                        var harga = parseInt($('#harga').val());
                        var total = qty*harga;
                        $('#jumlah').val(total);
                    });

                    function getkey(e) {
                        if (window.event)
                            return window.event.keyCode;
                        else if (e)
                            return e.which;
                        else
                            return null;
                    }

                    function goodchars(e, goods, field) {
                        var key, keychar;
                        key = getkey(e);
                        if (key == null) return true;

                        keychar = String.fromCharCode(key);
                        keychar = keychar.toLowerCase();
                        goods = goods.toLowerCase();

                        // check goodkeys
                        if (goods.indexOf(keychar) != -1)
                            return true;
                        // control keys
                        if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
                            return true;

                        if (key == 13) {
                            var i;
                            for (i = 0; i < field.form.elements.length; i++)
                                if (field == field.form.elements[i])
                                    break;
                            i = (i + 1) % field.form.elements.length;
                            field.form.elements[i].focus();
                            return false;
                        };
                        // else return false
                        return false;
                    }
                </script>