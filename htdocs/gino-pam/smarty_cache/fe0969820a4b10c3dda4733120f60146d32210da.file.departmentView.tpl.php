<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:06:11
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\organisation/departmentView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504860ca67c33032a7-35059989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0969820a4b10c3dda4733120f60146d32210da' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\organisation/departmentView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504860ca67c33032a7-35059989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- departmentView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('class="short_hilite"', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>
<tr <?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 id="detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->departmentName;?>

    </td>
    <td class="bottom_line centered icon-link">
        <strong><?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->getCountedEmployees());?>
</strong>
        <span class="warning-text" <?php echo NumberConverter::conditional($_smarty_tpl->getVariable('valueObject')->value->getCountedInactiveEmployees(),'',TXT_UCF('ARCHIVED_EMPLOYEES'));?>
</span>&nbsp;<span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeDetailLink();?>
</span>
    </td>
    <td class="bottom_line centered icon-link">
        <strong><?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->countedUsers);?>
</strong>&nbsp; <span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getUserDetailLink();?>
</span>
    </td>
    <td class="bottom_line actions">
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEditLink();?>
&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRemoveLink();?>

    </td>
</tr>
<!-- /departmentView.tpl -->