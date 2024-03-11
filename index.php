
<style>
    
</style>

<?php include 'views/widgets/utility_menu_buttons_ess.php' ?>

<div class="row-fluid">
    <div class="col-xs-12 ess_padding_lr ess_list_mt">
        <div class="row">
            <div class="col-xs-9 zoomIn animated dashboard_tab">
                <div class="row ess_card ess_padding_top">
                    <h4 class="ess_title ess_title_dtb"><?= 'Travel Requisition List'; ?></h4>
                    <div class="col-xs-12 ess_no_padding">
                        <!-- PAGE CONTENT BEGINS -->
                        <table id="ess_travel_requisition" class="display ess_table" cellspacing="0" width="100%">
                            <thead>

                            <!--INSERT INTO `ess_travel_requisition`(`trav_id`, `trav_date_created`, 
                            `trav_dated_updated`, `trav_created_by`, `trav_updated_by`, `trav_status`, 
                            `trav_document_no`, `trav_date`, `trav_account_no`, `trav_payee`,
                             `trav_designation`, `trav_department`, `trav_country`, `trav_company`, 
                             `trav_project_code`, `trav_directors_code`, `trav_posting_description`,
                              `trav_date_of_departure`, `trav_date_of_return`, `trav_currency_code`,
                               `trav_publish`)-->
                                <tr>
                                   <!-- <th><?= $t_['trav_date_created']; ?></th>-->
                                    <th><?= $t_['trav_document_no']; ?></th>
                                    <th><?= $t_['trav_date']; ?></th>
                                    <th><?= $t_['trav_account_no']; ?></th>
                                    <th><?= $t_['trav_payee']; ?></th>
                                    <th><?= $t_['trav_designation']; ?></th>
                                    <th><?= $t_['trav_department']; ?></th>
                                    <th><?= $t_['trav_country']; ?></th>
                                    <th><?= $t_['trav_company']; ?></th>
                                    <th><?= $t_['trav_project_code']; ?></th>
                                    <th><?= $t_['trav_directors_code']; ?></th>
                                    <!--<th><?= $t_['trav_posting_description']; ?></th>
                                    <th><?= $t_['trav_date_of_departure']; ?></th>
                                    <th><?= $t_['trav_date_of_return']; ?></th>
                                    <th><?= $t_['trav_currency_code']; ?></th> -->
                                    <th>Status</th>
                                    <th>Accounting</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="col-xs-3 zoomIn animated dashboard_tab">
                
                <div id="ess_notes" class="row ess_card">
                    <h4 class="ess_title">Notes</h4>
                    
                </div>
                
                <div id="ess_alerts" class="row ess_card ess_card_mt">
                    <h4 class="ess_title">My Notifications</h4>
                    
                </div>
                
            </div>
        </div>
    </div>
</div><!--/span-->

<script>
    $(".footer").hide();
    $(".utility-buttons,#add-icon,#refresh-icon").removeClass('hidden');
    //utilNavigation("ESSTravelRequisitionUI","ADD_ESSTravelRequisitionUI");
    utilNavigation("ESSTravelRequisitionUI","VIEW_DASHBOARD");
    //in navigation
    
    $(document).ready(function () {
        //
        publishElements("secured");
        //
        var vheight = window.screen.height;
        var newheight = vheight - 500;
        var subnewheight = Math.ceil(newheight/2) + 46;
        var numrows = Math.floor(newheight/36);
        console.log(newheight);
        console.log(" newheight ------ " + newheight);
        console.log(" numrows ------ " + numrows);
        console.log(" subnewheight ------ " + subnewheight);
        $("#ess_notes").height(subnewheight);
        $("#ess_alerts").height(subnewheight);
        //bSearchable
        var trq = $('#ess_travel_requisition').DataTable({
            "processing": true,
            "serverSide": true,
            //"ajax": "TableLoader?model_name=ESSTravelRequisitionUI",
            "ajax": {
                "url": "TableLoader?model_name=ESSTravelRequisitionUI",
                "data": function (d) {
                    d.trav_accounting_status = 0;
                }
            },
            "order": [[0, 'desc']],
            "bInfo": false,
            "bLengthChange": false,
            "language": {
                "search": '',
                "searchPlaceholder": "Type to Filter",
            },
            "sScrollY": newheight+"px",
            "pageLength" : numrows,
            "lengthMenu" : [[50, 100, 200, -1], [50, 100, 200, 'Todos']],
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [2,3,4,5,6,7,8,9,10,11,12]}, 
                {"sClass": "center", "aTargets": [10,11,12]},
                {
                    "mRender": function (oObj) {
                        if(oObj == "Pending"){
                            var scount = '<span class="badge badge-warning">Pending</span>';
                        } else if(oObj == "Declined"){
                            var scount = '<span class="badge badge-error">Declined</span>';
                        } else if(oObj == "Approved"){
                            var scount = '<span class="badge badge-success">Approved</span>';
                        } else {
                            var scount = '<span class="badge">Open</span>';
                        }
                        return scount; 
                    },
                    "aTargets": [10]
                },
                {
                    "mRender": function (oObj) {
                        if(oObj == "1"){
                            var scount = '<span class="badge badge-success">Processing</span>';
                        } else {
                            var scount = '<span class="badge">Pending</span>';
                        }
                        return scount; 
                    },
                    "aTargets": [11]
                },
                {
                    "mRender": function (oObj) {
                        var view = "<i class='fa fa-info fa-lg view-btn blue is-link secured' data-id='" + oObj.trav_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['View'];?>'></i>&nbsp;&nbsp;&nbsp;";
                        var edit = "<i class='fa fa-edit fa-lg edit-btn green is-link secured' data-id='" + oObj.trav_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['Edit'];?>'></i>&nbsp;&nbsp;&nbsp;";
                        var del = "<i class='fa fa-trash fa-lg delete-btn red is-link secured' data-id='" + oObj.trav_id + "' data-security='VIEW_DASHBOARD' title='<?= $t_['Delete'];?>'></i>";
                        return view; 
                    },
                    "aTargets": [12]
                }
            ],
            "fnDrawCallback": function (oSettings) {
                publishElements('secured');
            }


        });
        //
        function updateUiAfterAjax($data) {
            trq.api().ajax.reload();
            showGritter($data.title, $data.message, $data.type);
        }

        /*trq.on('click', 'i.view-btn', function (e) {
            $id = $(this).data('id');
            //alert($id);
            ajaxRequest("ESSTravelRequisitionUI/detail?id=" + $id, loadPage);
        }); */

        //
        trq.on('click', 'i.view-btn', function (e) {
            $id = $(this).data('id');
            ajaxRequest("ESSTravelRequisitionUI/addEditView?edit=true&stage=0&id=" + $id, loadPage);
        });
        //
        trq.on('click', 'i.delete-btn', function (e) {
            $id = $(this).data('id');
            bootbox.confirm("Are you sure?", function (result) { 
                if (result == true) {
                    alert($id);
                    ajaxRequest("ESSTravelRequisitionUI/delete", updateUiAfterAjax, "id=" + $id, "POST", "JSON");
                }
            });
        });
        //
    
			
    });
</script>