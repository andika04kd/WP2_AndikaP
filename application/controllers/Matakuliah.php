<?php
class Matakuliah extends CI_Controller 
{
    public function index()
    {
        $this->load->view('view-form-matkul');
    }

    public function cetak()
    {

        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' =>'Kode Mata Kuliah Harus di isi',
            'min_length' =>'Kode Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' =>'Nama Mata Kuliah Harus di isi',
            'min_length' =>'Nama Terlalu Pendek',
        ]);

        if ($this->form_validation->run() != TRUE) {
            $this->load->view('view-form-matkul');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('view-data-matkul', $data);
        }
    }
}
?>