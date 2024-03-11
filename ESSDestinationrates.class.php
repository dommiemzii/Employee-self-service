<?php

/**
 * Author : Chahasi Dominic.
 * Organization : Qasava Solutions LTD
 * Time : 05/10/2023
 * Email : domnicjahazi263@gmail.com
 * File : ESSDestinationrates.class.php
 */
class ESSDestinationrates
{
    public $dbh;
    public static $primaryKey = "dest_id";
    public static $tableName = "ess_destination_rates";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    public $id; 
    public $dest_id; 
    public $dest_date_created;
    public $dest_date_updated;
    public $dest_date_created_by;
    public $dest_date_updated_by;
    public $dest_status;
    public $dest_destination_code;
    public $dest_currency;
    public $dest_advance_code;
    public $dest_destination_type;
    public $dest_daily_rate_amount;
    public $dest_employee_job_group;
    public $dest_destination_name;
    public $dest_publish;
    public $response;



        //get all records from database
    public static function read()
    {
        self::$extraWhere = " dest_publish = 1";
        self::$columns = [
            ['db' => 'dest_date_created', 'dt' => 0],
            ['db' => 'dest_destination_code', 'dt' => 1],
            ['db' => 'dest_advance_code', 'dt' => 2],
            ['db' => 'dest_destination_type', 'dt' => 3],
            ['db' => 'dest_daily_rate_amount', 'dt' => 4],
            ['db' => 'dest_employee_job_group', 'dt' => 5],
            ['db' => 'dest_destination_name', 'dt' => 6],
            ['db' => 'dest_currency', 'dt' => 7],
            ['db' => 'dest_id',
                'dt' => 8,
                'formatter' => function ($d, $row) {
                    return $row;
                }
            ]
        ];
    }
    //get single row of information
    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_destination_rates` WHERE `dest_id` = :dest_id");
        $result->bindParam(':dest_id', $this->dest_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }


    //create function
    public function create()
    {
        Utility::$dbh = $this->dbh;
        Utility::$tableName = self::$tableName;
        if (Utility::checkIfBothExistsEss("dest_destination_code", $this->dest_destination_code, "dest_daily_rate_amount", $this->dest_daily_rate_amount) == 1) {
            $result = $this->dbh->prepare("INSERT INTO `ess_destination_rates` (`dest_date_created`,`dest_currency`,`dest_destination_code`,`dest_advance_code`,`dest_destination_type`,`dest_daily_rate_amount`,`dest_employee_job_group`,`dest_destination_name`)
            VALUES(:dest_date_created,:dest_currency,:dest_destination_code,:dest_advance_code,:dest_destination_type,:dest_daily_rate_amount,:dest_employee_job_group,:dest_destination_name)");
            $result->bindParam(':dest_date_created', $this->dest_date_created, PDO::PARAM_STR);
            $result->bindParam(':dest_currency', $this->dest_currency, PDO::PARAM_STR);
            $result->bindParam(':dest_destination_code', $this->dest_destination_code, PDO::PARAM_STR);
            $result->bindParam(':dest_advance_code', $this->dest_advance_code, PDO::PARAM_STR);
            $result->bindParam(':dest_destination_type', $this->dest_destination_type, PDO::PARAM_STR);
            $result->bindParam(':dest_daily_rate_amount', $this->dest_daily_rate_amount, PDO::PARAM_STR);
            $result->bindParam(':dest_employee_job_group', $this->dest_employee_job_group, PDO::PARAM_STR);
            $result->bindParam(':dest_destination_name', $this->dest_destination_name, PDO::PARAM_STR);
    
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
        $result = $this->dbh->prepare("UPDATE `ess_destination_rates` SET
        `dest_date_updated` = :dest_date_updated,
        `dest_currency` = :dest_currency,
        `dest_destination_code` = :dest_destination_code,
        `dest_advance_code` = :dest_advance_code,
        `dest_destination_type` = :dest_destination_type,
        `dest_daily_rate_amount` = :dest_daily_rate_amount,
        `dest_employee_job_group` = :dest_employee_job_group,
        `dest_destination_name` = :dest_destination_name
        WHERE `dest_id` = :dest_id");
        $result->bindParam(':dest_date_updated', $this->dest_date_updated, PDO::PARAM_STR);
        $result->bindParam(':dest_currency', $this->dest_currency, PDO::PARAM_STR);
        $result->bindParam(':dest_destination_code', $this->dest_destination_code, PDO::PARAM_STR);
        $result->bindParam(':dest_advance_code', $this->dest_advance_code, PDO::PARAM_STR);
        $result->bindParam(':dest_destination_type', $this->dest_destination_type, PDO::PARAM_STR);
        $result->bindParam(':dest_daily_rate_amount', $this->dest_daily_rate_amount, PDO::PARAM_STR);
        $result->bindParam(':dest_employee_job_group', $this->dest_employee_job_group, PDO::PARAM_STR);
        $result->bindParam(':dest_destination_name', $this->dest_destination_name, PDO::PARAM_STR);
        $result->bindParam(':dest_id', $this->dest_id, PDO::PARAM_INT);
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
    
    //get single row of information
    public function getData()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_destination_rates` WHERE `dest_publish` = 1");
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }
       
}