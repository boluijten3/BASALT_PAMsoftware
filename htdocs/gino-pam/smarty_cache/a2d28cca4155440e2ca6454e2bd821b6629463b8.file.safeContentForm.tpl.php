<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/application/interface/templates\components/safeContentForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165960cc7bb395fd31-81582860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d28cca4155440e2ca6454e2bd821b6629463b8' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/safeContentForm.tpl',
      1 => 1379954112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165960cc7bb395fd31-81582860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- safeContentForm.tpl -->
<form id="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" onsubmit="submitPopupSafeForm('<?php echo $_smarty_tpl->getVariable('safeFormIdentifier')->value;?>
', this.name);return false;">
    <?php echo $_smarty_tpl->getVariable('safeFormToken')->value;?>

    <?php if (!empty($_smarty_tpl->getVariable('formTitle',null,true,false)->value)){?><h1><?php echo $_smarty_tpl->getVariable('formTitle')->value;?>
</h1><?php }?>
    <div id="<?php echo constant('DIALOG_MESSAGE');?>
" class="dialog-message" style="width:<?php echo $_smarty_tpl->getVariable('contentWidth')->value;?>
;"></div>
    <?php if ($_smarty_tpl->getVariable('buttonTop')->value){?>
    <div style="width:<?php echo $_smarty_tpl->getVariable('contentWidth')->value;?>
; text-align:<?php echo $_smarty_tpl->getVariable('buttonAlign')->value;?>
">
        <input type="submit" id="<?php echo $_smarty_tpl->getVariable('formSubmitButtonId')->value;?>
" value="<?php if ($_smarty_tpl->getVariable('formSubmitButtonName')->value){?><?php echo $_smarty_tpl->getVariable('formSubmitButtonName')->value;?>
<?php }else{ ?><?php echo TXT_BTN('SAVE');?>
<?php }?>" class="btn btn_width_80">
        <?php if ($_smarty_tpl->getVariable('showCancel')->value){?>
        <input type="button" id="<?php echo constant('CANCEL_BUTTON');?>
" value="<?php if ($_smarty_tpl->getVariable('formCancelButtonName')->value){?><?php echo $_smarty_tpl->getVariable('formCancelButtonName')->value;?>
<?php }else{ ?><?php echo TXT_BTN('CANCEL');?>
<?php }?>" class="btn btn_width_80" onclick="<?php if ($_smarty_tpl->getVariable('formCancelFunction')->value){?><?php echo $_smarty_tpl->getVariable('formCancelFunction')->value;?>
<?php }else{ ?>closeFormDialog()<?php }?>;return false;">
        <?php }?>
    </div>
    <?php }?>
    <div class="<?php if (!$_smarty_tpl->getVariable('inBatch')->value){?>wizard-content<?php }?>" style="<?php if (!$_smarty_tpl->getVariable('fullHeight')->value){?>height:<?php if ($_smarty_tpl->getVariable('contentPixelHeight')->value){?><?php echo $_smarty_tpl->getVariable('contentPixelHeight')->value;?>
<?php }else{ ?>300<?php }?>px;<?php }?> width:<?php echo $_smarty_tpl->getVariable('contentWidth')->value;?>
;">
        <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

    </div>
    <?php if ($_smarty_tpl->getVariable('buttonBottom')->value){?>
    <div style="width:<?php echo $_smarty_tpl->getVariable('contentWidth')->value;?>
; text-align:<?php echo $_smarty_tpl->getVariable('buttonAlign')->value;?>
;">
        <?php if (PamApplication::hasModifiedReferenceDate()&&$_smarty_tpl->getVariable('showReferenceDateWarning')->value){?>
        <span id="referenceDateWarning" class="message warning">
        <?php }?>
        <input type="submit" id="<?php echo $_smarty_tpl->getVariable('formSubmitButtonId')->value;?>
" value="<?php if ($_smarty_tpl->getVariable('formSubmitButtonName')->value){?><?php echo $_smarty_tpl->getVariable('formSubmitButtonName')->value;?>
<?php }else{ ?><?php echo TXT_BTN('SAVE');?>
<?php }?>" class="btn btn_width_80">
        <?php if ($_smarty_tpl->getVariable('showCancel')->value){?>
        <input type="button" id="<?php echo constant('CANCEL_BUTTON');?>
" value="<?php if ($_smarty_tpl->getVariable('formCancelButtonName')->value){?><?php echo $_smarty_tpl->getVariable('formCancelButtonName')->value;?>
<?php }else{ ?><?php echo TXT_BTN('CANCEL');?>
<?php }?>" class="btn btn_width_80" onclick="<?php if ($_smarty_tpl->getVariable('formCancelFunction')->value){?><?php echo $_smarty_tpl->getVariable('formCancelFunction')->value;?>
<?php }else{ ?>closeFormDialog()<?php }?>;return false;">
        <?php }?>
        <?php if (PamApplication::hasModifiedReferenceDate()&&$_smarty_tpl->getVariable('showReferenceDateWarning')->value){?>
            LET OP: de opslagdatum is <?php echo DateUtils::convertToDisplayDate(PamApplication::getReferenceDate());?>

        </span>
        <?php }?>
    </div>
    <?php }?>
</form>
<!-- /safeContentForm.tpl -->