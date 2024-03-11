
<?php

/**
 * Author : Brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Time : 11/29/2023
 * Email : brayoikonya@gmail.com
 * File : ESSExpenserequisitionaccountingUI.class.php
 */
class ESSExpenserequisitionaccountingUILines
{
    public $dbh;
    public static $primaryKey = "expa_lines_id";
    public static $tableName = "ess_expense_requisition_accounting_lines";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
 //lines
    public $expa_lines_id; 
    public $expa_lines_date_created;
    public $expa_lines_date_updated;
    public $expa_lines_created_by;
    public $expa_lines_updated_by;
    public $expa_lines_status;
    public $expa_lines_no;
    public $expa_lines_account_no;
    public $expa_lines_account_name;
    public $expa_lines_amount;
    public $expa_lines_due_date;
    public $expa_lines_advance_holder;
    public $expa_lines_actual_spent; 
    public $expa_lines_cost_center;
    public $expa_lines_surrender_date;
    public $expa_lines_surrendered;
    public $expa_lines_date_issued;
    public $expa_lines_cash_surrender_amt;
    public $expa_lines_surrender_doc_no;
    public $expa_lines_date_taken;
    public $expa_lines_purpose;
    public $expa_lines_country; 
    public $expa_lines_currency_code;
    public $expa_lines_amount_lcy;
    public $expa_lines_claim_receipt_no; 
    public $expa_lines_expenditure_date;
    public $expa_lines_attendee_organisation_names;
    public $expa_lines_account_type;
    public $expa_lines_company;
    public $expa_lines_product_center;
    public $expa_lines_profit_center; 
    public $expa_lines_project;
    public $expa_lines_rd_project;
    public $expa_lines_directors;
    public $expa_lines_publish;
    public $response;



public static function readLines()
    {
        self::$extraWhere = " expa_lines_publish = 1";
        self::$columns = [
            ['db' => 'expa_lines_date_created', 'dt' => 0],
            ['db' => 'expa_lines_no', 'dt' => 1],
            ['db' => 'expa_lines_account_no', 'dt' => 2],
            ['db' => 'expa_lines_account_name', 'dt' => 3],
            ['db' => 'expa_lines_amount', 'dt' => 4],
            ['db' => 'expa_lines_due_date', 'dt' => 5],
            ['db' => 'expa_lines_advance_holder', 'dt' => 6],
            ['db' => 'expa_lines_actual_spent', 'dt' => 7],
            ['db' => 'expa_lines_cost_center', 'dt' => 8],
            ['db' => 'expa_lines_surrender_date', 'dt' => 9],
            ['db' => 'expa_lines_surrendered', 'dt' => 10],
            ['db' => 'expa_lines_date_issued', 'dt' => 11],
            ['db' => 'expa_lines_cash_surrender_amt', 'dt' => 12],
            ['db' => 'expa_lines_surrender_doc_no', 'dt' => 13],
            ['db' => 'expa_lines_date_taken', 'dt' => 14],
            ['db' => 'expa_lines_purpose', 'dt' => 15],
            ['db' => 'expa_lines_country', 'dt' => 16],
            ['db' => 'expa_lines_currency_code', 'dt' => 17],
            ['db' => 'expa_lines_amount_lcy', 'dt' => 18],
            ['db' => 'expa_lines_claim_receipt_no', 'dt' => 19],
            ['db' => 'expa_lines_expenditure_date', 'dt' => 20],
            ['db' => 'expa_lines_attendee_organisation_names', 'dt' => 21],
            ['db' => 'expa_lines_account_type', 'dt' => 22],
            ['db' => 'expa_lines_company', 'dt' => 23],
            ['db' => 'expa_lines_product_center', 'dt' => 24],
            ['db' => 'expa_lines_profit_center', 'dt' => 25],
            ['db' => 'expa_lines_project', 'dt' => 26],
            ['db' => 'expa_lines_rd_project', 'dt' => 27],
            ['db' => 'expa_lines_directors', 'dt' => 28],
            ['db' => 'expa_lines_id',
                'dt' => 29,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
}
