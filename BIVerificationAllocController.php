<?php
ini_set('display_errors', 1); 
/**
 * @author  Jared Okongo Momanyi - (qasavagps@gmail.com)
 * @version 1.0, 2022-11-02
 * @copyright (c) 2022 Qasava GPS Limited.
 */
class BIVerificationAllocController extends baseController {

    public function index() {
        UserRoles::getPass("VIEW_BI_ACCESS");

        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View Pending BI Verification";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('bi/index');
        
    }
    
    //
    public function verifiedOne() {
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View Verified BI Verification";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('bi/verified');
        
        
    }
    
    //
    public function inbound() {
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View Inbound";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('bi/inbound');
        
        
    }
    
    //
    public function filterOne() {
        
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        
        $weekstart = strtotime('monday this week'); 
        $weekstop = strtotime('sunday this week 23:59:59'); 
        
        $ObjBIVerificationAlloc->from = date('Y-m-d H:i:s', $weekstart);
        $ObjBIVerificationAlloc->to = date('Y-m-d H:i:s', $weekstop);
        $ObjBIVerificationAlloc->verify = "0";
        $ObjBIVerificationAlloc->verify_name = "All";
        
        $alldetails = $ObjBIVerificationAlloc->detailsFilter();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View BIVerificationAlloc Export";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->_FTITLE = $ObjBIVerificationAlloc->verify_name;
        $this->registry->template->_DATA = $alldetails;
        $this->registry->template->_FROM = $ObjBIVerificationAlloc->from;
        $this->registry->template->_TO = $ObjBIVerificationAlloc->to;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('bi/export');
        
        
    }
    //
    public function filter() {
        
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        
        $ObjBIVerificationAlloc->from = $input->get_post('field_start_date') . ' 00:00:00';
        $ObjBIVerificationAlloc->to = $input->get_post('field_end_date') . ' 23:59:59';
        $ObjBIVerificationAlloc->verify = $input->get_post('field_verification_status');
        $ObjBIVerificationAlloc->verify_name = $input->get_post('field_verification_status_name');
        
        $alldetails = $ObjBIVerificationAlloc->detailsFilter();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View BIVerificationAlloc Export";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->_FTITLE = $ObjBIVerificationAlloc->verify_name;
        $this->registry->template->_DATA = $alldetails;
        $this->registry->template->_FROM = $ObjBIVerificationAlloc->from;
        $this->registry->template->_TO = $ObjBIVerificationAlloc->to;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('bi/export');
        
        
    }
    
