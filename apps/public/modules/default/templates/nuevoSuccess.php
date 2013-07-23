<div id="nuevo_userr">
    <div id="notificaciones_nuevo">
        <?php if ($sf_user->hasFlash('notice_user')): ?>
            <div><?php echo $sf_user->getFlash('notice_user') ?></div>
        <?php endif ?>

        <?php if ($sf_user->hasFlash('error_user')): ?>
            <div><?php echo $sf_user->getFlash('error_user') ?></div>
        <?php endif ?>
    </div>

    <?php echo jq_form_remote_tag(array('url' => '@nuevou', 'update' => 'nuevo_userr')) ?> 
    <form action="" method="POST">
        <table>
            <tbody>
            <p>Registrate</p>
            <?php echo $form ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2"><input type="submit" value="Guardar" /></th>
                    <!--<th><a href="./"> Regresar </a></th>-->
                </tr>
            </tfoot>
        </table>
    </form>
</div>