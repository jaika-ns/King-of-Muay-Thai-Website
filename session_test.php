<?php
session_start();
echo "<pre>";
echo "Session ID: " . session_id() . "\n";
echo "Session Status: " . session_status() . "\n";
echo "Session Save Path: " . session_save_path() . "\n";
echo "Session Data:\n";
print_r($_SESSION);
echo "</pre>";
?> 