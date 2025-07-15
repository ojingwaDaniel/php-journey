<?php
$person = "Danny";
$user = &$person;
var_dump($user,$person);


$user = "Todimu";
var_dump($user,$person);


$person = "Praise";
var_dump($user,$person);
