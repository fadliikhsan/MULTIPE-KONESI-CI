<?php
class Test extends CI_Controller{
    function __construct(){
        parent::__construct();   		
		$this->load->model('modeltest');
    }
    
    function index(){      		
        $mahasiswa 	= $this->modeltest->getDataTest1();
        echo "DATA SATU : <br />";
		print_r ($mahasiswa);
		echo "<br /><br />";
		
		$mahasiswa2 	= $this->modeltest->getDataTest2();
        echo "DATA DUA : <br />";
		print_r ($mahasiswa2);
		echo "<br />";
    }      
}
?>