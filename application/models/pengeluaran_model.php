
<?php 

class Pengeluaran_model extends CI_Model {

    #KODING UNTUK PENGELUARAN MASTER
    function getDataPengeluaranMaster(){
        return $this->db->get('pengeluaran_m')->result();
    }

    function getIdPengeluaranMaster($id){
        # code... 
        $this->db->where('expId',$id);
        //FOR USER SIDE
        return $this->db->get('pengeluaran_m')->result();
    }

    function addDataPengeluaranMaster($data){
        return $this->db->insert('pengeluaran_m',$data);
    }

    function editDataPengeluaranMaster($id,$data){
        $this->db->where('expId',$id);
        return $this->db->update('pengeluaran_m',$data);
    }

    function deleteMaster($data){
        $this->db->where('expId',$data);
        $this->db->delete('pengeluaran_m');
    }

    function delete_dummy(){
        $this->db->where('pNama','dummy');
        $this->db->delete('pengeluaran');
    }

    #KODING UNTUK PENGELUARAM
    function getIdPengeluaran($id){
        # code... 
        $this->db->where('pId',$id);
        //FOR USER SIDE
        return $this->db->get('pengeluaran')->result();
    }

    function addDataPengeluaran($data){
        return $this->db->insert('pengeluaran',$data);
    }

    function editDataPengeluaran($id,$data){
        $this->db->where('pId',$id);
        return $this->db->update('pengeluaran',$data);
    }


    function pengeluaranDelete($data){
        $this->db->where('pId',$data);
        $this->db->delete('pengeluaran');
    }
    
    function getDataPengeluaran(){
        $this->db->order_by("pDate", "desc");
        $this->db->order_by("pTimestamp", "desc");
        return $this->db->get('pengeluaran')->result();
    }

    function getTotalPemasukan(){

    }

    function getTotalPengeluaranTahunan(){
        $this->db->select_sum('pHarga');
        $this->db->from('pengeluaran');
        $this->db->where('pYear',date('Y'));
        return $this->db->get()->result();
    }
    function getTotalPengeluaranBulanan(){
        $this->db->select_sum('pHarga');
        $this->db->from('pengeluaran');
        $this->db->where('pMonth',date('m'));
        return $this->db->get()->result();
    }
    function getTotalPengeluaranHarian(){
        $this->db->select_sum('pHarga');
        $this->db->from('pengeluaran');
        $this->db->where('pDay',date('d'));
        return $this->db->get()->result();
    }

    function get_total_satu_tahun($tahun){
        // SELECT pHarga,pMonth FROM `pengeluaran` GROUP BY pMonth;
        $this->db->select_sum('pHarga');
        $this->db->from('pengeluaran');
        $this->db->where('pDeleted',0);
        $this->db->where('pYear', $tahun);
        return $this->db->get()->result_array();
    }
    
    function check_pengeluaran(){
        $this->db->from('pengeluaran');
        $this->db->where('pDeleted',0);
        $this->db->where('pMonth',date('m'));
        $this->db->where('pYear',date('Y'));
        return $this->db->get()->result();

    }

    function get_total_month(){
        // SELECT pHarga,pMonth FROM `pengeluaran` GROUP BY pMonth;
        $this->db->select_sum('pHarga');
        $this->db->select('pMonth');
        $this->db->from('pengeluaran');
        $this->db->where('pDeleted',0);
        $this->db->where('pYear',date('Y'));
        $this->db->group_by("pMonth"); 
        return $this->db->get()->result_array();
    }

    
}
?>