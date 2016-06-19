<?php
// Panggil semua file layout
$this->simple_login->cek_session();
$this->load->view('layout/header');
$this->load->view('layout/menu');
$this->load->view('pages/report-spending');
$this->load->view('layout/footer');
$this->load->view('layout/js-table');