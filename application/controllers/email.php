<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index(){
		$this->load->helper( array('url', 'form') );
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->data = array(
			'css'							=> "admin", // set whether to use main css or admin css or something else
			'xcss'							=> array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
			'xjs'							=> array(JS_PATH."jquery-1.7.min.js",JS_PATH."slides.min.jquery.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
			'active_nav'					=> "admin", // set the active class for this nav item
			'title'							=> "Welcome to FranFerger.com"
 		);
		// set validation rules
		$rules_config = array(
               array(
                     'field'   => 'firstname', 
                     'label'   => 'First Name', 
                     'rules'   => 'required|alpha'
                  ),
               array(
                     'field'   => 'lastname', 
                     'label'   => 'Last Name', 
                     'rules'   => 'required|alpha'
                  ),
               array(
                     'field'   => 'email', 
                     'label'   => 'Email Address', 
                     'rules'   => 'required|valid_email'
                  ),
			array(
                     'field'   => 'howhear', 
                     'label'   => 'How did you hear about us?', 
                     'rules'   => ''
                  ),
			array(
                     'field'   => 'phone', 
                     'label'   => 'Phone Number', 
                     'rules'   => ''
                  ),   
               array(
                     'field'   => 'message', 
                     'label'   => 'Message Body', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($rules_config);
				
		// check if user form has been submitted properly
		if ($this->form_validation->run()==FALSE){
			// redisplay user form and repopulate fields
			$this->load->view('header',$this->data);
			$this->load->view('contact',$this->data);			
			$this->load->view('footer',$this->data);
		}
		// display confirmation web page and send email
		else{

			// set email class settings
			$this->email->from($this->input->post('email'),$this->input->post('firstname').' '.$this->input->post('lastname'));
			$this->email->to('fcferger@gmail.com');
//			$this->email->cc('joe@domain.com');
//			$this->email->bcc('sue@domain.com');
			$this->email->subject($_POST['subject']);
			$msgbody =
					"Message: ".$this->input->post('message')."\n".
					"Phone: ".$this->input->post('phone')."\n".
					"How Heard: ".$this->input->post('howhear');
			$this->email->message($msgbody);
			$this->data['title']='Sending email...';
						$this->data['header']='Sending email now...';
						$this->data['message']=$this->email->send()?'Message was sent successfully!':'Error sending email!';
						$this->load->view('header',$this->data);
						$this->load->view('thanks',$this->data);
						$this->load->view('footer',$this->data);
					}
				}
			} //Close class
			?>
