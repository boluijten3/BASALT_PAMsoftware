<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionSelectClusterGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2803260cc7bb342cb23-08697479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ed6c5cb441b51fd7d614e7c6a57efddfc39316' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionSelectClusterGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2803260cc7bb342cb23-08697479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionSelectClusterGroup.tpl -->
        <tr>
            <td colspan="100%">
                <p style="margin:0px; padding-top:15px;"><strong><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getClusterName();?>
</strong></p>
            </td>
        </tr>
        <tr>
            <th class="shaded_title"><?php echo TXT_UCF('PDP_ACTION');?>
</th>
            <th class="shaded_title"><?php echo TXT_UCF('PROVIDER');?>
</th>
            <th class="shaded_title"><?php echo TXT_UCF('DURATION');?>
</th>
            <th class="shaded_title"><?php echo TXT_UCF('COST');?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['pdpActionInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pdpActionInterfaceObject']->key => $_smarty_tpl->tpl_vars['pdpActionInterfaceObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('pdpActionInterfaceObject')->value->fetchHtml();?>

        <?php }} ?>
<!-- /pdpActionSelectClusterGroup.tpl -->