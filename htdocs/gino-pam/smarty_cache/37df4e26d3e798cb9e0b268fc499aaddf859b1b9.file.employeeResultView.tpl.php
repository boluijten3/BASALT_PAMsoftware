<?php /* Smarty version Smarty-3.0.7, created on 2021-06-25 16:08:24
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\list/employeeResultView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628560d5e358708c01-25034999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37df4e26d3e798cb9e0b268fc499aaddf859b1b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\list/employeeResultView.tpl',
      1 => 1624264062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628560d5e358708c01-25034999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeResultView.tpl -->
<?php $_smarty_tpl->tpl_vars['employeeId'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeId(), null, null);?>
    <tr id="rowLeftNav<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
" class="<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isSelected()){?>divLeftWbg<?php }else{ ?>divLeftRow<?php }?>">
        <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('interfaceObject')->value->getDetailTemplateFile(), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <td class="dashed_line" id="leftNav<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
" style="padding: 3px 0px;">
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isAllowedArrowKeys()){?>
            <a id="link<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
" onclick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getSelectOnClick();?>
 selectRow('rowLeftNav<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
'); setCurrentRow(<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
);" >
        <?php }else{ ?>
            <a id="link<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
" onclick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getSelectOnClick();?>
 selectRow('rowLeftNav<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
'); return false;" >
        <?php }?>
                <span id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeNameHtmlId();?>
<?php echo $_smarty_tpl->getVariable('employeeId')->value;?>
" ><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeName();?>
<span>
            </a>
        </td>
    </tr>
<!-- /employeeResultView.tpl -->