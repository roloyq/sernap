<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title ?></title>
        
        <link href="<?php echo base_url() ?>css/960_24.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/track.js"></script>        
    </head>
<body>
<div class="login1" >

            <div class="login">
            
            <?php echo form_open('index.php/sernap/verificar_login'); ?>

            <?php
                $email = array(
                    'name'      =>  'login',
                    'id'        =>  'login',
                    'value'     =>  ''
                    
            );
                $password = array(
                    'name'      => 'password',
                    'id'        => 'password',
                    'value'     =>  ''    
                    
                );
            ?>
            
               Administrador<br/><br/>
               
               <table>
                   <tr>
                       <td>
                           <?php echo form_label('Email:  '); ?>
                       </td>
                       <td>
                           <?php echo form_input($email);?>  
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <?php echo form_label('Password:  '); ?>
                       </td>
                       <td>
                           <?php echo form_password($password);?>
                       </td>
                   </tr>
               </table>

                <?php echo form_submit('submit','login');?>
            
            <?php echo form_close(); ?>
          </div>
</div>

<img src="../image/Sernap.png"></img>
</body>
</html>