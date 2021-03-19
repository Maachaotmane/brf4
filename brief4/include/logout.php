<?php

$_SESSION = [];
//  on détruit la session.
session_destroy();
header('location: ../index.php');
