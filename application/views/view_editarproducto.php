<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
              
                        <?php echo validation_errors(); ?>
                        <?php echo form_open( (base_url()).'productos/edit'); ?>

                        <input type="hidden" name="ID" value="<?php echo $item['ID']; ?>"/>

                        <label for="NOMBRE">Nombre:</label><br/>
                        <input type="text" name="NOMBRE" value="<?php echo $item['NOMBRE']; ?>"/>
                      

                      <label for="PRECIO">precio:</label><br/>
                        <input type="text" name="PRECIO" value="<?php echo $item['PRECIO']; ?>"/>

                        <input type="submit" name="update" value="Actualizar" />

                        <?php echo form_close();?>
