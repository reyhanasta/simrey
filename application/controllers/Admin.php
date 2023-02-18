<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){

    parent::__construct();
    $this->load->model('pengeluaran_model');
    $this->load->model('pemasukan_model');


    // validasi jika user belum login
    if($this->session->userdata('logined') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }

	public function index()
	{
    $data['title'] = "Dashboard";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin_page/beranda');
		$this->load->view('templates/footer');
	}


  // CRUD DATA SIMPANAN
  function dataSimpanan(){
    $data['dataTabungan']= $this->simpanan_model->ambilDataTabungan();
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('simpanan_page/simpanan_list',$data);
		// $this->load->view('templates/footer');
  }

  function tambahDataSimpanan($id){
    $data = $this->simpanan_model->ambilDataSimpananId($id);
    $data = [
      'action' => site_url('admin/tambahDataSimpananAksi'),
      'cancel' => site_url('admin/dataSimpanan'),
      'id_nasabah' => set_value('id_nasabah',$data[0]->id_nasabah),
      'id_simpanan' => set_value('id_simpanan'),
      'nominal_simpanan' => set_value('nominal_simpanan'),
      'tgl_entry' => set_value('tgl_entry'),
    ];
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('simpanan_page/simpanan_form',$data);
		$this->load->view('templates/footer');
  }


  function tambahDataSimpananAksi(){
    $this->form_validation->set_rules('id_nasabah', 'Id Nasabah', 'required',
      array('required' => 'Data ini harus di isi')
  );
  $this->form_validation->set_rules('nominal_simpanan', 'nominal_simpanan', 'required|numeric',
      array('required' => 'Data ini harus di isi',
            'nummeric'=> 'Data harus berupa angka',
            'min' => 'Data tidak boleh kurang dari 5',
            'max' => 'Data tidak boleh lebih dari 12')
  );
  $this->form_validation->set_error_delimiters('<span class="font-italic col-red">','</span>');

  if($this->form_validation->run() != FALSE){
    $this->simpanan_model->tambahTabungan();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Data berhasil diubah!
              </div>');
    
    redirect('admin/dataSimpanan');
  }
  else {
    $id = $this->input->post('id_nasabah');
    $this->tambahDataSimpanan($id);
  }
 
  }

  function detailDataSimpanan($id){
    $data['dataSimpanan'] = $this->simpanan_model->ambilDataSimpananId($id);
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('simpanan_page/simpanan_detail',$data);
		// $this->load->view('templates/footer');

  }

  function detailDataPenarikan($id){ 
    $data = $this->simpanan_model->ambilDataSimpananId($id);
    $dataSimpanan = $this->simpanan_model->ambilNominalSimpanan($id);
    $data = [
      'action' => site_url('admin/tambahDataPenarikan'),
      'cancel' => site_url('admin/dataSimpanan'),
      'id_nasabah' => set_value('id_nasabah',$data[0]->id_nasabah),
      'id_simpanan' => set_value('id_simpanan'),
      'nominal_simpanan' => set_value('nominal_simpanan',$dataSimpanan[0]->nominal_simpanan),
      'tgl_entry' => set_value('tgl_entry'),
    ];
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan_page/penarikan_form',$data);
		$this->load->view('templates/footer');
    
  }

  // function dataPenarikan(){
  //   $this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('penarikan_page/penarikan_list');
	// 	$this->load->view('templates/footer');
  // }

  function laporan(){
      $data['totalout']= $this->pengeluaran_model->getTotalPengeluaranTahunan();
      $data['title'] = "Laporan Tahunan";
      $data = [
        'action' => site_url('admin/laporanBulanan'),
        'title' => "Laporan Bulanan",
        'x_title' => $c,
        'y_title' => $d,
        'month' => $month_filtered ?: date("Y-m"),
        'totalout' => $this->pengeluaran_model->getTotalPengeluaranBulanan(),
        'totalin' => $this->pemasukan_model->getTotalPemasukanBulanan(),
        'total_out_bulan' => $this->pengeluaran_model->get_total_perbulan($bulan),
        'total_in_bulan' => $this->pemasukan_model->get_total_perbulan($bulan),
        'pre_total_in_bulan' => $this->pemasukan_model->get_total_perbulan_sebelumnya($bulan),
        'pre_total_out_bulan' => $this->pengeluaran_model->get_total_perbulan_sebelumnya($bulan),
      ];
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar');
      $this->load->view('laporan/tahunan/index',$data);
      $this->load->view('templates/footer');
  }
  function laporanBulanan(){
      $year = date('Y');
      $x =[];
      $y=[];
      $z=[];
      $in = "";
      $out="";
      $months = "";

      //PENGECEKAN JIKA DATA BULAN INI 
      $check_pemasukan = $this->pemasukan_model->check_pemasukan();
      $check_pengeluaran = $this->pengeluaran_model->check_pengeluaran();

      //JIKA KOSONG, MAKA DATA AKAN DI ISI TERLEBIH DAHULU
      if($check_pemasukan == null){
        $data = [
          'mDate' => date('Y-m-d'),
          'mJenis' => 'dummy',
          'mNominal' =>0,
          'mTimestamp' => time(),
          'mYear' => date('Y'),
          'mMonth' => date('m'),
          'mDay' => date("d"),
          'mDeleted' => 0,
        ];
        $this->pemasukan_model->addDatapemasukan($data);
      }else {
        $this->pemasukan_model->delete_dummy();
        $this->pengeluaran_model->delete_dummy();
      }
      if($check_pengeluaran == null){
        $data = [
          'pNama' =>'dummy',
          'pDate' =>date('Y-m-d'),
          'pJenis' =>'dummy',
          'pHarga' =>0,
          'pYear' => date('Y'),
          'pMonth' => date('m'),
          'pDay' => date('d'),
          'pTimestamp' => time(),
          'pDeleted' => 0,
        ];
        $this->pengeluaran_model->addDataPengeluaran($data);
      }
      //END

      //PENGURAIAN DATA DARI TABLE KE DALAM ARRRAY
      $gettotalin = $this->pemasukan_model->get_total_month();
      $gettotalex = $this->pengeluaran_model->get_total_month();
      //PUSH KE DALAM ARRRAY
      foreach($gettotalin as $i){
        array_push($x,$i['mNominal']);
        array_push($y,$i['mMonth']);
        
      }
      foreach($gettotalex as $i){
        array_push($z,$i['pHarga']);         
      }
      //URAIKAN MENJADI STRING
      //PEMASUKAN
      foreach($x as $k => $i){
        $in .= $i.",";
      }
      //PENGELUARAN
      foreach($z as $k => $i){
        $out .= $i.",";
      }
      //BULAN
      foreach($y as $k => $i){
        $monthNum  = $i;
        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F'); // March
        $months .= "'".$monthName."',";
      }
      //END

      //DATA BUAT TOTAL PENGELUARAN DAN PEMASUKAN
      $outcome_total_yearly = $this->pengeluaran_model->get_total_satu_tahun($year)[0]['pHarga'];
      $income_total_yearly = $this->pemasukan_model->get_total_satu_tahun($year)[0]['mNominal'];
      $total_yearly = $income_total_yearly - $outcome_total_yearly;
      if($total_yearly > 0){
        $color = 'green';
      }else{
        $color = 'red';
      }
      //END
    
      $data = [
        'action' => site_url('admin/laporanBulanan'),
        'title' => "Laporan Bulanan Tahun ".$year,
        'tahun' => $year,
        'bulan' => $months,
        'income_graph_data' => $in,
        'outcome_graph_data' => $out,
        'total_outcome_yearly' => $outcome_total_yearly,
        'total_income_yearly' => $income_total_yearly,
        'selisih' => $total_yearly,
        'color' => $color
    
      ];

      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar');
      $this->load->view('laporan/bulanan/index',$data);
      $this->load->view('templates/footer');
  }

  function coba(){
    echo "welcome to this page";
    $month_filtered = $this->input->post('month_filter');
    $maguk = explode("-",$month_filtered);
    var_dump($maguk[0]);
  }
  function laporanHarian(){
      $data['totalout']= $this->pengeluaran_model->getTotalPengeluaranHarian();
      $data['title'] = "Laporan Harian";
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar');
      $this->load->view('laporan/bulanan/index',$data);
      $this->load->view('templates/footer');
  }

  
}
