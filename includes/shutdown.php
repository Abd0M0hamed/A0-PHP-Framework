<?php
/*
* Author: Abdelrahman Mohamed
* Contact: < Abdo.Tasks@Gmail.Com , https://Github.com/abd0m0hamed >
* Project: A0 PHP Lightweight Framework (A0 for Abdo). 
* Description: Simple & Fast & Lightweight PHP Framework to quickly Create website.
* License: Science not for Monopoly.
*/


//Some infromation can be used the debug the request
$shutdownTime = microtime(true);
$runTime = $shutdownTime - $startupTime;

//Add more code here before shutting down the request.

//Disconnect database
A0()->db->disconnect();

