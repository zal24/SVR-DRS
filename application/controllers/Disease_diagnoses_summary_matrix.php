<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Disease_diagnoses_summary_matrix extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Disease_diagnoses_summary_matrix_model');
    } 

    /*
     * Listing of disease_diagnoses_summary_matrix
     */
    function index()
    {
        $data['disease_diagnoses_summary_matrix'] = $this->Disease_diagnoses_summary_matrix_model->get_all_disease_diagnoses_summary_matrix();

        $data['_view'] = 'disease_diagnoses_summary_matrix/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new disease_diagnoses_summary_matrix
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $disease_diagnoses_summary_matrix_id = $this->Disease_diagnoses_summary_matrix_model->add_disease_diagnoses_summary_matrix($params);
            redirect('disease_diagnoses_summary_matrix/index');
        }
        else
        {            
            $data['_view'] = 'disease_diagnoses_summary_matrix/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a disease_diagnoses_summary_matrix
     */
    function edit($diagnosis_reference_number)
    {   
        // check if the disease_diagnoses_summary_matrix exists before trying to edit it
        $data['disease_diagnoses_summary_matrix'] = $this->Disease_diagnoses_summary_matrix_model->get_disease_diagnoses_summary_matrix($diagnosis_reference_number);
        
        if(isset($data['disease_diagnoses_summary_matrix']['diagnosis_reference_number']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Disease_diagnoses_summary_matrix_model->update_disease_diagnoses_summary_matrix($diagnosis_reference_number,$params);            
                redirect('disease_diagnoses_summary_matrix/index');
            }
            else
            {
                $data['_view'] = 'disease_diagnoses_summary_matrix/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The disease_diagnoses_summary_matrix you are trying to edit does not exist.');
    } 

    /*
     * Deleting disease_diagnoses_summary_matrix
     */
    function remove($diagnosis_reference_number)
    {
        $disease_diagnoses_summary_matrix = $this->Disease_diagnoses_summary_matrix_model->get_disease_diagnoses_summary_matrix($diagnosis_reference_number);

        // check if the disease_diagnoses_summary_matrix exists before trying to delete it
        if(isset($disease_diagnoses_summary_matrix['diagnosis_reference_number']))
        {
            $this->Disease_diagnoses_summary_matrix_model->delete_disease_diagnoses_summary_matrix($diagnosis_reference_number);
            redirect('disease_diagnoses_summary_matrix/index');
        }
        else
            show_error('The disease_diagnoses_summary_matrix you are trying to delete does not exist.');
    }
    
}
