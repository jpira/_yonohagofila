<td class="sf_admin_text sf_admin_list_td_local">
  <?php echo $reserva->getLocal()->get('nombre') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_numero_personas">
  <?php echo $reserva->getNumeroPersonas() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_reserva">
  <?php echo false !== strtotime($reserva->getFechaReserva()) ? format_date($reserva->getFechaReserva(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_promedio">
  <?php echo $reserva->getPromedio()->get('promedio') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estado">
  <?php echo $reserva->getEstado() ?>
</td>
