<?php

require_once('log.php');
require_once('bitbucket.php');

// Load config:
include('config.php');
include_once('Main.php');

// Let's go:
initLog(); // Initalize log variables
initPayload(); // Get posted data
fetchParams(); // Get parameters from bitbucket payload (REPO)
checkPaths(); // Check repository and project paths; create them if neccessary
placeVerboseInfo(); // Place verbose log information if specified in config
fetchRepository(); // Fetch or clone repository
checkoutProject(); // Checkout project into target folder

