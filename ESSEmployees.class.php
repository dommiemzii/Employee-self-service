<?php

/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 27/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSEmployees.class.php
 */
class ESSEmployees
{
    public $dbh;
    public static $primaryKey = "empl_id";
    public static $tableName = "ess_employees";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES 
    public $empl_id; 
    public $empl_date_created;
    public $empl_date_updated;
    public $empl_created_by;
    public $empl_updated_by;
    public $empl_status;
    public $empl_no;
    public $empl_first_name;
    public $empl_middle_name;
    public $empl_last_name;
    public $empl_initials;
    public $empl_job_title;
    public $empl_search_name;
    public $empl_city;
    public $empl_post_code;
    public $empl_county;
    public $empl_work_phone_no;
    public $empl_mobile_phone_no;
    public $empl_email;
    public $empl_birth_date;
    public $empl_id_number;
    public $empl_gender;
    public $empl_termination_date;
    public $empl_global_dimension1_code;
    public $empl_global_dimension2_code;
    public $empl_global_dimension1_filter;
    public $empl_global_dimension2_filter;
    public $empl_company_email;
    public $empl_title;
    public $empl_employee_posting_group;
    public $empl_cost_center_code;
    public $empl_cost_object_code;
    public $empl_job_id;
    public $empl_employment_type;
    public $empl_contract_end_date;
    public $empl_termination_category;
    public $empl_citizenship;
    public $empl_user_id;
    public $empl_passport_no;
    public $empl_pin;
    public $empl_nssf_no;
    public $empl_nhif_no;
    public $empl_period_filter;
    public $empl_confirmed;
    public $empl_leave_family;
    public $empl_total_leave_taken;
    public $empl_total_leave_days;
    public $empl_reimbursed_leave_days;
    public $empl_allocated_leave_days;
    public $empl_leave_period_filter;
    public $empl_leave_balance;
    public $empl_leave_status;
    public $empl_leave_type_filter;
    public $empl_home_phone_no;
    public $empl_shortcut_dimension3_code;
    public $empl_shortcut_dimension4_code;
    public $empl_shortcut_dimension5_code;
    public $empl_shortcut_dimension6_code;
    public $empl_shortcut_dimension7_code;
    public $empl_shortcut_dimension8_code;
    public $empl_leave_earned_prior_current_yr;
    public $empl_annual_leave_code;
    public $empl_nationality;
    public $empl_credit_limit_lcy;
    public $empl_job_group;
    public $empl_publish;    
    public $response;


    public static function read()
    {
        //`empl_id`, `empl_date_created`, `empl_date_updated`, `empl_created_by`, `empl_updated_by`, `empl_status`, `empl_no`, `empl_first_name`, `empl_middle_name`, `empl_last_name`, `empl_initials`,
        //`empl_job_title`, `empl_search_name`, `empl_city`, `empl_post_code`, `empl_county`, `empl_work_phone_no`, `empl_mobile_phone_no`, `empl_email`, `empl_birth_date`, `empl_id_number`, `empl_gender`, `empl_termination_date`, `empl_global_dimension1_code`, `empl_global_dimension2_code`, `empl_global_dimension1_filter`, `empl_global_dimension2_filter`, `empl_company_email`, `empl_title`, `empl_employee_posting_group`, `empl_cost_center_code`, `empl_cost_object_code`, `empl_job_id`, `empl_employment_type`, `empl_contract_end_date`, `empl_termination_category`, `empl_citizenship`, `empl_user_id`, `empl_passport_no`, `empl_pin`, `empl_nssf_no`, `empl_nhif_no`, `empl_period_filter`, `empl_confirmed`, `empl_leave_family`, `empl_total_leave_taken`, `empl_total_leave_days`, `empl_reimbursed_leave_days`, `empl_allocated_leave_days`, `empl_leave_period_filter`, `empl_leave_balance`, `empl_leave_status`, `empl_leave_type_filter`, `empl_home_phone_no`, `empl_shortcut_dimension3_code`, `empl_leave_earned_prior_current_yr`, `empl_annual_leave_code`, `empl_nationality`, `empl_credit_limit_lcy`, `empl_job_group`
        self::$extraWhere = " empl_publish = 1";
        self::$columns = [
                ['db' => 'empl_date_created', 'dt' => 0],
                ['db' => 'empl_no', 'dt' => 1],
                ['db' => 'empl_first_name', 'dt' => 2],
                ['db' => 'empl_middle_name', 'dt' => 3],
                ['db' => 'empl_last_name', 'dt' => 4], 
                ['db' => 'empl_initials', 'dt' => 5],
                ['db' => 'empl_job_title', 'dt' => 6],
                ['db' => 'empl_search_name', 'dt' => 7],
                ['db' => 'empl_city', 'dt' => 8],
                ['db' => 'empl_post_code', 'dt' => 9],
                ['db' => 'empl_county', 'dt' => 10],
                ['db' => 'empl_id',
                'dt' => 11,
                'formatter' => function ($d, $row) {
                    return $row;
                }
            ]
        ];
    }


