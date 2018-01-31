<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hclinica_Registrar_m extends CI_Model {	
	function __Construct(){
	   parent::__construct();
	}
	
	function tercerosc($id_cliente){//
		$this->db->select('id_cliente,nom_tipidentificacion,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,telefono_fijo,telefono_movil,
	  direccion,email,sexo, naturalde,ecivil,escolaridad,jornada,trim(eps) eps,trim(arp) arp,ciudad,fechanac,nombre');
		$this->db->from('historias');
		$this->db->where('id_cliente =',$id_cliente);	
		$this->db->order_by('fecha', 'DESC');
		$this->db->limit(0, 1);
		$res = $this->db->get();
	    //echo $this->db->last_query();
		//exit();
		if($res->num_rows()>0){
			return $res->row_array();
		}else{
			return false; //No existen item pricipales	
		}
	}
	
	function insert_historia($tabla,$data){
	$this->db->insert($tabla,$data);
	if($this->db->affected_rows() > 0){return true;}else{return false;}
	}
	
	function consecutivoc($id_consentimiento){
	$this->db->select('id_cliente');
		$this->db->from('historias');
		$this->db->where('id_consentimiento',$id_consentimiento);	
		$res = $this->db->get();
	    //echo $this->db->last_query();
		//exit();
		if($res->num_rows()>0){ return true; }else{ return false;}
		}
		
	function anterior($id_cliente){
		$this->db->select('id_consentimiento');
		$this->db->where('id_cliente =',$id_cliente);	
		$this->db->order_by('fecha', 'DESC');
		$res = $this->db->get('historias',1,1);
		if($res->num_rows()>0){ return $res->row_array(); }else{ return false;}
	}	
	
} 