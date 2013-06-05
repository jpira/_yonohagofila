<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $local->getNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_imagen">
  <?php echo image_tag('../../uploads/imagen/' . $local->getImagen(), array('size' => '70x70')) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_estado">
  <?php echo get_partial('local/list_field_boolean', array('value' => $local->getEstado())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fecha_creacion">
  <?php echo $local->getFechaCreacion() ?>
</td>
