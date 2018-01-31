<style type="text/css">
  h2.cab{background:#eee; font-size:13px;text-align:center;margin: auto;border-bottom:1px dashed #999999; color:#333;padding:0.1em;}
  .bg-titu {
  background: #1ABB9C;
  height: 30px;
  text-align: center;
  color: white;
  font-family: verdana;
  padding-top: 5px;
  padding-bottom: 5px;
  /*! margin: auto; */
}
 td input.error{
  border-color:#3D7BCF; background:#DFEEFF;
 }
 td label.error{ display: none !important; }
     .form-group .error{border-color:#3D7BCF; background:#DFEEFF; }
.input-group .error{border-color:#3D7BCF; background:#DFEEFF; }

.titulo.x_title{
 border-bottom: 2px solid #4DA5DF;
 color:#4DA5DF;
}
</style>
                  <div>
                    
                  </div>
				    <div id="serviciosAsistenciales" >
                    <div class="x_title titulo" id="">
                          <h2 class="color-info">FORMATO REGISTRO Y ACTUALIZACION DE DATOS APARTAMENTO  *** PROPIETARIO ***</h2>
                    <div class="clearfix"></div>
                    </div>
					     <div class="x_content">     
                          <div class="row">
                            <button id="cargar_vista<?php echo $ale;?>" style="display: none;"> cargar Vista</button>
                            <form action="" method="POST" class="form-horizontal"  id="registro" name="registro" role="form">
                             <input type="hidden" name="sw" id="sw" value="" class="required">
                            
                            <div class="col-md-3">
                              <div class="form-group">
                            <label>Torre</label>
                            <select class="chosen-select required validar"  data-placeholder="Seleccione Torre"  name="nrotor" id="nrotor">
                              <option value=""></option>
                            </select>
                              <input value="1" id="codrol" name="codrol" type="hidden">
                              </div>
                            </div>
							
							<div class="col-md-3">
                              <div class="form-group">
                            <label>Apartamento</label>
                             <input class="form-control required" placeholder="Numero Apartamento"  id="codapt" name="codapt" type="text" maxlength="3" minlength="3" >
                          </div>
                            </div>
							
                            <div class="col-md-3">
							 <div class="form-group">
                               <label>Fecha Recibio Apartamento</label>
                                  <input name="entreg" class="form-control" id="entreg" placeholder="YYYY-MM-DD" value="" readonly>
                          </div>
                            </div>
							
							<div class="col-md-3">
                              <div class="form-group">
                            <label>Profesion</label>
                             <input class="form-control" placeholder="Profesion"  id="prfper" name="prfper" type="text">
                          </div>
                            </div>
							 <div class="col-md-3">
                            <div class="form-group">
                            <label> CC/ NIT</label>
                            <input class="form-control required" placeholder="CC/ NIT" id="codper" name="codper" type="text">
                          </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Tipo Indentificación </label>
                                   <select class="chosen-select required validar"  data-placeholder="Seleccione Tipo Indentificación"  name="coddoc" id="coddoc">
                                  <option value=""></option>                                   
                                </select>                           
                               </div>
                            </div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label>Primer Nombre </label>
                                <input class="form-control required" placeholder="Primer Nombre"  id="nomuno" name="nomuno" type="text">
                               </div>
                            </div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label> Segundo Nombre </label>
                                <input class="form-control" placeholder="Segundo Nombre"  id="nomdos" name="nomdos" type="text">
                               </div>
                            </div>
							<div class="clearfix"></div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label>Primer Apellido </label>
                                <input class="form-control required" placeholder="Primer Apellido"  id="apeuno" name="apeuno" type="text">
                               </div>
                            </div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label> Segundo Apelllido </label>
                                <input class="form-control" placeholder="Segundo Apelllido"  id="apedos" name="apedos" type="text">
                               </div>
                            </div>
							 <div class="col-md-3">
                              <div class="form-group">
                                <label>Sexo :</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Sexo"  name="sexper" id="sexper">
                                  <option value=""></option>
                                  <option value="M">Masculino</option>
                                  <option value="F">Femenino</option>
                                </select>
                                </div>
                            </div>
							 <div class="col-md-3">
                              <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input class="form-control required" placeholder="YYYY-MM-DD"  data-mask="date" id="fecnac" name="fecnac" type="text">
                               </div>
                            </div>
							<div class="clearfix"></div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label>  Telefono: </label>
                                <input class="form-control required" placeholder="Telefono"  id="telper" name="telper" type="text">
                               </div>
                            </div>
							 <div class="col-md-3">
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control email" placeholder="Email"   id="emlper" name="emlper" type="text">

                               </div>
                            </div>
							<div class="col-md-3">
                              <div class="form-group">
                                <label> Ciudad </label>
                                <input class="form-control" placeholder="Ciudad"  id="codciu" name="codciu" type="text" value="CARTAGENA DE INDIAS">
                               </div>
                            </div>
							
							<div class="col-md-3">
                              <div class="form-group">
                                <label>Nacionalidad</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Pais"  name="codnac" id="codnac">
                                  <option value=""></option>
                                </select>
                               </div>
                            </div>
							 <div class="clearfix"></div>
                             <div class="col-md-3">
                              <div class="form-group">
                                <label> Estado Civil  :</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Estado Civil"  name="estciv" id="estciv">
                                  <option value=""></option>
                                     <option value="so">SOLTERO(A)</option>
                                     <option value="ca">CASADO(A)</option>
                                     <option value="vi">VIUDO(A)</option>
                                     <option value="ul">UNION LIBRE</option>
                                </select>
								</div>
                            </div>
								<div class="col-md-3">
                              <div class="form-group">
                                <label> Numero de Hijos </label>
                                <input class="form-control" placeholder="# Hijos - 0 Si no tiene"  id="hijper" name="hijper" type="text"  minlength="1" maxlength="2" required >
                               </div>
                            </div>
							
							<div class="col-md-3">
                              <label> Eps </label>
                              <div class="capa-eps" style="width: 100%">
                              <div class="input-group">
                                  
                                 <select class="chosen-select required validar"  data-placeholder="Seleccione Eps"  name="codeps" id="codeps">
                                  <option value=""></option>
                                 
                                </select>
                                <span class="input-group-addon" id="agregar_nueva_eps"><i class="fa fa-plus"></i></span>
                                 
                                 <!--  -->
                              </div>
                            </div>
                            <div class="capa-aad-eps" style="display: none;">
                               <div class="input-group">
                                 <input type="text" class="form-control" id="neweps" placeholder="agregar Nueva Eps" aria-describedby="check-eps">
                                <span class="input-group-addon btn-success" id="check-eps"><i class="fa fa-check"></i></span>
                                 <span class="input-group-addon btn-danger" id="cancel-eps"><i class="fa fa-times"></i></span>
                              </div>
                            </div> 

                            
                            </div>
							
							
							
							<div class="col-md-3">
                              <div class="form-group">
                                <label> Direccion </label>
                                <input class="form-control" placeholder="Direccion"  id="dirper" name="dirper" type="text">
                               </div>
                            </div>
							 <div class="clearfix"></div>
							 <div class="row">
                        <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                          <button type="button"  id="guardar<?php echo $ale;?>" class="btn btn-success">
                            <i class="fa fa-save"></i> Guardar</button>
                               
                        </div>
                      </div>
                      
                      </div>
							
</form>
<script>
        $(document).ready(function(){
		$('#coddoc,#sexper,#estciv,#codeps,#codnac,#nrotor').chosen({allow_single_deselect:true,no_results_text: "Resultado no encontrado!"});
		consultarTipoIdentificacion();
		$('#entreg').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose:true
		});
		
		$('#guardar<?php echo $ale;?>').click(function(){         
                              $.ajax({
                                url:'/Terceros_c/add',
                                type:'POST',
                                dataType:'JSON',
                                data:$('form#registro').serialize(),
                                success:function(ans){
                                    if(ans.err=='1'){
                                       toastr.success('Datos Insertados Satisfactoriamente');                                                     
                                     }else toastr.error(ans.msg);

                                }
                              });
 

                            });  
							
				$("[data-mask='date']").mask("9999-99-99");	
				
				$('#agregar_nueva_eps').click(function(){
                            $('.capa-eps').css('display','none');
                            $('.capa-aad-eps').css('display','block');
                            $('#neweps').val('').addClass('required');
                            $('#codeps').val('').trigger('chosen:updated');
                          });
						  
				 $('#check-eps').click(function(){
                            var valor=$('#neweps').val();
                            if(valor!=''){
                                $.post('/Eps_c/addEps',{"codeps":valor},function(ans){
                                  if(ans.err=='1'){
                                      $('.capa-eps').css('display','block');
                                      $('.capa-aad-eps').css('display','none');
                                      cargarEps();
                                      $('#codeps').val(valor).trigger('chosen:updated');
                                      $('#neweps').val('').removeClass('required');
                                  }

                                },'JSON');
                            }else{
                              $('#neweps').addClass('error');
                            }
                          });
				
				 $('#cancel-eps').click(function(){
                             $('.capa-eps').css('display','block');
                            $('.capa-aad-eps').css('display','none');
                             $('#eps').val('').trigger('chosen:updated');
                             $('#neweps').val('').removeClass('required');

                          });		  
				cargarEps();
				cargarPai();
				cargarTorre();	
				
				$('#codper').keyup(function(event){
                            if(event.which == 13){
                                cargarDatosUsuario($(this).val());                                
                              }
                            });	  		  		
							
				 $('#codper').blur(function(){
                             cargarDatosUsuario($('#codper').val());   
                          });				
       }); 
	<!--   Fin-->
	   
	   function consultarTipoIdentificacion(){                 
                       $('#coddoc').empty();
                        $('#coddoc').html('<option value=""></option');             
                       
                         $.ajax({
                         url:'/Terceros_c/tip_ide',
                         type:'POST',
                         dataType:'JSON',
                         data:{"tipper":"1"},
                         success:function(ans){
                          console.log(ans.e);
                          if(ans.e.err=='1'){     
                          console.log('si hay');   
                               for(x in ans.a){
                                
                                $('<option/>').val(ans.a[x].codtip).text(ans.a[x].dsctip).appendTo('#coddoc');
                               }         
                                            
                          }
                           $('#coddoc').trigger('chosen:updated');
                         } 
                      });
                    }
						
		function cargarEps(){
                      $('#codeps').empty();
                      $('#codeps').html('<option value=""></option>');
                      $.ajax({
                        url:'/Eps_c/eps',
                        type:'POST',
                        dataType:'JSON', 
                        async: false,                  
                        success:function(ans){
                          if(ans.e.err=='1'){
                            console.log(ans.a)
                            for(i in ans.a){ $('<option/>').val(ans.a[i].nomeps).text(ans.a[i].nomeps).appendTo('#codeps');}
                          }
                          $('#codeps').trigger('chosen:updated');
                        }
                      });
                    }	
		function cargarPai(){
                      $('#codnac').empty();
                      $('#codnac').html('<option value=""></option>');
                      $.ajax({
                        url:'/Geografia_c/pais',
                        type:'POST',
                        dataType:'JSON', 
                        async: false,                  
                        success:function(ans){
                          if(ans.e.err=='1'){
                            console.log(ans.a)
                            for(i in ans.a){ $('<option/>').val(ans.a[i].codpai).text(ans.a[i].nompai).appendTo('#codnac');}
                          }
                          $('#codnac').trigger('chosen:updated');
                        }
                      });
                    }	
					
	function cargarTorre(){
                      $('#nrotor').empty();
                      $('#nrotor').html('<option value=""></option>');
                      $.ajax({
                        url:'/Geografia_c/torres',
                        type:'POST',
                        dataType:'JSON', 
                        async: false,                  
                        success:function(ans){
                          if(ans.e.err=='1'){
                            console.log(ans.a)
                            for(i in ans.a){ $('<option/>').val(ans.a[i].nrotor).text(ans.a[i].nrotor).appendTo('#nrotor');}
                          }
                          $('#nrotor').trigger('chosen:updated');
                        }
                      });
                    }	
	function cargarDatosUsuario(codper){
                      $.ajax({
                         url:'/Terceros_c/tercerosc/',
                         type:'POST',
                         dataType:'JSON',
                         data:{"codper":codper},
                         success:function(ans){
                          if(ans.err=='1'){                           
                            $('#nom_tipidentificacion').val(ans.a.nom_tipidentificacion).trigger('chosen:updated'); 		
							
                            $('#nomuno').val(ans.a.nomuno); 
                            $('#segundo_nombre').val(ans.a.segundo_nombre);  
                            $('#primer_apellido').val(ans.a.primer_apellido); 
                            $('#segundo_apellido').val(ans.a.segundo_apellido);  
                            $('#telefono_fijo').val(ans.a.telefono_fijo); 
                            $('#telefono_movil').val(ans.a.telefono_movil);  
                            $('#direccion').val(ans.a.direccion); 
                            $('#email').val(ans.a.email); 
                            $('#sexo').val(ans.a.sexo).trigger('chosen:updated');  
                            $('#naturalde').val(ans.a.naturalde); 
                            $('#ecivil').val(ans.a.ecivil).trigger('chosen:updated');  
                            $('#escolaridad').val(ans.a.escolaridad).trigger('chosen:updated');   
                            $('#jornada').val(ans.a.jornada).trigger('chosen:updated');   
                            $('#eps').val(ans.a.eps).trigger('chosen:updated');  
                            $('#arp').val(ans.a.arp).trigger('chosen:updated'); 
                            $('#ciudad').val(ans.a.ciudad);  
                            $('#fechanac').val(ans.a.fechanac);  
                            $('#id_cliente').removeClass('error');                    
                           
                          }else{
                            $('#id_cliente').addClass('error');
                            $('#nom_tipidentificacion').val('').trigger('chosen:updated'); 
                            $('#primer_nombre').val(''); 
                            $('#segundo_nombre').val('');  
                            $('#primer_apellido').val(''); 
                            $('#segundo_apellido').val('');  
                            $('#telefono_fijo').val(''); 
                            $('#telefono_movil').val('');  
                            $('#direccion').val(''); 
                            $('#email').val(''); 
                            $('#sexo').val('').trigger('chosen:updated');  
                            $('#naturalde').val(''); 
                            $('#ecivil').val('').trigger('chosen:updated');  
                            $('#escolaridad').val('').trigger('chosen:updated');   
                            $('#jornada').val('').trigger('chosen:updated');   
                            $('#eps').val('').trigger('chosen:updated'); 
                            $('#arp').val('').trigger('chosen:updated');   
                            $('#ciudad').val('');  
                            $('#fechanac').val('');
                            toastr.warning('!Este Usuario No Existe¡, si desea agregarlo como un nuevo paciente haga caso omiso a este mensaje de lo contrario por favor  verifique el usuario');      
                          }


                         } 
                      });
                    }													
    </script>