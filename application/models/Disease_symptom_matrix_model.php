<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Disease_symptom_matrix_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get disease_symptom_matrix by disease_code
     */
    function get_disease_symptom_matrix($disease_code)
    {
        $disease_symptom_matrix = $this->db->query("
            SELECT
                *

            FROM
                `disease_symptom_matrix`

            WHERE
                `disease_code` = ?
        ",array($disease_code))->row_array();

        return $disease_symptom_matrix;
    }
    
    /*
     * Get all disease_symptom_matrix
     */
    function get_all_disease_symptom_matrix()
    {
        $disease_symptom_matrix = $this->db->query("
            SELECT
                *

            FROM
                `disease_symptom_matrix`

            WHERE
                1 = 1
        ")->result_array();

        return $disease_symptom_matrix;
    }
    
    /*
     * function to add new disease_symptom_matrix
     */
    function add_disease_symptom_matrix($params)
    {
        $this->db->insert('disease_symptom_matrix',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update disease_symptom_matrix
     */
    function update_disease_symptom_matrix($disease_code,$params)
    {
        $this->db->where('disease_code',$disease_code);
        $response = $this->db->update('disease_symptom_matrix',$params);
        if($response)
        {
            return "disease_symptom_matrix updated successfully";
        }
        else
        {
            return "Error occuring while updating disease_symptom_matrix";
        }
    }
    
    /*
     * function to delete disease_symptom_matrix
     */
    function delete_disease_symptom_matrix($disease_code)
    {
        $response = $this->db->delete('disease_symptom_matrix',array('disease_code'=>$disease_code));
        if($response)
        {
            return "disease_symptom_matrix deleted successfully";
        }
        else
        {
            return "Error occuring while deleting disease_symptom_matrix";
        }
    }
}
