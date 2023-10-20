<?php
require_once('controllers/UserController.php');
require_once('models/UserModel.php');

// Créer une nouvelle instance du contrôleur
$userController = new UserController();

// Vérifier l'action à effectuer
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'showUsers'; // Action par défaut
}

// Appeler la méthode correspondante dans le contrôleur
switch ($action) {
    case 'showUsers':
        $userController->showUsers();
        break;
    case 'addUserForm':
        $userController->addUserForm();
        break;
    case 'addUser':
        $userController->addUser();
        break;
    case 'editUser':
        $userController->editUser();
        break;
    case 'updateUser':
        $userController->updateUser();
        break;
    case 'deleteUser':
        $userController->deleteUser();
        break;
    default:
        echo "Action non valide";
        break;
}
?>
