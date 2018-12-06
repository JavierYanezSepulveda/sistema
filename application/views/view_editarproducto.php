<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
              
                        <?php echo validation_errors(); ?>
                        <?php echo form_open( (base_url()).'productos/edit'); ?>
                        <div class="row">
                        	<div class="col">
                        		<label for="NOMBRE">Nombre:</label><br/>
                                <input type="text" name="NOMBRE" value="<?php echo $item['NOMBRE']; ?>"/>


                        	</div>
                        	<div class="col">  
                        		<label for="PRECIO">precio:</label><br/>
                        <input type="text" name="PRECIO_V" value="<?php echo $item['PRECIO_V']; ?>"/>


                        	</div>



                        </div>
                        <input type="hidden" name="ID_PRODUCTO" value="<?php echo $item['ID_PRODUCTO']; ?>"/>

        
                    

                        <input type="submit" name="update" value="Actualizar" />

                        <?php echo form_close();?>
