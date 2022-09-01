<?php

function introsection(string $title) {
  return '
    <div class="view jarallax" data-jarallax=\'{"speed": 0.2}\' style="background-image: url(\'https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg\'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-black-light">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row pt-5 mt-3">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>' . $title . '</strong></h1>
              <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
              <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography &
                  design</strong></h5>
              <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a>
              <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ';
};

function postRow($row) {
  /// dados . dados = concatenar dados
  $html = '
  <div class="row">
  <div class="col-lg-4 mb-4">
    <div class="view overlay z-depth-1">
      <img src="' . $row[0] . '" class="img-fluid" alt="First sample image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  </div>
    <div class="col-lg-7 mb-4">
      <a href="" class="' . $row[1] . '">
        <h6 class="pb-1"><i class="fas fa-heart"></i><strong>' . $row[2] . '</strong></h6>
      </a>
      <h4 class="mb-4"><strong>' . $row[3] . '</strong></h4>
      <p>' . $row[4] . "</p>
      <p>by <a href=http://localhost/miguellima/user-data.php?user=".$row[5]."><strong>" . $row[5] . '</strong></a>, ' . $row[6] . '</p>
      <a class="btn btn-primary">Read more</a>
    </div>
  </div>
  ';

  return $html;
};

function oldRow($row) {
  /// dados . dados = concatenar dados
  $html = '
  
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="view overlay z-depth-1 mb-2">
      <img src="'. $row[0] . '" class="img-fluid"  alt="First sample image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <a href="" class="pink-text">
      <h6 class="mb-3 mt-3"><i class="fas fa-map "></i><strong>' . $row[1] . '</strong></h6>
    </a>
    <h4 class="mb-3 font-weight-bold">' . $row[2] . "</h4>
    <p>by <a href='http://localhost/miguellima/user-data.php?user=".$row[3]."'><strong>" . $row[3] . '</strong></a>, ' . $row[4] . '</p>
    <p>' . $row[5] . '</p>
    <a class="btn btn-primary">Read more</a>
  </div>
  
  ';

  return $html;
};

function getRecentPosts(array $array) {

$Posts = '';

$mainfive[0] = $array[0];
$mainfive[1] = $array[1];
$mainfive[2] = $array[2];
$mainfive[3] = $array[3];
$mainfive[4] = $array[4];

foreach ($mainfive as $row) {
  $Posts .= postRow($row);
};
return $Posts;
}

function getOldPosts(array $array) {

  $Posts = '';
  foreach ($array as $row) {
    $Posts .= oldRow($row);
  };
  return $Posts;
  }


include_once 'db-manager.php';
function getPostTable() {
  $m = getPosts();
  $html = '';

  foreach ($m as $row) {
    $html .= '<tr>';
    $html .= '<td>'.$row[0].'</td>';
    $html .= '<td>'.$row[2].'</td>';
    $html .= '<td>'.$row[3].'</td>';
    $html .= '<td>'.$row[4].'</td>';
    $html .= '<td>'.createLink($row[7]).'</td>';
    $html .= '</tr>';
  }

  return $html;

}

function getPostTableByName($user) {
  $m = getPostsByName($user);
  $html = '';

  foreach ($m as $row) {
    $html .= '<tr>';
    $html .= '<td>'.$row[1].'</td>';
    $html .= '<td>'.$row[2].'</td>';
    $html .= '<td>'.$row[3].'</td>';
    $html .= '<td>'.$row[4].'</td>';
    if ($_SESSION != NULL) {
    $html .= '<td>'.createLink($row[0]).'</td>';
    }
    $html .= '</tr>';
  }

  return $html;

}


function createLink($id) {

  $html = '<a href="http://localhost/miguellima/edit-post.php?id='.$id.'"><i class="far fa-edit blue-text"></i></a>';
  $html .= '<a href="http://localhost/miguellima/aula04/model/deleta-post.php?id='.$id.'"><i class="far fa-trash-alt red-text"></i></a>';
  return $html;

}


include_once 'db-manager.php';
function getUserTable() {
  $m = getUsers();
  $html = '';

  $link = 'user-data.php?user=';

  foreach ($m as $row) {
    $html .= '<tr>';
    $html .= "<td><a href='".$link.$row[1]."'>".$row[1].'</a></td>';
    $html .= '<td>'.$row[2].'</td>';
    $html .= '<td>'.$row[3].'</td>';
    $html .= '<td>'.createUserLink($row[0]).'</td>';
    $html .= '</tr>';
  }

  return $html;

}

function createUserLink($id) {

  $html = '<a href="http://localhost/miguellima/edit-user.php?id='.$id.'"><i class="far fa-edit blue-text"></i></a>';
  $html .= '<a href="http://localhost/miguellima/aula04/model/deleta-user.php?id='.$id.'"><i class="far fa-trash-alt red-text"></i></a>';
  return $html;

}

include_once 'db-manager.php';
function checkPassword($userInput) {
  
  $dbUser = getuserByName($userInput['user']);

  if ($userInput['passwd'] == $dbUser[2]) {
    //$_SESSION['user'] = $dbUser['user'];
    return true;
  } else {
    return false;
  }


}

?>