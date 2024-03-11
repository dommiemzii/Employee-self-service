<?php

function getUserStatusName($bool,$t_){
    $name = "";
    switch ($bool){
        case 1:
            $name = $t_['Active'];
            break;
        default:
            $name = $t_['Inactive'];
    }
    return $name;
}

?>
<div class="page-header">
    <h1>
        <?= $t_['Travel_Requisition']; ?>
    </h1>
    <?php include 'views/widgets/utility_menu_buttons.php' ?>
</div>
<!-- /.page-header -->
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-body">
                <div class="widget-main">
                    <div id="neededprint">
                        <div class="row">
                            <div class="col-xs-7 widget-container-span ui-sortable">
                                <div class="widget-box transparent">
                                    <div class="widget-header">
                                        <h4 class="lighter"><i
                                                class="fa fa-user grey"></i>&nbsp;<?= $t_['Travel_Requisition']; ?>
                                        </h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main padding-6 no-padding-left no-padding-right">
                                            <table>
                                                <tbody>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['Status']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= getUserStatusName($_DATA['status'],$t_); ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_date_created']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_date_created']; ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_no']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_no']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_account_no']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_account_no']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_account_name']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_account_name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_amount']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_amount']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_due_date']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_due_date']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_cash_advance_holder']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_cash_advance_holder']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_actual_spent']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_actual_spent']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_cost_center']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_cost_center']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_surrender_date']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_surrender_date']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_surrendered']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_surrendered']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_date_issued']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_date_issued']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_type_of_surrender']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_type_of_surrender']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_surrender_doc_no']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_surrender_doc_no']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_date_taken']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_date_taken']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_purpose']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_purpose']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_country']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_country']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_currency_code']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_currency_code']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_amount_lcy']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_amount_lcy']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_employee_job_group']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_employee_job_group']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_daily_rate_amount']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_daily_rate_amount']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_destination_code']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_destination_code']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_no_days']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_no_days']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_quarterly']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_quarterly']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_cash_receipt_no']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_cash_receipt_no']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_cash_receipt_amount']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_cash_receipt_amount']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_based_on_rate']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_based_on_rate']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_company']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_company']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_product_center']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_product_center']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_profit_center']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_profit_center']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_project']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_project']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_rd_project']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_rd_project']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="_right"><label
                                                            class="label_1"><?= $t_['trav_lines_directors']; ?></label>
                                                    </td>
                                                    <td class="p_2 _left"><?= $_DATA['trav_lines_directors']; ?></td>
                                                </tr> 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTENT ENDS -->
</div>
<script category="text/javascript">
    $(".utility-buttons").removeClass('hidden');
    $("#close-icon").removeClass('hidden');
    $("#refresh-icon").removeClass('hidden');
    //in navigation
    utilNavigation("ESSTravelRequisitionUI");

    //
    
</script>



