<?php /* Smarty version Smarty-3.0.7, created on 2021-06-10 21:18:41
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/safeInlineForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880460c265914ff2f1-93908525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd2064836e29868bc33a0146985f8e3d3fc2277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/safeInlineForm.tpl',
      1 => 1379954112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880460c265914ff2f1-93908525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- safeInlineForm.tpl -->
<form id="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" style="margin:0; padding:0">
    <?php echo $_smarty_tpl->getVariable('safeFormToken')->value;?>

    <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

</form>
<!-- /safeInlineForm.tpl -->