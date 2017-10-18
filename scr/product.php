<?php
$ok = true;
if(isset($_POST['addPdct'])){
    $n = trim(htmlspecialchars($_POST['name']));
    $d = trim(htmlspecialchars($_POST['desc']));
    $p = trim(htmlspecialchars($_POST['price']));
    $q = trim(htmlspecialchars($_POST['qty']));
    $t = trim(htmlspecialchars($_POST['type']));

    if(!preg_match('/^[a-zA-Z0-9 ]{5,60}$/', $n)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Name!</strong>Wrong format letters and spaces (5 - 60 characters).
        </div>';
    }

    if(!preg_match('/^[0-9]+$/', $q)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Quantity!</strong>Wrong format numbers only.
        </div>';
    }

    if(!preg_match('/^[0-9]+(\.)?[0-9]+$/', $p)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Price!</strong>Wrong format (EX: 12.2).
        </div>
        ';
    }

    if(strlen($d) < 5 || strlen($d) > 200) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Description!</strong>Wrong length must be between 5 and 200 characters.
        </div>
        ';
    }

    if($ok){
        $ins = $db->prepare('INSERT INTO producs(name,description,price,qty,type) VALUES(?,?,?,?,?)');
        if($ins->execute(array($n, $d, $p, $q, $t))){
            echo '
            <div class="alert alert-success" role="alert">
              <strong>Success!</strong>Project successfully added.
            </div>
            ';
        }
    }
}
if(isset($_POST['editPdct'])){
    $n = trim(htmlspecialchars($_POST['name']));
    $d = trim(htmlspecialchars($_POST['desc']));
    $p = trim(htmlspecialchars($_POST['price']));
    $q = trim(htmlspecialchars($_POST['qty']));
    $s = trim(htmlspecialchars($_POST['stock']));
    $t = trim(htmlspecialchars($_POST['type']));

    if(!preg_match('/^[a-zA-Z0-9 ]{5,60}$/', $n)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Name!</strong>Wrong format letters and spaces (5 - 60 characters).
        </div>';
    }

    if(!preg_match('/^[0-9]+$/', $q)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Quantity!</strong>Wrong format numbers only.
        </div>';
    }

    if(!preg_match('/^[0-9]+(\.)?[0-9]+$/', $p)) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Price!</strong>Wrong format (EX: 12.2).
        </div>
        ';
    }

    if(strlen($d) < 5 || strlen($d) > 200) {
        $ok = false;
        echo '
        <div class="alert alert-danger" role="alert">
          <strong>Product Description!</strong>Wrong length must be between 5 and 200 characters.
        </div>
        ';
    }

    if($ok){
        $ns = (int)$s + (int)$q;
        $ins = $db->prepare('UPDATE producs SET name = ?,description = ?,price = ?,qty = ?,type = ? WHERE id = ?');
        if($ins->execute(array($n, $d, $p, $ns, $t, $_GET['id']))){
            echo '
            <div class="alert alert-success" role="alert">
              <strong>Success!</strong>Project successfully updated.
            </div>
            ';
        }
    }
}
 ?>
