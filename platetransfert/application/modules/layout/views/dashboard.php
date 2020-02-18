<?php
$this->load->view('layout/head');
$this->load->view('layout/topbar');
$this->load->view('layout/sidebar');
$this->load->view($page);
$this->load->view('layout/chat_api');
$this->load->view('layout/footer');
?>
