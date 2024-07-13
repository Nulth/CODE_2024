
<?php
function showUser()
{
    $list_user = getAllUser();
    require_once 'views/listUser.php';
}
function showDetailUser($userid)
{
    $user = getUser($userid);
    require_once 'views/detailUser.php';
}
function addUser()
{

    require_once 'views/addUser.php';
}
function addPostUser($name, $age, $address)
{
    addUserModel($name, $age, $address);
    header('Location:'  . BASE_URL);
}

// $list_user = getAllUser();
// $user_id = (!empty($_GET['userid']) ? $_GET['userid'] : '');
// $user = getUser($user_id);
