<?php

/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Time : 11/29/2023
 * Email : brayoikonya@gmail.com
 * File : ESSExpenserequisitionaccountingUI.class.php
 */
class ESSExpenserequisitionaccountingUI
{
    public $dbh;
    public static $primaryKey = "expa_id";
    public static $tableName = "ess_expense_requisition_accounting";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $expa_id; 
    public $expa_date_created;
    public $expa_date_updated;
    public $expa_created_by;
    public $expa_updated_by;
    public $expa_status;
    public $expa_no;
    public $expa_date;
    public $expa_currency_code;
    public $expa_payee;
    public $expa_on_behald_of;
    public $expa_total_payment_amount;
    public $expa_cost_center;
    public $expa_statuss;
    public $expa_country;
    public $expa_total_vat_amount;
    public $expa_total_witholding_tax_amount;
    public $expa_total_net_amount;
    public $expa_current_status;
    public $expa_transaction_reference_number;
    public $expa_pay_mode;
    public $expa_payment_release_date;
    public $expa_exachange_rate;
    public $expa_total_net_amount_lcy;
    public $expa_company;
    public $expa_product_center;
    public $expa_profit_center;
    public $expa_project_center;
    public $expa_account_type;
    public $expa_account_no;
    public $expa_surrender_status;
    public $expa_purpose;
    public $expa_rd_project;
    public $expa_directors;
    public $expa_publish;
    public $response;

   
    public static function read()
    {
        self::$extraWhere = " expa_publish = 1";
        self::$columns = [
                ['db' => 'expa_date_created', 'dt' => 0],
                ['db' => 'expa_no', 'dt' => 1],
                ['db' => 'expa_date', 'dt' => 2],
                ['db' => 'expa_currency_code', 'dt' => 3],
                ['db' => 'expa_payee', 'dt' => 4],
                ['db' => 'expa_on_behald_of', 'dt' => 5],
                ['db' => 'expa_total_payment_amount', 'dt' => 6],
                ['db' => 'expa_cost_center', 'dt' => 7],
                ['db' => 'expa_statuss', 'dt' => 8],
                ['db' => 'expa_country', 'dt' => 9],
                ['db' => 'expa_total_vat_amount', 'dt' => 10],
                ['db' => 'expa_id',
                'dt' => 11,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
   
    public static function readBKP()
    {
        self::$extraWhere = " expa_publish = 1";
        self::$columns = [
                ['db' => 'expa_date_created', 'dt' => 0],
                ['db' => 'expa_no', 'dt' => 1],
                ['db' => 'expa_date', 'dt' => 2],
                ['db' => 'expa_currency_code', 'dt' => 3],
                ['db' => 'expa_payee', 'dt' => 4],
                ['db' => 'expa_on_behald_of', 'dt' => 5],
                ['db' => 'expa_total_payment_amount', 'dt' => 6],
                ['db' => 'expa_cost_center', 'dt' => 7],
                ['db' => 'expa_statuss', 'dt' => 8],
                ['db' => 'expa_country', 'dt' => 9],
                ['db' => 'expa_total_vat_amount', 'dt' => 10],
                ['db' => 'expa_total_witholding_tax_amount', 'dt' => 11],
                ['db' => 'expa_total_net_amount', 'dt' => 12],
                ['db' => 'expa_current_status', 'dt' => 13],
                ['db' => 'expa_transaction_reference_number', 'dt' => 14],
                ['db' => 'expa_pay_mode', 'dt' => 15],
                ['db' => 'expa_payment_release_date', 'dt' => 16],
                ['db' => 'expa_exachange_rate', 'dt' => 17],
                ['db' => 'expa_total_net_amount_lcy', 'dt' => 18],
                ['db' => 'expa_company', 'dt' => 19],
                ['db' => 'expa_product_center', 'dt' => 20],
                ['db' => 'expa_profit_center', 'dt' => 21],
                ['db' => 'expa_project_center', 'dt' => 22],
                ['db' => 'expa_account_type', 'dt' => 23],
                ['db' => 'expa_account_no', 'dt' => 24],
                ['db' => 'expa_surrender_status', 'dt' => 25],
                ['db' => 'expa_purpose', 'dt' => 26],
                ['db' => 'expa_rd_project', 'dt' => 27],
                ['db' => 'expa_directors', 'dt' => 28],
                ['db' => 'expa_id',
                'dt' => 29,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
    
    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_expense_requisition_accounting` WHERE `expa_id` = :expa_id");
        $result->bindParam(':expa_id', $this->expa_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    
    public function detailLines()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_expense_requisition_accounting_lines` WHERE `expa_lines_id` = :expa_lines_id");
        $result->bindParam(':expa_lines_id', $this->expa_lines_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }
    

   
    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_expense_requisition_accounting` (`expa_date_created`,`expa_no`,`expa_date`,`expa_currency_code`,
        `expa_payee`,`expa_on_behald_of`,`expa_total_payment_amount`,`expa_cost_center`,`expa_statuss`,`expa_country`,`expa_total_vat_amount`,
        `expa_total_witholding_tax_amount`,`expa_total_net_amount`,`expa_current_status`,`expa_transaction_reference_number`,`expa_pay_mode`,`expa_payment_release_date`,
        `expa_exachange_rate`,`expa_total_net_amount_lcy`,`expa_company`,`expa_product_center`,`expa_profit_center`,`expa_project_center`,`expa_account_type`,
        `expa_account_no`,`expa_surrender_status`,`expa_purpose`,`expa_rd_project`,`expa_directors`)
        VALUES(:expa_date_created,:expa_no,:expa_date,:expa_currency_code,:expa_payee,:expa_on_behald_of,:expa_total_payment_amount,:expa_cost_center,
        :expa_statuss,:expa_country,:expa_total_vat_amount,:expa_total_witholding_tax_amount,:expa_total_net_amount,:expa_current_status,:expa_transaction_reference_number,
        :expa_pay_mode,:expa_payment_release_date,:expa_exachange_rate,:expa_total_net_amount_lcy,:expa_company,:expa_product_center,:expa_profit_center,
        :expa_project_center,:expa_account_type,:expa_account_no,:expa_surrender_status,:expa_purpose,:expa_rd_project,:expa_directors)");
        $result->bindParam(':expa_date_created', $this->expa_date_created, PDO::PARAM_STR);
        $result->bindParam(':expa_no', $this->expa_no, PDO::PARAM_STR);
        $result->bindParam(':expa_date', $this->expa_date, PDO::PARAM_STR);
        $result->bindParam(':expa_currency_code', $this->expa_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expa_payee', $this->expa_payee, PDO::PARAM_STR);
        $result->bindParam(':expa_on_behald_of', $this->expa_on_behald_of, PDO::PARAM_STR);
        $result->bindParam(':expa_total_payment_amount', $this->expa_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_cost_center', $this->expa_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expa_statuss', $this->expa_statuss, PDO::PARAM_STR);
        $result->bindParam(':expa_country', $this->expa_country, PDO::PARAM_STR);
        $result->bindParam(':expa_total_vat_amount', $this->expa_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_total_witholding_tax_amount', $this->expa_total_witholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_total_net_amount', $this->expa_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_current_status', $this->expa_current_status, PDO::PARAM_STR);
        $result->bindParam(':expa_transaction_reference_number', $this->expa_transaction_reference_number, PDO::PARAM_STR);
        $result->bindParam(':expa_pay_mode', $this->expa_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expa_payment_release_date', $this->expa_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expa_exachange_rate', $this->expa_exachange_rate, PDO::PARAM_STR);
        $result->bindParam(':expa_total_net_amount_lcy', $this->expa_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expa_company', $this->expa_company, PDO::PARAM_STR);
        $result->bindParam(':expa_product_center', $this->expa_product_center, PDO::PARAM_STR);
        $result->bindParam(':expa_profit_center', $this->expa_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expa_project_center', $this->expa_project_center, PDO::PARAM_STR);
        $result->bindParam(':expa_account_type', $this->expa_account_type, PDO::PARAM_STR);
        $result->bindParam(':expa_account_no', $this->expa_account_no, PDO::PARAM_STR);
        $result->bindParam(':expa_surrender_status', $this->expa_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expa_purpose', $this->expa_purpose, PDO::PARAM_STR);
        $result->bindParam(':expa_rd_project', $this->expa_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expa_directors', $this->expa_directors, PDO::PARAM_STR);

        try {
            $this->dbh->beginTransaction();
            $result->execute();
            $this->dbh->commit();
            $this->response = 1;
        } catch (PDOException $e) {
            $this->dbh->rollback();
            $this->response = $e->getMessage();
        }
        return $this->response;
    }
    public function createLines()

    
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_expense_requisition_accounting_lines` (`expa_lines_date_created`,`expa_lines_no`,`expa_lines_account_no`,
        `expa_lines_account_name`,`expa_lines_amount`,`expa_lines_due_date`,`expa_lines_advance_holder`,`expa_lines_actual_spent`,`expa_lines_cost_center`,
        `expa_lines_surrender_date`,`expa_lines_surrendered`,`expa_lines_date_issued`,`expa_lines_cash_surrender_amt`,`expa_lines_surrender_doc_no`,
        `expa_lines_date_taken`,`expa_lines_purpose`,`expa_lines_country`,`expa_lines_currency_code`,`expa_lines_amount_lcy`,`expa_lines_claim_receipt_no`,
        `expa_lines_expenditure_date`,`expa_lines_attendee_organisation_names`,`expa_lines_account_type`,`expa_lines_company`,`expa_lines_product_center`,
        `expa_lines_profit_center`,`expa_lines_project`,`expa_lines_rd_project`,`expa_lines_directors`)
        VALUES(:expa_lines_date_created,:expa_lines_no,:expa_lines_account_no,:expa_lines_account_name,:expa_lines_amount,:expa_lines_due_date,:expa_lines_advance_holder,:expa_lines_actual_spent,
        :expa_lines_cost_center,:expa_lines_surrender_date,:expa_lines_surrendered,:expa_lines_date_issued,:expa_lines_cash_surrender_amt,:expa_lines_surrender_doc_no,:expa_lines_date_taken,:expa_lines_purpose,
        :expa_lines_country,:expa_lines_currency_code,:expa_lines_amount_lcy,:expa_lines_claim_receipt_no,:expa_lines_expenditure_date,:expa_lines_attendee_organisation_names,:expa_lines_account_type,
        :expa_lines_company,:expa_lines_product_center,:expa_lines_profit_center,:expa_lines_project,:expa_lines_rd_project,:expa_lines_directors)");
        $result->bindParam(':expa_lines_date_created', $this->expa_lines_date_created, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_no', $this->expa_lines_no, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_account_no', $this->expa_lines_account_no, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_account_name', $this->expa_lines_account_name, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_amount', $this->expa_lines_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_due_date', $this->expa_lines_due_date, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_advance_holder', $this->expa_lines_advance_holder, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_actual_spent', $this->expa_lines_actual_spent, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_cost_center', $this->expa_lines_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_surrender_date', $this->expa_lines_surrender_date, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_surrendered', $this->expa_lines_surrendered, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_date_issued', $this->expa_lines_date_issued, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_cash_surrender_amt', $this->expa_lines_cash_surrender_amt, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_surrender_doc_no', $this->expa_lines_surrender_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_date_taken', $this->expa_lines_date_taken, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_purpose', $this->expa_lines_purpose, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_country', $this->expa_lines_country, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_currency_code', $this->expa_lines_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_amount_lcy', $this->expa_lines_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_claim_receipt_no', $this->expa_lines_claim_receipt_no, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_expenditure_date', $this->expa_lines_expenditure_date, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_attendee_organisation_names', $this->expa_lines_attendee_organisation_names, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_account_type', $this->expa_lines_account_type, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_company', $this->expa_lines_company, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_product_center', $this->expa_lines_product_center, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_profit_center', $this->expa_lines_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_project', $this->expa_lines_project, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_rd_project', $this->expa_lines_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expa_lines_directors', $this->expa_lines_directors, PDO::PARAM_STR);

        try {
            $this->dbh->beginTransaction();
            $result->execute();
            $this->dbh->commit();
            $this->response = 1;
        } catch (PDOException $e) {
            $this->dbh->rollback();
            $this->response = $e->getMessage();
        }
        return $this->response;
    }
  
    public function update()
    {
        $result = $this->dbh->prepare("UPDATE `ess_expense_requisition_accounting` SET
        `expa_date_updated` = :expa_date_updated,
        `expa_no` = :expa_no,
        `expa_date` = :expa_date,
        `expa_currency_code` = :expa_currency_code,
        `expa_payee` = :expa_payee,
        `expa_on_behald_of` = :expa_on_behald_of,
        `expa_total_payment_amount` = :expa_total_payment_amount,
        `expa_cost_center` = :expa_cost_center,
        `expa_statuss` = :expa_statuss,
        `expa_country` = :expa_country,
        `expa_total_vat_amount` = :expa_total_vat_amount,
        `expa_total_witholding_tax_amount` = :expa_total_witholding_tax_amount,
        `expa_total_net_amount` = :expa_total_net_amount,
        `expa_current_status` = :expa_current_status,
        `expa_transaction_reference_number` = :expa_transaction_reference_number,
        `expa_pay_mode` = :expa_pay_mode,
        `expa_payment_release_date` = :expa_payment_release_date,
        `expa_exachange_rate` = :expa_exachange_rate,
        `expa_total_net_amount_lcy` = :expa_total_net_amount_lcy,
        `expa_company` = :expa_company,
        `expa_product_center` = :expa_product_center,
        `expa_profit_center` = :expa_profit_center,
        `expa_project_center` = :expa_project_center,
        `expa_account_type` = :expa_account_type,
        `expa_account_no` = :expa_account_no,
        `expa_surrender_status` = :expa_surrender_status,
        `expa_purpose` = :expa_purpose,
        `expa_rd_project` = :expa_rd_project,
        `expa_directors` = :expa_directors
        WHERE `expa_id` = :expa_id");
        $result->bindParam(':expa_date_updated', $this->expa_date_updated, PDO::PARAM_STR);
        $result->bindParam(':expa_no', $this->expa_no, PDO::PARAM_STR);
        $result->bindParam(':expa_date', $this->expa_date, PDO::PARAM_STR);
        $result->bindParam(':expa_currency_code', $this->expa_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expa_payee', $this->expa_payee, PDO::PARAM_STR);
        $result->bindParam(':expa_on_behald_of', $this->expa_on_behald_of, PDO::PARAM_STR);
        $result->bindParam(':expa_total_payment_amount', $this->expa_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_cost_center', $this->expa_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expa_statuss', $this->expa_statuss, PDO::PARAM_STR);
        $result->bindParam(':expa_country', $this->expa_country, PDO::PARAM_STR);
        $result->bindParam(':expa_total_vat_amount', $this->expa_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_total_witholding_tax_amount', $this->expa_total_witholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_total_net_amount', $this->expa_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expa_current_status', $this->expa_current_status, PDO::PARAM_STR);
        $result->bindParam(':expa_transaction_reference_number', $this->expa_transaction_reference_number, PDO::PARAM_STR);
        $result->bindParam(':expa_pay_mode', $this->expa_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expa_payment_release_date', $this->expa_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expa_exachange_rate', $this->expa_exachange_rate, PDO::PARAM_STR);
        $result->bindParam(':expa_total_net_amount_lcy', $this->expa_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expa_company', $this->expa_company, PDO::PARAM_STR);
        $result->bindParam(':expa_product_center', $this->expa_product_center, PDO::PARAM_STR);
        $result->bindParam(':expa_profit_center', $this->expa_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expa_project_center', $this->expa_project_center, PDO::PARAM_STR);
        $result->bindParam(':expa_account_type', $this->expa_account_type, PDO::PARAM_STR);
        $result->bindParam(':expa_account_no', $this->expa_account_no, PDO::PARAM_STR);
        $result->bindParam(':expa_surrender_status', $this->expa_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expa_purpose', $this->expa_purpose, PDO::PARAM_STR);
        $result->bindParam(':expa_rd_project', $this->expa_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expa_directors', $this->expa_directors, PDO::PARAM_STR);
        $result->bindParam(':expa_id', $this->expa_id, PDO::PARAM_INT);
        try {
            $this->dbh->beginTransaction();
            $result->execute();
            $this->dbh->commit();
            $this->response = 1;
        } catch (PDOException $e) {
            $this->dbh->rollback();
            $this->response = $e->getMessage();
        }
        return $this->response;
    }
       
    public function updateLines()
    {
        $result = $this->dbh->prepare("UPDATE `ess_expense_requisition_accounting_lines` SET
        `expa_lines_date_updated`=:expa_lines_date_updated,
        `expa_lines_no` = :expa_lines_no,
        `expa_lines_account_no` = :expa_lines_account_no,
        `expa_lines_account_name` = :expa_lines_account_name,
        `expa_lines_amount` = :expa_lines_amount,
        `expa_lines_due_date` = :expa_lines_due_date,
        `expa_lines_advance_holder` = :expa_lines_advance_holder,
        `expa_lines_actual_spent` = :expa_lines_actual_spent,
        `expa_lines_cost_center` = :expa_lines_cost_center,
        `expa_lines_surrender_date` = :expa_lines_surrender_date,
        `expa_lines_surrendered` = :expa_lines_surrendered,
        `expa_lines_date_issued` = :expa_lines_date_issued,
        `expa_lines_cash_surrender_amt` = :expa_lines_cash_surrender_amt,
        `expa_lines_surrender_doc_no` = :expa_lines_surrender_doc_no,
        `expa_lines_date_taken` = :expa_lines_date_taken,
        `expa_lines_purpose` = :expa_lines_purpose,
        `expa_lines_country` = :expa_lines_country,
        `expa_lines_currency_code` = :expa_lines_currency_code,
        `expa_lines_amount_lcy` = :expa_lines_amount_lcy,
        `expa_lines_claim_receipt_no` = :expa_lines_claim_receipt_no,
        `expa_lines_expenditure_date` = :expa_lines_expenditure_date,
        `expa_lines_attendee_organisation_names` = :expa_lines_attendee_organisation_names,
        `expa_lines_account_type` = :expa_lines_account_type,
        `expa_lines_company` = :expa_lines_company,
        `expa_lines_product_center` = :expa_lines_product_center,
        `expa_lines_profit_center` = :expa_lines_profit_center,
        `expa_lines_project` = :expa_lines_project,
        `expa_lines_rd_project` = :expa_lines_rd_project,
        `expa_lines_directors` = :expa_lines_directors
    WHERE `expa_lines_id` = :expa_lines_id");
    $result->bindParam(':expa_lines_date_updated', $this->expa_lines_date_updated, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_no', $this->expa_lines_no, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_account_no', $this->expa_lines_account_no, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_account_name', $this->expa_lines_account_name, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_amount', $this->expa_lines_amount, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_due_date', $this->expa_lines_due_date, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_advance_holder', $this->expa_lines_advance_holder, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_actual_spent', $this->expa_lines_actual_spent, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_cost_center', $this->expa_lines_cost_center, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_surrender_date', $this->expa_lines_surrender_date, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_surrendered', $this->expa_lines_surrendered, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_date_issued', $this->expa_lines_date_issued, PDO::PARAM_STR); 
    $result->bindParam(':expa_lines_cash_surrender_amt', $this->expa_lines_cash_surrender_amt, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_surrender_doc_no', $this->expa_lines_surrender_doc_no, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_date_taken', $this->expa_lines_date_taken, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_purpose', $this->expa_lines_purpose, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_country', $this->expa_lines_country, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_currency_code', $this->expa_lines_currency_code, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_amount_lcy', $this->expa_lines_amount_lcy, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_claim_receipt_no', $this->expa_lines_claim_receipt_no, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_expenditure_date', $this->expa_lines_expenditure_date, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_attendee_organisation_names', $this->expa_lines_attendee_organisation_names, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_account_type', $this->expa_lines_account_type, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_company', $this->expa_lines_company, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_product_center', $this->expa_lines_product_center, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_profit_center', $this->expa_lines_profit_center, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_project', $this->expa_lines_project, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_rd_project', $this->expa_lines_rd_project, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_directors', $this->expa_lines_directors, PDO::PARAM_STR);
    $result->bindParam(':expa_lines_id', $this->expa_lines_id, PDO::PARAM_INT);
    try {
        $this->dbh->beginTransaction();
        $result->execute();
        $this->dbh->commit();
        $this->response = 1;
    } catch (PDOException $e) {
        $this->dbh->rollback();
        $this->response = $e->getMessage();
    }
    return $this->response;
    }
}