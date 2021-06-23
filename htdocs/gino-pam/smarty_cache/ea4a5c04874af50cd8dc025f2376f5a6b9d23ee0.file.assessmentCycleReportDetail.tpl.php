<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:06:17
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleReportDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315660ca67c974beb9-88523063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea4a5c04874af50cd8dc025f2376f5a6b9d23ee0' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleReportDetail.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315660ca67c974beb9-88523063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleReportDetail.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2">
    <tr id="current_assessment_report_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this, 'no-hilite');" onmouseout="deactivateThisRow(this, 'no-hilite');">
        <td nowrap class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPrefixClass();?>
" style="padding: 5px;">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCyclePrefix()){?>
                <?php echo TXT_UCF('REPORT');?>
 <?php echo TXT_LC('ASSESSMENT_CYCLE');?>

            <?php }?>
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleName();?>
:
            &nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentTitle();?>

        </td>
    </tr>
</table>
<!-- /assessmentCycleReportDetail.tpl -->