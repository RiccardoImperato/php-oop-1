<?php

$database = file_get_contents(__DIR__ . '/db.json');
$movies_db = json_decode($database, true);
