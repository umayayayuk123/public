<?php
class Arus_kas extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_arus_kas');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_arus_kas->tampil_data();
        $this->template->load('template','arus_kas/lihat_data',$data);
    }
    function pdf()
    {
        $tgl = $this->input->post('tgl_arus_kas');
        $arus_kas = $this->db->query("select * from arus_kas where arus_kas.tanggal = '$tgl'")->result();

        $this->load->library('cfpdf');
        $pdf=new FPDF('L','mm','Legal');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'LAPORAN ARUS KAS');
        $pdf->Text(10, 16, 'Tanggal : '.date('d F Y', strtotime($tgl)));
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(30, 7, 'PENJUALAN', 1,0);
        $pdf->Cell(30, 7, 'FOTO COPY', 1,0);
        $pdf->Cell(30, 7, 'CETAKAN', 1,0);
        $pdf->Cell(50, 7, 'BANNER/STICKER', 1,0);
        $pdf->Cell(30, 7, 'LASER A3+', 1,0);
        $pdf->Cell(35, 7, 'Komputer Design', 1,0);
        $pdf->Cell(30, 7, 'Pendapatan', 1,0);
        $pdf->Cell(30, 7, 'Pengeluaran', 1,0);
        $pdf->Cell(30, 7, 'Total', 1,1);
        $no=1;
        foreach ($arus_kas as $row) {
            $pdf->Cell(10, 7, $no++, 1,0);
            $penjualan = $row->penjualan;
            $pdf->Cell(30, 7, 'Rp . '.number_format($penjualan), 1,0);
            $fc = $row->foto_copy;
            $pdf->Cell(30, 7, 'Rp . '.number_format($fc), 1,0);
            $cetakan = $row->cetakan;
            $pdf->Cell(30, 7, 'Rp . '.number_format($cetakan), 1,0);
            $bs = $row->banner_sticker;
            $pdf->Cell(50, 7, 'Rp . '.number_format($cetakan), 1,0);
            $pdf->Cell(30, 7, 'Rp . '.number_format($laser = $row->laser_A3), 1,0);
            $kd = $row->Sobirin + $row->Mila + $row->Sri + $row->Dian + $row->Hariyanto + $row->Zaenal;
            $pdf->Cell(35, 7, 'Rp . '.number_format($kd), 1,0);
            $pdf->Cell(30, 7,'Rp . '.number_format ($pendapatan = $penjualan + $fc + $cetakan + $bs + $laser + $kd), 1,0);
            $pengeluaran = $row->pengeluaran;
            $pdf->Cell(30, 7, 'Rp . '.number_format($pengeluaran), 1,0);
            $pdf->Cell(30, 7, 'Rp . '.number_format($pendapatan+$pengeluaran) , 1,1);
        }
        $masuk = $this->db->query("select sum(arus_kas.penjualan + arus_kas.foto_copy + arus_kas.cetakan+ arus_kas.banner_sticker + arus_kas.laser_A3 + arus_kas.Sobirin + arus_kas.Sri + arus_kas.Dian + arus_kas.Hariyanto + arus_kas.Zaenal) as masuk from arus_kas where arus_kas.tanggal = '$tgl'")->row_array();
        $keluar = $this->db->query("select sum(pengeluaran) as keluar from arus_kas where arus_kas.tanggal = '$tgl'")->row_array();
        $pdf->Cell(275,7,'Total',1,0,'R');
        $pdf->Cell(30,7,'Rp . '.number_format($masuk['masuk'] - $keluar['keluar']),1,0);
        $pdf->Output();
    }
    function post()
    {
        if(isset($_POST['submit'])){
            // proses Arus Kas
            $id_kas             =   $this->input->post('id_kas');
            $tanggal           =   $this->input->post('tanggal');
            $penjualan          =   $this->input->post('penjualan');
            $foto_copy        =   $this->input->post('foto_copy');
            $cetakan         =   $this->input->post('cetakan');
            $banner_sticker       =   $this->input->post('banner_sticker');
            $laser_A3           =   $this->input->post('laser_A3');
            $Sobirin     =   $this->input->post('Sobirin');
            $Sri     =   $this->input->post('Sri');
            $Dian      =   $this->input->post('Dian');
            $Hariyanto       =   $this->input->post('Hariyanto');
            $Mila           =   $this->input->post('Mila');
            $Zaenal     =   $this->input->post('Zaenal');
            $pendapatan     =   $this->input->post('pendapatan');
            $pengeluaran      =   $this->input->post('pengeluaran');
            $keterangan      =   $this->input->post('keterangan');
            $data       = array('id_kas'=>$id_kas,
                                'tanggal'=>$tanggal,
                                'penjualan'=>$penjualan,
                                'foto_copy'=>$foto_copy,
                                'cetakan'=>$cetakan,
                                'banner_sticker'=>$banner_sticker,
                                'laser_A3'=>$laser_A3,
                                'Sobirin'=>$Sobirin,
                                'Sri'=>$Sri,
                                'Dian'=>$Dian,
                                'Hariyanto'=>$Hariyanto,
                                'Mila'=>$Mila,
                                'Zaenal'=>$Zaenal,
                                'pendapatan'=>$pendapatan,
                                'pengeluaran'=>$pengeluaran,
                                'keterangan'=>$keterangan);
                                
            $this->model_arus_kas->post($data);
            redirect('arus_kas');
        }
        else{
            $this->load->model('model_arus_kas');
            $data['arus_kas']=  $this->model_arus_kas->tampil_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','arus_kas/form_input',$data);
        }
    }
    
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses arus kas
            $id_kas             =   $this->input->post('id_kas');
            $tanggal           =   $this->input->post('tanggal');
            $penjualan          =   $this->input->post('penjualan');
            $foto_copy        =   $this->input->post('foto_copy');
            $cetakan         =   $this->input->post('cetakan');
            $banner_sticker       =   $this->input->post('banner_sticker');
            $laser_A3           =   $this->input->post('laser_A3');
            $Sobirin     =   $this->input->post('Sobirin');
            $Sri     =   $this->input->post('Sri');
            $Dian      =   $this->input->post('Dian');
            $Hariyanto       =   $this->input->post('Hariyanto');
            $Mila           =   $this->input->post('Mila');
            $Zaenal     =   $this->input->post('Zaenal');
            $pendapatan     =   $this->input->post('pendapatan');
            $pengeluaran      =   $this->input->post('pengeluaran');
            $keterangan      =   $this->input->post('keterangan');
            $data       = array('id_kas'=>$id_kas,
                                'tanggal'=>$tanggal,
                                'penjualan'=>$penjualan,
                                'foto_copy'=>$foto_copy,
                                'cetakan'=>$cetakan,
                                'banner_sticker'=>$banner_sticker,
                                'laser_A3'=>$laser_A3,
                                'Sobirin'=>$Sobirin,
                                'Sri'=>$Sri,
                                'Dian'=>$Dian,
                                'Hariyanto'=>$Hariyanto,
                                'Mila'=>$Mila,
                                'Zaenal'=>$Zaenal,
                                'pendapatan'=>$pendapatan,
                                'pengeluaran'=>$pengeluaran,
                                'keterangan'=>$keterangan);
                                
            $this->model_arus_kas->edit($data,$id_kas);
            redirect('arus_kas');
        }
        else{
            $id_kas=  $this->uri->segment(3);
            $this->load->model('model_arus_kas');
            $data['arus_kas']   =  $this->model_arus_kas->tampil_data()->result();
            $data['record']     =  $this->model_arus_kas->get_one($id_kas)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','arus_kas/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id_kas=  $this->uri->segment(3);
        $this->model_arus_kas->delete($id_kas);
        redirect('arus_kas');
    }
}