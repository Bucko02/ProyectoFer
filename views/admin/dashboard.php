<?php include_once 'layout/header.php'; ?>

<?php
// Enrutador interno
$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';

switch ($page) {
    case 'inventario':
        include_once 'inventario.php'; 
        break;
    case 'cards':
        include_once 'cards.php'; 
        break;
    case 'buttons':
        include_once 'buttons.php'; 
        break;
    case 'inicio':
    default:
        include_once 'inicio.php';
        break;
}
?>

<?php include_once 'layout/footer.php'; ?>