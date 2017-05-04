<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('user_model');
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }

        public function printses()
        {
            $this->load->view('upload_success');
        }
        public function index()
        {
                  $this->load->view('templates/header');
                  $this->load->view('templates/nav');
                  $this->load->view('templates/prettyShtuff');
                  $this->load->view('upload_form', array('error' => ' ' ));
                  $this->load->view('templates/footer');
        }

        public function upload_profile_pic($userID)
        {

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']            = $userID.'ProfilePic.png';
                $config['overwrite']            = TRUE;
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('templates/header');
                  $this->load->view('templates/nav');
                  $this->load->view('templates/prettyShtuff');
                  $this->load->view('upload_form', $error);
                  $this->load->view('templates/footer');
                }
                else{
                    $upload_data = $this->upload->data();
                    $image_config["image_library"] = "gd2";
                    $image_config["source_image"] = $upload_data["full_path"];
                    $image_config['create_thumb'] = FALSE;
                    $image_config['maintain_ratio'] = TRUE;
                    $image_config['new_image'] = $upload_data["file_path"] .$userID. 'ProfilePic.png';
                    $image_config['quality'] = "100%";
                    $image_config['width'] = 300;
                    $image_config['height'] = 300;
                    $dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
                    $image_config['master_dim'] = ($dim > 0)? "height" : "width";

                    $this->load->library('image_lib');
                    $this->image_lib->initialize($image_config);

                    if(!$this->image_lib->resize()){ //Resize image
                        $error = array('error' => $this->image_lib->display_errors());
                        $this->load->view('templates/header');
                        $this->load->view('templates/nav');
                        $this->load->view('templates/prettyShtuff');
                        $this->load->view('upload_form', $error);
                        $this->load->view('templates/footer');
                        }

                    else{
                        $image_config['image_library'] = 'gd2';
                        $image_config['source_image'] = $upload_data["file_path"] .$userID. 'ProfilePic.png';
                        $image_config['new_image'] = $upload_data["file_path"] .$userID. 'ProfilePic.png';
                        $image_config['quality'] = "100%";
                        $image_config['maintain_ratio'] = FALSE;
                        $image_config['width'] = 300;
                        $image_config['height'] = 300;
                        $image_config['x_axis'] = '0';
                        $image_config['y_axis'] = '0';

                        $this->image_lib->clear();
                        $this->image_lib->initialize($image_config);

                        if (!$this->image_lib->crop()){//If error, redirect to an error page
                            $error = array('error' => $this->image_lib->display_errors());
                            $this->load->view('templates/header');
                            $this->load->view('templates/nav');
                            $this->load->view('templates/prettyShtuff');
                            $this->load->view('upload_form', $error);
                            $this->load->view('templates/footer');
                        }
                        else{
                            $this->user_model->set_profile_pic($upload_data["file_name"]);

                            redirect(site_url('user/view'));
                        }
                        }
                }
        }
}
?>
