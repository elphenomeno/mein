<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
        if ($_GET['view']== 'connexion') {
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }elseif ($_GET['view']== 'inscription') {
            require(ROUTE_DIR.'vue/security/inscription.html.php');
        }else {
            
        }
    }else {
        require(ROUTE_DIR.'views/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
}

function connexion(): void {

}
function inscription(): void {
    
}
?>