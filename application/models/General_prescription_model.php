<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class General_prescription_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get general_prescription by prescription_code
     */
    function get_general_prescription($prescription_code)
    {
        $general_prescription = $this->db->query("
            SELECT
                *

            FROM
                `general_prescriptions`

            WHERE
                `prescription_code` = ?
        ",array($prescription_code))->row_array();

        return $general_prescription;
    }
    
    /*
     * Get all general_prescriptions
     */
    function get_all_general_prescriptions()
    {
        $general_prescriptions = $this->db->query("
            SELECT
                *

            FROM
                `general_prescriptions`

            WHERE
                1 = 1
        ")->result_array();

        return $general_prescriptions;
    }
    
    /*
     * function to add new general_prescription
     */
    function add_general_prescription($params)
    {
        $this->db->insert('general_prescriptions',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update general_prescription
     */
    function update_general_prescription($prescription_code,$params)
    {
        $this->db->where('prescription_code',$prescription_code);
        $response = $this->db->update('general_prescriptions',$params);
        if($response)
        {
            return "general_prescription updated successfully";
        }
        else
        {
            return "Error occuring while updating general_prescription";
        }
    }
    
    /*
     * function to delete general_prescription
     */
    function delete_general_prescription($prescription_code)
    {
        $response = $this->db->delete('general_prescriptions',array('prescription_code'=>$prescription_code));
        if($response)
        {
            return "general_prescription deleted successfully";
        }
        else
        {
            return "Error occuring while deleting general_prescription";
        }
    }
}
