<?php
class Dlemas extends CI_Controller
{

    public function index()
    {
        $this->load->view('view_form_dlemas');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => 'Nama Siswa Wajib diisi',
            'min_lenght' => 'Nama Siswa terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS Wajib diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas Wajb diisi',
            'min_lenght' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'Tanggal Lahir Wajib diisi',
            'min_lenght' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Wajib diisi',
            'min_lenght' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'Alamat Wajib diisi',
            'min_lenght' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('jenis', 'Jenis Kelamin', 'required|min_length[3]', [
            'required' => 'Jenis Kelamin Wajib diisi'
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[3]', [
            'required' => 'Agama Wajib diisi'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view_form_dlemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jenis' => $this->input->post('jenis'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('view_data_dlemas', $data);
        }
    }
}