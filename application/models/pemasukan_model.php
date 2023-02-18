
<?php 

class pemasukan_model extends CI_Model {

    #KODING UNTUK pemasukan MASTER
    // function getDatapemasukanMaster(){
    //     return $this->db->get('pemasukan_m')->result();
    // }

    // function getIdpemasukanMaster($id){
    //     # code... 
    //     $this->db->where('exmId',$id);
    //     //FOR USER SIDE
    //     return $this->db->get('pemasukan_m')->result();
    // }

    // function addDatapemasukanMaster($data){
    //     return $this->db->insert('pemasukan_m',$data);
    // }

    // function editDatapemasukanMaster($id,$data){
    //     $this->db->where('exmId',$id);
    //     return $this->db->update('pemasukan_m',$data);
    // }

    // function deleteMaster($data){
    //     $this->db->where('exmId',$data);
    //     $this->db->delete('pemasukan_m');
    // }

    #KODING UNTUK PEMASUKAN
    function getIdpemasukan($id){
        # code... 
        $this->db->where('mId',$id);
        //FOR USER SIDE
        return $this->db->get('pemasukan')->result();
    }

    function addDatapemasukan($data){
        return $this->db->insert('pemasukan',$data);
    }

    function editDatapemasukan($id,$data){
        $this->db->where('mId',$id);
        return $this->db->update('pemasukan',$data);
    }


    function pemasukanDelete($data){
        $this->db->where('mId',$data);
        $this->db->delete('pemasukan');
    }
    
    function delete_dummy(){
        $this->db->where('mJenis','dummy');
        $this->db->delete('pemasukan');
    }
    
    function getDatapemasukan(){
        $this->db->where('mDeleted',0);
        $this->db->order_by("mDate", "desc");
        $this->db->order_by("mTimestamp", "desc");
        return $this->db->get('pemasukan')->result();
    }

    function getTotalPemasukan(){

    }

    function getTotalpemasukanTahunan(){
        $this->db->select_sum('pHarga');
        $this->db->from('pemasukan');
        $this->db->where('pYear',date('Y'));
        return $this->db->get()->result();
    }
    function getTotalPemasukanBulanan(){
        $this->db->select_sum('mNominal');
        $this->db->from('pemasukan');
        $this->db->where('mMonth',date('m'));
        return $this->db->get()->result();
    }
    function getTotalpemasukanHarian(){
        $this->db->select_sum('pHarga');
        $this->db->from('pemasukan');
        $this->db->where('pDay',date('d'));
        return $this->db->get()->result();
    }

    function get_total_satu_tahun($tahun){
        // SELECT pHarga,pMonth FROM `pengeluaran` GROUP BY pMonth;
        $this->db->select_sum('mNominal');
        $this->db->from('pemasukan');
        $this->db->where('mDeleted',0);
        $this->db->where('mYear',$tahun);
        return $this->db->get()->result_array();
    }

    function get_total_month(){
        // SELECT pHarga,pMonth FROM `pengeluaran` GROUP BY pMonth;
        $this->db->select_sum('mNominal');
        $this->db->select('mMonth');
        $this->db->from('pemasukan');
        $this->db->where('mDeleted',0);
        $this->db->where('myear',date('Y'));
        $this->db->group_by("mMonth"); 
        return $this->db->get()->result_array();
    }

    function check_pemasukan(){
        $this->db->from('pemasukan');
        $this->db->where('mDeleted',0);
        $this->db->where('mMonth',date('m'));
        $this->db->where('mYear',date('Y'));
        return $this->db->get()->result();

    }

    
}
?>