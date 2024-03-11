<style>
    
</style>

<div class="row-fluid ess_action_bar zoomIn animated">
    
    <span class="utility-buttons ess_ub">
		<button class="btn is-link ess_act_btn ess_secondary" id="btn-back">
			<i class="ace-icon fa fa-chevron-left icon-on-right "></i>&nbsp;&nbsp;
			Back
		</button>
		<button class="btn is-link ess_act_btn ess_secondary" id="refresh-icon" >
            <i class="ace-icon fa fa-refresh icon-on-right"></i>&nbsp;&nbsp;
            <?= $t_['Refresh']; ?>
        </button>
        <button class="btn is-link ess_act_btn ess_secondary" id="btn-save" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "display:none;" : ""; ?>">
            <i class="ace-icon fa fa-save icon-on-right"></i>&nbsp;&nbsp;
            <?= $t_['Save']; ?>
        </button>
        
        <button class="btn is-link ess_act_btn ess_secondary" id="btn-save-edit" style="<?= (isset($_EDIT) && $_EDIT == 1) ? "" : "display:none;"; ?>">
            <i class="ace-icon fa fa-save icon-on-right"></i>&nbsp;&nbsp;
            <?= $t_['Edit']; ?>
        </button>
    </span>
    
</div>

<div class="row-fluid">
    <div class="col-xs-12 ess_padding_lr ess_list_mt">
        <div class="row">
            <div class="col-xs-9 zoomIn animated dashboard_tab">
                <div id="ess_right_card" class="row ess_card ess_padding_top">
                    <h4 class="ess_title ess_ae_pl"><?= $ntitle; ?></h4>
                    <div class="col-xs-12 ess_no_padding">
                        <!-- PAGE CONTENT BEGINS -->
                        <form id="form-esstravelrequisitionui-line" class="form-horizontal" novalidate="novalidate">
                            <fieldset>
    
                                <input type="hidden" name="trav_id" id="trav_id" value="<?= $_trav_id ?>">
                                <div class="col-md-6 ess_ae">
        
                                    <!--<div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_no_no']; ?></label>
        
                                        <div>
                                
                                
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_no_no']; ?>"
                                                   name="trav_lines_no_no"
                                                   id="trav_lines_no_no" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_no_no'] : ""; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_no']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_no']; ?>"
                                                   name="trav_lines_no"
                                                   id="trav_lines_no" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_no'] : ""; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_date']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_date']; ?>"
                                                   name="trav_lines_date"
                                                   id="trav_lines_date" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_date'] : ""; ?>">
                                        </div>
                                    </div> -->
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_travel_type']; ?></label>
        
                                        <div>
            
                                            <select data-rule-required="true" class="form-control chzn-select"
                                                name="trav_lines_travel_type"
                                                id="trav_lines_travel_type"
                                                aria-required="true" aria-invalid="false">
                    						    <option value=""><?= $t_['trav_lines_travel_type']; ?></option>
                    						    <option value="Transport">Transport</option>
                    						    <option value="Accomodation">Accomodation</option>
                    						    <option value="Per Diem">Per Diem</option>
                    						    <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_travel_options']; ?></label>
        
                                        <div>
                                                   
                                            <select class="form-control chzn-select"
                                                name="trav_lines_travel_options"
                                                id="trav_lines_travel_options">
                    						    <option value=""><?= $t_['trav_lines_travel_options']; ?></option>
                    						    <option value="flight">flight</option>
                    						    <option value="train">train</option>
                    						    <option value="bus">bus</option>
                    						    <option value="private">private</option>
                    						    <option value="self drive">self drive</option>
                    						    <option value="Taxi">Taxi</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="trav_lines_accomodations"
                                               class="control-label"><?= $t_['trav_lines_accomodations']; ?></label>
        
                                        <div> 
                                            
                                            <select class="form-control chzn-select"
                                                name="trav_lines_accomodations"
                                                id="trav_lines_accomodations">
                    						    <option value=""><?= $t_['trav_lines_accomodations']; ?></option>
                    						    <option value="full board">full board</option>
                    						    <option value="half board">half board</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_advance_type']; ?></label>
        
                                        <div>
                                            
                                            <select data-rule-required="true" class="form-control chzn-select"
                                                name="trav_lines_advance_type"
                                                id="trav_lines_advance_type"
                                                aria-required="true" aria-invalid="false">
                    						    <option value=""><?= $t_['trav_lines_advance_type']; ?></option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_account_no']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_account_no']; ?>"
                                                   name="trav_lines_account_no"
                                                   id="trav_lines_account_no" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_account_no'] : ""; ?>" readonly>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_account_name']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_account_name']; ?>"
                                                   name="trav_lines_account_name"
                                                   id="trav_lines_account_name" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_account_name'] : ""; ?>" readonly>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_destination_code']; ?></label>
        
                                        <div>
        
                                            <!--<input type="text" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_destination_code']; ?>"
                                                   name="trav_lines_destination_code"
                                                   id="trav_lines_destination_code"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_destination_code'] : ""; ?>"> -->
                                                   
                                            <select class="form-control chzn-select"
                                                name="trav_lines_destination_code"
                                                id="trav_lines_destination_code" readonly>
                    						    <option value=""><?= $t_['trav_lines_destination_code']; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_no_of_days']; ?></label>
        
                                        <div>
        
                                            <input type="number" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_no_of_days']; ?>"
                                                   name="trav_lines_no_of_days"
                                                   id="trav_lines_no_of_days" 
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_no_of_days'] : "0"; ?>" onchange="calculateAmount()">
                                        </div>
                                    </div>
        
                                    
                                </div>
                                
                                <div class="col-md-6 ess_ae">
                                    
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_daily_rates_amount']; ?></label>
        
                                        <div>
        
                                            <input type="number" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_daily_rates_amount']; ?>"
                                                   name="trav_lines_daily_rates_amount"
                                                   id="trav_lines_daily_rates_amount"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_daily_rates_amount'] : "0"; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_amount']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_amount']; ?>"
                                                   name="trav_lines_amount"
                                                   id="trav_lines_amount" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_amount'] : "0"; ?>">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_advance_holder']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_advance_holder']; ?>"
                                                   name="trav_lines_advance_holder"
                                                   id="trav_lines_advance_holder" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_advance_holder'] : ""; ?>">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_bank']; ?></label>
        
                                        <div>
        
                                            <!--<input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_bank']; ?>"
                                                   name="trav_lines_bank"
                                                   id="trav_lines_bank" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_bank'] : "0"; ?>"> -->
                                                   
                                                   
                                                   <!-- 
                                                   
                                                   {"No.":"BNK0121","Name":"Dahabshil USD","City":"Nairobi"},{"No.":"BNK0141","Name":"I &amp; M Bank","City":"Nairobi"},{"No.":"BNK0161","Name":"Chase BBK USD Disburesment","City":"USA"},{"No.":"BNK0162","Name":"Chase BBK LLC Credit Card - Not in use","City":""},{"No.":"BNK0163","Name":"Chase BBK LLC Credit Card","City":""},{"No.":"BNK0164","Name":"Stripe Bank","City":""},{"No.":"BNK0165","Name":"ABSA Bank USD","City":""},{"No.":"BNK0166","Name":"ABSA Bank KES","City":""},{"No.":"BNK0167","Name":"ABSA Bank EUR","City":""},{"No.":"BNK0168","Name":"ABSA Bank GBP","City":""},{"No.":"BNK0169","Name":"Standard Chartered KES-Payroll","City":""},{"No.":"BNK0170","Name":"Standard Chartered USD – Travel","City":""},{"No.":"CSH0001","Name":"Kopo Kopo","City":"Nairobi"},{"No.":"CSH0002","Name":"Undeposited Cash","City":"Nairobi"},{"No.":"CSH0003","Name":"Petty Cash KES","City":"Nairobi"},{"No.":"CSH0004","Name":"Petty Cash USD","City":""},{"No.":"CSH0005","Name":"Mpesa Phone","City":""},{"No.":"CSH0006","Name":"Paybill Number 313348","City":""},{"No.":"CSH0007","Name":"Paybill Number  4083481","City":""}]}
                                                   -->
                                                   
                                            <select class="form-control chzn-select"
                                                name="trav_lines_bank"
                                                id="trav_lines_bank">
                    						    <option value=""><?= $t_['trav_lines_bank']; ?></option>
                    						    <option value="BNK0001">NCBA KES</option>
                    						    <option value="BNK0002">NCBA USD</option>
                    						    <option value="BNK0003">NCBA EUR</option>
                    						    <option value="BNK0004">NCBA Escrow Account</option>
                    						    <option value="BNK0005">Zenith Bank PLC</option>
                    						    <option value="BNK0021">Standard Chartered Bank KES</option>
                    						    <option value="BNK0022">Standard Chartered Bank USD</option>
                    						    <option value="BNK0041">Equity Bank KES</option>
                    						    <option value="BNK0042">Equity Bank USD</option>
                    						    <option value="BNK0061">Kenya Women Finance Trust</option>
                    						    <option value="BNK0081">Faulu Micro Finance</option>
                    						    <option value="BNK0101">Rafiki Micro Finance</option>
                    						    <option value="BNK0121">Dahabshil USD</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_purpose']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_purpose']; ?>"
                                                   name="trav_lines_purpose"
                                                   id="trav_lines_purpose" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_purpose'] : $_desc; ?>">
                                        </div>
                                    </div>
        
                                    <!--<div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_due_date']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_due_date']; ?>"
                                                   name="trav_lines_due_date"
                                                   id="trav_lines_due_date" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_due_date'] : ""; ?>">
                                        </div>
                                    </div> -->
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_department']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_department']; ?>"
                                                   name="trav_lines_department"
                                                   id="trav_lines_department" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_department'] : $_SESSION['ESS_DEPT_CODE']; ?>">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="selectbasic"
                                               class="control-label"><?= $t_['trav_lines_country']; ?></label>
        
                                        <div>
        
                                            <input type="text" data-rule-required="true" class="form-control "
                                                   placeholder="<?= $t_['trav_lines_country']; ?>"
                                                   name="trav_lines_country"
                                                   id="trav_lines_country" aria-required="true"
                                                   value="<?= isset($_DATA) ? $_DATA['trav_lines_country'] : $_SESSION['ESS_COUNTRY']; ?>">
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 zoomIn animated dashboard_tab">
                
                <div id="ess_general_info" class="row ess_card">
                    <h4 class="ess_title">General Information Policy Document</h4>
                    
                </div>
                
            </div>
        </div>
    </div>
