<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:57:49
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceGroupEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222860ca73dd48cfd7-73134897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f58929de1b2eac598a3ccc50334d76c7189455c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceGroupEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222860ca73dd48cfd7-73134897',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceGroupEdit.tpl -->
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
<div class="actions" style="padding-top:10px; padding-bottom:10px;" width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleNotesVisibilityLink();?>

</div>
<?php }?>
<span id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleNotesHtmlId();?>
">
    <?php  $_smarty_tpl->tpl_vars['categoryInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['categoryInterfaceObject']->key => $_smarty_tpl->tpl_vars['categoryInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('categoryInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
</span>
<?php }?>
<!-- /employeeCompetenceGroupEdit.tpl -->