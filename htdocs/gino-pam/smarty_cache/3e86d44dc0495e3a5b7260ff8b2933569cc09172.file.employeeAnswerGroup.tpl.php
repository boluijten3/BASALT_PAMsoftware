<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:09:12
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeAnswerGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:960560ca6878c0beb2-77964367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e86d44dc0495e3a5b7260ff8b2933569cc09172' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeAnswerGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960560ca6878c0beb2-77964367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeAnswerGroup.tpl -->
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
    <table  class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
        <?php  $_smarty_tpl->tpl_vars['answerInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['answerInterfaceObject']->key => $_smarty_tpl->tpl_vars['answerInterfaceObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('answerInterfaceObject')->value->fetchHtml();?>

        <?php }} ?>
        <tr>
            <td></td>
        </tr>
    </table>
<?php }?>
<!-- /employeeAnswerGroup.tpl -->