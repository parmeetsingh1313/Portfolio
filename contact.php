<?php include "./connection.php" ?>
<?php
$name = $_POST['name'];
$Email = $_POST['email'];
$Phone  = $_POST['phone'];

$stmt = $conn->prepare("insert into contact(name,email,phone) values(? ,?, ?)");
    $stmt->bind_param("sss", $name,$Email, $Phone);

    $execval = $stmt->execute();
    echo $execval;
    $stmt->close();
    $conn->close();
    echo '<script language="javascript">';
    echo 'alert("Your Data have been stored"); location.href="index.html"';
    echo '</script>';
?>