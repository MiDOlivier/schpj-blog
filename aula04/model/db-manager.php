<?php

$con = mysqli_connect("localhost", "root", "", "miguel_lima");

function getPosts() {
    global $con;
    $sql = "SELECT img,ctgry_color,ctgry,title,body,author,date, id FROM post";
    $res = mysqli_query($con, $sql);
    $m = mysqli_fetch_all($res);
    return $m;
};

function getUsers() {
    global $con;
    $sql = "SELECT id, user, passwd, created_at FROM usuario";
    $res = mysqli_query($con, $sql);
    $m = mysqli_fetch_all($res);
    return $m;
};

function getPost($id) {
    global $con;
    $sql = "SELECT img,ctgry,title,body FROM post WHERE id = $id";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_row($res);
}

function getPostByName($name) {
    global $con;
    $sql = "SELECT img,ctgry,title,body FROM post WHERE author = $name";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_row($res);
}

function getPostsByName($name) {
    global $con;
    $sql = "SELECT id,img,ctgry,title,body FROM post WHERE author = '".$name."'";
    $res = mysqli_query($con, $sql);
    $m = mysqli_fetch_all($res);
    return $m;
}

function getUser($id) {
    global $con;
    $sql = "SELECT user,passwd FROM usuario WHERE id = '".$id."'";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_row($res);
}

function getUserByName($user) {
    global $con;
    $sql = "SELECT id, user, passwd FROM usuario WHERE user = '".$user."'";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_row($res);
}

function getOPosts() {
    global $con;
    $sql = "SELECT img,ctgry,title,author,date,body FROM post";
    $res = mysqli_query($con, $sql);
    $v = mysqli_fetch_all($res);
    $s = [$v[3], $v[4], $v[5]];
    return $s;
};

function insertPost($data) {
    global $con;
    $sql = "INSERT INTO post (img, ctgry_color, ctgry, title, body, author) ";
    $sql .= "VALUES ('".$data['img']."' ,'". $data['ctgry_color'] ."','". $data['ctgry'] ."','". $data['title'] ."','". $data['body'] ."','". $data['author'] ."')";
    return mysqli_query($con, $sql);
}

function insertUser($data) {
    global $con;
    $sql = "INSERT INTO usuario (user, passwd) ";
    $sql .= "VALUES ('".$data['user']."','".$data['passwd']."')";
    return mysqli_query($con, $sql);
}

function editPost($data) {
    global $con;

    $sql = "UPDATE post SET img = '".$data['img']."', ctgry = '".$data['ctgry']."', title = '".$data['title']."', body = '".$data['body']."' WHERE id = '".$data['id']."'";
    return mysqli_query($con, $sql);
    //
}

function editUser($data) {
    global $con;

    $sql = "UPDATE usuario SET user = '".$data['user']."', passwd = '".$data['passwd']."' WHERE id = '".$data['id']."'";
    return mysqli_query($con, $sql);
    //
}

function deletePost($id) {
    global $con;

    $sql = "DELETE FROM post WHERE id = ".$id."";
    return mysqli_query($con, $sql);
    //
}

function deleteUser($id) {
    global $con;

    $sql = "DELETE FROM usuario WHERE id = ".$id."";
    return mysqli_query($con, $sql);
    //
}


?>