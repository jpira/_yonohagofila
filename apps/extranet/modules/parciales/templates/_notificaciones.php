<?php if ($sf_user->hasFlash('error_extranet')): ?>
    <div id="error"><?php echo $sf_user->getFlash('error_extranet') ?></div>
<?php endif ?>

<?php if ($sf_user->hasFlash('notice_extranet')): ?>
    <div id="notice"><?php echo $sf_user->getFlash('notice_extranet') ?></div>
<?php endif ?>

<?php if ($sf_user->hasFlash('alert_extranet')): ?>
    <div id="alert"><?php echo $sf_user->getFlash('alert_extranet') ?></div>
<?php endif ?>