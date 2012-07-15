<?php use_helper('I18N') ?>
<div id="toga_login_image">
  <p>
    <a href="http://2ga.net/"><img src="/images/toga_login.png" alt="2ga.net"></a>
  </p>
</div>
<form method="post" action="<?php echo url_for("@sf_guard_signin") ?>" name="sf_guard_signin" id="sf_guard_signin" class="sf_apply_signin_inline">
  <ul>
    <?php echo $form ?>
    <li>
      <input type="submit" value="<?php echo __('sign in', array(), 'sfForkedApply') ?>" />
    </li>
  </ul>
  <p>
  <?php echo link_to(__('Reset Your Password',array(),'sfForkedApply'), 'sfApply/resetRequest')  ?>
  </p>
  <p>
  <?php
  echo link_to(__('Create a New Account',array(),'sfForkedApply'), 'sfApply/apply')
  ?>
  </p>
</form>
<div id="toga_login_footer">
</div>
