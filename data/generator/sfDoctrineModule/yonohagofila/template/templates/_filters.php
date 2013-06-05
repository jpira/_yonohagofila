<div class="content" align="center"> <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-mini">Filtro</a>
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">FILTRO</h3>
        </div>
        <div class="modal-body">
            <div class="sf_admin_filter">
                [?php if ($form->hasGlobalErrors()): ?]
                [?php echo $form->renderGlobalErrors() ?]
                [?php endif; ?]

                <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter')) ?]" method="post">
                    <table cellspacing="0">
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    [?php echo $form->renderHiddenFields() ?]
                                    [?php echo link_to(__('Reset', array(), 'sf_admin'), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]
                                    <input type="submit" value="[?php echo __('Filter', array(), 'sf_admin') ?]" />
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            [?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]
                            [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
                            [?php include_partial('<?php echo $this->getModuleName() ?>/filters_field', array(
                            'name'       => $name,
                            'attributes' => $field->getConfig('attributes', array()),
                            'label'      => $field->getConfig('label'),
                            'help'       => $field->getConfig('help'),
                            'form'       => $form,
                            'field'      => $field,
                            'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_filter_field_'.$name,
                            )) ?]
                            [?php endforeach; ?]
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>