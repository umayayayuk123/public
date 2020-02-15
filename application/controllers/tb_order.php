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
            // print_r($this->db->last_query());
            redirect('tb_order');
        }
        else
        {
            $data['barang_pesanan']=  $this->model_barang_pesanan->tampil_data()->result();
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
        $id = $this->uri->segment(3);
        $temp_rec = $this->db->get_where('tb_order', array('no_nota' => $id ));
        
        $num_rows = $temp_rec->num_rows();
        $data=$temp_rec->row();
        $this->load->library('cfpdf');
        $pdf=new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(100, 10, 'TRANSAKSI UD EASY PRINTING');
        $pdf->Text(80, 16, 'Jl. Panglima Polim No.50 A Sumbang Bojonegoro');
        $pdf->Cell(10, 10,'','',1);
        $pdf->SetFont('Arial','B','L');
        $pdf->Text(10, 30, 'Nomor Transaksi');
        $pdf->Text(60,30, ' : '.$data->no_nota,0,1,'L');
        $pdf->Text(10, 38, 'Tanggal Transaksi');
        $pdf->Text(60,38, ' : '.$data->tanggal_order,0,1,'L');
        $pdf->Text(10, 46, 'Nama Customer');
        $pdf->Text(60,46, ' : '.$data->nama_customer,0,1,'L');
        $pdf->Text(10, 54, 'Operator');
        $pdf->Text(60,54, ' : '.get_user($data->operator_id,'nama_lengkap'));
        $pdf->cell(10, 40,'','',1);
        $pdf->SetFontSize(14);
        
        $pdf->Cell(10, 10,'NO',1,0);
        $pdf->Cell(60, 10,'Nama Barang',1,0);
        $pdf->Cell(45, 10,'QTY',1,0);
        $pdf->Cell(60, 10,'Harga',1,0);
        $pdf->Cell(65, 10,'SUB TOTAL',1,1);
        
        
        $no=1;
        $total=0;
        $data = $this->db->get_where('detail_order', array('no_nota' => $id ));
        foreach ($data->result() as $r)
        {
            
            $pdf->Cell(10, 10, $no, 1,0);
            $pdf->Cell(60, 10, get_tb_order($r->barang_pesanan_id,'nama_barang_pesanan'), 1,0);
            $pdf->Cell(45, 10, $r->qty, 1,0);
            $pdf->Cell(60, 10, number_format($r->harga,2), 1,0);
            $pdf->Cell(65, 10, number_format($r->qty*$r->harga,2),1,1);
            $no++;
        }
        $jml_qty = $this->model_order->hitung_order_by_id($id)->row_array();
        $pdf->Cell(175,10, "TOTAL", 1, 0);
        $pdf->Cell(65,10, "Rp. ".number_format($jml_qty['total'],2), 1, 1);

        $pdf->Output();
        

    }
    
}