<?php
$ok = true;
if(isset($_POST['reg'])){
    $fn = trim(htmlspecialchars($_POST['fn']));
    $em = trim(htmlspecialchars($_POST['em']));
    $nb = trim(htmlspecialchars($_POST['ph']));
    $ps = trim(htmlspecialchars($_POST['ps']));
    $cn = trim(htmlspecialchars($_POST['cn']));

    if(!preg_match('/^[a-zA-Z ]{5,100}$/', $fn)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Full Name!</strong>Wrong format letters and spaces (5 - 100 characters).
        </div>';
    }

    if(!preg_match('/(^[a-zA-Z0-9_.+-]+)@([a-zA-Z_-]+).([a-zA-Z]){2,4}$/', $em)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Email!</strong>Wrong format (EX: example@domain.com).
        </div>';
    }

    if(!preg_match('/^[0-9]{10}$/', $nb)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Phone!</strong>Wrong format 10 numbers.
        </div>
        ';
    }

    if(strlen($ps) < 6 || strlen($ps) > 16){
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Password!</strong>Wrong length must be between 6 and 16 characters.
        </div>
        ';
    }

    if ($ps != $cn) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>confirm!</strong>password and confirm do not match.
        </div>
        ';
    }

    $check = $db->prepare('SELECT COUNT(*) AS nbr FROM users WHERE email = ?');
    $check->execute(array($em));
    $result = $check->fetch();
    if($result['nbr'] > 0){
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Email!</strong>Email already exist.
        </div>
        ';
    }

    if($ok){
        $ins = $db->prepare('INSERT INTO users(fullname,email,password,phone,usertype) VALUES(?,?,?,?,1)');
        if($ins->execute(array($fn, $em, sha1($ps), $nb))){
            $_SESSION['id'] = $db->lastInsertId();
            $user = $db->prepare('SELECT * FROM users WHERE id = ?');
            $user->execute(array($_SESSION['id']));
            $u = $user->fetch();
            $_SESSION = $u;

            header('location: account.php');
        }
    }
}

if(isset($_POST['editProf'])){
    $fn = htmlspecialchars(trim($_POST['fn']));
    $ph = htmlspecialchars(trim($_POST['ph']));
    $em = strtolower(htmlspecialchars(trim($_POST['em'])));


    //check if the Full Name format is correct (letter within 2 and 5 char)
    if(!preg_match('/^[a-zA-Z ]{5,100}$/', $fn)) {
        $ok = false;
        echo '<div class="alert alert-danger" role="alert"><strong>Full Name Wrong Format!</strong> 5 - 100 letters & spaces only</div>';
    }

    //check if the email format is correct (letter within 2 and 5 char)
    if(!preg_match('/(^[a-zA-Z0-9_.+-]+)@([a-zA-Z_-]+).([a-zA-Z]){2,4}$/', $em)) {
        $ok = false;
        echo '<div class="alert alert-danger" role="alert"><strong>Email Wrong Format!</strong> must be in example@domain.extension format</div>';
    }

    if(!preg_match('/^[0-9]{10}$/', $ph)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Phone!</strong>Wrong format 10 numbers.
        </div>
        ';
    }

    //check if the email does not exist
    $check = $db->prepare('SELECT COUNT(*) AS nbr FROM users WHERE email = ? AND id != ?');
    $check->execute(array($em, $_SESSION['id']));
    $result = $check->fetch();
    if($result['nbr'] > 0){
        $ok = false;
        echo '<div class="alert alert-danger" role="alert"><strong>Error</strong> Email already exist</div>';
    }

    //if all is alright ($ok === true) we insert the value
    if($ok){
        $stdadd = $db->prepare('UPDATE users SET fullname = ?, email = ?, phone = ? where id = ?');
        if($stdadd->execute(array(ucwords($fn), $em, $ph, $_SESSION['id']))){
            echo '<div class="alert alert-success" role="alert"><strong>Success</strong> Update Done!</div>';
        }
        else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error</strong> Something went wrong</div>';
        }
    }

    if(isset($_POST['ps']) && isset($_POST['cn']) && !empty($_POST['ps']) && !empty($_POST['cn'])){
        $pw = htmlspecialchars(trim($_POST['ps']));
        $cn = htmlspecialchars(trim($_POST['cn']));

        if(strlen($pw) < 6 || strlen($pw) > 16){
            $ok = false;
            echo '<div class="alert alert-danger" role="alert"><strong>Password!</strong> 6 - 16 characters</div>';
        }

        if ($pw != $cn) {
            $ok = false;
            echo '<div class="alert alert-danger" role="alert"><strong>Confirm!</strong> password do not match</div>';
        }
        if($ok){
            $stdadd = $db->prepare('UPDATE users SET password = ? where id = ?');
            $stdadd->execute(array(sha1($pw), $_SESSION['id']));
        }
    }

    $se = $db->prepare('SELECT * FROM users WHERE id = ?');
    $se->execute(array($_SESSION['id']));
    $s = $se->fetch();
    $_SESSION = $s;
}

if(isset($_POST['log'])){
    $em = htmlspecialchars(trim($_POST['em']));
    $ps = htmlspecialchars(trim($_POST['ps']));

    $check = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
    $check->execute(array($em, sha1($ps)));
    if($user = $check->fetch()){
        $_SESSION = $user;
        header('location: Account.php');
    }
    else {
        echo '<div class="alert alert-danger" role="alert"><strong>Error</strong> User not found or data do not match</div>';
    }
}
 ?>
