<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class PartialsContoller extends CI_Controller 
{
	private $listDep = array(array('1','ตลาด'),array('2','วิศวกรรม'),array('3','ผลิต'),array('4','บัญชี'),array('5','โฟร์แมน'),array('6','ไอที')); 
    public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
	}

	public function userList()
	{
		$data['listUser'] = $this->userModel->listUser();
		$this->load->view('includes/header');
		$this->load->view('backend/partials/user/show',$data);
		$this->load->view('includes/footer');
	}

	public function  addUser()
	{
		$data['listdep'] = $this->listDep;
		$this->load->view('includes/header');
		$this->load->view('backend/partials/user/add',$data);
		$this->load->view('includes/footer');
	}

	private function set_validation_rules() {
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('surname', 'Surname', 'required');
		$this->form_validation->set_rules('musername', 'Musername', 'required');
		$this->form_validation->set_rules('mpassword', 'mpassword', 'required');
    }

	public function storeUser()
	{		
		$this->set_validation_rules();
		  $picture = $this->_do_upload();
		if ($this->form_validation->run() === TRUE ){
              
			$data = array(
				'name' => $this->input->post('name'),
				'surname' => $this->input->post('surname'),
				'musername' => $this->input->post('musername'),
				'mpassword' => $this->input->post('mpassword'),
				'tel' => $this->input->post('tel'),
				'email' => $this->input->post('email'),
				'dep' => $this->input->post('dep'),
				'mlevel' => $this->input->post('mlevel'),
				'picture' => $picture
			);

			$register_user = new UserModel;
		    $register_user->registerUser($data);

			if ($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('status','Update Successfully');
				redirect(base_url('user'));
			}
			else
			{
				$this->session->set_flashdata('status','Something Went Wrong');
				redirect(base_url('user'));
			}
			
		}
		else
		{
			
			$this->addUser();
		}	
	}


	
	private function _do_upload()
    {
      
		$temp = explode(".", $_FILES["picture"]["name"]);
		$image_name = 	round(microtime(true)) . '.' . end($temp);
        $config['upload_path'] 		= 'dist/img/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size'] 		= 2000;
        $config['max_widht'] 		= 2000;
        $config['max_height']  		= 2000;
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('picture')) {
            return 'default.png';
        }
        return $this->upload->data('file_name');
    }

			public function deleteUser($data,$picture)
			{
				$data = array('mid' => $data);
				$checking = $this->userModel->deleteUser($data,$picture);
				if($checking)
				{
					$this->session->set_flashdata('status','Delete Successfully');
				    redirect(base_url('user'));
				}
				else
				{
					$this->session->set_flashdata('status','Something Went Wrong');
					redirect(base_url('user'));
				}
			}

			public function editUser($getdata)
			{
                $result = $this->userModel->findRowUser($getdata);
				if($result)
				{
					$data['mid'] = $result->mid;
					$data['name'] = $result->name;
					$data['surname'] = $result->surname;
					$data['musername'] = $result->musername;
					$data['mpassword'] = $result->mpassword;
					$data['tel'] = $result->tel;
					$data['email'] = $result->email;
					$data['dep'] = $result->dep;
					$data['mlevel'] = $result->mlevel;
					$data['picture'] = $result->picture;
					$data['listdep'] = $this->listDep;

			    	$this->load->view('includes/header');
					$this->load->view('backend/partials/user/edit',$data);
					$this->load->view('includes/footer');
			    }
			}

			public function updateUser()
			{			
			    $this->input->post('picture');
				$this->set_validation_rules();
				$id = $this->input->post('mid');


				 if($_FILES['picture']['tmp_name'])
				 {	 
				   $picture = $this->_do_upload();
				   if($picture)
				   {
					$picture2 = $this->input->post('picture2');
                    if($picture2 !== 'default.png')
					{
						unlink('dist/img/'.$picture2);
					}
					$data = array('picture' => $picture);
					$this->userModel->updateUser($id,$data);	
				   }
				 }
			

			
				if ($this->form_validation->run() === TRUE){
					$data = array(
						'name' => $this->input->post('name'),
						'surname' => $this->input->post('surname'),
						'musername' => $this->input->post('musername'),
						'mpassword' => $this->input->post('mpassword'),
						'tel' => $this->input->post('tel'),
						'email' => $this->input->post('email'),
						'dep' => $this->input->post('dep'),
						'mlevel' => $this->input->post('mlevel')
					);
		         
				  $this->userModel->updateUser($id,$data);

				  if ($this->db->affected_rows() > 0)
					{
						$this->session->set_flashdata('status','Update Successfully');
						redirect(base_url('user'));
					}
					else
					{
						$this->session->set_flashdata('status','Something Went Wrong');
						redirect(base_url('user'));
					}
					
				}
				else
				{	
					$this->editUser($id);
				}	
			}
		

}
