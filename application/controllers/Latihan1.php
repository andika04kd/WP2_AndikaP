<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_latihan1');
    }

    public function index() {
        $data['nilai1'] = 55; // Example value for nilai1
        $data['nilai2'] = 130; // Example value for nilai2
        $data['hasil'] = $this->Model_latihan1->jumlah($data['nilai1'], $data['nilai2']);
        $this->load->view('view-latihan', $data);
    }
}
