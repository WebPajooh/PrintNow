<?php

function formatDate($date, $format = 'Y-m-d') {
	$date = strtotime($date);
	return date($format, $date);
}