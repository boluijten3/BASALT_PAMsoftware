<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:09:12
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3015360ca68784b40c7-78875120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4c9dd40881f31187c1ba54f9e22bf276aedca6' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3015360ca68784b40c7-78875120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceGroup.tpl -->
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
<span id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleNotesHtmlId();?>
">
    <table class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" >
        <?php  $_smarty_tpl->tpl_vars['categoryInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['categoryInterfaceObject']->key => $_smarty_tpl->tpl_vars['categoryInterfaceObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('categoryInterfaceObject')->value->fetchHtml();?>

        <?php }} ?>
    </table>
</span>
<?php }else{ ?>
<table class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" >
    <tr>
        <td colspan="100%">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>

        </td>
    </tr>
</table>
<?php }?>
<!-- /employeeCompetenceGroup.tpl -->