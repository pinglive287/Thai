<?php 
if (!function_exists('checkMember')) {
    function checkMember($Role) {
        if($Role != 'user'){
   $message = "สำหรับ User เท่านั้น";
   echo "<script type='text/javascript'>alert('$message'); window.history.back()</script>";
        }
    }
}

if (!function_exists('checkAdmin')) {
    function checkAdmin($Role) {
        if($Role != 'admin'){
   $message = "สำหรับ Admin เท่านั้น";
   echo "<script type='text/javascript'>alert('$message'); window.history.back()</script>";
        }
    }
}
?>