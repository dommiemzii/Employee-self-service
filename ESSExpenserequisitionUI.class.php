<?php
/**
 * Author : sallykanze.
 * Organization : Qasava Solutions LTD
 * Time : 27/11/2023
 * Email : sallykanze9@gmail.com
 * File : ESSExpenserequisitionUI.class.php
 */
class ESSExpenserequisitionUI
{
    public $dbh;
    public static $primaryKey = "expe_id";
    public static $tableName = "ess_expense_requisition";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //END OF DATA TABLE VARIBLES
    public $expe_id; 
    public $expe_date_created;
    public $expe_date_updated;
    public $expe_created_by;
    public $expe_updated_by;
    public $expe_no;
    public $expe_date;
    public $expe_currency_code;
    public $expe_payee;
    public $expe_on_behalf_of;
    public $expe_total_payment_amount;
    public $expe_paying_bank_account;
    public $expe_cost_center;
    public $expe_statuss;
    public $expe_country;
    public $expe_total_vat_amount;
    public $expe_total_withholding_tax_amount;
    public $expe_total_net_amount;
    public $expe_transaction_reference;
    public $expe_pay_mode;
    public $expe_payment_release_date;
    public $expe_exchange_rate;
    public $expe_total_net_amount_lcy;
    public $expe_company;
    public $expe_product_center;
    public $expe_profit_center;
    public $expe_project_center;
    public $expe_account_type;
    public $expe_account_no;
    public $expe_surrender_status;
    public $expe_purpose;
    public $expe_rd_project;
    public $expe_directors;
    public $expe_status;
    public $expe_publish;
    // expenserequisitionlines
    public $expe_lines_id; 
    public $expe_lines_date_created;
    public $expe_lines_date_updated;
    public $expe_lines_created_by;
    public $expe_lines_updated_by;
    public $expe_lines_no;
    public $expe_lines_account_no;
    public $expe_lines_account_name;
    public $expe_lines_amount;
    public $expe_lines_due_date;
    public $expe_lines_advance_holder;
    public $expe_lines_actual_spent;
    public $expe_lines_cost_center;
    public $expe_lines_surrender_date;
    public $expe_lines_surrendered;
    public $expe_lines_date_issued;
    public $expe_lines_cash_surrender_amount;
    public $expe_lines_surrender_doc_no;
    public $expe_lines_date_taken;
    public $expe_lines_purpose;
    public $expe_lines_country;
    public $expe_lines_currency_code;
    public $expe_lines_amount_lcy;
    public $expe_lines_claim_receipt_no;
    public $expe_lines_expenditure_date;
    public $expe_lines_attendee_organization_name;
    public $expe_lines_status;
    public $expe_lines_company;
    public $expe_lines_product_center;
    public $expe_lines_profit_center;
    public $expe_lines_project;
    public $expe_lines_rd_project;
    public $expe_lines_directors;
    public $expe_lines_publish;
    public $response;

    public static function read()
    {
        self::$extraWhere = " expe_publish = 1";
        self::$columns = [
                ['db' => 'expe_date_created', 'dt' => 0],
                ['db' => 'expe_no', 'dt' => 1],
                ['db' => 'expe_date', 'dt' => 2],
                ['db' => 'expe_currency_code', 'dt' => 3],
                ['db' => 'expe_payee', 'dt' => 4],
                ['db' => 'expe_on_behalf_of', 'dt' => 5],
                ['db' => 'expe_total_payment_amount', 'dt' => 6],
                ['db' => 'expe_paying_bank_account', 'dt' => 7],
                ['db' => 'expe_cost_center', 'dt' => 8],
                ['db' => 'expe_statuss', 'dt' => 9],
                ['db' => 'expe_country', 'dt' => 10],
                ['db' => 'expe_id',
                'dt' => 11,
                'formatter' => function ($d, $row) {
                    return $row;
                }
            ]
        ];
    }

