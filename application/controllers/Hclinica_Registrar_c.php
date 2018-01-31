<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hclinica_Registrar_c extends CI_Controller {	
	function __Construct(){
	   parent::__construct();
	   $this->load->model('/laboratorio/Hclinica_Registrar_m','reg',TRUE);
	   $this->load->model('Basico_m','bas',TRUE);	
	   $this->load->helper('edad');
	}
	
	function consecutivoc(){
	$this->output->set_header('Content-type:application/json');	
	$condicion= array('id_consentimiento' => $this->security->xss_clean($this->input->post('id_consentimiento')) );
		$row=$this->bas->consultarf('*','historias',$condicion);
		if($row!=false){
		$output['info']=$row;
		$car=$row=$this->bas->consultarf('cargo','certiconcepto',$condicion);
		if($car != false){$output['cargo']=$car;}
		$output["err"]='1';	
		}else{
			$output["err"]='0';}
		echo json_encode($output);
		}	
	
	function tercerosc(){
	$this->output->set_header('Content-type:application/json');
	$output = array("a" => array());	
	$row=$this->reg->tercerosc($this->security->xss_clean($this->input->post('id_cliente')));
		if($row!=false){
		$output["a"]=$row;	
		$output["err"]='1';	
		}else{$output["err"]='0';}
		echo json_encode($output);
		}	
	
	function tercerosi(){
	    $condicion  = array('id_consentimiento' => $this->security->xss_clean($this->input->post('id_consentimiento')));

		$data['id_consentimiento'] = $this->security->xss_clean($this->input->post('id_consentimiento'));
		$data['id_cliente'] = $this->security->xss_clean($this->input->post('id_cliente'));
		$data['nom_tipidentificacion'] = $this->security->xss_clean($this->input->post('nom_tipidentificacion'));
		$data['primer_nombre'] = $this->security->xss_clean($this->input->post('primer_nombre'));
		$data['segundo_nombre'] = $this->security->xss_clean($this->input->post('segundo_nombre'));
		$data['primer_apellido'] = $this->security->xss_clean($this->input->post('primer_apellido'));
		$data['segundo_apellido'] = $this->security->xss_clean($this->input->post('segundo_apellido'));
		$data['nombre'] = $data['primer_nombre'].' '.$data['segundo_nombre'].' '.$data['primer_apellido'].' '.$data['segundo_apellido'];
		$data['telefono_fijo'] = $this->security->xss_clean($this->input->post('telefono_fijo'));
		$data['telefono_movil'] = $this->security->xss_clean($this->input->post('telefono_movil'));
	  	$data['direccion'] = $this->security->xss_clean($this->input->post('direccion'));
		$data['email'] = $this->security->xss_clean($this->input->post('email'));
		$data['sexo'] = $this->security->xss_clean($this->input->post('sexo'));
		$data['naturalde'] = $this->security->xss_clean($this->input->post('naturalde'));
		$data['ecivil'] = $this->security->xss_clean($this->input->post('ecivil'));
		$data['escolaridad'] = $this->security->xss_clean($this->input->post('escolaridad'));
		$data['jornada'] = $this->security->xss_clean($this->input->post('jornada'));
		$data['eps'] = $this->security->xss_clean($this->input->post('eps'));
		$data['arp'] = $this->security->xss_clean($this->input->post('arp'));
		$data['ciudad'] = $this->security->xss_clean($this->input->post('ciudad'));
		list($Y,$m,$d) = explode("-",$this->security->xss_clean($this->input->post('fechanac'))); 
		$data['fechanac']=$Y.'-'.$m.'-'.$d;
		$data['edad'] = CalculaEdad($Y,$m,$d);
		$data['prioridad'] = $this->security->xss_clean($this->input->post('prioridad'));
		$data['traalt'] = $this->security->xss_clean($this->input->post('traalt'));
		$data['espcon'] = $this->security->xss_clean($this->input->post('espcon'));
		$data['manali'] = $this->security->xss_clean($this->input->post('manali'));
		$data['brigada'] = $this->security->xss_clean($this->input->post('brigada'));
		$data['examen'] = $this->security->xss_clean($this->input->post('examen'));
		$sw = $this->security->xss_clean($this->input->post('sw'));
		$empresa = $this->security->xss_clean($this->input->post('empresa'));
		if($empresa == 'SI'){
			$data['id_empresa']=$data['id_cliente']; $data['nomempresa']=$data['nombre'];
		    //$data['id_empresal']=$data['id_cliente']; $data['nomempresal']=$data['nombre'];
			//
			$datai['id_cliente'] = $data['id_cliente'];
			$datai['nom_tipidentificacion'] = $data['nom_tipidentificacion'];
			$datai['telefono_fijo'] = $data['telefono_fijo'];
			$datai['telefono_movil'] = $data['telefono_movil'];
	  		$datai['direccion'] = $data['direccion'];
			$datai['email'] = $data['email'];
			$datai['nombre'] = $data['nombre'];
			$datai['empresa'] = 'si';
		//echo "Controler";	
		$row=$this->bas->insertar('terceros',$datai);
			//
			
			}else{
		$id_empresa = $this->security->xss_clean($this->input->post('id_empresa'));
		$id_empresa=explode('||',$id_empresa);  $data['id_empresa']=$id_empresa[0]; $data['nomempresa']=$id_empresa[1];
		}
		$id_empresal = $this->security->xss_clean($this->input->post('id_empresal'));
		$id_empresal=explode('||',$id_empresal);  $data['id_empresal']=$id_empresal[0]; $data['nomempresal']=$id_empresal[1];
		if($sw == 0){
		$data['fecha'] = date('Y-m-d');
		$token=date('d-n-g-W-j-u-Y-N-m-w-z-L-H-s-h');
		$token=str_replace ('-','',$token);
		$data['token'] = $token;
		//Inicio Verifico si tiene foto
		$ra='D:/wamp64/www/OneDrive/res/firmasa/'.$data['id_cliente'].'.jpg';
		$rb='D:/wamp64/www/OneDrive/res/fotosa/'.$data['id_cliente'].'.jpg';
		
		$datos = array( 'id_consentimiento'=>$data['id_consentimiento'],
					  'id_examen_lab'=>'20180127',
					  'precio'=>'0', 'llamado' => 'pendiente');
		if (file_exists($ra)){ if(!file_exists($rb)){
		  $row=$this->bas->insertar('examen_lab_hist',$datos);
			} }
		else{ 	
		  $row=$this->bas->insertar('examen_lab_hist',$datos);
		 }
		//Fin Foto y Firma
		$reshist=$this->reg->insert_historia('historias',$data);
		//
		$datab['id_consentimiento'] = $this->security->xss_clean($this->input->post('id_consentimiento'));
		$datac = array('id_consentimiento' => $this->security->xss_clean($this->input->post('id_consentimiento')),
		'cargo' => $this->security->xss_clean($this->input->post('cargo')));
		$this->db->insert('antfam',$datab);
		$this->db->insert('antper',$datab);
		$this->db->insert('conemferprof',$datab);
		$this->db->insert('examena',$datab);
		$this->db->insert('examenb',$datab);
		$this->db->insert('examenfisico',$datab);
		$this->db->insert('fuerza_muscular',$datab);
		$this->db->insert('ginecoobstetricos',$datab);
		$this->db->insert('habitos',$datab);
		$this->db->insert('inmunizaciones',$datab);
		$this->db->insert('marcha',$datab);
		$this->db->insert('reflejos',$datab);
		$this->db->insert('revsis',$datab);
		$this->db->insert('sensibilidad',$datab);
		$this->db->insert('tinnel',$datab);
		$this->db->insert('certiconcepto',$datac);
		//Historia Ant
		$rows = $this->reg->anterior($this->security->xss_clean($this->input->post('id_cliente')));
		if($rows != false){
		$condicion = array('id_consentimiento' => $rows['id_consentimiento']);
		//
		$campos="dipad, dimad, dihno, dihna, diabue, capad,  camad, cahno, cahna, cabue, hipad, himad, hihno, hihna, hiabue, pupad, pumad, puhno, puhna, puabue, mepad, memad, 
		mehno, mehna, meabue, canpad, canmad, canhno, canhna, canabue, ospad, osmad, oshno, oshna, osabue, alpad, almad, alhno, alhna, alabue, sopad, somad, sohno, sohna, 
		soabue, tupad, tumad, tuhno, tuhna, tuabue, acvpad, acvmad, acvhno, acvhna, acvabue, enfpad, enfmad, enfhno, enfhna, enfabue, alcpad, alcmad, alchno, alchna, alcabue, 
		lupad, lumad, luhno, luhna, luabue";
		$row=$this->bas->consultarf($campos,'antfam',$condicion);
		if($row != false){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('antfam', $row);}//
		$campos="congenitos,inmunoprevenibles,infecciosos,sistemicos,ojos,agudezavisual,oidos,nasofaringe,cardiovascular,pulmonar,gastrointestinal,genitourinario,neurologico,
		problemaspiel,osteomusculares,alergicos,toxicos,farmacologicos,quirurgicos,traumaticos,transfusiones,venereas,deformidades,farmacodependencia,hernias,varicocele,
		hemorroides,otras,especifique,enfprofesionales";
		$row=$this->bas->consultarf($campos,'antper',$condicion);
		if($row != false){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('antper', $row); }
		//
		$campos="enfprofesionales";
		$row=$this->bas->consultarf($campos,'conemferprof',$condicion);
		if($row != false){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('conemferprof', $row); }
		//for
		$campos="idant_accidente, empresa, fecha, causa, tipolesion, parteafectada, secuela, incapacidad";
		$res=$this->bas->consultar($campos,'conant_accidente',$condicion);
		if($res != false){
		foreach($res as $row){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('conant_accidente', $row);}}
		//for
		$campos="empresa, ocupacion, ano, ruido, ilum, rad, matpart, seg, erg, biol";
		$res=$this->bas->consultar($campos,'conhislab',$condicion);
		if($res != false){
		foreach($res as $row){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('conhislab', $row);}}
		//
		$campos="tetanos,fechat,fiebreamarilla,fechaf,influenza,fechai,hepatitis,fechah,malaria,fecham,pneumococo,fechap";
		$res = $this->bas->consultarf($campos,'inmunizaciones',$condicion);
			if($res != false){
		$this->db->where('id_consentimiento', $this->security->xss_clean($this->input->post('id_consentimiento')));
		$this->db->update('inmunizaciones', $res);}
		//
		
		}
		
		}else{
		$this->db->where($condicion);
		$reshist=$this->db->update('historias', $data);	
		}
		//
		if($reshist!=false){echo '{"err":"1"}';}else{echo '{"err":"1"}';}
		
	}
	
}