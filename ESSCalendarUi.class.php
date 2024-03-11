<?php

/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSCalendarUi.class.php
 */
class ESSCalendarUi
{
    public $dbh;
    public static $primaryKey = "cal_id";
    public static $tableName = "ess_calendar_ui";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $cal_id; 
    public $cal_date_created;
    public $cal_date_updated;
    public $cal_created_by;
    public $cal_updated_by;
    public $cal_status;
    public $cal_code;
    public $cal_start_date;
    public $cal_end_date;
    public $cal_current;
    public $cal_description;
    public $cal_publish;
    //LINES 
    public $cal_lines_id;
    public $cal_lines_date_created;
    public $cal_lines_date_updated;
    public $cal_lines_created_by;
    public $cal_lines_updated_by;
    public $cal_lines_status;
    public $cal_lines_code;
    public $cal_lines_day;
    public $cal_lines_date;
    public $cal_lines_non_working;
    public $cal_lines_reason;
    public $cal_lines_publish;
    public $response;

    public static function read()
    {
        self::$extraWhere = " cal_publish = 1";
        self::$columns = [
            ['db' => 'cal_date_created', 'dt' => 0],
            ['db' => 'cal_code', 'dt' => 1],
            ['db' => 'cal_start_date', 'dt' => 2],
            ['db' => 'cal_end_date', 'dt' => 3],
            ['db' => 'cal_current', 'dt' => 4],
            ['db' => 'cal_description', 'dt' => 5],
            ['db' => 'cal_id',
                 'dt' => 6,
                'formatter' => function ($d, $row) {
                    return $row;
                },
            ],
        ];
    }
    
   
    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_calendar_ui` WHERE `cal_id`=:cal_id");
        $result->bindParam(':cal_id', $this->cal_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    public function detailLines()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_calendar_lines` WHERE `cal_lines_id`=:cal_lines_id");
        $result->bindParam(':cal_lines_id', $this->cal_lines_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    //create function
    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_calendar_ui` (`cal_date_created`,`cal_code`,`cal_start_date`,`cal_end_date`,`cal_current`,`cal_description`)
        VALUES(:cal_date_created,:cal_code,:cal_start_date,:cal_end_date,:cal_current,:cal_description)");
        $result->bindParam(':cal_date_created', $this->cal_date_created, PDO::PARAM_STR);
        $result->bindParam(':cal_code', $this->cal_code, PDO::PARAM_STR);
        $result->bindParam(':cal_start_date', $this->cal_start_date, PDO::PARAM_STR);
        $result->bindParam(':cal_end_date', $this->cal_end_date, PDO::PARAM_STR);
        $result->bindParam(':cal_current', $this->cal_current, PDO::PARAM_STR);
        $result->bindParam(':cal_description', $this->cal_description, PDO::PARAM_STR);

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

    public function createLines()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_calendar_lines` (`cal_lines_date_created`,`cal_lines_code`,`cal_lines_day`,`cal_lines_date`,`cal_lines_non_working`,`cal_lines_reason`)
        VALUES(:cal_lines_date_created,:cal_lines_code,:cal_lines_day,:cal_lines_date,:cal_lines_non_working,:cal_lines_reason)");
        $result->bindParam(':cal_lines_date_created', $this->cal_lines_date_created, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_code', $this->cal_lines_code, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_day', $this->cal_lines_day, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_date', $this->cal_lines_date, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_non_working', $this->cal_lines_non_working, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_reason', $this->cal_lines_reason, PDO::PARAM_STR);

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
        $result = $this->dbh->prepare("UPDATE `ess_calendar_ui` SET
        `cal_date_updated` = :cal_date_updated,
        `cal_code` = :cal_code,
        `cal_start_date` = :cal_start_date,
        `cal_end_date` = :cal_end_date,
        `cal_current` = :cal_current,
        `cal_description` = :cal_description
        WHERE `cal_id` = :cal_id");
        $result->bindParam(':cal_date_updated', $this->cal_date_updated, PDO::PARAM_STR);
        $result->bindParam(':cal_code', $this->cal_code, PDO::PARAM_STR);
        $result->bindParam(':cal_start_date', $this->cal_start_date, PDO::PARAM_STR);
        $result->bindParam(':cal_end_date', $this->cal_end_date, PDO::PARAM_STR);
        $result->bindParam(':cal_current', $this->cal_current, PDO::PARAM_STR);
        $result->bindParam(':cal_description', $this->cal_description, PDO::PARAM_STR);
        $result->bindParam(':cal_id', $this->cal_id, PDO::PARAM_INT);
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
    
    public function updateLines()
    {
        $result = $this->dbh->prepare("UPDATE `ess_calendar_lines` SET
        `cal_lines_date_updated` = :cal_lines_date_updated,
        `cal_lines_code` = :cal_lines_code,
        `cal_lines_day` = :cal_lines_day,
        `cal_lines_date` = :cal_lines_date,
        `cal_lines_non_working` = :cal_lines_non_working,
        `cal_lines_reason` = :cal_lines_reason
        WHERE `cal_lines_id` = :cal_lines_id");
        $result->bindParam(':cal_lines_date_updated', $this->cal_lines_date_updated, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_code', $this->cal_lines_code, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_day', $this->cal_lines_day, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_date', $this->cal_lines_date, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_non_working', $this->cal_lines_non_working, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_reason', $this->cal_lines_reason, PDO::PARAM_STR);
        $result->bindParam(':cal_lines_id', $this->cal_lines_id, PDO::PARAM_INT);
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