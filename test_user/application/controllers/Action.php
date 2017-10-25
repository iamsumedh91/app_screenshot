<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Including the required libraries here
*/ 
require(APPPATH . '/libraries/REST_Controller.php');
 
/**
 * Description of RestController
 */
class Action extends REST_Controller {

    /*
    * Loading the model in Constructor
    */
    function __construct() {
        parent::__construct();
        $this->load->model('ScreenModel', 'sm');
    }
   
    /*
    * Function to Signup user data
    */
    function data_values_post()
    {
        $data = $this->post();
        /*

        echo '<img src="'.$data['img_val'].'" />';
 
        //Get the base-64 string from data
        $filteredData=substr($data['img_val'], strpos($data['img_val'], ",")+1);
 
        //Decode the string
        $unencodedData=base64_decode($filteredData);

        //$result = $this->sm->insert_img($unencodedData);
        */
        $this->response($data['img_val']);
    }

}

?>