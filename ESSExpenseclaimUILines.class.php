<?php

/**
 * Author : brian Ikonya.
 * Organization : Qasava Solutions LTD
 * Time : 30/11/2023
 * Email : brayoikoya@gmail.com
 * File : ESSExpenseclaimUILines.class.php
 */
class ESSExpenseclaimUILines
{
    public $dbh;
    public static $primaryKey = "expc_lines_id";
    public static $tableName = "ess_expense_claim_lines";
    public static $GET;
    public static $extraWhere;
    public static $myAssignedLocs;
    public static $myAssignedSkus;
    public static $columns;
    public static $db;
    public static $joinQuery;
    public static $group_by;
    //EXPENSE CLAIM LINES
    public $expc_lines_id; 
    public $expc_lines_date_created;
    public $expc_lines_date_updated;
    public $expc_lines_created_by;
    public $expc_lines_updated_by;
    public $expc_lines_status;
    public $expc_lines_no;
    public $expc_lines_account_no;
    public $expc_lines_account_name;
    public $expc_lines_amount;
    public $expc_lines_due_date; 
    public $expc_lines_advance_holder;
    public $expc_lines_actual_spent;
    public $expc_lines_cost_center;
    public $expc_lines_surrender_date;
    public $expc_lines_surrendered;
    public $expc_lines_date_issued;
    public $expc_lines_cash_surrender_amt;
    public $expc_lines_surrender_doc_no;
    public $expc_lines_date_taken;
    public $expc_lines_purpose; 
    public $expc_lines_country;
    public $expc_lines_currecy_code;
    public $expc_lines_amount_lcy;
    public $expc_lines_claim_reciept_no;
    public $expc_lines_expenditure_date;
    public $expc_lines_organization_names;
    public $expc_lines_account_type;
    public $expc_lines_company;
    public $expc_lines_product_center;
    public $expc_lines_profit_center;
    public $expc_lines_project;
    public $expc_lines_rd_project;
    public $expc_lines_directors;
    public $expc_lines_publish;
    public $response;

    public static function readLines()
    {
        self::$extraWhere = " expc_lines_publish = 1";
        self::$columns = [
            ['db' => 'expc_lines_date_created', 'dt' => 0],
            ['db' => 'expc_lines_no', 'dt' => 1],
            ['db' => 'expc_lines_account_no', 'dt' => 2],
            ['db' => 'expc_lines_account_name', 'dt' => 3],
            ['db' => 'expc_lines_amount', 'dt' => 4],
            ['db' => 'expc_lines_due_date', 'dt' => 5],
            ['db' => 'expc_lines_advance_holder', 'dt' => 6],
            ['db' => 'expc_lines_actual_spent', 'dt' => 7],
            ['db' => 'expc_lines_cost_center', 'dt' => 8],
            ['db' => 'expc_lines_surrender_date', 'dt' => 9],
            ['db' => 'expc_lines_surrendered', 'dt' => 10],
            ['db' => 'expc_lines_date_issued', 'dt' => 11],
            ['db' => 'expc_lines_cash_surrender_amt', 'dt' => 12],
            ['db' => 'expc_lines_surrender_doc_no', 'dt' => 13],
            ['db' => 'expc_lines_date_taken', 'dt' => 14],
            ['db' => 'expc_lines_purpose', 'dt' => 15],
            ['db' => 'expc_lines_country', 'dt' => 16],
            ['db' => 'expc_lines_currecy_code', 'dt' => 17],
            ['db' => 'expc_lines_amount_lcy', 'dt' => 18],
            ['db' => 'expc_lines_claim_reciept_no', 'dt' => 19],
            ['db' => 'expc_lines_expenditure_date', 'dt' => 20],
            ['db' => 'expc_lines_organization_names', 'dt' => 21],
            ['db' => 'expc_lines_account_type', 'dt' => 22],
            ['db' => 'expc_lines_company', 'dt' => 23],
            ['db' => 'expc_lines_product_center', 'dt' => 24],
            ['db' => 'expc_lines_profit_center', 'dt' => 25],
            ['db' => 'expc_lines_project', 'dt' => 26],
            ['db' => 'expc_lines_rd_project', 'dt' => 27],
            ['db' => 'expc_lines_directors', 'dt' => 28],
            ['db' => 'expc_lines_id',
                'dt' => 29,
                'formatter' => function ($d, $row) {
                    return $row;
                },

            ],

        ];
    }
}