<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class LupaPassword extends CI_Controller
    {
        public function __construct(){
            parent:: __construct();
            
            require APPPATH.'libraries/phpmailer/src/Exception.php';
            require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
            require APPPATH.'libraries/phpmailer/src/SMTP.php';
    
        }

        public function index(){

            $judul['title'] = 'Lupa Password';
            $data['menu']   = 'lupa-password';
            $this->form_validation->set_rules('email','Email','trim|required|valid_email',[
                'required' => '%s tidak boleh kosong!',
                'valid_email' => '%s tidak valid!'
            ]);
            if($this->form_validation->run() == FALSE){
                
                $this->load->view('components/header', $judul);
		        $this->load->view('components/navbar');
                $this->load->view('login/lupaPassword');
    
            }else{
                $email 	= $this->input->post('email');
                $user 			= $this->db->get_where('user', ['email' => $email, 'aktif' => 1])->row_array();
    
                if($user){
                    
                    $token      = base64_encode(random_bytes(32));
                    $ubahtoken  = urlencode($token);
                    $users_token = [
                        'email' => $email,
                        'token' => $token,
                        'date_created' => time()
                    ];
    
                    $this->db->insert('user_token', $users_token);
    
                    // PHPMailer object
                     $response = false;
                     $mail = new PHPMailer();
                   
            
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'smtp.hostinger.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
                    $mail->SMTPAuth = true;
                    $mail->Username = 'test@menang-ptn.com'; // user email
                    $mail->Password = 'Menang-ptn2020'; // password email
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port     = 465;
            
                    $mail->setFrom('test@menang-ptn.com', 'Kemahasiswaan UNAS PASIM'); // user email
                    
            
                    // Add a recipient
                    $mail->addAddress($email); //email tujuan pengiriman email
            
                    // Email subject
                    $mail->Subject = 'Lupa Kata Sandi'; //subject email
            
                    // Set email format to HTML
                    $mail->isHTML(true);
            
                    // Email body content
                    // $mailContent = "test"; // isi email
    
                    $variabel   = base_url() . "reset-password?email={$email}&token={$ubahtoken}";
                    $mail->Body = '
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"> 
                            <tbody>
                                <tr> 
                                    <td align="center" bgcolor="#FFFFFF" style="padding:0px" width="100%"> 
                                        <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important;background-color:#625a9c" width="600"> 
                                            <tbody>
                                                <tr> 
                                                    <td bgcolor="#FFD6E5" style="width:100%!important;padding:0;background-color:#ffffff"> 
                                                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5"> 
                                                            <tbody>
                                                                <tr> 
                                                                    <td align="center" height="16px" style="background-color:#f3f3f5"> </td></tr></tbody>
                                                                </table> 
                                                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td align="center" height="25px" style="background-color:#ffffff"> 
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                                <table cellspacing="0" cellpadding="0" align="left" border="0" width="100%" bgcolor="#ffffff"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td valign="top" align="left" width="100%" style="padding-left:25px">
                                                                                <h2>Kemahasiswaan UNAS PASIM</h2> 
                                                                            </td>
                                                                            <td>
                                                                                <!-- <h2>Kemahasiswaan UNAS PASIM</h2> -->
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td align="center" height="25px" style="background-color:#ffffff"> 
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td align="center" height="25px" style="background-color:#ffffff"> 
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width:600px"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td style="font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:1.0;color:#000000;font-weight:bolder;text-transform:uppercase;padding:25px 25px 5px 25px"> SELESAIKAN PROSES RESET PASSWORD! 
                                                                            </td>
                                                                        </tr>
                                                                        <tr> 
                                                                            <td style="font-family:Arial,Helvetica,sans-serif;font-size:52px;line-height:1.0;color:#000000;font-weight:bolder;padding:0 25px 15px 25px"> RESET PASSWORD KAMU 
                                                                            </td>
                                                                        </tr>
                                                                        <tr> 
                                                                            <td style="font-family:Arial,Helvetica,sans-serif;font-size:18px;line-height:1.4;color:#000000;padding:0 25px 50px 25px"> Untuk mengganti password lama ke yang baru, silahkan reset password akun Anda terlebih dahulu dengan klik tombol <strong>RESET PASSWORD</strong> di bawah ini. 
                                                                            </td>
                                                                        </tr>
                                                                        <tr> 
                                                                            <td align="center" style="padding:0 25px 30px 25px;background-color:#ffffff"> 
                                                                                <table align="center" cellpadding="0" cellspacing="0" border="0"> 
                                                                                    <tbody>
                                                                                        <tr> 
                                                                                            <td class="m_-3242533766507064956cta-shadow" align="center" bgcolor="5c238c" style="border-radius:40px"> 
                                                                                                <a href="'.$variabel.'" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:1.0;font-weight:bold;color:#ffffff;text-transform:uppercase;text-decoration:none;border-radius:30px;display:block;padding:12px 25px 12px 25px;"> RESET 
                                                                                                </a> 
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table> 
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5"> 
                                                                    <tbody>
                                                                        <tr> 
                                                                            <td align="center" height="25px" style="background-color:#ffffff"> 
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u>
                                                                </u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u>
                                                                </u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:100%!important" width="600"> 
                                                    <tbody>
                                                        <tr> 
                                                            <td bgcolor="" style="width:100%!important;padding:0"> 
                                                                <u></u> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>';
            
                    // Send email
                    if(!$mail->send()){
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }else{
                        
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Harap cek email untuk ubah kata sandi</div>');
                    redirect('lupa-password');
    
                    }
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email tidak terdaftar atau belum aktif!</div>');
                    redirect('lupa-password');
                }
            }
        }


        public function resetPassword(){
            $email = $this->input->get('email');
            $token = $this->input->get('token');
    
            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
    
            if($user){
                $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
                if($user_token){
                    $this->session->set_userdata('reset_email', $email);
                    $this->gantiPassword();
    
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Ganti password Gagal! Token salah. </div>');
                    redirect('login-mahasiswa');
                }
    
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Ganti password Gagal! Email salah. </div>');
                redirect('login-mahasiswa');
            }
        }

        public function gantiPassword(){
            $judul['title'] = 'Ganti Password';
            $data['menu'] = 'ganti-password';
            if(!$this->session->userdata('reset_email')){
                redirect('login-mahasiswa');
            }
            $this->form_validation->set_rules('password','Password','trim|required|min_length[8]',[
                'required' => '%s tidak boleh kosong!',
                'min_length' => '{field} minimal 8'
            ]);
            $this->form_validation->set_rules('con_pass','Konfirmasi Password','trim|required|matches[password]',[
                'required' => '%s tidak boleh kosong!',
                'matches' => '{field} tidak sama dengan password'
            ]);
    
            if($this->form_validation->run() ==FALSE){
                $this->load->view('components/header', $judul);
		        $this->load->view('components/navbar');
                $this->load->view('login/ganti_password');
            }else{
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $email = $this->session->userdata('reset_email');
    
                $this->db->set('password', $password);
                $this->db->where('email', $email);
                $this->db->update('user');
    
                $this->session->unset_userdata('reset_email');
                $this->db->delete('user_token', ['email' => $email]);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Ganti password Berhasil! harap login. </div>');
                redirect('login-mahasiswa');
            }
    
        }
        
    }
    

?>