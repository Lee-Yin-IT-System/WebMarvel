<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class cmovementAcc extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		// $this->load->helper(array('url','form'));
		  $this->load->library('session');
		  $this->load->model('mmovementAcc');

		 
	}
	public function index()
	{
		
		}


	/* Fungsi Jenis Surat */
	function tampil(){
		
		
		if ($this->input->post('table_search') !== '')
		{
			
		 	$this->session->set_userdata('field',$this->input->post('table_search')); 
			$field =$this->session->userdata('field'); 
			/*echo "<script> alert('$field') ; </script>";*/
			
		}
		
		$a['page']	= "movementAcc";
		$this->load->view('admin/index', $a);
		
	}
	
	function hdr(){
		$fromdate=$this->input->get('fromdate');
		$todate=$this->input->get('todate');
		$qhour=$this->input->get('qhour');
		$field =  $this->session->userdata('field');
		echo $this->mmovementAcc->hdr($field,$fromdate,$todate,$qhour);
		
	}
	function srchdr(){
		$fromdate=$this->input->get('fromdate');
		$todate=$this->input->get('todate');
		$statussage=$this->input->get('statussage');
		$qhour=$this->input->get('qhour');
		$ssource = $this->input->get('ssource');


		echo $this->mmovementAcc->srchdr($fromdate,$todate,$statussage,$qhour, $ssource);
		
	}
	function dtl(){
		$qProdCode=$this->input->get('qProdCode');
		$qPO=$this->input->get('qPO');
		//$qLot=$this->input->get('qLot');
		$Loc_From=$this->input->get('Loc_From');
		$fromdate=$this->input->get('fromdate');
		$Loc_Dest=$this->input->get('Loc_Dest');
		$qhour=$this->input->get('qhour');
		
		$statussage=$this->input->get('statussage');
		$ssource = $this->input->get('ssource');
		

		echo $this->mmovementAcc->dtl($qProdCode,$qPO,$Loc_From,$fromdate,$Loc_Dest,$statussage,$qhour,$ssource);
	}
	function loadqrnumber(){
		$qProdCode=$this->input->get('qProdCode');
		$qPO=$this->input->get('qPO');
		//$qLot=$this->input->get('qLot');
		$Loc_Dest=$this->input->get('Loc_Dest');
		$SageMoveId=$this->input->get('SageMoveId');
		$tgl=$this->input->get('tgl');
		$qhour=$this->input->get('qhour');
		$Loc_From =$this->input->get('Loc_From');
		echo $this->mmovementAcc->loadqrnumber($qProdCode,$qPO,$Loc_Dest,$SageMoveId,$tgl,$qhour,$Loc_From);
		
	}
	function loadqrnumber0(){
		$qProdCode=$this->input->get('qProdCode');
		$qPO=$this->input->get('qPO');
		//$qLot=$this->input->get('qLot');
		$Loc_Dest=$this->input->get('Loc_Dest');
		$SageMoveId=$this->input->get('SageMoveId');
		echo $this->mmovementAcc->loadqrnumber0($qProdCode,$qPO,$Loc_Dest,$SageMoveId);
		
	}
	

	public function createExcel() {
		
		
		
		
		$spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', 'E')
			->setCellValue('B1', 'E')
			->setCellValue('C1', 'E')
			->setCellValue('D1', 'E')
			->setCellValue('E1', 'E')
			->setCellValue('F1', 'E') 
			
			->setCellValue('G1', 'L')
			->setCellValue('H1', 'L')
			->setCellValue('I1', 'L')
			->setCellValue('J1', 'L')
			->setCellValue('K1', 'L')
			->setCellValue('L1', 'L') 
			
			->setCellValue('M1', 'L')
			->setCellValue('N1', 'L')
			->setCellValue('O1', 'L')
			->setCellValue('P1', 'L')
			->setCellValue('Q1', 'L')
			->setCellValue('R1', 'L') 
			
			->setCellValue('S1', 'L')
			->setCellValue('T1', 'L')


			->setCellValue('U1', 'S')
			->setCellValue('V1', 'S')
			->setCellValue('W1', 'S')
			->setCellValue('X1', 'S')
			->setCellValue('Y1', 'L')

			//BARIS KE 2
			->setCellValue('A2', 'SCHGH')
			->setCellValue('B2', 'SCHGH')
			->setCellValue('C2', 'SCHGH')
			->setCellValue('D2', 'SCHGH')
			->setCellValue('E2', 'SCHGH')
			->setCellValue('F2', 'SCHGH') 
			
			->setCellValue('G2', 'SCHGH')
			->setCellValue('H2', 'SCHGH')
			->setCellValue('I2', 'SCHGH')
			->setCellValue('J2', 'SCHGH')
			->setCellValue('K2', 'SCHGH')
			->setCellValue('L2', 'SCHGH') 
			
			->setCellValue('M2', 'SCHGH')
			->setCellValue('N2', 'SCHGH')
			->setCellValue('O2', 'SCHGH')
			->setCellValue('P2', 'SCHGH')
			->setCellValue('Q2', 'SCHGH')
			->setCellValue('R2', 'SCHGH') 
			
			->setCellValue('S2', 'SCHGH')
			->setCellValue('T2', 'SCHGH')


			->setCellValue('U2', 'STOJOU')
			->setCellValue('V2', 'STOJOU')
			->setCellValue('W2', 'STOJOU')
			->setCellValue('X2', 'STOJOU')
			->setCellValue('Y2', 'SCHGH')


			//BARIS KE 3
			->setCellValue('A3', 'VCRNUM')
			->setCellValue('B3', 'STOFCY')
			->setCellValue('C3', 'IPTDAT')
			->setCellValue('D3', 'VCRDES')
			->setCellValue('E3', 'PJT')
			->setCellValue('F3', 'TRSFAM') 
			
			->setCellValue('G3', 'VCRLIN')
			->setCellValue('H3', 'ITMREF')
			->setCellValue('I3', 'PCU')
			->setCellValue('J3', 'PCUSTUCOE')
			->setCellValue('K3', 'STA')
			->setCellValue('L3', 'LOCTYP') 
			
			->setCellValue('M3', 'LOC')
			->setCellValue('N3', 'SLO')
			->setCellValue('O3', 'SERNUM')
			->setCellValue('P3', 'PALNUM')
			->setCellValue('Q3', 'CTRNUM') 
			
			->setCellValue('R3', 'QLYCTLDEM')
			->setCellValue('S3', 'OWNER')


			->setCellValue('T3', 'PCU')
			->setCellValue('U3', 'QTYPCU')
			->setCellValue('V3', 'QTYSTU')
			->setCellValue('W3', 'LOC')
			->setCellValue('X3', 'STA')
			->setCellValue('Y3', 'LocImport')

			//BARIS KE 4
			->setCellValue('A4', 'ENTRY')
			->setCellValue('B4', 'STORAGE SITE')
			->setCellValue('C4', 'ALLOCATION DATE')
			->setCellValue('D4', 'DESCRIPTION')
			->setCellValue('E4', 'PROJECT')
			->setCellValue('F4', 'TRANSACTION GROUP') 
			
			->setCellValue('G4', 'ENTRI LINE NO.')
			->setCellValue('H4', 'PRODUCT')
			->setCellValue('I4', 'UNIT')
			->setCellValue('J4', 'PAC-STK CONVERTION')
			->setCellValue('K4', 'STATUS')
			->setCellValue('L4', 'LOCATION TYPE') 
			
			->setCellValue('M4', 'LOCATION')
			->setCellValue('N4', 'SUBLOT')//Sublot
			->setCellValue('O4', 'SERIAL NUMBER')
			->setCellValue('P4', 'IDENTIFIER 1 ')
			->setCellValue('Q4', 'IDENTIFIER 2') 
			
			->setCellValue('R4', 'QUALITY CONTROL')
			->setCellValue('S4', 'OWNER')


			->setCellValue('T4', 'UNIT')
			->setCellValue('U4', 'QUANTITY')
			->setCellValue('V4', 'STK QUANTITY')
			->setCellValue('W4', 'LOCATION')
			->setCellValue('X4', 'STATUS')
			->setCellValue('Y4', 'LOCAL IMPORT');
			

			
 		
		      
       
		
		$sheet = $spreadsheet->getActiveSheet();
		
		//set warna backgroun
		$spreadsheet->getActiveSheet()->getStyle('A1:Z4')->getFill()
			->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
			->getStartColor()->setARGB('D9D9D9');
		/*$sheet->getStyle('A1:Z4')->getAlignment()->setHorizontal('center');	*/
		$sheet->getStyle('A1:Z4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
		$sheet->getStyle('A1:Z4')->getFont()->setBold(true);	
		foreach ($sheet->getColumnIterator() as $column) {
			$sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
		}
		
		$field=$this->input->post('arr');
		$field1=json_decode($field,true);
		$rows = 5;
		$lineNum = 1;
		$Quantity= '';
		$STK_quantity='';
		foreach ($field1 as $val){
			//code to be executed; 
			 
			
		
		
		//	if ($val['StockUnit'] == 'KG')
			//{
			//	$Quantity= $val['QtyKgs'];//Quantity
		//		$STK_quantity= $val['QtyKgs'];//STK quantity
			//}
		//	elseif ($val['StockUnit'] == 'YD')
			//{
			//	$Quantity= $val['QtyYard'];//Quantity
			//	$STK_quantity= $val['QtyYard'];//STK quantity
			
			//}
			//else{
                $Quantity= $val['Qty'];//Quantity
				$STK_quantity= $val['Qty'];//STK quantity
            //}
			$newDate = date("Ymd", strtotime($val['MoveDate']));
			$spreadsheet->setActiveSheetIndex(0)
			
			->setCellValue('A'.$rows, '1')
			->setCellValue('B'. $rows, $val['OnSite'])
			->setCellValue('C'. $rows, $newDate)
			->setCellValue('D'. $rows, 'Marvel From ' . $val['Loc_From'] . ' To '. $val['Loc_Dest'] )//movement description
			->setCellValue('E'. $rows, '')  //Project
			->setCellValue('F'. $rows, '010') //Transaction group
			
			->setCellValue('G'. $rows, $lineNum) //Entry line no. ()
		    ->setCellValue('H'. $rows, $val['qProdCode'])//Product
			->setCellValue('I'. $rows, $val['StockUnit'])//unit
			->setCellValue('J'. $rows, '1')//PAC-STK conversion
			->setCellValue('K'. $rows, 'A') //Status
			->setCellValue('L'. $rows, $val['LocationType'])//Location type (ngambil dari sage)
			
			->setCellValue('M'. $rows, $val['Loc_From'])//Location
			->setCellValue('N'. $rows, '')//Sublot
			->setCellValue('O'. $rows, '')//Serial number
			->setCellValue('P'. $rows, '') //Identifier 1
			->setCellValue('Q'. $rows, '')//Identifier 2
			
			->setCellValue('R'. $rows, '')//Quality control
			->setCellValue('S'. $rows, $val['OnSite'])//Owner
			->setCellValue('T'. $rows, $val['StockUnit'])//Unit
			->setCellValue('U'. $rows, $Quantity)//Quantity
			->setCellValue('V'. $rows, $STK_quantity)//STK quantity
			->setCellValue('W'. $rows, $val['Loc_Dest'])//dest loc
			->setCellValue('X'. $rows, 'A')//Status
			->setCellValue('Y'. $rows, $val['qLocImport']);//Local Import

            $rows++;
			$lineNum++;
			
        } 
	
   $writer = new xls($spreadsheet);
    $fileName = 'MARVEL';

    // Redirect hasil generate xlsx ke web client
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

	header('Content-Disposition: attachment; filename="MARVEL.xls"');
    //header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');     
    }    





	function akundtlshow(){
		$thnajaran=$this->input->get('thnajaran');
		echo $this->mmovementAcc->akundtlshow($thnajaran);
	}
	function akundtlshowedit(){
		$thnajaran = $_GET['thnajaran'];
		echo $this->mmovementAcc->akundtlshowedit($thnajaran);
	}
	
	function tambah_movement(){
		
		$a['page']	= "movementAcc/tambah_movementAcc";
		$this->load->view('admin/index', $a);
	}
	
	function editmovement($id){
		
		$a['page']	= "movementAcc/edit_movementAcc";
		$this->load->view('admin/index', $a, $id);
	}

	function insertdata(){
		$table =  'takun_transaksi';
		$bagong = $this->input->get('myjson');
		$myjson =json_decode($bagong,true);
		$this->db->insert($table, $myjson );
		redirect('cmovementAcc/tampil','refresh');
	}
	function clearlock(){
		$MoveBy = $this->session->userdata('userid');
		$query = $this->db->query("delete from temp_lockrecord  where  MoveBy = '$MoveBy' " ) ;
	}

	function updatetmplock(){
		$onsite = $this->session->userdata('onsite');
		$movedate = $this->input->get('movedate');
		$qhour= $this->input->get('qhour');
		$status= $this->input->get('status');
		$MoveBy = $this->session->userdata('userid');
		$MoveByRecord = '';
		$Message = '';
		$jml = 0;
		
		if ($status =='insert')
		{	
			
			$query = $this->db->query("select count(MoveBy) as jml, MoveBy from temp_lockrecord as a where 
										a.onsite = '$onsite' and a.movedate = '$movedate' and a.qHour = '$qhour' group by MoveBy" ) ;
			foreach ($query->result() as $row)
					{
						$jml= $row->jml;	
						$MoveByRecord = $row->MoveBy;
					}
				
			if ($jml == 0 )
			{
				$query = $this->db->query("insert into temp_lockrecord (onsite,MoveDate,qHour,MoveBy) 
								values ('$onsite','$movedate','$qhour','$MoveBy')");
			}

			else if ($jml > 0 && $MoveByRecord != $MoveBy)  
			{
				$message = [
					'status' => false,
					'message' => "Data is being used by another user"
				  ];
				  echo json_encode($message);

				//echo "Data Sedang Digunakan 123";
				
				/*$query = $this->db->query("insert into temp_lockrecord (onsite,MoveDate,qHour,MoveBy) 
								values ('$onsite','$MoveDate','$qHour','$MoveBy')";*/
			}

		
		}
		else if ($status =='delete')
		{	
			echo "delete from temp_lockrecord  where 
			onsite = '$onsite' and movedate = '$movedate' and qHour = '$qhour' amd MoveBy = '$MoveBy'";
			$query = $this->db->query("delete from temp_lockrecord  where 
										onsite = '$onsite' and movedate = '$movedate' and qHour = '$qhour' and MoveBy = '$MoveBy'" ) ;
			

			

		
		}
			
	}


	function updatedata(){
		$table =   'takun_transaksi';
		$idtable =  'idakun_transaksi';
		$id = $_GET['id'];
		$bagong = $this->input->get('myjson');
		$myjson =json_decode($bagong,true);
		$this->db->where( $idtable, $id);
		$this->db->update($table, $myjson); 


	}

	
	function simpandtl(){
			$data= $this->input->get('arr');
			$thn_ajaran= $this->input->get('thn_ajaran');
			echo $this->mmovementAcc->simpandtl($data,$thn_ajaran);
		}
	
	function updatedtl(){
			$data= $this->input->get('arr');
			echo $this->mmovementAcc->updatedtl($data);
		}
		
	function deletedtl(){
			$data= $this->input->get('arr');
			echo $this->mmovementAcc->deletedtl($data);
		}
		
	function hapusmovement($id){
		$this->mmovementAcc->hapusmovement($id);
		redirect('cmovementAcc/tampil','refresh');
	}

	function getjsonsample()
    {
		echo $this->mmovementAcc->getjson();
    }

	
	function urlcmb()
    {

		echo $this->mmovementAcc->url();
    }
	
	
	
	function getjsonshow()
    {
	$id = $_GET['id'];
  	echo $this->mmovementAcc->mgetjsonshow($id);
    }
	
	function getjson_popup()
    {
	
		$string =  $_GET['fields'];
		echo $this->mmovementAcc->get_datapopup($string);
    }
	function getjson_headerpopup()
    {
	
		$string =  $_GET['fields'];
		echo $this->mmovementAcc->get_headerpopup($string);
    }


}

