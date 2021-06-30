<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:09
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/application/interface/templates\referenceDateEditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758760c9f95d12d616-21517908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cef2846575bf47ed890bd45744196ef2f2bf347' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/application/interface/templates\\referenceDateEditor.tpl',
      1 => 1379954112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '758760c9f95d12d616-21517908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- referenceDateEditor.tpl -->
&nbsp;peildatum: <?php echo $_smarty_tpl->getVariable('editorDatePicker')->value;?>

&nbsp;<input name="modify" type="button" value="aanpassen" onClick="xajax_public_modifyCurrentDate(xajax.getFormValues('<?php echo $_smarty_tpl->getVariable('editorFormName')->value;?>
')); return false;">
<!-- /referenceDateEditor.tpl -->