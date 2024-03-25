<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Member_model');
        $this->load->helper(array('form', 'url', 'text','My_Helper'));
        if($this->session->set_userdata('is_Session')){
            redirect(site_url('Auth'));
            
        }
        checkMember($this->session->userdata('LogRole'));
    }

    public function index()
    {
        $this->data['view_file'] = 'Member/Dashbord';
        $this->load->view(THEMES, $this->data);
    }

    public function Logout()
    {
        if ($this->session->userdata('is_Session')) {
            $this->session->unset_userdata('is_Session');
            $this->session->unset_userdata('LogID');
            $this->session->unset_userdata('LogName');
            $this->session->unset_userdata('LogRole');
        }
        redirect('Auth');
    }

    public function Create()
    {
        
        $Product = $this->input->post('Product');
         $Price = $this->input->post('Price');
        $UserID = $this->session->userdata('LogID');
        if (!isset($_FILES['Image1']) || $_FILES['Image1']['error'] == UPLOAD_ERR_NO_FILE) {
               $data = array(
                   'Product' => $Product,
                   'Price' => $Price,
                    'UserID' => $UserID,
                   'CreatedAt' => date('Y-m-d H:i:s'),
                   'UpdatedAt' => date('Y-m-d H:i:s')
               );
               $results = $this->Member_model->Create($data);
           } else {
                $filename1 = null;
                $filename2 = null;
                $filename3 = null;
                $filename4 = null;
                $filename5 = null;
                $Image1 = null;
                $Image2 = null;
                $Image3 = null;
                $Image4 = null;
                $Image5 = null;
               if (!empty($_FILES['Image1']['name'])) {
                    $filename1 =  $_FILES['Image1']['name'];
                    $Image1 = file_get_contents($_FILES['Image1']['tmp_name']);
               }
               if (!empty($_FILES['Image2']['name'])) {
                    $filename2 =  $_FILES['Image2']['name'];
                    $Image2 = file_get_contents($_FILES['Image2']['tmp_name']);
               }
               if (!empty($_FILES['Image3']['name'])) {
                    $filename3 =  $_FILES['Image3']['name'];
                    $Image3 = file_get_contents($_FILES['Image3']['tmp_name']);
               }
               if (!empty($_FILES['Image4']['name'])) {
                    $filename4 =  $_FILES['Image4']['name'];
                    $Image4 = file_get_contents($_FILES['Image4']['tmp_name']);
               }
               if (!empty($_FILES['Image5']['name'])) {
                    $filename5 =  $_FILES['Image5']['name'];
                    $Image5 = file_get_contents($_FILES['Image5']['tmp_name']);
               }
               $results = $this->Member_model->CreatePDO($Product, $Price, $UserID, $filename1,$filename2,$filename3,$filename4,$filename5,$Image1,$Image2,$Image3,$Image4,$Image5);
           }
           if ($results == true) {
               $msg = 'Success';
           } else {
               $msg = 'error';
           }
           echo $msg;
    }

    function getProduct()
    {
        $results = $this->Member_model->getProduct($this->session->userdata('LogID'))->result();
        $data = [];
        foreach ($results as $row) {
            $rowData = $row;
            if ($row->Image1 !== null) {
                $fileData = $row->Image1;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image1 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image2 !== null) {
                $fileData = $row->Image2;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image2 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image3 !== null) {
                $fileData = $row->Image3;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image3 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image4 !== null) {
                $fileData = $row->Image4;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image4 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            if ($row->Image5 !== null) {
                $fileData = $row->Image5;
                $fileType = 'image/jpeg';
                $base64Data = base64_encode($fileData);
                $rowData->Image5 = 'data:' . $fileType . ';base64,' . $base64Data;
            }
            $data[] = $rowData;
        }
        echo json_encode($data);
    }

    public function Update()
    {
        $productID = $this->input->post('productID');
        $product = $this->input->post('product');
        $price = $this->input->post('price');
        $UserID = $this->session->userdata('LogID');

        $row = $this->Member_model->getProductID($productID)->row();

        if (empty($_FILES['Image1']['name']) && empty($_FILES['Image2']['name']) && empty($_FILES['Image3']['name'] ) && empty($_FILES['Image4']['name'] ) && empty($_FILES['Image5']['name'] )) {
   
            $data = array(
                'Product' => $product,
                'Price' => $price,
                'UserID' => $UserID,
                'UpdatedAt' => date('Y-m-d H:i:s')
            );
                $results = $this->Member_model->Update($productID, $data);
            } else {
                $FileName1 = null;
                $FileName2 = null;
                $FileName3 = null;
                $FileName4 = null;
                $FileName5 = null;
                $img1 = null;
                $img2 = null;
                $img3 = null;
                $img4 = null;
                $img5 = null;
        
            for ($i = 1; $i <= 5; $i++) {
                $filenameKey = 'Image' . $i;
                $imgKey = 'img' . $i;
                $imgName = 'FileName' . $i;
        
                if (isset($_FILES[$filenameKey]) && !empty($_FILES[$filenameKey]['name'])) {
                    ${$imgKey} = file_get_contents($_FILES[$filenameKey]['tmp_name']);
                    ${$imgName} = $_FILES[$filenameKey]['name'];
                } else {
                    ${$imgKey} = $row->{'Image' . $i};
                    ${$imgName} = $row->{'FileName' . $i};
                }
            }
        
            $results = $this->Member_model->UpdatePDO(
            $productID, $product, $price, $UserID, $FileName1, $FileName2, $FileName3, $FileName4, $FileName5, 
            $img1, $img2, $img3, $img4, $img5
   );
        }
        
        if ($results == true) {
            $msg = '1';
        } else {
            $msg = '2';
        }
        echo $msg;
    }

    public function Delete()
    {
        $results = $this->Member_model->Delete($this->input->post('id'));
        if ($results == true) {
            $msg = '1';
        } else {
            $msg = '2';
        }
        echo $msg;
    }

    public function file()
    {
        $this->data['view_file'] = 'Member/Memberfile';
        $this->load->view(THEMES, $this->data);
    }

    public function read_excel() {
        $file_name = $_FILES['excel_file']['name'];
        $file_tmp = $_FILES['excel_file']['tmp_name'];

        $inputFileType = IOFactory::identify($file_tmp);
        $reader = IOFactory::createReader($inputFileType);
        $spreadsheet = $reader->load($file_tmp);

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();

        $data = array();

        for ($row = 2; $row <= $highestRow; $row++) {
            $rowData = array();

            for ($col = 'A'; $col <= $highestColumn; $col++) {
                $cellValue = $worksheet->getCell($col.$row)->getValue();
                $rowData[] = $cellValue;
            }

            $data[] = $rowData;
        }

        echo json_encode($data);
    }

    function importFiles()
    {
     $Product = $this->input->post('Product');
     $Price = $this->input->post('Price');
     $rowCount = count($Product);
     
     for ($i = 0; $i < $rowCount; $i++) {
      $data = array(
       "Product" => $Product[$i],
       "Price" => $Price[$i],
       "UserID" => $this->session->userdata('LogID'),
       'CreatedAt' => date('Y-m-d H:i:s'),
        'UpdatedAt' => date('Y-m-d H:i:s')
      );
      $results = $this->Member_model->Create($data);
     }
     if ($results == true) {
        $msg = '1';
    } else {
        $msg = '2';
    }
    echo $msg;
    }

    public function export()
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="ReportData.xlsx"');

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        $columnHeaders = [
            'A' => 'สินค้า',
            'B' => 'ราคา',
        ];
        
        foreach ($columnHeaders as $column => $header) {
            $cell = $column . '1'; 
            $sheet->getStyle($cell)->getAlignment()->applyFromArray([
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ]);
            $sheet->setCellValue($cell, $header);
        // $sheet->getStyle($cell)->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('7dafe8');
            $sheet->getColumnDimension($column)->setWidth(20);
        }
        
        $sheet->getStyle('A1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('7dafe8');
        $sheet->getStyle('B1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('c99a61');
   

        $results = $this->Member_model->getProduct($this->session->userdata('LogID'))->result();
        $startRow = 2;
        
        foreach ($results as $row) {
            $data = [
                'A' => ['position' => 'left', 'value' => $row->Product],
                'B' => ['position' => 'left', 'value' => $row->Price],
            ];
            foreach ($data as $column => $value) {
                $cell = $column . $startRow;
                $sheet->getStyle($cell)->getAlignment()->setHorizontal($value['position']);
                $sheet->getStyle($cell)->getAlignment()->setVertical('center');
                $sheet->setCellValue($cell, $value['value']);
            }
            $startRow++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }
}
?>