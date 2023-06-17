<?php
date_default_timezone_set('Asia/Kuala_Lumpur');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
$json = array();
if ( $Hour >= 5 && $Hour <= 11 ) {
    $json = array('text' => 'Good morning');
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    $json = array('text' => 'Good afternoon');
} else if ( $Hour >= 19 || $Hour <= 23 ) {
    $json = array('text' => 'Good evening');
} else if ( $Hour >= 0 || $Hour <= 4 ) {
    $json = array('text' => 'Hello night owl');
}
echo json_encode($json);
?>
