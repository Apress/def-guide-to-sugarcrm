<?php

$GLOBALS['log']->info( "Write me to the info log"); // write to the log at the info level

$GLOBALS['log']->debug( "Variable set to $x"); // write to the log at the debug level, with the current value of $x

$GLOBALS['log']->security( "Illegal access by user {$current_user->username}"); // write to the log at the security level, with the current user's username