    public static function readBKP()
    {
        self::$extraWhere = " empl_publish = 1";
        self::$columns = [
                ['db' => 'empl_date_created', 'dt' => 0],
                ['db' => 'empl_no', 'dt' => 1],
                ['db' => 'empl_first_name', 'dt' => 2],
                ['db' => 'empl_middle_name', 'dt' => 3],
                ['db' => 'empl_last_name', 'dt' => 4], 
                ['db' => 'empl_initials', 'dt' => 5],
                ['db' => 'empl_job_title', 'dt' => 6],
                ['db' => 'empl_search_name', 'dt' => 7],
                ['db' => 'empl_city', 'dt' => 8],
                ['db' => 'empl_post_code', 'dt' => 9],
                ['db' => 'empl_county', 'dt' => 10],
                ['db' => 'empl_work_phone_no', 'dt' => 11],
                ['db' => 'empl_mobile_phone_no', 'dt' => 12],
                ['db' => 'empl_email', 'dt' => 13],
                ['db' => 'empl_birth_date', 'dt' => 14],
                ['db' => 'empl_id_number', 'dt' => 15],
                ['db' => 'empl_gender', 'dt' => 16],
                ['db' => 'empl_termination_date', 'dt' => 17],
                ['db' => 'empl_global_dimension1_code', 'dt' => 18],
                ['db' => 'empl_global_dimension2_code', 'dt' =>19],
                ['db' => 'empl_global_dimension1_filter', 'dt' => 20],
                ['db' => 'empl_global_dimension2_filter', 'dt' => 21],
                ['db' => 'empl_company_email', 'dt' => 22],
                ['db' => 'empl_title', 'dt' => 23],
                ['db' => 'empl_employee_posting_group', 'dt' => 24],
                ['db' => 'empl_cost_center_code', 'dt' => 25], 
                ['db' => 'empl_cost_object_code', 'dt' => 26], 
                ['db' => 'empl_job_id', 'dt' => 27],
                ['db' => 'empl_employment_type', 'dt' => 28],
                ['db' => 'empl_contract_end_date', 'dt' => 29],
                ['db' => 'empl_termination_category', 'dt' => 30],
                ['db' => 'empl_citizenship', 'dt' => 31],
                ['db' => 'empl_user_id', 'dt' => 32],
                ['db' => 'empl_passport_no', 'dt' => 33],
                ['db' => 'empl_pin', 'dt' => 34],
                ['db' => 'empl_nssf_no', 'dt' => 35],
                ['db' => 'empl_nhif_no', 'dt' => 36],
                ['db' => 'empl_period_filter', 'dt' => 37],
                ['db' => 'empl_confirmed', 'dt' => 38],
                ['db' => 'empl_leave_family', 'dt' => 39],
                ['db' => 'empl_total_leave_taken', 'dt' => 40],
                ['db' => 'empl_total_leave_days', 'dt' => 41],
                ['db' => 'empl_reimbursed_leave_days', 'dt' => 42],
                ['db' => 'empl_allocated_leave_days', 'dt' => 43],
                ['db' => 'empl_leave_period_filter', 'dt' => 44],
                ['db' => 'empl_leave_balance', 'dt' => 45],
                ['db' => 'empl_leave_status', 'dt' => 46],
                ['db' => 'empl_leave_type_filter', 'dt' => 47],
                ['db' => 'empl_home_phone_no', 'dt' => 48],
                ['db' => 'empl_shortcut_dimension3_code', 'dt' => 49],
                ['db' => 'empl_leave_earned_prior_current_yr', 'dt' => 50],
                ['db' => 'empl_annual_leave_code', 'dt' => 51],
                ['db' => 'empl_nationality', 'dt' => 52],
                ['db' => 'empl_credit_limit_lcy', 'dt' => 53],
                ['db' => 'empl_job_group', 'dt' => 54],
                ['db' => 'empl_id',
                 'dt' => 55,
                'formatter' => function ($d, $row) {
                    return $row;
                },
            ],
        ];
    }


    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_employees` WHERE `empl_id` =:empl_id");
        $result->bindParam(':empl_id', $this->empl_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }


    //create function
    public function create()
    {
        Utility::$dbh = $this->dbh;
        Utility::$tableName = self::$tableName;
        if (Utility::checkIfBothExistsEss("empl_no", $this->empl_no, "empl_email", $this->empl_email) == 1) {
            $result = $this->dbh->prepare("INSERT INTO `ess_employees` (`empl_date_created`,`empl_no`,`empl_first_name`,`empl_middle_name`,`empl_last_name`,`empl_initials`,`empl_job_title`,`empl_search_name`,`empl_city`,`empl_post_code`,`empl_county`,`empl_work_phone_no`,`empl_mobile_phone_no`,`empl_email`,`empl_birth_date`,`empl_id_number`,`empl_gender`,`empl_termination_date`,`empl_global_dimension1_code`,`empl_global_dimension2_code`,`empl_global_dimension1_filter`,`empl_global_dimension2_filter`,`empl_company_email`,`empl_title`,`empl_employee_posting_group`,`empl_cost_center_code`,`empl_cost_object_code`,`empl_job_id`,`empl_employment_type`,`empl_contract_end_date`,`empl_termination_category`,`empl_citizenship`,`empl_user_id`,`empl_passport_no`,`empl_pin`,`empl_nssf_no`,`empl_nhif_no`,`empl_period_filter`,`empl_confirmed`,`empl_leave_family`,`empl_total_leave_taken`,`empl_total_leave_days`,`empl_reimbursed_leave_days`,`empl_allocated_leave_days`,`empl_leave_period_filter`,`empl_leave_balance`,`empl_leave_status`,`empl_leave_type_filter`,`empl_home_phone_no`,`empl_shortcut_dimension3_code`,`empl_shortcut_dimension4_code`,`empl_shortcut_dimension5_code`,`empl_shortcut_dimension6_code`,`empl_shortcut_dimension7_code`,`empl_shortcut_dimension8_code`,`empl_leave_earned_prior_current_yr`,`empl_annual_leave_code`,`empl_nationality`,`empl_credit_limit_lcy`,`empl_job_group`,`empl_supervisor_no`)
            VALUES(:empl_date_created,:empl_no,:empl_first_name,:empl_middle_name,:empl_last_name,:empl_initials,:empl_job_title,:empl_search_name,:empl_city,:empl_post_code,:empl_county,:empl_work_phone_no,:empl_mobile_phone_no,:empl_email,:empl_birth_date,:empl_id_number,:empl_gender,:empl_termination_date,:empl_global_dimension1_code,:empl_global_dimension2_code,:empl_global_dimension1_filter,:empl_global_dimension2_filter,:empl_company_email,:empl_title,:empl_employee_posting_group,:empl_cost_center_code,:empl_cost_object_code,:empl_job_id,:empl_employment_type,:empl_contract_end_date,:empl_termination_category,:empl_citizenship,:empl_user_id,:empl_passport_no,:empl_pin,:empl_nssf_no,:empl_nhif_no,:empl_period_filter,:empl_confirmed,:empl_leave_family,:empl_total_leave_taken,:empl_total_leave_days,:empl_reimbursed_leave_days,:empl_allocated_leave_days,:empl_leave_period_filter,:empl_leave_balance,:empl_leave_status,:empl_leave_type_filter,:empl_home_phone_no,:empl_shortcut_dimension3_code,:empl_shortcut_dimension4_code,:empl_shortcut_dimension5_code,:empl_shortcut_dimension6_code,:empl_shortcut_dimension7_code,:empl_shortcut_dimension8_code,:empl_leave_earned_prior_current_yr,:empl_annual_leave_code,:empl_nationality,:empl_credit_limit_lcy,:empl_job_group,:empl_supervisor_no)");
            $result->bindParam(':empl_date_created', $this->empl_date_created, PDO::PARAM_STR);
            $result->bindParam(':empl_no', $this->empl_no, PDO::PARAM_STR);
            $result->bindParam(':empl_first_name', $this->empl_first_name, PDO::PARAM_STR);
            $result->bindParam(':empl_middle_name', $this->empl_middle_name, PDO::PARAM_STR);
            $result->bindParam(':empl_last_name', $this->empl_last_name, PDO::PARAM_STR);
            $result->bindParam(':empl_initials', $this->empl_initials, PDO::PARAM_STR);
            $result->bindParam(':empl_job_title', $this->empl_job_title, PDO::PARAM_STR);
            $result->bindParam(':empl_search_name', $this->empl_search_name, PDO::PARAM_STR);
            $result->bindParam(':empl_city', $this->empl_city, PDO::PARAM_STR);
            $result->bindParam(':empl_post_code', $this->empl_post_code, PDO::PARAM_STR);
            $result->bindParam(':empl_county', $this->empl_county, PDO::PARAM_STR);
            $result->bindParam(':empl_work_phone_no', $this->empl_work_phone_no, PDO::PARAM_STR);
            $result->bindParam(':empl_mobile_phone_no', $this->empl_mobile_phone_no, PDO::PARAM_STR);
            $result->bindParam(':empl_email', $this->empl_email, PDO::PARAM_STR);
            $result->bindParam(':empl_birth_date', $this->empl_birth_date, PDO::PARAM_STR);
            $result->bindParam(':empl_id_number', $this->empl_id_number, PDO::PARAM_STR);
            $result->bindParam(':empl_gender', $this->empl_gender, PDO::PARAM_STR);
            $result->bindParam(':empl_termination_date', $this->empl_termination_date, PDO::PARAM_STR);
            $result->bindParam(':empl_global_dimension1_code', $this->empl_global_dimension1_code, PDO::PARAM_STR);
            $result->bindParam(':empl_global_dimension2_code', $this->empl_global_dimension2_code, PDO::PARAM_STR);
            $result->bindParam(':empl_global_dimension1_filter', $this->empl_global_dimension1_filter, PDO::PARAM_STR);
            $result->bindParam(':empl_global_dimension2_filter', $this->empl_global_dimension2_filter, PDO::PARAM_STR);
            $result->bindParam(':empl_company_email', $this->empl_company_email, PDO::PARAM_STR);
            $result->bindParam(':empl_title', $this->empl_title, PDO::PARAM_STR);
            $result->bindParam(':empl_employee_posting_group', $this->empl_employee_posting_group, PDO::PARAM_STR);
            $result->bindParam(':empl_cost_center_code', $this->empl_cost_center_code, PDO::PARAM_STR);
            $result->bindParam(':empl_cost_object_code', $this->empl_cost_object_code, PDO::PARAM_STR);
            $result->bindParam(':empl_job_id', $this->empl_job_id, PDO::PARAM_STR);
            $result->bindParam(':empl_employment_type', $this->empl_employment_type, PDO::PARAM_STR);
            $result->bindParam(':empl_contract_end_date', $this->empl_contract_end_date, PDO::PARAM_STR);
            $result->bindParam(':empl_termination_category', $this->empl_termination_category, PDO::PARAM_STR);
            $result->bindParam(':empl_citizenship', $this->empl_citizenship, PDO::PARAM_STR);
            $result->bindParam(':empl_user_id', $this->empl_user_id, PDO::PARAM_STR);
            $result->bindParam(':empl_passport_no', $this->empl_passport_no, PDO::PARAM_STR);
            $result->bindParam(':empl_pin', $this->empl_pin, PDO::PARAM_STR);
            $result->bindParam(':empl_nssf_no', $this->empl_nssf_no, PDO::PARAM_STR);
            $result->bindParam(':empl_nhif_no', $this->empl_nhif_no, PDO::PARAM_STR);
            $result->bindParam(':empl_period_filter', $this->empl_period_filter, PDO::PARAM_STR);
            $result->bindParam(':empl_confirmed', $this->empl_confirmed, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_family', $this->empl_leave_family, PDO::PARAM_STR);
            $result->bindParam(':empl_total_leave_taken', $this->empl_total_leave_taken, PDO::PARAM_STR);
            $result->bindParam(':empl_total_leave_days', $this->empl_total_leave_days, PDO::PARAM_STR);
            $result->bindParam(':empl_reimbursed_leave_days', $this->empl_reimbursed_leave_days, PDO::PARAM_STR);
            $result->bindParam(':empl_allocated_leave_days', $this->empl_allocated_leave_days, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_period_filter', $this->empl_leave_period_filter, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_balance', $this->empl_leave_balance, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_status', $this->empl_leave_status, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_type_filter', $this->empl_leave_type_filter, PDO::PARAM_STR);
            $result->bindParam(':empl_home_phone_no', $this->empl_home_phone_no, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension3_code', $this->empl_shortcut_dimension3_code, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension4_code', $this->empl_shortcut_dimension4_code, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension5_code', $this->empl_shortcut_dimension5_code, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension6_code', $this->empl_shortcut_dimension6_code, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension7_code', $this->empl_shortcut_dimension7_code, PDO::PARAM_STR);
            $result->bindParam(':empl_shortcut_dimension8_code', $this->empl_shortcut_dimension8_code, PDO::PARAM_STR);
            $result->bindParam(':empl_leave_earned_prior_current_yr', $this->empl_leave_earned_prior_current_yr, PDO::PARAM_STR);
            $result->bindParam(':empl_annual_leave_code', $this->empl_annual_leave_code, PDO::PARAM_STR);
            $result->bindParam(':empl_nationality', $this->empl_nationality, PDO::PARAM_STR);
            $result->bindParam(':empl_supervisor_no', $this->empl_supervisor_no, PDO::PARAM_STR);
            $result->bindParam(':empl_credit_limit_lcy', $this->empl_credit_limit_lcy, PDO::PARAM_STR);
            $result->bindParam(':empl_job_group', $this->empl_job_group, PDO::PARAM_STR);
    
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
        $result = $this->dbh->prepare("UPDATE `ess_employees` SET
        `empl_date_updated` = :empl_date_updated,
        `empl_no` = :empl_no,
        `empl_first_name` = :empl_first_name,
        `empl_middle_name` = :empl_middle_name,
        `empl_last_name` = :empl_last_name,
        `empl_initials` = :empl_initials,
        `empl_job_title` = :empl_job_title,
        `empl_search_name` = :empl_search_name,
        `empl_city` = :empl_city,
        `empl_post_code` = :empl_post_code,
        `empl_county` = :empl_county,
        `empl_work_phone_no` = :empl_work_phone_no,
        `empl_mobile_phone_no` = :empl_mobile_phone_no,
        `empl_email` = :empl_email,
        `empl_birth_date` = :empl_birth_date,
        `empl_id_number` = :empl_id_number,
        `empl_gender` = :empl_gender,
        `empl_termination_date`=:empl_termination_date,
        `empl_global_dimension1_code` = :empl_global_dimension1_code,
        `empl_global_dimension2_code` = :empl_global_dimension2_code,
        `empl_global_dimension1_filter` = :empl_global_dimension1_filter,
        `empl_global_dimension2_filter` = :empl_global_dimension2_filter,
        `empl_company_email` = :empl_company_email,
        `empl_title` = :empl_title,
        `empl_employee_posting_group` = :empl_employee_posting_group,
        `empl_cost_center_code` = :empl_cost_center_code,
        `empl_cost_object_code` = :empl_cost_object_code,
        `empl_job_id` = :empl_job_id,
        `empl_employment_type` = :empl_employment_type,
        `empl_contract_end_date` = :empl_contract_end_date,
        `empl_termination_category` = :empl_termination_category,
        `empl_citizenship` = :empl_citizenship,
        `empl_user_id` = :empl_user_id,
        `empl_passport_no`= :empl_passport_no,
        `empl_pin` = :empl_pin,
        `empl_nssf_no` = :empl_nssf_no,
        `empl_nhif_no` = :empl_nhif_no,
        `empl_period_filter` = :empl_period_filter,
        `empl_confirmed` = :empl_confirmed,
        `empl_leave_family` = :empl_leave_family,
        `empl_total_leave_taken` = :empl_total_leave_taken,
        `empl_total_leave_days` = :empl_total_leave_days,
        `empl_reimbursed_leave_days` = :empl_reimbursed_leave_days,
        `empl_allocated_leave_days` = :empl_allocated_leave_days,
        `empl_leave_period_filter` = :empl_leave_period_filter,
        `empl_leave_balance` = :empl_leave_balance,
        `empl_leave_status` = :empl_leave_status,
        `empl_leave_type_filter` = :empl_leave_type_filter,
        `empl_home_phone_no` = :empl_home_phone_no,
        `empl_shortcut_dimension3_code` = :empl_shortcut_dimension3_code,
        `empl_leave_earned_prior_current_yr` = :empl_leave_earned_prior_current_yr,
        `empl_annual_leave_code` = :empl_annual_leave_code,
        `empl_nationality` = :empl_nationality,
        `empl_credit_limit_lcy` = :empl_credit_limit_lcy,
        `empl_job_group` = :empl_job_group
        WHERE `empl_id` = :empl_id");
        $result->bindParam(':empl_date_updated', $this->empl_date_updated, PDO::PARAM_STR);
        $result->bindParam(':empl_no', $this->empl_no, PDO::PARAM_STR);
        $result->bindParam(':empl_first_name', $this->empl_first_name, PDO::PARAM_STR);
        $result->bindParam(':empl_middle_name', $this->empl_middle_name, PDO::PARAM_STR);
        $result->bindParam(':empl_last_name', $this->empl_last_name, PDO::PARAM_STR);
        $result->bindParam(':empl_initials', $this->empl_initials, PDO::PARAM_STR);
        $result->bindParam(':empl_job_title', $this->empl_job_title, PDO::PARAM_STR);
        $result->bindParam(':empl_search_name', $this->empl_search_name, PDO::PARAM_STR);
        $result->bindParam(':empl_city', $this->empl_city, PDO::PARAM_STR);
        $result->bindParam(':empl_post_code', $this->empl_post_code, PDO::PARAM_STR);
        $result->bindParam(':empl_county', $this->empl_county, PDO::PARAM_STR);
        $result->bindParam(':empl_work_phone_no', $this->empl_work_phone_no, PDO::PARAM_STR);
        $result->bindParam(':empl_mobile_phone_no', $this->empl_mobile_phone_no, PDO::PARAM_STR);
        $result->bindParam(':empl_email', $this->empl_email, PDO::PARAM_STR);
        $result->bindParam(':empl_birth_date', $this->empl_birth_date, PDO::PARAM_STR);
        $result->bindParam(':empl_id_number', $this->empl_id_number, PDO::PARAM_STR);
        $result->bindParam(':empl_gender', $this->empl_gender, PDO::PARAM_STR);
        $result->bindParam(':empl_termination_date', $this->empl_termination_date, PDO::PARAM_STR);
        $result->bindParam(':empl_global_dimension1_code', $this->empl_global_dimension1_code, PDO::PARAM_STR);
        $result->bindParam(':empl_global_dimension2_code', $this->empl_global_dimension2_code, PDO::PARAM_STR);
        $result->bindParam(':empl_global_dimension1_filter', $this->empl_global_dimension1_filter, PDO::PARAM_STR);
        $result->bindParam(':empl_global_dimension2_filter', $this->empl_global_dimension2_filter, PDO::PARAM_STR);
        $result->bindParam(':empl_company_email', $this->empl_company_email, PDO::PARAM_STR);
        $result->bindParam(':empl_title', $this->empl_title, PDO::PARAM_STR);
        $result->bindParam(':empl_employee_posting_group', $this->empl_employee_posting_group, PDO::PARAM_STR);
        $result->bindParam(':empl_cost_center_code', $this->empl_cost_center_code, PDO::PARAM_STR);
        $result->bindParam(':empl_cost_object_code', $this->empl_cost_object_code, PDO::PARAM_STR);
        $result->bindParam(':empl_job_id', $this->empl_job_id, PDO::PARAM_STR);
        $result->bindParam(':empl_employment_type', $this->empl_employment_type, PDO::PARAM_STR);
        $result->bindParam(':empl_contract_end_date', $this->empl_contract_end_date, PDO::PARAM_STR);
        $result->bindParam(':empl_termination_category', $this->empl_termination_category, PDO::PARAM_STR);
        $result->bindParam(':empl_citizenship', $this->empl_citizenship, PDO::PARAM_STR);
        $result->bindParam(':empl_user_id', $this->empl_user_id, PDO::PARAM_STR);
        $result->bindParam(':empl_passport_no', $this->empl_passport_no, PDO::PARAM_STR);
        $result->bindParam(':empl_pin', $this->empl_pin, PDO::PARAM_STR);
        $result->bindParam(':empl_nssf_no', $this->empl_nssf_no, PDO::PARAM_STR);
        $result->bindParam(':empl_nhif_no', $this->empl_nhif_no, PDO::PARAM_STR);
        $result->bindParam(':empl_period_filter', $this->empl_period_filter, PDO::PARAM_STR);
        $result->bindParam(':empl_confirmed', $this->empl_confirmed, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_family', $this->empl_leave_family, PDO::PARAM_STR);
        $result->bindParam(':empl_total_leave_taken', $this->empl_total_leave_taken, PDO::PARAM_STR);
        $result->bindParam(':empl_total_leave_days', $this->empl_total_leave_days, PDO::PARAM_STR);
        $result->bindParam(':empl_reimbursed_leave_days', $this->empl_reimbursed_leave_days, PDO::PARAM_STR);
        $result->bindParam(':empl_allocated_leave_days', $this->empl_allocated_leave_days, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_period_filter', $this->empl_leave_period_filter, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_balance', $this->empl_leave_balance, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_status', $this->empl_leave_status, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_type_filter', $this->empl_leave_type_filter, PDO::PARAM_STR);
        $result->bindParam(':empl_home_phone_no', $this->empl_home_phone_no, PDO::PARAM_STR);
        $result->bindParam(':empl_shortcut_dimension3_code', $this->empl_shortcut_dimension3_code, PDO::PARAM_STR);
        $result->bindParam(':empl_leave_earned_prior_current_yr', $this->empl_leave_earned_prior_current_yr, PDO::PARAM_STR);
        $result->bindParam(':empl_annual_leave_code', $this->empl_annual_leave_code, PDO::PARAM_STR);
        $result->bindParam(':empl_nationality', $this->empl_nationality, PDO::PARAM_STR);
        $result->bindParam(':empl_credit_limit_lcy', $this->empl_credit_limit_lcy, PDO::PARAM_STR);
        $result->bindParam(':empl_job_group', $this->empl_job_group, PDO::PARAM_STR);
        $result->bindParam(':empl_id', $this->empl_id, PDO::PARAM_INT);
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