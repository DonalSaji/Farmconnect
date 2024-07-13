
<?php
// Create a custom error message
$error_message = "This is a custom error note.";

// Trigger an E_USER_NOTICE error
trigger_error($error_message, E_USER_NOTICE);

// You can also use E_USER_WARNING or E_USER_ERROR for different levels of severity
trigger_error($error_message, E_USER_WARNING);
trigger_error($error_message, E_USER_ERROR);?>