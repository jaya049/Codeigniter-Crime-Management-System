<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('sample');
    }
    public function fmain()
    {
        $this->load->view('registeration_form');
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("addrs","useraddress",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","userage",'required');
		$this->form_validation->set_rules("email","usermail",'required');
		$this->form_validation->set_rules("pwd","password",'required');
		if($this->form_validation->run())
		{
			$pass=$this->input->post("pwd");
			$encpass=$this->Mainmodel->encpass($pass);

			$a=array("user_name"=>$this->input->post("name"),
					 "address"=>$this->input->post("addrs"),
					 "gender"=>$this->input->post("gender"),
					 "age"=>$this->input->post("age"),
					 "email"=>$this->input->post("email"),
					 "password"=>$encpass);
					 $this->Mainmodel->register($a);
					 redirect(base_url().'First/view_table_status');
		}


	}
	public function view_table()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view1();
		$this->load->view('view_details',$data);
	}
	public function update_det()
	{
		$b=array("user_name"=>$this->input->post("uname"),
				 "address"=>$this->input->post("address"),
				 "gender"=>$this->input->post("gender"),
				 "age"=>$this->input->post("age"),
				 "email"=>$this->input->post("email"));
		$id=$this->uri->segment(3);
		$this->load->model('Mainmodel');
		$data['user_data']=$this->Mainmodel->singledetails($id);
		$this->Mainmodel->singledata();
		$this->load->view('view_details',$data);
			if($this->input->post("update"))
			{
				$this->Mainmodel->updatedetails($b,$this->input->post("id"));
				redirect('First/view_table','refresh');
			}
		        
	}
	public function deletedetails()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->deletedetails($id);
		redirect('First/view_table','refresh');
	}
	public function view_table_status()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view1();
		$this->load->view('view_status_det',$data);
	}
	public function approve_det()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->approvedetails($id);
		redirect('First/view_table_status','refresh');
	}
	public function reject_det()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->rejectdetails($id);
		redirect('First/view_table_status','refresh');
	}
	public function loginPage()
	{
		$this->load->view('login_page');	
	}
	public function login_check()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("loginemail","emailid",'required');
		$this->form_validation->set_rules("loginpwd","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$email=$this->input->post('loginemail');
			$pass=$this->input->post('loginpwd');
			$rslt=$this->Mainmodel->selectpass($email,$pass);
			if($rslt)
			{
				$id=$this->Mainmodel->getuserid($email);
				$user=$this->Mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('user_id'=>(int)$user->user_id,'status'=>$user->status));
													
				if($_SESSION['status']=='1')
				{
					redirect('First/view_table','refresh');
				}
				else
				{
					echo "Waiting for approval";
				}
			}
			else
			{
				echo "Invalid user";
			}

		}
		else
		{
			redirect(base_url().'First/loginPage');
		}

	}
}