    public static function readBKP()
    {
        self::$extraWhere = " expe_publish = 1";
        self::$columns = [
                ['db' => 'expe_date_created', 'dt' => 0],
                ['db' => 'expe_no', 'dt' => 1],
                ['db' => 'expe_date', 'dt' => 2],
                ['db' => 'expe_currency_code', 'dt' => 3],
                ['db' => 'expe_payee', 'dt' => 4],
                ['db' => 'expe_on_behalf_of', 'dt' => 5],
                ['db' => 'expe_total_payment_amount', 'dt' => 6],
                ['db' => 'expe_paying_bank_account', 'dt' => 7],
                ['db' => 'expe_cost_center', 'dt' => 8],
                ['db' => 'expe_statuss', 'dt' => 9],
                ['db' => 'expe_country', 'dt' => 10],
                ['db' => 'expe_total_vat_amount', 'dt' => 11],
                ['db' => 'expe_total_withholding_tax_amount', 'dt' => 12],
                ['db' => 'expe_total_net_amount', 'dt' => 13],
                ['db' => 'expe_transaction_reference', 'dt' => 14],
                ['db' => 'expe_pay_mode', 'dt' => 15],
                ['db' => 'expe_payment_release_date', 'dt' => 16],
                ['db' => 'expe_exchange_rate', 'dt' => 17],
                ['db' => 'expe_total_net_amount_lcy', 'dt' => 18],
                ['db' => 'expe_company', 'dt' => 19],
                ['db' => 'expe_product_center', 'dt' => 20],
                ['db' => 'expe_profit_center', 'dt' => 21],
                ['db' => 'expe_project_center', 'dt' => 22],
                ['db' => 'expe_account_type', 'dt' => 23],
                ['db' => 'expe_account_no', 'dt' => 24],
                ['db' => 'expe_surrender_status', 'dt' => 25],
                ['db' => 'expe_purpose', 'dt' => 26],
                ['db' => 'expe_rd_project', 'dt' => 27],
                ['db' => 'expe_directors', 'dt' => 28],
                ['db' => 'expe_id',
                'dt' => 29,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }

    public function detail()
    {
        $result = $this->dbh->prepare("SELECT * FROM ess_expense_requisition WHERE expe_id = :expe_id");
        $result->bindParam(':expe_id', $this->expe_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }

    public function detailLines()
    {
        $result = $this->dbh->prepare("SELECT * FROM ess_expense_requisition_lines WHERE expe_lines_id = :expe_lines_id");
        $result->bindParam(':expe_lines_id', $this->expe_lines_id, PDO::PARAM_INT);
        $result->execute();
        $gotData = $result->fetch(PDO::FETCH_ASSOC);
        return $gotData;
    }



    public function create()
    {
        $result = $this->dbh->prepare("INSERT INTO  ess_expense_requisition(expe_date_created,
        expe_no, expe_date, expe_currency_code, expe_payee, expe_on_behalf_of,
       expe_total_payment_amount, expe_paying_bank_account, expe_cost_center, expe_statuss, expe_country, expe_total_vat_amount, 
       expe_total_withholding_tax_amount, expe_total_net_amount, expe_transaction_reference, expe_pay_mode, expe_payment_release_date,
      expe_exchange_rate, expe_total_net_amount_lcy, expe_company, expe_product_center, expe_profit_center, expe_project_center,
       expe_account_type, expe_account_no, expe_surrender_status,
      expe_purpose, expe_rd_project, expe_directors)
        VALUES(:expe_date_created,:expe_no,:expe_date,:expe_currency_code,:expe_payee,:expe_on_behalf_of,:expe_total_payment_amount,
        :expe_paying_bank_account,:expe_cost_center,:expe_statuss,:expe_country,
        :expe_total_vat_amount,:expe_total_withholding_tax_amount,:expe_total_net_amount,:expe_transaction_reference,
        :expe_pay_mode,:expe_payment_release_date,:expe_exchange_rate,:expe_total_net_amount_lcy,
        :expe_company,:expe_product_center,:expe_profit_center,
        :expe_project_center,:expe_account_type,:expe_account_no,:expe_surrender_status,:expe_purpose,:expe_rd_project,:expe_directors)");
        $result->bindParam(':expe_date_created', $this->expe_date_created, PDO::PARAM_STR);
        $result->bindParam(':expe_no', $this->expe_no, PDO::PARAM_STR);
        $result->bindParam(':expe_date', $this->expe_date, PDO::PARAM_STR);
        $result->bindParam(':expe_currency_code', $this->expe_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expe_payee', $this->expe_payee, PDO::PARAM_STR);
        $result->bindParam(':expe_on_behalf_of', $this->expe_on_behalf_of, PDO::PARAM_STR);
        $result->bindParam(':expe_total_payment_amount', $this->expe_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_paying_bank_account', $this->expe_paying_bank_account, PDO::PARAM_STR);
        $result->bindParam(':expe_cost_center', $this->expe_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expe_statuss', $this->expe_statuss, PDO::PARAM_STR);
        $result->bindParam(':expe_country', $this->expe_country, PDO::PARAM_STR);
        $result->bindParam(':expe_total_vat_amount', $this->expe_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_total_withholding_tax_amount', $this->expe_total_withholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_total_net_amount', $this->expe_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_transaction_reference', $this->expe_transaction_reference, PDO::PARAM_STR);
        $result->bindParam(':expe_pay_mode', $this->expe_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expe_payment_release_date', $this->expe_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expe_exchange_rate', $this->expe_exchange_rate, PDO::PARAM_STR);
        $result->bindParam(':expe_total_net_amount_lcy', $this->expe_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expe_company', $this->expe_company, PDO::PARAM_STR);
        $result->bindParam(':expe_product_center', $this->expe_product_center, PDO::PARAM_STR);
        $result->bindParam(':expe_profit_center', $this->expe_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expe_project_center', $this->expe_project_center, PDO::PARAM_STR);
        $result->bindParam(':expe_account_type', $this->expe_account_type, PDO::PARAM_STR);
        $result->bindParam(':expe_account_no', $this->expe_account_no, PDO::PARAM_STR);
        $result->bindParam(':expe_surrender_status', $this->expe_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expe_purpose', $this->expe_purpose, PDO::PARAM_STR);
        $result->bindParam(':expe_rd_project', $this->expe_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expe_directors', $this->expe_directors, PDO::PARAM_STR);
      
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
        $result = $this->dbh->prepare("INSERT INTO  ess_expense_requisition_lines(expe_lines_date_created,
           expe_lines_no, expe_lines_account_no, expe_lines_account_name, expe_lines_amount, expe_lines_due_date,
          expe_lines_advance_holder, expe_lines_actual_spent,expe_lines_cost_center,
           expe_lines_surrender_date, expe_lines_surrendered, expe_lines_date_issued, 
          expe_lines_cash_surrender_amount, expe_lines_surrender_doc_no,
           expe_lines_date_taken, expe_lines_purpose, expe_lines_country,
         expe_lines_currency_code,expe_lines_amount_lcy,
          expe_lines_claim_receipt_no, expe_lines_expenditure_date, expe_lines_attendee_organization_name,
          expe_lines_status, expe_lines_company, expe_lines_product_center,
         expe_lines_profit_center, expe_lines_project, expe_lines_rd_project, expe_lines_directors)
        VALUES(:expe_lines_date_created,:expe_lines_no,:expe_lines_account_no,:expe_lines_account_name,
        :expe_lines_amount,:expe_lines_due_date,:expe_lines_advance_holder,
        :expe_lines_actual_spent,:expe_lines_cost_center,:expe_lines_surrender_date,:expe_lines_surrendered,
        :expe_lines_date_issued,:expe_lines_cash_surrender_amount,
        :expe_lines_surrender_doc_no,:expe_lines_date_taken,
        :expe_lines_purpose,:expe_lines_country,:expe_lines_currency_code,
        :expe_lines_amount_lcy,:expe_lines_claim_receipt_no,:expe_lines_expenditure_date,
        :expe_lines_attendee_organization_name,:expe_lines_status,:expe_lines_company,
        :expe_lines_product_center,:expe_lines_profit_center,:expe_lines_project,:expe_lines_rd_project,:expe_lines_directors)");
        $result->bindParam(':expe_lines_date_created', $this->expe_lines_date_created, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_no', $this->expe_lines_no, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_account_no', $this->expe_lines_account_no, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_account_name', $this->expe_lines_account_name, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_amount', $this->expe_lines_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_due_date', $this->expe_lines_due_date, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_advance_holder', $this->expe_lines_advance_holder, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_actual_spent', $this->expe_lines_actual_spent, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_cost_center', $this->expe_lines_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_surrender_date', $this->expe_lines_surrender_date, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_surrendered', $this->expe_lines_surrendered, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_date_issued', $this->expe_lines_date_issued, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_cash_surrender_amount', $this->expe_lines_cash_surrender_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_surrender_doc_no', $this->expe_lines_surrender_doc_no, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_date_taken', $this->expe_lines_date_taken, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_purpose', $this->expe_lines_purpose, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_country', $this->expe_lines_country, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_currency_code', $this->expe_lines_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_amount_lcy', $this->expe_lines_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_claim_receipt_no', $this->expe_lines_claim_receipt_no, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_expenditure_date', $this->expe_lines_expenditure_date, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_attendee_organization_name', $this->expe_lines_attendee_organization_name, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_status', $this->expe_lines_status, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_company', $this->expe_lines_company, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_product_center', $this->expe_lines_product_center, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_profit_center', $this->expe_lines_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_project', $this->expe_lines_project, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_rd_project', $this->expe_lines_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_directors', $this->expe_lines_directors, PDO::PARAM_STR);
      
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
        $result = $this->dbh->prepare("UPDATE ess_expense_requisition SET
        expe_date_updated = :expe_date_updated,
        expe_no = :expe_no,
        expe_date = :expe_date,
        expe_currency_code = :expe_currency_code,
        expe_payee = :expe_payee,
        expe_on_behalf_of = :expe_on_behalf_of,
        expe_total_payment_amount = :expe_total_payment_amount,
        expe_paying_bank_account = :expe_paying_bank_account,
        expe_cost_center = :expe_cost_center,
        expe_statuss = :expe_statuss,
        expe_country = :expe_country,
        expe_total_vat_amount = :expe_total_vat_amount,
        expe_total_withholding_tax_amount = :expe_total_withholding_tax_amount,
        expe_total_net_amount = :expe_total_net_amount,
        expe_transaction_reference = :expe_transaction_reference,
        expe_pay_mode = :expe_pay_mode,
        expe_payment_release_date = :expe_payment_release_date,
        expe_exchange_rate = :expe_exchange_rate,
        expe_total_net_amount_lcy = :expe_total_net_amount_lcy,
        expe_company = :expe_company,
        expe_product_center = :expe_product_center,
        expe_profit_center = :expe_profit_center,
        expe_project_center = :expe_project_center,
        expe_account_type = :expe_account_type,
        expe_account_no = :expe_account_no,
        expe_surrender_status = :expe_surrender_status,
        expe_purpose = :expe_purpose,
        expe_rd_project = :expe_rd_project,
        expe_directors = :expe_directors
        WHERE expe_lines_id = :expe_lines_id");
        $result->bindParam(':expe_date_updated', $this->expe_date_updated, PDO::PARAM_STR);
        $result->bindParam(':expe_no', $this->expe_no, PDO::PARAM_STR);
        $result->bindParam(':expe_date', $this->expe_date, PDO::PARAM_STR);
        $result->bindParam(':expe_currency_code', $this->expe_currency_code, PDO::PARAM_STR);
        $result->bindParam(':expe_payee', $this->expe_payee, PDO::PARAM_STR);
        $result->bindParam(':expe_on_behalf_of', $this->expe_on_behalf_of, PDO::PARAM_STR);
        $result->bindParam(':expe_total_payment_amount', $this->expe_total_payment_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_paying_bank_account', $this->expe_paying_bank_account, PDO::PARAM_STR);
        $result->bindParam(':expe_cost_center', $this->expe_cost_center, PDO::PARAM_STR);
        $result->bindParam(':expe_statuss', $this->expe_statuss, PDO::PARAM_STR);
        $result->bindParam(':expe_country', $this->expe_country, PDO::PARAM_STR);
        $result->bindParam(':expe_total_vat_amount', $this->expe_total_vat_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_total_withholding_tax_amount', $this->expe_total_withholding_tax_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_total_net_amount', $this->expe_total_net_amount, PDO::PARAM_STR);
        $result->bindParam(':expe_transaction_reference', $this->expe_transaction_reference, PDO::PARAM_STR);
        $result->bindParam(':expe_pay_mode', $this->expe_pay_mode, PDO::PARAM_STR);
        $result->bindParam(':expe_payment_release_date', $this->expe_payment_release_date, PDO::PARAM_STR);
        $result->bindParam(':expe_exchange_rate', $this->expe_exchange_rate, PDO::PARAM_STR);
        $result->bindParam(':expe_total_net_amount_lcy', $this->expe_total_net_amount_lcy, PDO::PARAM_STR);
        $result->bindParam(':expe_company', $this->expe_company, PDO::PARAM_STR);
        $result->bindParam(':expe_product_center', $this->expe_product_center, PDO::PARAM_STR);
        $result->bindParam(':expe_profit_center', $this->expe_profit_center, PDO::PARAM_STR);
        $result->bindParam(':expe_project_center', $this->expe_project_center, PDO::PARAM_STR);
        $result->bindParam(':expe_account_type', $this->expe_account_type, PDO::PARAM_STR);
        $result->bindParam(':expe_account_no', $this->expe_account_no, PDO::PARAM_STR);
        $result->bindParam(':expe_surrender_status', $this->expe_surrender_status, PDO::PARAM_STR);
        $result->bindParam(':expe_purpose', $this->expe_purpose, PDO::PARAM_STR);
        $result->bindParam(':expe_rd_project', $this->expe_rd_project, PDO::PARAM_STR);
        $result->bindParam(':expe_directors', $this->expe_directors, PDO::PARAM_STR);
        $result->bindParam(':expe_id', $this->expe_id, PDO::PARAM_INT);

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
        $result = $this->dbh->prepare("UPDATE ess_expense_requisition_lines SET
        expe_lines_date_updated = :expe_lines_date_updated,
        expe_lines_no = :expe_lines_no,
        expe_lines_account_no = :expe_lines_account_no,
        expe_lines_account_name = :expe_lines_account_name,
        expe_lines_amount = :expe_lines_amount,
        expe_lines_due_date = :expe_lines_due_date,
        expe_lines_advance_holder = :expe_lines_advance_holder,
        expe_lines_actual_spent = :expe_lines_actual_spent,
        expe_lines_cost_center = :expe_lines_cost_center,
        expe_lines_surrender_date = :expe_lines_surrender_date,
        expe_lines_surrendered = :expe_lines_surrendered,
        expe_lines_date_issued = :expe_lines_date_issued,
        expe_lines_cash_surrender_amount = :expe_lines_cash_surrender_amount,
        expe_lines_surrender_doc_no = :expe_lines_surrender_doc_no,
        expe_lines_date_taken = :expe_lines_date_taken,
        expe_lines_purpose = :expe_lines_purpose,
        expe_lines_country = :expe_lines_country,
        expe_lines_currency_code = :expe_lines_currency_code,
        expe_lines_amount_lcy = :expe_lines_amount_lcy,
        expe_lines_claim_receipt_no = :expe_lines_claim_receipt_no,
        expe_lines_expenditure_date = :expe_lines_expenditure_date,
        expe_lines_attendee_organization_name = :expe_lines_attendee_organization_name,
        expe_lines_status = :expe_lines_status,
        expe_lines_company = :expe_lines_company,
        expe_lines_product_center = :expe_lines_product_center,
        expe_lines_profit_center = :expe_lines_profit_center,
        expe_lines_project = :expe_lines_project,
        expe_lines_rd_project = :expe_lines_rd_project,
        expe_lines_directors = :expe_lines_directors
        WHERE expe_lines_id = :expe_lines_id");
         $result->bindParam(':expe_lines_date_updated', $this->expe_lines_date_updated, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_no', $this->expe_lines_no, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_account_no', $this->expe_lines_account_no, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_account_name', $this->expe_lines_account_name, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_amount', $this->expe_lines_amount, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_due_date', $this->expe_lines_due_date, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_advance_holder', $this->expe_lines_advance_holder, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_actual_spent', $this->expe_lines_actual_spent, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_cost_center', $this->expe_lines_cost_center, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_surrender_date', $this->expe_lines_surrender_date, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_surrendered', $this->expe_lines_surrendered, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_date_issued', $this->expe_lines_date_issued, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_cash_surrender_amount', $this->expe_lines_cash_surrender_amount, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_surrender_doc_no', $this->expe_lines_surrender_doc_no, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_date_taken', $this->expe_lines_date_taken, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_purpose', $this->expe_lines_purpose, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_country', $this->expe_lines_country, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_currency_code', $this->expe_lines_currency_code, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_amount_lcy', $this->expe_lines_amount_lcy, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_claim_receipt_no', $this->expe_lines_claim_receipt_no, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_expenditure_date', $this->expe_lines_expenditure_date, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_attendee_organization_name', $this->expe_lines_attendee_organization_name, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_status', $this->expe_lines_status, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_company', $this->expe_lines_company, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_product_center', $this->expe_lines_product_center, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_profit_center', $this->expe_lines_profit_center, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_project', $this->expe_lines_project, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_rd_project', $this->expe_lines_rd_project, PDO::PARAM_STR);
         $result->bindParam(':expe_lines_directors', $this->expe_lines_directors, PDO::PARAM_STR);
        $result->bindParam(':expe_lines_id', $this->expe_lines_id, PDO::PARAM_INT);

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