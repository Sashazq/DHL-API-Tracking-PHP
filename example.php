<?php
/**********************
Example File

**********************/

require("dhl_tracking.class.php");



################
#
# Start Class
#
################
$track = new dhl_tracking('test');
$track->setAuth("********", "********");

################
#
# Single Request
#
################

$awb = 1111111111;
$req_one = $track->single($awb);

print "\n<p>Single Result</p>\n";
print "\n<pre>\n";
print_r($req_one);
print "\n</pre>";

################
#
# Single Request
#
################

$awbs = array();
$awbs[] = 1111111111;
$awbs[] = 1111111112;
$awbs[] = 1111111113;
$awbs[] = 1111111114;
$awbs[] = 1111111115;
$awbs[] = 1111111116;
$awbs[] = 1111111117;
$awbs[] = 1111111118;
$awbs[] = 1111111119;

$req_multi = $track->multipul($awbs);

print "\n<p>Multi Result</p>\n";
print "\n<pre>\n";
print_r($req_multi);
print "\n</pre>";

?>
