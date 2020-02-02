<?php   
function tanggal_indo($tanggal, $cetak_hari = false)
{
    $hari = array ( 1 =>    'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu',
                'Minggu'
            );
            
    $bulan = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
    $split    = explode('-', $tanggal);
    $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    
    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

?>
<script src="<?php echo base_url() ?>assets/js/highchart/highcharts.js"></script>
<script src="<?php echo base_url() ?>assets/js/highchart/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/js/highchart/export-data.js"></script>
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Halaman Laporan <small></small>

        </h2>
    </div>
</div> 
<div class="panel panel-default">
    <div class="panel-heading">
        <center><img src="<?php echo base_url() ?>assets/img/logo.png"></center>
    </div>         
    <div class="panel-body">
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
</div>

                <!-- /. ROW  -->
