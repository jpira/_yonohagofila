<?php
if (isset($_POST['busqueda'])) {
    $q = $_POST['busqueda'];
    $sql_res = array('cine', 'comida', 'bar', 'fiesta');
    foreach ($sql_res as $row) {
        $existe = strstr($row, $_POST['busqueda']);
        if ($existe) {
            $fname[] = $row;
//        print_r($row); die;
        } else {
            
        }
    }
    ?>
    <div class="display_box fd-blanco">
<!--        <ul id="filters" class="clearfix" data-option-key="filter">                
            <?php
            if (isset($fname)) {
                foreach ($fname as $q) {
                    ?><li><a href="#filter" data-option-value=".<?php echo $q; ?>"><?php echo $q; ?></a></li> <?php
        }
    }
    ?>
        </ul>-->
    </div>
    <?php
} else {
    
}
?>