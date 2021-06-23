<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionCompetenceSelectCategoryGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2500460cc7bb3702a51-04873491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a7a50b4865f0d9e026008ebf5351fbd9147661' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionCompetenceSelectCategoryGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2500460cc7bb3702a51-04873491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionCompetenceSelectCategoryGroup.tpl -->
<?php if (!$_smarty_tpl->getVariable('isFirst')->value){?>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCategory()){?>
    <tr>
        <td colspan="3"><h2><?php echo CategoryConverter::display($_smarty_tpl->getVariable('interfaceObject')->value->getCategoryName());?>
</h2></td>
    </tr>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['clusterInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['clusterInterfaceObject']->key => $_smarty_tpl->tpl_vars['clusterInterfaceObject']->value){
?>
    <?php echo $_smarty_tpl->getVariable('clusterInterfaceObject')->value->fetchHtml();?>

<?php }} ?>
<!-- /employeePdpActionCompetenceSelectCategoryGroup.tpl -->