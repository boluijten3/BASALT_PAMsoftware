<?php /* Smarty version Smarty-3.0.7, created on 2021-06-17 00:00:31
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/mod_level_authorization/level_authorization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2045260ca747f4ae8b3-48082882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7142882a1915e170c4795192d82765b7e23dc0ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/mod_level_authorization/level_authorization.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2045260ca747f4ae8b3-48082882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- level_authorization.tpl -->
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="left_panel" style="width:200px; min-width:200px;">
            <div id="scrollDiv">
                <table align="left" width="100%">
                    <?php  $_smarty_tpl->tpl_vars['user_level'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user_levels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user_level']->key => $_smarty_tpl->tpl_vars['user_level']->value){
?>
                    <tr id='rowLeftNav<?php echo $_smarty_tpl->tpl_vars['user_level']->value['level_id'];?>
'>
                        <td class="divLeftRow bottom_line">
                        <a href="javascript:void(0)" onclick="xajax_moduleLevelAuth_displayAccess(<?php echo $_smarty_tpl->tpl_vars['user_level']->value['level_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['user_level']->value['level_name'];?>
'); selectRow('rowLeftNav<?php echo $_smarty_tpl->tpl_vars['user_level']->value['level_id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['user_level']->value['level_name'];?>
</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
            </div>
        </td>
        <td align="left" >
            <table cellspacing="0" cellpadding="10" border="0">
                <tr>
                    <td>
                        <div id="div_lev_auth_main">
                            &nbsp;
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- /level_authorization.tpl -->