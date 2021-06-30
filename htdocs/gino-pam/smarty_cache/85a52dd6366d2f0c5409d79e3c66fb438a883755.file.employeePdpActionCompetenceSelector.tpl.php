<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionCompetenceSelector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3276660cc7bb35f3406-11187801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a52dd6366d2f0c5409d79e3c66fb438a883755' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionCompetenceSelector.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3276660cc7bb35f3406-11187801',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionCompetenceSelector.tpl -->
<table cellpadding="4">
    <tr>
        <td class="form-label" style="width:100px;">
            <?php echo TXT_UCF('COMPETENCES');?>

        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRelatedCompetenceLabel();?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            &nbsp;
        </td>
        <td class="form-value" id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleHtmlId();?>
">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            &nbsp;
        </td>
        <td class="form-value">
            <div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getContentHtmlId();?>
" style="display:none; background-color:white;">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObject()->fetchHtml();?>

            </div>
        </td>
    </tr>
</table>
<!-- /employeePdpActionCompetenceSelector.tpl -->