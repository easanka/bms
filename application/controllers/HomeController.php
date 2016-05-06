<?php

class HomeController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $Alarm = new Application_Model_Alarms_Alarm();

        $TblReadings = new Application_Model_DbWrappers_Reading();
        $Queryresults = $TblReadings->fetchAll($TblReadings->select()->from("reading")->limit(10));
        $results = $Queryresults;
        /*$results =null;
        while($row = $Queryresults->fetch()){
        	$results[] = $row;
        }*/
        

        $this->view->readings = $results;
        $this->view->message = $Alarm->GetMessage();
    }


}