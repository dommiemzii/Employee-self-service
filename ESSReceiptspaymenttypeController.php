<?php
/**
 * Author : Faith H wachira.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : faithhopewachira@gmail.com
 * File : ESSReceiptspaymenttypeController.php
 */

 class ESSReceiptspaymenttypeController extends baseController
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
		$ObjLogs->log_description = "View Receipt Payment Types";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('ess_receipt_payment_types/index');
 
     }
    
    public function create()
    {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $input = new CI_Input();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $ObjESSReceiptspaymenttype->rpt_date_created = date("Y-m-d H:i:s");
        $ObjESSReceiptspaymenttype->rpt_code = $input->post('rpt_code');
        $ObjESSReceiptspaymenttype->rpt_description = $input->post('rpt_description');
        $ObjESSReceiptspaymenttype->rpt_account_type = $input->post('rpt_account_type');
        $ObjESSReceiptspaymenttype->rpt_type = $input->post('rpt_type');
        $ObjESSReceiptspaymenttype->rpt_vat_chargeable = $input->post('rpt_vat_chargeable');
        $ObjESSReceiptspaymenttype->rpt_vat_code = $input->post('rpt_vat_code');
        $ObjESSReceiptspaymenttype->rpt_withholding_tax_Code = $input->post('rpt_withholding_tax_Code');
        $ObjESSReceiptspaymenttype->rpt_default_grouping = $input->post('rpt_default_grouping');
        $ObjESSReceiptspaymenttype->rpt_g_l_account = $input->post('rpt_g_l_account');
        $ObjESSReceiptspaymenttype->rpt_pending_voucher = $input->post('rpt_pending_voucher');
        $ObjESSReceiptspaymenttype->rpt_bank_account = $input->post('rpt_bank_account');
        $ObjESSReceiptspaymenttype->rpt_payment_reference = $input->post('rpt_payment_reference');
        $ObjESSReceiptspaymenttype->rpt_transation_remarks = $input->post('rpt_transation_remarks');
        $ObjESSReceiptspaymenttype->rpt_customer_payment_on_account = $input->post('rpt_customer_payment_on_account');
        $ObjESSReceiptspaymenttype->rpt_direct_expense = $input->post('rpt_direct_expense');
        $ObjESSReceiptspaymenttype->rpt_calculate_retention = $input->post('rpt_calculate_retention');
        $ObjESSReceiptspaymenttype->rpt_blocked = $input->post('rpt_blocked');
        $ObjESSReceiptspaymenttype->rpt_based_on_travel_rates_table = $input->post('rpt_based_on_travel_rates_table');
        $ObjESSReceiptspaymenttype->rpt_vat_withheld_code = $input->post('rpt_vat_withheld_code');
        $ObjESSReceiptspaymenttype->rpt_levy_receipt = $input->post('rpt_levy_receipt');
        $modelResponse = $ObjESSReceiptspaymenttype->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    

    public function update()
    {
        
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $input = new CI_Input();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $ObjESSReceiptspaymenttype->rpt_date_updated = date("Y-m-d H:i:s");
        $ObjESSReceiptspaymenttype->rpt_code = $input->post('rpt_code');
        $ObjESSReceiptspaymenttype->rpt_description = $input->post('rpt_description');
        $ObjESSReceiptspaymenttype->rpt_account_type = $input->post('rpt_account_type');
        $ObjESSReceiptspaymenttype->rpt_type = $input->post('rpt_type');
        $ObjESSReceiptspaymenttype->rpt_vat_chargeable = $input->post('rpt_vat_chargeable');
        $ObjESSReceiptspaymenttype->rpt_vat_code = $input->post('rpt_vat_code');
        $ObjESSReceiptspaymenttype->rpt_withholding_tax_Code = $input->post('rpt_withholding_tax_Code');
        $ObjESSReceiptspaymenttype->rpt_default_grouping = $input->post('rpt_default_grouping');
        $ObjESSReceiptspaymenttype->rpt_g_l_account = $input->post('rpt_g_l_account');
        $ObjESSReceiptspaymenttype->rpt_pending_voucher = $input->post('rpt_pending_voucher');
        $ObjESSReceiptspaymenttype->rpt_bank_account = $input->post('rpt_bank_account');
        $ObjESSReceiptspaymenttype->rpt_payment_reference = $input->post('rpt_payment_reference');
        $ObjESSReceiptspaymenttype->rpt_transation_remarks = $input->post('rpt_transation_remarks');
        $ObjESSReceiptspaymenttype->rpt_customer_payment_on_account = $input->post('rpt_customer_payment_on_account');
        $ObjESSReceiptspaymenttype->rpt_direct_expense = $input->post('rpt_direct_expense');
        $ObjESSReceiptspaymenttype->rpt_calculate_retention = $input->post('rpt_calculate_retention');
        $ObjESSReceiptspaymenttype->rpt_blocked = $input->post('rpt_blocked');
        $ObjESSReceiptspaymenttype->rpt_based_on_travel_rates_table = $input->post('rpt_based_on_travel_rates_table');
        $ObjESSReceiptspaymenttype->rpt_vat_withheld_code = $input->post('rpt_vat_withheld_code');
        $ObjESSReceiptspaymenttype->rpt_levy_receipt = $input->post('rpt_levy_receipt');
        $ObjESSReceiptspaymenttype->rpt_id = $input->post('rpt_id');
        $modelResponse = $ObjESSReceiptspaymenttype->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    public function readAll() {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSReceiptspaymenttype->readAll();
        echo json_encode($modelResponse);
    }
    
    public function readTr() {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSReceiptspaymenttype->readTr();
        echo json_encode($modelResponse);
    }
    
    public function readClaim() {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSReceiptspaymenttype->readClaim();
        echo json_encode($modelResponse);
    }
    
    public function readEr() {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSReceiptspaymenttype->readEr();
        echo json_encode($modelResponse);
    }
    
    public function readPayment() {
        $ObjESSReceiptspaymenttype = new ESSReceiptspaymenttype();
        $ObjESSReceiptspaymenttype->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSReceiptspaymenttype->readPayment();
        echo json_encode($modelResponse);
    }
    
    
 }

    