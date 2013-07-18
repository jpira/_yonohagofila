<div class="element width3 height3" id="contenido_a_mostrarx" style="display:none">
    <center><h2>Alerta de irregularidad</h2></center>
    <center><h4>Este es un espacio en el cual nos puedes contar si tu reserva presenta alguna irregularidad.</h4></center>
    <?php
    $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
            ->where('r.id_usuario = ? AND fecha_reserva > ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
            ->orderBy('fecha_reserva desc')
//                ->getSqlQuery();print_r($reservas); die;
            ->execute();
    ?>
    <form id="falerta">
        <select name="opcion">
            <option >Selecciona...</option>
            <option value="1">Opcion#1</option>
            <option value="2">Opcion#2</option>
            <option value="3">Opcion#3</option>
        </select>

        <div class="tabla">
            <table id="alerta" class="table reservas-vigentes">
                <thead>
                    <tr>
                        <th class=" blanco">Seleccionar</th>
                        <th class=" blanco">Establecimiento</th>
                        <th class=" blanco">Fecha reserva</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach ($reservas as $r): ?>
                        <tr>
                            <td><input type="radio" name="reserva" value="<?php echo $r->get('id') ?>"></td>
                            <td><?php echo $r->get('Local')->get('nombre') ?></td>
                            <td><?php echo $r->get('fecha_reserva') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <h5>Por favor escriba su alerta</h5>        
        <textarea name="texto" rows="5" cols="70"></textarea>
        <h5>*En los proximos minutos será contactado por el administrador</h5>
        <input id="enviar" type="button" value="Enviar alerta" />
         <button href="#" onclick="muestra_oculta('x')">Cancelar alerta</button>
    </form>
   
</div>
