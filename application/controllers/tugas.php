<?php
class Tugas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-tugas');
    }
    public function cetak()

    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            ['required' => "nama harus diisi", 'min_lenght' => "nama terlalu pendek"]
        );

        $this->form_validation->set_rules(
            'nis',
            'nis',
            'required|min_length[3]',
            ['required' => "NIS minimal 4 Angka", 'min_lenght' => "NIS anda terlalu salah"]

        );
        $this->form_validation->set_rules(
            'kelas',
            'kelas',
            'required|min_length[2]',
            ['required' => "Kelas harus sesuai dengan Kartu Tanda Pengenal Anda", 'min_lenght' => "Kelas harus sesuai dengan Kartu Tanda Pengenal Anda"]
        );

        $this->form_validation->set_rules(
            'tanggal',
            'tanggal',
            'required|min_length[3]',
            ['required' => "Tanggal Lahir Anda Salah", 'min_lenght' => "Tanggal lahir anda tidak tercantum di kalender"]
        );

        $this->form_validation->set_rules(
            'lahir',
            'lahir',
            'required|min_length[3]',
            ['required' => "Isi dengan benar tempat lahi anda", 'min_lenght' => "Isi dengan benar tempat lahi anda"]

        );
        $this->form_validation->set_rules(
            'alamat',
            'nama',
            'required|min_length[3]',
            ['required' => "Alamat harus sesuai Katu Tanda Pengenal Anda", 'min_lenght' => "Alamat harus sesuai Katu Tanda Pengenal Anda"]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-tugas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'lahir' => $this->input->post('lahir'),
                'alamat' => $this->input->post('alamat'),
                'jnk' => $this->input->post('jnk'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('data-tugas', $data);
        }
    }
}
