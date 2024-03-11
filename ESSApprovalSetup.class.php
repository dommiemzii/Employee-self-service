<?php

/**
 * Author : Jared Okongo Momanyi.
 * Organization : Qasava GPS LTD
 * Time : 29/11/2023
 * Email : jaredmomanyi01@gmail.com
 * File : ESSApprovalSetup.class.php 
 */
class ESSApprovalSetup
{
    public $dbh;
    public static $primaryKey = "ep_id";
    public static $tableName = "ess_approvers";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    //`ep_id`, `ep_date_created`, `ep_date_updated`, `ep_created_by`, `ep_updated_by`, `ep_dept`, `ep_emp_no`, `ep_emp_name`, `ep_limit`, `ep_publish`
    public $id; 
    public $ep_id; 
    public $ep_date_created;
    public $ep_date_updated;
    public $ep_created_by;
    public $ep_updated_by;
    public $ep_dept;
    public $ep_emp_no;
    public $ep_emp_name;
    public $ep_limit;
    public $ep_publish;
    //
    public $response;

    public static function read()
    {
        self::$extraWhere = " ep_publish = 1";
        self::$columns = [
            ['db' => 'ep_date_created', 'dt' => 0],
            ['db' => 'ep_dept', 'dt' => 1],
            ['db' => 'ep_emp_no', 'dt' => 2],
            ['db' => 'ep_emp_name', 'dt' => 3],
            ['db' => 'ep_limit', 'dt' => 4],
            ['db' => 'ep_id',
                 'dt' => 5,
                'formatter' => function ($d, $row) {
                    return $row;
                }
            ]
        ];
    }
    
   //`ep_id`, `ep_date_created`, `ep_date_updated`, `ep_created_by`, `ep_updated_by`, `ep_dept`, `ep_emp_no`, `ep_emp_name`, `ep_limit`, `ep_publish`
    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_approvers` WHERE `ep_id`=:ep_id");
        $result->bindParam(':ep_id', $this->ep_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    //create function
    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_approvers` (`ep_date_created`,`ep_created_by`,`ep_dept`,`ep_emp_no`,`ep_emp_name`,`ep_limit`)
        VALUES(:ep_date_created,:ep_created_by,:ep_dept,:ep_emp_no,:ep_emp_name,:ep_limit)");
        $result->bindParam(':ep_date_created', $this->ep_date_created, PDO::PARAM_STR);
        $result->bindParam(':ep_created_by', $this->ep_created_by, PDO::PARAM_STR);
        $result->bindParam(':ep_dept', $this->ep_dept, PDO::PARAM_STR);
        $result->bindParam(':ep_emp_no', $this->ep_emp_no, PDO::PARAM_STR);
        $result->bindParam(':ep_emp_name', $this->ep_emp_name, PDO::PARAM_STR);
        $result->bindParam(':ep_limit', $this->ep_limit, PDO::PARAM_STR);

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
        $result = $this->dbh->prepare("UPDATE `ess_approvers` SET
        `ep_date_updated` = :ep_date_updated,
        `ep_updated_by` = :ep_updated_by,
        `ep_dept` = :ep_dept,
        `ep_emp_no` = :ep_emp_no,
        `ep_emp_name` = :ep_emp_name,
        `ep_limit` = :ep_limit
        WHERE `ep_id` = :ep_id");
        $result->bindParam(':ep_date_updated', $this->ep_date_updated, PDO::PARAM_STR);
        $result->bindParam(':ep_updated_by', $this->ep_updated_by, PDO::PARAM_STR);
        $result->bindParam(':ep_dept', $this->ep_dept, PDO::PARAM_STR);
        $result->bindParam(':ep_emp_no', $this->ep_emp_no, PDO::PARAM_STR);
        $result->bindParam(':ep_emp_name', $this->ep_emp_name, PDO::PARAM_STR);
        $result->bindParam(':ep_limit', $this->ep_limit, PDO::PARAM_STR);
        $result->bindParam(':ep_id', $this->ep_id, PDO::PARAM_INT);
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
     
    public function delete()
    {
        $result = $this->dbh->prepare("UPDATE `ess_approvers` SET `ep_publish` = 0 WHERE `ep_id` = :ep_id");
        $result->bindParam(':ep_id', $this->ep_id, PDO::PARAM_INT);
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