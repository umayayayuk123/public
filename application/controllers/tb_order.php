<?php
class tb_order extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_barang_pesanan','model_order'));
        chek_session();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_order->simpan_barang();
            redirect('tb_order');
        }
        else
        {
            $data['barang_pesanan']=  $this->model_barang_pesanan->tampil_data();
            $data['detail_order']= $this->model_order->tampilkan_detail_order(0)->result();
            $this->template->load('template','tb_order/form_order',$data);
        }
    }
    
    
    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->model_order->hapusitem($id);
        redirect('tb_order');
    }
    
    
    function selesai_belanja()
    {
        $nama_customer = $this->input->post('nama_customer');
        $tanggal=date('Y-m-d');
        
        $data=array(
            'operator_id'=>$this->session->userdata('operator_id'),
            'tanggal_order'=>$tanggal,
            'nama_customer'=>$nama_customer,
        );
        $this->model_order->selesai_belanja($data);
        redirect('tb_order');
    }
    
    public function list_order()
    {
        $data['tb_order'] = $this->db->get('tb_order')->result();
        $this->template->load('template','tb_order/list_order',$data);
    }
    function laporan()
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
            $tanggal2=  $this->input->post('tanggal2');
            $data['record']=  $this->model_order->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','tb_order/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_order->laporan_default();
            $this->template->load('template','tb_order/laporan',$data);
        }
    }
    
    public function detail_order_by_id($id)
    {
        $data['tb_order'] = $this->db->get_where('tb_order', array('no_nota' => $id ))->row_array();
        $data['detail_order'] = $this->db->get_where('detail_order', array('no_nota' => $id ))->result();
        $this->template->load('template','tb_order/detail_order',$data);
    }
    function excel($id)
    {
        $data['tb_order'] = $this->db->get_where('tb_order', array('no_nota' => $id ))->row_array();
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporanorder_".$data['tb_order']['nama_customer']."_.xls");
        $data['detail_order'] = $this->db->get_where('detail_order', array('no_nota' => $id ))->result();
        $this->load->view('tb_order/laporan_excel',$data);
    }
    
   function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'TRANSAKSI UD EASY PRINTING : '.date('d F Y', strtotime($tgl)));
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(27, 7, 'Tanggal', 1,0);
        $pdf->Cell(60, 7, 'Operator', 1,0);
        $pdf->Cell(48, 7, 'Total Transaksi', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_order->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(27, 7, $r->tanggal_order, 1,0);
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