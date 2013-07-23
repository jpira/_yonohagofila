<div id="edit_userr">
    <div id="notificaciones_nuevo">
        <?php if ($sf_user->hasFlash('notice_user')): ?>
            <div><?php echo $sf_user->getFlash('notice_user') ?></div>
        <?php endif ?>

        <?php if ($sf_user->hasFlash('error_user')): ?>
            <div><?php echo $sf_user->getFlash('error_user') ?></div>
        <?php endif ?>
    </div>

    <?php echo jq_form_remote_tag(array('url' => '@edit', 'update' => 'edit_userr')) ?> 
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2"><input type="submit" value="Guardar"/></th>
            </tr>
        </tfoot>
    </table>
</form>
</div>