<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Geografia_c extends CI_Controller {
	   function __Construct(){
	   parent::__construct();
	   $this->load->model('Basico_m','bas',TRUE);
	   /* if($this->session->userdata('user') == ''){ 
			echo  "<script language=\"JavaScript\">   alert(\"SU SESION A CADUCA INGRESE NUEVAMENTE\") </script>";
			exit(); }*/
	}
		
	function pais(){
	$this->output->set_header('Content-type:application/json');
	$res=$this->bas->consultara('*','actpai');
	if($res!=false){
	$output["a"]=$res;
	$output["e"] = array("err"=>"1");
	}else{
	$output["e"] = array("err"=>"0");
	}
	 echo json_encode($output);
	}
	
	function torres(){
	$this->output->set_header('Content-type:application/json');
	$res=$this->bas->consultara('nrotor','torres');
	if($res!=false){
	$output["a"]=$res;
	$output["e"] = array("err"=>"1");
	}else{
	$output["e"] = array("err"=>"0");
	}
	 echo json_encode($output);
	}
	
	
	  function addEps(){
      $data=array('nomeps'=>$this->input->post('eps'));
      $resp=$this->bas->insertar('tabeps',$data);
      echo ($resp!=false)?'{"err":"1"}':'{"err":"0","msg":" hubo un error"}';
    }
   
 }