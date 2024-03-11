<?php

/**
 * Author : brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Time : 30/11/2023
 * Email : brayoikoya@gmail.com
 * File : ESSExpenseclaimUI.class.php
 */
class ESSExpenseclaimUI
{
    public $dbh;
    public static $primaryKey = "expc_id";
    public static $tableName = "ess_expense_claim";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $expc_id; 
    public $expc_date_created;
    public $expc_date_updated;
    public $expc_created_by;
    public $expc_updated_by;
    public $expc_status;
    public $expc_no;
    public $expc_date;
    public $expc_currency_code;
    public $expc_payee;
    public $expc_on_behalf_of;
    public $expc_total_payment_amount;
    public $expc_paying_bank_account;
    public $expc_cost_center;
    public $expc_statuss;
    public $expc_country;
    public $expc_bank_name;
    public $expc_total_vat_amount;
    public $expc_total_withholding_tax_amount;
    public $expc_total_net_amount;
    public $expc_current_status;
    public $expc_transaction_reference_number;
    public $expc_pay_mode;
    public $expc_payment_release_date;
    public $expc_exchange_rate;
    public $expc_total_net_amount_lcy;
    public $expc_company;
    public $expc_product_center;
    public $expc_profit_center;
    public $expc_project_center;
    public $expc_account_type;
    public $expc_account_no;
    public $expc_surrender_status;
    public $expc_purpose;
    public $expc_external_document_no;
    public $expc_creation_doc_no;
    public $expc_imprest_surrender_no;
    public $expc_staff_advance_surrender_no;
    public $expc_rd_project;
    public $expc_directors;
    public $expc_publish;

    public $response;


    public static function read()
    {
        self::$extraWhere = " expc_publish = 1";
        self::$columns = [
                ['db' => 'expc_no', 'dt' => 0],
                ['db' => 'expc_date_created', 'dt' => 1],
                ['db' => 'expc_payee', 'dt' => 2],
                ['db' => 'expc_total_payment_amount', 'dt' => 3],
                ['db' => 'expc_cost_center', 'dt' => 4],
                ['db' => 'expc_country', 'dt' => 5],
                ['db' => 'expc_pay_mode', 'dt' => 6],
                ['db' => 'expc_payment_release_date', 'dt' => 7],
                ['db' => 'expc_account_no', 'dt' => 8],
                ['db' => 'expc_purpose', 'dt' => 9],
                ['db' => 'expc_external_document_no', 'dt' => 10],
                ['db' => 'expc_id',
                'dt' => 11,
                'formatter' => function ($d, $row) {
                    return $row;
                },
            ]
        ];
    }

