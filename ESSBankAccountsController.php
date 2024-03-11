<?php
/**
 * Author : Chahasi Dominic.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : domnicjahazi263@gmail.com
 * File : ESSBankAccountsController.php
 */

 class ESSBankAccountsController extends baseController
 {
     public function index()
     {
        //UserRoles::getPass("VIEW_ORDERS");
         //$this->registry->template->t_ = $this->registry->t_;
         //$this->registry->template->show('employees/index');
 
     }
    
    public function create()
    {
        $ObjESSBankAccounts = new ESSBankAccounts();
        $input = new CI_Input();
        $ObjESSBankAccounts->dbh = $this->registry->db;
        $ObjESSBankAccounts->bank_date_created =  $input->post('bank_date_created');
        $ObjESSBankAccounts->bank_no = $input->post('bank_no');
        $ObjESSBankAccounts->bank_name = $input->post('bank_name');
        $ObjESSBankAccounts->bank_city = $input->post('bank_city');
        $modelResponse = $ObjESSBankAccounts->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }


    public function update()
    {
        
        $ObjESSBankAccounts = new ESSBankAccounts();
        $input = new CI_Input();
        $ObjESSBankAccounts->dbh = $this->registry->db;
        $ObjESSBankAccounts->bank_date_updated =  $input->post('bank_date_updated');
        $ObjESSBankAccounts->bank_no = $input->post('bank_no');
        $ObjESSBankAccounts->bank_name = $input->post('bank_name');
        $ObjESSBankAccounts->bank_city = $input->post('bank_city');
        $ObjESSBankAccounts->bank_id = $input->post('bank_id');
        $modelResponse = $ObjESSBankAccounts->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
 }

    