<?php
/**
 * Author : Willice Opalo.
 * Organization : Qasava Solutions LTD
 * Date: 27/11/2023
 * Time: 1.07pm
 * Email : williceopalo11@gmail.com9
 * File : ESSUserSetupController.php
 */

 class ESSUserSetupController extends baseController
 {
    public function index()
    {
        //UserRoles::getPass("VIEW_ORDERS");
        //$this->registry->template->t_ = $this->registry->t_;
        //$this->registry->template->show('employees/index');

    }

    public function create()
    {
        $ObjESSUserSetup = new ESSUserSetup();
        $input = new CI_Input();
        $ObjESSUserSetup->dbh = $this->registry->db;
        $ObjESSUserSetup->uset_date_created =  $input->post('uset_date_created');
        $ObjESSUserSetup->uset_department_code = $input->post('uset_department_code');
        $ObjESSUserSetup->uset_user_id = $input->post('uset_user_id');
        $ObjESSUserSetup->uset_approver_id = $input->post('uset_approver_id');
        $ObjESSUserSetup->uset_salesman_amount_approval_limit = $input->post('uset_salesman_amount_approval_limit');
        $ObjESSUserSetup->uset_purchase_amount_approval_limit = $input->post('uset_purchase_amount_approval_limit');
        $ObjESSUserSetup->uset_unlimited_sales_approval = $input->post('uset_unlimited_sales_approval');
        $ObjESSUserSetup->uset_unlimited_purchase_approval = $input->post('uset_unlimited_purchase_approval');
        $ObjESSUserSetup->uset_substitute = $input->post('uset_substitute');
        $ObjESSUserSetup->uset_email = $input->post('uset_email');
        $ObjESSUserSetup->uset_request_amount_approval_limit = $input->post('uset_request_amount_approval_limit');
        $ObjESSUserSetup->uset_unlimited_request_approval = $input->post('uset_unlimited_request_approval');
        $ObjESSUserSetup->uset_shortcut_dimension_1_code = $input->post('uset_shortcut_dimension_1_code');
        $ObjESSUserSetup->uset_shortcut_dimension_2_code = $input->post('uset_shortcut_dimension_2_code');
        $ObjESSUserSetup->uset_shortcut_dimension_3_code = $input->post('uset_shortcut_dimension_3_code');
        $ObjESSUserSetup->uset_shortcut_dimension_4_code = $input->post('uset_shortcut_dimension_4_code');
        $ObjESSUserSetup->uset_travel_advance_account = $input->post('uset_travel_advance_account');
        $ObjESSUserSetup->uset_staff_advance_account = $input->post('uset_staff_advance_account');
        $ObjESSUserSetup->uset_signature = $input->post('uset_signature');
        $ObjESSUserSetup->uset_assigned_company = $input->post('uset_assigned_company');
        $ObjESSUserSetup->uset_user_id_dimension = $input->post('uset_user_id_dimension');
        $ObjESSUserSetup->uset_full_name = $input->post('uset_full_name');
        $modelResponse = $ObjESSUserSetup->create();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }

    //this is an update fxn
    public function update()
    {
        
        $ObjESSUserSetup = new ESSUserSetup();
        $input = new CI_Input();
        $ObjESSUserSetup->dbh = $this->registry->db;
        $ObjESSUserSetup->uset_date_updated =  $input->post('uset_date_updated');
        $ObjESSUserSetup->uset_department_code = $input->post('uset_department_code');
        $ObjESSUserSetup->uset_user_id = $input->post('uset_user_id');
        $ObjESSUserSetup->uset_approver_id = $input->post('uset_approver_id');
        $ObjESSUserSetup->uset_salesman_amount_approval_limit = $input->post('uset_salesman_amount_approval_limit');
        $ObjESSUserSetup->uset_purchase_amount_approval_limit = $input->post('uset_purchase_amount_approval_limit');
        $ObjESSUserSetup->uset_unlimited_sales_approval = $input->post('uset_unlimited_sales_approval');
        $ObjESSUserSetup->uset_unlimited_purchase_approval = $input->post('uset_unlimited_purchase_approval');
        $ObjESSUserSetup->uset_substitute = $input->post('uset_substitute');
        $ObjESSUserSetup->uset_email = $input->post('uset_email');
        $ObjESSUserSetup->uset_request_amount_approval_limit = $input->post('uset_request_amount_approval_limit');
        $ObjESSUserSetup->uset_unlimited_request_approval = $input->post('uset_unlimited_request_approval');
        $ObjESSUserSetup->uset_shortcut_dimension_1_code = $input->post('uset_shortcut_dimension_1_code');
        $ObjESSUserSetup->uset_shortcut_dimension_2_code = $input->post('uset_shortcut_dimension_2_code');
        $ObjESSUserSetup->uset_shortcut_dimension_3_code = $input->post('uset_shortcut_dimension_3_code');
        $ObjESSUserSetup->uset_shortcut_dimension_4_code = $input->post('uset_shortcut_dimension_4_code');
        $ObjESSUserSetup->uset_travel_advance_account = $input->post('uset_travel_advance_account');
        $ObjESSUserSetup->uset_staff_advance_account = $input->post('uset_staff_advance_account');
        $ObjESSUserSetup->uset_signature = $input->post('uset_signature');
        $ObjESSUserSetup->uset_assigned_company = $input->post('uset_assigned_company');
        $ObjESSUserSetup->uset_user_id_dimension = $input->post('uset_user_id_dimension');
        $ObjESSUserSetup->uset_full_name = $input->post('uset_full_name');
        $ObjESSUserSetup->uset_id = $input->post('uset_id');
        $modelResponse = $ObjESSUserSetup->update();
        echo Utility::getMessage($this->registry->t_, $modelResponse);
    }
}

    