<?php

class simpanan_model extends CI_Model {

    function ambilDataTabungan(){
        $this->db->select_sum('nominal_simpanan');
        $this->db->select('simpanan.id_nasabah');
        $this->db->select('nasabah.nama');
        $this->db->select('simpanan.tgl_entry');
        $this->db->from('simpanan');
        $this->db->join('nasabah', 'nasabah.id_nasabah = simpanan.id_nasabah');
        $this->db->group_by('simpanan.id_nasabah');

        return $this->db->get()->result();
    }

    function ambilNominalSimpanan($id){
        $this->db->select_sum('nominal_simpanan');
        $this->db->where('id_nasabah',$id);
        $this->db->from('simpanan');
        return $this->db->get()->result();

    }

    function tambahDataSimpanan(){
        $data = [
            'id_simpanan' => htmlspecialchars($this->input->post('id_simpanan'), true),
            'id_nasabah' => $this->db->insert_id(),
            'nominal_simpanan' => htmlspecialchars($this->input->post('nominal_simpanan'), true),
            'tgl_entry' => htmlspecialchars($this->input->post('tgl_entry'), true)
          ];
        return $this->db->insert('simpanan',$data);
    }

    function tambahTabungan(){
        $data = [
            'id_simpanan' => htmlspecialchars($this->input->post('id_simpanan'), true),
            'id_nasabah' => htmlspecialchars($this->input->post('id_nasabah'), true),
            'nominal_simpanan' => htmlspecialchars($this->input->post('nominal_simpanan'), true),
            'tgl_entry' => htmlspecialchars($this->input->post('tgl_entry'), true),
        ];
        return $this->db->insert('simpanan',$data);
    }

    function ambilDataSimpananId($id){
        $this->db->where('id_nasabah',$id);
        $this->db->from('simpanan');
        return $this->db->get()->result();
    }
}

?>