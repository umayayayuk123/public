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
            Dashboard <small>Aplikasi C-POS (Cashier Point of Sale).</small>

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





        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Arus Kas 7 Hari Terakhir'
    },
    subtitle: {
        text: 'Sumber: Pengelolaan Data Arus Kas & Transaksi'
    },
    xAxis: {
        categories: [
            <?php 
                foreach (array_reverse($tuju_hari) as $tgl_nya) {
                    echo "'".tanggal_indo($tgl_nya->tanggal)."',";
                }
            ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah (Rp.)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0">Rp. <b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Penjualan Barang',
        data: [
            <?php 
                foreach (array_reverse($penjualan) as $p) {
                    echo $p->penjualan.",";
                }
            ?>
        ]

    }, {
        name: 'Fotocopy',
        data: [
              <?php 
                foreach (array_reverse($foto_copy) as $fotocopy) {
                    echo $fotocopy->fc.",";
                }
            ?>
        ]

    }, {
        name: 'Cetakan',
        data: [
            <?php 
                foreach (array_reverse($cetakan) as $ctk) {
                    echo $ctk->cetak.",";
                }
            ?>
        ]

    }, {
        name: 'Banner',
        data: [
             <?php 
                foreach (array_reverse($banner) as $b) {
                    echo $b->bs.",";
                }
            ?>
        ]

    }]
});
        </script>