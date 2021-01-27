<?php
class Authenicate extends CI_model
{
    
    public function forget($email)
    {
        $f=$this->db->where(['Aemail'=>$email])
                    ->get('headdetalis');
                    if($f->num_rows())
                    {
                        $session=array('Authorisedpt'=>$f->row()->Authorisedpt,'Aname'=>$f->row()->Aname,'Aemail'=>$f->row()->Aemail);
                        return $session;
                        // return $f->row()->Aemail;
                    }
                    else
                    {
                        return false;
                    }
    }   
    public function ucheck($u_email)
    {
        $uc=$this->db->where(['Uemail'=>$u_email])
                     ->get('userverification');
                    if($uc->num_rows())
                    {
                        $session=array('User'=>$uc->row()->User,'U_name'=>$uc->row()->U_name,'Uemail'=>$uc->row()->Uemail);
                        return $session;
                    }
                    else
                    {
                        return false;
                    }
    }
    public function userinsert($tb,$grei)
    {
        $this->db->insert($tb,$grei);
    }

    public function inse($tb,$grei,$email)
	{
    
    $this->db->where(['Aemail'=>$email])->update($tb,$grei);
    }
    public function inset($tr,$gri)
	{
    
    $this->db->insert($tr,$gri);
    }
    public function updat($em)
    {
        
        $u_submit = $this->input->post('repss_submit');
        if(isset($u_submit))
        {
            echo "okk";
        }
    }
    public function upda()
    {
       

        $this->db->update('headdetalis'); 
        $this->db->set('Apassword', 'password2');
        $this->db->set('Apassword', 'SecuQues1');
        $this->db->set('Apassword', 'security_answer');
        $this->db->set('Apassword', 'SecuQues2');
        $this->db->set('Apassword', 'security_answer1');
        $this->db->where('Aemail', '$f_email');
       // $this->db->update('headdetalis'); 
        
    }
    public function user_veri($u_otp)
    {
      
    }
    public function fotp($f_otp)
    {
        $u=$this->db->where(['AOTP'=>$f_otp])
                    ->get('admin_security_details');
                    if($u->num_rows())
                    {
                        return True;
                    }
                    else{
                        return false;
                    }
    }
    /*public function gri($u_email)
    {
        $u=$this->db->qurey("select Uemail from userverification where Uemail= )
                    ->get('grievancesdetails');
                    echo "<pre>";
                    print_r($u->row());
                    exit;
                    if($u->num_rows())
                    {
                        return $q->row()->Uemail;
                    }
                    else{
                        return false;
                    }
    }*/
    public function getdata($email,$password)
    {   
    $this->db->SELECT('*');
    $this->db->FROM('headdetalis');
   
    $where="Aemail='$email' AND Apassword='$password'";
    $this->db->where($where);

                   $q =$this->db->get();
                
                   $session=array();
                    if($q->num_rows())
                    {
                       $session=array('Authorisedpt'=>$q->row()->Authorisedpt,'Aemail'=>$q->row()->Aemail);
                       return $session;
    
                    }
                    else
                    {
                        return false;
                    }
    }
    
}
?>