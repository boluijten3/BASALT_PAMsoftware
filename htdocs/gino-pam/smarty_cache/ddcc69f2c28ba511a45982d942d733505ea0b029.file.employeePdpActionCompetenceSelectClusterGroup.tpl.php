<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:40:28
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionCompetenceSelectClusterGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321360d05e8c138ee0-27334572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddcc69f2c28ba511a45982d942d733505ea0b029' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionCompetenceSelectClusterGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321360d05e8c138ee0-27334572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionCompetenceSelectClusterGroup.tpl -->
    <tr>
        <td class="shaded_title" colspan="3" style="padding-left: 5px;">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getClusterName();?>

        </td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['viewInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewInterfaceObject']->key => $_smarty_tpl->tpl_vars['viewInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('viewInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
<!-- /employeePdpActionCompetenceSelectClusterGroup.tpl -->