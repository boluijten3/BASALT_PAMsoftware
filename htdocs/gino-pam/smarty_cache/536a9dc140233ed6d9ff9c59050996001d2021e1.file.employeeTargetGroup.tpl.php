<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:24
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/target/employeeTargetGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1597560cc7b9c0e69e1-45515008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536a9dc140233ed6d9ff9c59050996001d2021e1' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/target/employeeTargetGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597560cc7b9c0e69e1-45515008',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetGroup.tpl -->
<table class="content-table" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
    <tr>
        <th class="bottom_line shaded_title" style="width:250px;">
            <?php echo TXT_UCF('TARGET');?>

        </th>
        <th class="bottom_line shaded_title" style="width:245px;">
            <?php echo TXT_UCF('KPI');?>

        </th>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isViewAllowedEvaluation()){?>
        <th class="bottom_line shaded_title" style="width:175px;">
            <?php echo TXT_UCF('TARGET_STATUS');?>

        </th>
        <?php }?>
        <th class="bottom_line shaded_title" style="width:100px;">
            <?php echo TXT_UCF('TARGET_END_DATE');?>

        </th>
        <th class="bottom_line shaded_title actions" style="width:75px;">
            &nbsp;
        </th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['viewInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewInterfaceObject']->key => $_smarty_tpl->tpl_vars['viewInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('viewInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
<?php }else{ ?>
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
<?php }?>
</table><!-- /employeeTargetGroup.tpl -->