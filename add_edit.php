<style>
    
</style>
<div class="row-fluid ess_action_bar zoomIn animated">
    
    <span class="utility-buttons ess_ub">
        <button class="btn is-link ess_act_btn ess_secondary" id="btn-back">
			<i class="ace-icon fa fa-chevron-left icon-on-right "></i>&nbsp;&nbsp;
			Back
		</button>
		
        <!--<button class="btn is-link ess_act_btn ess_secondary" id="btn-add-line">
			<i class="ace-icon fa fa-plus icon-on-right "></i>&nbsp;&nbsp;
			Add Line
		</button> -->
		
	    <button class="btn is-link ess_act_btn ess_secondary" id="refresh-icon" >
            <i class="ace-icon fa fa-refresh icon-on-right"></i>&nbsp;&nbsp;
            <?= $t_['Refresh']; ?>
        </button>
        
    </span>
    
</div>

<div class="row-fluid">
    <div class="col-xs-12 ess_padding_lr ess_list_mt">
        <div class="row">
            <div class="col-xs-9 zoomIn animated dashboard_tab">
                <div id="ess_right_card" class="row ess_card ess_padding_top">
                    <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { ?>
                    <h4 class="ess_title ess_ae_pl"><?= 'Travel Requisition Accounting'; ?></h4>
                    <?php } else { ?>
                    <h4 class="ess_title ess_ae_pl"><?= $ntitle; ?></h4>
                    <?php } ?>
                    
                    <div class="col-xs-12 ess_no_padding">
                        <!-- PAGE CONTENT BEGINS -->
                        <form id="form-esstravelrequisitionui" class="form-horizontal" novalidate="novalidate">
                            
                            <input type="hidden" name="trav_account_no" id="trav_account_no" value="<?= isset($_DATA) ? $_DATA['trav_account_no'] : $_SESSION['ESS_EMPLOYEE_NO']; ?>">
                            <input type="hidden" name="trav_company" id="trav_company" value="<?= isset($_DATA) ? $_DATA['trav_company'] : $_SESSION['ESS_COMPANY']; ?>">
                            <input type="hidden" name="trav_project_code" id="trav_project_code" value="<?= isset($_DATA) ? $_DATA['trav_project_code'] : $_SESSION['ESS_PROJECT']; ?>">
                            <input type="hidden" name="trav_directors_code" id="trav_directors_code" value="<?= isset($_DATA) ? $_DATA['trav_directors_code'] : $_SESSION['ESS_DIRECTORS']; ?>">
                            <fieldset>
                                <div class="col-md-6 ess_ae">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_document_no']; ?></label>
        
                                        <div>
        
                                            <input type="text" class="form-control "
                                                   placeholder="<?= $t_['trav_document_no']; ?>"
                                                   name="trav_document_no"
                                                   id="trav_document_no"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_document_no'] : ""; ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_date']; ?></label>
        
                                        <div>
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_date']; ?>"
                                                   name="trav_date"
                                                   id="trav_date" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_date'] : date("Y-m-d"); ?>" readonly>
                                        </div>
                                    </div>
            
                                          
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_payee']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_payee']; ?>"
                                                   name="trav_payee"
                                                   id="trav_payee" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_payee'] : $_SESSION['ESS_USER_FULL_NAME']; ?>" readonly>
                                        </div>
                                    </div>
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label">Total Net Amount</label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="Total Net Amount"
                                                   name="trav_amount"
                                                   id="trav_amount" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_amount'] : "0"; ?>" readonly>
                                        </div>
                                    </div>
                            
                                    
                                    <div class="form-group">
                                        <label for="selectbasic" class="control-label"><?= $t_['trav_department']; ?></label>
        
                                        <div>
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_department']; ?>"
                                                   name="trav_department"
                                                   id="trav_department" aria-required="true" 
                                                   value="<?= isset($_DATA) ? $_DATA['trav_department'] : $_SESSION['ESS_DEPT_CODE']; ?>" readonly>
                                        </div>
                                    </div>
        
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_country']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_country']; ?>"
                                                   name="trav_country"
                                                   id="trav_country" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_country'] : $_SESSION['ESS_COUNTRY']; ?>" readonly>
                                        </div>
                                    </div>
                                    
        
                                </div>
                                
                                <div class="col-md-6 ess_ae">
                                   
                                   <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_posting_description']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_posting_description']; ?>"
                                                   name="trav_posting_description"
                                                   id="trav_posting_description" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_posting_description'] : ""; ?>" >
                                        </div>
                                    </div>
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic" class="control-label"><?= $t_['trav_designation']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_designation']; ?>"
                                                   name="trav_designation"
                                                   id="trav_designation" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_designation'] : $_SESSION['ESS_JOB_TITLE']; ?>" readonly>
                                        </div>
                                    </div>
                                    
        
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_date_of_departure']; ?></label>
        
                                        <div class="input-group">
        
                                            <input type="text" data-rule-required="true" class="form-control date-timepicker"
                                                   placeholder="<?= $t_['trav_date_of_departure']; ?>"
                                                   name="trav_date_of_departure"
                                                   id="trav_date_of_departure" aria-required="true" style="border-radius: 10px 0px 0px 10px !important;"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_date_of_departure'] : ""; ?>" >
                                            <span class="input-group-addon" style="border-radius: 0 10px 10px 0 !important;">
												<i class="fa fa-clock-o bigger-110"></i>
											</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_date_of_arrival']; ?></label>
        
                                        <div class="input-group">
        
                                            <input type="text" data-rule-required="true" class="form-control date-timepicker"
                                                   placeholder="<?= $t_['trav_date_of_arrival']; ?>"
                                                   name="trav_date_of_arrival"
                                                   id="trav_date_of_arrival" aria-required="true" style="border-radius: 10px 0px 0px 10px !important;"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_date_of_arrival'] : ""; ?>" >
                                            <span class="input-group-addon" style="border-radius: 0 10px 10px 0 !important;">
												<i class="fa fa-clock-o bigger-110"></i>
											</span>
                                        </div>
                                    </div>
        
                                    <!-- Text input -->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_date_of_return']; ?></label>
        
                                        <div class="input-group">
        
                                            <input type="text" data-rule-required="true" class="form-control date-timepicker"
                                                   placeholder="<?= $t_['trav_date_of_return']; ?>"
                                                   name="trav_date_of_return"
                                                   id="trav_date_of_return" aria-required="true" style="border-radius: 10px 0px 0px 10px !important;"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_date_of_return'] : ""; ?>" >
                                            <span class="input-group-addon" style="border-radius: 0 10px 10px 0 !important;">
												<i class="fa fa-clock-o bigger-110"></i>
											</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_no_of_days']; ?></label>
        
                                        <div>
        
                                            <input type="number" class="form-control "
                                                   placeholder="<?= $t_['trav_no_of_days']; ?>"
                                                   name="trav_no_of_days"
                                                   id="trav_no_of_days" 
                                                   value="<?= isset($_DATA) ? $_DATA['trav_no_of_days'] : "0"; ?>" onchange="calculateAmounte()" readonly>
                                        </div>
                                    </div>
             
                                    
                                </div>
                                
                                <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { ?>
                                <div class="col-md-12 ess_ae">
                                    
                                    <!-- Text input -->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label">Actual Spent</label>
        
                                        <div>
        
                                            <input type="number" data-rule-required="true" class="form-control "
                                                   placeholder="Actual Spent"
                                                   name="trav_actual_spent"
                                                   id="trav_actual_spent" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_actual_spent'] : "0"; ?>" min="0">
                                        </div>
                                    </div>
                                    
                                    <!-- Text input -->
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label">Cash Receipt Amount</label>
        
                                        <div>
        
                                            <input type="number" data-rule-required="true" class="form-control "
                                                   placeholder="Cash Receipt Amount"
                                                   name="trav_receipt_amount"
                                                   id="trav_receipt_amount" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_receipt_amount'] : "0"; ?>" min="0" readonly>
                                        </div>
                                    </div>
                                    
                                    <!-- Text input --> 
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label">Cash Claim Amount</label>
        
                                        <div>
        
                                            <input type="number" data-rule-required="true" class="form-control "
                                                   placeholder="Cash Claim Amount"
                                                   name="trav_cash_claim_amount"
                                                   id="trav_cash_claim_amount" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_cash_claim_amount'] : "0"; ?>" min="0" readonly>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php } ?>
                                
                                    
                            </fieldset>
                        </form>
                        <br>
                        
                        <div id="accordion" class="accordion-style1 panel-group" style="margin-left: 30px;">
                        	<div class="panel panel-default">
                        		<div class="panel-heading">
                        			<h4 class="panel-title">
                        				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                        					<i class="bigger-110 ace-icon fa fa-angle-down" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                        					&nbsp;Transport
                        				</a>
                        			</h4>
                        		</div>
                        
                        		<div class="panel-collapse collapse in" id="collapseOne" aria-expanded="true" style="">
                        			<div class="panel-body">
                        			    <form id="form-transport" class="form-horizontal" novalidate="novalidate">
                                            <fieldset>
                                                <div class="col-md-6 ess_ae">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Destination</label>
                        
                                                        <div>
                        
                                                            <!--<input type="text" class="form-control "
                                                                   placeholder="Destination"
                                                                   name="trav_transport_destination"
                                                                   id="trav_transport_destination"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_transport_destination'] : ""; ?>"> -->
                                                            <select class="form-control chzn-select"
                                                                name="trav_transport_destination"
                                                                id="trav_transport_destination">
                                    						    <option value=""><?= $t_['trav_lines_destination_code']; ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Amount</label>
                        
                                                        <div>
                        
                                                            <input type="text" class="form-control "
                                                                   placeholder="Amount"
                                                                   name="trav_transport_amount"
                                                                   id="trav_transport_amount"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_transport_amount'] : "0"; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ess_ae">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Purpose</label>
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Purpose"
                                                                   name="trav_transport_purpose"
                                                                   id="trav_transport_purpose"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_transport_purpose'] : $_DATA['trav_posting_description']; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label"><?= $t_['trav_lines_travel_options']; ?></label>
                                                        <div>
                                                            <select class="form-control chzn-select"
                                                                name="trav_transport_travel_options"
                                                                id="trav_transport_travel_options">
                                    						    <option value=""><?= $t_['trav_lines_travel_options']; ?></option>
                                    						    <option value="Flight">Flight</option>
                                    						    <option value="Bus">Bus/Taxi</option>
                                    						    <option value="Train">Train</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { 
                                                // trav_transport_actual_spent trav_transport_receipt_amount trav_transport_cash_claim_amount
                                                ?>
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Actual Spent</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Actual Spent"
                                                                       name="trav_transport_actual_spent"
                                                                       id="trav_transport_actual_spent" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_transport_actual_spent'] : "0"; ?>" min="0">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Receipt Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Receipt Amount"
                                                                       name="trav_transport_receipt_amount"
                                                                       id="trav_transport_receipt_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_transport_receipt_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input --> 
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Claim Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Claim Amount"
                                                                       name="trav_transport_cash_claim_amount"
                                                                       id="trav_transport_cash_claim_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_transport_cash_claim_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <h4 class="ess_title">Attached Documents</h4>
                                                        <?php if($_DATA['trav_account_no'] == $_SESSION['ESS_EMPLOYEE_NO']) { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Upload';?></h5>
                                                                <!-- #section:custom/widget-box.toolbar -->
                                                                <div class="widget-toolbar">
                                                                    <a data-action="" data-toggle="modal" href="#upload-transport-file-div">
                                                                        <i class="ace-icon fa fa-paperclip fa-lg is-link" title="<?= 'Upload File';?>"></i>
                                                                    </a>
                                                                </div>
                                    
                                                                <!-- /section:custom/widget-box.toolbar upload-transport-file-div -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody id="tbl_transport">
                                                                            
                                                                                <?php 
                                                                                    if(isset($_UPLOADS_TR) && count($_UPLOADS_TR) > 0) { 
                                                                                        foreach ($_UPLOADS_TR as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Transport File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Uploaded Files';?></h5>
                                    
                                                                <!-- /section:custom/widget-box.toolbar -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                            <?php 
                                                                                    if(isset($_UPLOADS_TR) && count($_UPLOADS_TR) > 0) { 
                                                                                        foreach ($_UPLOADS_TR as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Transport File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                    
                                                <?php } ?>
                                                
                                            </fieldset>
                                        </form>
                        				
                        			</div>
                        		</div>
                        	</div>
                        
                        	<div class="panel panel-default">
                        		<div class="panel-heading">
                        			<h4 class="panel-title">
                        				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                        					<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                        					&nbsp;Accomodation
                        				</a>
                        			</h4>
                        		</div>
                        
                        		<div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false" style="">
                        			<div class="panel-body">
                        				<form id="form-accomodation" class="form-horizontal" novalidate="novalidate">
                                            <fieldset>
                                                <div class="col-md-6 ess_ae">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Accomodation Type</label>
                        
                                                        <div style="padding-top: 10px;">
        													<label class="inline col-md-4">
        														<input id="trav_accomodation_type_breakfast" name="trav_accomodation_type_breakfast" type="checkbox" class="ace" value="breakfast" <?= (isset($_DATA) && $_DATA['trav_accomodation_type_breakfast'] == "breakfast") ? "checked" : ""; ?> onchange="checkboxCheck()">
        														<span class="lbl"> &nbsp;&nbsp;Breakfast</span>
        													</label> 

        													<label class="inline col-md-4">
        														<input id="trav_accomodation_type_lunch" name="trav_accomodation_type_lunch" type="checkbox" class="ace" value="lunch" <?= (isset($_DATA) && $_DATA['trav_accomodation_type_lunch'] == "lunch") ? "checked" : ""; ?> onchange="checkboxCheck()">
        														<span class="lbl"> &nbsp;&nbsp;Lunch</span>
        													</label> 
        													<label class="inline col-md-4">
        														<input id="trav_accomodation_type_dinner" name="trav_accomodation_type_dinner" type="checkbox" class="ace" value="dinner" <?= (isset($_DATA) && $_DATA['trav_accomodation_type_dinner'] == "dinner") ? "checked" : ""; ?> onchange="checkboxCheck()">
        														<span class="lbl"> &nbsp;&nbsp;Dinner</span>
        													</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Unit Amount per day</label>
                        
                                                        <div>
                        
                                                            <input type="number" class="form-control "
                                                                   placeholder="Unit Amount per day"
                                                                   name="trav_accomodation_type_unit_amount"
                                                                   id="trav_accomodation_type_unit_amount"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_accomodation_type_unit_amount'] : "0"; ?>" onchange="calculateAmount()">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ess_ae">
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Amount</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Amount"
                                                                   name="trav_accomodation_type_amount"
                                                                   id="trav_accomodation_type_amount"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_accomodation_type_amount'] : "0"; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Purpose</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Purpose"
                                                                   name="trav_accomodation_type_purpose"
                                                                   id="trav_accomodation_type_purpose"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_accomodation_type_purpose'] : $_DATA['trav_posting_description']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { ?>

                                                    <div class="col-md-12 ess_ae">
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Actual Spent</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Actual Spent"
                                                                       name="trav_accomodation_actual_spent"
                                                                       id="trav_accomodation_actual_spent" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_accomodation_actual_spent'] : "0"; ?>" min="0">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Receipt Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Receipt Amount"
                                                                       name="trav_accomodation_receipt_amount"
                                                                       id="trav_accomodation_receipt_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_accomodation_receipt_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Claim Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Claim Amount"
                                                                       name="trav_accomodation_cash_claim_amount"
                                                                       id="trav_accomodation_cash_claim_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_accomodation_cash_claim_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12 ess_ae">
                                                        
                                                        <h4 class="ess_title">Attached Documents</h4>
                                                        <?php if($_DATA['trav_account_no'] == $_SESSION['ESS_EMPLOYEE_NO']) { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Upload';?></h5>
                                                                <!-- #section:custom/widget-box.toolbar -->
                                                                <div class="widget-toolbar">
                                                                    <a data-action="" data-toggle="modal" href="#upload-accomodation-file-div">
                                                                        <i class="ace-icon fa fa-paperclip fa-lg is-link" title="<?= 'Upload File';?>"></i>
                                                                    </a>
                                                                </div>
                                    
                                                                <!-- /section:custom/widget-box.toolbar upload-accomodation-file-div -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody id="tbl_accomodation">
                                                                            
                                                                                <?php 
                                                                                    if(isset($_UPLOADS_ACC) && count($_UPLOADS_ACC) > 0) { 
                                                                                        foreach ($_UPLOADS_ACC as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Accomodation File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Uploaded Files';?></h5>
                                    
                                                                <!-- /section:custom/widget-box.toolbar -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                            <?php 
                                                                                    if(isset($_UPLOADS_ACC) && count($_UPLOADS_ACC) > 0) { 
                                                                                        foreach ($_UPLOADS_ACC as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Accomodation File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                
                                                    
                                                    
                                                <?php } ?>
                                            </fieldset>
                                        </form>
                        			</div>
                        		</div>
                        	</div>
                        
                        	<div class="panel panel-default">
                        		<div class="panel-heading">
                        			<h4 class="panel-title">
                        				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                        					<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                        					&nbsp;Per Diem
                        				</a>
                        			</h4>
                        		</div>
                        
                        		<div class="panel-collapse collapse" id="collapseThree" aria-expanded="false" style="">
                        			<div class="panel-body">
                        				<form id="form-per-diem" class="form-horizontal" novalidate="novalidate">
                                            <fieldset>
                                                <div class="col-md-6 ess_ae">
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Amount</label>
                        
                                                        <div>
                        
                                                            <input type="text" class="form-control "
                                                                   placeholder="Amount"
                                                                   name="trav_per_diem_amount"
                                                                   id="trav_per_diem_amount"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_per_diem_amount'] : "0"; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group" style="visibility:hidden;">
                                                        <label for="selectbasic" class="control-label">Def</label>
                        
                                                        <div>
                        
                                                            <input type="text" class="form-control "
                                                                   placeholder="Def"
                                                                   name="frm_def"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ess_ae">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Purpose</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Purpose"
                                                                   name="trav_per_diem_purpose"
                                                                   id="trav_per_diem_purpose"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_per_diem_purpose'] : $_DATA['trav_posting_description']; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group" style="visibility:hidden;">
                                                        <label for="selectbasic" class="control-label">Def</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Def"
                                                                   name="frm_def"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { 
                                                // trav_per_diem_actual_spent trav_per_diem_receipt_amount trav_per_diem_cash_claim_amount
                                                ?>
                                                
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Actual Spent</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Actual Spent"
                                                                       name="trav_per_diem_actual_spent"
                                                                       id="trav_per_diem_actual_spent" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_per_diem_actual_spent'] : "0"; ?>" min="0">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Receipt Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Receipt Amount"
                                                                       name="trav_per_diem_receipt_amount"
                                                                       id="trav_per_diem_receipt_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_per_diem_receipt_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Claim Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Claim Amount"
                                                                       name="trav_per_diem_cash_claim_amount"
                                                                       id="trav_per_diem_cash_claim_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_per_diem_cash_claim_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <h4 class="ess_title">Attached Documents</h4>
                                                        <?php if($_DATA['trav_account_no'] == $_SESSION['ESS_EMPLOYEE_NO']) { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Upload';?></h5>
                                                                <!-- #section:custom/widget-box.toolbar -->
                                                                <div class="widget-toolbar">
                                                                    <a data-action="" data-toggle="modal" href="#upload-perdiem-file-div">
                                                                        <i class="ace-icon fa fa-paperclip fa-lg is-link" title="<?= 'Upload File';?>"></i>
                                                                    </a>
                                                                </div>
                                    
                                                                <!-- /section:custom/widget-box.toolbar upload-perdiem-file-div -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody id="tbl_perdiem">
                                                                            
                                                                                <?php 
                                                                                    if(isset($_UPLOADS_PDM) && count($_UPLOADS_PDM) > 0) { 
                                                                                        foreach ($_UPLOADS_PDM as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Per Diem File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Uploaded Files';?></h5>
                                    
                                                                <!-- /section:custom/widget-box.toolbar -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                            <?php 
                                                                                    if(isset($_UPLOADS_PDM) && count($_UPLOADS_PDM) > 0) { 
                                                                                        foreach ($_UPLOADS_PDM as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;
                                                                                            #Per Diem File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                    
                                                <?php } ?>
                                                
                                            </fieldset>
                                        </form>
                        			</div>
                        		</div>
                        	</div>
                        	
                        	<div class="panel panel-default">
                        		<div class="panel-heading">
                        			<h4 class="panel-title">
                        				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">
                        					<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                        					&nbsp;Other
                        				</a>
                        			</h4>
                        		</div>
                        
                        		<div class="panel-collapse collapse" id="collapseFour" aria-expanded="false" style="">
                        			<div class="panel-body">
                        				<form id="form-other" class="form-horizontal" novalidate="novalidate">
                                            <fieldset>
                                                <div class="col-md-6 ess_ae">
                                                    
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Description</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Description"
                                                                   name="trav_other_description"
                                                                   id="trav_other_description"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_other_description'] : ""; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group" style="visibility:hidden;">
                                                        <label for="selectbasic" class="control-label">Def</label>
                        
                                                        <div>
                        
                                                            <input type="text" class="form-control "
                                                                   placeholder="Def"
                                                                   name="frm_def"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-6 ess_ae">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label for="selectbasic" class="control-label">Amount</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Amount"
                                                                   name="trav_other_amount"
                                                                   id="trav_other_amount"
                                                                   value="<?= isset($_DATA) ? $_DATA['trav_other_amount'] : "0"; ?>" >
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group" style="visibility:hidden;">
                                                        <label for="selectbasic" class="control-label">Def</label>
                        
                                                        <div>
                                                            <input type="text" class="form-control "
                                                                   placeholder="Def"
                                                                   name="frm_def"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php if(isset($_DATA) && ($_DATA['trav_accounting_status'] == 1 || $_DATA['trav_actual_spent'] != 0 || $_DATA['trav_transport_actual_spent'] != 0 || $_DATA['trav_accomodation_actual_spent'] != 0)) { 
                                                // trav_per_diem_actual_spent trav_per_diem_receipt_amount trav_per_diem_cash_claim_amount
                                                ?>
                                                
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Actual Spent</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Actual Spent"
                                                                       name="trav_other_actual_spent"
                                                                       id="trav_other_actual_spent" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_other_actual_spent'] : "0"; ?>" min="0">
                                                            </div>
                                                        </div> 
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Receipt Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Receipt Amount"
                                                                       name="trav_other_receipt_amount"
                                                                       id="trav_other_receipt_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_per_diem_receipt_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input -->
                                                        <div class="form-group">
                                                            <label for="selectbasic"
                                                                   class="control-label">Cash Claim Amount</label>
                            
                                                            <div>
                            
                                                                <input type="number" data-rule-required="true" class="form-control "
                                                                       placeholder="Cash Claim Amount"
                                                                       name="trav_other_cash_claim_amount"
                                                                       id="trav_other_cash_claim_amount" aria-required="true"
                                                                       value="<?= isset($_DATA) ? $_DATA['trav_other_cash_claim_amount'] : "0"; ?>" min="0" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 ess_ae">
                                                        
                                                        <h4 class="ess_title">Attached Documents</h4>
                                                        <?php if($_DATA['trav_account_no'] == $_SESSION['ESS_EMPLOYEE_NO']) { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Upload';?></h5>
                                                                <!-- #section:custom/widget-box.toolbar -->
                                                                <div class="widget-toolbar">
                                                                    <a data-action="" data-toggle="modal" href="#upload-other-file-div">
                                                                        <i class="ace-icon fa fa-paperclip fa-lg is-link" title="<?= 'Upload File';?>"></i>
                                                                    </a>
                                                                </div>
                                    
                                                                <!-- /section:custom/widget-box.toolbar upload-other-file-div -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody id="tbl_other">
                                                                            
                                                                                <?php 
                                                                                    if(isset($_UPLOADS_OTHER) && count($_UPLOADS_OTHER) > 0) { 
                                                                                        foreach ($_UPLOADS_OTHER as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Other File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h5 class="widget-title" ><?= 'Uploaded Files';?></h5>
                                    
                                                                <!-- /section:custom/widget-box.toolbar -->
                                                            </div>
                                    
                                                            <div class="widget-body">
                                                                <div class="widget-main padding-6 no-padding-left no-padding-right">
                                                                    <div id="image">
                                                                        <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                                                        <table id="import_table" class="display" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                            <?php 
                                                                                    if(isset($_UPLOADS_OTHER) && count($_UPLOADS_OTHER) > 0) { 
                                                                                        foreach ($_UPLOADS_OTHER as $key => $ufile) {
                                                                                            //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                                                            <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i>&nbsp;&nbsp;
                                                                                            #Other File
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php 
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                    
                                                <?php } ?>
                                                
                                            </fieldset>
                                        </form>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        
                        <hr>
                        <div class="wizard-actions">
                            
                            <?php if(isset($_DATA) && $_DATA['trav_accounting_status'] == 0) { ?>
                           
                            <?php if($_DATA['trav_main_status'] == 'Approved' && $_DATA['trav_transport_actual_spent'] == 0) { ?>
                            
                                <button class="btn btn-success" id="btn-close-tr">
                        			<i class="ace-icon fa fa-check-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Close
                        		</button>
                            
                            <?php } else { ?>
                            
                                <button class="btn btn-primary" id="btn-edit" data-id="<?= isset($_DATA) ? $_DATA['trav_id'] : ""; ?>" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "" : "display:none;"; ?>">
                                    <i class="ace-icon fa fa-save icon-on-right"></i>
                                    <?= $t_['Save'] . " "; ?>
                                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-primary" id="btn-add" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "display:none;" : ""; ?>">
                                    <i class="ace-icon fa fa-plus icon-on-right"></i>
                                    <?= $t_['Save'] . " "; ?>
                                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                                <?php if(isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_travel_agent_no'] != $_SESSION['ESS_EMPLOYEE_NO']) { ?>
    		
    		
                        		<button class="btn btn-success" id="btn-approval" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "display:none;" : ""; ?>">
                        			<i class="ace-icon fa fa-share-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Send Approval
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-success" id="btn-approve" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "" : "display:none;"; ?>">
                        			<i class="ace-icon fa fa-check-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Approve
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-error" id="btn-cancel-approval">
                        			<i class="ace-icon fa fa-times-circle-o icon-on-right "></i>&nbsp;&nbsp;
                        			Reject Approval request
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		
                        		<?php } else if(!isset($_EDIT)) { ?>
                        		
                        		<button class="btn btn-success" id="btn-approval" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "display:none;" : ""; ?>">
                        			<i class="ace-icon fa fa-share-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Send Approval
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-success" id="btn-approve" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "" : "display:none;"; ?>">
                        			<i class="ace-icon fa fa-check-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Approve
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-error" id="btn-cancel-approval">
                        			<i class="ace-icon fa fa-times-circle-o icon-on-right "></i>&nbsp;&nbsp;
                        			Reject Approval request
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<?php } ?>
                            
                            
                            
                            <?php } ?>
                            
                            <?php } else { ?>
                            
                                <button class="btn btn-primary" id="btn-edit-accounting" data-id="<?= isset($_DATA) ? $_DATA['trav_id'] : ""; ?>" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "" : "display:none;"; ?>">
                                    <i class="ace-icon fa fa-save icon-on-right"></i>
                                    <?= $t_['Save'] . " "; ?>
                                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-primary" id="btn-add" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "display:none;" : ""; ?>">
                                    <i class="ace-icon fa fa-plus icon-on-right"></i>
                                    <?= $t_['Save'] . " "; ?>
                                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <button class="btn btn-success" id="btn-approval" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "display:none;" : ""; ?>">
                        			<i class="ace-icon fa fa-share-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Send Approval
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-success" id="btn-approve" style="<?= (isset($_EDIT) && $_EDIT == 1 && $_DATA['trav_supervisor_no'] == $_SESSION['ESS_EMPLOYEE_NO']) ? "" : "display:none;"; ?>">
                        			<i class="ace-icon fa fa-check-square-o icon-on-right "></i>&nbsp;&nbsp;
                        			Approve
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		
                        		<button class="btn btn-error" id="btn-cancel-approval">
                        			<i class="ace-icon fa fa-times-circle-o icon-on-right "></i>&nbsp;&nbsp;
                        			Reject Approval request
                        		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <?php } ?>


                            <!-- /section:plugins/fuelux.wizard.buttons -->
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-3 zoomIn animated dashboard_tab">
                
                <div id="ess_general_info" class="row ess_card">
                    <h4 class="ess_title">Attached Documents</h4>
                    <?php if($_DATA['trav_travel_agent_no'] == $_SESSION['ESS_EMPLOYEE_NO']) { ?>
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h5 class="widget-title" ><?= 'Upload';?></h5>
                            <!-- #section:custom/widget-box.toolbar -->
                            <div class="widget-toolbar">
                                <a data-action="" data-toggle="modal" href="#upload-csv-file-div">
                                    <i class="ace-icon fa fa-paperclip fa-lg is-link" title="<?= 'Upload File';?>"></i>
                                </a>
                            </div>

                            <!-- /section:custom/widget-box.toolbar -->
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-6 no-padding-left no-padding-right">
                                <div id="image" style="min-height:500px;">
                                    <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                    <table id="import_table" class="display" cellspacing="0" width="100%">
                                        <tbody>
                                        
                                            <?php 
                                                if(isset($_UPLOADS) && count($_UPLOADS) > 0) { 
                                                    foreach ($_UPLOADS as $key => $ufile) {
                                                        //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                        <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;
                                                        #<?= $ufile['file_id']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php 
                                                    }
                                                } 
                                            ?>
                                        
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h5 class="widget-title" ><?= 'Uploaded Files';?></h5>

                            <!-- /section:custom/widget-box.toolbar -->
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-6 no-padding-left no-padding-right">
                                <div id="image" style="min-height:500px;">
                                    <!--<i class='fa fa-file-text-o fa-5x light-grey'></i> -->
                                    <table id="import_table" class="display" cellspacing="0" width="100%">
                                        <tbody>
                                        <?php 
                                                if(isset($_UPLOADS) && count($_UPLOADS) > 0) { 
                                                    foreach ($_UPLOADS as $key => $ufile) {
                                                        //`file_id`, `file_date_created`, `file_emp_no`, `file_trav_id`, `file_trav_document_no`, `file_path`, `file_publish`
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="/<?= $ufile['file_path']; ?>" target="_blank">
                                                        <i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;
                                                        #<?= $ufile['file_id']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php 
                                                    }
                                                } 
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>

<!-- UPLOAD CSV FILE -->
<div id="upload-csv-file-div" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?= 'Upload File'; ?></h4>
            </div>

            <div class="modal-body">
                <input type="file" name="filecsv" id="id-input-file-csv" />
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- UPLOAD TRANSPORT FILE -->
<div id="upload-transport-file-div" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?= 'Upload Transport File'; ?></h4>
            </div>

            <div class="modal-body">
                <input type="file" name="filetransport" id="id-input-file-transport" />
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- UPLOAD ACCOMODATION FILE -->
<div id="upload-accomodation-file-div" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?= 'Upload Accomodation File'; ?></h4>
            </div>

            <div class="modal-body">
                <input type="file" name="fileaccomodation" id="id-input-file-accomodation" />
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- UPLOAD PER DIEM FILE -->
<div id="upload-perdiem-file-div" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?= 'Upload Per Diem File'; ?></h4>
            </div>

            <div class="modal-body">
                <input type="file" name="fileperdiem" id="id-input-file-perdiem" />
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- UPLOAD OTHER FILE -->
<div id="upload-other-file-div" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?= 'Upload File'; ?></h4>
            </div>

            <div class="modal-body">
                <input type="file" name="fileother" id="id-input-file-other" />
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- /.row -->
<script type="text/javascript">
    //
    var userCountry = "<?= $_SESSION['COUNTRY']; ?>";
    var destinationCodesArr = [];
    var destinationCodesArrOne = [];
    //
    function filter(array, value, key) {
        return array.filter(key
            ? a => a[key] === value
            : a => Object.keys(a).some(k => a[k] === value)
        );
    }
    //
    function loadDestinationCodes() {
        var selobj = "#trav_transport_destination";
        $.ajax({
            cache: false,
            url: 'ESSTravelRequisitionUI/readMyDestinationCodes',
            type: 'GET',
            dataType: 'json',
            traditional: true, 
            beforeSend: function (jqXHR) {
                $(selobj).html("");
                destinationCodesArr.length = 0;
                destinationCodesArrOne.length = 0;
            },
            success: function (data) {
                
                console.log("************* Destination Codes");
                console.log(data);
                
                $(selobj).append(
                    $('<option></option>')
                        .val('')
                        .html("<?= $t_['trav_lines_destination_code']; ?>"));
                $.each(data, function (i, obj) {
                //`dest_id`, `dest_date_created`, `dest_date_updated`, `dest_date_created_by`, `dest_date_updated_by`, `dest_status`, `dest_currency`, `dest_destination_code`,
                //`dest_advance_code`, `dest_destination_type`, `dest_daily_rate_amount`, `dest_employee_job_group`, `dest_destination_name`, `dest_publish`
                    var dc = {
                        dest_id: obj.dest_id,
                        dest_currency: obj.dest_currency,
                        dest_destination_code: obj.dest_destination_code,
                        dest_advance_code: obj.dest_advance_code,
                        dest_destination_type: obj.dest_destination_type,
                        dest_employee_job_group: obj.dest_employee_job_group,
                        dest_destination_name: obj.dest_destination_name,
                        dest_daily_rate_amount: obj.dest_daily_rate_amount
                    };
                    destinationCodesArr.push(dc);
                    
                    var ndisp = userCountry +"-"+obj.dest_destination_name;
                    $(selobj).append(
                        $('<option></option>')
                            .val(obj.dest_destination_code)
                            .html(ndisp));
                });
                try {
                    $(".chzn-select").chosen();
                    $(selobj).val("<?= isset($_DATA) ? $_DATA['trav_transport_destination'] : ""; ?>").change().trigger("chosen:updated");
                } catch (err) {
                    console.log(err);
                }
                
            }
        });
    }
    //
    function checkboxCheck(){
        if($('#trav_accomodation_type_breakfast').is(':checked') && $('#trav_accomodation_type_lunch').is(':checked') && $('#trav_accomodation_type_dinner').is(':checked')){
            //full board
            console.log("Fullboard");
            $('#trav_per_diem_amount').val("0");
        } else {
            console.log("Halfboard");
            var selv = $('#trav_transport_destination').val();
            console.log(selv);
            if(selv != ""){
                destinationCodesArrOne = filter(destinationCodesArr, selv, 'dest_destination_code');
                console.log(destinationCodesArrOne);
                if(destinationCodesArrOne.length > 0){
                    //trav_accomodation_type_unit_amount trav_accomodation_type_amount
                    var sobj = destinationCodesArrOne[0];
                    var dra = sobj.dest_daily_rate_amount;

                    var numdays = $("#trav_no_of_days").val();
                    var drate = parseInt(dra.replace(/,/g,""));
                    var ans = parseInt(numdays) * drate;
                    $('#trav_per_diem_amount').val(ans);
                    
                }
            }
        }
    }
    //
    function calculateAmount() {
        //trav_accomodation_type_breakfast trav_accomodation_type_lunch trav_accomodation_type_dinner
        var selv = $('#trav_accomodation_type_unit_amount').val();
        //var selv = $(this).val();
        console.log(selv);
        if(selv != ""){
            
            var numdays = $("#trav_no_of_days").val();
            var ans = parseInt(numdays) * parseInt(selv);
            
            $('#trav_accomodation_type_amount').val(ans);
            
        }
    }
    //
</script>
<script type="text/javascript">
    //
    var tna = 0;
    var line_id = "<?= isset($_DATA) ? $_DATA['trav_id'] : "0"; ?>";
    var trav_posting_description = "<?= isset($_DATA) ? $_DATA['trav_posting_description'] : ""; ?>";
    //
    $(".footer").hide();
    //in navigation
    utilNavigation("ESSTravelRequisitionUI/addEditView");
    //variables to be used
    var formObject = $('#form-esstravelrequisitionaccountingui');
    //
    function updateUiAfterAjax($data) {
        console.log($data);
        showGritter($data.title, $data.message, $data.type);
        
        if($data.type == "success"){
            ajaxRequest("ESSTravelRequisitionUI", loadPage);
        }
    }
    //
    function updateUiAfterAjaxAcc($data) {
        console.log($data);
        showGritter($data.title, $data.message, $data.type);
        
        if($data.type == "success"){
            $("#refresh-icon").trigger("click");
        }
    }
    //
    function updateUiAfterAjaxEdit($data) {
        console.log($data);
        showGritter($data.title, $data.message, $data.type);
        if($data.type == "success"){
            ajaxRequest("ESSTravelRequisitionUI/addEditView?edit=true&id=" + line_id, loadPage);
        }
    }
    //
    $(document).ready(function () {
        <?php if(isset($_EDIT) && $_EDIT == 1) { ?>
            $("#trav_transport_travel_options").val("<?= isset($_DATA) ? $_DATA['trav_transport_travel_options'] : ""; ?>").change().trigger("chosen:updated");
            $("#trav_transport_destination").val("<?= isset($_DATA) ? $_DATA['trav_transport_destination'] : ""; ?>").change().trigger("chosen:updated");
        <?php } ?>
        //
        $('.chzn-select').chosen();
        
        //
        $('.date-picker').datepicker({
            format: 'yyyy-mm-dd'
        }).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        //trav_date_of_departure
        $('#trav_date_of_departure').datetimepicker({
    		format: 'YYYY-MM-DD hh:mm:ss',//use this option to display seconds
    		icons: {
    			time: 'fa fa-clock-o',
    			date: 'fa fa-calendar',
    			up: 'fa fa-chevron-up',
    			down: 'fa fa-chevron-down',
    			previous: 'fa fa-chevron-left',
    			next: 'fa fa-chevron-right',
    			today: 'fa fa-arrows ',
    			clear: 'fa fa-trash',
    			close: 'fa fa-times'
    		}
		}).next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
		//trav_date_of_arrival
        $('#trav_date_of_arrival').datetimepicker({
    		format: 'YYYY-MM-DD hh:mm:ss',//use this option to display seconds
    		icons: {
    			time: 'fa fa-clock-o',
    			date: 'fa fa-calendar',
    			up: 'fa fa-chevron-up',
    			down: 'fa fa-chevron-down',
    			previous: 'fa fa-chevron-left',
    			next: 'fa fa-chevron-right',
    			today: 'fa fa-arrows ',
    			clear: 'fa fa-trash',
    			close: 'fa fa-times'
    		}
		}).next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
		//trav_date_of_return
        $('#trav_date_of_return').datetimepicker({
    		format: 'YYYY-MM-DD hh:mm:ss',//use this option to display seconds
    		icons: {
    			time: 'fa fa-clock-o',
    			date: 'fa fa-calendar',
    			up: 'fa fa-chevron-up',
    			down: 'fa fa-chevron-down',
    			previous: 'fa fa-chevron-left',
    			next: 'fa fa-chevron-right',
    			today: 'fa fa-arrows ',
    			clear: 'fa fa-trash',
    			close: 'fa fa-times'
    		}
		}).next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
        //
        $('#trav_date_of_return').on('dp.change', function(e){ 
            var returndate = e.date.format('YYYY-MM-DD hh:mm:ss');
            
            var arrivaldate = $('#trav_date_of_arrival').val();
            if(arrivaldate != ""){
                
                console.log("arrivaldate: "+arrivaldate);
                console.log("returndate: "+returndate);
                
                var diffInMs   = new Date(returndate) - new Date(arrivaldate)
                var diffInDays = Math.ceil(diffInMs / (1000 * 60 * 60 * 24));
                
                console.log("Days: "+ diffInDays);
                $("#trav_no_of_days").val(diffInDays);
                
            }
            
        });
        //
        var newheight = $("#ess_right_card").height() + 15;
        console.log(newheight);
        console.log(" newheight ------ " + newheight);
        $("#ess_general_info").height(newheight);
        //
        loadDestinationCodes();
        //
        $('#trav_transport_destination').change(function(){
            var selv = $(this).val();
            console.log(selv);
            if(selv != ""){
                destinationCodesArrOne = filter(destinationCodesArr, selv, 'dest_destination_code');
                console.log(destinationCodesArrOne);
                if(destinationCodesArrOne.length > 0){
                    //trav_accomodation_type_unit_amount trav_accomodation_type_amount
                    var sobj = destinationCodesArrOne[0];
                    var dra = sobj.dest_daily_rate_amount;

                    var numdays = $("#trav_no_of_days").val();
                    var drate = parseInt(dra.replace(/,/g,""));
                    var ans = parseInt(numdays) * drate;
                    //$('#trav_per_diem_amount').val(ans);
                    
                }
            }
        });
        //
        $("#btn-back").click(function () {
            ajaxRequest("ESSTravelRequisitionUI", loadPage);
        });
        //
        $("#btn-approval").click(function () {
            //ajaxRequest("ESSTravelRequisitionUI", loadPage);
            $data = "trav_id=" + line_id;
            ajaxRequest("ESSTravelRequisitionUI/sendForApproval", updateUiAfterAjax, $data, "POST", "json");
        });
        //
        $("#btn-approve").click(function () {
            //ajaxRequest("ESSTravelRequisitionUI", loadPage);
            $data = "trav_id=" + line_id;
            console.log($data);
            ajaxRequest("ESSTravelRequisitionUI/approveRequest", updateUiAfterAjax, $data, "POST", "json");
        });
        //
        $("#btn-close-tr").click(function () {
            //ajaxRequest("ESSTravelRequisitionUI", loadPage);
            $data = "trav_id=" + line_id;
            console.log($data);
            ajaxRequest("ESSTravelRequisitionUI/closeTravelRequest", updateUiAfterAjaxAcc, $data, "POST", "json");
        });
        //
        $("#btn-cancel-approval").click(function () {
            //ajaxRequest("ESSTravelRequisitionUI", loadPage);
            $data = "trav_id=" + line_id;
            ajaxRequest("ESSTravelRequisitionUI/cancelRequest", updateUiAfterAjax, $data, "POST", "json");
        });
        //
        $("#btn-add").click(function () {
            //form-esstravelrequisitionui form-transport form-accomodation form-per-diem
            //$id = $(this).data('id');
            if (!$('#form-esstravelrequisitionui').valid()) {
                return false;
            } else {
                var fh = $('#form-esstravelrequisitionui').serialize();
                var ft = $('#form-transport').serialize();
                var fa = $('#form-accomodation').serialize();
                var fpd = $('#form-per-diem').serialize();
                var fo = $('#form-other').serialize();
                console.log("------------ FORM DATA ------------");
                console.log(fh);
                console.log(ft);
                console.log(fa);
                console.log(fpd);
                var data = fh +"&"+ ft +"&"+ fa +"&"+ fpd +"&"+fo;
                console.log(data);
                //$data = $('#form-esstravelrequisitionui').serialize();
                /*
                trav_document_no=&trav_date=2024-01-10&trav_payee=JARED+OKONGO+MOMANYI&trav_amount=0&trav_department=888&trav_country=50&trav_posting_description=test&trav_designation=Software+Developer&trav_date_of_departure=2024-01-10+10%3A52%3A50&trav_date_of_arrival=2024-01-10+10%3A51%3A20&trav_date_of_return=2024-01-11+12%3A51%3A21&trav_no_of_days=1
                trav_transport_destination=Area+1&trav_transport_amount=1000&trav_transport_purpose=test&trav_transport_travel_options=Bus
                trav_accomodation_type_breakfast=&trav_accomodation_type_lunch=&trav_accomodation_type_dinner=&trav_accomodation_type_unit_amount=500&trav_accomodation_type_amount=500&trav_accomodation_type_purpose=test
                trav_per_diem_amount=0&frm_def=&trav_per_diem_purpose=&frm_def=
                */
                ajaxRequest("ESSTravelRequisitionUI/create", updateUiAfterAjax, data, "POST", "json");
            }
        });
        //
        $("#btn-add-line").click(function () {
            //alert(line_id);
            
            ajaxRequest("ESSTravelRequisitionUI/addEditViewLine?trav_id=" + line_id + "&trav_id="+line_id + "&desc="+trav_posting_description, loadPage);
        });

        $("#btn-edit").click(function () {
            if (!$('#form-esstravelrequisitionui').valid()) {
                return false;
            } else {
                var fh = $('#form-esstravelrequisitionui').serialize();
                var ft = $('#form-transport').serialize();
                var fa = $('#form-accomodation').serialize();
                var fpd = $('#form-per-diem').serialize();
                var fo = $('#form-other').serialize();
                console.log("------------ FORM DATA UPDATE ------------");
                console.log(fh);
                console.log(ft);
                console.log(fa);
                console.log(fpd);
                var data = fh +"&"+ ft +"&"+ fa +"&"+ fpd +"&"+fo;
                console.log(data);
                //$data = $('#form-esstravelrequisitionui').serialize();
                ajaxRequest("ESSTravelRequisitionUI/update", updateUiAfterAjaxEdit, data + "&trav_id=" + line_id, "POST", "json");
            }
        });

        $("#btn-edit-accounting").click(function () {
            if (!$('#form-esstravelrequisitionui').valid()) {
                return false;
            } else {
                var fh = $('#form-esstravelrequisitionui').serialize();
                var ft = $('#form-transport').serialize();
                var fa = $('#form-accomodation').serialize();
                var fpd = $('#form-per-diem').serialize();
                var fo = $('#form-other').serialize();
                console.log("------------ FORM DATA UPDATE ACCOUNTING ------------");
                console.log(fh);
                console.log(ft);
                console.log(fa);
                console.log(fpd);
                var data = fh +"&"+ ft +"&"+ fa +"&"+ fpd+"&"+fo;
                console.log(data);
                //$data = $('#form-esstravelrequisitionui').serialize();
                ajaxRequest("ESSTravelRequisitionUI/updateAccounting", updateUiAfterAjaxEdit, data + "&trav_id=" + line_id, "POST", "json");
            }
        });
        //
        
        //
        $('#form-esstravelrequisitionui,#form-transport,#form-accomodation,#form-per-diem').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {},
            messages: {},
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element) {
                if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if (controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if (element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });
        
       
    });
</script>
<script>
    
    //
    var trql = $('#ess_travel_requisition_lines').DataTable({
        "processing": true,
        "serverSide": true,
        //"ajax": "TableLoader?model_name=ESSTravelRequisitionUILines",
        "ajax": {
            "url": "TableLoader?model_name=ESSTravelRequisitionUILines",
            "data": function (d) {
                d.trav_id = line_id;
            }
        },
        "order": [[0, 'desc']],
        "bInfo": false,
        "bLengthChange": false,
        "language": {
            "search": '',
            "searchPlaceholder": "Type to Filter",
        },
        "sScrollY": "250px",
        "pageLength" : 10,
        "lengthMenu" : [[50, 100, 200, -1], [50, 100, 200, 'Todos']],
        "aoColumnDefs": [
            {"sClass": "center", "aTargets": [7,10,12]},
            {"sClass": "right", "aTargets": [8,9]},
            {
                "mRender": function (oObj) {
                    //tna
                    console.log(oObj);
                    tna = tna + parseInt(oObj);
                    
                    return oObj; 
                },
                "aTargets": [9]
            },
            {
                "mRender": function (oObj) {
                    var view = "<i class='fa fa-info fa-lg view-btn blue is-link secured' data-id='" + oObj.trav_lines_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['View'];?>'></i>&nbsp;&nbsp;&nbsp;";
                    var edit = "<i class='fa fa-edit fa-lg edit-btn green is-link secured' data-id='" + oObj.trav_lines_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['Edit'];?>'></i>&nbsp;&nbsp;&nbsp;";
                    var del = "<i class='fa fa-trash fa-lg delete-btn red is-link secured' data-id='" + oObj.trav_lines_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['Delete'];?>'></i>";
                    return view; 
                },
                "aTargets": [12]
            }
        ],
        "fnDrawCallback": function (oSettings) {
            $('#tna').text(tna);
            publishElements('secured');
        }


    });
    //
    trql.on('click', 'i.view-btn', function (e) {
        $id = $(this).data('id');
        ajaxRequest("ESSTravelRequisitionUI/addEditViewLine?edit=true&id=" + $id + "&trav_id="+line_id + "&desc="+trav_posting_description, loadPage);
    });
    
    
</script>

<!-- Upload Global Files -->
<script type="text/javascript">
    //U
    function downloadURI(uri, name) {
        var link = document.createElement("a");
        // If you don't know the name or want to use
        // the webserver default set name = ''
        link.setAttribute('download', name);
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        link.remove();
    }
    //
    function setUploadedCSV(){
        
        
    }
    //
    // Variable to store your files
    var dataChecker = 0;
    var filesCsv;
    var uploadedImageUrl = "";
    var setImageDivId = "";
    // Add events
    $('#id-input-file-csv').on('change', prepareCSVUpload);
    $('#btn-download-sample-csv').click(function(){
        //browser.downloads.download({url: "https://example.org/image.png"})
        //https://titan.jamexexpress.com/csv/sample_csv_upload_file.csv
        //downloadURI("","sample_csv_upload_file");
       
        var currentURL = window.location.protocol + "//" + window.location.hostname + "/uploads/ess/sample_csv_upload_file.csv";
        downloadURI(currentURL,"sample_csv_upload_file");
    });
    //
    // Grab the files and set them to our variable
    function prepareCSVUpload(event) {
       
        filesCsv = event.target.files;
        //console.log(filesCsv);
        
        uploadCSVFiles();
    }
    //
    function updateUiAfterAjaxUpload($data) {
        console.log(" ********** UPLOADED FILES DATA SAVE********** ");
        console.log($data);
        showGritter($data.title, $data.message, $data.type);
        $("#refresh-icon").trigger("click");
       // showGritter($data.result, $data.message, $data.result, "", false);
        
    }
    
    // Catch the form submit and upload the files
    function uploadCSVFiles(event) {
        // Create a formdata object and add the files
        var data = new FormData();
        $.each(filesCsv, function (key, value) {
            data.append(key, value);
        });
    
        $.ajax({
            url: 'ESSUpload',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(" ********** UPLOADED FILES DATA ********** ");
                console.log(data);
                //$("#refresh-icon").trigger("click");
                
                // Handle errors here
                if (data.result == "success") {
                  
                    
                    
                    ajaxRequest("ESSTravelRequisitionUI/uploadFile",updateUiAfterAjaxUpload,"trav_id="+line_id +"&trav_file_path="+data.filepath,"POST","json",false);
        
                    //"&trav_id="+line_id 
                    //{result: 'success', message: 'Upload Successfull', filepath: 'uploads/ess/15122023091006dummy.pdf', filetype: 'applicationpdf'}
                    console.log(data);
                    console.log(data.filepath);
                    console.log("trav_id="+line_id +"&trav_file_path="+data.filepath);
                    /*if(last_upload_file_type == "imagegif" || last_upload_file_type == "imagejpeg" || last_upload_file_type == "imagepng"){
                        $image_html = "<image style='width:100%;' src='"+last_upload_file_path+"'/>";
                        $("#image").html($image_html);
                    } else if(last_upload_file_type == "applicationpdf"){
                     
                        $pdf_html = "<embed src='"+last_upload_file_path+"' type='application/pdf' width='100%' height='100%' >";
                        $("#image").html($pdf_html);
                    } */
                    
                } else {
                    showGritter(data.result, data.message, data.result, "", false);
                }
            },
            error: function (request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
                console.log(request.responseText);
            },
            complete: function () {
    
            }
    
        });
    }
    //
    //$(document).ready(function () {
        //sample_csv_upload_file.csv
        //folder = "trucks";
        //
        $('#id-input-file-csv').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:prepareCSVUpload,
            thumbnail:false, //| true | large
            whitelist:'csv',
            blacklist:'exe|php|doc|sql|docx|gif|png|jpg|jpeg|pdf'
            //onchange:''
            //
        });
    //});
        
</script>

<!-- Upload Transport Files -->
<script type="text/javascript">
    
    // Variable to store your files
    var filesTransport;
    // Add events
    $('#id-input-file-transport').on('change', prepareTransportUpload);
   
    // Grab the files and set them to our variable
    function prepareTransportUpload(event) {
       
        filesTransport = event.target.files;
        
        uploadTransportFiles();
    }
    
    // Catch the form submit and upload the files
    function uploadTransportFiles(event) {
        // Create a formdata object and add the files
        var data = new FormData();
        $.each(filesTransport, function (key, value) {
            data.append(key, value);
        });
    
        $.ajax({
            url: 'ESSUpload/transport',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(" ********** UPLOADED Transport Files FILES DATA ********** ");
                console.log(data);
                //$("#refresh-icon").trigger("click");
                
                // Handle errors here
                if (data.result == "success") {
                    //tbl_transport
                    //$("#tbl_transport").html($image_html);
                    
                    var trupload = ''+
                    '<tr>'+
                        '<td>'+
                            '<a href="/'+data.filepath+'" target="_blank">'+
                                '<i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;'+
                                '#Transport File '+
                            '</a>'+
                        '</td>'+
                    '</tr>';
                    $("#tbl_transport").append(trupload);
                  
                    
                    
                    ajaxRequest("ESSTravelRequisitionUI/uploadFileTransport",updateUiAfterAjaxUpload,"trav_id="+line_id +"&trav_file_path="+data.filepath,"POST","json",false);
        
                    //"&trav_id="+line_id 
                    //{result: 'success', message: 'Upload Successfull', filepath: 'uploads/ess/15122023091006dummy.pdf', filetype: 'applicationpdf'}
                    console.log(data);
                    console.log(data.filepath);
                    console.log("trav_id="+line_id +"&trav_file_path="+data.filepath);
                    /*if(last_upload_file_type == "imagegif" || last_upload_file_type == "imagejpeg" || last_upload_file_type == "imagepng"){
                        $image_html = "<image style='width:100%;' src='"+last_upload_file_path+"'/>";
                        $("#image").html($image_html);
                    } else if(last_upload_file_type == "applicationpdf"){
                     
                        $pdf_html = "<embed src='"+last_upload_file_path+"' type='application/pdf' width='100%' height='100%' >";
                        $("#image").html($pdf_html);
                    } */
                    
                } else {
                    showGritter(data.result, data.message, data.result, "", false);
                }
            },
            error: function (request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
                console.log(request.responseText);
            },
            complete: function () {
    
            }
    
        });
    }
    //
    //$(document).ready(function () {
        //sample_csv_upload_file.csv
        //folder = "trucks";
        //
        $('#id-input-file-transport').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:prepareTransportUpload,
            thumbnail:false, //| true | large
            whitelist:'csv',
            blacklist:'exe|php|doc|sql|docx|gif|png|jpg|jpeg|pdf'
            //onchange:''
            //
        });
    //});
        
</script>

<!-- Upload Accomodation Files -->
<script type="text/javascript">
    
    // Variable to store your files
    var filesAccomodation;
    // Add events
    $('#id-input-file-accomodation').on('change', prepareAccomodationUpload);
   
    // Grab the files and set them to our variable
    function prepareAccomodationUpload(event) {
       
        filesAccomodation = event.target.files;
        
        uploadAccomodationFiles();
    }
    
    // Catch the form submit and upload the files
    function uploadAccomodationFiles(event) {
        // Create a formdata object and add the files
        var data = new FormData();
        $.each(filesAccomodation, function (key, value) {
            data.append(key, value);
        });
    
        $.ajax({
            url: 'ESSUpload/accomodation',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(" ********** UPLOADED Accomodation Files FILES DATA ********** ");
                console.log(data);
                //$("#refresh-icon").trigger("click");
                
                // Handle errors here
                if (data.result == "success") {
                    
                    var accupload = ''+
                    '<tr>'+
                        '<td>'+
                            '<a href="/'+data.filepath+'" target="_blank">'+
                                '<i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;'+
                                '#Accomodation File '+
                            '</a>'+
                        '</td>'+
                    '</tr>';
                    $("#tbl_accomodation").append(accupload);
                  
                    
                    
                    ajaxRequest("ESSTravelRequisitionUI/uploadFileAccomodation",updateUiAfterAjaxUpload,"trav_id="+line_id +"&trav_file_path="+data.filepath,"POST","json",false);
        
                    //"&trav_id="+line_id 
                    //{result: 'success', message: 'Upload Successfull', filepath: 'uploads/ess/15122023091006dummy.pdf', filetype: 'applicationpdf'}
                    console.log(data);
                    console.log(data.filepath);
                    console.log("trav_id="+line_id +"&trav_file_path="+data.filepath);
                    /*if(last_upload_file_type == "imagegif" || last_upload_file_type == "imagejpeg" || last_upload_file_type == "imagepng"){
                        $image_html = "<image style='width:100%;' src='"+last_upload_file_path+"'/>";
                        $("#image").html($image_html);
                    } else if(last_upload_file_type == "applicationpdf"){
                     
                        $pdf_html = "<embed src='"+last_upload_file_path+"' type='application/pdf' width='100%' height='100%' >";
                        $("#image").html($pdf_html);
                    } */
                    
                } else {
                    showGritter(data.result, data.message, data.result, "", false);
                }
            },
            error: function (request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
                console.log(request.responseText);
            },
            complete: function () {
    
            }
    
        });
    }
    //
    //$(document).ready(function () {
        //sample_csv_upload_file.csv
        //folder = "trucks";
        //
        $('#id-input-file-accomodation').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:prepareAccomodationUpload,
            thumbnail:false, //| true | large
            whitelist:'csv',
            blacklist:'exe|php|doc|sql|docx|gif|png|jpg|jpeg|pdf'
            //onchange:''
            //
        });
    //});
        
</script>

<!-- Upload Per Diem Files -->
<script type="text/javascript">
    
    // Variable to store your files
    var filesPerDiem;
    // Add events
    $('#id-input-file-perdiem').on('change', preparePerDiemUpload);
   
    // Grab the files and set them to our variable
    function preparePerDiemUpload(event) {
       
        filesPerDiem = event.target.files;
        
        uploadPerDiemFiles();
    }
    
    // Catch the form submit and upload the files
    function uploadPerDiemFiles(event) {
        // Create a formdata object and add the files
        var data = new FormData();
        $.each(filesPerDiem, function (key, value) {
            data.append(key, value);
        });
    
        $.ajax({
            url: 'ESSUpload/perdiem',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(" ********** UPLOADED perdiem Files FILES DATA ********** ");
                console.log(data);
                //$("#refresh-icon").trigger("click");
                
                // Handle errors here
                if (data.result == "success") {
                    
                    var accupload = ''+
                    '<tr>'+
                        '<td>'+
                            '<a href="/'+data.filepath+'" target="_blank">'+
                                '<i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;'+
                                '#Per Diem File '+
                            '</a>'+
                        '</td>'+
                    '</tr>';
                    $("#tbl_perdiem").append(accupload);
                  
                    
                    
                    ajaxRequest("ESSTravelRequisitionUI/uploadFilePerDiem",updateUiAfterAjaxUpload,"trav_id="+line_id +"&trav_file_path="+data.filepath,"POST","json",false);
        
                    //"&trav_id="+line_id 
                    //{result: 'success', message: 'Upload Successfull', filepath: 'uploads/ess/15122023091006dummy.pdf', filetype: 'applicationpdf'}
                    console.log(data);
                    console.log(data.filepath);
                    console.log("trav_id="+line_id +"&trav_file_path="+data.filepath);
                    /*if(last_upload_file_type == "imagegif" || last_upload_file_type == "imagejpeg" || last_upload_file_type == "imagepng"){
                        $image_html = "<image style='width:100%;' src='"+last_upload_file_path+"'/>";
                        $("#image").html($image_html);
                    } else if(last_upload_file_type == "applicationpdf"){
                     
                        $pdf_html = "<embed src='"+last_upload_file_path+"' type='application/pdf' width='100%' height='100%' >";
                        $("#image").html($pdf_html);
                    } */
                    
                } else {
                    showGritter(data.result, data.message, data.result, "", false);
                }
            },
            error: function (request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
                console.log(request.responseText);
            },
            complete: function () {
    
            }
    
        });
    }
    //
    //$(document).ready(function () {
        //sample_csv_upload_file.csv
        //folder = "trucks";
        //
        $('#id-input-file-perdiem').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:preparePerDiemUpload,
            thumbnail:false, //| true | large
            whitelist:'csv',
            blacklist:'exe|php|doc|sql|docx|gif|png|jpg|jpeg|pdf'
            //onchange:''
            //
        });
    //});
        
</script>

<!-- Upload Other Files -->
<script type="text/javascript">
    
    // Variable to store your files
    var filesOther;
    // Add events
    $('#id-input-file-other').on('change', prepareOtherUpload);
   
    // Grab the files and set them to our variable
    function prepareOtherUpload(event) {
       
        filesOther = event.target.files;
        
        uploadOtherFiles();
    }
    
    // Catch the form submit and upload the files
    function uploadOtherFiles(event) {
        // Create a formdata object and add the files
        var data = new FormData();
        $.each(filesOther, function (key, value) {
            data.append(key, value);
        });
    
        $.ajax({
            url: 'ESSUpload/other',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(" ********** UPLOADED other Files FILES DATA ********** ");
                console.log(data);
                //$("#refresh-icon").trigger("click");
                
                // Handle errors here
                if (data.result == "success") {
                    
                    var accupload = ''+
                    '<tr>'+
                        '<td>'+
                            '<a href="/'+data.filepath+'" target="_blank">'+
                                '<i class="ace-icon fa fa-file-pdf-o" title="File" style="color:#F40F02;"></i> &nbsp;&nbsp;'+
                                '#Per Diem File '+
                            '</a>'+
                        '</td>'+
                    '</tr>';
                    $("#tbl_other").append(accupload);
                  
                    
                    
                    ajaxRequest("ESSTravelRequisitionUI/uploadFileOther",updateUiAfterAjaxUpload,"trav_id="+line_id +"&trav_file_path="+data.filepath,"POST","json",false);
        
                    //"&trav_id="+line_id 
                    //{result: 'success', message: 'Upload Successfull', filepath: 'uploads/ess/15122023091006dummy.pdf', filetype: 'applicationpdf'}
                    console.log(data);
                    console.log(data.filepath);
                    console.log("trav_id="+line_id +"&trav_file_path="+data.filepath);
                    /*if(last_upload_file_type == "imagegif" || last_upload_file_type == "imagejpeg" || last_upload_file_type == "imagepng"){
                        $image_html = "<image style='width:100%;' src='"+last_upload_file_path+"'/>";
                        $("#image").html($image_html);
                    } else if(last_upload_file_type == "applicationpdf"){
                     
                        $pdf_html = "<embed src='"+last_upload_file_path+"' type='application/pdf' width='100%' height='100%' >";
                        $("#image").html($pdf_html);
                    } */
                    
                } else {
                    showGritter(data.result, data.message, data.result, "", false);
                }
            },
            error: function (request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
                console.log(request.responseText);
            },
            complete: function () {
    
            }
    
        });
    }
    //
    //$(document).ready(function () {
        //sample_csv_upload_file.csv
        //folder = "trucks";
        //
        $('#id-input-file-other').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:prepareOtherUpload,
            thumbnail:false, //| true | large
            whitelist:'csv',
            blacklist:'exe|php|doc|sql|docx|gif|png|jpg|jpeg|pdf'
            //onchange:''
            //
        });
    //});
        
</script>

<script>
    var totalNetAmountStr = "<?= isset($_DATA) ? $_DATA['trav_amount'] : "0"; ?>";
    var totalNetAmount = parseInt(totalNetAmountStr);

    var transportTotalAmountStr = "<?= isset($_DATA) ? $_DATA['trav_transport_amount'] : "0"; ?>";
    var transportTotalAmount = parseInt(transportTotalAmountStr);

    var accomodationTotalAmountStr = "<?= isset($_DATA) ? $_DATA['trav_accomodation_type_amount'] : "0"; ?>";
    var accomodationTotalAmount = parseInt(accomodationTotalAmountStr);

    var perdiemTotalAmountStr = "<?= isset($_DATA) ? $_DATA['trav_per_diem_amount'] : "0"; ?>";
    var perdiemTotalAmount = parseInt(perdiemTotalAmountStr);

    var otherTotalAmountStr = "<?= isset($_DATA) ? $_DATA['trav_other_amount'] : "0"; ?>";
    var otherTotalAmount = parseInt(otherTotalAmountStr);
    
    //trav_actual_spent trav_receipt_amount trav_cash_claim_amount
    $("#trav_actual_spent").on('input', function() {
        // do something
        var inp = parseInt($(this).val());
        var ramt = parseInt($("#trav_receipt_amount").val());
        var ccamt = parseInt($("#trav_cash_claim_amount").val());
        if(inp < totalNetAmount){
            $("#trav_cash_claim_amount").val("0");
            $("#trav_receipt_amount").val("0");
        } else if(inp < totalNetAmount){
            var bal = totalNetAmount - inp;
            $("#trav_cash_claim_amount").val("0");
            $("#trav_receipt_amount").val(bal);
        } else if(inp > totalNetAmount){
            var bal = inp - totalNetAmount;
            $("#trav_cash_claim_amount").val(bal);
            $("#trav_receipt_amount").val("0");
        }
    });
    
    //trav_transport_actual_spent trav_transport_receipt_amount trav_transport_cash_claim_amount
    $("#trav_transport_actual_spent").on('input', function() {
        // do something
        var inp = parseInt($(this).val());
        var ramt = parseInt($("#trav_transport_receipt_amount").val());
        var ccamt = parseInt($("#trav_transport_cash_claim_amount").val());
        if(inp == transportTotalAmount){
            $("#trav_transport_cash_claim_amount").val("0");
            $("#trav_transport_receipt_amount").val("0");
        } else if(inp < transportTotalAmount){
            var bal = transportTotalAmount - inp;
            $("#trav_transport_cash_claim_amount").val("0");
            $("#trav_transport_receipt_amount").val(bal);
        } else if(inp > transportTotalAmount){
            var bal = inp - transportTotalAmount;
            $("#trav_transport_cash_claim_amount").val(bal);
            $("#trav_transport_receipt_amount").val("0");
        }
    });
    
    //trav_accomodation_actual_spent trav_accomodation_receipt_amount trav_accomodation_cash_claim_amount
    $("#trav_accomodation_actual_spent").on('input', function() {
        // do something
        var inp = parseInt($(this).val());
        var ramt = parseInt($("#trav_accomodation_receipt_amount").val());
        var ccamt = parseInt($("#trav_accomodation_cash_claim_amount").val());
        if(inp == accomodationTotalAmount){
            $("#trav_accomodation_cash_claim_amount").val("0");
            $("#trav_accomodation_receipt_amount").val("0");
        } else if(inp < accomodationTotalAmount){
            var bal = accomodationTotalAmount - inp;
            $("#trav_accomodation_cash_claim_amount").val("0");
            $("#trav_accomodation_receipt_amount").val(bal);
        } else if(inp > accomodationTotalAmount){
            var bal = inp - accomodationTotalAmount;
            $("#trav_accomodation_cash_claim_amount").val(bal);
            $("#trav_accomodation_receipt_amount").val("0");
        }
    });
    
    //trav_per_diem_actual_spent trav_per_diem_receipt_amount trav_per_diem_cash_claim_amount
    $("#trav_per_diem_actual_spent").on('input', function() {
        // do something
        var inp = parseInt($(this).val());
        var ramt = parseInt($("#trav_per_diem_receipt_amount").val());
        var ccamt = parseInt($("#trav_per_diem_cash_claim_amount").val());
        if(inp == perdiemTotalAmount){
            $("#trav_per_diem_cash_claim_amount").val("0");
            $("#trav_per_diem_receipt_amount").val("0");
        } else if(inp < perdiemTotalAmount){
            var bal = perdiemTotalAmount - inp;
            $("#trav_per_diem_cash_claim_amount").val("0");
            $("#trav_per_diem_receipt_amount").val(bal);
        } else if(inp > perdiemTotalAmount){
            var bal = inp - perdiemTotalAmount;
            $("#trav_per_diem_cash_claim_amount").val(bal);
            $("#trav_per_diem_receipt_amount").val("0");
        }
    });
    
    //trav_other_actual_spent trav_other_receipt_amount trav_other_cash_claim_amount
    $("#trav_other_actual_spent").on('input', function() {
        // do something
        var inp = parseInt($(this).val());
        var ramt = parseInt($("#trav_other_receipt_amount").val());
        var ccamt = parseInt($("#trav_other_cash_claim_amount").val());
        if(inp == otherTotalAmount) {
            $("#trav_other_cash_claim_amount").val("0");
            $("#trav_other_receipt_amount").val("0");
        } else if(inp < otherTotalAmount){
            var bal = otherTotalAmount - inp;
            $("#trav_other_cash_claim_amount").val("0");
            $("#trav_other_receipt_amount").val(bal);
        } else if(inp > otherTotalAmount){
            var bal = inp - otherTotalAmount;
            $("#trav_other_cash_claim_amount").val(bal);
            $("#trav_other_receipt_amount").val("0");
        }
    });
    
    //trav_accomodation_type_purpose trav_transport_purpose trav_per_diem_purpose
    $("#trav_posting_description").on('input', function() {
        // do something
        var inp = $(this).val();
        $("#trav_transport_purpose").val(inp);
        $("#trav_accomodation_type_purpose").val(inp);
        $("#trav_per_diem_purpose").val(inp);
        
    });
    
</script>



