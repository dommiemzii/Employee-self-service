<?php
/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSLeaveRequestController.php
 */

 class ESSLeaveRequestController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         
         //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Leave Application";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Leave Application";
        $this->registry->template->show('essleaverequestui/index');
     }
    
    public function create()
    {
        //leav_application_no=&leav_employee_no=1111&leav_leave_type=ANNUAL&leav_days_applied=21&leav_start_date=2024-01-30+12%3A56%3A12&leav_end_date=2024-01-30+12%3A56%3A13&leav_return_date=2024-01-30+12%3A56%3A13&leav_application_date=2024-01-30+12%3A01%3A08
        //&leav_applicant_comments=test&leav_cost_center=888&leav_country=50&leav_leave_statistics=21&leav_reliever=3&leav_reliever_name=VERONICA+KATHINA+MAUNDU&leav_reliever_phone_no=%2B254724316888&leav_reliever_email_address=irnjelagatb%40gmail.com
        //&leav_job_designation=Software+Developer&leav_file_path=uploads%2Fess%2Fleave%2F30012024125628dummy02.pdf
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $input = new CI_Input();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $ObjESSLeaveRequest->leav_date_created =  date("Y-m-d H:i:s");
        $ObjESSLeaveRequest->leav_application_no = $input->post('leav_application_no');
        $ObjESSLeaveRequest->leav_employee_no = $input->post('leav_employee_no');
        $ObjESSLeaveRequest->leav_leave_type = $input->post('leav_leave_type');
        $ObjESSLeaveRequest->leav_days_applied = $input->post('leav_days_applied');
        $ObjESSLeaveRequest->leav_start_date = $input->post('leav_start_date');
        $ObjESSLeaveRequest->leav_end_date = $input->post('leav_end_date');
        $ObjESSLeaveRequest->leav_return_date =  $input->post('leav_return_date');
        $ObjESSLeaveRequest->leav_application_date = $input->post('leav_application_date');
        $ObjESSLeaveRequest->leav_statuss = $input->post('leav_statuss');
        $ObjESSLeaveRequest->leav_applicant_comments = $input->post('leav_applicant_comments');
        
        $ObjESSLeaveRequest->leav_cost_center =  $input->post('leav_cost_center');
        $ObjESSLeaveRequest->leav_country = $input->post('leav_country');
        $ObjESSLeaveRequest->leav_leave_statistics = $input->post('leav_leave_statistics');
        
        $ObjESSLeaveRequest->leav_reliever = $input->post('leav_reliever');
        $ObjESSLeaveRequest->leav_reliever_name = $input->post('leav_reliever_name');
        $ObjESSLeaveRequest->leav_reliever_phone_no = $input->post('leav_reliever_phone_no');
        $ObjESSLeaveRequest->leav_reliever_email_address = $input->post('leav_reliever_email_address');
        $ObjESSLeaveRequest->leav_job_designation = $input->post('leav_job_designation');
        $ObjESSLeaveRequest->leav_file_path = $input->post('leav_file_path');
        $ObjESSLeaveRequest->leav_supervisor = $_SESSION['ESS_SUPERVISOR_NO'];
        
        /*$ObjESSLeaveRequest->leav_email_address = $input->post('leav_email_address');
        $ObjESSLeaveRequest->leav_cell_phone_number =  $input->post('leav_cell_phone_number');
        $ObjESSLeaveRequest->leav_request_leave_allowance = $input->post('leav_request_leave_allowance');
        $ObjESSLeaveRequest->leav_name = $input->post('leav_name');
        $ObjESSLeaveRequest->leav_leave_allowance_entitlement = $input->post('leav_leave_allowance_entitlement');
        $ObjESSLeaveRequest->leav_leave_allowance_amount = $input->post('leav_leave_allowance_amount');
        $ObjESSLeaveRequest->leav_details_of_examination =  $input->post('leav_details_of_examination');
        $ObjESSLeaveRequest->leav_date_of_exam = $input->post('leav_date_of_exam');
        
        $ObjESSLeaveRequest->leav_description = $input->post('leav_description');
        $ObjESSLeaveRequest->leav_supervisor_email =  $input->post('leav_supervisor_email');
        $ObjESSLeaveRequest->leav_job_title = $input->post('leav_job_title');
        $ObjESSLeaveRequest->leav_user_id = $input->post('leav_user_id');
        
        $ObjESSLeaveRequest->leav_responsibility_center =  $input->post('leav_responsibility_center');
        $ObjESSLeaveRequest->leav_approved_days = $input->post('leav_approved_days');
        $ObjESSLeaveRequest->leav_approver_comments = $input->post('leav_approver_comments');
        $ObjESSLeaveRequest->leav_leave_family = $input->post('leav_leave_family');
        $ObjESSLeaveRequest->leav_department_name = $input->post('leav_department_name');
        $ObjESSLeaveRequest->leav_country_name =  $input->post('leav_country_name');
        $ObjESSLeaveRequest->leav_company_name = $input->post('leav_company_name');
        
        $ObjESSLeaveRequest->leav_requires_attachment = $input->post('leav_requires_attachment');
        $ObjESSLeaveRequest->leav_partial_days = $input->post('leav_partial_days');
        $ObjESSLeaveRequest->leav_start_time =  $input->post('leav_start_time');
        $ObjESSLeaveRequest->leav_end_time = $input->post('leav_end_time'); */
    
        $modelResponse = $ObjESSLeaveRequest->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
         
        
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $input = new CI_Input();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $ObjESSLeaveRequest->leav_date_updated = date("Y-m-d H:i:s");
        $ObjESSLeaveRequest->leav_application_no = $input->post('leav_application_no');
        $ObjESSLeaveRequest->leav_employee_no = $input->post('leav_employee_no');
        $ObjESSLeaveRequest->leav_leave_type = $input->post('leav_leave_type');
        $ObjESSLeaveRequest->leav_days_applied = $input->post('leav_days_applied');
        $ObjESSLeaveRequest->leav_start_date = $input->post('leav_start_date');
        $ObjESSLeaveRequest->leav_end_date = $input->post('leav_end_date');
        $ObjESSLeaveRequest->leav_return_date =  $input->post('leav_return_date');
        $ObjESSLeaveRequest->leav_application_date = $input->post('leav_application_date');
        $ObjESSLeaveRequest->leav_statuss = $input->post('leav_statuss');
        $ObjESSLeaveRequest->leav_applicant_comments = $input->post('leav_applicant_comments');
        
        $ObjESSLeaveRequest->leav_cost_center =  $input->post('leav_cost_center');
        $ObjESSLeaveRequest->leav_country = $input->post('leav_country');
        $ObjESSLeaveRequest->leav_leave_statistics = $input->post('leav_leave_statistics');
        
        $ObjESSLeaveRequest->leav_reliever = $input->post('leav_reliever');
        $ObjESSLeaveRequest->leav_reliever_name = $input->post('leav_reliever_name');
        $ObjESSLeaveRequest->leav_reliever_phone_no = $input->post('leav_reliever_phone_no');
        $ObjESSLeaveRequest->leav_reliever_email_address = $input->post('leav_reliever_email_address');
        $ObjESSLeaveRequest->leav_job_designation = $input->post('leav_job_designation');
        $ObjESSLeaveRequest->leav_file_path = $input->post('leav_file_path');
        $ObjESSLeaveRequest->leav_supervisor = $_SESSION['ESS_SUPERVISOR_NO'];

        $ObjESSLeaveRequest->leav_id = $input->post('leav_id');
        $modelResponse = $ObjESSLeaveRequest->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Expense Requisition";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSLeaveRequest->leav_id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSLeaveRequest->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->show('essleaverequestui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Leave Application";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New  Leave Application";
            $this->registry->template->show('essleaverequestui/add_edit');
        }
    }
    
    public function readReliever() {
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSLeaveRequest->readReliever();
        echo json_encode($modelResponse);
    }
    
    //
    public function uploadFile() {
        //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $input = new CI_Input();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $ObjESSLeaveRequest->leav_date_created =  date("Y-m-d H:i:s");
        $ObjESSLeaveRequest->leav_id = $input->post('leav_id');
        $ObjESSLeaveRequest->leav_file_path = $input->post('leav_file_path');
        //$ObjESSLeaveRequest->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSLeaveRequest->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSLeaveRequest->uploadFile();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function sendForApproval() {
        $ObjESSLeaveRequest = new ESSLeaveRequest();
        $input = new CI_Input();
        $ObjESSLeaveRequest->dbh = $this->registry->db;
        $ObjESSLeaveRequest->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSLeaveRequest->leav_id = $input->post('leav_id');
        $ObjESSLeaveRequest->leav_statuss = "2";
        $ObjESSLeaveRequest->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSLeaveRequest->getSupervisor();
        /*$trdetails = $ObjESSLeaveRequest->detail();
        
        if($trdetails['trav_actual_spent'] != 0 || $trdetails['trav_transport_actual_spent'] != 0 || $trdetails['trav_accomodation_actual_spent'] != 0){
            $ObjESSLeaveRequest->trav_department = $trdetails['trav_department'];
            $ObjESSLeaveRequest->approvalChainRequest();
        } */
        
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
 }

    