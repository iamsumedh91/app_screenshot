<?php
 
    defined('BASEPATH') OR exit('No direct script access allowed');
 
    /**
    * Description of LoginModel
    */
    class ScreenModel extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
   
    function insert_img($data)
    {
        if($this->db->insert('image', $data))
        {
            $result['message'] = "Image inserted in the database";
        }
        else
        {
            $result['message'] = "Image insertion in database failed";
        }
        return $result;
    }    
}
?>