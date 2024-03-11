<?php
/**
 * Author : Willice Opalo.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : williceopalo11@gmail.com
 * File : ESSTravelRequisitionUIController.php
 */

 class ESSTravelRequisitionUIController extends baseController {
     
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
    
    public function index() {
        //UserRoles::getPass("VIEW_ORDERS");
        $this->registry->template->t_ = $this->registry->t_;
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Travel Requisition";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Travel Requisition";
        $this->registry->template->show('esstravelrequisitionui/index');
 
    }
    
    public function addLine()
    {
        //UserRoles::getPass("VIEW_ORDERS");
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Add Travel Requisition Line view";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
 
        $input = new CI_Input();

        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "New Travel Requisition Line";
        $this->registry->template->_trav_id = $input->get_post('trav_id');
        $this->registry->template->_desc = $input->get_post('desc');
        $this->registry->template->show('esstravelrequisitionui/add_edit_lines');
 
    }
     
    //
    public function create() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        /*
        trav_document_no=&trav_date=2024-01-10&trav_payee=JARED+OKONGO+MOMANYI&trav_amount=0&trav_department=888&trav_country=50&trav_posting_description=test&trav_designation=Software+Developer&trav_date_of_departure=2024-01-10+10%3A52%3A50&trav_date_of_arrival=2024-01-10+10%3A51%3A20&trav_date_of_return=2024-01-11+12%3A51%3A21&trav_no_of_days=1
        trav_transport_destination=Area+1&trav_transport_amount=1000&trav_transport_purpose=test&trav_transport_travel_options=Bus
        trav_accomodation_type_breakfast=&trav_accomodation_type_lunch=&trav_accomodation_type_dinner=&trav_accomodation_type_unit_amount=500&trav_accomodation_type_amount=500&trav_accomodation_type_purpose=test
        trav_per_diem_amount=0&frm_def=&trav_per_diem_purpose=&frm_def=
        */
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_document_no = $input->post('trav_document_no');
        $ObjESSTravelRequisitionUI->trav_date = $input->post('trav_date');
        $ObjESSTravelRequisitionUI->trav_account_no = $input->post('trav_account_no');
        $ObjESSTravelRequisitionUI->trav_payee = $input->post('trav_payee');
        
        $ObjESSTravelRequisitionUI->trav_designation = $input->post('trav_designation');
        $ObjESSTravelRequisitionUI->trav_department = $input->post('trav_department');
        $ObjESSTravelRequisitionUI->trav_country = $input->post('trav_country');
        $ObjESSTravelRequisitionUI->trav_company = $input->post('trav_company');
        $ObjESSTravelRequisitionUI->trav_project_code = $input->post('trav_project_code');
        $ObjESSTravelRequisitionUI->trav_directors_code = $input->post('trav_directors_code');
        $ObjESSTravelRequisitionUI->trav_posting_description = $input->post('trav_posting_description');
        $ObjESSTravelRequisitionUI->trav_date_of_departure = $input->post('trav_date_of_departure');
        $ObjESSTravelRequisitionUI->trav_date_of_arrival = $input->post('trav_date_of_arrival');
        $ObjESSTravelRequisitionUI->trav_date_of_return = $input->post('trav_date_of_return');
        $ObjESSTravelRequisitionUI->trav_no_of_days = $input->post('trav_no_of_days');
        $ObjESSTravelRequisitionUI->trav_currency_code = $input->post('trav_currency_code');
        
        $ObjESSTravelRequisitionUI->trav_transport_destination = $input->post('trav_transport_destination');
        $ObjESSTravelRequisitionUI->trav_transport_amount = $input->post('trav_transport_amount');
        $ObjESSTravelRequisitionUI->trav_transport_purpose = $input->post('trav_transport_purpose');
        $ObjESSTravelRequisitionUI->trav_transport_travel_options = $input->post('trav_transport_travel_options');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_breakfast = $input->post('trav_accomodation_type_breakfast');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_lunch = $input->post('trav_accomodation_type_lunch');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_dinner = $input->post('trav_accomodation_type_dinner');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_unit_amount = $input->post('trav_accomodation_type_unit_amount');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_amount = $input->post('trav_accomodation_type_amount');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_purpose = $input->post('trav_accomodation_type_purpose');
        $ObjESSTravelRequisitionUI->trav_per_diem_amount = $input->post('trav_per_diem_amount');
        $ObjESSTravelRequisitionUI->trav_per_diem_purpose = $input->post('trav_per_diem_purpose');
        $ObjESSTravelRequisitionUI->trav_other_description = $input->post('trav_other_description');
        $ObjESSTravelRequisitionUI->trav_other_amount = $input->post('trav_other_amount');
        //$ObjESSTravelRequisitionUI->trav_other_actual_spent = $input->post('trav_other_actual_spent');
        //$ObjESSTravelRequisitionUI->trav_other_receipt_amount = $input->post('trav_other_receipt_amount');
        //$ObjESSTravelRequisitionUI->trav_other_cash_claim_amount = $input->post('trav_other_cash_claim_amount');
        //trav_other_description trav_other_amount trav_other_actual_spent trav_other_receipt_amount trav_other_cash_claim_amount
        
        $ObjESSTravelRequisitionUI->trav_amount = $ObjESSTravelRequisitionUI->trav_transport_amount + $ObjESSTravelRequisitionUI->trav_accomodation_type_amount + $ObjESSTravelRequisitionUI->trav_per_diem_amount + $ObjESSTravelRequisitionUI->trav_other_amount;
        
        $modelResponse = $ObjESSTravelRequisitionUI->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
   
    //
    public function createLines() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_lines_date_created =  date("Y-m-d H:i:s");
        //$ObjESSTravelRequisitionUI->trav_lines_no_no = $input->post('trav_lines_no_no');
        //$ObjESSTravelRequisitionUI->trav_lines_no = $input->post('trav_lines_no');
        //$ObjESSTravelRequisitionUI->trav_lines_date = $input->post('trav_lines_date');
        $ObjESSTravelRequisitionUI->trav_lines_travel_type = $input->post('trav_lines_travel_type');
        $ObjESSTravelRequisitionUI->trav_lines_travel_options = $input->post('trav_lines_travel_options');
        $ObjESSTravelRequisitionUI->trav_lines_accomodations = $input->post('trav_lines_accomodations');
        $ObjESSTravelRequisitionUI->trav_lines_advance_type = $input->post('trav_lines_advance_type');
        $ObjESSTravelRequisitionUI->trav_lines_account_no = $input->post('trav_lines_account_no');
        $ObjESSTravelRequisitionUI->trav_lines_account_name = $input->post('trav_lines_account_name');
        $ObjESSTravelRequisitionUI->trav_lines_destination_code = $input->post('trav_lines_destination_code');
        $ObjESSTravelRequisitionUI->trav_lines_no_of_days = $input->post('trav_lines_no_of_days');
        $ObjESSTravelRequisitionUI->trav_lines_daily_rates_amount = $input->post('trav_lines_daily_rates_amount');
        $ObjESSTravelRequisitionUI->trav_lines_amount = $input->post('trav_lines_amount');
        $ObjESSTravelRequisitionUI->trav_lines_advance_holder = $input->post('trav_lines_advance_holder');
        $ObjESSTravelRequisitionUI->trav_lines_bank = $input->post('trav_lines_bank');
        $ObjESSTravelRequisitionUI->trav_lines_purpose = $input->post('trav_lines_purpose');
        $ObjESSTravelRequisitionUI->trav_lines_due_date = $input->post('trav_lines_due_date');
        $ObjESSTravelRequisitionUI->trav_lines_department = $input->post('trav_lines_department');
        $ObjESSTravelRequisitionUI->trav_lines_country = $input->post('trav_lines_country');
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $modelResponse = $ObjESSTravelRequisitionUI->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function update() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_updated =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_document_no = $input->post('trav_document_no');
        $ObjESSTravelRequisitionUI->trav_date = $input->post('trav_date');
        $ObjESSTravelRequisitionUI->trav_account_no = $input->post('trav_account_no');
        $ObjESSTravelRequisitionUI->trav_payee = $input->post('trav_payee');
        //$ObjESSTravelRequisitionUI->trav_amount = $input->post('trav_amount');
        $ObjESSTravelRequisitionUI->trav_designation = $input->post('trav_designation');
        $ObjESSTravelRequisitionUI->trav_department = $input->post('trav_department');
        $ObjESSTravelRequisitionUI->trav_country = $input->post('trav_country');
        $ObjESSTravelRequisitionUI->trav_company = $input->post('trav_company');
        $ObjESSTravelRequisitionUI->trav_project_code = $input->post('trav_project_code');
        $ObjESSTravelRequisitionUI->trav_directors_code = $input->post('trav_directors_code');
        $ObjESSTravelRequisitionUI->trav_posting_description = $input->post('trav_posting_description');
        $ObjESSTravelRequisitionUI->trav_date_of_departure = $input->post('trav_date_of_departure');
        $ObjESSTravelRequisitionUI->trav_date_of_arrival = $input->post('trav_date_of_arrival');
        $ObjESSTravelRequisitionUI->trav_date_of_return = $input->post('trav_date_of_return');
        $ObjESSTravelRequisitionUI->trav_no_of_days = $input->post('trav_no_of_days');
        $ObjESSTravelRequisitionUI->trav_currency_code = $input->post('trav_currency_code');
        
        $ObjESSTravelRequisitionUI->trav_transport_destination = $input->post('trav_transport_destination');
        $ObjESSTravelRequisitionUI->trav_transport_amount = $input->post('trav_transport_amount');
        $ObjESSTravelRequisitionUI->trav_transport_purpose = $input->post('trav_transport_purpose');
        $ObjESSTravelRequisitionUI->trav_transport_travel_options = $input->post('trav_transport_travel_options');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_breakfast = $input->post('trav_accomodation_type_breakfast');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_lunch = $input->post('trav_accomodation_type_lunch');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_dinner = $input->post('trav_accomodation_type_dinner');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_unit_amount = $input->post('trav_accomodation_type_unit_amount');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_amount = $input->post('trav_accomodation_type_amount');
        $ObjESSTravelRequisitionUI->trav_accomodation_type_purpose = $input->post('trav_accomodation_type_purpose');
        $ObjESSTravelRequisitionUI->trav_per_diem_amount = $input->post('trav_per_diem_amount');
        $ObjESSTravelRequisitionUI->trav_per_diem_purpose = $input->post('trav_per_diem_purpose');
        $ObjESSTravelRequisitionUI->trav_other_description = $input->post('trav_other_description');
        $ObjESSTravelRequisitionUI->trav_other_amount = $input->post('trav_other_amount');
        
        //trav_actual_spent trav_receipt_amount trav_cash_claim_amount
        //trav_transport_actual_spent trav_transport_receipt_amount trav_transport_cash_claim_amount
        //trav_accomodation_actual_spent trav_accomodation_receipt_amount trav_accomodation_cash_claim_amount
        
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        
        $ObjESSTravelRequisitionUI->trav_amount = $ObjESSTravelRequisitionUI->trav_transport_amount + $ObjESSTravelRequisitionUI->trav_accomodation_type_amount + $ObjESSTravelRequisitionUI->trav_per_diem_amount + $ObjESSTravelRequisitionUI->trav_other_amount;
        
        $modelResponse = $ObjESSTravelRequisitionUI->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function updateAccounting() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_updated =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_document_no = $input->post('trav_document_no');
        
        $ObjESSTravelRequisitionUI->trav_actual_spent = $input->post('trav_actual_spent');
        $ObjESSTravelRequisitionUI->trav_receipt_amount = $input->post('trav_receipt_amount');
        $ObjESSTravelRequisitionUI->trav_cash_claim_amount = $input->post('trav_cash_claim_amount');
        
        $ObjESSTravelRequisitionUI->trav_transport_actual_spent = $input->post('trav_transport_actual_spent');
        $ObjESSTravelRequisitionUI->trav_transport_receipt_amount = $input->post('trav_transport_receipt_amount');
        $ObjESSTravelRequisitionUI->trav_transport_cash_claim_amount = $input->post('trav_transport_cash_claim_amount');
        
        $ObjESSTravelRequisitionUI->trav_accomodation_actual_spent = $input->post('trav_accomodation_actual_spent');
        $ObjESSTravelRequisitionUI->trav_accomodation_receipt_amount = $input->post('trav_accomodation_receipt_amount');
        $ObjESSTravelRequisitionUI->trav_accomodation_cash_claim_amount = $input->post('trav_accomodation_cash_claim_amount');
        
        $ObjESSTravelRequisitionUI->trav_per_diem_actual_spent = $input->post('trav_per_diem_actual_spent');
        $ObjESSTravelRequisitionUI->trav_per_diem_receipt_amount = $input->post('trav_per_diem_receipt_amount');
        $ObjESSTravelRequisitionUI->trav_per_diem_cash_claim_amount = $input->post('trav_per_diem_cash_claim_amount');
        
        $ObjESSTravelRequisitionUI->trav_other_actual_spent = $input->post('trav_other_actual_spent');
        $ObjESSTravelRequisitionUI->trav_other_receipt_amount = $input->post('trav_other_receipt_amount');
        $ObjESSTravelRequisitionUI->trav_other_cash_claim_amount = $input->post('trav_other_cash_claim_amount');
        
        //trav_actual_spent trav_receipt_amount trav_cash_claim_amount
        //trav_transport_actual_spent trav_transport_receipt_amount trav_transport_cash_claim_amount
        //trav_accomodation_actual_spent trav_accomodation_receipt_amount trav_accomodation_cash_claim_amount
        //trav_per_diem_actual_spent trav_per_diem_receipt_amount trav_per_diem_cash_claim_amount
        //trav_other_actual_spent trav_other_receipt_amount trav_other_cash_claim_amount
        
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        
        
        $modelResponse = $ObjESSTravelRequisitionUI->updateAccounting();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function updateLines() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_lines_date_updated =  date("Y-m-d H:i:s");
        //$ObjESSTravelRequisitionUI->trav_lines_no_no = $input->post('trav_lines_no_no');
        //$ObjESSTravelRequisitionUI->trav_lines_no = $input->post('trav_lines_no');
        //$ObjESSTravelRequisitionUI->trav_lines_date = $input->post('trav_lines_date');
        $ObjESSTravelRequisitionUI->trav_lines_travel_type = $input->post('trav_lines_travel_type');
        $ObjESSTravelRequisitionUI->trav_lines_travel_options = $input->post('trav_lines_travel_options');
        $ObjESSTravelRequisitionUI->trav_lines_accomodations = $input->post('trav_lines_accomodations');
        $ObjESSTravelRequisitionUI->trav_lines_advance_type = $input->post('trav_lines_advance_type');
        $ObjESSTravelRequisitionUI->trav_lines_account_no = $input->post('trav_lines_account_no');
        $ObjESSTravelRequisitionUI->trav_lines_account_name = $input->post('trav_lines_account_name');
        $ObjESSTravelRequisitionUI->trav_lines_destination_code = $input->post('trav_lines_destination_code');
        $ObjESSTravelRequisitionUI->trav_lines_no_of_days = $input->post('trav_lines_no_of_days');
        $ObjESSTravelRequisitionUI->trav_lines_daily_rates_amount = $input->post('trav_lines_daily_rates_amount');
        $ObjESSTravelRequisitionUI->trav_lines_amount = $input->post('trav_lines_amount');
        $ObjESSTravelRequisitionUI->trav_lines_advance_holder = $input->post('trav_lines_advance_holder');
        $ObjESSTravelRequisitionUI->trav_lines_bank = $input->post('trav_lines_bank');
        $ObjESSTravelRequisitionUI->trav_lines_purpose = $input->post('trav_lines_purpose');
        $ObjESSTravelRequisitionUI->trav_lines_due_date = $input->post('trav_lines_due_date');
        $ObjESSTravelRequisitionUI->trav_lines_department = $input->post('trav_lines_department');
        $ObjESSTravelRequisitionUI->trav_lines_country = $input->post('trav_lines_country');
        $ObjESSTravelRequisitionUI->trav_lines_id = $input->post('trav_lines_id');
        $modelResponse = $ObjESSTravelRequisitionUI->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        $stage = $input->get_post('stage');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            
            if($stage == 0){
                $ObjLogs->log_description = "Edit Travel Requisition";
            } else {
                $ObjLogs->log_description = "Edit Travel Requisition Accounting";
            }
    		
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSTravelRequisitionUI->trav_id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSTravelRequisitionUI->detail();
            $this->registry->template->_UPLOADS = $ObjESSTravelRequisitionUI->getUploads();
            $this->registry->template->_UPLOADS_TR = $ObjESSTravelRequisitionUI->getUploadsTransport();
            $this->registry->template->_UPLOADS_ACC = $ObjESSTravelRequisitionUI->getUploadsAccomodation();
            $this->registry->template->_UPLOADS_PDM = $ObjESSTravelRequisitionUI->getUploadsPerDiem();
            $this->registry->template->_UPLOADS_OTHER = $ObjESSTravelRequisitionUI->getUploadsOther();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            if($stage == 0){
                $this->registry->template->ntitle = "Edit Travel Requisition";
            } else {
                $this->registry->template->ntitle = "Edit Travel Requisition Accounting";
            }
            
            $this->registry->template->show('esstravelrequisitionui/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add User View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            if($stage == 0){
                $this->registry->template->ntitle = "New Travel Requisition";
            } else {
                $this->registry->template->ntitle = "New Travel Requisition Accounting";
            }
            $this->registry->template->show('esstravelrequisitionui/add_edit');
        }
    }
    
    //
    public function addEditViewLine() {
        //UserRoles::getPass("ADD_USER_ACCOUNTS,UPDATE_USER_ACCOUNTS");
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        if ($edit == true) {//should edit
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Travel Requisition Line";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $ObjESSTravelRequisitionUI->trav_lines_id = $input->get_post('id');
            $this->registry->template->_DATA = $ObjESSTravelRequisitionUI->detailLines();
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->_EDIT = 1;
            $this->registry->template->ntitle = "Edit Travel Requisition Line";
            $this->registry->template->_trav_id = $input->get_post('trav_id');
            $this->registry->template->_desc = $input->get_post('desc');
            $this->registry->template->show('esstravelrequisitionui/add_edit_lines');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Add Travel Requisition Line View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "New Travel Requisition Line";
            $this->registry->template->_trav_id = $input->get_post('trav_id');
            $this->registry->template->_desc = $input->get_post('desc');
            $this->registry->template->show('esstravelrequisitionui/add_edit_lines');
        }
    }
    
    //
    public function sendForApproval() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->trav_status = "2";
        $ObjESSTravelRequisitionUI->trav_main_status = "Pending";
        $ObjESSTravelRequisitionUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->getSupervisor();
        $trdetails = $ObjESSTravelRequisitionUI->detail();
        
        if($trdetails['trav_actual_spent'] != 0 || $trdetails['trav_transport_actual_spent'] != 0 || $trdetails['trav_accomodation_actual_spent'] != 0){
            $ObjESSTravelRequisitionUI->trav_department = $trdetails['trav_department'];
            $ObjESSTravelRequisitionUI->approvalChainRequest();
        }
        
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function approveRequest() {
        //1-New
        //2-Pending Approval
        //3-Cancelled
        //4-Supervisor Approval
        //5-Other Approvals
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->trav_status = "4";//4
        $ObjESSTravelRequisitionUI->trav_main_status = "Pending";//Approved
        $ObjESSTravelRequisitionUI->trav_accounting_status = "0";//4
        $ObjESSTravelRequisitionUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $ObjESSTravelRequisitionUI->emp_dept_code = $_SESSION['ESS_DEPT_CODE'];
        $ObjESSTravelRequisitionUI->trav_total = $ObjESSTravelRequisitionUI->getRequisitionTotal();
        $modelResponse = $ObjESSTravelRequisitionUI->approveRequest();
        
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function closeTravelRequest() {
        //1-New
        //2-Pending Approval
        //3-Cancelled
        //4-Supervisor Approval
        //5-Other Approvals
        //6-Close Travel Request/Open TRA
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->trav_status = "6";
        $ObjESSTravelRequisitionUI->trav_main_status = "Open";
        $ObjESSTravelRequisitionUI->trav_accounting_status = "1";
        $ObjESSTravelRequisitionUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $ObjESSTravelRequisitionUI->emp_dept_code = $_SESSION['ESS_DEPT_CODE'];
        //$ObjESSTravelRequisitionUI->trav_total = $ObjESSTravelRequisitionUI->getRequisitionTotal();
        $modelResponse = $ObjESSTravelRequisitionUI->closeTravelRequest();
        
        if($modelResponse == 1){
            $this->createBuisyTravelReq($ObjESSTravelRequisitionUI->trav_id);
        }
        
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function cancelRequest() {
        //1-New
        //2-Pending Approval
        //3-Cancelled
        //4-Approved
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->trav_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->trav_status = "3";
        $ObjESSTravelRequisitionUI->trav_main_status = "Cancelled";
        $ObjESSTravelRequisitionUI->emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->cancelRequest();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function uploadFile() {
        //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->file_date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->file_trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->file_path = $input->post('trav_file_path');
        $ObjESSTravelRequisitionUI->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->file_emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->uploadFile();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function uploadFileTransport() {
        //`id`, `date_created`, `trav_id`, `file_type`, `file_path`, `publish`
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->file_type = "transport";
        $ObjESSTravelRequisitionUI->file_path = $input->post('trav_file_path');
        $ObjESSTravelRequisitionUI->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->file_emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->uploadFileTransport();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function uploadFileAccomodation() {
        //`id`, `date_created`, `trav_id`, `file_type`, `file_path`, `publish`
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->file_type = "accomodation";
        $ObjESSTravelRequisitionUI->file_path = $input->post('trav_file_path');
        $ObjESSTravelRequisitionUI->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->file_emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->uploadFileTransport();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function uploadFilePerDiem() {
        //`id`, `date_created`, `trav_id`, `file_type`, `file_path`, `publish`
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->file_type = "perdiem";
        $ObjESSTravelRequisitionUI->file_path = $input->post('trav_file_path');
        $ObjESSTravelRequisitionUI->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->file_emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->uploadFileTransport();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function uploadFileOther() {
        //`id`, `date_created`, `trav_id`, `file_type`, `file_path`, `publish`
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->date_created =  date("Y-m-d H:i:s");
        $ObjESSTravelRequisitionUI->trav_id = $input->post('trav_id');
        $ObjESSTravelRequisitionUI->file_type = "other";
        $ObjESSTravelRequisitionUI->file_path = $input->post('trav_file_path');
        $ObjESSTravelRequisitionUI->file_trav_document_no = "TRAV-". str_pad($input->post('trav_id'), 6, "0", STR_PAD_LEFT);
        $ObjESSTravelRequisitionUI->file_emp_no = $_SESSION['ESS_EMPLOYEE_NO'];
        $modelResponse = $ObjESSTravelRequisitionUI->uploadFileTransport();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    //
    public function readMyDestinationCodes() {
        $ObjESSTravelRequisitionUI = new ESSTravelRequisitionUI();
        $input = new CI_Input();
        $ObjESSTravelRequisitionUI->dbh = $this->registry->db;
        $ObjESSTravelRequisitionUI->emp_job_group = $_SESSION['ESS_JOB_GROUP'];
        $modelResponse = $ObjESSTravelRequisitionUI->readMyDestinationCodes();
        echo json_encode($modelResponse);
    }
    
    //https://dev.burnmfgsystems.com/ESSNavIntegration/createBuisyTravelReq?id=1;
    public function createBuisyTravelReq($trav_id) {
        //ess_travel_requisition
        ini_set("max_execution_time", 0);
        set_time_limit(1800);
        ini_set("memory_limit", -1);

        
        $ObjESSNavIntegration = new ESSNavIntegration();
        $ObjESSNavIntegration->dbh = $this->registry->db;
        $input = new CI_Input();
        
        $ObjESSNavIntegration->id = $trav_id;
        $ObjESSNavIntegration->rq_date = date("Y-m-d H:i:s");
        $ObjESSNavIntegration->rq_type = "createBuisyTravelReq";
        
        $reqData = $ObjESSNavIntegration->createBuisyTravelReq();
        $reqLineData = $ObjESSNavIntegration->createBuisyTravelReqLine();
        
        $objArrWhole = [];
        $objArr = [];
        $linesArr = [];
        //`trav_id`, `trav_created_by`, `trav_status`, `trav_accounting_status`, `trav_date`, `trav_account_no`, `trav_payee`, `trav_designation`, `trav_department`, `trav_country`, `trav_company`,
        //`trav_project_code`, `trav_directors_code`, `trav_posting_description`, `trav_date_of_departure`, `trav_date_of_return`, `trav_currency_code`, `trav_supervisor_no`, `trav_travel_agent_no`
        $request = (object) array(
            'trav_id' => $reqData['trav_id'],
            'trav_created_by' => $reqData['trav_created_by'],
            'trav_status' => $reqData['trav_status'],
            'trav_accounting_status' => $reqData['trav_accounting_status'],
            'trav_date' => $reqData['trav_date'],
            'trav_account_no' => $reqData['trav_account_no'],
            'trav_amount' => $reqData['trav_amount'],
            'trav_payee' => $reqData['trav_payee'],
            'trav_designation' => $reqData['trav_designation'],
            'trav_department' => $reqData['trav_department'],
            'trav_country' => $reqData['trav_country'],
            'trav_company' => $reqData['trav_company'],
            'trav_project_code' => $reqData['trav_project_code'],
            'trav_directors_code' => $reqData['trav_directors_code'],
            'trav_posting_description' => $reqData['trav_posting_description'],
            'trav_date_of_departure' => $reqData['trav_date_of_departure'],
            'trav_date_of_return' => $reqData['trav_date_of_return'],
            'trav_no_of_days' => $reqData['trav_no_of_days'],
            'trav_currency_code' => $reqData['trav_currency_code'],
            'trav_supervisor_no' => $reqData['trav_supervisor_no'],
            'trav_no_of_days' => $reqData['trav_no_of_days'],
            'trav_travel_agent_no' => $reqData['trav_travel_agent_no']
        );
        
        $transport = (object) array(
            'trav_transport_destination' => $reqData['trav_transport_destination'],
            'trav_transport_amount' => $reqData['trav_transport_amount'],
            'trav_transport_purpose' => $reqData['trav_transport_purpose'],
            'trav_transport_travel_options' => $reqData['trav_transport_travel_options']
        );
        $objtransport = array('transport' => $transport);
        
        $accomodation = (object) array(
            'trav_accomodation_type_breakfast' => $reqData['trav_accomodation_type_breakfast'],
            'trav_accomodation_type_lunch' => $reqData['trav_accomodation_type_lunch'],
            'trav_accomodation_type_dinner' => $reqData['trav_accomodation_type_dinner'],
            'trav_accomodation_type_amount' => $reqData['trav_accomodation_type_amount'],
            'trav_accomodation_type_purpose' => $reqData['trav_accomodation_type_purpose']
        );
        $objaccomodation = array('accomodation' => $accomodation);
        
        $perdiem = (object) array(
            'trav_per_diem_amount' => $reqData['trav_per_diem_amount'],
            'trav_per_diem_purpose' => $reqData['trav_per_diem_purpose']
        );
        $objperdiem = array('perdiem' => $perdiem);
        
        $other = (object) array(
            'trav_other_description' => $reqData['trav_other_description'],
            'trav_other_amount' => $reqData['trav_other_amount']
        );
        $objother = array('other' => $other);
        
        array_push($linesArr, $objtransport, $objaccomodation, $objperdiem, $objother);
        
        
        
        $obj = (object) array('request' => $request, 'lines' => $linesArr);
        array_push($objArr, $obj);
        $objArrWhole['createBuisyTravelReq'] = $objArr;
        $this->payload = json_encode($objArrWhole);
        
        $myfile = fopen("A-NAVP.txt", "a") or die("Unable to open file!");
        fwrite($myfile, $this->payload. " \n");
        fclose($myfile); 
        
        
        //$this->soapUrl = $this->baseUrl.rawurlencode($serialbin[inv_company])./Codeunit/ESS_Intergration;
                    
        //******************************************************************************************
        $this->xml_post = '<?xml version="1.0" encoding="utf-8" ?>
        <Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
            <Body>
                <createBuisyTravelReq xmlns="urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration">
                    <salesdata>'.$this->payload.'</salesdata>
                </createBuisyTravelReq>
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
                "SoapAction: urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration:createBuisyTravelReq",
                "Authorization: Basic " .base64_encode($this->credentials). ""
            ),
        ));
            
        $this->xml_res = curl_exec($this->curl);
        if($this->xml_res === false) {
            $this->res =  "Curl error:  ". curl_error($this->curl);
            //$obj = (object) array(co_connect => 0, co_res => $res); 
            $gresF = $this->res;

            
        } else {
            
            // converting 
            $this->xml_res1 = str_replace("<Soap:Body>","",$this->xml_res);
            $this->xml_res1 = str_replace('<createBuisyTravelReq_Result xmlns="urn:microsoft-dynamics-schemas/codeunit/ESS_Intergration">','',$this->xml_res1);
            $this->xml_res1 = str_replace('<createBuisyTravelReq_Result>','',$this->xml_res1);
            $this->xml_res2 = str_replace("</Soap:Body>","",$this->xml_res1);
            $this->xml_res2 = str_replace("</createBuisyTravelReq_Result>","",$this->xml_res2);
            $this->xml_res2 = str_replace("</createBuisyTravelReq_Result>","",$this->xml_res2);
            
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
                
            }
        }
        //******************************************************************************************
 
    }

 }

    