<?php

/**
 * @author  Jared Okongo Momanyi - (qasavagps@gmail.com)
 * @version 1.0, 2023-12-15
 * @copyright (c) 2023 Qasava GPS Limited. 
 * ESSUploadController.php
 */

class ESSUploadController extends baseController
{
    private $typeAllowed = false;
    private $extAllowed = false;
    private $sizeAllowed = false;
    private $fileExits = true;//reverse logic to cause an error
    private $error = "";
    private $uploadDir = 'uploads/ess/';
    private $uploadTransportDir = 'uploads/ess/transport/';
    private $uploadAccomodationDir = 'uploads/ess/accomodation/';
    private $uploadPerdiemDir = 'uploads/ess/perdiem/';
    private $uploadOtherDir = 'uploads/ess/other/';
    private $extension = "";
    private $fileCsvTmp;
    private $fileName;
    private $fileType;
    private $fileUploadDate;
    private $userId;

    //methods
    public function index() {
        
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $ObjESSUpload->truncateTable();
        
        $csvAsArray = [];
        $error = false;
        $files = array();
        $data = array();
        $uploaddir = $this->uploadDir;
        
        foreach ($_FILES as $file) {
            $this->validateFile($file);
            if ($this->typeAllowed == true && $this->extAllowed == true) {
                
                $this->fileName = date('dmYHis') . "" . preg_replace("/[^a-zA-Z0-9.]/", "", $file['name']);
                $this->fileType = preg_replace("/[^a-zA-Z0-9.]/", "", $file['type']);
                $this->fileCsvTmp = $file['tmp_name'];
                $csvAsArray = array_map('str_getcsv', file($this->fileCsvTmp));
                $csvAsArrayCount = count($csvAsArray);
                
                $this->userId = $_SESSION['USER_ID'];
                $this->fileUploadDate = date("Y-m-d H:i:s");
                
                if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($this->fileName))) {
                    $files[] = $uploaddir . $file['name'];
                    //RETURN PATH
                    $data = Array("result" => "success", "message" => "Upload Successfull", "filepath" => $uploaddir . $this->fileName, "filetype" => $this->fileType);


                } else {
                    $data = Array("result" => "error", "message" => "Upload Failed!!! Try again Please");
                } 
                
            } else {
                $data = Array("result" => "error", "message" => "Invalid File");
            }
        
        }

        
        echo json_encode($data);
    }
    
    //transport
    public function transport() {
        
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $ObjESSUpload->truncateTable();
        
        $csvAsArray = [];
        $error = false;
        $files = array();
        $data = array();
        $uploaddir = $this->uploadTransportDir;
        
        foreach ($_FILES as $file) {
            $this->validateFile($file);
            if ($this->typeAllowed == true && $this->extAllowed == true) {
                
                $this->fileName = date('dmYHis') . "" . preg_replace("/[^a-zA-Z0-9.]/", "", $file['name']);
                $this->fileType = preg_replace("/[^a-zA-Z0-9.]/", "", $file['type']);
                $this->fileCsvTmp = $file['tmp_name'];
                $csvAsArray = array_map('str_getcsv', file($this->fileCsvTmp));
                $csvAsArrayCount = count($csvAsArray);
                
                $this->userId = $_SESSION['USER_ID'];
                $this->fileUploadDate = date("Y-m-d H:i:s");
                
                if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($this->fileName))) {
                    $files[] = $uploaddir . $file['name'];
                    //RETURN PATH
                    $data = Array("result" => "success", "message" => "Upload Successfull", "filepath" => $uploaddir . $this->fileName, "filetype" => $this->fileType);


                } else {
                    $data = Array("result" => "error", "message" => "Upload Failed!!! Try again Please");
                } 
                
            } else {
                $data = Array("result" => "error", "message" => "Invalid File");
            }
        
        }

        
        echo json_encode($data);
    }
    
    //accomodation
    public function accomodation() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $ObjESSUpload->truncateTable();
        
        $csvAsArray = [];
        $error = false;
        $files = array();
        $data = array();
        $uploaddir = $this->uploadAccomodationDir;
        
        foreach ($_FILES as $file) {
            $this->validateFile($file);
            if ($this->typeAllowed == true && $this->extAllowed == true) {
                
                $this->fileName = date('dmYHis') . "" . preg_replace("/[^a-zA-Z0-9.]/", "", $file['name']);
                $this->fileType = preg_replace("/[^a-zA-Z0-9.]/", "", $file['type']);
                $this->fileCsvTmp = $file['tmp_name'];
                $csvAsArray = array_map('str_getcsv', file($this->fileCsvTmp));
                $csvAsArrayCount = count($csvAsArray);
                
                $this->userId = $_SESSION['USER_ID'];
                $this->fileUploadDate = date("Y-m-d H:i:s");
                
                if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($this->fileName))) {
                    $files[] = $uploaddir . $file['name'];
                    //RETURN PATH
                    $data = Array("result" => "success", "message" => "Upload Successfull", "filepath" => $uploaddir . $this->fileName, "filetype" => $this->fileType);


                } else {
                    $data = Array("result" => "error", "message" => "Upload Failed!!! Try again Please");
                } 
                
            } else {
                $data = Array("result" => "error", "message" => "Invalid File");
            }
        
        }

        
        echo json_encode($data);
    }
    
    //perdiem
    public function perdiem() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $ObjESSUpload->truncateTable();
        
        $csvAsArray = [];
        $error = false;
        $files = array();
        $data = array();
        $uploaddir = $this->uploadPerdiemDir;
        
        foreach ($_FILES as $file) {
            $this->validateFile($file);
            if ($this->typeAllowed == true && $this->extAllowed == true) {
                
                $this->fileName = date('dmYHis') . "" . preg_replace("/[^a-zA-Z0-9.]/", "", $file['name']);
                $this->fileType = preg_replace("/[^a-zA-Z0-9.]/", "", $file['type']);
                $this->fileCsvTmp = $file['tmp_name'];
                $csvAsArray = array_map('str_getcsv', file($this->fileCsvTmp));
                $csvAsArrayCount = count($csvAsArray);
                
                $this->userId = $_SESSION['USER_ID'];
                $this->fileUploadDate = date("Y-m-d H:i:s");
                
                if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($this->fileName))) {
                    $files[] = $uploaddir . $file['name'];
                    //RETURN PATH
                    $data = Array("result" => "success", "message" => "Upload Successfull", "filepath" => $uploaddir . $this->fileName, "filetype" => $this->fileType);


                } else {
                    $data = Array("result" => "error", "message" => "Upload Failed!!! Try again Please");
                } 
                
            } else {
                $data = Array("result" => "error", "message" => "Invalid File");
            }
        
        }

        
        echo json_encode($data);
    }
    
    //other
    public function other() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $ObjESSUpload->truncateTable();
        
        $csvAsArray = [];
        $error = false;
        $files = array();
        $data = array();
        $uploaddir = $this->uploadOtherDir;
        
        foreach ($_FILES as $file) {
            $this->validateFile($file);
            if ($this->typeAllowed == true && $this->extAllowed == true) {
                
                $this->fileName = date('dmYHis') . "" . preg_replace("/[^a-zA-Z0-9.]/", "", $file['name']);
                $this->fileType = preg_replace("/[^a-zA-Z0-9.]/", "", $file['type']);
                $this->fileCsvTmp = $file['tmp_name'];
                $csvAsArray = array_map('str_getcsv', file($this->fileCsvTmp));
                $csvAsArrayCount = count($csvAsArray);
                
                $this->userId = $_SESSION['USER_ID'];
                $this->fileUploadDate = date("Y-m-d H:i:s");
                
                if (move_uploaded_file($file['tmp_name'], $uploaddir . basename($this->fileName))) {
                    $files[] = $uploaddir . $file['name'];
                    //RETURN PATH
                    $data = Array("result" => "success", "message" => "Upload Successfull", "filepath" => $uploaddir . $this->fileName, "filetype" => $this->fileType);


                } else {
                    $data = Array("result" => "error", "message" => "Upload Failed!!! Try again Please");
                } 
                
            } else {
                $data = Array("result" => "error", "message" => "Invalid File");
            }
        
        }

        
        echo json_encode($data);
    }
    
    private function validateFile($file) {
        $allowedFileTypes = Array("application/pdf");
        $allowedFileExtension = Array("pdf");
        $allowedFileSize = 25000000;//bytes
        //check if type is allowed
        foreach ($allowedFileTypes as $al_types) {
            if ($file['type'] == $al_types) {
                $this->typeAllowed = true;
                break;
            }
        }
        //check if extension is allowed
        foreach ($allowedFileExtension as $al_ext) {
            $file_name_array = explode(".", $file['name']);
            $ext = $file_name_array[count($file_name_array) - 1];
            $this->extension = $ext;
            if ($ext == $al_ext) {
                $this->extAllowed = true;
                break;
            }
        }
        //check if type is allowed
        /*if ($file['size'] < $allowedFileSize) {
            $this->sizeAllowed = true;
        }
        //check if a file exits
        if (!file_exists($this->uploadDir . $this->fileName)) {
            $this->fileExits = false;
        } */

    }
    
    public function delete() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjESSUpload->id = $input->post('id');
        $modelResponse = $ObjESSUpload->delete();
        echo $modelResponse;
    }
    
    public function truncateTable() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $modelResponse = $ObjESSUpload->truncateTable();
        echo $modelResponse;
    }

    public function importData() {
        
        $ObjESSUpload = new ESSUpload();
        $ObjESSUpload->dbh = $this->registry->db;
        $modelResponse = $ObjESSUpload->importData();
        echo $modelResponse;
    }
    
    
    
}
