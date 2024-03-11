<?php
/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Date: 11/28/2023
 * Time:5:02 am
 * Email : brayoikonya@gmail.com
 * File : ESSExpensetypeController.php
 */

 class ESSExpensetypeController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //$this->registry->template->t_ = $this->registry->t_;
         //$this->registry->template->show('employees/index');
 
     }
    
    public function create()
    {
        
        $ObjESSExpensetype = new ESSExpensetype();
        $input = new CI_Input();
        $ObjESSExpensetype->dbh = $this->registry->db;
        $ObjESSExpensetype->et_date_created =  $input->post('et_date_created');
        $ObjESSExpensetype->et_code = $input->post('et_code');
        $ObjESSExpensetype->et_name = $input->post('et_name');
        $modelResponse = $ObjESSExpensetype->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    public function update()
    {
        
        $ObjESSExpensetype = new ESSExpensetype();
        $input = new CI_Input();
        $ObjESSExpensetype->dbh = $this->registry->db;
        $ObjESSExpensetype->et_date_updated =  $input->post('et_date_updated');
        $ObjESSExpensetype->et_code = $input->post('et_code');
        $ObjESSExpensetype->et_name = $input->post('et_name');
        $ObjESSExpensetype->et_id = $input->post('et_id');
        $modelResponse = $ObjESSExpensetype->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    