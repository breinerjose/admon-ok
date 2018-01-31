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
                          <h2 class="color-info">Crear Historia Clinica</h2>
             
                    <div class="clearfix"></div>
                    </div>
                    <div class="x_content">     
                          <div class="row">
                            <button id="cargar_vista<?php echo $ale;?>" style="display: none;"> cargar Vista</button>
                            <form action="" method="POST" class="form-horizontal"  id="historia" name="historia" role="form">
                              <input type="hidden" name="sw" id="sw" value="" class="required">
                            
                            <div class="col-md-6">
                              <div class="form-group">
                            <label>Consecutivo:</label>
                             <input class="form-control required" placeholder="Consecutivo"  id="id_consentimiento" name="id_consentimiento" type="text">
                          </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tipo Examen :</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Tipo Examen"  name="examen" id="examen" style="width:10em;" >
                                  <option value=""></option>
                               
                                </select>

                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-md-3">
                               <label>Empresa</label> <br>
                                 <div class="switch-small"  id="cabe-empresa" data-on-label="SI" data-off-label="NO">
                            <input name="" id="empresa" type="checkbox" class="emp"  />
                          </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                            <label>  Empresa Factura:</label>
                            <select class="chosen-select required validar"  data-placeholder="Seleccione Empresa Factura"  name="id_empresa" id="id_empresa">
                                  <option value=""></option>
                                 
                                </select>
                          </div>
                            </div>
                             <div class="col-md-3">
                              <div class="form-group">
                            <label> Profesiograma:</label>
                            <select class="chosen-select"  data-placeholder="Seleccione Profesiograma"  name="codcrg" id="codcrg">
                                  <option value=""></option>
                            </select>
                          </div>
                            </div> 
                             <div class="clearfix"></div>
                             <div class="col-md-12">
                                 <label> Empresa Labora:</label>
                                 <div class="capa-emp-lab" style="width: 100%">
                              <div class="input-group">
                                  
                                 <select class="chosen-select required validar"  data-placeholder="Seleccione Empresa Labora"  name="id_empresal" id="id_empresal">
                                  <option value=""></option>
                            </select>
                                <span class="input-group-addon" id="agregar_nueva_emp_lab"><i class="fa fa-plus"></i></span>
                                 
                                 <!--  -->
                              </div>
                            </div>
                            <div class="capa-aad-emp-lab" style="display: none;">
                               <div class="input-group">
                                 <input type="text" class="form-control" id="newemplab" placeholder="agregar Nueva Empresa donde Labora" aria-describedby="check-emp-lab">
                                <span class="input-group-addon btn-success" id="check-emp-lab"><i class="fa fa-check"></i></span>
                                 <span class="input-group-addon btn-danger" id="cancel-emp-lab"><i class="fa fa-times"></i></span>
                              </div>
                            </div> 
                            

                              
                            </div>
                             <div class="clearfix"></div>
                                                     
                            <div class="col-md-6">
                            <div class="form-group">
                            <label> CC/ NIT</label>
                            <input class="form-control required" placeholder="CC/ NIT" id="id_cliente" name="id_cliente" type="text">
                          </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tipo Indentificación </label>
                                   <select class="chosen-select required validar"  data-placeholder="Seleccione Tipo Indentificación"  name="nom_tipidentificacion" id="nom_tipidentificacion">
                                  <option value=""></option>                                   
                                </select>                           
                               </div>
                            </div>
                             <div class="clearfix"></div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Primer Nombre </label>
                                <input class="form-control required" placeholder="Primer Nombre"  id="primer_nombre" name="primer_nombre" type="text">
                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label> Segundo Nombre </label>
                                <input class="form-control" placeholder="Segundo Nombre"  id="segundo_nombre" name="segundo_nombre" type="text">
                               </div>
                            </div>
                             <div class="clearfix"></div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Primer Apellido </label>
                                <input class="form-control required" placeholder="Primer Apellido"  id="primer_apellido" name="primer_apellido" type="text">
                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label> Segundo Apelllido </label>
                                <input class="form-control" placeholder="Segundo Apelllido"  id="segundo_apellido" name="segundo_apellido" type="text">
                               </div>
                            </div>
                             <div class="clearfix"></div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label>Sexo :</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Sexo"  name="sexo" id="sexo">
                                  <option value=""></option>
                                  <option value="M">Masculino</option>
                                  <option value="F">Femenino</option>
                                </select>

                                </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control email" placeholder="Email"   id="email" name="email" type="text">

                               </div>
                            </div>
                             <div class="clearfix"></div>
                               <div class="col-md-6">
                              <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input class="form-control required" placeholder="YYYY-MM-DD"  data-mask="date" id="fechanac" name="fechanac" type="text">

                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>  Natural De </label>
                                <input class="form-control required" placeholder="Natural De"  id="naturalde" name="naturalde" type="text">
                               </div>
                            </div>
                             <div class="clearfix"></div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label> Estado Civil  :</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Estado Civil"  name="ecivil" id="ecivil">
                                  <option value=""></option>
                                     <option value="so">SOLTERO</option>
                                     <option value="ca">CASADO</option>
                                     <option value="vi">VIUDO(A)</option>
                                     <option value="ul">UNION LIBRE</option>
                                </select>

                                </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Cargo:</label>
                                <input class="form-control" placeholder="Cargo"  id="cargo" name="cargo" type="text">                        
                                </div>
                            </div>
                             <div class="clearfix"></div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label>Escolaridad:</label>
                                <select class="chosen-select required validar"  data-placeholder="Seleccione Escolaridad"  name="escolaridad" id="escolaridad">
                                  <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="P">P</option>
                                    <option value="B">B</option>
                                    <option value="TCO">TCO</option>
                                    <option value="TGO">TGO</option>
                                    <option value="U">U</option>
                                </select>

                                </div>
                            </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label>Jornada:</label>
                                <select class="chosen-select"  data-placeholder="Seleccione Jornada"  name="jornada" id="jornada">
                                  <option value=""></option>
                                   <option value="DIU">DIURNA</option>
                                   <option value="NOC">NOCTURNA</option>
                                </select>

                                </div>
                            </div>
                             <div class="clearfix"></div>
                             <div class="col-md-6">
                              <label> Eps </label>
                              <div class="capa-eps" style="width: 100%">
                              <div class="input-group">
                                  
                                 <select class="chosen-select required validar"  data-placeholder="Seleccione Eps"  name="eps" id="eps">
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
                            <div class="col-md-6">
                              <label> Arl </label>
                              <div class="capa-arp" style="width: 100%">
                              <div class="input-group">
                                  
                                 <select class="chosen-select"  data-placeholder="Seleccione Arp"  name="arp" id="arp">
                                  <option value=""></option>
                                  
                                </select>
                                <span class="input-group-addon" id="agregar_nueva_arp"><i class="fa fa-plus"></i></span>
                                 
                                 <!--  -->
                              </div>
                            </div>
                            <div class="capa-aad-arp" style="display: none;">
                               <div class="input-group">
                                 <input type="text" class="form-control" id="newarp" placeholder="agregar Nueva Arp" aria-describedby="check-arp">
                                <span class="input-group-addon btn-success" id="check-arp"><i class="fa fa-check"></i></span>
                                 <span class="input-group-addon btn-danger" id="cancel-arp"><i class="fa fa-times"></i></span>
                              </div>
                            </div> 

                            
                            </div>
                            
                             <div class="col-md-6">
                              <div class="form-group">
                                <label> Dirección </label>
                                <input class="form-control required" placeholder="Direccion"  id="direccion" name="direccion" type="text">
                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label> Ciudad </label>
                                <input class="form-control required" placeholder="Ciudad"  id="ciudad" name="ciudad" type="text">
                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Telefono Fijo  </label>
                                <input class="form-control" placeholder="Telefono Fijo" data-mask="phone" id="telefono_fijo" name="telefono_fijo" type="text">
                               </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Telefono Movil  </label>
                                <input class="form-control required" placeholder="Telefono Movil" data-mask="celular"  id="telefono_movil" name="telefono_movil" type="text">
                               </div>
                            </div>
                          </form>
                            <div class="col-md-2">
                               <label>prioridad  </label><br>
                                 <div class="switch-small"  id="cabe-prioridad" data-on-label="SI" data-off-label="NO">
                            <input name="prioridad" id="prioridad" type="checkbox" class="histo"  />
                          </div>
                            </div>
                            <div class="col-md-2">
                             <label> Trabajo en  Altura  </label><br>
                                 <div class="switch-small"  id="cabe-traalt" data-on-label="SI" data-off-label="NO">
                            <input name="traalt" id="traalt" type="checkbox" class="histo"  />
                          </div>
                            </div>
                            <div class="col-md-3">
                                <label>Espacios Confinados</label><br>
                                 <div class="switch-small"  id="cabe-espcon" data-on-label="SI" data-off-label="NO">
                            <input name="espcon" id="espcon" type="checkbox" class="histo"  />
                          </div>
                            </div>
                            <div class="col-md-3">
                               <label> Manipulacion de Alimentos</label> <br>
                                 <div class="switch-small"  id="cabe-manali" data-on-label="SI" data-off-label="NO">
                            <input name="manali" id="manali" type="checkbox" class="histo"  />
                          </div>
                            </div>
                             <div class="col-md-2">
                               <label>Brigada</label> <br>
                                 <div class="switch-small"  id="cabe-brigada" data-on-label="SI" data-off-label="NO">
                            <input name="brigada" id="brigada" type="checkbox" class="histo"  />
                          </div>
                            </div>
                            

                            
                            
                                       
                          </div>
                             <br>
                      <div class="row">
                        <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                          <button type="button" id="generar_historia<?php echo $ale;?>" class="btn btn-success">
                            <i class="fa fa-save"></i> Generar Historia</button>
                               
                        </div>
                      </div>
                      
                      </div>
                          

                       
                
                      

                    </div>
                  </div>
                  <script type="text/javascript">
                var id_consentimiento_enviar; var nrcli_enviar; var valor_anterior; var id_cliente_anterior='';
                    $(document).ready(function(){
                        jQuery.validator.messages.required = "";  

                        $.validator.setDefaults({ ignore: ":hidden:not(select)" });
                   $('#cabe-empresa,#cabe-prioridad,#cabe-traalt,#cabe-espcon,#cabe-manali,#cabe-brigada').bootstrapSwitch();
                          cargarClientes();
                          cargarTipoexamen();
                          consultarTipoIdentificacion();
                         

                          $("[data-mask='date']").mask("9999-99-99");
                          $("[data-mask='phone']").mask("(999)9999999");
                          $("[data-mask='celular']").mask("9999999999");

                             $('#sexo,#ecivil,#escolaridad,#jornada,#eps,#arp').chosen({no_results_text: "Resultado no encontrado!"});
                             $('#id_empresal,#codcrg,#nom_tipidentificacion').chosen({allow_single_deselect:true,no_results_text: "Resultado no encontrado!"});

                    $('#id_empresa').chosen({no_results_text: "Resultado no encontrado!"}).on("change", function (evt, params) { 
                        if($(this).val()!=''){    
                           cargarProseiograma($(this).val());
                        }
                                  
                                 
                                });





                              $('#examen').chosen({no_results_text: "Resultado no encontrado!"});

                          $('#cabe-prioridad,#cabe-traalt,#cabe-espcon,#cabe-manali,#cabe-brigada').on('switch-change', function (e, data) {
                                 var id=e.target.id;
                                 var res=id.split('-');
                                 var elemento=res[1];
                                 var $el = $(data.el)
                                  , value = data.value;                                 
                                  if(value){                             
                                     $('#'+elemento).attr('checked','checked'); 
                                                                
                                  }else{
                                   $('#'+elemento).removeAttr('checked');
                                   
                                  }
                            });    
							
							
							 $('#cabe-empresa').on('switch-change', function (e, data) {
                                 var id=e.target.id;
                                 var res=id.split('-');
                                 var elemento=res[1];
                                 var $el = $(data.el)
                                  , value = data.value;                                 
                                  if(value){                             
                                     $('#'+elemento).attr('checked','checked'); 
									 $('#id_empresa').removeClass('required error validar');
									 $('#id_empresa').val('').prop('disabled',true).trigger('chosen:updated');	
                                                                
                                  }else{
                                   $('#'+elemento).removeAttr('checked');
								    
									
									 $('#id_empresa').addClass('required validar');
									 $('#id_empresa').val('').prop('disabled',false).trigger('chosen:updated');
                                   
                                  }
                            });

                          $('#id_cliente').keyup(function(event){
                            if(event.which == 13){
                              id_cliente_anterior=$(this).val();
                                cargarDatosUsuario($(this).val());                                
                              }
                            });
                           $('#id_consentimiento').keyup(function(event){
                            if(event.which == 13){
                              if($(this).val()!=''){
                                valor_anterior=$(this).val();
                                consultarConsecutivo($(this).val());   

                                 $(this).blur();                               
                              }
                              }
                            });
                          
                          $('#id_consentimiento').blur(function(){

                            if($('#id_consentimiento').val()!=''&&$('#id_consentimiento').val()!=valor_anterior){
                             consultarConsecutivo($('#id_consentimiento').val()); 
                            }
                            
                          });

                          $('#id_cliente').blur(function(){
                            if($('#id_cliente').val()!=id_cliente_anterior){
                              id_cliente_anterior=$('#id_cliente').val();
                             cargarDatosUsuario($('#id_cliente').val());   
                            }

                          });
                          $('#cargar_vista<?php echo $ale;?>').click(function(){
                            var var1=id_consentimiento_enviar; var2=nrcli_enviar; var sw=$('#sw').val();
                            $(this).parent().parent().parent().parent().html('').load('/laboratorio/Examenes_c/cargarVistaProcediemientos',{"id_consentimiento":var1,"nricli":var2,"ale":"<?php echo $ale;?>","sw":sw});
                          

                          });


                          $('#agregar_nueva_eps').click(function(){
                            $('.capa-eps').css('display','none');
                            $('.capa-aad-eps').css('display','block');
                            $('#neweps').val('').addClass('required');
                            $('#eps').val('').trigger('chosen:updated');
                          });
						  
                          $('#agregar_nueva_emp_lab').click(function(){
                            $('.capa-emp-lab').css('display','none');
                            $('.capa-aad-emp-lab').css('display','block');
                            $('#newemplab').val('').addClass('required');
                            $('#id_empresal').val('').trigger('chosen:updated');
                          });
                          

                          $('#agregar_nueva_arp').click(function(){
                            $('.capa-arp').css('display','none');
                            $('.capa-aad-arp').css('display','block');
                            $('#newarp').val('').addClass('required');
                            $('#arp').val('').trigger('chosen:updated');
                          });
						  
						  $('#neweps,#newarp').keyup(function(){
							 $(this).val($(this).val().toUpperCase()); 
						  });

                          $('#check-eps').click(function(){
                            var valor=$('#neweps').val();
                            if(valor!=''){
                                $.post('/Terceros_c/addEps',{"eps":valor},function(ans){
                                  if(ans.err=='1'){
                                      $('.capa-eps').css('display','block');
                                      $('.capa-aad-eps').css('display','none');
                                      cargarEps();
                                      $('#eps').val(valor).trigger('chosen:updated');
                                      $('#neweps').val('').removeClass('required');
                                  }

                                },'JSON');
                            }else{
                              $('#neweps').addClass('error');
                            }
                          });
                              $('#check-emp-lab').click(function(){
                            var valor=$('#newemplab').val();
                            if(valor!=''){
                                $.post('/Terceros_c/terceros_empresa_labora',{"empresa":valor},function(ans){
                                  if(ans.err=='1'){
                                      $('.capa-emp-lab').css('display','block');
                                      $('.capa-aad-emp-lab').css('display','none');
                                      actualizarEmpresaLabora();
                                      $('#id_empresal').val(ans.codemplab+'||'+valor.trim()).trigger('chosen:updated');
                                      $('#newemplab').val('').removeClass('required');
                                  }

                                },'JSON');
                            }else{
                              $('#newemplab').addClass('error');
                            }
                          });

                           $('#check-arp').click(function(){
                            var valor=$('#newarp').val();
                            if(valor!=''){
                                $.post('/Terceros_c/addArp',{"arp":valor},function(ans){
                                  if(ans.err=='1'){
                                      $('.capa-arp').css('display','block');
                                      $('.capa-aad-arp').css('display','none');
                                      cargarArp();
                                      $('#arp').val(valor).trigger('chosen:updated');
                                      $('#newarp').val('').removeClass('required');
                                  }

                                },'JSON');
                            }else{
                              $('#newarp').addClass('error');
                            }
                          });

                          $('#cancel-eps').click(function(){
                             $('.capa-eps').css('display','block');
                            $('.capa-aad-eps').css('display','none');
                             $('#eps').val('').trigger('chosen:updated');
                             $('#neweps').val('').removeClass('required');

                          });
                            $('#cancel-emp-lab').click(function(){
                             $('.capa-emp-lab').css('display','block');
                            $('.capa-aad-emp-lab').css('display','none');
                             $('#id_empresal').val('').trigger('chosen:updated');
                             $('#newemplab').val('').removeClass('required');

                          });
                           $('#cancel-arp').click(function(){
                             $('.capa-arp').css('display','block');
                            $('.capa-aad-arp').css('display','none');
                             $('#arp').val('').trigger('chosen:updated');
                             $('#newarp').val('').removeClass('required');

                          });
                     

                            $('#generar_historia<?php echo $ale;?>').click(function(){
                              var estado=validarSelect(); var a=0;

                             if($("form#historia").validate().form()==true&&estado==true){ 
                               
                               var selec='';
                               $('input.histo').each(function(index, el) {
                                  if($(this).is(':checked')){           
                                    if(index==0){
                                      selec+=$(this).attr('id')+'='+'SI';
                                    }else{
                                      selec+='&'+$(this).attr('id')+'='+'SI';
                                    }           

                                  }else{         
                                       if(index==0){
                                      selec+=$(this).attr('id')+'='+'NO';
                                    }else{
                                      selec+='&'+$(this).attr('id')+'='+'NO';
                                    } 
                                  }      

                               }); 
							   var emp='';
							     $('input.emp').each(function(index, el) {
                                  if($(this).is(':checked')){        
                                    emp+='&'+$(this).attr('id')+'='+'SI';
                                  }else{         
                                      emp+='&'+$(this).attr('id')+'='+'NO';
                                  }      

                               });            
								
                              $.ajax({
                                url:'/laboratorio/Hclinica_Registrar_c/tercerosi',
                                type:'POST',
                                dataType:'JSON',
                                data:selec+'&'+$('form#historia').serialize()+'&empresa='+emp,
                                success:function(ans){
                                    if(ans.err=='1'){
                                       toastr.success('Datos Actualizados Satisfactoriamente');
                                       id_consentimiento_enviar=$('#id_consentimiento').val();
                                       nrcli_enviar=$('#id_empresa').val(); 
									   
									         if($('#sw').val()=='0'){
									   setInterval(function(){ 
                              $('#cargar_vista<?php echo $ale;?>').trigger('click');
}, 3000);                }          
                                       /*$('form#historia').get(0).reset();
                                        $('#sexo,#ecivil,#escolaridad,#jornada').trigger('chosen:updated');
                                        $('#id_empresa,#id_empresal').trigger('chosen:updated');
                                        $('#examen').trigger('chosen:updated');
   $('#cabe-prioridad,#cabe-traalt,#cabe-espcon,#cabe-manali,#cabe-brigada').bootstrapSwitch('setState', false);*/

   
                                         /*$('#capa-datos').css('display','none');
                                         $('#capaTabla').css('display','block');*/
                                       
                                     }else toastr.error(ans.msg);

                                }
                              });
							  console.log(a);
							  if(a==1){
								  
                          		  }

                           }else alert('Hay campos Requeridos');
                            });  

                             cargarEps();
                             cargarArp();

                    });
                    function cargarClientes(){
                      $('#id_empresa,#id_empresal').empty();
                      $('#id_empresa,#id_empresal').html('<option value=""></option>');
                      $.ajax({
                        url:'/Tarifa_c/clientes/',
                        type:'POST',
                        dataType:'JSON',                      
                        success:function(ans){
                          for(i in ans){
                            $('<option/>').val(ans[i].codcli+'||'+ans[i].nomcli).text(ans[i].codcli+' - '+ans[i].nomcli).appendTo('#id_empresa,#id_empresal');
                          }
                          $('#id_empresa,#id_empresal').trigger('chosen:updated');

                        }

                      });

                     
                    }
                    function actualizarEmpresaLabora(){
                      $('#id_empresal').empty();
                      $('#id_empresal').html('<option value=""></option>');
                      $.ajax({
                        url:'/Tarifa_c/clientes/',
                        type:'POST',
                        dataType:'JSON',
                          async: false,                       
                        success:function(ans){
                          for(i in ans){
                            $('<option/>').val(ans[i].codcli+'||'+ans[i].nomcli).text(ans[i].codcli+' - '+ans[i].nomcli).appendTo('#id_empresal');
                          }
                          $('#id_empresal').trigger('chosen:updated');

                        }

                      });

                     
                    }
                     function cargarTipoexamen(){
                      $('#examen').empty();
                      $('#examen').html('<option value=""></option>');
                      $.ajax({
                        url:'/laboratorio/Examenes_c/subgru',
                        type:'POST',
                        dataType:'JSON',                      
                        success:function(ans){
                          for(i in ans){
                            $('<option/>').val(ans[i].subgru).text(ans[i].subgru).appendTo('#examen');
                          }
                          $('#examen').trigger('chosen:updated');

                        }

                      });

                     
                    }
                   function cargarEps(){
                      $('#eps').empty();
                      $('#eps').html('<option value=""></option>');
                      $.ajax({
                        url:'/Terceros_c/eps',
                        type:'POST',
                        dataType:'JSON', 
                        async: false,                  
                        success:function(ans){
                          if(ans.e.err=='1'){
                            console.log(ans.a)
                            for(i in ans.a){
                            $('<option/>').val(ans.a[i].eps).text(ans.a[i].eps).appendTo('#eps');
                          }
                          }
                          
                          $('#eps').trigger('chosen:updated');

                        }

                      });

                     
                    }
                    function cargarArp(){
                      $('#arp').empty();
                      $('#arp').html('<option value=""></option>');
                      $.ajax({
                        url:'/Terceros_c/arp',
                        type:'POST',
                        dataType:'JSON', 
                        async: false,                  
                        success:function(ans){
                          if(ans.e.err=='1'){
                            console.log(ans.a)
                            for(i in ans.a){
                            $('<option/>').val(ans.a[i].arp).text(ans.a[i].arp).appendTo('#arp');
                          }
                          }
                          
                          $('#arp').trigger('chosen:updated');

                        }

                      });

                     
                    }
                    function cargarDatosUsuario(id_cliente){
                      $.ajax({
                         url:'/Terceros_c/tercerosc/',
                         type:'POST',
                         dataType:'JSON',
                         data:{"id_cliente":id_cliente},
                         success:function(ans){
                          if(ans.err=='1'){                           
                            $('#nom_tipidentificacion').val(ans.a.nom_tipidentificacion).trigger('chosen:updated'); 		
							
                            $('#primer_nombre').val(ans.a.primer_nombre); 
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
                       function validarSelect(){
                        var estado= true;
                         $('.validar').each(function(index, element) {            
                         if($(this).val()==null||$(this).val()==''){
                           var cod =  $(this).attr('id');             
                          $('div#'+cod+'_chosen ').addClass('chosen-container-active')
                          estado=false;
                        }else{               
                          $('div#'+cod+'_chosen ').removeClass('chosen-container-active') ;
                          estado=true;            
                        }
                        });
                        return estado;
                      }

                      function consultarConsecutivo(id_consentimiento){
                         $.ajax({
                         url:'/laboratorio/Hclinica_Registrar_c/consecutivoc/',
                         type:'POST',
                         dataType:'JSON',
                         data:{"id_consentimiento":id_consentimiento},
                         success:function(ans){
                          if(ans.err=='1'){        
                          $('#id_consentimiento').val(ans.info.id_consentimiento);                        
                            toastr.info('El Consecutivo '+id_consentimiento+' Ya Existe');
                            $('#primer_nombre').val(ans.info.primer_nombre); 
                            $('#segundo_nombre').val(ans.info.segundo_nombre);  
                            $('#primer_apellido').val(ans.info.primer_apellido); 
                            $('#segundo_apellido').val(ans.info.segundo_apellido);  
                            $('#telefono_fijo').val(ans.info.telefono_fijo); 
                            $('#telefono_movil').val(ans.info.telefono_movil);  
                            $('#direccion').val(ans.info.direccion); 
                            $('#email').val(ans.info.email); 
                            $('#sexo').val(ans.info.sexo).trigger('chosen:updated');  
                            $('#naturalde').val(ans.info.naturalde); 
                            $('#ecivil').val(ans.info.ecivil).trigger('chosen:updated');  
                            $('#escolaridad').val(ans.info.escolaridad).trigger('chosen:updated');   
                            $('#jornada').val(ans.info.jornada).trigger('chosen:updated');   
                            $('#eps').val(ans.info.eps).trigger('chosen:updated');  
                            $('#arp').val(ans.info.arp).trigger('chosen:updated'); 
                            $('#ciudad').val(ans.info.ciudad);  
                            $('#fechanac').val(ans.info.fechanac);  
                            $('#examen').val(ans.info.examen).trigger('chosen:updated'); 
							$('#cargo').val(ans.cargo.cargo); 
                         
                            $('#id_empresa').val(ans.info.id_empresa.trim()+'||'+ans.info.nomempresa.trim()).trigger('chosen:updated'); 
                            $('#id_empresal').val(ans.info.id_empresal.trim()+'||'+ans.info.nomempresal.trim()).trigger('chosen:updated');   
                            $('#nom_tipidentificacion').val(ans.info.nom_tipidentificacion).trigger('chosen:updated');
                            $('#id_cliente').val(ans.info.id_cliente);
                            $('#sw').val(1);
                            if(ans.info.prioridad=='SI'){  
                               $('#cabe-prioridad').bootstrapSwitch('setState', true);                           
                            }else{
                                 $('#cabe-prioridad').bootstrapSwitch('setState', false);  
                            }
                            if(ans.info.traalt=='SI'){  
                               $('#cabe-traalt').bootstrapSwitch('setState', true);                           
                            }else{
                                 $('#cabe-traalt').bootstrapSwitch('setState', false);  
                            }
                            if(ans.info.espcon=='SI'){  
                               $('#cabe-espcon').bootstrapSwitch('setState', true);                           
                            }else{
                               $('#cabe-espcon').bootstrapSwitch('setState', false); 
                            }
                            if(ans.info.manali=='SI'){  
                               $('#cabe-manali').bootstrapSwitch('setState', true);                           
                            }else{
                                  $('#cabe-manali').bootstrapSwitch('setState', false);    
                            }
                            if(ans.info.brigada=='SI'){  
                               $('#cabe-brigada').bootstrapSwitch('setState', true);                           
                            }else{
                                $('#cabe-brigada').bootstrapSwitch('setState', false);  
                            }

                           
                                            
                          }else{
                               $('#id_consentimiento').removeClass('error');
                               $('#sw').val(0);
							   $('#cargo').val(''); 
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
                              $('#examen').val('').trigger('chosen:updated');  
                            $('#id_empresa').val('').trigger('chosen:updated'); 
                            $('#id_empresal').val('').trigger('chosen:updated');   
                            $('#nom_tipidentificacion').val('').trigger('chosen:updated');
                            $('#id_cliente').val('');
                               $('#cabe-prioridad').bootstrapSwitch('setState', false);                          
                               $('#cabe-traalt').bootstrapSwitch('setState', false);                           
                               $('#cabe-espcon').bootstrapSwitch('setState', false);                           
                               $('#cabe-manali').bootstrapSwitch('setState', false);                           
                               $('#cabe-brigada').bootstrapSwitch('setState', false);     

                          }


                         } 
                      });
                      }

                     function  cargarProseiograma(nricli){  
                      $('#codcrg').empty();
                        $('#codcrg').html('<option value=""></option');                   
                        var res = nricli.split("||");
                         $.ajax({
                         url:'/laboratorio/Examenes_c/profesiogramac/',
                         type:'POST',
                         dataType:'JSON',
                         data:{"nricli":res[0]},
                         success:function(ans){
                          if(ans.err=='1'){        
                               for(x in ans.a){
                                
                                $('<option/>').val(ans.a[x].codcrg).text(ans.a[x].nomcrg).appendTo('#codcrg');
                               }         
                                            
                          }

                           $('#codcrg').trigger('chosen:updated');


                         } 
                      });

                    }
                    function consultarTipoIdentificacion(){                 
                       $('#nom_tipidentificacion').empty();
                        $('#nom_tipidentificacion').html('<option value=""></option');             
                       
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
                                
                                $('<option/>').val(ans.a[x].dsctip).text(ans.a[x].dsctip).appendTo('#nom_tipidentificacion');
                               }         
                                            
                          }

                           $('#nom_tipidentificacion').trigger('chosen:updated');
                          

                         } 
                      });
                    }

                  </script>
           