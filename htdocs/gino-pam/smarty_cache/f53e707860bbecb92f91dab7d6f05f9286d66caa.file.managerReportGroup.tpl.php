<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:34:33
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\report/managerReportGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175860ca6e697e1356-97660447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53e707860bbecb92f91dab7d6f05f9286d66caa' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/managerReportGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175860ca6e697e1356-97660447',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- managerReportGroup.tpl -->
<table class="content-table" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="bottom_line shaded_title"><?php echo TXT_UCF('MANAGER');?>
</th>
        <th class="bottom_line shaded_title centered" style="width:100px;"><?php echo TXT_UCF('EMPLOYEES');?>
</th>
        <th class="bottom_line shaded_title" style="width:150px;"><?php echo TXT_UCF('USERNAME');?>
</th>
        <th class="bottom_line shaded_title centered" style="width:150px;"><?php echo TXT_UCF('SECURITY');?>
</th>
        <th class="bottom_line shaded_title centered" style="width:100px;"><?php echo TXT_UCF('DEPARTMENTS');?>
</th>
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
<!-- /managerReportGroup.tpl -->