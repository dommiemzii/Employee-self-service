<?php
/**
 * Author : Jared Okongo Momanyi.
 * Organization : Qasava GPS LTD
 * Time : 29/11/2023
 * Email : jaredmomanyi01@gmail.com
 * File : ESSApprovalSetupController.php
 */

 class ESSApprovalSetupController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Calendar";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "Approval Setup List";
        $this->registry->template->show('ess_approval_setup/index');
 
     }
    
    public function create()
    {
        //`ep_id`, `ep_date_created`, `ep_date_updated`, `ep_created_by`, `ep_updated_by`, `ep_dept`, `ep_emp_no`, `ep_emp_name`, `ep_limit`, `ep_publish`
        $ObjESSApprovalSetup = new ESSApprovalSetup();
        $input = new CI_Input();
        $ObjESSApprovalSetup->dbh = $this->registry->db;
        $ObjESSApprovalSetup->ep_date_created =  date("Y-m-d H:i:s");
        $ObjESSApprovalSetup->ep_created_by = $_SESSION['USER_ID'];
        $ObjESSApprovalSetup->ep_dept = $input->post('ep_dept');
        $ObjESSApprovalSetup->ep_emp_no = $input->post('ep_emp_no');
        $ObjESSApprovalSetup->ep_emp_name = $input->post('ep_emp_name');
        $ObjESSApprovalSetup->ep_limit = $input->post('ep_limit');
        $modelResponse = $ObjESSApprovalSetup->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        $ObjESSApprovalSetup = new ESSApprovalSetup();
        $input = new CI_Input();
        $ObjESSApprovalSetup->dbh = $this->registry->db;
        $ObjESSApprovalSetup->ep_date_updated = date("Y-m-d H:i:s");
        $ObjESSApprovalSetup->ep_updated_by = $_SESSION['USER_ID'];
        $ObjESSApprovalSetup->ep_dept = $input->post('ep_dept');
        $ObjESSApprovalSetup->ep_emp_no = $input->post('ep_emp_no');
        $ObjESSApprovalSetup->ep_emp_name = $input->post('ep_emp_name');
        $ObjESSApprovalSetup->ep_limit = $input->post('ep_limit');
        $ObjESSApprovalSetup->ep_id = $input->post('ep_id');
        $modelResponse = $ObjESSApprovalSetup->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSApprovalSetup = new ESSApprovalSetup();
        $ObjESSApprovalSetup->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            
            $ObjLogs->log_description = "Edit Approval Setup";
    		
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSApprovalSetup->ep_id = $input->get_post('ep_id');
            $this->registry->template->_DATA = $ObjESSApprovalSetup->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->ntitle = "Edit Approval Setup";
            
            $this->registry->template->show('ess_approval_setup/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Approval Setup View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Approval Setup";
            $this->registry->template->show('ess_approval_setup/add_edit');
        }
    }
    
    public function delete() {
        $ObjESSApprovalSetup = new ESSApprovalSetup();
        $ObjESSApprovalSetup->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjESSApprovalSetup->ep_date_created = date("Y-m-d H:i:s");
        $ObjESSApprovalSetup->ep_id = $input->post('ep_id');
        
        //Log Delete User
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "Delete : RECORD ID: " . $ObjESSApprovalSetup->ep_id . " BY " . $ObjLogs->log_creator_name . " USER ID: " . $ObjLogs->log_creator_id;
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $modelResponse = $ObjESSApprovalSetup->delete();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
 }

    