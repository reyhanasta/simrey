
<?php 

class nasabah_model extends CI_Model {

    function ambilDataIdNasabah($id){
        # code... 
        $this->db->where('id_nasabah',$id);
        //FOR USER SIDE
        return $this->db->get('nasabah')->result();
    }

    //jangan lupa diubah nama functionnya
    function ambilDataNasabah(){
        return $this->db->get('nasabah')->result();
    }

    function tambahdataNasabah(){
        $data = [
            'id_nasabah' => htmlspecialchars($this->input->post('id_nasabah'), true),
            'ktp' => htmlspecialchars($this->input->post('ktp'), true),
            'nama' => htmlspecialchars($this->input->post('nama'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir'), true),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), true),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan'), true),
            'status' => htmlspecialchars($this->input->post('status'), true),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin'), true),
            'tgl_bergabung' => htmlspecialchars($this->input->post('tgl_bergabung'), true),
            'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp'), true),
            'agama' => htmlspecialchars($this->input->post('agama'), true),
            'tgl_entry' => htmlspecialchars($this->input->post('tgl_entry'), true),
          ];
        return $this->db->insert('nasabah',$data);
    }


    function editdataNasabah(){
        $data = [
            'id_nasabah' => htmlspecialchars($this->input->post('id_nasabah'), true),
            'ktp' => htmlspecialchars($this->input->post('ktp'), true),
            'nama' => htmlspecialchars($this->input->post('nama'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir'), true),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), true),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan'), true),
            'status' => htmlspecialchars($this->input->post('status'), true),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin'), true),
            'tgl_bergabung' => htmlspecialchars($this->input->post('tgl_bergabung'), true),
            'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp'), true),
            'agama' => htmlspecialchars($this->input->post('agama'), true),
          ];
        $id = $this->input->post('id_nasabah');
        $this->db->where('id_nasabah',$id);
        return $this->db->update('nasabah',$data);
    
    }
    
    function hapusDataNasabah($id){
        $this->db->where('id_nasabah',$id);
        $this->db->delete('nasabah');
    }

    
}
?>