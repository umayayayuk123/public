<?php
class Dashboard extends CI_Controller{
    
    
    function index(){
        chek_session();
        $data['tuju_hari'] = $this->db->query("select tanggal from arus_kas
												group by tanggal
												order by tanggal desc
												limit 7")->result();

        $data['penjualan'] = $this->db->query("select sum(arus_kas.penjualan) as penjualan from arus_kas
												group by tanggal
												order by tanggal desc
												limit 7")->result();
        $data['foto_copy'] = $this->db->query("select sum(arus_kas.foto_copy) as fc from arus_kas
												group by tanggal
												order by tanggal desc
												limit 7")->result();

        $data['cetakan'] = $this->db->query("select sum(arus_kas.cetakan) as cetak from arus_kas
												group by tanggal
												order by tanggal desc
												limit 7")->result();

         $data['banner'] = $this->db->query("select sum(arus_kas.banner_sticker) as bs from arus_kas
												group by tanggal
												order by tanggal desc
												limit 7")->result();

        $this->template->load('template','v_dashboard',$data);
    }
}