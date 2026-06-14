<?php


function generarTarjeta($datos) {
    // Asignamos valores por defecto por si falta alguna llave en el arreglo
    $titulo     = $datos['titulo'] ?? 'Sin Título';
    $valor      = $datos['valor'] ?? '0';
    $colorBorde = $datos['color_borde'] ?? 'primary';
    $icono      = $datos['icono'] ?? 'fa-question';
    ?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-<?php echo $colorBorde; ?> shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-<?php echo $colorBorde; ?> text-uppercase mb-1">
                            <?php echo $titulo; ?>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $valor; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas <?php echo $icono; ?> fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>