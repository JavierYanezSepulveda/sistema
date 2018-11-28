<html>
        <head>
                <title>CodeIgniter Tutorial</title>
        </head>
        <body>
<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>

<?php echo form_open ( 'productos/editar/'.$item['ID']);?> 
    <table>
        <tr>
            <td><label for="NOMBRE">Titulo</label></td>
            <td><input type="input" name="NOMBRE" size="50" value="<?php echo $item['NOMBRE'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="PRECIO">PRECIO</label></td>
            <td><input type="input" name="PRECIO" value="<?php echo $item['PRECIO'] ?>"  /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Editar un productos" /></td>
        </tr>
    </table>
</form>


<p><em>Copyright © 2016</em></p>
        </body>
</html>