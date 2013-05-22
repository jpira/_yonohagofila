<?php if ($sf_user->hasFlash('error_private')): ?>
    <div id="error"><?php echo $sf_user->getFlash('error_private') ?></div>
<?php endif ?>

<?php if ($sf_user->hasFlash('notice_private')): ?>
    <div id="notice"><?php echo $sf_user->getFlash('notice_private') ?></div>
<?php endif ?>

<?php if ($sf_user->hasFlash('alert_private')): ?>
    <div id="alert"><?php echo $sf_user->getFlash('alert_private') ?></div>
<?php endif ?>