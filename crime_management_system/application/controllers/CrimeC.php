<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrimeC extends CI_Controller
 {
     public function index()
     {
         $this->load->view('welcome_message');
     }
     public function viewP()
     {
         $this->load->view('people_reg');
     }
     public function insert_public()
     {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("gender","gen",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("mob","phone",'required');
		$this->form_validation->set_rules("district","dist",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $pass=$this->input->post("password");
            $encpass=$this->CrimeModel->enc_pass($pass);
            $a=array("name"=>$this->input->post("name"),
                      "gender"=>$this->input->post("gender"),
                      "age"=>$this->input->post("age"),
                      "address"=>$this->input->post("address"),
                      "pincode"=>$this->input->post("pincode"),
                      "mob"=>$this->input->post("mob"),
                      "district"=>$this->input->post("district"));
            $b=array("email"=>$this->input->post("email"),
                     "user_type"=>'1',
                     "mob"=>$this->input->post("mob"),
                     "password"=>$encpass);
            $this->CrimeModel->insert_public($a,$b);
            redirect("CrimeC/viewlogin",'refresh');
        }
     }
     public function viewP_admin()
     {
        $this->load->model('CrimeModel');
        $data['n']=$this->CrimeModel->select_data();
        $this->load->view('view_public',$data);
     }
     public function viewPolice()
     {
         $this->load->view('police_station_reg');
     }
     public function insert_police()
     {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("station_id","station id",'required');
		$this->form_validation->set_rules("station_name","name",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("mob","phone",'required');
		$this->form_validation->set_rules("district","dist",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $pass=$this->input->post("password");
            $encpass=$this->CrimeModel->enc_pass($pass);
            $a=array("station_id"=>$this->input->post("station_id"),
                      "station_name"=>$this->input->post("station_name"),
                      "pincode"=>$this->input->post("pincode"),
                      "phone_num"=>$this->input->post("mob"),
                      "district"=>$this->input->post("district"));
            $b=array("email"=>$this->input->post("email"),
                     "user_type"=>'2',
                     "password"=>$encpass);
            $this->CrimeModel->insert_police($a,$b);
            redirect("CrimeC/viewlogin",'refresh');
        }
     }
      public function viewPolice_admin()
     {
        $this->load->model('CrimeModel');
        $data['n']=$this->CrimeModel->select_dataP();
        $this->load->view('view_police',$data);
     }
     public function viewCourt()
     {
        $this->load->view('court_reg');
     }
     public function insert_court()
     {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("court_id","court id",'required');
        $this->form_validation->set_rules("court_name","name",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
        $this->form_validation->set_rules("mob","phone",'required');
        $this->form_validation->set_rules("district","dist",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $pass=$this->input->post("password");
            $encpass=$this->CrimeModel->enc_pass($pass);
            $a=array("court_id"=>$this->input->post("court_id"),
                      "court_name"=>$this->input->post("court_name"),
                      "pincode"=>$this->input->post("pincode"),
                      "phone_num"=>$this->input->post("mob"),
                      "district"=>$this->input->post("district"));
            $b=array("email"=>$this->input->post("email"),
                     "user_type"=>'3',
                     "password"=>$encpass);
            $this->CrimeModel->insert_court($a,$b);
            redirect("CrimeC/viewlogin ",'refresh');
        }
     }
     public function viewCourt_admin()
     {
        $this->load->model('CrimeModel');
        $data['n']=$this->CrimeModel->select_dataC();
        $this->load->view('viewCourt',$data);
     }

     public function viewlogin()
     {
        $this->load->view('loginform');
     }
     public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email_mob","usermail",'required');
        $this->form_validation->set_rules("password","userpassword",'required');
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $email= $this->input->post("email_mob");
            $pass=$this->input->post("password");
            $result=$this->CrimeModel->login_check($email,$pass);
            if($result)
            {
                $id=$this->CrimeModel->getuserID($email);
                $user=$this->CrimeModel->getUser($id);
                $this->load->library(array('session'));
                $this->session->set_userdata(array('id'=>(int)$user->login_id,'status'=>$user->status,'user_type'=>$user->user_type,'mob'=>$user->mob));
                if($_SESSION['status']=='1' && $_SESSION['user_type']=='0')
                {
                    redirect("CrimeC/admin_home",'refresh');
                }
                else if($_SESSION['status']=='1' && $_SESSION['user_type']=='1')
                {
                    redirect("CrimeC/public_home",'refresh');
                }
                else if($_SESSION['status']=='1' && $_SESSION['user_type']=='2')
                {
                    redirect("CrimeC/police_home",'refresh');
                }
                else if($_SESSION['status']=='1' && $_SESSION['user_type']=='3')
                {
                    redirect("CrimeC/court_home",'refresh');
                }
                else
                    echo "waiting approval";

            }
            else
                echo "Invalid user";

        }
        else
            redirect("CrimeC/viewlogin",'refresh');
           

    }
    public function approve_public()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->approve_public($id);
        redirect("CrimeC/viewP_admin",'refresh');
    }
    public function reject_public()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->reject_public($id);
        redirect("CrimeC/viewP_admin",'refresh');
    }
    public function approve_police()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->approve_police($id);
        redirect("CrimeC/viewPolice_admin",'refresh');   
    }
    public function reject_police()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->reject_police($id);
        redirect("CrimeC/viewPolice_admin",'refresh');   
    }
     public function approve_court()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->approve_court($id);
        redirect("CrimeC/viewCourt_admin",'refresh');   
    }
    public function reject_court()
    {
        $this->load->model('CrimeModel');
        $id=$this->uri->segment(3);
        $this->CrimeModel->reject_court($id);
        redirect("CrimeC/viewCourt_admin",'refresh');   
    }

    public function admin_home()
    {
        $this->load->view('admin_home');
    }
    public function public_home()
    {
        $this->load->view('public_home');
    }
    public function police_home()
    {
        $this->load->view('police_home');
    }
    public function court_home()
    {
        $this->load->view('court_home');
    }
    public function police_profile_update_form()
    {
        $this->load->model('CrimeModel');
        $id=$this->session->id;
        $data['user_data']=$this->CrimeModel->view_police_pro($id);
        $this->load->view('police_profile_update',$data);
    }
    public function police_update()
    {
     $this->load->library('form_validation');
        $this->form_validation->set_rules("station_name","name",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
        $this->form_validation->set_rules("phone","phone",'required');
        $this->form_validation->set_rules("district","dist",'required');
        $this->form_validation->set_rules("email","email",'required');
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $id=$this->session->id;
            $a=array("station_name"=>$this->input->post("station_name"),
                      "pincode"=>$this->input->post("pincode"),
                      "phone_num"=>$this->input->post("phone"),
                      "district"=>$this->input->post("district"));
            $b=array("email"=>$this->input->post("email"));
            $this->CrimeModel->update_police($a,$b,$id);
            redirect("CrimeC/viewlogin",'refresh');
        }   
    }
    public function public_profile_update_form()
    {
        $this->load->model('CrimeModel');
        $id=$this->session->id;
        $data['user_data']=$this->CrimeModel->view_public_pro($id);
        $this->load->view('public_profile_update',$data);
    }
    public function public_update()
    {
     
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name","name",'required');
        $this->form_validation->set_rules("gender","gen",'required');
        $this->form_validation->set_rules("age","age",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
        $this->form_validation->set_rules("phone","phone",'required');
        $this->form_validation->set_rules("district","dist",'required');
        $this->form_validation->set_rules("email","email",'required');
        
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $id=$this->session->id;
            $a=array("name"=>$this->input->post("name"),
                      "gender"=>$this->input->post("gender"),
                      "age"=>$this->input->post("age"),
                      "address"=>$this->input->post("address"),
                      "pincode"=>$this->input->post("pincode"),
                      "mob"=>$this->input->post("phone"),
                      "district"=>$this->input->post("district"));
            $b=array("email"=>$this->input->post("email"));
            $this->CrimeModel->update_public($a,$b,$id);
            redirect("CrimeC/viewlogin",'refresh');
        }
    }
    public function add_complaint()
    {
       $this->load->model('CrimeModel');
        $id=$this->session->id;
        $data['user_data']=$this->CrimeModel->view_name($id);
        $this->load->view('public_complaint',$data); 
       
    }
   
    public function insert_complaint()
     {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("complainter_name","complainter_name",'required');
        $this->form_validation->set_rules("complaint","complaint",'required');
        
        if($this->form_validation->run())
        {
            $this->load->model('CrimeModel');
            $id=$this->session->id;
            $a=array(
                      "complainter_name"=>$this->input->post("complainter_name"),
                      "complaint"=>$this->input->post("complaint"),
                      "login_id"=>$id,
                      "cur_date"=>date('d-m-y')
                     );
            $this->CrimeModel->insert_complaint($a);
            redirect("CrimeC/view_complaint_byPub",'refresh');
        }

 }
 public function view_complaint_byPub()
 {
    $id=$this->session->id;
    $this->load->model('CrimeModel');
    $data['user_data']=$this->CrimeModel->view_complaint_byPub($id);
    $this->load->view('view_complaint_byPub',$data);
 }
public function view_complaint_byPolice()
     {
        $this->load->model('CrimeModel');
        $id=$this->session->id;
        $data['n']=$this->CrimeModel->viewComplaint_police($id);
        $this->load->view('view_complaint_byPolice',$data);
     }
public function case_reg_to_court()
{
  $this->load->view('case_reg_to_court');
}

 }