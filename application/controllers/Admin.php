<?php
    class admin extends CI_controller
    {
        public function index()
        {
            $this->form_validation->set_rules('emil','Email ID','required|valid_email');
            $this->form_validation->set_rules('pass','Password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/]');
            $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;">','</p>');
            if($this->form_validation->run())
            {
                $email=$this->input->post('emil');
                $pass=$this->input->post('pass');
                $this->load->model('Authenicate');
                $q=$this->Authenicate->getdata($email,$pass);
                
                if($q['Authorisedpt'])
                {    

                    $this->session->set_userdata('Authorisedpt',$q['Authorisedpt']);
                    
                    $this->session->set_userdata('Aemail',$q['Aemail']);
                        return redirect('admin/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                    // return redirect('user');
                    $this->load->view('feedback/dashboard');
                }
            }   
            else
            {
                $this->load->view('feedback/dashboard');
            }
        
                    
        }

        public function cngpass()
        {
            $this->load->view('feedback/passchange');
        }

        public function reenterpass1()
            {
                
                // $this->form_validation->set_rules('cemail','Email','required|valid_email');
                $this->form_validation->set_rules('pass1','Current Password','required');
                $this->form_validation->set_rules('pass2','New Password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/]|min_length[8]');
                $this->form_validation->set_rules('pass3','Confirm Password','required|matches[pass2]');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


                if($this->form_validation->run())
                {
                    $email=$this->session->userdata('Aemail');
                    // $f_email1 = $this->input->post("cemail");
                    $f_pass1 = $this->input->post("pass1");
                    $f_pass2 = $this->input->post("pass2");
                    $f_pass3 = $this->input->post("pass3");
                    
                    $conn = mysqli_connect('localhost', 'root',"",'kec1'); 
                    $query = "SELECT * from headdetalis where Aemail='$email' And Apassword='$f_pass1';";
                    $res = mysqli_query($conn,$query);
                     $r1=$res->fetch_assoc();
                     
                    if($r1)
                    {
                     
                     $con = mysqli_connect('localhost', 'root',"",'kec1'); 
                     $quer= "UPDATE headdetalis SET Apassword='$f_pass3' WHERE Aemail='$email';";
                     mysqli_query($con, $quer);
                     
                     $this->session->set_flashdata('popup_msg','Your password is successfully changed');
                     
                     
                    //  return redirect("Admin/dashboard");
                     $this->load->view('feedback/Adminpopup');
                     $this->dashboard();
                     
                    }
                    else{
                        $this->session->set_flashdata('change_password','Invalid current Password');
                        $this->load->view('feedback/passchange');
                    }

                }
                else
                {
                    $this->load->view('feedback/passchange');
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
                            
                            // $config['protocol'] = 'smtp';
                            // $config['mailpath'] = '/usr/sbin/sendmail';
                            // $config['charset'] = 'iso-8859-1';
                            // $config['wordwrap'] = TRUE;
                            // $config['smtp_host'] = 'smtp.gmail.com';
                            // $config['smtp_user'] = 'nikhilarya95@gmail.com';
                            // $config['smtp_pass'] = 'Nikhil#@2018';
                            // $config['smtp_port'] = '587';
                           
                            // $config = Array(
                            //     'protocol' => 'smtp',
                            //     'smtp_host' => 'http://php.net/smtp-port',
                            //     'smtp_port' => 25,
                            //     'smtp_user' => 'nikhilarya95@gmail.com',
                            //     'smtp_pass' => 'Nikhil#@2018',
                            //     'mailtype'  => 'html', 
                            //     'charset' => 'utf-8',
                            //     'wordwrap' => TRUE
                            // );            

                            // $this->email->initialize($config);

                            // $this->load->library('email', $config);
                            // $this->email->from('nikhilarya95@gmail.com', 'KONGU ENGINEERING COLLEGE');
                            // $this->email->to($email);
                            
                            // $this->email->subject('Email verification (kongu.ac.in)');
                            // $this->email->message('Testing the email class.');
                            // $this->email->send(); 
                            // if(!$this->email->send()){
                            //     echo $this->email->print_debugger();
                            //     echo "not send";
                            // }
                            // else{
                            
                            // $to=$email;
                            //     $msg= "Your OTP is.";   
                            //     $subject="Email verification (kongu.ac.in)";
                            //     $headers .= "MIME-Version: 1.0"."\r\n";
                            //     $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                            //     $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
                                        
                            //     $ms.="<html></body><div><div>Dear $email,</div></br></br>";
                            //     $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                            //     <div style='padding-top:10px;'>$f_otp</div>
                            //     </div>
                            //     </body></html>";
                            //     mail($to,$subject,$ms,$headers);
                                $this->load->model('Authenicate');
                                // $fa=$this->Authenicate->inse('headdetalis',$f_data, $f_eml);
                                $this->Authenicate->inset('admin_security_details',$f_data1);
                                
            
                            $this->session->set_userdata('Aemail',$email);
                            $this->load->view('feedback/fotp');
                            
                            // }
                        
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
       
            public function resend(){
                $a_email=$this->session->userdata('Aemail');
                $a_name= $this->session->userdata('Aname');
                
                $a_otp = rand(1000000,9999999);
                $a_date = date("Y-m-d H:i:s");
    
                
                $aotp=[
                    'Aemail'        => $a_email,
                    'AOTP'          => $a_otp,
                    'Averification' => 0,
                    'AOTPdate'      => $a_date
                ];
                // $to=$a_email;
                // $msg= "Dear $a_name , This mail is for email verification.";   
                // $subject="Email verification (kongu.ac.in)";
                // $headers .= "MIME-Version: 1.0"."\r\n";
                // $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                // $headers .= 'From:Kongu Engineering College <kongu.ac.in>'."\r\n";
                        
                // $ms.="<html></body><div><div>Dear $a_name,</div></br></br>";
                // $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
                // <div style='padding-top:10px;'>$a_otp</div>
                // </div>
                // </body></html>";
                // mail($to,$subject,$ms,$headers);
    
                $this->load->model('Authenicate');
                $admin_session=$this->Authenicate->forget($a_email);
                if($admin_session['Aemail'])
                {
                    $this->Authenicate->userinsert('admin_security_details',$aotp);
                    
                }
                else
                {
                    
                    $this->Authenicate->userinsert('admin_security_details',$aotp);
                }
                $this->load->view('feedback/fotp');
              }
        

        public function logout()
        {
            return redirect('user');
        }

        

        public function reply_sol()
        {
           
            $this->form_validation->set_rules('sol','solution','required');
            $this->form_validation->set_rules('sol_val','solution','required');
            $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;">','</p>');
            if($this->form_validation->run())
            {
               $sol=$this->input->post('sol');
                $sol_val=$this->input->post('sol_val');
                $conn= mysqli_connect('localhost', 'root',"",'kec1'); 
                $quer= "update grievancesdetails SET Gsolution='$sol' WHERE Gid='$sol_val';";
                mysqli_query($conn, $quer);
                echo "<script>alert('Solution inserted');</script>";
                $this->load->model('Authenicate');

                $this->load->view('feedback/prin');
            }
            else
            {
                echo "<script>alert('Solution not inserted');</script>";
            }

        }
              /*  public function filt()
                {
                    
                    $connection = mysqli_connect('localhost', 'root',"",'kec1');
                    $cate=$this->input->post('ctg');
                    $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Category= '$cate' ;";
                    $result = mysqli_query($connection, $query); 
                    
                    if($result->num_rows>0)
                    {
                        while($row=$result-> fetch_assoc())
                        { if($row["Category"]=='College'&& $s=='Principal')
                            {
                            echo"<tr ><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>
                       
                        Accept</button>
                            </div>
                            </div></td></tr>";
              
                        }}
                        echo "</table>";
                    }
                    else{
                        echo"0";
              
                    }
                    
                }*/
         public function dashboard()
        {
        if(!$this->session->userdata('Authorisedpt'))
         
          return redirect('user/login');
          $this->load->view('feedback/prin');
         
        }

    }