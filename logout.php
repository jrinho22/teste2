<?php

session_start();
unset($_session);
session_destroy();
header('location:index.php');