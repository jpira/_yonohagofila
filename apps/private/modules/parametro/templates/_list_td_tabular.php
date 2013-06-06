<td class="sf_admin_text sf_admin_list_td_Local">
  <?php echo $parametro->getLocal()->get('nombre') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $parametro->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_numero_personas">
  <?php echo $parametro->getNumeroPersonas() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_costo_ingreso">
  <?php echo $parametro->getCostoIngreso() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tiempo_respuesta">
  <?php echo $parametro->getTiempoRespuesta() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_creacion">
  <?php echo false !== strtotime($parametro->getFechaCreacion()) ? format_date($parametro->getFechaCreacion(), "f") : '&nbsp;' ?>
</td>
