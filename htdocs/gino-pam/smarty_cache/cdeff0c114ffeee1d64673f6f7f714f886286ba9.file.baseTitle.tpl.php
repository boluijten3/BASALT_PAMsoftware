<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:10:37
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\base/baseTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3025960ca68cde691c2-31655155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdeff0c114ffeee1d64673f6f7f714f886286ba9' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\base/baseTitle.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3025960ca68cde691c2-31655155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- baseTitle.tpl -->
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isSubHeader()){?>
<?php $_smarty_tpl->tpl_vars['headerClass'] = new Smarty_variable(' subheader', null, null);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['headerClass'] = new Smarty_variable('', null, null);?>
<?php }?>

<div class="application-content block-title <?php echo $_smarty_tpl->getVariable('headerClass')->value;?>
" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
; margin-top:20px;">
    <table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
        <tr>
            <td>
                <h2><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getHeaderTitle();?>
</h2>
            </td>
            <td style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionsWidth();?>
; text-align:right">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

            </td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['additionalHeaderRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getAdditionalHeaderRows(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['additionalHeaderRow']->key => $_smarty_tpl->tpl_vars['additionalHeaderRow']->value){
?>
        <tr>
            <?php echo $_smarty_tpl->getVariable('additionalHeaderRow')->value->fetchHtml();?>

        </tr>
        <?php }} ?>
    </table>
</div>
<!-- /baseTitle.tpl -->