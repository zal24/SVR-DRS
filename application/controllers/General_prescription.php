<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class General_prescription extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('General_prescription_model');
    } 

    /*
     * Listing of general_prescriptions
     */
    function index()
    {
        $data['general_prescriptions'] = $this->General_prescription_model->get_all_general_prescriptions();

        $data['_view'] = 'general_prescription/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new general_prescription
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('disease_code','Disease Code','required|integer');
		$this->form_validation->set_rules('prescription_name','Prescription Name','required|max_length[30]');
		$this->form_validation->set_rules('prescription_comment','Prescription Comment','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'disease_code' => $this->input->post('disease_code'),
				'prescription_name' => $this->input->post('prescription_name'),
				'prescription_comment' => $this->input->post('prescription_comment'),
            );
            
            $general_prescription_id = $this->General_prescription_model->add_general_prescription($params);
            redirect('general_prescription/index');
        }
        else
        {            
            $data['_view'] = 'general_prescription/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a general_prescription
     */
    function edit($prescription_code)
    {   
        // check if the general_prescription exists before trying to edit it
        $data['general_prescription'] = $this->General_prescription_model->get_general_prescription($prescription_code);
        
        if(isset($data['general_prescription']['prescription_code']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('disease_code','Disease Code','required|integer');
			$this->form_validation->set_rules('prescription_name','Prescription Name','required|max_length[30]');
			$this->form_validation->set_rules('prescription_comment','Prescription Comment','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'disease_code' => $this->input->post('disease_code'),
					'prescription_name' => $this->input->post('prescription_name'),
					'prescription_comment' => $this->input->post('prescription_comment'),
                );

                $this->General_prescription_model->update_general_prescription($prescription_code,$params);            
                redirect('general_prescription/index');
            }
            else
            {
                $data['_view'] = 'general_prescription/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The general_prescription you are trying to edit does not exist.');
    } 

    /*
     * Deleting general_prescription
     */
    function remove($prescription_code)
    {
        $general_prescription = $this->General_prescription_model->get_general_prescription($prescription_code);

        // check if the general_prescription exists before trying to delete it
        if(isset($general_prescription['prescription_code']))
        {
            $this->General_prescription_model->delete_general_prescription($prescription_code);
            redirect('general_prescription/index');
        }
        else
            show_error('The general_prescription you are trying to delete does not exist.');
    }
    
}