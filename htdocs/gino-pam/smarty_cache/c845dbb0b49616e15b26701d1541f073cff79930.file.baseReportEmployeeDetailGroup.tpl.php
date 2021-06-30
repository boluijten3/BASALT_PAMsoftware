<?php /* Smarty version Smarty-3.0.7, created on 2021-06-11 15:19:52
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/baseReportEmployeeDetailGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:511560c362f88b8728-84291460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c845dbb0b49616e15b26701d1541f073cff79930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/baseReportEmployeeDetailGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '511560c362f88b8728-84291460',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- baseReportEmployeeDetailGroup.tpl -->
<table style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" align="center">
    <tr>
        <td colspan="100%"><h2><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getBossName();?>
</h2></td>
    </tr>
    <tr>
        <th class="bottom_line shaded_title" style="width:200px;"><?php echo TXT_UCF('EMPLOYEE');?>
</th>
        <th class="bottom_line shaded_title" style="width:300px;"><?php echo TXT_UCF('FUNCTION');?>
</th>
        <th class="bottom_line shaded_title" style="width:200px;"><?php echo TXT_UCF('DEPARTMENT');?>
</th>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCount()){?>
        <th class="bottom_line shaded_title centered" style="width:100px;"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCountTitle();?>
</th>
        <?php }?>
    </tr>
    <?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
        <?php  $_smarty_tpl->tpl_vars['viewObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewObject']->key => $_smarty_tpl->tpl_vars['viewObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('viewObject')->value->fetchHtml();?>

        <?php }} ?>
    <?php }else{ ?>
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
    <?php }?>
</table>
<!-- /baseReportEmployeeDetailGroup.tpl -->