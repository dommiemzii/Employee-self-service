<?php
ini_set('display_errors', 1); 
/**
 * @author  Jared Okongo Momanyi - (jaredokongo21@gmail.com)
 * @version 1.0, 2018-08-29
 * @copyright (c) 2016 Cassava Solutions Limited.
 */
class ComingSoonController extends baseController {

    public function index() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of January";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function hr() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of February";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function procurement() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of December";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function selfservice() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of May";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function approvals() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of December";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function training() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function appraisals() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon 1st of March";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function api() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
    public function support() {

        if(isset($_SESSION['USER_ID'])){ 
            //Log View Alerts
            $ObjLogs = new Logs();
            $input = new CI_Input();


            $ObjLogs->dbh = $this->registry->db;
            $ObjLogs->log_type = "Web Portal";
            $ObjLogs->log_creator_id = $_SESSION['USER_ID'];
    		$ObjLogs->log_creator_name = $_SESSION['USERNAME'];
    		$ObjLogs->log_description = "View Alert Logs";
    		$ObjLogs->log_created = date("Y-m-d H:i:s");
            $ObjLogs->create();
            
            $this->registry->template->t_ = $this->registry->t_;
            $this->registry->template->ntitle = "";
            $this->registry->template->m = $input->get_post('m') ." Module";
            $this->registry->template->eta = "Coming Soon";
            $this->registry->template->show('coming/index');
        } else {
            
            echo "<script type='text/javascript'>window.location.href = 'https://www.burnmfgsystem.com/?q=ex';</script>";
            exit();
        }
    }
    
}