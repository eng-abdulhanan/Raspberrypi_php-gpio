<?php
     exec ( "gpio read 0", $status );
     print_r ( $status );
?>