    //
    public function addEditView() {
        //UserRoles::getPass("ADD_NAV_SALES,UPDATE_NAV_SALES");
        UserRoles::getPass("ADD_NAV_SALES");
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $edit = $input->get_post('edit');
        
        if ($edit == true) {//should edit
        
            $ObjBIVerificationAlloc->id = $input->get_post('id');
            
            //Log Edit User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Edit Sale View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            //Get User Assigned Locations and SKUs
            $ObjScan = new Scan();
            $ObjScan->dbh = $this->registry->db;
            $ObjScan->userId = $_SESSION['USER_ID'];
            $approvesLocations = $ObjScan->getLocations();
            
            $salesLineSkuItems = $ObjBIVerificationAlloc->salesLineSkuItems();
            
            
            //agent_assigned_bin agent_assigned_country
            $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
            $ObjBIVerificationAlloc->agent_assigned_bin = $ObjBIVerificationAlloc->agentAssignedBin();
            $agentCountry = $ObjBIVerificationAlloc->agentAssignedCountry();
            $getMyLocationBin = $ObjBIVerificationAlloc->getMyLocationBin();
            $getPaymentDetails = $ObjBIVerificationAlloc->getPaymentDetails();
            
            $agentLocation = explode(",",$getMyLocationBin['bin_nav_location']);
            $agentBin = explode(",",$getMyLocationBin['bin_location']);
            
            
            $this->registry->template->_DATA = $ObjBIVerificationAlloc->detail();
            $this->registry->template->_salesLineId = $ObjBIVerificationAlloc->id;
            $this->registry->template->_salesLineSkuItems = $salesLineSkuItems;
            $this->registry->template->_getPaymentDetails = $getPaymentDetails;
            $this->registry->template->_agentCountry = $agentCountry;
            $this->registry->template->_agentLocation = $agentLocation[0];
            $this->registry->template->_agentBin = $agentBin[0];
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->myLocs = $approvesLocations['locations'];
            $this->registry->template->mySkus = $approvesLocations['skus'];
            $this->registry->template->_dimen_country = $approvesLocations['user_country'];
            $this->registry->template->_dimen_company = $approvesLocations['user_company'];
            $this->registry->template->_dimen_dept = $approvesLocations['user_main_department'];
            $this->registry->template->_EDIT = 1;
            $this->registry->template->_stafftype = $input->get_post('t');
            $this->registry->template->show('bi/add_edit');
        } else {
            
            //Log Add User View
            $ObjLogs = new Logs();
            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
    		$ObjLogs->log_description = "Create Sale View";
    		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            //Get User Assigned Locations and SKUs
            $ObjScan = new Scan();
            $ObjScan->dbh = $this->registry->db;
            $ObjScan->userId = $_SESSION['USER_ID'];
            $approvesLocations = $ObjScan->getLocations();
            
            //agent_assigned_bin agent_assigned_country
            $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
            $ObjBIVerificationAlloc->agent_assigned_bin = $ObjBIVerificationAlloc->agentAssignedBin();
            $agentCountry = $ObjBIVerificationAlloc->agentAssignedCountry();
            $getMyLocationBin = $ObjBIVerificationAlloc->getMyLocationBin();
            
            $agentLocation = explode(",",$getMyLocationBin['bin_nav_location']);
            $agentBin = explode(",",$getMyLocationBin['bin_location']);
            
            $salesLineSkuItems = [];
            
            
            $this->registry->template->_salesLineId = "0";
            $this->registry->template->_salesLineSkuItems = $salesLineSkuItems;
            $this->registry->template->_agentCountry = $agentCountry;
            $this->registry->template->_agentLocation = $agentLocation[0];
            $this->registry->template->_agentBin = $agentBin[0];
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->myLocs = $approvesLocations['locations'];
            $this->registry->template->mySkus = $approvesLocations['skus'];
            $this->registry->template->_dimen_country = $approvesLocations['user_country'];
            $this->registry->template->_dimen_company = $approvesLocations['user_company'];
            $this->registry->template->_dimen_dept = $approvesLocations['user_main_department'];
            $this->registry->template->_stafftype = $input->get_post('t');
            $this->registry->template->show('bi/add_edit');
        }
    }

