<?php
    class user extends CI_controller
    { 
        
        public function index()
        {
            $this->load->view('feedback/dashboard');
        }
        public function student_details()
        {
            $this->load->view('feedback/student_details');
        }
        public function sendmail()
        {
            $this->form_validation->set_rules('tle','ID','callback_user_dd');
            $this->form_validation->set_rules('id','ID','required');
            $this->form_validation->set_rules('mob','Mobile','required|numeric|regex_match[/^[789]\d{9}$/]|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run())
            {
                
                $otp=rand(100000,999999);
                $query=mysqli_query("insert into register(id,mob,email,otp,status) values('$id','$mob','$email','$otp','$status')");
                echo $query;
                if($query)
                {
                        require(base_url('assets/class.phpmailer.php'));
                    $to=$email;
                    $msg= "Thanks for new Registration.";   
                    $subject="Email verification (kongu.ac.in)";
                    $headers .= "MIME-Version: 1.0"."\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                    $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";                    
                    $ms.="<html></body><div><div>Dear,</div></br></br>";
                    $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                    <div style='padding-top:10px;'>$otp</div>
                    </div>
                    </body></html>";
                    mail($to,$subject,$ms,$headers);
                    $success=1;   
                    return redirect('user/login');
                }
                  /*  else
                    {
                    echo "<script>alert('Data not inserted');</script>";
                    }*/
            }
            else
            {
                $this->load->view('feedback/student_details');
            }
        }
       
        
            public function reenterpass()
            {
                $this->form_validation->set_rules('femail','Email Id','required|valid_email');
                // $this->form_validation->set_rules('SecuQues1','Security Question','required|callback_user_dd');
                // $this->form_validation->set_rules('ans1','Security Answer','required');
                // $this->form_validation->set_rules('SecuQues2','Security Question','required|callback_user_dd');
                // $this->form_validation->set_rules('ans2','Security Answer','required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
                if($this->form_validation->run())
                {
                    $email = $this->input->post("femail");
                    // $ans1 = $this->input->post("ans1");
                    // $ans2 = $this->input->post("ans2");
                    // $sq1 = $this->input->post("SecuQues1");
                    // $sq2 = $this->input->post("SecuQues2");
                    

                    $conn = mysqli_connect('localhost', 'root',"",'kec1'); 
                    $query = "SELECT Aemail from headdetalis where Aemail='$email';";
                    $res = mysqli_query($conn,$query);
                     $r1=$res->fetch_assoc();
                     if($r1)
                        {    
                            $f_otp = rand(1000000,9999999);
                            $f_date = date("Y-m-d H:i:s");
                            
                            $f_data1=[
                                'Aemail'            => $email,
                                'AOTP'              => $f_otp,
                                'Averification'     => 0,
                                'AOTPdate'          => $f_date
                            ];
                            
                            $to=$email;
                                $msg= "Your OTP is.";   
                                $subject="Email verification (kongu.ac.in)";
                                $headers .= "MIME-Version: 1.0"."\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                                $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
                                        
                                $ms.="<html></body><div><div>Dear $email,</div></br></br>";
                                $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                                <div style='padding-top:10px;'>$f_otp</div>
                                </div>
                                </body></html>";
                                mail($to,$subject,$ms,$headers);
                                $this->load->model('Authenicate');
                                // $fa=$this->Authenicate->inse('headdetalis',$f_data, $f_eml);
                                $this->Authenicate->inset('admin_security_details',$f_data1);
                                
            
                            $this->session->set_userdata('Aemail',$email);
                            $this->load->view('feedback/fotp');
                            
                        
                        
                        // $u_submit = $this->input->post('repss_submit');
                        // if(isset($u_submit))
                        // {
                        //    // $this->load->model('Authenicate');
                        // //    echo "bhbhbh";
                        //    // $this->Authenicate->updat($em);

                        // }
                        // else
                        // {
                        //     echo "njnjnj";
                        // }
                        
                     }
                        else{
                            $this->session->set_flashdata('email_match','Email not found');
                            $this->load->view('feedback/forget');
                        }
                    
                    
                    // echo "okk";                
                }
                else
                {
                    $this->load->view('feedback/forget');
                }
            }
            
            public function changedpassword(){
                
                
                // if(!$this->session->userdata('Aemail'))
         
                // return redirect('user');
                
             $email=$this->session->userdata('Aemail');
               
                $this->form_validation->set_rules('pass2','New Password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/]');
                $this->form_validation->set_rules('pass3','Confirm Password','required|matches[pass2]');
                $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;">','</p>');
                if($this->form_validation->run())
                {
                    $this->load->model('Authenicate');
                    $f_pass1 = $this->input->post("pass2");
                //     $con = mysqli_connect('localhost', 'root',"",'kec1'); 
    
                //      $qf= "SELECT Aemail FROM admin_security_details order by AOTPdate desc limit 1;"; 
                // // Execute the query and store the result set 
             
                   
                //      $ret= mysqli_query($con,$qf);
                //      $ro1 = $ret->fetch_assoc();
                //      $f=$ro1["Aemail"];
                //      echo $f;
                    $conn = mysqli_connect('localhost', 'root',"",'kec1'); 
                     $quer= "update headdetalis SET Apassword='$f_pass1' WHERE Aemail='$email';";
                     mysqli_query($conn, $quer);
                     
                     $this->session->set_flashdata('popup_msg','Your password is successfully changed');
                     $this->load->view('feedback/popup');
                     $this->login();
                     
                }
                else{
                    $this->load->view('feedback/fpasschange');
                }
            }

            
            public function passchange()
            {
                $gf=$r1["Aemail"];
                $quer= "update headdetalis SET Apassword='$f_pass3' WHERE Aemail='$gf';";
                mysqli_query($conn, $quer);
            }

            public function fenterpass()
            {
                // $this->form_validation->set_rules('cemail','Email','required|valid_email');
                // $this->form_validation->set_rules('pass1','Current Password','required');
                $this->form_validation->set_rules('pass2','New Password','required');
                $this->form_validation->set_rules('pass3','Confirm Password','required|matches[pass2]');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


                if($this->form_validation->run())
                {
                    // $f_email1 = $this->input->post("cemail");
                    // $f_pass1 = $this->input->post("pass1");
                    $f_pass2 = $this->input->post("pass2");
                    $f_pass3 = $this->input->post("pass3");
                    
                    // $conn = mysqli_connect('localhost', 'root',"",'kec1'); 
                    // $query = "SELECT Apassword from headdetalis where Aemail='$f_email1'";
                    // $res = mysqli_query($conn,$query);
                    //  $r1=$res->fetch_assoc();
                     
                    // if($r1)
                    // {
                    //  $gf=$r1["Apassword"];
                    //  echo $gf;
                    //  echo $f_pass3;
                     
                     $conn = mysqli_connect('localhost', 'root',"",'kec1');
                     $quer= "update headdetalis SET Apassword='$f_pass3' WHERE Aemail='$f';";
                     mysqli_query($conn, $quer);
                     echo "<script>alert('Password changed');</script>";
                     return redirect("Admin");
                    // }
                    // else{
                    //     echo "notokk";
                    // }

                }
                else
                {
                    $this->load->view('feedback/passchange');
                }
            }

            
            public function forget()
            {
                $this->load->view('feedback/forget');
            }

            public function fcngpass()
            {
                 
                $this->form_validation->set_rules('otp','OTP','required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
           
                if($this->form_validation->run())
                { 
                    
                    $f_otp = $this->input->post("otp");
                    $conn = mysqli_connect('localhost', 'root',"",'kec1');
                    $query=  "SELECT  * FROM admin_security_details where AOTP='$f_otp' AND Averification!=1 AND NOW() <= DATE_ADD(AOTPdate, INTERVAL 10 MINUTE);";
                    $res = mysqli_query($conn,$query);  
                  $count= mysqli_num_rows($res);
                  
                  
                          if(!empty($count)) 
                            {
                               $result = mysqli_query($conn,"UPDATE admin_security_details SET  Averification = 1 WHERE AOTP='$f_otp'");
                               $this->load->view('feedback/fpasschange');
                        
                            }
                       else {
                   
                        echo "<script>alert('Invalid OTP');</script>";
                        $this->load->view('feedback/fotp');
                            }
                            
                    
                         }
                         else{
                            $this->load->view('feedback/fotp');
                        }	
                        
                        

                
            }
            public function grievence(){
                $this->load->view('feedback/greivence');
            }

           
            public function login()
            {
                $this->load->view("feedback/dashboard");
            }
            public function greivence()
            {
                $u_submit=$this->input->post("submit_otp");
                if(isset($u_submit))
                {
                    
                    $this->form_validation->set_rules('otp','OTP','required');
                    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
               
                    if($this->form_validation->run())
                    { 
                        if(!empty($_POST["submit_otp"]))
                        {
                        $u_otp = $this->input->post("otp");
                        $conn = mysqli_connect('localhost', 'root',"",'kec1');
                        $query=  "SELECT  * FROM userotp where UOTP='$u_otp' AND Uverification!=1 AND NOW() <= DATE_ADD(UOTPdate, INTERVAL 10 MINUTE);";
                        $res = mysqli_query($conn,$query);  
                      $count= mysqli_num_rows($res);
                      
                      
                              if(!empty($count)) 
                                {
                                   $result = mysqli_query($conn,"UPDATE userotp SET  Uverification = 1 WHERE UOTP='$u_otp'");
                                   return redirect('user/grievence');
                        	
                                }
                           else {
                       
                            echo "<script>alert('Invalid OTP');</script>";
                            $this->load->view('feedback/otp');
                                }	
                        
                             }
                            
                            } 
                   
                }
                else
                {
                    $this->load->view('feedback/otp');
                }
            }
            public function signup()
            {
                $this->load->view("feedback/signup");
            }
           
           /* public function grei()
            {
              //  $gr_id = "gid_"
                $gr_ctg   = $this->input->post("ctg");
                $gr_sctg   = $this->input->post("sc");
                $gr_grei = $this->input->post("grie"); 
                $gr_gid = 'Gid_';
                $gr_eid = $ne;
                $gre=[
                    //'Gid'        => $gr_gid,
                    'Uemail'        => "nikhil@gmail.com",
                    'Grievance' => $gr_grei,
                    'Category'  => $gr_ctg,
                    'Scategory'  => $gr_sctg,
                    'GpostDate' => date("Y-m-d")
                ];
                $this->load->model('Authenicate');
                $this->Authenicate->inse('grievancesdetails',$gre);
                echo "thank you";
            }*/
          public function signupmail()
          {
            $this->form_validation->set_rules('tle','Authorizer','callback_user_dd');
            $this->form_validation->set_rules('Faculty_id','Faculty ID','required|is_unique[headdetalis.Aid]');
            $this->form_validation->set_rules('firstname','Fuculty First Name','required|alpha');
            $this->form_validation->set_rules('lastname','Fuculty last Name','required|alpha');
            $this->form_validation->set_rules('mobile1','Mobile Number','required|numeric|regex_match[/^[789]\d{9}$/]|is_unique[headdetalis.Amobile]|exact_length[10]');
            $this->form_validation->set_rules('email1','Email Id','required|valid_email');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
           
            if($this->form_validation->run())
            {
                $f_tle = $this->input->post("tle");
                $f_fid = $this->input->post("Faculty_id");
                $f_fnm = $this->input->post("firstname");
                $f_lnm = $this->input->post("lastname");
                $f_fullnm = $f_fnm." ".$f_lnm;
                $f_mob = $this->input->post("mobile1");
                $f_eml = $this->input->post("email1");
                $f_otp = rand(1000000,9999999);
                $f_date = date("Y-m-d H:i:s");
                $u=$this->db->where(['Aemail'=> $f_eml , 'Authorisedpt' => $f_tle ])
                ->get('headdetalis');
                if($u->num_rows())
                {
                   $pass= $u->row()->Apassword;
                    if($pass=="")
                    {
                
                            $f_data=[
                            /* 'Authorisedpt'      => $f_tle,*/
                                'Aid'               => $f_fid,
                                'Aname'             => $f_fullnm,
                                'Amobile'           => $f_mob,
                            /* 'Aemail'            => $f_eml,*/
                            
                            ];
                            $f_dataValid=[
                                'Authorisedpt'      => $f_tle,
                                'Aemail'            => $f_eml,
                            ];
                            $f_data1=[
                                'Aemail'            => $f_eml,
                                'AOTP'              => $f_otp,
                                'Averification'     => 0,
                                'AOTPdate'          => $f_date
                            ];
                            
                            $to=$f_eml;
                                $msg= "Thanks for new Registration.";   
                                $subject="Email verification (kongu.ac.in)";
                                $headers .= "MIME-Version: 1.0"."\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                                $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
                                        
                                $ms.="<html></body><div><div>Dear $f_fnm,</div></br></br>";
                                $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                                <div style='padding-top:10px;'>$f_otp</div>
                                </div>
                                </body></html>";
                                mail($to,$subject,$ms,$headers);
                                $this->load->model('Authenicate');
                                $fa=$this->Authenicate->inse('headdetalis',$f_data, $f_eml);
                                $this->Authenicate->inset('admin_security_details',$f_data1);
                                $this->load->view('feedback/fotp');
            }   
           else{
            echo '<script>alert("hello");</script>';
             redirect('user/signup');
             
           }
            }
            }
            else
            {
                    $this->load->view('feedback/signup');
            }
          }
          public function signup2()
          {
            $this->form_validation->set_rules('password1','Password','required|min_length[8]|regex_match[/^[A-Za-z0-9!@#$%^&*()_]{8,20}$/]');
            $this->form_validation->set_rules('password2','Confirm Password','required|matches[password1]');
            $this->form_validation->set_rules('SecuQues1','Security Question','required|callback_user_dd');
            $this->form_validation->set_rules('security_answer','Security Answer','required');
            $this->form_validation->set_rules('SecuQues2','Security Question','required|callback_user_dd');
            $this->form_validation->set_rules('security_answer1','Security Answer','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run())
            { 
                $con = mysqli_connect('localhost', 'root',"",'kec1'); 
               
               $qf= "SELECT Aemail FROM admin_security_details order by AOTPdate desc limit 1;"; 
                // Execute the query and store the result set 
             
                   
                     $ret= mysqli_query($con,$qf);
                     $ro1 = $ret->fetch_assoc();
                     $f=$ro1["Aemail"];





                $f_pass = $this->input->post("password2");
        $f_qus1 = $this->input->post("SecuQues1");
        $f_ans1 = $this->input->post("security_answer");
        $f_qus2 = $this->input->post("SecuQues2");
        $f_ans2 = $this->input->post("security_answer1");
       
       
        $quer= "update headdetalis SET Apassword='$f_pass',ques1='$f_qus1',ans1='$f_ans1',ques2='$f_qus2',ans2='$f_ans2' WHERE Aemail='$f';";
          mysqli_query($con, $quer);


               // $this->load->model('Authenicate');
                //$fa=$this->Authenicate->upda();
                return redirect('user/login');
            }
            else
            {
                $this->load->view('feedback/signup2');
            }

          }
          public function fotp()
          {
            $this->form_validation->set_rules('otp','OTP','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
       
            if($this->form_validation->run())
            {
                $f_otp = $this->input->post("otp");
                $this->load->model('Authenicate');
                 

                if($this->Authenicate->fotp($f_otp))
                {
                    $this->load->view('feedback/signup2');
                    //return redirect('user/signup2');
                }
                else
                {
                    
                    $this->load->view('feedback/fotp','Invalid Username/Password');
                }
          }
          else
          {
              $this->load->view('feedback/fotp');
          }
          }

          public function resend(){
            $u_email=$this->session->userdata('Uemail');
            $u_name= $this->session->userdata('U_name');
            $u_user= $this->session->userdata('User');
            $u_otp = rand(100000,999999);
            $u_date = date("Y-m-d H:i:s");

            
            $uotp=[
                'Uemail'        => $u_email,
                'UOTP'          => $u_otp,
                'Uverification' => 0,
                'UOTPdate'      => $u_date
            ];
            // $to=$u_email;
            // $msg= "Dear $u_name , Thanks for new Registration.";   
            // $subject="Email verification (kongu.ac.in)";
            // $headers .= "MIME-Version: 1.0"."\r\n";
            // $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            // $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
                    
            // $ms.="<html></body><div><div>Dear $u_user,</div></br></br>";
            // $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
            // <div style='padding-top:10px;'>$u_otp</div>
            // </div>
            // </body></html>";
            // mail($to,$subject,$ms,$headers);

            $this->load->model('Authenicate');
            $user_session=$this->Authenicate->ucheck($u_email);
            if($user_session['Uemail'])
            {
                $this->Authenicate->userinsert('userotp',$uotp);
                
            }
            else
            {
                
                $this->Authenicate->userinsert('userotp',$uotp);
            }
            $this->load->view('feedback/otp');
          }
          
           public function user1()
            {
                $this->form_validation->set_rules('usr','User','callback_user_dd');
                $this->form_validation->set_rules('id','Register No.','required');
                $this->form_validation->set_rules('username','Name','required');
                $this->form_validation->set_rules('mob','Mobile','required|numeric|regex_match[/^[789]\d{9}$/]|exact_length[10]');
                $this->form_validation->set_rules('email','Email ID','required|valid_email');
                
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
                if($this->form_validation->run())
                 {
                    $submit=$this->input->post("submit_email");
                if(isset($submit))
                {
                    $u_user = $this->input->post("usr");
                    $u_id = $this->input->post("id");
                    $u_mobile = $this->input->post("mob");
                    $u_email = $this->input->post("email");
                    $u_name=$this->input->post("username");
                    $ne=$u_email;
                    $u_otp = rand(100000,999999);
                    $u_date = date("Y-m-d H:i:s");

                    $users=[
                        'Usid'           => $u_id,
                        'U_name'        => $u_name,
                        'User'          => $u_user,
                        'Umobile'       => $u_mobile,
                        'Uemail'        => $u_email,

                        
                    ];
                    $uotp=[
                        'Uemail'        => $u_email,
                        'UOTP'          => $u_otp,
                        'Uverification' => 0,
                        'UOTPdate'      => $u_date
                    ];
                    $to=$u_email;
                    $msg= "Dear $u_name , Thanks for new Registration.";   
                    $subject="Email verification (kongu.ac.in)";
                    $headers .= "MIME-Version: 1.0"."\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                    $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
                            
                    $ms.="<html></body><div><div>Dear $u_user,</div></br></br>";
                    $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                    <div style='padding-top:10px;'>$u_otp</div>
                    </div>
                    </body></html>";
                    mail($to,$subject,$ms,$headers);

                    $this->load->model('Authenicate');
                    $user_session=$this->Authenicate->ucheck($u_email);
                    if($user_session['Uemail'])
                    {
                        $this->Authenicate->userinsert('userotp',$uotp);
                        $this->session->set_userdata('Uemail',$user_session['Uemail']);
                        $this->session->set_userdata('User',$user_session['User']);
                        $this->session->set_userdata('U_name',$user_session['U_name']);
                        
                        
                    }
                    else
                    {
                        $this->Authenicate->userinsert('userverification',$users);
                        $this->Authenicate->userinsert('userotp',$uotp);
                    }
                    $this->load->view('feedback/otp');
                }
            }
            else
            {
                $this->load->view('feedback/student_details');
            }
          
            }
            public function user_dd($str)
            {
                    if ($str == 'Category')
                    {
                            $this->form_validation->set_message('user_dd', 'Please select the {field} field');
                            return FALSE;
                    }
                    else if($str == 'User')
                    {
                        $this->form_validation->set_message('user_dd', 'Please select the {field} field');
                        return FALSE;
                    }
                   
                    else if($str == 'Authorise')
                    {
                        $this->form_validation->set_message('user_dd', 'Please select the {field} field');
                        return FALSE;
                    }
                    else if($str == 'Select One')
                    {
                        $this->form_validation->set_message('user_dd', 'Please select the {field} field');
                        return FALSE;
                    }
                    else
                    {
                            return TRUE;
                    }
            }


            public function thanks()
            {
                
                $this->form_validation->set_rules('grie','Greivence','required');
                $this->form_validation->set_rules('type','Type','required');
                 $this->form_validation->set_rules('ctg','Category','callback_user_dd');
                 $this->form_validation->set_rules('sc','Specific Category','callback_user_dd');
                 
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
                if($this->form_validation->run())
                {
                   $this->load->model('Authenicate');
                   
                   $gr_ctg   = $this->input->post("ctg");
                   $gr_type   = $this->input->post("type");
                    $gr_sctg   = $this->input->post("sc");
                    $gr_scth   = $this->input->post("sd");
                    $gr_scti   = $this->input->post("se");
                   if($gr_sctg!='Specific Category')
                   {
                    $gr_sct= $gr_sctg; 
                   }
                   elseif($gr_scth!='Specific Category')
                   {
                    $gr_sct=  $gr_scth; 
                   }
                   else{
                    $gr_sct= $gr_scti;  
                   }
                    $gr_grei = $this->input->post("grie"); 
                    
                    $gr_gid = 'Gid_';
                   // $eml=$this->Authenicate->gri($u_email);
                   $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
                   $query = "SELECT Uemail FROM  userotp order by UOTPdate desc limit 1;";
                   
                  $q2= "SELECT s_id FROM  grievancesdetails order by s_id desc limit 1;"; 
                   // Execute the query and store the result set 
                   $result = mysqli_query($connection, $query);
    
                         
                        $resu=  mysqli_query($connection, $q2);
                        $roww = $resu->fetch_assoc();
                        $b=$roww["s_id"];
            
                        
                        $gr_gid="Gid_00".($b+1);
                        // Execute the query and store the result set      
                            
    
                         $row=$result->fetch_assoc();
                        $gf=$row["Uemail"];
                        
                         $dt=date("Y-m-d");
                         $quer= "insert into grievancesdetails(Gid,type,Uemail,comments,Category,Scategory,GpostDate) values ('$gr_gid','$gr_type','$gf','$gr_grei','$gr_ctg','$gr_sct','$dt')";
                          mysqli_query($connection, $quer);
                     
                    
                 /*   $gre=[
                        'Gid'        => $gr_gid,
                       //'Uemail'        => $row,
                        'Grievance' => $gr_grei,
                        'Category'  => $gr_ctg,
                        'Scategory'  => $gr_sctg,
                        'GpostDate' => date("Y-m-d")
                    ];
                    $this->Authenicate->inse('grievancesdetails',$gre);*/
                    $this->grievence();
                        $this->load->view('feedback/thanku');
                        
                        
                        

                    }
                    else
                    {
                        $this->load->view('feedback/greivence');
                    }
                }
           /* public function cat($str)
            {
                
                if ($str == ('Category'))
                    {
                            $this->form_validation->set_message('cat', 'Please select the {field} field');
                            return FALSE;
                    }
                    else
                    {
                            return TRUE;
                    }
            }*/
            
    }