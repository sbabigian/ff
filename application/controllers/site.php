<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *     http://example.com/index.php/welcome
   *  - or -  
   *     http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js",JS_PATH."slides.min.jquery.js",JS_PATH."index.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Welcome to FranFerger.com"
     );
    $this->load->view('header',$this->data);
    $this->load->view('index',$this->data);
  }
  
  public function collections()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js",JS_PATH."slides.min.jquery.js",JS_PATH."index.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Collection"
     );
    $this->load->view('header',$this->data);
    $this->load->view('collections',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function lookbook()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Look Book"
     );
    $this->load->view('header',$this->data);
    $this->load->view('lookbook',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function clothing()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Clothing"
     );
    $this->load->view('header',$this->data);
    $this->load->view('clothing',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function jewelry()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Jewelry"
     );
    $this->load->view('header',$this->data);
    $this->load->view('jewelry',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function starched1905()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Starched1905"
     );
    $this->load->view('header',$this->data);
    $this->load->view('starched1905',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function about()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - About"
     );
    $this->load->view('header',$this->data);
    $this->load->view('about',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function blog()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Welcome to FranFerger.com"
     );
    $this->load->view('header',$this->data);
    $this->load->view('blog',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function contact()
  {
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Contact Info"
     );
    $this->load->view('header',$this->data);
    $this->load->view('contact',$this->data);
    $this->load->view('footer',$this->data);
  }
  
  public function fall()
  {
    $this->data = array(
      'css'              => "admin", // set whether to use main css or admin css or something else
      'xcss'              => array(CSS_PATH."main.css", JS_PATH."fancybox/jquery.fancybox-1.3.4.css"), // add links to any additional style sheets here (ie: array("addstyle1.css", "addstyle2.css"))
      'xjs'              => array(JS_PATH."jquery-1.7.min.js",JS_PATH."slides.min.jquery.js", JS_PATH."fancybox/jquery.fancybox-1.3.4.pack.js", JS_PATH."season.js"), // add links to any additional scripts here (ie: array("addscript1.js", "addscript2.js"))
      'active_nav'          => "admin", // set the active class for this nav item
      'title'              => "Fran Ferger - Fall Collection"
     );
    $this->load->view('header',$this->data);
    $this->load->view('fall',$this->data);
    $this->load->view('footer',$this->data);
  }
  
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */