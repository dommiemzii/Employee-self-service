<?php
/**
 * Author : Sally Kanze.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : sallykanze9@gmail.com
 * File : ESSLeaveTypesController.php
 */

 class ESSLeaveTypesController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //$this->registry->template->t_ = $this->registry->t_;
         //$this->registry->template->show('employees/index');
         
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Leave Types";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('ess_leave_types/index');
 
     }
    
    public function create()
    {
        
        $ObjESSLeaveTypes = new ESSLeaveTypes();
        $input = new CI_Input();
        $ObjESSLeaveTypes->dbh = $this->registry->db;
        $ObjESSLeaveTypes->leat_date_created =  $input->post('leat_date_created');
        $ObjESSLeaveTypes->leat_code = $input->post('leat_code');
        $ObjESSLeaveTypes->leat_description = $input->post('leat_description');
        $ObjESSLeaveTypes->leat_days = $input->post('leat_days');
        $ObjESSLeaveTypes->leat_accrue_days = $input->post('leat_accrue_days');
        $ObjESSLeaveTypes->leat_gender = $input->post('leat_gender');
        $ObjESSLeaveTypes->leat_balance = $input->post('leat_balance');
        $ObjESSLeaveTypes->leat_max_carry_forward_days = $input->post('leat_max_carry_forward_days');
        $ObjESSLeaveTypes->leat_inclusive_of_non_working_days = $input->post('leat_inclusive_of_non_working_days');
        $ObjESSLeaveTypes->leat_date_filter = $input->post('leat_date_filter');
        $ObjESSLeaveTypes->leat_is_annual_leave = $input->post('leat_is_annual_leave');
        $ObjESSLeaveTypes->leat_leave_family = $input->post('leat_leave_family');
        $ObjESSLeaveTypes->leat_earned_before_current_year = $input->post('leat_earned_before_current_year');
        $ObjESSLeaveTypes->leat_accrual_formula = $input->post('leat_accrual_formula');
        $ObjESSLeaveTypes->leat_attachment_required = $input->post('leat_attachment_required');
        $modelResponse = $ObjESSLeaveTypes->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        
         $ObjESSLeaveTypes = new ESSLeaveTypes();
        $input = new CI_Input();
        $ObjESSLeaveTypes->dbh = $this->registry->db;
        $ObjESSLeaveTypes->leat_date_updated =  $input->post('leat_date_updated');
        $ObjESSLeaveTypes->leat_code = $input->post('leat_code');
        $ObjESSLeaveTypes->leat_description = $input->post('leat_description');
        $ObjESSLeaveTypes->leat_days = $input->post('leat_days');
        $ObjESSLeaveTypes->leat_accrue_days = $input->post('leat_accrue_days');
        $ObjESSLeaveTypes->leat_gender = $input->post('leat_gender');
        $ObjESSLeaveTypes->leat_balance = $input->post('leat_balance');
        $ObjESSLeaveTypes->leat_max_carry_forward_days = $input->post('leat_max_carry_forward_days');
        $ObjESSLeaveTypes->leat_inclusive_of_non_working_days = $input->post('leat_inclusive_of_non_working_days');
        $ObjESSLeaveTypes->leat_date_filter = $input->post('leat_date_filter');
        $ObjESSLeaveTypes->leat_is_annual_leave = $input->post('leat_is_annual_leave');
        $ObjESSLeaveTypes->leat_leave_family = $input->post('leat_leave_family');
        $ObjESSLeaveTypes->leat_earned_before_current_year = $input->post('leat_earned_before_current_year');
        $ObjESSLeaveTypes->leat_accrual_formula = $input->post('leat_accrual_formula');
        $ObjESSLeaveTypes->leat_attachment_required = $input->post('leat_attachment_required');
        $ObjESSLeaveTypes->leat_id = $input->post('leat_id');
        $modelResponse = $ObjESSLeaveTypes->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    