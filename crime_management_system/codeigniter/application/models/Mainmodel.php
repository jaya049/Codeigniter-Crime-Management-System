<?php
  class Mainmodel extends CI_Model
  {
     public function register($a)
     {
       $this->db->insert("reg_details",$a);
     }
     public function encpass($pass)
     {
        return password_hash($pass,PASSWORD_BCRYPT);
     }
     public function view1()
     {
        $this->db->select('*');
       $datas= $this->db->get("reg_details");
        return $datas;
     }
     public function singledetails($id)
     {
        $this->db->select('*');
        $this->db->where("user_id",$id);
        $qry=$this->db->get("reg_details");
        return $qry;
     }
     public function singledata()
     {
        $qry=$this->db->get("reg_details");
        return $qry;
     }
     public function updatedetails($a,$id)
     {
        $this->db->select('*');
        $qry=$this->db->where("user_id",$id);
        $qry=$this->db->update("reg_details",$a);
        return $qry;
     }
     public function deletedetails($id)
     {
        $this->db->where("user_id",$id);
        $this->db->delete("reg_details");

     }
     public function approvedetails($id)
     {
        
        $qry=$this->db->where("user_id",$id);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("reg_details");
        return $qry;
     }
     public function rejectdetails($id)
     {
        $qry=$this->db->where("user_id",$id);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("reg_details");
        return $qry;
     }
     public function getuserid($email)
     {
        $this->db->select('user_id');
        $this->db->from("reg_details");
        $this->db->where("email",$email);
        return $this->db->get()->row('user_id');
     }
     public function getuser($id)
     {
        $this->db->select('*');
        $this->db->from("reg_details");
        $this->db->where("user_id",$id);
        return $this->db->get()->row();
     }
     public function selectpass($email,$pass)
     {
        $this->db->select('password');
        $this->db->from("reg_details");
        $this->db->where("email",$email);
        $qry=$this->db->get()->row('password');
        return $this->verifypass($pass,$qry);
     }
     public function verifypass($pass,$qry)
     {
        return password_verify($pass,$qry);
     }
  }
  ?>