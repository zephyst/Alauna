<?php include 'app/view/common/header.php';

if (isset($tampons)){
    include 'app/view/common/tampons.php';
}

echo $content;

include 'app/view/common/footer.php';
