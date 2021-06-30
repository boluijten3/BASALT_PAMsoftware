<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:34:33
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\report/managerReportView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703960ca6e6991aea8-26624913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e84ca2e9781e405fa9097cb43caa6192dd73bc0' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/managerReportView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703960ca6e6991aea8-26624913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- managerReportView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['userValueObject'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getManagerUserValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('class="short_hilite"', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>
<tr <?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 id="detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getManagerName();?>

    </td>
    <td class="bottom_line centered icon-link">
        <?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->getSubordinatesCount());?>
&nbsp; <span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeDetailLink();?>
</span>
    </td>
    <td class="bottom_line<?php if (!$_smarty_tpl->getVariable('userValueObject')->value->isActive){?> inactive<?php }?>">
        <?php echo $_smarty_tpl->getVariable('userValueObject')->value->login;?>

    </td>
    <td class="bottom_line centered<?php if (!$_smarty_tpl->getVariable('userValueObject')->value->isActive){?> inactive<?php }?>">
        <?php echo UserLevelConverter::display($_smarty_tpl->getVariable('userValueObject')->value->userLevel);?>

    </td>
    <?php $_smarty_tpl->tpl_vars['accessAll'] = new Smarty_variable($_smarty_tpl->getVariable('userValueObject')->value->accessAllDepartments==constant('ALWAYS_ACCESS_ALL_DEPARTMENTS'), null, null);?>
    <td class="bottom_line centered <?php if (!$_smarty_tpl->getVariable('accessAll')->value){?>icon-link<?php }?><?php if (!$_smarty_tpl->getVariable('userValueObject')->value->isActive){?> inactive<?php }?>">
        <?php if ($_smarty_tpl->getVariable('accessAll')->value){?><?php echo TXT_UCF('ALL_DEPARTMENTS');?>

        <?php }else{ ?>
        <?php echo NumberConverter::display($_smarty_tpl->getVariable('userValueObject')->value->departmentCount);?>
&nbsp;<span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDepartmentDetailLink();?>
</span>
        <?php }?>
    </td>
</tr>
<!-- /managerReportView.tpl -->