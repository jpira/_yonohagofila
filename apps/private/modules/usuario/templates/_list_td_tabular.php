<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $usuario->getNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $usuario->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo_identificacion">
  <?php echo $usuario->getTipoIdentificacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_identificacion">
  <?php echo $usuario->getIdentificacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_foto">
  <?php echo image_tag('../../uploads/imagen/' . $usuario->getFoto(), array('size' => '70x70')) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estado">
  <?php echo $usuario->getEstado() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fecha_nacimiento">
  <?php echo $usuario->getFechaNacimiento() ?>
</td>
