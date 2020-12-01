<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://jessicapp.000webhostapp.com/projetoFinal');
    </script>
    ";
    
}

?>