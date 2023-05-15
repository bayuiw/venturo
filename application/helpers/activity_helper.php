<?php

function activity_log($tipe, $form, $url, $query){
    $CI =& get_instance();

    $param['log_user_id'] = $CI->session->userdata('id');
    $param['log_user_name'] = $CI->session->userdata('name');
    $param['log_type'] = $tipe;
    $param['log_form'] = $form;

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://".$url;   
    else  
        $url = "http://".$url;
    $param['log_url'] = $url;
    $param['log_query']= $query;

    $param['log_dt'] = date('Y-m-d H:i:s');

    $CI->load->model('Log_model', 'lm');

    $CI->lm->simpan_log($param);

}

?>