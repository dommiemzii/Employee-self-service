<?php
/**
 * Author : Sally Kanze.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : sallykanze9@gmail.com
 * File : ESSExpenserequisitionUIController.php
 */

 class ESSExpenserequisitionUIController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //$this->registry->template->t_ = $this->registry->t_;
         //$this->registry->template->show('essexpenserequisitionui/index');
         
         //UserRoles::getPass("VIEW_CUSTOMERS");
        
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Expense Requisition";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Expense Requisition";
        $this->registry->template->show('essexpenserequisitionui/index');
 
     }
    
    public function create()
    {
         
        $ObjESSExpenserequisitionUI = new ESSExpenserequisitionUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionUI->expe_date_created=  $input->post('expe_date_created');
        $ObjESSExpenserequisitionUI->expe_no = $input->post('expe_no');
        $ObjESSExpenserequisitionUI->expe_date = $input->post('expe_date');
        $ObjESSExpenserequisitionUI->expe_currency_code = $input->post('expe_currency_code');
        $ObjESSExpenserequisitionUI->expe_payee = $input->post('expe_payee');
        $ObjESSExpenserequisitionUI->expe_on_behalf_of = $input->post('expe_on_behalf_of');
        $ObjESSExpenserequisitionUI->expe_total_payment_amount = $input->post('expe_total_payment_amount');
        $ObjESSExpenserequisitionUI->expe_paying_bank_account = $input->post('expe_paying_bank_account');
        $ObjESSExpenserequisitionUI->expe_cost_center = $input->post('expe_cost_center');
        $ObjESSExpenserequisitionUI->expe_statuss = $input->post('expe_statuss');
        $ObjESSExpenserequisitionUI->expe_country = $input->post('expe_country');
        $ObjESSExpenserequisitionUI->expe_total_vat_amount = $input->post('expe_total_vat_amount');
        $ObjESSExpenserequisitionUI->expe_total_withholding_tax_amount = $input->post('expe_total_withholding_tax_amount');
        $ObjESSExpenserequisitionUI->expe_total_net_amount = $input->post('expe_total_net_amount');
        $ObjESSExpenserequisitionUI->expe_transaction_reference = $input->post('expe_transaction_reference');
        $ObjESSExpenserequisitionUI->expe_pay_mode = $input->post('expe_pay_mode');
        $ObjESSExpenserequisitionUI->expe_payment_release_date = $input->post('expe_payment_release_date');
        $ObjESSExpenserequisitionUI->expe_exchange_rate = $input->post('expe_exchange_rate');
        $ObjESSExpenserequisitionUI->expe_total_net_amount_lcy = $input->post('expe_total_net_amount_lcy');
        $ObjESSExpenserequisitionUI->expe_company = $input->post('expe_company');
        $ObjESSExpenserequisitionUI->expe_product_center = $input->post('expe_product_center');
        $ObjESSExpenserequisitionUI->expe_profit_center = $input->post('expe_profit_center');
        $ObjESSExpenserequisitionUI->expe_project_center = $input->post('expe_project_center');
        $ObjESSExpenserequisitionUI->expe_account_type = $input->post('expe_account_type');
        $ObjESSExpenserequisitionUI->expe_account_no = $input->post('expe_account_no');
        $ObjESSExpenserequisitionUI->expe_surrender_status = $input->post('expe_surrender_status');
        $ObjESSExpenserequisitionUI->expe_purpose = $input->post('expe_purpose');
        $ObjESSExpenserequisitionUI->expe_rd_project = $input->post('expe_rd_project');
        $ObjESSExpenserequisitionUI->expe_directors = $input->post('expe_directors');

        $modelResponse = $ObjESSExpenserequisitionUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

       
    public function createLines()
    {
        
        $ObjESSExpenserequisitionUI = new ESSExpenserequisitionUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionUI->expe_lines_date_created=  $input->post('expe_lines_date_created');
        $ObjESSExpenserequisitionUI->expe_lines_no = $input->post('expe_lines_no');
        $ObjESSExpenserequisitionUI->expe_lines_account_no = $input->post('expe_lines_account_no');
        $ObjESSExpenserequisitionUI->expe_lines_account_name = $input->post('expe_lines_account_name');
        $ObjESSExpenserequisitionUI->expe_lines_amount = $input->post('expe_lines_amount');
        $ObjESSExpenserequisitionUI->expe_lines_due_date = $input->post('expe_lines_due_date');
        $ObjESSExpenserequisitionUI->expe_lines_advance_holder = $input->post('expe_lines_advance_holder');
        $ObjESSExpenserequisitionUI->expe_lines_actual_spent = $input->post('expe_lines_actual_spent');
        $ObjESSExpenserequisitionUI->expe_lines_cost_center = $input->post('expe_lines_cost_center');
        $ObjESSExpenserequisitionUI->expe_lines_surrender_date = $input->post('expe_lines_surrender_date');
        $ObjESSExpenserequisitionUI->expe_lines_surrendered = $input->post('expe_lines_surrendered');
        $ObjESSExpenserequisitionUI->expe_lines_date_issued = $input->post('expe_lines_date_issued');
        $ObjESSExpenserequisitionUI->expe_lines_cash_surrender_amount = $input->post('expe_lines_cash_surrender_amount');
        $ObjESSExpenserequisitionUI->expe_lines_surrender_doc_no = $input->post('expe_lines_surrender_doc_no');
        $ObjESSExpenserequisitionUI->expe_lines_date_taken = $input->post('expe_lines_date_taken');
        $ObjESSExpenserequisitionUI->expe_lines_purpose = $input->post('expe_lines_purpose');
        $ObjESSExpenserequisitionUI->expe_lines_country = $input->post('expe_lines_country');
        $ObjESSExpenserequisitionUI->expe_lines_currency_code = $input->post('expe_lines_currency_code');
        $ObjESSExpenserequisitionUI->expe_lines_amount_lcy = $input->post('expe_lines_amount_lcy');
        $ObjESSExpenserequisitionUI->expe_lines_claim_receipt_no = $input->post('expe_lines_claim_receipt_no');
        $ObjESSExpenserequisitionUI->expe_lines_expenditure_date = $input->post('expe_lines_expenditure_date');
        $ObjESSExpenserequisitionUI->expe_lines_attendee_organization_name = $input->post('expe_lines_attendee_organization_name');
        $ObjESSExpenserequisitionUI->expe_lines_status = $input->post('expe_lines_status');
        $ObjESSExpenserequisitionUI->expe_lines_company = $input->post('expe_lines_company');
        $ObjESSExpenserequisitionUI->expe_lines_product_center = $input->post('expe_lines_product_center');
        $ObjESSExpenserequisitionUI->expe_lines_profit_center = $input->post('expe_lines_profit_center');
        $ObjESSExpenserequisitionUI->expe_lines_project = $input->post('expe_lines_project');
        $ObjESSExpenserequisitionUI->expe_lines_rd_project = $input->post('expe_lines_rd_project');
        $ObjESSExpenserequisitionUI->expe_lines_directors = $input->post('expe_lines_directors');

        $modelResponse = $ObjESSExpenserequisitionUI->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        
        $ObjESSExpenserequisitionUI = new ESSExpenserequisitionUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionUI->expe_date_updated =  $input->post('expe_date_updated');
        $ObjESSExpenserequisitionUI->expe_no = $input->post('expe_no');
        $ObjESSExpenserequisitionUI->expe_date = $input->post('expe_date');
        $ObjESSExpenserequisitionUI->expe_currency_code = $input->post('expe_currency_code');
        $ObjESSExpenserequisitionUI->expe_payee = $input->post('expe_payee');
        $ObjESSExpenserequisitionUI->expe_on_behalf_of = $input->post('expe_on_behalf_of');
        $ObjESSExpenserequisitionUI->expe_total_payment_amount = $input->post('expe_total_payment_amount');
        $ObjESSExpenserequisitionUI->expe_paying_bank_account = $input->post('expe_paying_bank_account');
        $ObjESSExpenserequisitionUI->expe_cost_center = $input->post('expe_cost_center');
        $ObjESSExpenserequisitionUI->expe_statuss = $input->post('expe_statuss');
        $ObjESSExpenserequisitionUI->expe_country = $input->post('expe_country');
        $ObjESSExpenserequisitionUI->expe_total_vat_amount = $input->post('expe_total_vat_amount');
        $ObjESSExpenserequisitionUI->expe_total_withholding_tax_amount = $input->post('expe_total_withholding_tax_amount');
        $ObjESSExpenserequisitionUI->expe_total_net_amount = $input->post('expe_total_net_amount');
        $ObjESSExpenserequisitionUI->expe_transaction_reference = $input->post('expe_transaction_reference');
        $ObjESSExpenserequisitionUI->expe_pay_mode = $input->post('expe_pay_mode');
        $ObjESSExpenserequisitionUI->expe_payment_release_date = $input->post('expe_payment_release_date');
        $ObjESSExpenserequisitionUI->expe_exchange_rate = $input->post('expe_exchange_rate');
        $ObjESSExpenserequisitionUI->expe_total_net_amount_lcy = $input->post('expe_total_net_amount_lcy');
        $ObjESSExpenserequisitionUI->expe_company = $input->post('expe_company');
        $ObjESSExpenserequisitionUI->expe_product_center = $input->post('expe_product_center');
        $ObjESSExpenserequisitionUI->expe_profit_center = $input->post('expe_profit_center');
        $ObjESSExpenserequisitionUI->expe_project_center = $input->post('expe_project_center');
        $ObjESSExpenserequisitionUI->expe_account_type = $input->post('expe_account_type');
        $ObjESSExpenserequisitionUI->expe_account_no = $input->post('expe_account_no');
        $ObjESSExpenserequisitionUI->expe_surrender_status = $input->post('expe_surrender_status');
        $ObjESSExpenserequisitionUI->expe_purpose = $input->post('expe_purpose');
        $ObjESSExpenserequisitionUI->expe_rd_project = $input->post('expe_rd_project');
        $ObjESSExpenserequisitionUI->expe_directors = $input->post('expe_directors');
        $ObjESSExpenserequisitionUI->expe_id = $input->post('expe_id');
        $modelResponse = $ObjESSExpenserequisitionUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    public function updateLines()
    {
        
        $ObjESSExpenserequisitionUI = new ESSExpenserequisitionUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionUI->expe_lines_date_created=  $input->post('expe_lines_date_created');
        $ObjESSExpenserequisitionUI->expe_lines_no = $input->post('expe_lines_no');
        $ObjESSExpenserequisitionUI->expe_lines_account_no = $input->post('expe_lines_account_no');
        $ObjESSExpenserequisitionUI->expe_lines_account_name = $input->post('expe_lines_account_name');
        $ObjESSExpenserequisitionUI->expe_lines_amount = $input->post('expe_lines_amount');
        $ObjESSExpenserequisitionUI->expe_lines_due_date = $input->post('expe_lines_due_date');
        $ObjESSExpenserequisitionUI->expe_lines_advance_holder = $input->post('expe_lines_advance_holder');
        $ObjESSExpenserequisitionUI->expe_lines_actual_spent = $input->post('expe_lines_actual_spent');
        $ObjESSExpenserequisitionUI->expe_lines_cost_center = $input->post('expe_lines_cost_center');
        $ObjESSExpenserequisitionUI->expe_lines_surrender_date = $input->post('expe_lines_surrender_date');
        $ObjESSExpenserequisitionUI->expe_lines_surrendered = $input->post('expe_lines_surrendered');
        $ObjESSExpenserequisitionUI->expe_lines_date_issued = $input->post('expe_lines_date_issued');
        $ObjESSExpenserequisitionUI->expe_lines_cash_surrender_amount = $input->post('expe_lines_cash_surrender_amount');
        $ObjESSExpenserequisitionUI->expe_lines_surrender_doc_no = $input->post('expe_lines_surrender_doc_no');
        $ObjESSExpenserequisitionUI->expe_lines_date_taken = $input->post('expe_lines_date_taken');
        $ObjESSExpenserequisitionUI->expe_lines_purpose = $input->post('expe_lines_purpose');
        $ObjESSExpenserequisitionUI->expe_lines_country = $input->post('expe_lines_country');
        $ObjESSExpenserequisitionUI->expe_lines_currency_code = $input->post('expe_lines_currency_code');
        $ObjESSExpenserequisitionUI->expe_lines_amount_lcy = $input->post('expe_lines_amount_lcy');
        $ObjESSExpenserequisitionUI->expe_lines_claim_receipt_no = $input->post('expe_lines_claim_receipt_no');
        $ObjESSExpenserequisitionUI->expe_lines_expenditure_date = $input->post('expe_lines_expenditure_date');
        $ObjESSExpenserequisitionUI->expe_lines_attendee_organization_name = $input->post('expe_lines_attendee_organization_name');
        $ObjESSExpenserequisitionUI->expe_lines_status = $input->post('expe_lines_status');
        $ObjESSExpenserequisitionUI->expe_lines_company = $input->post('expe_lines_company');
        $ObjESSExpenserequisitionUI->expe_lines_product_center = $input->post('expe_lines_product_center');
        $ObjESSExpenserequisitionUI->expe_lines_profit_center = $input->post('expe_lines_profit_center');
        $ObjESSExpenserequisitionUI->expe_lines_project = $input->post('expe_lines_project');
        $ObjESSExpenserequisitionUI->expe_lines_rd_project = $input->post('expe_lines_rd_project');
        $ObjESSExpenserequisitionUI->expe_lines_directors = $input->post('expe_lines_directors');
        $ObjESSExpenserequisitionUI->expe_lines_id = $input->post('expe_lines_id');
        $modelResponse = $ObjESSExpenserequisitionUI->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSExpenserequisitionUI = new ESSExpenserequisitionUI();
        $ObjESSExpenserequisitionUI->dbh = $this->registry->db;
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
            
            $ObjESSExpenserequisitionUI->id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSExpenserequisitionUI->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->show('essexpenserequisitionui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Expense Requisition";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Expense Requisition";
            $this->registry->template->show('essexpenserequisitionui/add_edit');
        }
    }
 }

    