    //
    public function createCustomer() {
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->scust_customer_name = $input->post('scust_customer_name');
        $ObjBIVerificationAlloc->scust_customer_main_tel = $input->post('scust_customer_main_tel');
        $ObjBIVerificationAlloc->scust_customer_alt_tel = $input->post('scust_customer_alt_tel');
        $ObjBIVerificationAlloc->scust_id_number = $input->post('scust_id_number');
        $ObjBIVerificationAlloc->scust_county_name = $input->post('scust_county_name');
        $ObjBIVerificationAlloc->scust_sub_county = $input->post('scust_sub_county');
        $ObjBIVerificationAlloc->scust_ward = $input->post('scust_ward');
        $ObjBIVerificationAlloc->scust_village = $input->post('scust_village');
        $ObjBIVerificationAlloc->scust_home_address = $input->post('scust_home_address');
        $ObjBIVerificationAlloc->scust_carbon_consent = $input->post('scust_carbon_consent');
        //$ObjBIVerificationAlloc->scust_stove_serials = $input->post('scust_stove_serials');
        $ObjBIVerificationAlloc->scust_fuel_type = $input->post('scust_fuel_type');
        $ObjBIVerificationAlloc->scust_no_of_stoves = $input->post('scust_no_of_stoves');
        $ObjBIVerificationAlloc->scust_distribution_channel = $input->post('scust_distribution_channel');
        //$ObjBIVerificationAlloc->scust_sales_agent = $input->post('scust_sales_agent');
        $ObjBIVerificationAlloc->scust_sales_agent = $_SESSION['USERNAME'];
        $ObjBIVerificationAlloc->scust_shipping_method = $input->post('scust_shipping_method');
        $ObjBIVerificationAlloc->scust_entry_date = date("Y-m-d H:i:s");
        $ObjBIVerificationAlloc->scust_status = 1;
        $modelResponse = $ObjBIVerificationAlloc->create();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Add Nav Sales Customer: " . $ObjBIVerificationAlloc->scust_customer_name . "(" . $ObjBIVerificationAlloc->scust_id_number .") At: " . $ObjBIVerificationAlloc->scust_update_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = 0;//Cron Job User Id
		$ObjLogs->log_creator_name = "Add Sales Customer";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        echo $modelResponse; 
        //echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    //
    public function updateCustomer() {
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->id = $input->post('id');
        $ObjBIVerificationAlloc->scust_id = $input->post('scust_id');
        $ObjBIVerificationAlloc->scust_customer_name = $input->post('scust_customer_name');
        $ObjBIVerificationAlloc->scust_customer_main_tel = $input->post('scust_customer_main_tel');
        $ObjBIVerificationAlloc->scust_customer_alt_tel = $input->post('scust_customer_alt_tel');
        $ObjBIVerificationAlloc->scust_id_number = $input->post('scust_id_number');
        $ObjBIVerificationAlloc->scust_county_name = $input->post('scust_county_name');
        $ObjBIVerificationAlloc->scust_sub_county = $input->post('scust_sub_county');
        $ObjBIVerificationAlloc->scust_ward = $input->post('scust_ward');
        $ObjBIVerificationAlloc->scust_village = $input->post('scust_village');
        $ObjBIVerificationAlloc->scust_home_address = $input->post('scust_home_address');
        $ObjBIVerificationAlloc->scust_carbon_consent = $input->post('scust_carbon_consent');
        //$ObjBIVerificationAlloc->scust_stove_serials = $input->post('scust_stove_serials');
        $ObjBIVerificationAlloc->scust_fuel_type = $input->post('scust_fuel_type');
        $ObjBIVerificationAlloc->scust_no_of_stoves = $input->post('scust_no_of_stoves');
        $ObjBIVerificationAlloc->scust_distribution_channel = $input->post('scust_distribution_channel');
        //$ObjBIVerificationAlloc->scust_sales_agent = $input->post('scust_sales_agent');
        $ObjBIVerificationAlloc->scust_sales_agent = $_SESSION['USERNAME'];
        $ObjBIVerificationAlloc->scust_shipping_method = $input->post('scust_shipping_method');
        $ObjBIVerificationAlloc->scust_entry_date = date("Y-m-d H:i:s");
        $ObjBIVerificationAlloc->scust_status = 1;
        $modelResponse = $ObjBIVerificationAlloc->update();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Update Nav Sales Customer Record ID: " . $ObjBIVerificationAlloc->id . " At: " . $ObjBIVerificationAlloc->scust_update_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = 0;//Cron Job User Id
		$ObjLogs->log_creator_name = "Update Sales Customer";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        echo $modelResponse;
        //echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    //
    public function verify() {
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->id = $input->post('id');
        $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
        $ObjBIVerificationAlloc->userName = $_SESSION['USERNAME'];
        $ObjBIVerificationAlloc->remarks = $input->post('remarks');
        $ObjBIVerificationAlloc->scust_entry_date = date("Y-m-d H:i:s");
        $modelResponse = $ObjBIVerificationAlloc->verify();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Update Nav Sales Customer (BI Verifications) Record ID: " . $ObjBIVerificationAlloc->id . " At: " . $ObjBIVerificationAlloc->scust_update_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = 0;//Cron Job User Id
		$ObjLogs->log_creator_name = "Update Sales Customer (BI Verifications) ";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        //echo $modelResponse;
        echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    
    public function detail() {
        
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $input = new CI_Input();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $ObjBIVerificationAlloc->id = $input->get_post('id');
        $ObjBIVerificationAlloc->scust_id_number = $input->get_post('scust_id_number');
        
        $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
        $ObjBIVerificationAlloc->userName = $_SESSION['FULLNAMEID'];
        
        //Log View Alerts
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
        $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_description = "View Nav Sales Customer Item Details For Record Id: ".$ObjBIVerificationAlloc->id;
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $modelResponse = $ObjBIVerificationAlloc->detailAgent();
        $ObjBIVerificationAlloc->scust_sales_agent = $modelResponse['scust_sales_agent'];
        $ObjBIVerificationAlloc->vuserId = $modelResponse['scust_verified_bi_user_id'];
        
        if($ObjBIVerificationAlloc->vuserId == "0"){
            $vusername = "";
        } else {
            $verificationUser = $ObjBIVerificationAlloc->getVerificationUser();
            $vusername = ucwords($verificationUser['user_first_name']) . " " . ucwords($verificationUser['user_last_name']);
        }
        
        
        $getCallAtemptDetails = $ObjBIVerificationAlloc->getCallAtemptDetails();
        $getProspectDetails = $ObjBIVerificationAlloc->getProspectDetails();
        $getPaymentDetails = $ObjBIVerificationAlloc->getPaymentDetails();
        $salesLineSkuItems = $ObjBIVerificationAlloc->salesLineSkuItems();
        $serialItems = $ObjBIVerificationAlloc->serialItems();
        $agentDetailsNew = $ObjBIVerificationAlloc->getAgentDetails();
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->_CXDATA = $getCallAtemptDetails;
        $this->registry->template->_PROSPECT = $getProspectDetails;
        $this->registry->template->_DATA = $modelResponse;
        $this->registry->template->_VDATA = $vusername;
        $this->registry->template->_PDATA = $getPaymentDetails;
        $this->registry->template->_SDATA = $salesLineSkuItems;
        $this->registry->template->_SEDATA = $serialItems;
        $this->registry->template->_AGENT = $agentDetailsNew;
        $this->registry->template->_tp = $input->get_post('tp');
        $this->registry->template->show('bi/detaila');
    }
    
    public function readUsers() {
        
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $input = new CI_Input();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
 
        $modelResponse = $ObjBIVerificationAlloc->readCxUsers();
        echo json_encode($modelResponse);
    }
    //
    public function allocate() {
        //cx_user=278&cx_user_name=Cx%20%20User&id=83677cx_date
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->id = $input->post('id');
        $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
        $ObjBIVerificationAlloc->userName = $_SESSION['USERNAME'];
        $ObjBIVerificationAlloc->remarks = $input->post('remarks');
        
        $ObjBIVerificationAlloc->cx_date = date("Y-m-d H:i:s");
        $ObjBIVerificationAlloc->cx_user = $input->post('cx_user');
        $ObjBIVerificationAlloc->cx_user_name = $input->post('cx_user_name');
        $modelResponse = $ObjBIVerificationAlloc->allocate();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Update Nav Sales Customer (BI Verifications) Record ID: " . $ObjBIVerificationAlloc->id . " At: " . $ObjBIVerificationAlloc->scust_update_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = 0;//Cron Job User Id
		$ObjLogs->log_creator_name = "Update Sales Customer (BI Verifications) ";
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        //echo $modelResponse;
        echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    //
    public function xcaction() {
        //cx_user=278&cx_user_name=Cx%20%20User&id=83677cx_date `cx_allocate` = 1
        ////cx_call_status=Reachable&cx_call_status_outcome=Partial+Verified&cx_call_remarks=sdsbdns&scust_id=83677
        
        //scust_id=100288838857&cx_call_status=Reachable&cx_call_status_outcome=Partial Verified&cx_call_remarks=test 1&cx_call_date=2023-04-15 06:39:52&cx_call_attempt=1&scust_scanned_out_serial=ABYQP8
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->id = $input->post('scust_id');
        $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
        $ObjBIVerificationAlloc->userName = $_SESSION['FULLNAME'];
        $ObjBIVerificationAlloc->remarks = $input->post('remarks');
        
        $ObjBIVerificationAlloc->cx_date = date("Y-m-d H:i:s");
        $ObjBIVerificationAlloc->cx_call_status = $input->post('cx_call_status');
        $ObjBIVerificationAlloc->cx_call_status_outcome = $input->post('cx_call_status_outcome');
        $ObjBIVerificationAlloc->cx_call_remarks = $input->post('cx_call_remarks');
        $ObjBIVerificationAlloc->cx_call_date = $input->post('cx_call_date');
        $ObjBIVerificationAlloc->cx_call_attempt = $input->post('cx_call_attempt');
        $ObjBIVerificationAlloc->cx_verified_serial = $input->post('cx_verified_serial');
        $ObjBIVerificationAlloc->scust_scanned_out_serial = $input->post('scust_scanned_out_serial');
        
        if($ObjBIVerificationAlloc->cx_call_attempt >= 5 && $ObjBIVerificationAlloc->cx_call_status_outcome != "Full Verified"){
            $ObjBIVerificationAlloc->cx_call_status = "Dormant";
            $ObjBIVerificationAlloc->cx_call_status_outcome = "Dormant";
        }
        $modelResponse = $ObjBIVerificationAlloc->xcaction();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Update Nav Sales Customer (CX Verifications) Record ID: " . $ObjBIVerificationAlloc->id . " At: " . $ObjBIVerificationAlloc->cx_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];//Cron Job User Id
		$ObjLogs->log_creator_name = $_SESSION['FULLNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        //echo $modelResponse;
        echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    //
    public function xcactionedit() {
        //id=44&scust_id=833922&cx_call_status=Reachable&cx_call_status_outcome=Full Verified&cx_call_remarks=Done
        $ObjBIVerificationAlloc = new BIVerificationAlloc();
        $ObjBIVerificationAlloc->dbh = $this->registry->db;
        $input = new CI_Input();
        $ObjBIVerificationAlloc->rid = $input->post('id');
        $ObjBIVerificationAlloc->id = $input->post('scust_id');
        $ObjBIVerificationAlloc->userId = $_SESSION['USER_ID'];
        $ObjBIVerificationAlloc->userName = $_SESSION['FULLNAME'];

        $ObjBIVerificationAlloc->cx_call_status = $input->post('cx_call_status');
        $ObjBIVerificationAlloc->cx_call_status_outcome = $input->post('cx_call_status_outcome');
        $ObjBIVerificationAlloc->cx_call_remarks = $input->post('cx_call_remarks');
        $ObjBIVerificationAlloc->cx_verified_serial = $input->post('cx_verified_serial');
        
        
        $modelResponse = $ObjBIVerificationAlloc->xcactionedit();
        
        //Log
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "Edit (CX Verifications Action) Record ID: " . $ObjBIVerificationAlloc->rid . " For: " . $ObjBIVerificationAlloc->id . " At: " . $ObjBIVerificationAlloc->scust_update_date . " Result: " . $modelResponse;
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];//Cron Job User Id
		$ObjLogs->log_creator_name = $_SESSION['FULLNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        //Send Response To View If Manually Initiated
        //echo $modelResponse;
        echo Utility::getMessage($this->registry->t_, $modelResponse); 
    }
    
}