<?php
session_start();

//hapus isi session
session_destroy();
header("location: ../index.php");
