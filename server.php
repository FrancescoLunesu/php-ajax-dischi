<?php

include "db.php";

header("Content-type: application/json");
echo json_encode($database);
