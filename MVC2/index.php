<?php

require_once 'common/env.php';
require_once 'common/connect.php';
require_once 'models/userModel.php';
require_once 'controllers/userController.php';
$act = (!empty($_GET['act']) ? $_GET['act'] : '/');
switch ($act) {
    case '/': {

            showUser();
            break;
        }
    case 'chitietuser': {
            $user_id = (!empty($_GET['userid']) ? $_GET['userid'] : '');

            showDetailUser($user_id);
            break;
        }
    case 'add_user': {
            addUser();
            if (isset($_POST['btnSubmit'])) {
                addPostUser(
                    $_POST['name'],
                    $_POST['age'],
                    $_POST['address']


                );
            }
            break;
        }
}
