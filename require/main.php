<?php
require "confi.php"; // code will throw an error when the file is not found
include  "confi.php"; // will try to continue to run the program
echo "Database : $dHost dUser : $dUser";
