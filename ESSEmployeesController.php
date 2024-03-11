<?php
/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 27/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSEmployeesController.php
 */

 class ESSEmployeesController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //$this->registry->template->t_ = $this->registry->t_;
         //$this->registry->template->show('employees/index');
 
     }
    
    public function create()
    {
        
        $ObjESSEmployees = new ESSEmployees();
        $input = new CI_Input();
        $ObjESSEmployees->dbh = $this->registry->db;
        $ObjESSEmployees->empl_date_created =  $input->post('empl_date_created');
        $ObjESSEmployees->empl_no = $input->post('empl_no');
        $ObjESSEmployees->empl_first_name = $input->post('empl_first_name');
        $ObjESSEmployees->empl_middle_name = $input->post('empl_middle_name');
        $ObjESSEmployees->empl_last_name = $input->post('empl_last_name');
        $ObjESSEmployees->empl_initials = $input->post('empl_initials');
        $ObjESSEmployees->empl_job_title = $input->post('empl_job_title');
        $ObjESSEmployees->empl_search_name = $input->post('empl_search_name');
        $ObjESSEmployees->empl_city =  $input->post('empl_city');
        $ObjESSEmployees->empl_post_code = $input->post('empl_post_code');
        $ObjESSEmployees->empl_county = $input->post('empl_county');
        $ObjESSEmployees->empl_work_phone_no = $input->post('empl_work_phone_no');
        $ObjESSEmployees->empl_mobile_phone_no = $input->post('empl_mobile_phone_no');     
        $ObjESSEmployees->empl_email = $input->post('empl_email');    
        $ObjESSEmployees->empl_birth_date = $input->post('empl_birth_date');
        $ObjESSEmployees->empl_id_number = $input->post('empl_id_number');
        $ObjESSEmployees->empl_gender =  $input->post('empl_gender');
        $ObjESSEmployees->empl_termination_date =  $input->post('empl_termination_date');
        $ObjESSEmployees->empl_global_dimension1_code = $input->post('empl_global_dimension1_code');
        $ObjESSEmployees->empl_global_dimension2_code = $input->post('empl_global_dimension2_code');
        $ObjESSEmployees->empl_global_dimension1_filter = $input->post('empl_global_dimension1_filter');
        $ObjESSEmployees->empl_global_dimension2_filter = $input->post('empl_global_dimension2_filter');
        $ObjESSEmployees->empl_company_email = $input->post('empl_company_email');
        $ObjESSEmployees->empl_title = $input->post('empl_title');
        $ObjESSEmployees->empl_employee_posting_group =  $input->post('empl_employee_posting_group');
        $ObjESSEmployees->empl_cost_center_code = $input->post('empl_cost_center_code');
        $ObjESSEmployees->empl_cost_object_code = $input->post('empl_cost_object_code');
        $ObjESSEmployees->empl_job_id = $input->post('empl_job_id');       
        $ObjESSEmployees->empl_employment_type = $input->post('empl_employment_type');
        $ObjESSEmployees->empl_contract_end_date = $input->post('empl_contract_end_date');
        $ObjESSEmployees->empl_termination_category = $input->post('empl_termination_category');
        $ObjESSEmployees->empl_citizenship = $input->post('empl_citizenship');
        $ObjESSEmployees->empl_user_id =  $input->post('empl_user_id');
        $ObjESSEmployees->empl_passport_no =  $input->post('empl_passport_no');
        $ObjESSEmployees->empl_pin = $input->post('empl_pin');
        $ObjESSEmployees->empl_nssf_no = $input->post('empl_nssf_no');
        $ObjESSEmployees->empl_nhif_no = $input->post('empl_nhif_no');
        $ObjESSEmployees->empl_period_filter = $input->post('empl_period_filter');
        $ObjESSEmployees->empl_confirmed = $input->post('empl_confirmed');
        $ObjESSEmployees->empl_leave_family = $input->post('empl_leave_family');
        $ObjESSEmployees->empl_total_leave_taken = $input->post('empl_total_leave_taken');     
        $ObjESSEmployees->empl_total_leave_days = $input->post('empl_total_leave_days');
        $ObjESSEmployees->empl_reimbursed_leave_days = $input->post('empl_reimbursed_leave_days');
        $ObjESSEmployees->empl_allocated_leave_days = $input->post('empl_allocated_leave_days');
        $ObjESSEmployees->empl_leave_period_filter = $input->post('empl_leave_period_filter');
        $ObjESSEmployees->empl_leave_balance = $input->post('empl_leave_balance');
        $ObjESSEmployees->empl_leave_status = $input->post('empl_leave_status');     
        $ObjESSEmployees->empl_leave_type_filter = $input->post('empl_leave_type_filter');
        $ObjESSEmployees->empl_home_phone_no = $input->post('empl_home_phone_no');
        $ObjESSEmployees->empl_shortcut_dimension3_code = $input->post('empl_shortcut_dimension3_code');
        $ObjESSEmployees->empl_leave_earned_prior_current_yr = $input->post('empl_leave_earned_prior_current_yr');
        $ObjESSEmployees->empl_annual_leave_code = $input->post('empl_annual_leave_code');
        $ObjESSEmployees->empl_nationality = $input->post('empl_nationality');
        $ObjESSEmployees->empl_credit_limit_lcy = $input->post('empl_credit_limit_lcy');
        $ObjESSEmployees->empl_job_group = $input->post('empl_job_group');
        $modelResponse = $ObjESSEmployees->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }


    public function update()
    {
        $ObjESSEmployees = new ESSEmployees();
        $input = new CI_Input();
        $ObjESSEmployees->dbh = $this->registry->db;
        $ObjESSEmployees->empl_date_updated =  $input->post('empl_date_updated');
        $ObjESSEmployees->empl_no = $input->post('empl_no');
        $ObjESSEmployees->empl_first_name = $input->post('empl_first_name');
        $ObjESSEmployees->empl_middle_name = $input->post('empl_middle_name');
        $ObjESSEmployees->empl_last_name = $input->post('empl_last_name');
        $ObjESSEmployees->empl_initials = $input->post('empl_initials');
        $ObjESSEmployees->empl_job_title = $input->post('empl_job_title');
        $ObjESSEmployees->empl_search_name = $input->post('empl_search_name');
        $ObjESSEmployees->empl_city =  $input->post('empl_city');
        $ObjESSEmployees->empl_post_code = $input->post('empl_post_code');
        $ObjESSEmployees->empl_county = $input->post('empl_county');
        $ObjESSEmployees->empl_work_phone_no = $input->post('empl_work_phone_no');
        $ObjESSEmployees->empl_mobile_phone_no = $input->post('empl_mobile_phone_no');     
        $ObjESSEmployees->empl_email = $input->post('empl_email');    
        $ObjESSEmployees->empl_birth_date = $input->post('empl_birth_date');
        $ObjESSEmployees->empl_id_number = $input->post('empl_id_number');
        $ObjESSEmployees->empl_gender =  $input->post('empl_gender');
        $ObjESSEmployees->empl_termination_date =  $input->post('empl_termination_date');
        $ObjESSEmployees->empl_global_dimension1_code = $input->post('empl_global_dimension1_code');
        $ObjESSEmployees->empl_global_dimension2_code = $input->post('empl_global_dimension2_code');
        $ObjESSEmployees->empl_global_dimension1_filter = $input->post('empl_global_dimension1_filter');
        $ObjESSEmployees->empl_global_dimension2_filter = $input->post('empl_global_dimension2_filter');
        $ObjESSEmployees->empl_company_email = $input->post('empl_company_email');
        $ObjESSEmployees->empl_title = $input->post('empl_title');
        $ObjESSEmployees->empl_employee_posting_group =  $input->post('empl_employee_posting_group');
        $ObjESSEmployees->empl_cost_center_code = $input->post('empl_cost_center_code');
        $ObjESSEmployees->empl_cost_object_code = $input->post('empl_cost_object_code');
        $ObjESSEmployees->empl_job_id = $input->post('empl_job_id');       
        $ObjESSEmployees->empl_employment_type = $input->post('empl_employment_type');
        $ObjESSEmployees->empl_contract_end_date = $input->post('empl_contract_end_date');
        $ObjESSEmployees->empl_termination_category = $input->post('empl_termination_category');
        $ObjESSEmployees->empl_citizenship = $input->post('empl_citizenship');
        $ObjESSEmployees->empl_user_id =  $input->post('empl_user_id');
        $ObjESSEmployees->empl_passport_no =  $input->post('empl_passport_no');
        $ObjESSEmployees->empl_pin = $input->post('empl_pin');
        $ObjESSEmployees->empl_nssf_no = $input->post('empl_nssf_no');
        $ObjESSEmployees->empl_nhif_no = $input->post('empl_nhif_no');
        $ObjESSEmployees->empl_period_filter = $input->post('empl_period_filter');
        $ObjESSEmployees->empl_confirmed = $input->post('empl_confirmed');
        $ObjESSEmployees->empl_leave_family = $input->post('empl_leave_family');
        $ObjESSEmployees->empl_total_leave_taken = $input->post('empl_total_leave_taken');     
        $ObjESSEmployees->empl_total_leave_days = $input->post('empl_total_leave_days');
        $ObjESSEmployees->empl_reimbursed_leave_days = $input->post('empl_reimbursed_leave_days');
        $ObjESSEmployees->empl_allocated_leave_days = $input->post('empl_allocated_leave_days');
        $ObjESSEmployees->empl_leave_period_filter = $input->post('empl_leave_period_filter');
        $ObjESSEmployees->empl_leave_balance = $input->post('empl_leave_balance');
        $ObjESSEmployees->empl_leave_status = $input->post('empl_leave_status');     
        $ObjESSEmployees->empl_leave_type_filter = $input->post('empl_leave_type_filter');
        $ObjESSEmployees->empl_home_phone_no = $input->post('empl_home_phone_no');
        $ObjESSEmployees->empl_shortcut_dimension3_code = $input->post('empl_shortcut_dimension3_code');
        $ObjESSEmployees->empl_leave_earned_prior_current_yr = $input->post('empl_leave_earned_prior_current_yr');
        $ObjESSEmployees->empl_annual_leave_code = $input->post('empl_annual_leave_code');
        $ObjESSEmployees->empl_nationality = $input->post('empl_nationality');
        $ObjESSEmployees->empl_credit_limit_lcy = $input->post('empl_credit_limit_lcy');
        $ObjESSEmployees->empl_job_group = $input->post('empl_job_group');
        $ObjESSEmployees->empl_id = $input->post('empl_id');
        $modelResponse = $ObjESSEmployees->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    