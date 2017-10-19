<?php
if(isset($_POST['order'])){
    $qty = trim(htmlspecialchars($_POST['qty']));

    $ins = $db->prepare('INSERT INTO orders(pid, uid, qty,status,odate) VALUES(?,?,?,"0",NOW())');
    $ins->execute(array($_POST['pid'], $_SESSION['id'], $qty));
    echo '
    <div class="alert alert-success" role="alert">
      <strong>Success!</strong>Order Done!.
    </div>
    ';
}
