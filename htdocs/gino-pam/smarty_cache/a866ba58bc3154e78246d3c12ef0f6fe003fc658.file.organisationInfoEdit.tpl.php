<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:41:10
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\organisation/organisationInfoEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366760d05eb69b8ac2-49142322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a866ba58bc3154e78246d3c12ef0f6fe003fc658' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\organisation/organisationInfoEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '366760d05eb69b8ac2-49142322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- organisationInfoEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width:150px;"><label for="company_info"><?php echo TXT_UCF('COMPANY_INFORMATION');?>
</label></td>
        <td class="form-value">
            <textarea rows="10" cols="80" name="company_info" id="company_info"><?php echo $_smarty_tpl->getVariable('valueObject')->value->infoText;?>
</textarea>
        </td>
    </tr>
</table>
<!-- /organisationInfoEdit.tpl -->