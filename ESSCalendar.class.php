<?php

/**
 * Author : brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : brayoikoya@gmail.com
 * File : ESSCalendar.class.php
 */
class ESSCalendar
{
    public $dbh;
    public static $primaryKey = "cale_id";
    public static $tableName = "ess_calendar";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $cale_id; 
    public $cale_date_created;
    public $cale_date_updated;
    public $cale_date_created_by;
    public $cale_date_updated_by;
    public $cale_status;
    public $cale_code;
    public $cale_created_by;
    public $cale_start_date;
    public $cale_end_date;
    public $cale_current;
    public $cale_description;
    public $cale_publish;
    public $response;



    public static function read()
    {
        self::$extraWhere = " cale_publish = 1";
        self::$columns = [
            ['db' => 'cale_date_created', 'dt' => 0],
            ['db' => 'cale_code', 'dt' => 1],
            ['db' => 'cale_created_by', 'dt' => 2],
            ['db' => 'cale_start_date', 'dt' => 3],
            ['db' => 'cale_end_date', 'dt' => 4],
            ['db' => 'cale_current', 'dt' => 5],
            ['db' => 'cale_description', 'dt' => 6],
            ['db' => 'cale_id',
                'dt' => 7,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
   

    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_calendar` WHERE `cale_id` = :cale_id");
        $result->bindParam(':cale_id', $this->cale_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }


    //create function
    public function create()
    {
        Utility::$dbh = $this->dbh;
        Utility::$tableName = self::$tableName;
        if (Utility::checkIfBothExistsEss("cale_code", $this->cale_code, "cale_description", $this->cale_description) == 1) {
            $result = $this->dbh->prepare("INSERT INTO `ess_calendar` (`cale_date_created`,`cale_code`,`cale_created_by`,`cale_start_date`,`cale_end_date`,`cale_current`,`cale_description`)
            VALUES(:cale_date_created,:cale_code,:cale_created_by,:cale_start_date,:cale_end_date,:cale_current,:cale_description)");
            $result->bindParam(':cale_date_created', $this->cale_date_created, PDO::PARAM_STR);
            $result->bindParam(':cale_code', $this->cale_code, PDO::PARAM_STR);
            $result->bindParam(':cale_created_by', $this->cale_created_by, PDO::PARAM_STR);
            $result->bindParam(':cale_start_date', $this->cale_start_date, PDO::PARAM_STR);
            $result->bindParam(':cale_end_date', $this->cale_end_date, PDO::PARAM_STR);
            $result->bindParam(':cale_current', $this->cale_current, PDO::PARAM_STR);
            $result->bindParam(':cale_description', $this->cale_description, PDO::PARAM_STR);
    
            try {
                $this->dbh->beginTransaction();
                $result->execute();
                $this->dbh->commit();
                $this->response = 1;
            } catch (PDOException $e) {
                $this->dbh->rollback();
                $this->response = $e->getMessage();
            }
            return $this->response;
        } else {
            return 2;//record exists
        }
    }

        
        
    public function update()
    {
       //cale_id,cale_date_created, cale_date_updated, cale_created_by, 
         //cale_updated_by, cale_status, cale_code, cale_start_date, cale_end_date, cale_current, cale_description, cale_publish
 
        $result = $this->dbh->prepare("UPDATE `ess_calendar` SET
        `cale_date_updated` = :cale_date_updated,
        `cale_code` = :cale_code,
        `cale_created_by` = :cale_created_by,
        `cale_start_date` = :cale_start_date,
        `cale_end_date` = :cale_end_date,
        `cale_current` = :cale_current,
        `cale_description` = :cale_description
        WHERE `cale_id` = :cale_id");
        $result->bindParam(':cale_date_updated', $this->cale_date_updated, PDO::PARAM_STR);
        $result->bindParam(':cale_code', $this->cale_code, PDO::PARAM_STR);
        $result->bindParam(':cale_created_by', $this->cale_created_by, PDO::PARAM_STR);
        $result->bindParam(':cale_start_date', $this->cale_start_date, PDO::PARAM_STR);
        $result->bindParam(':cale_end_date', $this->cale_end_date, PDO::PARAM_STR);
        $result->bindParam(':cale_current', $this->cale_current, PDO::PARAM_STR);
        $result->bindParam(':cale_description', $this->cale_description, PDO::PARAM_STR);
        $result->bindParam(':cale_id', $this->cale_id, PDO::PARAM_INT);
        try {
            $this->dbh->beginTransaction();
            $result->execute();
            $this->dbh->commit();
            $this->response = 1;
        } catch (PDOException $e) {
            $this->dbh->rollback();
            $this->response = $e->getMessage();
        }
        return $this->response;
    }
       
}