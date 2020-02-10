<?php
class transaksi_aruskas extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_data_job_karyawan','model_transaksi_aruskas'));
        chek_session();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_transaksi_aruskas->simpan_barang();
            redirect('transaksi_aruskas');
        }
        else
        {
            $data['data_job_karyawan']=  $this->model_data_job_karyawan->tampil_data()->result();
            $data['detail_arus_kas']= $this->model_transaksi_aruskas->tampilkan_detail_arus_kas(0)->result();
            $this->template->load('template','transaksi_aruskas/form_transaksi',$data);
        }
    }
    
    
    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->model_transaksi_aruskas->hapusitem($id);
        redirect('transaksi_aruskas');
    }
    
    
    function selesai_belanja()
    {
        $nama_karyawan = $this->input->post('nama_karyawan');
        $tanggal=date('Y-m-d');
        
        $data=array(
            'operator_id'=>$this->session->userdata('operator_id'),
            'tanggal_kas'=>$tanggal,
            'nama_karyawan'=>$nama_karyawan,
        );
        $this->model_transaksi_aruskas->selesai_belanja($data);
        redirect('transaksi_aruskas');
    }
    
    public function list_transaksi()
    {
        $data['transaksi_aruskas'] = $this->db->get('transaksi_aruskas')->result();
        $this->template->load('template','transaksi_aruskas/list_transaksi',$data);
    }
    function laporan()
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
            $tanggal2=  $this->input->post('tanggal2');
            $data['record']=  $this->model_transaksi_aruskas->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','transaksi_aruskas/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_transaksi_aruskas->laporan_default();
            $this->template->load('template','transaksi_aruskas/laporan',$data);
        }
    }
    
    public function detail_arus_kas_by_id($id)
    {
        $data['transaksi_aruskas'] = $this->db->get_where('transaksi_aruskas', array('aruskas_id' => $id ))->row_array();
        $data['detail_arus_kas'] = $this->db->get_where('detail_arus_kas', array('aruskas_id' => $id ))->result();
        $this->template->load('template','transaksi_aruskas/detail_transaksi',$data);
    }
    function excel($id)
    {
        $data['transaksi_aruskas'] = $this->db->get_where('transaksi_aruskas', array('aruskas_id' => $id ))->row_array();
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantransaksi_".$data['transaksi_aruskas']['nama_customer']."_.xls");
        $data['detail_arus_kas'] = $this->db->get_where('detail_arus_kas', array('aruskas_id' => $id ))->result();
        $this->load->view('transaksi_aruskas/laporan_excel',$data);
    }
    
   function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(50, 10, 'LAPORAN TRANSAKSI UD EASY PRINTING');
        $pdf->SetFontSize(12);
        $pdf->Text(60, 15, 'Jl. Panglima Polim No 50 A Bojonegoro');
         $pdf->Cell(10,26,'',0,1);
        $pdf->SetFontSize(11);

        $pdf->Text(10, 26, 'Tanggal Transaksi :');
        $pdf->Text(10, 31, 'Nomor Nota :');
        $pdf->Text(10, 36, 'Customer :');
        $pdf->Text(10, 41, 'Operator :');
        
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(27, 7, 'Tanggal', 1,0);
        $pdf->Cell(60, 7, 'Operator', 1,0);
        $pdf->Cell(48, 7, 'Total Transaksi', 1,1);

        // tampilkan dari database
        
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_transaksi->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(27, 7, $r->tanggal_transaksi, 1,0);
            $pdf->Cell(60, 7, $r->nama_lengkap, 1,0);
            $pdf->Cell(48, 7, $r->total, 1,1);
            $no++;
            $total=$total+$r->total;
        }
        // end
        $pdf->Cell(97,7,'Total',1,0,'R');
        $pdf->Cell(48,7,$total,1,0);
        $pdf->Output();
    }
}