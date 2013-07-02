<div>
    <form action="" method="POST">
        <table>
            <?php echo $form->renderGlobalErrors() ?>
            <tbody>
                <?php $form->setDefault('perfil_id', 3); ?>
                <?php echo $form ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2"><input type="submit" value="Guardar" /></th>
                    <th><a href="./"> Regresar </a></th>
                </tr>
            </tfoot>
        </table>
    </form>
</div>