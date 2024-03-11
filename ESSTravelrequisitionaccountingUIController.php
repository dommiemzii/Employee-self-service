<?php
/**
 * Author : Faith H wachira.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : faithhopewachira@gmail.com
 * File : ESSTravelrequisitionaccountingUIController.php
 */


 class ESSTravelrequisitionaccountingUIController extends baseController {
     
     //NAV Params
    public $soapUrl = "http://197.248.38.22:6047/Cronus/WS/Burn%20Manufacturing%20USA%20LLC%20KE/Codeunit/ESS_Intergration";
    public $baseUrl = "http://197.248.38.22:6047/Cronus/WS/";
    public $soapUser = "Burnmfg&#92;erp.admin"; //Burnmfg&#92;erp.admin
    public $soapPassword = "123@Team";
    public $credentials = "Burnmfg&#92;erp.admin:123@Team";
    
    public $id;
    
    public $companySpecificUrl;
    public $company;
    public $xml_post;
    public $curl;
    public $xml_res;
    public $xml_res1;
    public $xml_res2;
    public $parser;
    public $obj;
    public $res = "";
    public $payload;
    
    public function index()
    {
        //UserRoles::getPass("VIEW_ORDERS");
         
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Travel Requisition Accounting";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Travel Requisition Accounting";
        $this->registry->template->show('esstravelrequisitionaccountingui/index');
 
    }
    
    public function create()
    {
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_date_created =  date("Y-m-d H:i:s");
        //$ObjESSTravelrequisitionaccountingUI->trac_no =  "";
        $ObjESSTravelrequisitionaccountingUI->trac_pay_mode = $input->post('trac_pay_mode');
        $ObjESSTravelrequisitionaccountingUI->trac_payment_date = $input->post('trac_payment_date');
        $ObjESSTravelrequisitionaccountingUI->trac_received_from = $input->post('trac_received_from');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_no = "";
        $ObjESSTravelrequisitionaccountingUI->trac_account_no = $input->post('trac_amount_no');
        $ObjESSTravelrequisitionaccountingUI->trac_amount = $input->post('trac_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_net_amount = $input->post('trac_net_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_cost_center = $input->post('trac_cost_center');
        $ObjESSTravelrequisitionaccountingUI->trac_statuss = $input->post('trac_statuss');
        $ObjESSTravelrequisitionaccountingUI->trac_surrender = $input->post('trac_surrender');
        $ObjESSTravelrequisitionaccountingUI->trac_country = $input->post('trac_country');
        $ObjESSTravelrequisitionaccountingUI->trac_company = $input->post('trac_company');
        $ObjESSTravelrequisitionaccountingUI->trac_profit_center = $input->post('trac_profit_center');
        $ObjESSTravelrequisitionaccountingUI->trac_currency_code = $input->post('trac_currency_code');
        $ObjESSTravelrequisitionaccountingUI->trac_actual_spent = $input->post('trac_actual_spent');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_on_original_document = $input->post('trac_amount_on_original_document');
        $ObjESSTravelrequisitionaccountingUI->trac_date_of_return = $input->post('trac_date_of_return');
        $ObjESSTravelrequisitionaccountingUI->trac_directors = $input->post('trac_directors');
        $ObjESSTravelrequisitionaccountingUI->trac_surrender_date = $input->post('trac_surrender_date');
        $ObjESSTravelrequisitionaccountingUI->trac_transaction_reference_no = $input->post('trac_transaction_reference_no');
        $ObjESSTravelrequisitionaccountingUI->trac_bank_code = $input->post('trac_bank_code');
        $ObjESSTravelrequisitionaccountingUI->trac_on_behalf_of = $input->post('trac_on_behalf_of');
        $ObjESSTravelrequisitionaccountingUI->trac_account_name = $input->post('trac_account_name');
        $ObjESSTravelrequisitionaccountingUI->trac_remarks = $input->post('trac_remarks');
        $ObjESSTravelrequisitionaccountingUI->trac_payee = $input->post('trac_payee');
        $ObjESSTravelrequisitionaccountingUI->trac_imprest_issue_date = $input->post('trac_imprest_issue_date');
        $ObjESSTravelrequisitionaccountingUI->trac_imprest_issue_doc_no = $input->post('trac_imprest_issue_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_user_id = $input->post('trac_user_id');
        $ObjESSTravelrequisitionaccountingUI->trac_product_center = $input->post('trac_product_center');
        $ObjESSTravelrequisitionaccountingUI->trac_projects = $input->post('trac_projects');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_surrendered_lcy = $input->post('trac_amount_surrendered_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_cash_receipt_amount = $input->post('trac_cash_receipt_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_date_of_departure = $input->post('trac_date_of_departure');
        $ObjESSTravelrequisitionaccountingUI->trac_rd_projects = $input->post('trac_rd_projects');

        $modelResponse = $ObjESSTravelrequisitionaccountingUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function createLines()
    {
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_lines_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrender_doc_no =  $input->post('trac_lines_surrender_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_account_no = $input->post('trac_lines_account_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_account_name = $input->post('trac_lines_account_name');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_amount = $input->post('trac_lines_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_due_date = $input->post('trac_lines_due_date');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_advance_holder = $input->post('trac_lines_advance_holder');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_actual_spent = $input->post('trac_lines_actual_spent');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrender_date = $input->post('trac_lines_surrender_date');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrendered = $input->post('trac_lines_surrendered');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_receipt_no = $input->post('trac_lines_cash_receipt_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_date_issued = $input->post('trac_lines_date_issued');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_surrender_amt = $input->post('trac_lines_cash_surrender_amt');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_doc_no = $input->post('trac_lines_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cost_center = $input->post('trac_lines_cost_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_country = $input->post('trac_lines_country');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_currency_code = $input->post('trac_lines_currency_code');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_amount_lcy = $input->post('trac_lines_amount_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_surrender_amt_lcy = $input->post('trac_lines_cash_surrender_amt_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_travel_req_amt_lcy = $input->post('trac_lines_travel_req_amt_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_receipt_amount = $input->post('trac_lines_cash_receipt_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_staff_no = $input->post('trac_lines_staff_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_line_on_original_document = $input->post('trac_lines_line_on_original_document');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_purpose = $input->post('trac_lines_purpose');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_company = $input->post('trac_lines_company');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_product_center = $input->post('trac_lines_product_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_profit_center = $input->post('trac_lines_profit_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_project = $input->post('trac_lines_project');
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');

        $modelResponse = $ObjESSTravelrequisitionaccountingUI->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function updateLines()
    {
        
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_lines_date_updated =  date("Y-m-d H:i:s");
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrender_doc_no =  $input->post('trac_lines_surrender_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_account_no = $input->post('trac_lines_account_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_account_name = $input->post('trac_lines_account_name');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_amount = $input->post('trac_lines_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_due_date = $input->post('trac_lines_due_date');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_advance_holder = $input->post('trac_lines_advance_holder');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_actual_spent = $input->post('trac_lines_actual_spent');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrender_date = $input->post('trac_lines_surrender_date');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_surrendered = $input->post('trac_lines_surrendered');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_receipt_no = $input->post('trac_lines_cash_receipt_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_date_issued = $input->post('trac_lines_date_issued');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_surrender_amt = $input->post('trac_lines_cash_surrender_amt');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_doc_no = $input->post('trac_lines_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cost_center = $input->post('trac_lines_cost_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_country = $input->post('trac_lines_country');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_currency_code = $input->post('trac_lines_currency_code');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_amount_lcy = $input->post('trac_lines_amount_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_surrender_amt_lcy = $input->post('trac_lines_cash_surrender_amt_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_travel_req_amt_lcy = $input->post('trac_lines_travel_req_amt_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_cash_receipt_amount = $input->post('trac_lines_cash_receipt_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_staff_no = $input->post('trac_lines_staff_no');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_line_on_original_document = $input->post('trac_lines_line_on_original_document');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_purpose = $input->post('trac_lines_purpose');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_company = $input->post('trac_lines_company');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_product_center = $input->post('trac_lines_product_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_profit_center = $input->post('trac_lines_profit_center');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_project = $input->post('trac_lines_project');
        $ObjESSTravelrequisitionaccountingUI->trac_lines_id = $input->post('trac_lines_id');
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');
        
        $modelResponse = $ObjESSTravelrequisitionaccountingUI->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    

    //this is an update fxn
    public function update()
    {
        
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_date_updated =  date("Y-m-d H:i:s");
        //$ObjESSTravelrequisitionaccountingUI->trac_no =  $input->post('trac_no');
        $ObjESSTravelrequisitionaccountingUI->trac_pay_mode = $input->post('trac_pay_mode');
        $ObjESSTravelrequisitionaccountingUI->trac_payment_date = $input->post('trac_payment_date');
        $ObjESSTravelrequisitionaccountingUI->trac_received_from = $input->post('trac_received_from');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_no = "";
        $ObjESSTravelrequisitionaccountingUI->trac_account_no = $input->post('trac_amount_no');
        $ObjESSTravelrequisitionaccountingUI->trac_amount = $input->post('trac_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_net_amount = $input->post('trac_net_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_cost_center = $input->post('trac_cost_center');
        $ObjESSTravelrequisitionaccountingUI->trac_statuss = $input->post('trac_statuss');
        $ObjESSTravelrequisitionaccountingUI->trac_surrender = $input->post('trac_surrender');
        $ObjESSTravelrequisitionaccountingUI->trac_country = $input->post('trac_country');
        $ObjESSTravelrequisitionaccountingUI->trac_company = $input->post('trac_company');
        $ObjESSTravelrequisitionaccountingUI->trac_profit_center = $input->post('trac_profit_center');
        $ObjESSTravelrequisitionaccountingUI->trac_currency_code = $input->post('trac_currency_code');
        $ObjESSTravelrequisitionaccountingUI->trac_actual_spent = $input->post('trac_actual_spent');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_on_original_document = $input->post('trac_amount_on_original_document');
        $ObjESSTravelrequisitionaccountingUI->trac_date_of_return = $input->post('trac_date_of_return');
        $ObjESSTravelrequisitionaccountingUI->trac_directors = $input->post('trac_directors');
        $ObjESSTravelrequisitionaccountingUI->trac_surrender_date = $input->post('trac_surrender_date');
        $ObjESSTravelrequisitionaccountingUI->trac_transaction_reference_no = $input->post('trac_transaction_reference_no');
        $ObjESSTravelrequisitionaccountingUI->trac_bank_code = $input->post('trac_bank_code');
        $ObjESSTravelrequisitionaccountingUI->trac_on_behalf_of = $input->post('trac_on_behalf_of');
        $ObjESSTravelrequisitionaccountingUI->trac_account_name = $input->post('trac_account_name');
        $ObjESSTravelrequisitionaccountingUI->trac_remarks = $input->post('trac_remarks');
        $ObjESSTravelrequisitionaccountingUI->trac_payee = $input->post('trac_payee');
        $ObjESSTravelrequisitionaccountingUI->trac_imprest_issue_date = $input->post('trac_imprest_issue_date');
        $ObjESSTravelrequisitionaccountingUI->trac_imprest_issue_doc_no = $input->post('trac_imprest_issue_doc_no');
        $ObjESSTravelrequisitionaccountingUI->trac_user_id = $input->post('trac_user_id');
        $ObjESSTravelrequisitionaccountingUI->trac_product_center = $input->post('trac_product_center');
        $ObjESSTravelrequisitionaccountingUI->trac_projects = $input->post('trac_projects');
        $ObjESSTravelrequisitionaccountingUI->trac_amount_surrendered_lcy = $input->post('trac_amount_surrendered_lcy');
        $ObjESSTravelrequisitionaccountingUI->trac_cash_receipt_amount = $input->post('trac_cash_receipt_amount');
        $ObjESSTravelrequisitionaccountingUI->trac_date_of_departure = $input->post('trac_date_of_departure');
        $ObjESSTravelrequisitionaccountingUI->trac_rd_projects = $input->post('trac_rd_projects');
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');
        
        $modelResponse = $ObjESSTravelrequisitionaccountingUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Travel Requisition Accounting";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSTravelrequisitionaccountingUI->trac_id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSTravelrequisitionaccountingUI->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->ntitle = "Edit Travel Requisition Accounting";
            $this->registry->template->show('esstravelrequisitionaccountingui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Travel Requisition Accounting View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Travel Requisition Accounting";
            $this->registry->template->show('esstravelrequisitionaccountingui/add_edit');
        }
    }
    //
    public function addEditViewLine() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Travel Requisition Accounting";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSTravelrequisitionaccountingUI->trac_lines_id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSTravelrequisitionaccountingUI->detailLines();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->ntitle = "Edit Travel Requisition Accounting Line";
            $this->registry->template->_trac_id = $input->get_post('trac_id');
            $this->registry->template->show('esstravelrequisitionaccountingui/add_edit_lines');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Travel Requisition Accounting View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Travel Requisition Accounting Line";
            $this->registry->template->_trac_id = $input->get_post('trac_id');
            $this->registry->template->show('esstravelrequisitionaccountingui/add_edit_lines');
        }
    }
    
    //
    public function sendForApproval() {
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');
        $ObjESSTravelrequisitionaccountingUI->trac_status = "2";
        $ObjESSTravelrequisitionaccountingUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelrequisitionaccountingUI->getSupervisor();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function approveRequest() {
        //1-New
        //2-Pending Approval
        //3-Cancelled
        //4-Approved
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');
        $ObjESSTravelrequisitionaccountingUI->trac_status = "4";
        $ObjESSTravelrequisitionaccountingUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelrequisitionaccountingUI->approveRequest();
        if($modelResponse == 1){
            $this->createBuisyTravelReqAccounting($ObjESSTravelrequisitionaccountingUI->trac_id);
        }
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function cancelRequest() {
        //1-New
        //2-Pending Approval
        //3-Cancelled
        //4-Approved
        $ObjESSTravelrequisitionaccountingUI = new ESSTravelrequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSTravelrequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSTravelrequisitionaccountingUI->trac_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelrequisitionaccountingUI->trac_id = $input->post('trac_id');
        $ObjESSTravelrequisitionaccountingUI->trac_status = "3";
        $ObjESSTravelrequisitionaccountingUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelrequisitionaccountingUI->cancelRequest();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //https://dev.burnmfgsystems.com/ESSNavIntegration/createBuisyTravelReq?id=1;
    public function createBuisyTravelReqAccounting($trac_id) {
        //ess_travel_requisition
        ini_set("max_execution_time", 0);
        set_time_limit(1800);
        ini_set("memory_limit", -1);
        
        $myfile = fopen("A-TONAV.txt", "a") or die("Unable to open file!");
        fwrite($myfile,"trav_id: " .$trac_id. " \n");

        
        $ObjESSNavIntegration = new ESSNavIntegration();
        $ObjESSNavIntegration->dbh = $this->registry->db;
        $input = new CI_Input();
        
        $ObjESSNavIntegration->id = $trac_id;
        $ObjESSNavIntegration->rq_date = date("Y-m-d H:i:s");
        $ObjESSNavIntegration->rq_type = "createBuisyTravelReqAccounting";
        
        $reqData = $ObjESSNavIntegration->createBuisyTravelReqAccounting();
        $reqLineData = $ObjESSNavIntegration->createBuisyTravelReqAccountingLine();
        
        $objArrWhole = [];
        $objArr = [];
        
        $obj = (object) array('request' => $reqData, 'lines' => $reqLineData);
        array_push($objArr, $obj);
        $objArrWhole['createBuisyTravelReqAccounting'] = $objArr;
        $this->payload = json_encode($objArrWhole);
        
        //header('Content-type: application/json');
        echo $this->payload;
        
        fwrite($myfile,"id: " . $ObjESSNavIntegration->id. " \n");
        fwrite($myfile,"rq_date: " . $ObjESSNavIntegration->rq_date. " \n");
        fwrite($myfile,"rq_type: " . $ObjESSNavIntegration->rq_type. " \n");
        fwrite($myfile,"payload: " . $this->payload. " \n");
        
        //$this->soapUrl = $this->baseUrl.rawurlencode($serialbin[inv_company])./Codeunit/ESS_Intergration;
                    
        //******************************************************************************************
        $this->xml_post = '<?xml version="1.0" encoding="utf-8" ?>
        <Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
            <Body>
                <createBuisyTravelReqAccounting xmlns="urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration">
                    <salesdata>'.$this->payload.'</salesdata>
                </createBuisyTravelReqAccounting>
            </Body>
        </Envelope>';
        
        $this->curl = curl_init();
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $this->soapUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>$this->xml_post,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/xml; charset=utf-8",
                "SoapAction: urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration:createBuisyTravelReqAccounting",
                "Authorization: Basic " .base64_encode($this->credentials). ""
            ),
        ));
            
        $this->xml_res = curl_exec($this->curl);
        fwrite($myfile,"xml_res: " . $this->xml_res. " \n");
        if($this->xml_res === false) {
            $this->res =  "Curl error:  ". curl_error($this->curl);
            //$obj = (object) array(co_connect => 0, co_res => $res); 
            $gresF = $this->res;
            
            fwrite($myfile,"res: " . $this->res. " \n");
            
        } else {
            
            // converting 
            $this->xml_res1 = str_replace("<Soap:Body>","",$this->xml_res);
            $this->xml_res1 = str_replace('<createBuisyTravelReqAccounting_Result xmlns="urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration">','',$this->xml_res1);
            $this->xml_res1 = str_replace('<createBuisyTravelReqAccounting_Result>','',$this->xml_res1);
            $this->xml_res2 = str_replace("</Soap:Body>","",$this->xml_res1);
            $this->xml_res2 = str_replace("</createBuisyTravelReqAccounting_Result>","",$this->xml_res2);
            $this->xml_res2 = str_replace("</createBuisyTravelReqAccounting_Result>","",$this->xml_res2);
            
            fwrite($myfile,"xml_res2: " . $this->xml_res2. " \n");
            
            $ObjESSNavIntegration->sales_order_no = "";
            $ObjESSNavIntegration->nav_res = "";
            
            // get json string
            //$this->parser = simplexml_load_string(trim($this->xml_res2));
            
            $this->parser = trim($this->xml_res2);
            
            $prod = (array) $this->parser;
            
            if(array_key_exists('return_value', $prod)) {
                $this->xml_final_res = $prod['return_value'];
                $jsonDataStr = $prod['return_value'];
                
                $jsonData = json_decode($jsonDataStr);
                if($jsonData->success == "true"){
                    $ObjESSNavIntegration->nav_res = $jsonDataStr;
                    //scust_verified_nav_push
                    $ObjESSNavIntegration->updateNavRequisitionStatus();
                } else {
                    //err
                    $ObjESSNavIntegration->nav_res = $jsonDataStr;
                    $ObjESSNavIntegration->updateNavRequisitionStatus();
                }
                
                fwrite($myfile,"nav_res: " . $this->nav_res. " \n");
                
            }
        }
        //******************************************************************************************
        
        fclose($myfile);
 
    }
    
 }

    