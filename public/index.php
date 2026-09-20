<?php

session_start();

require_once __DIR__ . '/../config/database.php';

$url = trim($_GET['url'] ?? '', '/');

require_once __DIR__ . '/../routes/web.php';