    public static function readBKP()
    {
        self::$extraWhere = " expc_publish = 1";
        self::$columns = [
            ['db' => 'expc_date_created', 'dt' => 0],
            ['db' => 'expc_no', 'dt' => 1],
            ['db' => 'expc_date', 'dt' => 2],
            ['db' => 'expc_currency_code', 'dt' => 3],
            ['db' => 'expc_payee', 'dt' => 4],
            ['db' => 'expc_on_behalf_of', 'dt' => 5],
            ['db' => 'expc_total_payment_amount', 'dt' => 6],
            ['db' => 'expc_paying_bank_account', 'dt' => 7],
            ['db' => 'expc_cost_center', 'dt' => 8],
            ['db' => 'expc_statuss', 'dt' => 9],
            ['db' => 'expc_country', 'dt' => 10],
            ['db' => 'expc_bank_name', 'dt' => 11],
            ['db' => 'expc_total_vat_amount', 'dt' => 12],
            ['db' => 'expc_total_withholding_tax_amount', 'dt' => 13],
            ['db' => 'expc_total_net_amount', 'dt' => 14],
            ['db' => 'expc_current_status', 'dt' => 15],
            ['db' => 'expc_transaction_reference_number', 'dt' => 16],
            ['db' => 'expc_pay_mode', 'dt' => 17],
            ['db' => 'expc_payment_release_date', 'dt' => 18],
            ['db' => 'expc_exchange_rate', 'dt' => 19],
            ['db' => 'expc_total_net_amount_lcy', 'dt' => 20],
            ['db' => 'expc_company', 'dt' => 21],
            ['db' => 'expc_product_center', 'dt' => 22],
            ['db' => 'expc_profit_center', 'dt' => 23],
            ['db' => 'expc_project_center', 'dt' => 24],
            ['db' => 'expc_account_type', 'dt' => 25],
            ['db' => 'expc_account_no', 'dt' => 26],
            ['db' => 'expc_surrender_status', 'dt' => 27],
            ['db' => 'expc_purpose', 'dt' => 28],
            ['db' => 'expc_external_document_no', 'dt' => 29],
            ['db' => 'expc_creation_doc_no', 'dt' => 30],
            ['db' => 'expc_imprest_surrender_no', 'dt' => 31],
            ['db' => 'expc_staff_advance_surrender_no', 'dt' => 32],
            ['db' => 'expc_rd_project', 'dt' => 33],
            ['db' => 'expc_directors', 'dt' =>34],
            ['db' => 'expc_id',
                'dt' => 35,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }

    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_expense_claim` WHERE `expc_id` = :expc_id");
        $result->bindParam(':expc_id', $this->expc_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }
    
     public function detailLines()
    {
        $result = $this->dbh->prepare("SELECT * FROM `ess_expense_claim_lines` WHERE `expc_lines_id` = :expc_lines_id");
        $result->bindParam(':expc_lines_id', $this->expc_lines_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    public function create()
    
    {
        $result = $this->dbh->prepare("INSERT INTO `ess_expense_claim` (`expc_date_created`,`expc_no`,`expc_date`,`expc_currency_code`,`expc_payee`,`expc_on_behalf_of`,
        `expc_total_payment_amount`,`expc_paying_bank_account`,`expc_cost_center`,`expc_statuss`,`expc_country`,`expc_bank_name`,`expc_total_vat_amount`,`expc_total_withholding_tax_amount`,
        `expc_total_net_amount`,`expc_current_status`,`expc_transaction_reference_number`,`expc_pay_mode`,`expc_payment_release_date`,`expc_exchange_rate`,`expc_total_net_amount_lcy`,
        `expc_company`,`expc_product_center`,`expc_profit_center`,`expc_project_center`,`expc_account_type`,`expc_account_no`,`expc_surrender_status`,`expc_purpose`,`expc_external_document_no`,
        `expc_creation_doc_no`,`expc_imprest_surrender_no`,`expc_staff_advance_surrender_no`,`expc_rd_project`,`expc_directors`)
        VALUES(:expc_date_created,:expc_no,:expc_date,:expc_currency_code,:expc_payee,:expc_on_behalf_of,:expc_total_payment_amount,:expc_paying_bank_account,:expc_cost_center,:expc_statuss,
        :expc_country,:expc_bank_name,:expc_total_vat_amount,:expc_total_withholding_tax_amount,:expc_total_net_amount,:expc_current_status,
        :expc_transaction_reference_number,:expc_pay_mode,:expc_payment_release_date,:expc_exchange_rate,:expc_total_net_amount_lcy,:expc_company,
        :expc_product_center,:expc_profit_center,:expc_project_center,:expc_account_type,:expc_account_no,:expc_surrender_status,:expc_purpose,
        :expc_external_document_no,:expc_creation_doc_no,:expc_imprest_surrender_no,:expc_staff_advance_surrender_no,:expc_rd_project,:expc_directors)");   
        $result->bindParam(':expc_date_created', $this->expc_date_created, PDO::PARAM_STR);
        $result->bindParam(':expc_no', $this->expc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_date', $this->expc_date, PDO::PARAM_STR);
        $result->bindParam(':expc_currency_code', $this->expc_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expc_payee', $this->expc_payee, PDO::PARAM_STR);
        $result->bindParam(':expc_on_behalf_of', $this->expc_on_behalf_of, PDO::PARAM_STR);
        $result->bindParam(':expc_total_payment_amount', $this->expc_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_paying_bank_account', $this->expc_paying_bank_account, PDO::PARAM_STR);
        $result->bindParam(':expc_cost_center', $this->expc_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expc_statuss', $this->expc_statuss, PDO::PARAM_STR);
        $result->bindParam(':expc_country', $this->expc_country, PDO::PARAM_STR);
        $result->bindParam(':expc_bank_name', $this->expc_bank_name, PDO::PARAM_STR);
        $result->bindParam(':expc_total_vat_amount', $this->expc_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_total_withholding_tax_amount', $this->expc_total_withholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_total_net_amount', $this->expc_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_current_status', $this->expc_current_status, PDO::PARAM_STR);
        $result->bindParam(':expc_transaction_reference_number', $this->expc_transaction_reference_number, PDO::PARAM_STR);
        $result->bindParam(':expc_pay_mode', $this->expc_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expc_payment_release_date', $this->expc_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expc_exchange_rate', $this->expc_exchange_rate, PDO::PARAM_STR);
        $result->bindParam(':expc_total_net_amount_lcy', $this->expc_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expc_company', $this->expc_company, PDO::PARAM_STR);
        $result->bindParam(':expc_product_center', $this->expc_product_center, PDO::PARAM_STR);
        $result->bindParam(':expc_profit_center', $this->expc_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expc_project_center', $this->expc_project_center, PDO::PARAM_STR);
        $result->bindParam(':expc_account_type', $this->expc_account_type, PDO::PARAM_STR);
        $result->bindParam(':expc_account_no', $this->expc_account_no, PDO::PARAM_STR);
        $result->bindParam(':expc_surrender_status', $this->expc_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expc_purpose', $this->expc_purpose, PDO::PARAM_STR);
        $result->bindParam(':expc_external_document_no', $this->expc_external_document_no, PDO::PARAM_STR);
        $result->bindParam(':expc_creation_doc_no', $this->expc_creation_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_imprest_surrender_no', $this->expc_imprest_surrender_no, PDO::PARAM_STR);
        $result->bindParam(':expc_staff_advance_surrender_no', $this->expc_staff_advance_surrender_no, PDO::PARAM_STR);
        $result->bindParam(':expc_rd_project', $this->expc_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expc_directors', $this->expc_directors, PDO::PARAM_STR);
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
        $result = $this->dbh->prepare("INSERT INTO `ess_expense_claim_lines` (`expc_lines_date_created`,`expc_lines_no`,
        `expc_lines_account_no`,`expc_lines_account_name`,`expc_lines_amount`,`expc_lines_due_date`,
        `expc_lines_advance_holder`,`expc_lines_actual_spent`,`expc_lines_cost_center`,`expc_lines_surrender_date`,`expc_lines_surrendered`,
        `expc_lines_date_issued`,`expc_lines_cash_surrender_amt`,`expc_lines_surrender_doc_no`,
        `expc_lines_date_taken`,`expc_lines_purpose`,`expc_lines_country`,`expc_lines_currecy_code`,
        `expc_lines_amount_lcy`,`expc_lines_claim_reciept_no`,`expc_lines_expenditure_date`,
        `expc_lines_organization_names`,`expc_lines_account_type`,`expc_lines_company`,`expc_lines_product_center`,`expc_lines_profit_center`,
        `expc_lines_project`,`expc_lines_rd_project`,`expc_lines_directors`)
        VALUES(:expc_lines_date_created,:expc_lines_no,:expc_lines_account_no,:expc_lines_account_name,
        :expc_lines_amount,:expc_lines_due_date,:expc_lines_advance_holder,:expc_lines_actual_spent,:expc_lines_cost_center,:expc_lines_surrender_date,
        :expc_lines_surrendered,:expc_lines_date_issued,:expc_lines_cash_surrender_amt,:expc_lines_surrender_doc_no,:expc_lines_date_taken,
        :expc_lines_purpose,
        :expc_lines_country,:expc_lines_currecy_code,:expc_lines_amount_lcy,
        :expc_lines_claim_reciept_no,:expc_lines_expenditure_date,:expc_lines_organization_names,
        :expc_lines_account_type,:expc_lines_company,:expc_lines_product_center,:expc_lines_profit_center,
        :expc_lines_project,:expc_lines_rd_project,:expc_lines_directors)");   
        $result->bindParam(':expc_lines_date_created', $this->expc_lines_date_created, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_no', $this->expc_lines_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_no', $this->expc_lines_account_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_name', $this->expc_lines_account_name, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_amount', $this->expc_lines_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_due_date', $this->expc_lines_due_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_advance_holder', $this->expc_lines_advance_holder, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_actual_spent', $this->expc_lines_actual_spent, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_cost_center', $this->expc_lines_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrender_date', $this->expc_lines_surrender_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrendered', $this->expc_lines_surrendered, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_date_issued', $this->expc_lines_date_issued, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_cash_surrender_amt', $this->expc_lines_cash_surrender_amt, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrender_doc_no', $this->expc_lines_surrender_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_date_taken', $this->expc_lines_date_taken, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_purpose', $this->expc_lines_purpose, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_country', $this->expc_lines_country, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_currecy_code', $this->expc_lines_currecy_code, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_amount_lcy', $this->expc_lines_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_claim_reciept_no', $this->expc_lines_claim_reciept_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_expenditure_date', $this->expc_lines_expenditure_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_organization_names', $this->expc_lines_organization_names, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_type', $this->expc_lines_account_type, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_company', $this->expc_lines_company, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_product_center', $this->expc_lines_product_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_profit_center', $this->expc_lines_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_project', $this->expc_lines_project, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_rd_project', $this->expc_lines_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_directors', $this->expc_lines_directors, PDO::PARAM_STR);

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
       
        $result = $this->dbh->prepare("UPDATE `ess_expense_claim` SET
        `expc_date_updated` = :expc_date_updated,
        `expc_no` = :expc_no,
        `expc_date` = :expc_date,
        `expc_currency_code` = :expc_currency_code,
        `expc_payee` = :expc_payee,
        `expc_on_behalf_of` = :expc_on_behalf_of,
        `expc_total_payment_amount` = :expc_total_payment_amount,
        `expc_paying_bank_account` = :expc_paying_bank_account,
        `expc_cost_center` = :expc_cost_center,
        `expc_statuss` = :expc_statuss,
        `expc_country` = :expc_country,
        `expc_bank_name` = :expc_bank_name,
        `expc_total_vat_amount` = :expc_total_vat_amount,
        `expc_total_withholding_tax_amount` = :expc_total_withholding_tax_amount,
        `expc_total_net_amount` = :expc_total_net_amount,
        `expc_current_status` = :expc_current_status,
        `expc_transaction_reference_number` = :expc_transaction_reference_number,
        `expc_pay_mode` = :expc_pay_mode,
        `expc_payment_release_date` = :expc_payment_release_date,
        `expc_exchange_rate` = :expc_exchange_rate,
        `expc_total_net_amount_lcy` = :expc_total_net_amount_lcy,
        `expc_company` = :expc_company,
        `expc_product_center` = :expc_product_center,
        `expc_profit_center` = :expc_profit_center,
        `expc_project_center` = :expc_project_center,
        `expc_account_type` = :expc_account_type,
        `expc_account_no` = :expc_account_no,
        `expc_surrender_status` = :expc_surrender_status,
        `expc_purpose` = :expc_purpose,
        `expc_external_document_no` = :expc_external_document_no,
        `expc_creation_doc_no` = :expc_creation_doc_no,
        `expc_imprest_surrender_no` = :expc_imprest_surrender_no,
        `expc_staff_advance_surrender_no` = :expc_staff_advance_surrender_no,
        `expc_rd_project` = :expc_rd_project,
        `expc_directors` = :expc_directors      
        WHERE `expc_id` = :expc_id");
        $result->bindParam(':expc_date_updated', $this->expc_date_updated, PDO::PARAM_STR);
        $result->bindParam(':expc_date_created', $this->expc_date_created, PDO::PARAM_STR);
        $result->bindParam(':expc_no', $this->expc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_date', $this->expc_date, PDO::PARAM_STR);
        $result->bindParam(':expc_currency_code', $this->expc_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expc_payee', $this->expc_payee, PDO::PARAM_STR);
        $result->bindParam(':expc_on_behalf_of', $this->expc_on_behalf_of, PDO::PARAM_STR);
        $result->bindParam(':expc_total_payment_amount', $this->expc_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_paying_bank_account', $this->expc_paying_bank_account, PDO::PARAM_STR);
        $result->bindParam(':expc_cost_center', $this->expc_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expc_statuss', $this->expc_statuss, PDO::PARAM_STR);
        $result->bindParam(':expc_country', $this->expc_country, PDO::PARAM_STR);
        $result->bindParam(':expc_bank_name', $this->expc_bank_name, PDO::PARAM_STR);
        $result->bindParam(':expc_total_vat_amount', $this->expc_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_total_withholding_tax_amount', $this->expc_total_withholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_total_net_amount', $this->expc_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_current_status', $this->expc_current_status, PDO::PARAM_STR);
        $result->bindParam(':expc_transaction_reference_number', $this->expc_transaction_reference_number, PDO::PARAM_STR);
        $result->bindParam(':expc_pay_mode', $this->expc_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expc_payment_release_date', $this->expc_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expc_exchange_rate', $this->expc_exchange_rate, PDO::PARAM_STR); 
        $result->bindParam(':expc_total_net_amount_lcy', $this->expc_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expc_company', $this->expc_company, PDO::PARAM_STR);
        $result->bindParam(':expc_product_center', $this->expc_product_center, PDO::PARAM_STR);
        $result->bindParam(':expc_profit_center', $this->expc_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expc_project_center', $this->expc_project_center, PDO::PARAM_STR);
        $result->bindParam(':expc_account_type', $this->expc_account_type, PDO::PARAM_STR);
        $result->bindParam(':expc_account_no', $this->expc_account_no, PDO::PARAM_STR);
        $result->bindParam(':expc_surrender_status', $this->expc_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expc_purpose', $this->expc_purpose, PDO::PARAM_STR);
        $result->bindParam(':expc_external_document_no', $this->expc_external_document_no, PDO::PARAM_STR);
        $result->bindParam(':expc_creation_doc_no', $this->expc_creation_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_imprest_surrender_no', $this->expc_imprest_surrender_no, PDO::PARAM_STR);
        $result->bindParam(':expc_staff_advance_surrender_no', $this->expc_staff_advance_surrender_no, PDO::PARAM_STR);
        $result->bindParam(':expc_rd_project', $this->expc_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expc_directors', $this->expc_directors, PDO::PARAM_STR);
        $result->bindParam(':expc_id', $this->expc_id, PDO::PARAM_INT);
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
       
        $result = $this->dbh->prepare("UPDATE `ess_expense_claim_lines` SET
        `expc_lines_date_updated` = :expc_lines_date_updated,
        `expc_lines_no` = :expc_lines_no,
        `expc_lines_account_no` = :expc_lines_account_no,
        `expc_lines_account_name` = :expc_lines_account_name,
        `expc_lines_amount` = :expc_lines_amount,
        `expc_lines_due_date` = :expc_lines_due_date,
        `expc_lines_advance_holder` = :expc_lines_advance_holder,
        `expc_lines_actual_spent` = :expc_lines_actual_spent,
        `expc_lines_cost_center` = :expc_lines_cost_center,
        `expc_lines_surrender_date` = :expc_lines_surrender_date,
        `expc_lines_surrendered` = :expc_lines_surrendered,
        `expc_lines_date_issued` = :expc_lines_date_issued,
        `expc_lines_cash_surrender_amt` = :expc_lines_cash_surrender_amt,
        `expc_lines_surrender_doc_no` = :expc_lines_surrender_doc_no,
        `expc_lines_date_taken` = :expc_lines_date_taken,
        `expc_lines_purpose` = :expc_lines_purpose,
        `expc_lines_country` = :expc_lines_country,
        `expc_lines_currecy_code` = :expc_lines_currecy_code,
        `expc_lines_amount_lcy` = :expc_lines_amount_lcy,
        `expc_lines_claim_reciept_no` = :expc_lines_claim_reciept_no,
        `expc_lines_expenditure_date` = :expc_lines_expenditure_date,
        `expc_lines_organization_names` = :expc_lines_organization_names,
        `expc_lines_account_type` = :expc_lines_account_type,
        `expc_lines_company` = :expc_lines_company,
        `expc_lines_product_center` = :expc_lines_product_center,
        `expc_lines_profit_center` = :expc_lines_profit_center,
        `expc_lines_project` = :expc_lines_project,
        `expc_lines_rd_project` = :expc_lines_rd_project,
        `expc_lines_directors` = :expc_lines_directors     
        WHERE `expc_lines_id` = :expc_lines_id");
        $result->bindParam(':expc_lines_date_updated', $this->expc_lines_date_updated, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_no', $this->expc_lines_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_no', $this->expc_lines_account_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_name', $this->expc_lines_account_name, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_amount', $this->expc_lines_amount, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_due_date', $this->expc_lines_due_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_advance_holder', $this->expc_lines_advance_holder, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_actual_spent', $this->expc_lines_actual_spent, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_cost_center', $this->expc_lines_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrender_date', $this->expc_lines_surrender_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrendered', $this->expc_lines_surrendered, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_date_issued', $this->expc_lines_date_issued, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_cash_surrender_amt', $this->expc_lines_cash_surrender_amt, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_surrender_doc_no', $this->expc_lines_surrender_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_date_taken', $this->expc_lines_date_taken, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_purpose', $this->expc_lines_purpose, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_country', $this->expc_lines_country, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_currecy_code', $this->expc_lines_currecy_code, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_amount_lcy', $this->expc_lines_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_claim_reciept_no', $this->expc_lines_claim_reciept_no, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_expenditure_date', $this->expc_lines_expenditure_date, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_organization_names', $this->expc_lines_organization_names, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_account_type', $this->expc_lines_account_type, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_company', $this->expc_lines_company, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_product_center', $this->expc_lines_product_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_profit_center', $this->expc_lines_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_project', $this->expc_lines_project, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_rd_project', $this->expc_lines_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_directors', $this->expc_lines_directors, PDO::PARAM_STR);
        $result->bindParam(':expc_lines_id', $this->expc_lines_id, PDO::PARAM_INT);
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




    