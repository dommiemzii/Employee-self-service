<?php

//ini_set('display_errors', 0);
//ini_set('display_errors', false);

/**
 * @author  Jared Okongo Momanyi - (jaredokongo21@gmail.com)
 * @version 1.0, 2023-12-03
 * @copyright (c) 2016 Qasava GPS Limited.
 */
class ESSOverviewController extends baseController {
    // https://sandbox.burnmfgsystems.com/Customer/etest
    public function index() {
        
        //UserRoles::getPass("VIEW_CUSTOMERS");
        
        //Log View
        $ObjLogs = new Logs();
        $ObjLogs->dbh = $this->registry->db;
        $ObjLogs->log_type = "Web Portal";
		$ObjLogs->log_description = "View Overview";
		$ObjLogs->log_creator_id = $_SESSION['USER_ID'];
		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
		$ObjLogs->log_created = date("Y-m-d H:i:s");
        $ObjLogs->create();
        
        $this->registry->template->t_ = $this->registry->t_;
        $this->registry->template->ntitle = "";
        $this->registry->template->show('overview/index');
    }
    
    
}