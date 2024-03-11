
<?php
/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Date: 11/29/2023
 * Time: 1.47pm
 * Email : brayoikonya@gmail.com
 * File : ESSExpenserequisitionaccountingUIController.php
 */


 class ESSExpenserequisitionaccountingUIController extends baseController
 {
    public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Expense Requisition Accounting";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Expense Requisition Accounting";
        $this->registry->template->show('essexpenserequisitionaccountingui/index');
 
     }        
    public function create()
    {
        $ObjESSExpenserequisitionaccountingUI = new ESSExpenserequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionaccountingUI->expa_date_created =  $input->post('expa_date_created');
        $ObjESSExpenserequisitionaccountingUI->expa_no = $input->post('expa_no');
        $ObjESSExpenserequisitionaccountingUI->expa_date = $input->post('expa_date');
        $ObjESSExpenserequisitionaccountingUI->expa_currency_code = $input->post('expa_currency_code');
        $ObjESSExpenserequisitionaccountingUI->expa_payee = $input->post('expa_payee');
        $ObjESSExpenserequisitionaccountingUI->expa_on_behald_of = $input->post('expa_on_behald_of');
        $ObjESSExpenserequisitionaccountingUI->expa_total_payment_amount = $input->post('expa_total_payment_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_cost_center = $input->post('expa_cost_center');
        $ObjESSExpenserequisitionaccountingUI->expa_statuss = $input->post('expa_statuss');
        $ObjESSExpenserequisitionaccountingUI->expa_country = $input->post('expa_country');
        $ObjESSExpenserequisitionaccountingUI->expa_total_vat_amount = $input->post('expa_total_vat_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_total_witholding_tax_amount = $input->post('expa_total_witholding_tax_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_total_net_amount = $input->post('expa_total_net_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_current_status = $input->post('expa_current_status');
        $ObjESSExpenserequisitionaccountingUI->expa_transaction_reference_number = $input->post('expa_transaction_reference_number');
        $ObjESSExpenserequisitionaccountingUI->expa_pay_mode = $input->post('expa_pay_mode');
        $ObjESSExpenserequisitionaccountingUI->expa_payment_release_date = $input->post('expa_payment_release_date');
        $ObjESSExpenserequisitionaccountingUI->expa_exachange_rate = $input->post('expa_exachange_rate');
        $ObjESSExpenserequisitionaccountingUI->expa_total_net_amount_lcy = $input->post('expa_total_net_amount_lcy');
        $ObjESSExpenserequisitionaccountingUI->expa_company = $input->post('expa_company');
        $ObjESSExpenserequisitionaccountingUI->expa_product_center = $input->post('expa_product_center');
        $ObjESSExpenserequisitionaccountingUI->expa_profit_center = $input->post('expa_profit_center');
        $ObjESSExpenserequisitionaccountingUI->expa_project_center = $input->post('expa_project_center');
        $ObjESSExpenserequisitionaccountingUI->expa_account_type = $input->post('expa_account_type');
        $ObjESSExpenserequisitionaccountingUI->expa_account_no = $input->post('expa_account_no');
        $ObjESSExpenserequisitionaccountingUI->expa_surrender_status = $input->post('expa_surrender_status');
        $ObjESSExpenserequisitionaccountingUI->expa_purpose = $input->post('expa_purpose');
        $ObjESSExpenserequisitionaccountingUI->expa_rd_project = $input->post('expa_rd_project');
        $ObjESSExpenserequisitionaccountingUI->expa_directors = $input->post('expa_directors');
        $modelResponse = $ObjESSExpenserequisitionaccountingUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    ////
    public function createLines()
    {
        $ObjESSExpenserequisitionaccountingUI = new ESSExpenserequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_created =  $input->post('expa_lines_date_created');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_no = $input->post('expa_lines_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_no = $input->post('expa_lines_account_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_name = $input->post('expa_lines_account_name');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_amount = $input->post('expa_lines_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_due_date = $input->post('expa_lines_due_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_advance_holder = $input->post('expa_lines_advance_holder');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_actual_spent = $input->post('expa_lines_actual_spent');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_cost_center = $input->post('expa_lines_cost_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrender_date = $input->post('expa_lines_surrender_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrendered = $input->post('expa_lines_surrendered');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_issued = $input->post('expa_lines_date_issued');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_cash_surrender_amt = $input->post('expa_lines_cash_surrender_amt');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrender_doc_no = $input->post('expa_lines_surrender_doc_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_taken = $input->post('expa_lines_date_taken');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_purpose = $input->post('expa_lines_purpose');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_country = $input->post('expa_lines_country');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_currency_code = $input->post('expa_lines_currency_code');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_amount_lcy = $input->post('expa_lines_amount_lcy');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_claim_receipt_no = $input->post('expa_lines_claim_receipt_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_expenditure_date = $input->post('expa_lines_expenditure_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_attendee_organisation_names = $input->post('expa_lines_attendee_organisation_names');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_type = $input->post('expa_lines_account_type');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_company = $input->post('expa_lines_company');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_product_center = $input->post('expa_lines_product_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_profit_center = $input->post('expa_lines_profit_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_project = $input->post('expa_lines_project');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_rd_project = $input->post('expa_lines_rd_project');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_directors = $input->post('expa_lines_directors');
        $modelResponse = $ObjESSExpenserequisitionaccountingUI->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }



    public function update()
    {
        $ObjESSExpenserequisitionaccountingUI = new ESSExpenserequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionaccountingUI->expa_date_updated = $input->post('expa_date_updated');
        $ObjESSExpenserequisitionaccountingUI->expa_no = $input->post('expa_no');
        $ObjESSExpenserequisitionaccountingUI->expa_date = $input->post('expa_date');
        $ObjESSExpenserequisitionaccountingUI->expa_currency_code = $input->post('expa_currency_code');
        $ObjESSExpenserequisitionaccountingUI->expa_payee = $input->post('expa_payee');
        $ObjESSExpenserequisitionaccountingUI->expa_on_behald_of = $input->post('expa_on_behald_of');
        $ObjESSExpenserequisitionaccountingUI->expa_total_payment_amount = $input->post('expa_total_payment_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_cost_center = $input->post('expa_cost_center');
        $ObjESSExpenserequisitionaccountingUI->expa_statuss = $input->post('expa_statuss');
        $ObjESSExpenserequisitionaccountingUI->expa_country = $input->post('expa_country');
        $ObjESSExpenserequisitionaccountingUI->expa_total_vat_amount = $input->post('expa_total_vat_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_total_witholding_tax_amount = $input->post('expa_total_witholding_tax_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_total_net_amount = $input->post('expa_total_net_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_current_status = $input->post('expa_current_status');
        $ObjESSExpenserequisitionaccountingUI->expa_transaction_reference_number = $input->post('expa_transaction_reference_number');
        $ObjESSExpenserequisitionaccountingUI->expa_pay_mode = $input->post('expa_pay_mode');
        $ObjESSExpenserequisitionaccountingUI->expa_payment_release_date = $input->post('expa_payment_release_date');
        $ObjESSExpenserequisitionaccountingUI->expa_exachange_rate = $input->post('expa_exachange_rate');
        $ObjESSExpenserequisitionaccountingUI->expa_total_net_amount_lcy = $input->post('expa_total_net_amount_lcy');
        $ObjESSExpenserequisitionaccountingUI->expa_company = $input->post('expa_company');
        $ObjESSExpenserequisitionaccountingUI->expa_product_center = $input->post('expa_product_center');
        $ObjESSExpenserequisitionaccountingUI->expa_profit_center = $input->post('expa_profit_center');
        $ObjESSExpenserequisitionaccountingUI->expa_project_center = $input->post('expa_project_center');
        $ObjESSExpenserequisitionaccountingUI->expa_account_type = $input->post('expa_account_type');
        $ObjESSExpenserequisitionaccountingUI->expa_account_no = $input->post('expa_account_no');
        $ObjESSExpenserequisitionaccountingUI->expa_surrender_status = $input->post('expa_surrender_status');
        $ObjESSExpenserequisitionaccountingUI->expa_purpose = $input->post('expa_purpose');
        $ObjESSExpenserequisitionaccountingUI->expa_rd_project = $input->post('expa_rd_project');
        $ObjESSExpenserequisitionaccountingUI->expa_directors = $input->post('expa_directors');
        $ObjESSExpenserequisitionaccountingUI->expa_id = $input->post('expa_id');
        $modelResponse = $ObjESSExpenserequisitionaccountingUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function updateLines()
    {
        $ObjESSExpenserequisitionaccountingUI = new ESSExpenserequisitionaccountingUI();
        $input = new CI_Input();
        $ObjESSExpenserequisitionaccountingUI->dbh = $this->registry->db;
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_updated = $input->post('expa_lines_date_updated');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_no = $input->post('expa_lines_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_no = $input->post('expa_lines_account_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_name = $input->post('expa_lines_account_name');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_amount = $input->post('expa_lines_amount');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_due_date = $input->post('expa_lines_due_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_advance_holder = $input->post('expa_lines_advance_holder');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_actual_spent = $input->post('expa_lines_actual_spent');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_cost_center = $input->post('expa_lines_cost_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrender_date = $input->post('expa_lines_surrender_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrendered = $input->post('expa_lines_surrendered');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_issued = $input->post('expa_lines_date_issued');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_cash_surrender_amt = $input->post('expa_lines_cash_surrender_amt');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_surrender_doc_no = $input->post('expa_lines_surrender_doc_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_date_taken = $input->post('expa_lines_date_taken');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_purpose = $input->post('expa_lines_purpose');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_country = $input->post('expa_lines_country');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_currency_code = $input->post('expa_lines_currency_code');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_amount_lcy = $input->post('expa_lines_amount_lcy');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_claim_receipt_no = $input->post('expa_lines_claim_receipt_no');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_expenditure_date = $input->post('expa_lines_expenditure_date');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_attendee_organisation_names = $input->post('expa_lines_attendee_organisation_names');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_account_type = $input->post('expa_lines_account_type');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_company = $input->post('expa_lines_company');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_product_center = $input->post('expa_lines_product_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_profit_center = $input->post('expa_lines_profit_center');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_project = $input->post('expa_lines_project');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_rd_project = $input->post('expa_lines_rd_project');
        $ObjESSExpenserequisitionaccountingUI->expa_lines_directors = $input->post('expa_lines_directors');
        $modelResponse = $ObjESSExpenserequisitionaccountingUI->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSExpenserequisitionaccountingUI = new ESSExpenserequisitionaccountingUI();
        $ObjESSExpenserequisitionaccountingUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Expense Requisition Accounting";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSExpenserequisitionaccountingUI->id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSExpenserequisitionaccountingUI->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->show('essexpenserequisitionaccountingui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Expense Requisition Accounting";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Expense Requisition Accounting";
            $this->registry->template->show('essexpenserequisitionaccountingui/add_edit');
        }
    }
 }

    