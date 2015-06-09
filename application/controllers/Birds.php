<?Php
//birds.php
class Birds extends CI_Controller{
 
  function __construct() {
        parent:: __construct();
         $this->load->model('birds_model');
  }
  public function index(){
    $this->load->view('cliente/teste');
  }
 
  public function get_birds(){
   
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->birds_model->get_bird($q);
    }
  }
}