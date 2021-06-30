<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 14:16:32
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfilePersonalPhotoEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2989960d083201057f3-31379624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbcc1a2628ff1073b819e309de6aa94fb9d6714' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfilePersonalPhotoEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2989960d083201057f3-31379624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfilePersonalPhotoEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td>
            <iframe id="upload_photo" class="border1px" src="upload_photo.php" width="99%" frameBorder="0" >
                <p>Your browser does not support iframes.</p>
            </iframe>
        </td>
    </tr>
</table>
<!-- /employeeProfilePersonalPhotoEdit.tpl -->