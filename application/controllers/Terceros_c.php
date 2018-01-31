<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Terceros_c extends CI_Controller {
	   function __Construct(){
	   parent::__construct();
	   $this->load->model('Terceros_m','ter',TRUE);
	   $this->load->model('Basico_m','bas',TRUE);
	   $this->load->helper('form');
	   $this->load->helper('url');	
	   /* if($this->session->userdata('user') == ''){ 
			echo  "<script language=\"JavaScript\">   alert(\"SU SESION A CADUCA INGRESE NUEVAMENTE\") </script>";
			exit(); }*/
	}
	
	
	function tip_ide(){
	$this->output->set_header('Content-type:application/json');
	$res=$this->bas->consultara('*','tipdoc');
	if($res!=false){
	$output["a"]=$res;
	$output["e"] = array("err"=>"1");
	}else{
	$output["e"] = array("err"=>"0");
	}
	 echo json_encode($output);
	}
	
	public function add()
  {  
    
	$dataa = array(
	 "codapt" => $this->security->xss_clean($this->input->post('codapt')),
     "entreg" => $this->security->xss_clean($this->input->post('entreg')),
	 "codper" => $this->security->xss_clean($this->input->post('codper')),
	 "nrotor" => $this->security->xss_clean($this->input->post('nrotor'))
	);
	$this->db->insert('aparto',$dataa);
	
	$datab = array(
      "codper" => $this->security->xss_clean($this->input->post('codper')),
      "nomuno" => $this->security->xss_clean($this->input->post('nomuno')),
      "nomdos" => $this->security->xss_clean($this->input->post('nomdos')),
      "apeuno" => $this->security->xss_clean($this->input->post('apeuno')),
      "apedos" => $this->security->xss_clean($this->input->post('apedos')),
      "coddoc" => $this->security->xss_clean($this->input->post('coddoc')),
      "sexper" => $this->security->xss_clean($this->input->post('sexper')),
      "codciu" => $this->security->xss_clean($this->input->post('codciu')),
      "estciv" => $this->security->xss_clean($this->input->post('estciv')),
      "codeps" => $this->security->xss_clean($this->input->post('codeps')),
      "codnac" => $this->security->xss_clean($this->input->post('codnac')),
	  "codrol" => $this->security->xss_clean($this->input->post('codrol')),
      "fecnac" => $this->security->xss_clean($this->input->post('fecnac')),
      "emlper" => $this->security->xss_clean($this->input->post('emlper')),
      "telper" => $this->security->xss_clean($this->input->post('telper')),
      "dirper" => $this->security->xss_clean($this->input->post('dirper')),
      "hijper" => $this->security->xss_clean($this->input->post('hijper')),
	  "prfper" => $this->security->xss_clean($this->input->post('prfper'))
    );
    $this->db->insert('actres',$datab);
    if ($this->db->affected_rows()) {
      //json_response(array('success' => TRUE, 'msg' => 'Tipo de contacto registrado'));
	  $output["e"] = array("err"=>"1");
    }
    else{
      $output["e"] = array("err"=>"1");
	  //json_response(array('success' => FALSE, 'msg' => 'Tipo de contacto No registrado'));
    }
 echo json_encode($output);
  }


function tercerosc(){
	$this->output->set_header('Content-type:application/json');
	$output = array("a" => array());
	$condicion = array("codper" => $this->security->xss_clean($this->input->post('codper')));	
	$row=$this->bas->consultar('*','actres',$condicion);
		if($row!=false){
		$output["a"]=$row;	
		$output["err"]='1';	
		}else{$output["err"]='0';}
		echo json_encode($output);
		}	
	
	function eps(){
	$this->output->set_header('Content-type:application/json');
	$res=$this->ter->eps();
	if($res!=false){
	$output["a"]=$res;
	$output["e"] = array("err"=>"1");
	}else{
	$output["e"] = array("err"=>"0");
	}
	 echo json_encode($output);
	}
	
	
	  function addEps(){
      $data=array('eps'=>$this->input->post('eps'));
      $resp=$this->bas->insertar('eps',$data);
      echo ($resp!=false)?'{"err":"1"}':'{"err":"0","msg":" hubo un error"}';
    }
   
 }