</div><!--/span-->

<!-- /.row -->
<script type="text/javascript">
    //
    var trav_id = "<?= $_trav_id ?>";
    var trav_lines_id = "<?= isset($_DATA) ? $_DATA['trav_lines_id'] : "0"; ?>";
    var advanceTypesArr = [];
    var advanceTypesArrOne = [];
    var destinationCodesArr = [];
    var destinationCodesArrOne = [];
    //
    $(".footer").hide();
    //in navigation
    utilNavigation("ESSTravelRequisitionUI/addEditView");
    //variables to be used
    var formObject = $('#form-esstravelrequisitionui-line');
    //
    function filter(array, value, key) {
        return array.filter(key
            ? a => a[key] === value
            : a => Object.keys(a).some(k => a[k] === value)
        );
    }
    //
    function updateUiAfterAjax($data) {
        showGritter($data.title, $data.message, $data.type);
        if($data.type == "success"){
            ajaxRequest("ESSTravelRequisitionUI/addEditView?edit=true&id=" + trav_id, loadPage);
        }
    }
    // 
    function processingWaitShow() {
        bootbox.dialog({ 
            message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Please wait...</div>', 
            closeButton: false,
            centerVertical: true
        });
    }
    //
    function processingWaitHide() {
        bootbox.hideAll();
    }
    //
    /*
    //
    function afterLoadList() {
        $("#trav_lines_destination_code").val("<?= isset($_DATA) ? $_DATA['trav_lines_destination_code'] : ""; ?>").trigger("chosen:updated");
    }
    //`dest_id`, `dest_date_created`, `dest_date_updated`, `dest_date_created_by`, `dest_date_updated_by`, `dest_status`, `dest_currency`, `dest_destination_code`,
    //`dest_advance_code`, `dest_destination_type`, `dest_daily_rate_amount`, `dest_employee_job_group`, `dest_destination_name`, `dest_publish`
    loadlist($('#trav_lines_destination_code').get(),
        'ESSTravelRequisitionUI/readMyDestinationCodes',//'Country/burnCompanies'
        'dest_destination_code',
        'dest_destination_code',
        afterLoadList
    ); */
    //
    function loadDestinationCodes() {
        var selobj = "#trav_lines_destination_code";
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
                    $(selobj).append(
                        $('<option></option>')
                            .val(obj.dest_destination_code)
                            .html(obj.dest_destination_name));
                });
                try {
                    $(".chzn-select").chosen();
                    $(selobj).val("<?= isset($_DATA) ? $_DATA['trav_lines_destination_code'] : ""; ?>").change().trigger("chosen:updated");
                   
                    
                } catch (err) {
                    console.log(err);
                }
                
            }
        });
    }
    //
    function loadAdvanceTypes() {
        var selobj = "#trav_lines_advance_type";
        $.ajax({
            cache: false,
            url: 'ESSReceiptspaymenttype/readTr',
            type: 'GET',
            dataType: 'json',
            traditional: true, 
            beforeSend: function (jqXHR) {
                $(selobj).html("");
                advanceTypesArr.length = 0;
                advanceTypesArrOne.length = 0;
            },
            success: function (data) {
                
                console.log("************* ADVANCE TYPES");
                console.log(data);
                
                $(selobj).append(
                    $('<option></option>')
                        .val('')
                        .html("<?= $t_['trav_lines_advance_type']; ?>"));
        //`rpt_id`, `rpt_date_created`, `rpt_date_updated`, `rpt_created_by`, `rpt_updated_by`, `rpt_status`, `rpt_code`, `rpt_description`, `rpt_account_type`, `rpt_type`, `rpt_vat_chargeable`, 
        //`rpt_vat_code`, `rpt_withholding_tax_Code`, `rpt_default_grouping`, `rpt_g_l_account`, `rpt_pending_voucher`, `rpt_bank_account`, `rpt_payment_reference`, `rpt_transation_remarks`, 
        //`rpt_customer_payment_on_account`, `rpt_direct_expense`, `rpt_calculate_retention`, `rpt_blocked`, `rpt_based_on_travel_rates_table`, `rpt_vat_withheld_code`, `rpt_levy_receipt`, `rpt_publish`
                $.each(data, function (i, obj) {
                    //{co_connect: 1, co_res: '2'}
                    var at = {
                        rpt_id: obj.rpt_id,
                        rpt_code: obj.rpt_code,
                        rpt_description: obj.rpt_description,
                        rpt_account_type: obj.rpt_account_type,
                        rpt_type: obj.rpt_type,
                        rpt_g_l_account: obj.rpt_g_l_account
                    };
                    advanceTypesArr.push(at);
                    $(selobj).append(
                        $('<option></option>')
                            .val(obj.rpt_code)
                            .html(obj.rpt_code));
                });
                try {
                    $(".chzn-select").chosen();
                    $(selobj).val("<?= isset($_DATA) ? $_DATA['trav_lines_advance_type'] : ""; ?>").change().trigger("chosen:updated");
                   
                    
                } catch (err) {
                    console.log(err);
                }
                
                loadDestinationCodes();
                
            }
        });
    }
    //
    function calculateAmount() {
        var selv = $('#trav_lines_destination_code').val();
        console.log(selv);
        if(selv != ""){
            destinationCodesArrOne = filter(destinationCodesArr, selv, 'dest_destination_code');
            console.log(destinationCodesArrOne);
            if(destinationCodesArrOne.length > 0){
                //
                var sobj = destinationCodesArrOne[0];
                var dra = sobj.dest_daily_rate_amount;
                $('#trav_lines_daily_rates_amount').val(dra.replace(/,/g,""));
                var numdays = $("#trav_lines_no_of_days").val();
                var drate = parseInt(dra.replace(/,/g,""));
                var ans = parseInt(numdays) * drate;
                $('#trav_lines_amount').val(ans);
                
            }
        }
    }
    //
    $(document).ready(function () {
        //
        $('.chzn-select').chosen();
        //
        $('.date-picker').datepicker({
            format: 'yyyy-mm-dd'
        }).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        //
        var newheight = $("#ess_right_card").height() + 15;
        console.log(newheight);
        console.log(" newheight ------ " + newheight);
        $("#ess_general_info").height(newheight);
        //
        loadAdvanceTypes();
        //trav_lines_travel_type trav_lines_travel_options trav_lines_accomodations
        $("#trav_lines_accomodations").val("<?= isset($_DATA) ? $_DATA['trav_lines_accomodations'] : ""; ?>").trigger("chosen:updated");
        $('#trav_lines_accomodations').prop('disabled', true).trigger("chosen:updated");
        $("#trav_lines_travel_type").val("<?= isset($_DATA) ? $_DATA['trav_lines_travel_type'] : ""; ?>").trigger("chosen:updated");
        $("#trav_lines_travel_options").val("<?= isset($_DATA) ? $_DATA['trav_lines_travel_options'] : ""; ?>").trigger("chosen:updated");
        $("#trav_lines_bank").val("<?= isset($_DATA) ? $_DATA['trav_lines_bank'] : ""; ?>").trigger("chosen:updated");
        
        // 
        $('#trav_lines_travel_type').change(function(){
            
            var selv = $(this).val();
            console.log(selv);
            
            //$('input[type=text]').val("");
            //$('select').val("").trigger("chosen:updated");
            
            //$(this).val(selv).trigger("chosen:updated");
            $('#trav_lines_amount').prop('disabled', false);
            if(selv == "Accomodation"){

                //
                $('#trav_lines_travel_options').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_accomodations').prop('disabled', false).trigger("chosen:updated");
                
                $('#trav_lines_destination_code').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_no_of_days').prop('disabled', true);
                $('#trav_lines_daily_rates_amount').prop('disabled', true);
            } else if(selv == "Transport"){

                //trav_lines_destination_code trav_lines_no_of_days trav_lines_daily_rates_amount
                $('#trav_lines_travel_options').prop('disabled', false).trigger("chosen:updated");
                $('#trav_lines_accomodations').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_destination_code').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_no_of_days').prop('disabled', true);
                $('#trav_lines_daily_rates_amount').prop('disabled', true);
            } else if(selv == "Per Diem"){

                //trav_lines_destination_code trav_lines_no_of_days trav_lines_daily_rates_amount
                $('#trav_lines_travel_options').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_accomodations').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_destination_code').prop('disabled', false).trigger("chosen:updated");
                $('#trav_lines_no_of_days').prop('disabled', false);
                $('#trav_lines_daily_rates_amount').prop('disabled', true);
                $('#trav_lines_amount').prop('disabled', true);
            } else if(selv == "Others"){

                //trav_lines_destination_code trav_lines_no_of_days trav_lines_daily_rates_amount
                $('#trav_lines_travel_options').prop('disabled', false).trigger("chosen:updated");
                $('#trav_lines_accomodations').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_destination_code').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_no_of_days').prop('disabled', true);
                $('#trav_lines_daily_rates_amount').prop('disabled', true);
            } else {
                $('#trav_lines_travel_options').prop('disabled', false).trigger("chosen:updated");
                $('#trav_lines_accomodations').prop('disabled', true).trigger("chosen:updated");
                $('#trav_lines_destination_code').prop('disabled', false).trigger("chosen:updated");
                $('#trav_lines_no_of_days').prop('disabled', false);
                $('#trav_lines_daily_rates_amount').prop('disabled', false);
            }
            
            $('#trav_lines_daily_rates_amount').prop('disabled', true);
        });
        
        $('#trav_lines_destination_code').change(function(){
            var selv = $(this).val();
            console.log(selv);
            if(selv != ""){
                destinationCodesArrOne = filter(destinationCodesArr, selv, 'dest_destination_code');
                console.log(destinationCodesArrOne);
                if(destinationCodesArrOne.length > 0){
                    //
                    var sobj = destinationCodesArrOne[0];
                    var dra = sobj.dest_daily_rate_amount;
                    $('#trav_lines_daily_rates_amount').val(dra.replace(/,/g,""));
                    var numdays = $("#trav_lines_no_of_days").val();
                    var drate = parseInt(dra.replace(/,/g,""));
                    var ans = parseInt(numdays) * drate;
                    $('#trav_lines_amount').val(ans);
                    
                }
            }
        });
        //
        $('#trav_lines_advance_type').change(function(){
            var selv = $(this).val();
            console.log(selv);
            console.log(advanceTypesArr);
            
            if(selv != ""){

                advanceTypesArrOne = filter(advanceTypesArr, selv, 'rpt_code');
                console.log(advanceTypesArrOne);
                if(advanceTypesArrOne.length > 0){
                    //
                    var sobj = advanceTypesArrOne[0];
                    $('#trav_lines_account_no').val(sobj.rpt_g_l_account);
                    $('#trav_lines_account_name').val(sobj.rpt_description);
                }
            }
        });
        //
        $("#btn-back").click(function () {
            ajaxRequest("ESSTravelRequisitionUI/addEditView?edit=true&id=" + trav_id, loadPage);
        });
        $("#btn-save").click(function () {
            if (!$('#form-esstravelrequisitionui-line').valid()) {
                return false;
            } else {
                $data = $('#form-esstravelrequisitionui-line').serialize() + "&trav_id="+trav_id;
                ajaxRequest("ESSTravelRequisitionUI/createLines", updateUiAfterAjax, $data, "POST", "json");
            }
        });
        $("#btn-save-edit").click(function () {
            if (!$('#form-esstravelrequisitionui-line').valid()) {
                return false;
            } else {
                $data = $('#form-esstravelrequisitionui-line').serialize() + "&trav_id="+trav_id + "&trav_lines_id="+trav_lines_id;
                ajaxRequest("ESSTravelRequisitionUI/updateLines", updateUiAfterAjax, $data, "POST", "json");
            }
        });

        //
        $('#form-esstravelrequisitionui-line').validate({
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