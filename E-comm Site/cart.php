<?php
/*including header code template*/
ob_start();
include('header.php');
?>

<?php

    /*including cart-details code template*/
    include('Templates/_cart-details.php');

    /*including top-sale code template*/
    include('Templates/_top-sale.php');

?>

<?php

/*including footer code template*/
include('footer.php');
?>