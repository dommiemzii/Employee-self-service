<?php

/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSCalendarUi.class.php
 */
class ESSCalendarUiLines
{
    public $dbh;
    public static $primaryKey = "cal_lines_id";
    public static $tableName = "ess_calendar_lines";
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
    
    public static function readLines()
    {
        self::$extraWhere = " cal_lines_publish = 1";
        self::$columns = [
            ['db' => 'cal_lines_date_created', 'dt' => 0],
            ['db' => 'cal_lines_code', 'dt' => 1],
            ['db' => 'cal_lines_day', 'dt' => 2],
            ['db' => 'cal_lines_date', 'dt' => 3],
            ['db' => 'cal_lines_non_working', 'dt' => 4],
            ['db' => 'cal_lines_reason', 'dt' => 5],
            ['db' => 'cal_lines_id',
                 'dt' => 6,
                'formatter' => function ($d, $row) {
                    return $row;
                },
            ],
        ];
    }
}