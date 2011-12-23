
<?php
use_stylesheet('../../../themes/orange/css/jquery/jquery.autocomplete.css');
use_stylesheet('../../../themes/orange/css/ui-lightness/jquery-ui-1.7.2.custom.css');

use_javascript('../../../scripts/jquery/ui/ui.core.js');
use_javascript('../../../scripts/jquery/ui/ui.dialog.js');
use_javascript('../../../scripts/jquery/jquery.autocomplete.js');
?>
<?php use_stylesheet('../orangehrmAdminPlugin/css/changeUserPasswordSuccess'); ?>
<?php use_javascript('../orangehrmAdminPlugin/js/changeUserPasswordSuccess'); ?>
<?php use_javascript('../orangehrmAdminPlugin/js/password_strength'); ?>

<div id="messagebar">
<?php echo isset($templateMessage) ? templateMessage($templateMessage) : ''; ?>
</div>
    
<div id="systemUser">
    <div class="outerbox">

        <div class="mainHeading"><h2 id="UserHeading"><?php echo __("Change Password"); ?></h2></div>
        <form name="frmChangePassword" id="frmChangePassword" method="post" action="" >

            <?php echo $form['_csrf_token']; ?>
            <?php echo $form->renderHiddenFields(); ?>
            <br class="clear"/>

            <label><?php echo __('Username'); ?></label>
            <span id="usernameValue"><?php echo $username; ?></span>
            <div class="errorHolder"></div>
            <br class="clear"/>
            
            <?php echo $form['currentPassword']->renderLabel(__('Current Password') . ' <span class="required">*</span>'); ?>
            <?php echo $form['currentPassword']->render(array("class" => "formInputText", "maxlength" => 20)); ?>
            <div class="errorHolder"></div>
            <br class="clear"/>

            <?php echo $form['newPassword']->renderLabel(__('New Password') . ' <span class="required">*</span>'); ?>
            <?php echo $form['newPassword']->render(array("class" => "formInputText", "maxlength" => 20)); ?>
            <div class="errorHolder"></div>
            <?php echo $form['newPassword']->renderLabel(' ', array('class' => 'score')); ?>
            <br class="clear"/>

            <?php echo $form['confirmNewPassword']->renderLabel(__('Confirm New Password') . ' <span class="required">*</span>'); ?>
            <?php echo $form['confirmNewPassword']->render(array("class" => "formInputText", "maxlength" => 20)); ?>
            <div class="errorHolder"></div>
            <br class="clear"/>


            <div class="formbuttons">
                <input type="button" class="savebutton" name="btnSave" id="btnSave"
                       value="<?php echo __("Save"); ?>"onmouseover="moverButton(this);" onmouseout="moutButton(this);"/>
                <input type="button" class="cancelbutton" name="btnCancel" id="btnCancel"
                       value="<?php echo __("Cancel"); ?>"onmouseover="moverButton(this);" onmouseout="moutButton(this);"/>
            </div>

        </form>
    </div>
</div>
<div class="paddingLeftRequired"><?php echo __('Fields marked with an asterisk') ?> <span class="required">*</span> <?php echo __('are required.') ?></div>

<script type="text/javascript">
	
    var lang_currentPasswordRequired       = "<?php echo __("Current Password is required"); ?>";
    var lang_newPasswordRequired       = "<?php echo __("New Password is required"); ?>";
    var lang_confirmNewPasswordRequired       = "<?php echo __("Confirm New Password is required"); ?>";
    var lang_passwordMissMatch           = "<?php echo __("Passwords do not match"); ?>";
    var lang_maxLengthExceeds             = "<?php echo __("Cannot exceed 20 charactors"); ?>";
    var lang_save                   = "<?php echo __("Save"); ?>";
    var lang_edit                   = "<?php echo __("Edit"); ?>";
    var lang_UserPasswordLength     =   "<?php echo __("Password should have at least 4 characters"); ?>";

</script>