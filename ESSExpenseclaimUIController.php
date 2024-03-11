
<?php
/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Date: 11/30/2023
 * Time: 1.47pm
 * Email : brayoikonya@gmail.com
 * File : ESSExpenseclaimUIController.php
 */

 class ESSExpenseclaimUIController extends baseController
 {
    public function index()
    {
       //UserRoles::getPass("VIEW_ORDERS");
        
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Expense Claim";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Expense Claim";
        $this->registry->template->show('essexpenseclaimui/index');

    }   
    public function create()
    {       
        $ObjESSExpenseclaimUI = new ESSExpenseclaimUI();
        $input = new CI_Input();
        $ObjESSExpenseclaimUI->dbh = $this->registry->db;
        $ObjESSExpenseclaimUI->expc_date_created =  date("Y-m-d H:i:s");
        $ObjESSExpenseclaimUI->expc_no = $input->post('expc_no');
        $ObjESSExpenseclaimUI->expc_date = $input->post('expc_date');
        $ObjESSExpenseclaimUI->expc_currency_code = $input->post('expc_currency_code');
        $ObjESSExpenseclaimUI->expc_payee = $input->post('expc_payee');
        $ObjESSExpenseclaimUI->expc_on_behald_of = $input->post('expc_on_behald_of');
        $ObjESSExpenseclaimUI->expc_total_payment_amount = $input->post('expc_total_payment_amount');
        $ObjESSExpenseclaimUI->expc_cost_center = $input->post('expc_cost_center');
        $ObjESSExpenseclaimUI->expc_statuss = $input->post('expc_statuss');
        $ObjESSExpenseclaimUI->expc_country = $input->post('expc_country');
        $ObjESSExpenseclaimUI->expc_total_vat_amount = $input->post('expc_total_vat_amount');
        $ObjESSExpenseclaimUI->expc_total_witholding_tax_amount = $input->post('expc_total_witholding_tax_amount');
        $ObjESSExpenseclaimUI->expc_total_net_amount = $input->post('expc_total_net_amount');
        $ObjESSExpenseclaimUI->expc_transaction_reference_number = $input->post('expc_transaction_reference_number');
        $ObjESSExpenseclaimUI->expc_pay_mode = $input->post('expc_pay_mode');
        $ObjESSExpenseclaimUI->expc_payment_release_date = $input->post('expc_payment_release_date');
        $ObjESSExpenseclaimUI->expc_exachange_rate = $input->post('expc_exachange_rate');
        $ObjESSExpenseclaimUI->expc_total_net_amount_lcy = $input->post('expc_total_net_amount_lcy');
        $ObjESSExpenseclaimUI->expc_company = $input->post('expc_company');
        $ObjESSExpenseclaimUI->expc_product_center = $input->post('expc_product_center');
        $ObjESSExpenseclaimUI->expc_profit_center = $input->post('expc_profit_center');
        $ObjESSExpenseclaimUI->expc_project_center = $input->post('expc_project_center');
        $ObjESSExpenseclaimUI->expc_account_type = $input->post('expc_account_type');
        $ObjESSExpenseclaimUI->expc_account_no = $input->post('expc_account_no');
        $ObjESSExpenseclaimUI->expc_surrender_status = $input->post('expc_surrender_status');
        $ObjESSExpenseclaimUI->expc_purpose = $input->post('expc_purpose');
        $ObjESSExpenseclaimUI->expc_rd_project = $input->post('expc_rd_project');
        $ObjESSExpenseclaimUI->expc_directors = $input->post('expc_directors');
        $modelResponse = $ObjESSExpenseclaimUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    public function createLines()
    {       
        $ObjESSExpenseclaimUI = new ESSExpenseclaimUI();
        $input = new CI_Input();
        $ObjESSExpenseclaimUI->dbh = $this->registry->db;
        $ObjESSExpenseclaimUI->expc_lines_date_created =  date("Y-m-d H:i:s");
        $ObjESSExpenseclaimUI->expc_lines_no = $input->post('expc_lines_no');
        $ObjESSExpenseclaimUI->expc_lines_account_no = $input->post('expc_lines_account_no');
        $ObjESSExpenseclaimUI->expc_lines_account_name = $input->post('expc_lines_account_name');
        $ObjESSExpenseclaimUI->expc_lines_amount = $input->post('expc_lines_amount');
        $ObjESSExpenseclaimUI->expc_lines_due_date = $input->post('expc_lines_due_date');
        $ObjESSExpenseclaimUI->expc_lines_advance_holder = $input->post('expc_lines_advance_holder');
        $ObjESSExpenseclaimUI->expc_lines_actual_spent = $input->post('expc_lines_actual_spent');
        $ObjESSExpenseclaimUI->expc_lines_cost_center = $input->post('expc_lines_cost_center');
        $ObjESSExpenseclaimUI->expc_lines_surrender_date = $input->post('expc_lines_surrender_date');
        $ObjESSExpenseclaimUI->expc_lines_surrendered = $input->post('expc_lines_surrendered');
        $ObjESSExpenseclaimUI->expc_lines_date_issued = $input->post('expc_lines_date_issued');
        $ObjESSExpenseclaimUI->expc_lines_cash_surrender_amt = $input->post('expc_lines_cash_surrender_amt');
        $ObjESSExpenseclaimUI->expc_lines_surrender_doc_no = $input->post('expc_lines_surrender_doc_no');
        $ObjESSExpenseclaimUI->expc_lines_date_taken = $input->post('expc_lines_date_taken');
        $ObjESSExpenseclaimUI->expc_lines_purpose = $input->post('expc_lines_purpose');
        $ObjESSExpenseclaimUI->expc_lines_country = $input->post('expc_lines_country');
        $ObjESSExpenseclaimUI->expc_lines_currecy_code = $input->post('expc_lines_currecy_code');
        $ObjESSExpenseclaimUI->expc_lines_amount_lcy = $input->post('expc_lines_amount_lcy');
        $ObjESSExpenseclaimUI->expc_lines_claim_reciept_no = $input->post('expc_lines_claim_reciept_no');
        $ObjESSExpenseclaimUI->expc_lines_expenditure_date = $input->post('expc_lines_expenditure_date');
        $ObjESSExpenseclaimUI->expc_lines_organization_names = $input->post('expc_lines_organization_names');
        $ObjESSExpenseclaimUI->expc_lines_account_type = $input->post('expc_lines_account_type');
        $ObjESSExpenseclaimUI->expc_lines_company = $input->post('expc_lines_company');
        $ObjESSExpenseclaimUI->expc_lines_product_center = $input->post('expc_lines_product_center');
        $ObjESSExpenseclaimUI->expc_lines_profit_center = $input->post('expc_lines_profit_center');
        $ObjESSExpenseclaimUI->expc_lines_project = $input->post('expc_lines_project');
        $ObjESSExpenseclaimUI->expc_lines_rd_project = $input->post('expc_lines_rd_project');
        $ObjESSExpenseclaimUI->expc_lines_directors = $input->post('expc_lines_directors');
        $modelResponse = $ObjESSExpenseclaimUI->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        $ObjESSExpenseclaimUI = new ESSExpenseclaimUI();
        $input = new CI_Input();
        $ObjESSExpenseclaimUI->dbh = $this->registry->db;
        $ObjESSExpenseclaimUI->expc_date_updated =  date("Y-m-d H:i:s");
        $ObjESSExpenseclaimUI->expc_no = $input->post('expc_no');
        $ObjESSExpenseclaimUI->expc_date = $input->post('expc_date');
        $ObjESSExpenseclaimUI->expc_currency_code = $input->post('expc_currency_code');
        $ObjESSExpenseclaimUI->expc_payee = $input->post('expc_payee');
        $ObjESSExpenseclaimUI->expc_on_behald_of = $input->post('expc_on_behald_of');
        $ObjESSExpenseclaimUI->expc_total_payment_amount = $input->post('expc_total_payment_amount');
        $ObjESSExpenseclaimUI->expc_cost_center = $input->post('expc_cost_center');
        $ObjESSExpenseclaimUI->expc_statuss = $input->post('expc_statuss');
        $ObjESSExpenseclaimUI->expc_country = $input->post('expc_country');
        $ObjESSExpenseclaimUI->expc_total_vat_amount = $input->post('expc_total_vat_amount');
        $ObjESSExpenseclaimUI->expc_total_witholding_tax_amount = $input->post('expc_total_witholding_tax_amount');
        $ObjESSExpenseclaimUI->expc_total_net_amount = $input->post('expc_total_net_amount');
        $ObjESSExpenseclaimUI->expc_transaction_reference_number = $input->post('expc_transaction_reference_number');
        $ObjESSExpenseclaimUI->expc_pay_mode = $input->post('expc_pay_mode');
        $ObjESSExpenseclaimUI->expc_payment_release_date = $input->post('expc_payment_release_date');
        $ObjESSExpenseclaimUI->expc_exachange_rate = $input->post('expc_exachange_rate');
        $ObjESSExpenseclaimUI->expc_total_net_amount_lcy = $input->post('expc_total_net_amount_lcy');
        $ObjESSExpenseclaimUI->expc_company = $input->post('expc_company');
        $ObjESSExpenseclaimUI->expc_product_center = $input->post('expc_product_center');
        $ObjESSExpenseclaimUI->expc_profit_center = $input->post('expc_profit_center');
        $ObjESSExpenseclaimUI->expc_project_center = $input->post('expc_project_center');
        $ObjESSExpenseclaimUI->expc_account_type = $input->post('expc_account_type');
        $ObjESSExpenseclaimUI->expc_account_no = $input->post('expc_account_no');
        $ObjESSExpenseclaimUI->expc_surrender_status = $input->post('expc_surrender_status');
        $ObjESSExpenseclaimUI->expc_purpose = $input->post('expc_purpose');
        $ObjESSExpenseclaimUI->expc_rd_project = $input->post('expc_rd_project');
        $ObjESSExpenseclaimUI->expc_directors = $input->post('expc_directors');
        $ObjESSExpenseclaimUI->expc_id = $input->post('expc_id');
        $modelResponse = $ObjESSExpenseclaimUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function updateLines()
    {
        $ObjESSExpenseclaimUI = new ESSExpenseclaimUI();
        $input = new CI_Input();
        $ObjESSExpenseclaimUI->dbh = $this->registry->db;
        $ObjESSExpenseclaimUI->expc_lines_date_updated =  date("Y-m-d H:i:s");
        $ObjESSExpenseclaimUI->expc_lines_no = $input->post('expc_lines_no');
        $ObjESSExpenseclaimUI->expc_lines_account_no = $input->post('expc_lines_account_no');
        $ObjESSExpenseclaimUI->expc_lines_account_name = $input->post('expc_lines_account_name');
        $ObjESSExpenseclaimUI->expc_lines_amount = $input->post('expc_lines_amount');
        $ObjESSExpenseclaimUI->expc_lines_due_date = $input->post('expc_lines_due_date');
        $ObjESSExpenseclaimUI->expc_lines_advance_holder = $input->post('expc_lines_advance_holder');
        $ObjESSExpenseclaimUI->expc_lines_actual_spent = $input->post('expc_lines_actual_spent');
        $ObjESSExpenseclaimUI->expc_lines_cost_center = $input->post('expc_lines_cost_center');
        $ObjESSExpenseclaimUI->expc_lines_surrender_date = $input->post('expc_lines_surrender_date');
        $ObjESSExpenseclaimUI->expc_lines_surrendered = $input->post('expc_lines_surrendered');
        $ObjESSExpenseclaimUI->expc_lines_date_issued = $input->post('expc_lines_date_issued');
        $ObjESSExpenseclaimUI->expc_lines_cash_surrender_amt = $input->post('expc_lines_cash_surrender_amt');
        $ObjESSExpenseclaimUI->expc_lines_surrender_doc_no = $input->post('expc_lines_surrender_doc_no');
        $ObjESSExpenseclaimUI->expc_lines_date_taken = $input->post('expc_lines_date_taken');
        $ObjESSExpenseclaimUI->expc_lines_purpose = $input->post('expc_lines_purpose');
        $ObjESSExpenseclaimUI->expc_lines_country = $input->post('expc_lines_country');
        $ObjESSExpenseclaimUI->expc_lines_currecy_code = $input->post('expc_lines_currecy_code');
        $ObjESSExpenseclaimUI->expc_lines_amount_lcy = $input->post('expc_lines_amount_lcy');
        $ObjESSExpenseclaimUI->expc_lines_claim_reciept_no = $input->post('expc_lines_claim_reciept_no');
        $ObjESSExpenseclaimUI->expc_lines_expenditure_date = $input->post('expc_lines_expenditure_date');
        $ObjESSExpenseclaimUI->expc_lines_organization_names = $input->post('expc_lines_organization_names');
        $ObjESSExpenseclaimUI->expc_lines_account_type = $input->post('expc_lines_account_type');
        $ObjESSExpenseclaimUI->expc_lines_company = $input->post('expc_lines_company');
        $ObjESSExpenseclaimUI->expc_lines_product_center = $input->post('expc_lines_product_center');
        $ObjESSExpenseclaimUI->expc_lines_profit_center = $input->post('expc_lines_profit_center');
        $ObjESSExpenseclaimUI->expc_lines_project = $input->post('expc_lines_project');
        $ObjESSExpenseclaimUI->expc_lines_rd_project = $input->post('expc_lines_rd_project');
        $ObjESSExpenseclaimUI->expc_lines_directors = $input->post('expc_lines_directors');
        $ObjESSExpenseclaimUI->expc_lines_id = $input->post('expc_lines_id');
        $modelResponse = $ObjESSExpenseclaimUI->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSESSExpenseclaimUI = new ESSExpenseclaimUI();
        $ObjESSESSExpenseclaimUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Expense Claim";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSExpenseclaimUI->id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSExpenseclaimUI->detail();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->show('essexpenseclaimui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Expense Claim";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Expense Claim";
            $this->registry->template->show('essexpenseclaimui/add_edit');
        }
    }
 }

    