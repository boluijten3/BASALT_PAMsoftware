<?php /* Smarty version Smarty-3.0.7, created on 2021-06-23 12:50:29
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionDelete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324660d311f5c07c27-74808885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00234b13f04a82ea18f48c66e02bb417b8568f9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionDelete.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324660d311f5c07c27-74808885',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionDelete.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<p><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getConfirmQuestion();?>
</p>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width:150px;">
            <?php echo TXT_UCF('PDP_ACTION');?>

        </td>
        <td class="form-value">
            <?php echo PdpActionNameConverter::display($_smarty_tpl->getVariable('valueObject')->value->getActionName(),PdpActionNameConverter::EMPTY_LABEL,$_smarty_tpl->getVariable('valueObject')->value->isUserDefined());?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            <?php echo TXT_UCF('STATUS');?>

        </td>
        <td class="form-value">
            <?php echo PdpActionCompletedConverter::image($_smarty_tpl->getVariable('valueObject')->value->getIsCompletedStatus());?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            <?php echo TXT_UCF('DEADLINE_DATE');?>

        </td>
        <td class="form-value">
            <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getTodoBeforeDate());?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            <?php echo TXT_UCF('ACTION_OWNER');?>

        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getOwnerName();?>

        </td>
    </tr>
</table>
<!-- /employeePdpActionDelete.tpl -->