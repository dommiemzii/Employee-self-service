<?php

/**
 * Author : Chahasi Dominic.
 * Organization : Qasava Solutions LTD
 * Time : 27/11/2023
 * Email : domnicjahazi263@gmail.com
 * File : ESSBankAccounts.class.php
 */
class ESSBankAccounts
{
    public $dbh;
    public static $primaryKey = "bank_id";
    public static $tableName = "ess_bank_accounts";
    public static $GET;
    public static $extraWhere;
    public static $columns;
    public static $db;
    public $bank_id; 
    public $bank_date_created;
    public $bank_date_updated;
    public $bank_created_by;
    public $bank_updated_by;
    public $bank_status;
    public $bank_no;
    public $bank_name;
    public $bank_city;
    public $bank_publish;
    public $response;


    public static function read()
    {
        self::$extraWhere = " bank_publish = 1";
        self::$columns = [
            ['db' => 'bank_date_created', 'dt' => 0],
            ['db' => 'bank_no', 'dt' => 1],
            ['db' => 'bank_name', 'dt' => 2],
            ['db' => 'bank_city', 'dt' => 3],
            ['db' => 'bank_id',
                'dt' => 4,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
    public function detail()
    {

        $result = $this->dbh->prepare("SELECT * FROM `ess_bank_accounts` WHERE `bank_id` = :bank_id");
        $result->bindParam(':bank_id', $this->bank_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }


    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_bank_accounts` (`bank_date_created`,`bank_no`,`bank_name`,`bank_city`)
        VALUES(:bank_date_created,:bank_no,:bank_name,:bank_city)");
        
        $result->bindParam(':bank_date_created', $this->bank_date_created, PDO::PARAM_STR);
        $result->bindParam(':bank_no', $this->bank_no, PDO::PARAM_STR);
        $result->bindParam(':bank_name', $this->bank_name, PDO::PARAM_STR);
        $result->bindParam(':bank_city', $this->bank_city, PDO::PARAM_STR);
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

        
        
    public function update()
    {
        $result = $this->dbh->prepare("UPDATE `ess_bank_accounts` SET
        `bank_date_updated` = :bank_date_updated,
        `bank_no` = :bank_no,
        `bank_name` = :bank_name,
        `bank_city` = :bank_city
        WHERE `bank_id` = :bank_id");
        $result->bindParam(':bank_date_updated', $this->bank_date_updated, PDO::PARAM_STR);
        $result->bindParam(':bank_no', $this->bank_no, PDO::PARAM_STR);
        $result->bindParam(':bank_name', $this->bank_name, PDO::PARAM_STR);
        $result->bindParam(':bank_city', $this->bank_city, PDO::PARAM_STR);
        $result->bindParam(':bank_id', $this->bank_id, PDO::PARAM_INT);
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