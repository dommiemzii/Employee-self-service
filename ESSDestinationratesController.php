<?php
/**
 * Author : Chahasi Dominic.
 * Organization : Qasava Solutions LTD
 * Date: 10/04/2023
 * Time: 1.07pm
 * Email : domnicjahazi263@gmail.com
 * File : ESSDestinationratesController.php
 */

 class ESSDestinationratesController extends baseController
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
		$ObjLogs->log_description = "View Destination Rates";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('ess_destination_rates/index');
 
     }
    
    public function create()
    {
        
        $ObjESSDestinationrates = new ESSDestinationrates();
        $input = new CI_Input();
        $ObjESSDestinationrates->dbh = $this->registry->db;
        $ObjESSDestinationrates->dest_date_created =  date("Y-m-d H:i:s");
        $ObjESSDestinationrates->dest_currency = $input->post('dest_currency');
        $ObjESSDestinationrates->dest_destination_code = $input->post('dest_destination_code');
        $ObjESSDestinationrates->dest_advance_code = $input->post('dest_advance_code');
        $ObjESSDestinationrates->dest_destination_type = $input->post('dest_destination_type');
        $ObjESSDestinationrates->dest_daily_rate_amount = $input->post('dest_daily_rate_amount');
        $ObjESSDestinationrates->dest_employee_job_group = $input->post('dest_employee_job_group');
        $ObjESSDestinationrates->dest_destination_name = $input->post('dest_destination_name');
        $modelResponse = $ObjESSDestinationrates->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }


    public function update()
    {
        
         $ObjESSDestinationrates = new ESSDestinationrates();
        $input = new CI_Input();
        $ObjESSDestinationrates->dbh = $this->registry->db;
        $ObjESSDestinationrates->dest_date_updated =  date("Y-m-d H:i:s");
        $ObjESSDestinationrates->dest_currency = $input->post('dest_currency');
        $ObjESSDestinationrates->dest_destination_code = $input->post('dest_destination_code');
        $ObjESSDestinationrates->dest_advance_code = $input->post('dest_advance_code');
        $ObjESSDestinationrates->dest_destination_type = $input->post('dest_destination_type');
        $ObjESSDestinationrates->dest_daily_rate_amount = $input->post('dest_daily_rate_amount');
        $ObjESSDestinationrates->dest_employee_job_group = $input->post('dest_employee_job_group');
        $ObjESSDestinationrates->dest_destination_name = $input->post('dest_destination_name');
        $ObjESSDestinationrates->dest_id = $input->post('dest_id');
        $modelResponse = $ObjESSDestinationrates->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    public function read() {
        $ObjESSDestinationrates = new ESSDestinationrates();
        $ObjESSDestinationrates->dbh = $this->registry->db;
        $input = new CI_Input();
        $modelResponse = $ObjESSDestinationrates->getData();
        echo json_encode($modelResponse);
    }
 }

    