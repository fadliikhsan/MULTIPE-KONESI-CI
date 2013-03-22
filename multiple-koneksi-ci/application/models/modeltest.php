<?php 
class Modeltest extends CI_Model{
	
	function Modeltest() {
        parent::__construct();		
    }
	
    function getDataTest1(){		
		$this->mahasiswa 	= $this->load->database('default', TRUE); 	/*koneksi database untuk mahasiswa*/
		$mahasiswa1 = $this->mahasiswa->get('mahasiswa')->result();
		return $mahasiswa1;
    }
		
	function getDataTest2(){	
		$this->d_mahasiswa	= $this->load->database('stats', TRUE); 	/*koneksi database untuk d_mahasiswa*/
		$mahasiswa2 = $this->d_mahasiswa->get('mahasiswa')->result();
		return $mahasiswa2;
    }
}
?>