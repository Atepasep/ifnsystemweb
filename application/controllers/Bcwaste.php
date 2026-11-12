<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Bcwaste extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('getinifn') != true) {
            $url = base_url('Auth');
            redirect($url);
        }
        $this->load->model('satuanmodel');
        $this->load->model('helper_model', 'helpermodel');
        $this->load->model('barangmodel');
        $this->load->model('dept_model', 'deptmodel');
        $this->load->model('satuanmodel');
        $this->load->model('userappsmodel', 'usermodel');
        $this->load->model('inv_model', 'invmodel');
        $this->load->model('bcwastemodel');

        $this->load->library('Pdf');
        // $this->load->library('Codeqr');
        include_once APPPATH . '/third_party/phpqrcode/qrlib.php';
    }
    public function index()
    {
        $header['header'] = 'other';
        $data['level'] = $this->usermodel->getdatalevel();
        $data['getopname'] = $this->bcwastemodel->getopname();
        if ($this->session->userdata('tglawalbcwaste') == null) {
            $data['tglawal'] = tglmysql(date('Y-m-01'));
            $data['tglakhir'] = tglmysql(lastday($this->session->userdata('thbcwaste') . '-' . $this->session->userdata('blbcwaste') . '-01'));
            $data['data'] = null;
        }else{
            $data['tglawal'] = tglmysql($this->session->userdata('tglawalbcwaste'));
            $data['tglakhir'] = tglmysql($this->session->userdata('tglakhirbcwaste'));
            $data['data'] = $this->bcwastemodel->getdata();
        }
        $data['kategori'] = $this->bcwastemodel->getdatakategori();
        $footer['data'] = $this->helpermodel->getdatafooter()->row_array();
        $footer['fungsi'] = 'bcwaste';
        $this->load->view('layouts/header', $header);
        // $this->load->view('inv/inv', $data);
        $this->load->view('bcwaste/bcwaste', $data);
        $this->load->view('layouts/footer', $footer);
    }
    public function clear(){
        $this->session->unset_userdata('tglawalbcwaste');
        $this->session->unset_userdata('tglakhirbcwaste');
        $this->session->unset_userdata('kepemilikan');
        $this->session->unset_userdata('katebar');
        $this->session->set_userdata('thbcwaste',date('Y'));
        $this->session->set_userdata('blbcwaste',date('m'));
        $url = base_url().'bcwaste';
        redirect($url);
    }
     public function getdata(){
        $monthawal = date('m',strtotime(tglmysql($_POST['tga'])));
        $tahunawal = date('Y',strtotime(tglmysql($_POST['tga'])));
        $jaditahun = '01-'.$monthawal.'-'.$tahunawal;
        $this->session->set_userdata('tglawalbcwaste',tglmysql($jaditahun));
        $this->session->set_userdata('tglakhirbcwaste',tglmysql($_POST['tgk']));
        $this->session->set_userdata('kepemilikan',$_POST['punya']);
        $this->session->set_userdata('katebar',$_POST['exdo']);
        // $this->session->set_userdata('currdeptbcwip',$_POST['curr']);
        echo 1;
    }
    public function getdatabaru($mode=0){
        $arrayu = [];
        $filter_kategori = $_POST['filt'];
        $filter_exdo = $_POST['exdo'];
        $filter_stok = $_POST['stok'];
        $filter_buyer = $_POST['buyer'];
        $filter_exnet = $_POST['exnet'];
        $filter_aneh = $_POST['dataneh'];
        if($filter_kategori!='all'){
            $arrayu['xdln'] = $filter_kategori;
        }
        if($filter_exdo!="all"){
            $arrayu['exdo'] = $filter_exdo;
        }
        if($filter_stok!="all"){
            $arrayu['stok'] = $filter_stok;
        }
        if($filter_buyer!='all'){
            $arrayu['id_buyer'] = $filter_buyer;
        }
        if($filter_exnet!='all'){
            $arrayu['exnet'] = $filter_exnet;
        }
        if($filter_aneh=='true'){
            $arrayu['minus'] = 1;
        }
        echo $this->bcwastemodel->getdatabaru($arrayu,$mode);
    } 
    public function viewdetail($isi = '',$mode=0)
    {
        $split = explode('-', $isi);
        $array = [
            'po' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[1])))),
            'item' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[2])))),
            'dis' => $split[3],
            'id_barang' => $split[4],
            'nobontr' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[5])))),
            'insno' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[6])))),
            // 'insno' => $split[6],
            'nobale' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[7])))),
            'nomor_bc' => $split[8],
            'dept' => $split[9]
        ];
        $array2 = [
            'id_barang' => $split[4],
            'nobontr' => str_replace('%20',' ',str_replace('+','/',str_replace('?','-',rawurldecode($split[5])))),
        ];
       
        $data['header'] = $this->bcwastemodel->getdatadetailbaru($array)->row_array();
        $data['detail'] = $this->bcwastemodel->getdatadetailbaru($array);
        $data['dok'] = $this->invmodel->getdatadok($array2)->row_array();
        // $data['detailbom'] = $this->invmodel->getdatadetailbom($data['header']['id_bom']);
        $data['detailbom'] = $this->invmodel->getdatadetailbom($array);
        $data['isi'] = $array;
        $data['dok2'] = NULL;
        $this->load->view('bcwaste/viewdetail', $data);
    }
    public function tambahdata()
    {
        $this->load->view('satuan/addsatuan');
    }
    public function simpansatuan()
    {
        $data = [
            'kodesatuan' => $_POST['kode'],
            'kodebc' => $_POST['bc'],
            'namasatuan' => $_POST['nama']
        ];
        $hasil = $this->satuanmodel->simpansatuan($data);
        $this->helpermodel->isilog($this->db->last_query());
        echo $hasil;
    }
    public function editsatuan($id)
    {
        $data['data'] = $this->satuanmodel->getdatabyid($id)->row_array();
        $this->load->view('satuan/editsatuan', $data);
    }
    public function updatesatuan()
    {
        $data = [
            'id' => $_POST['id'],
            'kodesatuan' => $_POST['kode'],
            'kodebc' => $_POST['bc'],
            'namasatuan' => $_POST['nama']
        ];
        $hasil = $this->satuanmodel->updatesatuan($data);
        $this->helpermodel->isilog($this->db->last_query());
        echo $hasil;
    }
    public function hapussatuan($id)
    {
        $hasil = $this->satuanmodel->hapussatuan($id);
        if ($hasil) {
            $this->helpermodel->isilog($this->db->last_query());
            $url = base_url() . 'satuan';
            redirect($url);
        }
    }
    public function excel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel    

        $sheet->setCellValue('A1', "DATA SATUAN"); // Set kolom A1 dengan tulisan "DATA SISWA"    
        $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1    

        // Buat header tabel nya pada baris ke 3    
        $sheet->setCellValue('A2', "NO"); // Set kolom A3 dengan tulisan "NO"    
        $sheet->setCellValue('B2', "KODE"); // Set kolom B3 dengan tulisan "KODE"    
        $sheet->setCellValue('C2', "KODE BC"); // Set kolom C3 dengan tulisan "NAMA SATUAN"      
        $sheet->setCellValue('D2', "NAMA SATUAN");
        // Panggil model Get Data   
        $satuan = $this->satuanmodel->getdata();
        $no = 1;

        // Untuk penomoran tabel, di awal set dengan 1    
        $numrow = 3;

        // Set baris pertama untuk isi tabel adalah baris ke 3    
        foreach ($satuan->result_array() as $data) {
            // Lakukan looping pada variabel      
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow, $data['kodesatuan']);
            $sheet->setCellValue('C' . $numrow, $data['kodebc']);
            $sheet->setCellValue('E' . $numrow, $data['namasatuan']);
            $no++;
            // Tambah 1 setiap kali looping      
            $numrow++; // Tambah 1 setiap kali looping    
        }


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)    
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE    
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya    
        $sheet->setTitle("Data Satuan");

        // Proses file excel    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Satuan.xlsx"'); // Set nama file excel nya    
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        $this->helpermodel->isilog('Download Excel DATA SATUAN');
    }
    public function cetakpdf()
    {
        $pdf = new PDF('P', 'mm', 'A4');
        $pdf->AliasNbPages();
        // $pdf->setMargins(5,5,5);
        $pdf->AddFont('Lato', '', 'Lato-Regular.php');
        $pdf->AddFont('Latob', '', 'Lato-Bold.php');
        $pdf->SetFillColor(7, 178, 251);
        $pdf->SetFont('Latob', '', 12);
        // $isi = $this->jualmodel->getrekap();
        $pdf->SetFillColor(205, 205, 205);
        $pdf->AddPage();
        $pdf->Image(base_url() . 'assets/image/logodepanK.png', 155, 5, 55);
        $pdf->Cell(30, 18, 'DATA SATUAN');
        $pdf->ln(12);
        $pdf->SetFont('Latob', '', 10);
        $pdf->Cell(15, 8, 'No', 1, 0, 'C');
        $pdf->Cell(35, 8, 'Kode Satuan', 1, 0, 'C');
        $pdf->Cell(35, 8, 'Kode Bc', 1, 0, 'C');
        $pdf->Cell(100, 8, 'Nama Satuan', 1, 0, 'C');
        $pdf->SetFont('Lato', '', 10);
        $pdf->ln(8);
        $detail = $this->satuanmodel->getdata();
        $no = 1;
        foreach ($detail->result_array() as $det) {
            $pdf->Cell(15, 6, $no++, 1, 0, 'C');
            $pdf->Cell(35, 6, $det['kodesatuan'], 1);
            $pdf->Cell(35, 6, $det['kodebc'], 1);
            $pdf->Cell(100, 6, $det['namasatuan'], 1);
            $pdf->ln(6);
        }
        $pdf->SetFont('Lato', '', 8);
        $pdf->ln(10);
        $pdf->Cell(190, 6, 'Tgl Cetak : ' . date('d-m-Y H:i:s') . ' oleh ' . datauser($this->session->userdata('id'), 'name'), 0, 0, 'R');
        $pdf->Output('I', 'Data Satuan.pdf');
        $this->helpermodel->isilog('Download PDF DATA SATUAN');
    }
}
