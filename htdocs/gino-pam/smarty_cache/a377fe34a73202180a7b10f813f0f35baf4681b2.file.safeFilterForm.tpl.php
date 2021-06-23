<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:10
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/application/interface/templates\components/safeFilterForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2892760c9f95e4596b7-52831024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a377fe34a73202180a7b10f813f0f35baf4681b2' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/safeFilterForm.tpl',
      1 => 1379954112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892760c9f95e4596b7-52831024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- /safeFilterForm.tpl -->
<form id="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" onsubmit="submitFilterSafeForm('<?php echo $_smarty_tpl->getVariable('safeFormIdentifier')->value;?>
', this.name);return false;">
    <?php echo $_smarty_tpl->getVariable('safeFormToken')->value;?>

    <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

</form>
<!-- /safeFilterForm.tpl -->