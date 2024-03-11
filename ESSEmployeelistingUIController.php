<?php
/**
 * Author : Faith H wachira.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : faithhopewachira@gmail.com
 * File : ESSEmployeelistingUIController.php
 */


 class ESSEmployeelistingUIController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_description = "View Employee Listing";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
        $ObjLogs->log_creator_name = $_SESSION['USERNAME'];
        $ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('essemployeelistingui/index');
 
     }
     /*INSERT INTO `ess_employee_listing`(`emp_id`, `emp_date_created`, `emp_date_updated`, 
     `emp_created_by`, `emp_updated_by`, `emp_status`, `emp_no`, `emp_job_title`, `emp_file_name`,
      `emp_search_name`, `emp_middle_name`, `emp_city`, `emp_last_name`, `emp_post_code`, `emp_initials`, 
      `emp_county`, `emp_picture`, `emp_first_name`, `emp_work_phone_no`, `emp_mobile_phone_no`,
       `emp_email`, `emp_alt_address_code`, `emp_alt_address_start_code`, `emp_alt_address_end_code`,
        `emp_birth_date`, `emp_id_number`, `emp_gender`, `emp_country_region_code`, `emp_manager_no`,
         `emp_statistics_group_code`, `emp_employment_date`, `emp_statuss`, `emp_termination_date`, 
         `emp_global_dimension_1_code`, `emp_global_dimension_2_code`, `emp_period_filter`, 
         `emp_global_dimension_1_filter`, `emp_company_email`, `emp_title`, `emp_employee_posting_group`,
          `emp_cost_center_code`, `emp_cost_object_code`, `emp_idd`, `emp_job_id`, `emp_employment_type`, 
          `emp_contract_end_date`, `emp_termination_category`, `emp_citizenship`, 
          `emp_user_id`, `emp_passsport_no`, `emp_pin`, `emp_nssf_no`, `emp_nhif_no`,
           `emp_confirmed`, `emp_leave_family`, `emp_total_leave_taken`, `emp_total_leave_days`,
            `emp_reimbursed_leave_days`, `emp_allocated_leave_days`, `emp_leave_period_filter`,
             `emp_leave_balance`, `emp_leave_status`, `emp_leave_type_filter`, `emp_home_phone_no`,
              `emp_shortcut_dimension_3_code`, `emp_leave_earned_prior_current_yr`, 
              `emp_leave_earned_prior_current_yr_2`, `emp_annual_leave_code`, `emp_nationality`,
               `emp_credit_limit_lcy`, `emp_job_group`, `emp_publish`) */
    public function create()
    {
        $ObjESSEmployeelistingUI = new ESSEmployeelistingUI();
        $input = new CI_Input();
        $ObjESSEmployeelistingUI->dbh = $this->registry->db;
        $ObjESSEmployeelistingUI->emp_date_created =  $input->post('emp_date_created');
        $ObjESSEmployeelistingUI->emp_no =  $input->post('emp_no');
        $ObjESSEmployeelistingUI->emp_job_title = $input->post('emp_job_title');
        $ObjESSEmployeelistingUI->emp_file_name = $input->post('emp_file_name');
        $ObjESSEmployeelistingUI->emp_search_name = $input->post('emp_search_name');
        $ObjESSEmployeelistingUI->emp_middle_name = $input->post('emp_middle_name');
        $ObjESSEmployeelistingUI->emp_city = $input->post('emp_city');
        $ObjESSEmployeelistingUI->emp_last_name = $input->post('emp_last_name');
        $ObjESSEmployeelistingUI->emp_post_code = $input->post('emp_post_code');
        $ObjESSEmployeelistingUI->emp_initials = $input->post('emp_initials');
        $ObjESSEmployeelistingUI->emp_county = $input->post('emp_county');
        $ObjESSEmployeelistingUI->emp_picture = $input->post('emp_picture');
        $ObjESSEmployeelistingUI->emp_first_name = $input->post('emp_first_name');
        $ObjESSEmployeelistingUI->emp_work_phone_no = $input->post('emp_work_phone_no');
        $ObjESSEmployeelistingUI->emp_mobile_phone_no = $input->post('emp_mobile_phone_no');
        $ObjESSEmployeelistingUI->emp_email = $input->post('emp_email');
        $ObjESSEmployeelistingUI->emp_alt_address_code = $input->post('emp_alt_address_code');
        $ObjESSEmployeelistingUI->emp_alt_address_start_code = $input->post('emp_alt_address_start_code');
        $ObjESSEmployeelistingUI->emp_alt_address_end_code = $input->post('emp_alt_address_end_code');
        $ObjESSEmployeelistingUI->emp_birth_date = $input->post('emp_birth_date');
        $ObjESSEmployeelistingUI->emp_id_number = $input->post('emp_id_number');
        $ObjESSEmployeelistingUI->emp_gender = $input->post('emp_gender');
        $ObjESSEmployeelistingUI->emp_country_region_code = $input->post('emp_country_region_code');
        $ObjESSEmployeelistingUI->emp_manager_no = $input->post('emp_manager_no');
        $ObjESSEmployeelistingUI->emp_statistics_group_code = $input->post('emp_statistics_group_code');
        $ObjESSEmployeelistingUI->emp_employment_date = $input->post('emp_employment_date');
        $ObjESSEmployeelistingUI->emp_statuss = $input->post('emp_statuss');
        $ObjESSEmployeelistingUI->emp_termination_date = $input->post('emp_termination_date');
        $ObjESSEmployeelistingUI->emp_global_dimension_1_code = $input->post('emp_global_dimension_1_code');
        $ObjESSEmployeelistingUI->emp_global_dimension_2_code = $input->post('emp_global_dimension_2_code');
        $ObjESSEmployeelistingUI->emp_period_filter = $input->post('emp_period_filter');
        $ObjESSEmployeelistingUI->emp_global_dimension_1_filter = $input->post('emp_global_dimension_1_filter');
        $ObjESSEmployeelistingUI->emp_company_email = $input->post('emp_company_email');
        $ObjESSEmployeelistingUI->emp_title = $input->post('emp_title');
        $ObjESSEmployeelistingUI->emp_employee_posting_group = $input->post('emp_employee_posting_group');
        $ObjESSEmployeelistingUI->emp_cost_center_code = $input->post('emp_cost_center_code');
        $ObjESSEmployeelistingUI->emp_cost_object_code = $input->post('emp_cost_object_code');
        $ObjESSEmployeelistingUI->emp_idd = $input->post('emp_idd');
        $ObjESSEmployeelistingUI->emp_job_id = $input->post('emp_job_id');
        $ObjESSEmployeelistingUI->emp_employment_type = $input->post('emp_employment_type');
        $ObjESSEmployeelistingUI->emp_contract_end_date = $input->post('emp_contract_end_date');
        $ObjESSEmployeelistingUI->emp_termination_category = $input->post('emp_termination_category');
        $ObjESSEmployeelistingUI->emp_citizenship = $input->post('emp_citizenship');
        $ObjESSEmployeelistingUI->emp_user_id = $input->post('emp_user_id');
        $ObjESSEmployeelistingUI->emp_passsport_no = $input->post('emp_passsport_no');
        $ObjESSEmployeelistingUI->emp_pin = $input->post('emp_pin');
        $ObjESSEmployeelistingUI->emp_nssf_no = $input->post('emp_nssf_no');
        $ObjESSEmployeelistingUI->emp_nhif_no = $input->post('emp_nhif_no');
        $ObjESSEmployeelistingUI->emp_confirmed = $input->post('emp_confirmed');
        $ObjESSEmployeelistingUI->emp_leave_family = $input->post('emp_leave_family');
        $ObjESSEmployeelistingUI->emp_total_leave_taken = $input->post('emp_total_leave_taken');
        $ObjESSEmployeelistingUI->emp_total_leave_days = $input->post('emp_total_leave_days');
        $ObjESSEmployeelistingUI->emp_reimbursed_leave_days = $input->post('emp_reimbursed_leave_days');
        $ObjESSEmployeelistingUI->emp_allocated_leave_days = $input->post('emp_allocated_leave_days');
        $ObjESSEmployeelistingUI->emp_leave_period_filter = $input->post('emp_leave_period_filter');
        $ObjESSEmployeelistingUI->emp_leave_balance = $input->post('emp_leave_balance');
        $ObjESSEmployeelistingUI->emp_leave_status = $input->post('emp_leave_status');
        $ObjESSEmployeelistingUI->emp_leave_type_filter = $input->post('emp_leave_type_filter');
        $ObjESSEmployeelistingUI->emp_home_phone_no = $input->post('emp_home_phone_no');
        $ObjESSEmployeelistingUI->emp_shortcut_dimension_3_code = $input->post('emp_shortcut_dimension_3_code');
        $ObjESSEmployeelistingUI->emp_leave_earned_prior_current_yr = $input->post('emp_leave_earned_prior_current_yr');
        $ObjESSEmployeelistingUI->emp_leave_earned_prior_current_yr_2 = $input->post('emp_leave_earned_prior_current_yr_2');
        $ObjESSEmployeelistingUI->emp_annual_leave_code = $input->post('emp_annual_leave_code');
        $ObjESSEmployeelistingUI->emp_nationality = $input->post('emp_nationality');
        $ObjESSEmployeelistingUI->emp_credit_limit_lcy = $input->post('emp_credit_limit_lcy');
        $ObjESSEmployeelistingUI->emp_job_group = $input->post('emp_job_group');




        $modelResponse = $ObjESSEmployeelistingUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    //this is an update fxn
    public function update()
    {
        
        $ObjESSEmployeelistingUI = new ESSEmployeelistingUI();
        $input = new CI_Input();
        $ObjESSEmployeelistingUI->dbh = $this->registry->db;
        $ObjESSEmployeelistingUI->emp_date_updated =  $input->post('emp_date_updated');
        $ObjESSEmployeelistingUI->emp_no =  $input->post('emp_no');
        $ObjESSEmployeelistingUI->emp_job_title = $input->post('emp_job_title');
        $ObjESSEmployeelistingUI->emp_file_name = $input->post('emp_file_name');
        $ObjESSEmployeelistingUI->emp_search_name = $input->post('emp_search_name');
        $ObjESSEmployeelistingUI->emp_middle_name = $input->post('emp_middle_name');
        $ObjESSEmployeelistingUI->emp_city = $input->post('emp_city');
        $ObjESSEmployeelistingUI->emp_last_name = $input->post('emp_last_name');
        $ObjESSEmployeelistingUI->emp_post_code = $input->post('emp_post_code');
        $ObjESSEmployeelistingUI->emp_initials = $input->post('emp_initials');
        $ObjESSEmployeelistingUI->emp_county = $input->post('emp_county');
        $ObjESSEmployeelistingUI->emp_picture = $input->post('emp_picture');
        $ObjESSEmployeelistingUI->emp_first_name = $input->post('emp_first_name');
        $ObjESSEmployeelistingUI->emp_work_phone_no = $input->post('emp_work_phone_no');
        $ObjESSEmployeelistingUI->emp_mobile_phone_no = $input->post('emp_mobile_phone_no');
        $ObjESSEmployeelistingUI->emp_email = $input->post('emp_email');
        $ObjESSEmployeelistingUI->emp_alt_address_code = $input->post('emp_alt_address_code');
        $ObjESSEmployeelistingUI->emp_alt_address_start_code = $input->post('emp_alt_address_start_code');
        $ObjESSEmployeelistingUI->emp_alt_address_end_code = $input->post('emp_alt_address_end_code');
        $ObjESSEmployeelistingUI->emp_birth_date = $input->post('emp_birth_date');
        $ObjESSEmployeelistingUI->emp_id_number = $input->post('emp_id_number');
        $ObjESSEmployeelistingUI->emp_gender = $input->post('emp_gender');
        $ObjESSEmployeelistingUI->emp_country_region_code = $input->post('emp_country_region_code');
        $ObjESSEmployeelistingUI->emp_manager_no = $input->post('emp_manager_no');
        $ObjESSEmployeelistingUI->emp_statistics_group_code = $input->post('emp_statistics_group_code');
        $ObjESSEmployeelistingUI->emp_employment_date = $input->post('emp_employment_date');
        $ObjESSEmployeelistingUI->emp_statuss = $input->post('emp_statuss');
        $ObjESSEmployeelistingUI->emp_termination_date = $input->post('emp_termination_date');
        $ObjESSEmployeelistingUI->emp_global_dimension_1_code = $input->post('emp_global_dimension_1_code');
        $ObjESSEmployeelistingUI->emp_global_dimension_2_code = $input->post('emp_global_dimension_2_code');
        $ObjESSEmployeelistingUI->emp_period_filter = $input->post('emp_period_filter');
        $ObjESSEmployeelistingUI->emp_global_dimension_1_filter = $input->post('emp_global_dimension_1_filter');
        $ObjESSEmployeelistingUI->emp_company_email = $input->post('emp_company_email');
        $ObjESSEmployeelistingUI->emp_title = $input->post('emp_title');
        $ObjESSEmployeelistingUI->emp_employee_posting_group = $input->post('emp_employee_posting_group');
        $ObjESSEmployeelistingUI->emp_cost_center_code = $input->post('emp_cost_center_code');
        $ObjESSEmployeelistingUI->emp_cost_object_code = $input->post('emp_cost_object_code');
        $ObjESSEmployeelistingUI->emp_idd = $input->post('emp_idd');
        $ObjESSEmployeelistingUI->emp_job_id = $input->post('emp_job_id');
        $ObjESSEmployeelistingUI->emp_employment_type = $input->post('emp_employment_type');
        $ObjESSEmployeelistingUI->emp_contract_end_date = $input->post('emp_contract_end_date');
        $ObjESSEmployeelistingUI->emp_termination_category = $input->post('emp_termination_category');
        $ObjESSEmployeelistingUI->emp_citizenship = $input->post('emp_citizenship');
        $ObjESSEmployeelistingUI->emp_user_id = $input->post('emp_user_id');
        $ObjESSEmployeelistingUI->emp_passsport_no = $input->post('emp_passsport_no');
        $ObjESSEmployeelistingUI->emp_pin = $input->post('emp_pin');
        $ObjESSEmployeelistingUI->emp_nssf_no = $input->post('emp_nssf_no');
        $ObjESSEmployeelistingUI->emp_nhif_no = $input->post('emp_nhif_no');
        $ObjESSEmployeelistingUI->emp_confirmed = $input->post('emp_confirmed');
        $ObjESSEmployeelistingUI->emp_leave_family = $input->post('emp_leave_family');
        $ObjESSEmployeelistingUI->emp_total_leave_taken = $input->post('emp_total_leave_taken');
        $ObjESSEmployeelistingUI->emp_total_leave_days = $input->post('emp_total_leave_days');
        $ObjESSEmployeelistingUI->emp_reimbursed_leave_days = $input->post('emp_reimbursed_leave_days');
        $ObjESSEmployeelistingUI->emp_allocated_leave_days = $input->post('emp_allocated_leave_days');
        $ObjESSEmployeelistingUI->emp_leave_period_filter = $input->post('emp_emp_leave_period_filterpicture');
        $ObjESSEmployeelistingUI->emp_leave_balance = $input->post('emp_leave_balance');
        $ObjESSEmployeelistingUI->emp_leave_status = $input->post('emp_leave_status');
        $ObjESSEmployeelistingUI->emp_leave_type_filter = $input->post('emp_leave_type_filter');
        $ObjESSEmployeelistingUI->emp_home_phone_no = $input->post('emp_home_phone_no');
        $ObjESSEmployeelistingUI->emp_shortcut_dimension_3_code = $input->post('emp_shortcut_dimension_3_code');
        $ObjESSEmployeelistingUI->emp_leave_earned_prior_current_yr = $input->post('emp_leave_earned_prior_current_yr');
        $ObjESSEmployeelistingUI->emp_leave_earned_prior_current_yr_2 = $input->post('emp_leave_earned_prior_current_yr_2');
        $ObjESSEmployeelistingUI->emp_annual_leave_code = $input->post('emp_annual_leave_code');
        $ObjESSEmployeelistingUI->emp_nationality = $input->post('emp_nationality');
        $ObjESSEmployeelistingUI->emp_credit_limit_lcy = $input->post('emp_credit_limit_lcy');
        $ObjESSEmployeelistingUI->emp_job_group = $input->post('emp_job_group');
        $ObjESSEmployeelistingUI->emp_id = $input->post('emp_id');
        
        $modelResponse = $ObjESSEmployeelistingUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
 }