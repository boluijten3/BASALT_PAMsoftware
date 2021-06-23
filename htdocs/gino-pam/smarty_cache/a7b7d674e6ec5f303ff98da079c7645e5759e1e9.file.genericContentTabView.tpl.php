<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:06:11
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\tab/genericContentTabView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961760ca67c3447a17-85181143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b7d674e6ec5f303ff98da079c7645e5759e1e9' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\tab/genericContentTabView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961760ca67c3447a17-85181143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- genericContentTabView.tpl -->
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td class="total_panel">
            <div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getContentPanelHtmlId();?>
" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
; margin-left:auto; margin-right:auto;">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getContentHtml();?>

                <br />
            </div>
        </td>
    </tr>
</table>
<!-- /genericContentTabView.tpl -->