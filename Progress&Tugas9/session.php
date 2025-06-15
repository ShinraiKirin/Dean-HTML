<?php
       session_start();
       if (!isset($_SESSION['login'])) {
            header("Location: login.php?message=" . urlencode("Tolong login terlebih dahulu."));
           exit;
       }
   ?>