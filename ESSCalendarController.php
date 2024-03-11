<?php
/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Date: 11/29/2023
 * Time: 8:53 am
 * Email : brayoikonya@gmail.com
 * File : ESSCalendarController.php
 */

 class ESSCalendarController extends baseController
 {
     public function index()
     {
        
     }
    
    public function create()
    {
        
        $ObjESSCalendar = new ESSCalendar();
        $input = new CI_Input();
        $ObjESSCalendar->dbh = $this->registry->db;
        $ObjESSCalendar->cale_date_created =  $input->post('cale_date_created');
        $ObjESSCalendar->cale_code = $input->post('cale_code');   
        $ObjESSCalendar->cale_created_by = $input->post('cale_created_by');
        $ObjESSCalendar->cale_start_date = $input->post('cale_start_date');
        $ObjESSCalendar->cale_end_date = $input->post('cale_end_date');
        $ObjESSCalendar->cale_current = $input->post('cale_current');
        $ObjESSCalendar->cale_description = $input->post('cale_description');
        $modelResponse = $ObjESSCalendar->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    //this is an update fxn
    public function update()
    {
        
         $ObjESSCalendar = new ESSCalendar();
        $input = new CI_Input();
        $ObjESSCalendar->dbh = $this->registry->db;
        $ObjESSCalendar->cale_date_updated =  $input->post('cale_date_updated');
        $ObjESSCalendar->cale_code = $input->post('cale_code');
        $ObjESSCalendar->cale_created_by = $input->post('cale_created_by');
        $ObjESSCalendar->cale_start_date = $input->post('cale_start_date');
        $ObjESSCalendar->cale_end_date = $input->post('cale_end_date');
        $ObjESSCalendar->cale_current = $input->post('cale_current');
        $ObjESSCalendar->cale_description = $input->post('cale_description');
        $ObjESSCalendar->cale_id = $input->post('cale_id');
        $modelResponse = $ObjESSCalendar->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    