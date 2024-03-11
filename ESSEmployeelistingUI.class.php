<?php

/**
 * Author : Faith H Wachira.
 * Organization : Qasava Solutions LTD
 * Time : 27/11/2023
 * Email : faithhopewachira@gmail.com
 * File : ESSEmployeelistingUI.class.php
 */
class ESSEmployeelistingUI
{
    public $dbh;
    public static $primaryKey = "emp_id";
    public static $tableName = "ess_employee_listing";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $emp_id;
    public $emp_date_created;
    public $emp_date_updated;
    public $emp_created_by;
    public $emp_updated_by;
    public $emp_status;
    public $emp_no;
    public $emp_job_title;
    public $emp_file_name;
    public $emp_search_name;
    public $emp_middle_name;
    public $emp_city;
    public $emp_last_name;
    public $emp_post_code;
    public $emp_initials;
    public $emp_county;
    public $emp_picture;
    public $emp_first_name;
    public $emp_work_phone_no;
    public $emp_mobile_phone_no;
    public $emp_email;
    public $emp_alt_address_code;
    public $emp_alt_address_start_code;
    public $emp_alt_address_end_code;
    public $emp_birth_date;
    public $emp_id_number;
    public $emp_gender;
    public $emp_country_region_code;
    public $emp_manager_no;
    public $emp_statistics_group_code;
    public $emp_employment_date;
    public $emp_statuss;
    public $emp_termination_date;
    public $emp_global_dimension_1_code;
    public $emp_global_dimension_2_code;
    public $emp_period_filter;
    public $emp_global_dimension_1_filter;
    public $emp_company_email;
    public $emp_title;
    public $emp_employee_posting_group;
    public $emp_cost_center_code;
    public $emp_cost_object_code;
    public $emp_idd;
    public $emp_job_id;
    public $emp_employment_type;
    public $emp_contract_end_date;
    public $emp_termination_category;
    public $emp_citizenship;
    public $emp_user_id;
    public $emp_passsport_no;
    public $emp_pin;
    public $emp_nssf_no;
    public $emp_nhif_no;
    public $emp_confirmed;
    public $emp_leave_family;
    public $emp_total_leave_taken;
    public $emp_total_leave_days;
    public $emp_reimbursed_leave_days;
    public $emp_allocated_leave_days;
    public $emp_leave_period_filter;
    public $emp_leave_balance;
    public $emp_leave_status;
    public $emp_leave_type_filter;
    public $emp_home_phone_no;
    public $emp_shortcut_dimension_3_code;
    public $emp_leave_earned_prior_current_yr;
    public $emp_leave_earned_prior_current_yr_2;
    public $emp_annual_leave_code;
    public $emp_nationality;
    public $emp_credit_limit_lcy;
    public $emp_job_group;
    public $emp_publish;
    public $response;

     
    public static function read()
    {
        self::$extraWhere = " emp_publish = 1";
        self::$columns = [
                ['db' => 'emp_date_created', 'dt' => 0],
                ['db' => 'emp_no', 'dt' => 1],
                ['db' => 'emp_job_title', 'dt' => 2],
                ['db' => 'emp_file_name', 'dt' => 3],
                ['db' => 'emp_search_name', 'dt' => 4],
                ['db' => 'emp_middle_name', 'dt' => 5],
                ['db' => 'emp_city', 'dt' => 6],
                ['db' => 'emp_last_name', 'dt' => 7],
                ['db' => 'emp_post_code', 'dt' => 8],
                ['db' => 'emp_initials', 'dt' => 9],
                ['db' => 'emp_county', 'dt' => 10],
                ['db' => 'emp_id',
                'dt' => 11,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }

    public static function readBKP()
    {
        self::$extraWhere = " emp_publish = 1";
        self::$columns = [
                ['db' => 'emp_date_created', 'dt' => 0],
                ['db' => 'emp_no', 'dt' => 1],
                ['db' => 'emp_job_title', 'dt' => 2],
                ['db' => 'emp_file_name', 'dt' => 3],
                ['db' => 'emp_search_name', 'dt' => 4],
                ['db' => 'emp_middle_name', 'dt' => 5],
                ['db' => 'emp_city', 'dt' => 6],
                ['db' => 'emp_last_name', 'dt' => 7],
                ['db' => 'emp_post_code', 'dt' => 8],
                ['db' => 'emp_initials', 'dt' => 9],
                ['db' => 'emp_county', 'dt' => 10],
                ['db' => 'emp_picture', 'dt' => 11],
                ['db' => 'emp_first_name', 'dt' => 12],
                ['db' => 'emp_work_phone_no', 'dt' => 13],
                ['db' => 'emp_mobile_phone_no', 'dt' => 14],
                ['db' => 'emp_email', 'dt' => 15],
                ['db' => 'emp_alt_address_code', 'dt' => 16],
                ['db' => 'emp_alt_address_start_code', 'dt' => 17],
                ['db' => 'emp_alt_address_end_code', 'dt' => 18],
                ['db' => 'emp_birth_date', 'dt' => 19],
                ['db' => 'emp_id_number', 'dt' => 20],
                ['db' => 'emp_gender', 'dt' => 21],
                ['db' => 'emp_country_region_code', 'dt' => 22],
                ['db' => 'emp_manager_no', 'dt' => 23],
                ['db' => 'emp_statistics_group_code', 'dt' => 24],
                ['db' => 'emp_employment_date', 'dt' => 25],
                ['db' => 'emp_statuss', 'dt' => 26],
                ['db' => 'emp_termination_date', 'dt' => 27],
                ['db' => 'emp_global_dimension_1_code', 'dt' => 28],
                ['db' => 'emp_global_dimension_2_code', 'dt' => 29],
                ['db' => 'emp_period_filter', 'dt' => 30],
                ['db' => 'emp_global_dimension_1_filter', 'dt' => 31],
                ['db' => 'emp_company_email', 'dt' => 32],
                ['db' => 'emp_title', 'dt' => 33],
                ['db' => 'emp_employee_posting_group', 'dt' => 34],
                ['db' => 'emp_cost_center_code', 'dt' => 35],
                ['db' => 'emp_cost_object_code', 'dt' => 36],
                ['db' => 'emp_idd', 'dt' => 37],
                ['db' => 'emp_job_id', 'dt' => 38],
                ['db' => 'emp_employment_type', 'dt' => 39],
                ['db' => 'emp_contract_end_date', 'dt' => 40,],
                ['db' => 'emp_termination_category', 'dt' => 41],
                ['db' => 'emp_citizenship', 'dt' => 42],
                ['db' => 'emp_user_id', 'dt' => 43],
                ['db' => 'emp_passsport_no', 'dt' => 44],
                ['db' => 'emp_pin', 'dt' => 45],
                ['db' => 'emp_nssf_no', 'dt' => 46],
                ['db' => 'emp_nhif_no', 'dt' => 47],
                ['db' => 'emp_confirmed', 'dt' => 48],
                ['db' => 'emp_leave_family', 'dt' => 49],
                ['db' => 'emp_total_leave_taken', 'dt' => 50],
                ['db' => 'emp_total_leave_days', 'dt' => 51],
                ['db' => 'emp_reimbursed_leave_days', 'dt' => 52],
                ['db' => 'emp_allocated_leave_days', 'dt' => 53],
                ['db' => 'emp_leave_period_filter', 'dt' => 54],
                ['db' => 'emp_leave_balance', 'dt' => 55],
                ['db' => 'emp_leave_status', 'dt' => 56],
                ['db' => 'emp_leave_type_filter', 'dt' => 57],
                ['db' => 'emp_home_phone_no', 'dt' => 58],
                ['db' => 'emp_shortcut_dimension_3_code', 'dt' => 59],
                ['db' => 'emp_leave_earned_prior_current_yr', 'dt' => 60],
                ['db' => 'emp_leave_earned_prior_current_yr_2', 'dt' => 61],
                ['db' => 'emp_annual_leave_code', 'dt' => 62],
                ['db' => 'emp_nationality', 'dt' => 63],
                ['db' => 'emp_credit_limit_lcy', 'dt' => 64],
                ['db' => 'emp_job_group', 'dt' => 65],
                ['db' => 'emp_publish', 'dt' => 66],
                ['db' => 'emp_id',
                'dt' => 67,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
    
    //get single row of information
    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_employee_listing` WHERE `emp_id` = :emp_id");
        $result->bindParam(':emp_id', $this->emp_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }


    //create function
    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_employee_listing`(`emp_date_created`,`emp_no`,
        `emp_job_title`,`emp_file_name`,`emp_search_name`,`emp_middle_name`,`emp_city`,
        `emp_last_name`,`emp_post_code`,`emp_initials`,`emp_county`,`emp_picture`,`emp_first_name`,`emp_work_phone_no`,`emp_mobile_phone_no`,`emp_email`,
        `emp_alt_address_code`,`emp_alt_address_start_code`,`emp_alt_address_end_code`,`emp_birth_date`,`emp_id_number`,`emp_gender`,`emp_country_region_code`,
        `emp_manager_no`,`emp_statistics_group_code`,`emp_employment_date`,
        `emp_statuss`,`emp_termination_date`,`emp_global_dimension_1_code`,`emp_global_dimension_2_code`,`emp_period_filter`,`emp_global_dimension_1_filter`,
        `emp_company_email`,`emp_title`,`emp_employee_posting_group`,`emp_cost_center_code`,
        `emp_cost_object_code`,`emp_idd`,`emp_job_id`,`emp_employment_type`,`emp_contract_end_date`,`emp_termination_category`,`emp_citizenship`,`emp_user_id`,`emp_passsport_no`,`emp_pin`,
        `emp_nssf_no`,`emp_nhif_no`,`emp_confirmed`,`emp_leave_family`,`emp_total_leave_taken`,`emp_total_leave_days`,`emp_reimbursed_leave_days`,`emp_allocated_leave_days`,`emp_leave_period_filter`,`emp_leave_balance`,
        `emp_leave_status`,`emp_leave_type_filter`,`emp_home_phone_no`,`emp_shortcut_dimension_3_code`,`emp_leave_earned_prior_current_yr`,`emp_leave_earned_prior_current_yr_2`,`emp_annual_leave_code`,`emp_nationality`,`emp_credit_limit_lcy`,
        `emp_job_group`)
        VALUES(:emp_date_created,:emp_no,:emp_job_title,:emp_file_name,:emp_search_name,:emp_middle_name,
        :emp_city,:emp_last_name,:emp_post_code,:emp_initials,:emp_county,
        :emp_picture,:emp_first_name,:emp_work_phone_no,:emp_mobile_phone_no,:emp_email,:emp_alt_address_code,:emp_alt_address_start_code,
        :emp_alt_address_end_code,
        :emp_birth_date,:emp_id_number,:emp_gender,
        :emp_country_region_code,:emp_manager_no,:emp_statistics_group_code,:emp_employment_date,:emp_statuss,:emp_termination_date,
        :emp_global_dimension_1_code,
        :emp_global_dimension_2_code,:emp_period_filter,:emp_global_dimension_1_filter,:emp_company_email,
        :emp_title,:emp_employee_posting_group,:emp_cost_center_code,:emp_cost_object_code,:emp_idd,:emp_job_id,:emp_employment_type,
        :emp_contract_end_date,
        :emp_termination_category,:emp_citizenship,:emp_user_id,
        :emp_passsport_no,:emp_pin,:emp_nssf_no,:emp_nhif_no,:emp_confirmed,:emp_leave_family,:emp_total_leave_taken,
        :emp_total_leave_days,:emp_reimbursed_leave_days,:emp_allocated_leave_days,:emp_leave_period_filter,
        :emp_leave_balance,:emp_leave_status,:emp_leave_type_filter,:emp_home_phone_no,:emp_shortcut_dimension_3_code,
        :emp_leave_earned_prior_current_yr,:emp_leave_earned_prior_current_yr_2,:emp_annual_leave_code,:emp_nationality,
        :emp_credit_limit_lcy,:emp_job_group)");
        $result->bindParam(':emp_date_created', $this->emp_date_created, PDO::PARAM_STR);
        $result->bindParam(':emp_no', $this->emp_no, PDO::PARAM_STR);
        $result->bindParam(':emp_job_title', $this->emp_job_title, PDO::PARAM_STR);
        $result->bindParam(':emp_file_name', $this->emp_file_name, PDO::PARAM_STR);
        $result->bindParam(':emp_search_name', $this->emp_search_name, PDO::PARAM_STR);
        $result->bindParam(':emp_middle_name', $this->emp_middle_name, PDO::PARAM_STR);
        $result->bindParam(':emp_city', $this->emp_city, PDO::PARAM_STR);
        $result->bindParam(':emp_last_name', $this->emp_last_name, PDO::PARAM_STR);
        $result->bindParam(':emp_post_code', $this->emp_post_code, PDO::PARAM_STR);
        $result->bindParam(':emp_initials', $this->emp_initials, PDO::PARAM_STR);
        $result->bindParam(':emp_county', $this->emp_county, PDO::PARAM_STR);
        $result->bindParam(':emp_picture', $this->emp_picture, PDO::PARAM_STR);
        $result->bindParam(':emp_first_name', $this->emp_first_name, PDO::PARAM_STR);
        $result->bindParam(':emp_work_phone_no', $this->emp_work_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_mobile_phone_no', $this->emp_mobile_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_email', $this->emp_email, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_code', $this->emp_alt_address_code, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_start_code', $this->emp_alt_address_start_code, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_end_code', $this->emp_alt_address_end_code, PDO::PARAM_STR);
        $result->bindParam(':emp_birth_date', $this->emp_birth_date, PDO::PARAM_STR);
        $result->bindParam(':emp_id_number', $this->emp_id_number, PDO::PARAM_STR);
        $result->bindParam(':emp_gender', $this->emp_gender, PDO::PARAM_STR);
        $result->bindParam(':emp_country_region_code', $this->emp_country_region_code, PDO::PARAM_STR);
        $result->bindParam(':emp_manager_no', $this->emp_manager_no, PDO::PARAM_STR);
        $result->bindParam(':emp_statistics_group_code', $this->emp_statistics_group_code, PDO::PARAM_STR);
        $result->bindParam(':emp_employment_date', $this->emp_employment_date, PDO::PARAM_STR);
        $result->bindParam(':emp_statuss', $this->emp_statuss, PDO::PARAM_STR);
        $result->bindParam(':emp_termination_date', $this->emp_termination_date, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_1_code', $this->emp_global_dimension_1_code, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_2_code', $this->emp_global_dimension_2_code, PDO::PARAM_STR);
        $result->bindParam(':emp_period_filter', $this->emp_period_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_1_filter', $this->emp_global_dimension_1_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_company_email', $this->emp_company_email, PDO::PARAM_STR);
        $result->bindParam(':emp_title', $this->emp_title, PDO::PARAM_STR);
        $result->bindParam(':emp_employee_posting_group', $this->emp_employee_posting_group, PDO::PARAM_STR);
        $result->bindParam(':emp_cost_center_code', $this->emp_cost_center_code, PDO::PARAM_STR);
        $result->bindParam(':emp_cost_object_code', $this->emp_cost_object_code, PDO::PARAM_STR);
        $result->bindParam(':emp_idd', $this->emp_idd, PDO::PARAM_STR);
        $result->bindParam(':emp_job_id', $this->emp_job_id, PDO::PARAM_STR);
        $result->bindParam(':emp_employment_type', $this->emp_employment_type, PDO::PARAM_STR);
        $result->bindParam(':emp_contract_end_date', $this->emp_contract_end_date, PDO::PARAM_STR);
        $result->bindParam(':emp_termination_category', $this->emp_termination_category, PDO::PARAM_STR);
        $result->bindParam(':emp_citizenship', $this->emp_citizenship, PDO::PARAM_STR);
        $result->bindParam(':emp_user_id', $this->emp_user_id, PDO::PARAM_STR);
        $result->bindParam(':emp_passsport_no', $this->emp_passsport_no, PDO::PARAM_STR);
        $result->bindParam(':emp_pin', $this->emp_pin, PDO::PARAM_STR);
        $result->bindParam(':emp_nssf_no', $this->emp_nssf_no, PDO::PARAM_STR);
        $result->bindParam(':emp_nhif_no', $this->emp_nhif_no, PDO::PARAM_STR);
        $result->bindParam(':emp_confirmed', $this->emp_confirmed, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_family', $this->emp_leave_family, PDO::PARAM_STR);
        $result->bindParam(':emp_total_leave_taken', $this->emp_total_leave_taken, PDO::PARAM_STR);
        $result->bindParam(':emp_total_leave_days', $this->emp_total_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_reimbursed_leave_days', $this->emp_reimbursed_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_allocated_leave_days', $this->emp_allocated_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_period_filter', $this->emp_leave_period_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_balance', $this->emp_leave_balance, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_status', $this->emp_leave_status, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_type_filter', $this->emp_leave_type_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_home_phone_no', $this->emp_home_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_shortcut_dimension_3_code', $this->emp_shortcut_dimension_3_code, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_earned_prior_current_yr', $this->emp_leave_earned_prior_current_yr, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_earned_prior_current_yr_2', $this->emp_leave_earned_prior_current_yr_2, PDO::PARAM_STR);
        $result->bindParam(':emp_annual_leave_code', $this->emp_annual_leave_code, PDO::PARAM_STR);
        $result->bindParam(':emp_nationality', $this->emp_nationality, PDO::PARAM_STR);
        $result->bindParam(':emp_credit_limit_lcy', $this->emp_credit_limit_lcy, PDO::PARAM_STR);
        $result->bindParam(':emp_job_group', $this->emp_job_group, PDO::PARAM_STR);



   
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

            /*INSERT INTO `ess_employee_listing`(`emp_id`, `emp_date_created`, `emp_date_updated`, `emp_created_by`, `emp_updated_by`,
      `emp_status`, `emp_no`, `emp_job_title`, `emp_file_name`, `emp_search_name`, `emp_middle_name`, `emp_city`, `emp_last_name`, 
      `emp_post_code`, `emp_initials`, `emp_county`, `emp_picture`, `emp_first_name`, `emp_work_phone_no`, `emp_mobile_phone_no`,
       `emp_email`, `emp_alt_address_code`, `emp_alt_address_start_code`, `emp_alt_address_end_code`, `emp_birth_date`, `emp_id_number`, 
       `emp_gender`, `emp_country_region_code`, `emp_manager_no`, `emp_statistics_group_code`, `emp_employment_date`, `emp_statuss`, 
       `emp_termination_date`, `emp_global_dimension_1_code`, `emp_global_dimension_2_code`, `emp_period_filter`,
        `emp_global_dimension_1_filter`, `emp_company_email`, `emp_title`, `emp_employee_posting_group`, `emp_cost_center_code`,
         `emp_cost_object_code`, `emp_idd`, `emp_job_id`, `emp_employment_type`, `emp_contract_end_date`, `emp_termination_category`,
          `emp_citizenship`, `emp_user_id`, `emp_passsport_no`, `emp_pin`, `emp_nssf_no`, `emp_nhif_no`, `emp_confirmed`, `emp_leave_family`,
           `emp_total_leave_taken`, `emp_total_leave_days`, `emp_reimbursed_leave_days`, `emp_allocated_leave_days`, `emp_leave_period_filter`, 
           `emp_leave_balance`, `emp_leave_status`, `emp_leave_type_filter`, `emp_home_phone_no`, `emp_shortcut_dimension_3_code`, 
           `emp_leave_earned_prior_current_yr`, `emp_leave_earned_prior_current_yr_2`, `emp_annual_leave_code`, `emp_nationality`, 
           `emp_credit_limit_lcy`, `emp_job_group`, `emp_publish`)*/

    public function update()
    {
        $result = $this->dbh->prepare("UPDATE `ess_employee_listing` SET
        `emp_date_updated` = :emp_date_updated,
        `emp_no` = :emp_no,
        `emp_job_title` = :emp_job_title,
        `emp_file_name` = :emp_file_name,
        `emp_search_name` = :emp_search_name,
        `emp_middle_name` = :emp_middle_name,
        `emp_city` = :emp_city,
        `emp_last_name` = :emp_last_name,
        `emp_post_code` = :emp_post_code,
        `emp_initials` = :emp_initials,
        `emp_county` = :emp_county,
        `emp_picture` = :emp_picture,
        `emp_first_name` = :emp_first_name,
        `emp_work_phone_no` = :emp_work_phone_no,
        `emp_mobile_phone_no` = :emp_mobile_phone_no,
        `emp_email` = :emp_email,
        `emp_alt_address_code` = :emp_alt_address_code,
        `emp_alt_address_start_code` = :emp_alt_address_start_code,
        `emp_alt_address_end_code` = :emp_alt_address_end_code,
        `emp_birth_date` = :emp_birth_date,
        `emp_id_number` = :emp_id_number,
        `emp_gender` = :emp_gender,
        `emp_country_region_code` = :emp_country_region_code,
        `emp_manager_no` = :emp_manager_no,
        `emp_statistics_group_code` = :emp_statistics_group_code,
        `emp_employment_date` = :emp_employment_date,
        `emp_statuss` = :emp_statuss,
        `emp_termination_date` = :emp_termination_date,
        `emp_global_dimension_1_code` = :emp_global_dimension_1_code,
        `emp_global_dimension_2_code` = :emp_global_dimension_2_code,
        `emp_period_filter` = :emp_period_filter,
        `emp_global_dimension_1_filter` = :emp_global_dimension_1_filter,
        `emp_company_email` = :emp_company_email,
        `emp_title` = :emp_title,
        `emp_employee_posting_group` = :emp_employee_posting_group,
        `emp_cost_center_code` = :emp_cost_center_code,
        `emp_cost_object_code` = :emp_cost_object_code,
        `emp_idd` = :emp_idd,
        `emp_job_id` = :emp_job_id,
        `emp_employment_type` = :emp_employment_type,
        `emp_contract_end_date` = :emp_contract_end_date,
        `emp_termination_category` = :emp_termination_category,
        `emp_citizenship` = :emp_citizenship,
        `emp_user_id` = :emp_user_id,
        `emp_passsport_no` = :emp_passsport_no,
        `emp_pin` = :emp_pin,
        `emp_nssf_no` = :emp_nssf_no,
        `emp_nhif_no` = :emp_nhif_no,
        `emp_confirmed` = :emp_confirmed,
        `emp_leave_family` = :emp_leave_family,
        `emp_total_leave_taken` = :emp_total_leave_taken,
        `emp_total_leave_days` = :emp_total_leave_days,
        `emp_reimbursed_leave_days` = :emp_reimbursed_leave_days,
        `emp_allocated_leave_days` = :emp_allocated_leave_days,
        `emp_leave_period_filter` = :emp_leave_period_filter,
        `emp_leave_balance` = :emp_leave_balance,
        `emp_leave_status` = :emp_leave_status,
        `emp_leave_type_filter` = :emp_leave_type_filter,
        `emp_home_phone_no` = :emp_home_phone_no,
        `emp_shortcut_dimension_3_code` = :emp_shortcut_dimension_3_code,
        `emp_leave_earned_prior_current_yr` = :emp_leave_earned_prior_current_yr,
        `emp_leave_earned_prior_current_yr_2` = :emp_leave_earned_prior_current_yr_2,
        `emp_annual_leave_code` = :emp_annual_leave_code,
        `emp_nationality` = :emp_nationality,
        `emp_credit_limit_lcy` = :emp_credit_limit_lcy,
        `emp_job_group` = :emp_job_group
        WHERE `emp_id` = :emp_id");
        $result->bindParam(':emp_date_updated', $this->emp_date_updated, PDO::PARAM_STR);
        $result->bindParam(':emp_no', $this->emp_no, PDO::PARAM_STR);
        $result->bindParam(':emp_job_title', $this->emp_job_title, PDO::PARAM_STR);
        $result->bindParam(':emp_file_name', $this->emp_file_name, PDO::PARAM_STR);
        $result->bindParam(':emp_search_name', $this->emp_search_name, PDO::PARAM_STR);
        $result->bindParam(':emp_middle_name', $this->emp_middle_name, PDO::PARAM_STR);
        $result->bindParam(':emp_city', $this->emp_city, PDO::PARAM_STR);
        $result->bindParam(':emp_last_name', $this->emp_last_name, PDO::PARAM_STR);
        $result->bindParam(':emp_post_code', $this->emp_post_code, PDO::PARAM_STR);
        $result->bindParam(':emp_initials', $this->emp_initials, PDO::PARAM_STR);
        $result->bindParam(':emp_county', $this->emp_county, PDO::PARAM_STR);
        $result->bindParam(':emp_picture', $this->emp_picture, PDO::PARAM_STR);
        $result->bindParam(':emp_first_name', $this->emp_first_name, PDO::PARAM_STR);
        $result->bindParam(':emp_work_phone_no', $this->emp_work_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_mobile_phone_no', $this->emp_mobile_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_email', $this->emp_email, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_code', $this->emp_alt_address_code, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_start_code', $this->emp_alt_address_start_code, PDO::PARAM_STR);
        $result->bindParam(':emp_alt_address_end_code', $this->emp_picture, PDO::PARAM_STR);
        $result->bindParam(':emp_birth_date', $this->emp_birth_date, PDO::PARAM_STR);
        $result->bindParam(':emp_id_number', $this->emp_id_number, PDO::PARAM_STR);
        $result->bindParam(':emp_gender', $this->emp_gender, PDO::PARAM_STR);
        $result->bindParam(':emp_country_region_code', $this->emp_country_region_code, PDO::PARAM_STR);
        $result->bindParam(':emp_manager_no', $this->emp_manager_no, PDO::PARAM_STR);
        $result->bindParam(':emp_statistics_group_code', $this->emp_statistics_group_code, PDO::PARAM_STR);
        $result->bindParam(':emp_employment_date', $this->emp_employment_date, PDO::PARAM_STR);
        $result->bindParam(':emp_statuss', $this->emp_statuss, PDO::PARAM_STR);
        $result->bindParam(':emp_termination_date', $this->emp_termination_date, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_1_code', $this->emp_global_dimension_1_code, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_2_code', $this->emp_global_dimension_2_code, PDO::PARAM_STR);
        $result->bindParam(':emp_period_filter', $this->emp_period_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_global_dimension_1_filter', $this->emp_global_dimension_1_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_company_email', $this->emp_company_email, PDO::PARAM_STR);
        $result->bindParam(':emp_title', $this->emp_title, PDO::PARAM_STR);
        $result->bindParam(':emp_employee_posting_group', $this->emp_employee_posting_group, PDO::PARAM_STR);
        $result->bindParam(':emp_cost_center_code', $this->emp_cost_center_code, PDO::PARAM_STR);
        $result->bindParam(':emp_cost_object_code', $this->emp_cost_object_code, PDO::PARAM_STR);
        $result->bindParam(':emp_idd', $this->emp_idd, PDO::PARAM_STR);
        $result->bindParam(':emp_job_id', $this->emp_job_id, PDO::PARAM_STR);
        $result->bindParam(':emp_employment_type', $this->emp_employment_type, PDO::PARAM_STR);
        $result->bindParam(':emp_contract_end_date', $this->emp_contract_end_date, PDO::PARAM_STR);
        $result->bindParam(':emp_termination_category', $this->emp_termination_category, PDO::PARAM_STR);
        $result->bindParam(':emp_citizenship', $this->emp_citizenship, PDO::PARAM_STR);
        $result->bindParam(':emp_user_id', $this->emp_user_id, PDO::PARAM_STR);
        $result->bindParam(':emp_passsport_no', $this->emp_passsport_no, PDO::PARAM_STR);
        $result->bindParam(':emp_pin', $this->emp_pin, PDO::PARAM_STR);
        $result->bindParam(':emp_nssf_no', $this->emp_nssf_no, PDO::PARAM_STR);
        $result->bindParam(':emp_nhif_no', $this->emp_nhif_no, PDO::PARAM_STR);
        $result->bindParam(':emp_confirmed', $this->emp_confirmed, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_family', $this->emp_leave_family, PDO::PARAM_STR);
        $result->bindParam(':emp_total_leave_taken', $this->emp_total_leave_taken, PDO::PARAM_STR);
        $result->bindParam(':emp_total_leave_days', $this->emp_total_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_reimbursed_leave_days', $this->emp_reimbursed_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_allocated_leave_days', $this->emp_allocated_leave_days, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_period_filter', $this->emp_leave_period_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_balance', $this->emp_leave_balance, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_status', $this->emp_leave_status, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_type_filter', $this->emp_leave_type_filter, PDO::PARAM_STR);
        $result->bindParam(':emp_home_phone_no', $this->emp_home_phone_no, PDO::PARAM_STR);
        $result->bindParam(':emp_shortcut_dimension_3_code', $this->emp_shortcut_dimension_3_code, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_earned_prior_current_yr', $this->emp_leave_earned_prior_current_yr, PDO::PARAM_STR);
        $result->bindParam(':emp_leave_earned_prior_current_yr_2', $this->emp_leave_earned_prior_current_yr_2, PDO::PARAM_STR);
        $result->bindParam(':emp_annual_leave_code', $this->emp_annual_leave_code, PDO::PARAM_STR);
        $result->bindParam(':emp_nationality', $this->emp_nationality, PDO::PARAM_STR);
        $result->bindParam(':emp_credit_limit_lcy', $this->emp_credit_limit_lcy, PDO::PARAM_STR);
        $result->bindParam(':emp_job_group', $this->emp_job_group, PDO::PARAM_STR);
        $result->bindParam(':emp_id', $this->emp_id, PDO::PARAM_INT);
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