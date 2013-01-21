<?php
/**
*
* phpbb [Deutsch — Du]
*
* @package quickinstall
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/README und http://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Deutsche Übersetzung durch <a href="http://www.phpbb.de/">phpBB.de</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d. M Y|',	// 01 Jan 2007
	'USER_LANG'			=> 'de',
	'USER_LANG_LONG'	=> 'Deutsch',

	'datetime'			=> array(
		'TODAY'		=> 'Heute',
		'TOMORROW'	=> 'Morgen',
		'YESTERDAY'	=> 'Gestern',

		'Sunday'	=> 'Sonntag',
		'Monday'	=> 'Montag',
		'Tuesday'	=> 'Dienstag',
		'Wednesday'	=> 'Mittwoch',
		'Thursday'	=> 'Donnerstag',
		'Friday'	=> 'Freitag',
		'Saturday'	=> 'Samstag',

		'Sun'		=> 'So',
		'Mon'		=> 'Mo',
		'Tue'		=> 'Di',
		'Wed'		=> 'Mi',
		'Thu'		=> 'Do',
		'Fri'		=> 'Fr',
		'Sat'		=> 'Sa',

		'January'	=> 'Januar',
		'February'	=> 'Februar',
		'March'		=> 'März',
		'April'		=> 'April',
		'May'		=> 'Mai',
		'June'		=> 'Juni',
		'July'		=> 'Juli',
		'August'	=> 'August',
		'September' => 'September',
		'October'	=> 'Oktober',
		'November'	=> 'November',
		'December'	=> 'Dezember',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mär',
		'Apr'		=> 'Apr',
		'May_short'	=> 'Mai',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Aug',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Okt',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dez',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D j. M Y, H:i', // Mo 1. Jan 2007, 13:57

));
