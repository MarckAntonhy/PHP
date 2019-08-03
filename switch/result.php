<?php
    $ciudad = $_POST['ciudad'];

    switch ($ciudad) {
        case 'chiclayo':
            echo "Ciudad de la amistad";
            break;
            case 'trujillo':
            echo "Ciudad de la eterna primavera";
            break;
            case 'arequipa':
            echo "Ciudad Blanca";
            break;
            case 'tacna':
            echo "Ciudad Heroica";
            break;
            case 'tarma':
            echo "Perla de los andes";
            break;
            case 'huancavelica':
            echo "Tierra del mercurio";
    }
?>