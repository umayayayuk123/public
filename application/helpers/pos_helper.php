<?php

function chek_session()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('operator_id');
    if($session=='')
    {
        redirect('auth/login');
    }
}
function get_user($id,$record)
{
    $CI =& get_instance();
    $q = $CI->db->get_where('operator', array('operator_id' => $id))->row_array();
    return $q[$record];
}
function get_barang($id,$record)
{
    $CI =& get_instance();
    $q = $CI->db->get_where('barang', array('barang_id' => $id))->row_array();
    return $q[$record];
}
function get_akses($id,$record)
{
    $CI =& get_instance();
    $q = $CI->db->get_where('hak_akses', array('id_hak_akses' => $id))->row_array();
    return $q[$record];
}
function get_tb_order($id,$record){
    $CI =& get_instance();
    $q = $CI->db->get_where('barang_pesanan', array('barang_pesanan_id' => $id))->row_array();
    return $q[$record];
}
function get_data_job_karyawan($id,$record){
    $CI =& get_instance();
    $q = $CI->db->get_where('data_job_karyawan', array('job_karyawan_id' => $id))->row_array();
    return $q[$record];
}
function chek_session_login()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    if($session=='oke')
    {
        redirect('dashboard');
    }
}
?>
