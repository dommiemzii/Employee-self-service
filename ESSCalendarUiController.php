<?php
/**
 * Author : Ogutu Grace.
 * Organization : Qasava Solutions LTD
 * Time : 29/11/2023
 * Email : grace.ogutut@qasavagps.com
 * File : ESSCalendarUiController.php
 */

 class ESSCalendarUiController extends baseController
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
        $this->registry->template->ntitle = "";
        $this->registry->template->show('esscalendarui/index');
 
     }
    
    public function create()
    {
        $ObjESSCalendarUi = new ESSCalendarUi();
        $input = new CI_Input();
        $ObjESSCalendarUi->dbh = $this->registry->db;
        $ObjESSCalendarUi->cal_date_created =  $input->post('cal_date_created');
        $ObjESSCalendarUi->cal_code = $input->post('cal_code');
        $ObjESSCalendarUi->cal_start_date = $input->post('cal_start_date');
        $ObjESSCalendarUi->cal_end_date = $input->post('cal_end_date');
        $ObjESSCalendarUi->cal_current = $input->post('cal_current');
        $ObjESSCalendarUi->cal_description = $input->post('cal_description');
        $modelResponse = $ObjESSCalendarUi->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
    
    public function createLines()
    {
        $ObjESSCalendarUi = new ESSCalendarUi();
        $input = new CI_Input();
        $ObjESSCalendarUi->dbh = $this->registry->db;
        $ObjESSCalendarUi->cal_lines_date_created =  $input->post('cal_lines_date_created');
        $ObjESSCalendarUi->cal_lines_code = $input->post('cal_lines_code');
        $ObjESSCalendarUi->cal_lines_day = $input->post('cal_lines_day');
        $ObjESSCalendarUi->cal_lines_date = $input->post('cal_lines_date');
        $ObjESSCalendarUi->cal_lines_non_working = $input->post('cal_lines_non_working');
        $ObjESSCalendarUi->cal_lines_reason = $input->post('cal_lines_reason');
        $modelResponse = $ObjESSCalendarUi->createLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        $ObjESSCalendarUi = new ESSCalendarUi();
        $input = new CI_Input();
        $ObjESSCalendarUi->dbh = $this->registry->db;
        $ObjESSCalendarUi->cal_date_updated =  $input->post('cal_date_updated');
        $ObjESSCalendarUi->cal_code = $input->post('cal_code');
        $ObjESSCalendarUi->cal_start_date = $input->post('cal_start_date');
        $ObjESSCalendarUi->cal_end_date = $input->post('cal_end_date');
        $ObjESSCalendarUi->cal_current = $input->post('cal_current');
        $ObjESSCalendarUi->cal_description = $input->post('cal_description');
        $ObjESSCalendarUi->cal_id = $input->post('cal_id');
        $modelResponse = $ObjESSCalendarUi->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function updateLines()
    {
        $ObjESSCalendarUi = new ESSCalendarUi();
        $input = new CI_Input();
        $ObjESSCalendarUi->dbh = $this->registry->db;
        $ObjESSCalendarUi->cal_lines_date_created =  $input->post('cal_lines_date_created');
        $ObjESSCalendarUi->cal_lines_code = $input->post('cal_lines_code');
        $ObjESSCalendarUi->cal_lines_day = $input->post('cal_lines_day');
        $ObjESSCalendarUi->cal_lines_date = $input->post('cal_lines_date');
        $ObjESSCalendarUi->cal_lines_non_working = $input->post('cal_lines_non_working');
        $ObjESSCalendarUi->cal_lines_reason = $input->post('cal_lines_reason');
        $ObjESSCalendarUi->cal_lines_id = $input->post('cal_lines_id');
        $modelResponse = $ObjESSCalendarUi->updateLines();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    