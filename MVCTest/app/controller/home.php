<?php	
class Home extends Controller {

    public function index(){
        $name = "Marc";
        $this->view("home/index", ["name" => $name])
    }

}
?>
