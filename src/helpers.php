<?php

use Carbon\Carbon;

function getFormatedDate($date) {
	if ($date instanceof Carbon) {
		return $date->format('d/m/Y');
	} else {
		return '';
	}
}