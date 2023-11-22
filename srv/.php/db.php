<?php

// Assign variables
$guest_name     = $_POST['guest_name'];
$guest_phone    = $_POST['guest_phone'];
$guest_mail     = $_POST['guest_mail'];
$guest_addr     = $_POST['guest_addr'];

// Start output buffering
ob_start();

echo "Name, \"$guest_name\"";
echo "Phone, \"$guest_phone\"";
echo "Email, \"$guest_mail\"";
echo "Address, \"$guest_addr\"";

// Get the output and clean the buffer
$output = ob_get_clean();

// Specify the file path
$file = 'guest.db';

// Open the file in write mode
$handle = fopen($file, 'w');

// Write the output to the file
fwrite($handle, $output);

// Close the file
fclose($handle);

exec("qrencode ")
?>
