    <label for="marcas">Marcas:</label>
<select required class="form-control" name="marcas" id="marcas">
                        <option value="">Seleccionar Marca</option>


                        <?php foreach($marcas as $marca): ?>
                          <option value="<?php
                          echo $marca->Marca_id;
                          ?>"><?php echo $marca->Marca_nombre ?></option>

                        <?php endforeach;?>

                    </select>

                    <div class="form-group">
                                        <label for="modelos">Modelos:</label>
                                        <select required class="form-control" name="modelos" id="modelos" disabled="">
                                            <option value="">Seleccionar modelo</option>
                                        </select>
                                      </div>



                                          <script type="text/javascript">
                                              $(document).ready(function(){
                                                 $('#marcas').on('change', function(){
                                                      var marcas_id =$(this).val();
                                                      if(marcas_id == '')
                                                      {
                                                          $('#modelos').prop('disabled', true);
                                                      }
                                                      else
                                                      {
                                                          $('#modelos').prop('disabled', false);
                                                          $.ajax({
                                                              url:"<?php echo base_url() ?>welcome/obtenermodelo",
                                                              type: "POST",
                                                              data: {'marcas_id' : marcas_id},
                                                              dataType: 'json',
                                                              success: function(data){
                                                                 $('#modelos').html(data);
                                                              },
                                                              error: function(){
                                                                  alert('Error occur...!!');
                                                              }
                                                          });
                                                      }
                                                 });
                                              });
                                          </script>
                                          <input type="submit" value="Submit" class="btnSubmit btn btn-outline-primary" />
                                          </form>
                                        </div>
