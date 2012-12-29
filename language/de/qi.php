<?php
/**
*
* qi [Deutsch — Du]
*
* @package quickinstall
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUT_QUICKINSTALL'	=> 'Über phpBB3 QuickInstall',
	'ADMIN_EMAIL'			=> 'E-Mail-Adresse des Administrators',
	'ADMIN_EMAIL_EXPLAIN'	=> 'E-Mail-Adresse des Administrators, die in den Boards verwendet wird',
	'ADMIN_NAME'			=> 'Benutzername des Administrators',
	'ADMIN_NAME_EXPLAIN'	=> 'Der Standard-Benutzername für den Administrator in deinen Boards. Dieser kann geändert werden, wenn neue Boards erstellt werden.',
	'ADMIN_PASS'			=> 'Passwort des Administrators',
	'ADMIN_PASS_EXPLAIN'	=> 'Das Standard-Passwort für den Administrator in deinen Boards. Dieses kann geändert werden, wenn neue Boards erstellt werden.',
	'ALT_ENV'				=> 'Alternative Umgebung',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_EXPLAIN'		=> 'Legt fest, ob AutoMOD standardmäßig installiert werden soll. Dies kann geändert werden, wenn neue Boards erstellt werden.',
	'AUTOMOD_INSTALL'		=> 'AutoMOD installieren',

	'BACK_TO_MAIN'			=> '<a href="%s">Zurück zur Hauptseite</a>',
	'BACK_TO_MANAGE'		=> '<a href="%s">Zurück zur Einstellungs-Seite</a>',
	'BOARD_CREATED'			=> 'Board wurde erfolgreich angelegt!',
	'BOARD_DBNAME'			=> 'Name der Datenbank und des Verzeichnisses des Boards',
	'BOARD_DESC'			=> 'Beschreibung des Boards',
	'BOARD_EMAIL'			=> 'E-Mail-Adresse des Boards',
	'BOARD_EMAIL_EXPLAIN'	=> 'Absender-E-Mail für Nachrichten der erstellten Boards.',
	'BOARD_NAME'			=> 'Name des Boards',
	'BOARDS_DELETED'		=> 'Die Boards wurden erfolgreich gelöscht.',
	'BOARDS_DELETED_TITLE'	=> 'Boards gelöscht',
	'BOARDS_DIR'			=> 'Boardverzeichnis',
	'BOARDS_DIR_EXPLAIN'	=> 'Das Verzeichnis, in dem deine Boards erstellt werden. PHP benötigt Schreibrechte in diesem Verzeichnis.',
	'BOARDS_LIST'			=> 'Liste der Boards',
	'BOARDS_NOT_WRITABLE'	=> 'Das Boardverzeichnis ist nicht beschreibbar.',

	'CACHE_NOT_WRITABLE'	=> 'Das Cacheverzeichnis ist nicht beschreibbar.',
	'CHANGELOG'				=> 'Änderungshistorie',
	'CHECK_ALL'				=> 'Alles auswählen',
	'CONFIG_EMPTY'			=> 'Das Konfigurations-Array war leer. Das sollte als Fehler im Bugtracker erfasst werden.',
	'CONFIG_NOT_WRITABLE'	=> 'Die Datei qi_config.php kann nicht beschrieben werden.',
	'COOKIE_DOMAIN'			=> 'Cookie-Domain',
	'COOKIE_DOMAIN_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein.',
	'COOKIE_SECURE'			=> 'Sicherer Server',
	'COOKIE_SECURE_EXPLAIN'	=> 'Falls dein Server über SSL läuft, aktiviere diese Option, ansonsten lass sie deaktiviert. Wenn diese Option aktiviert ist, obwohl der Server nicht über SSL aufgerufen wird, können Fehler bei der Weiterleitung auftreten.',
	'CREATE_ADMIN'			=> 'Administrator erstellen',
	'CREATE_ADMIN_EXPLAIN'	=> 'Wenn „Ja“ ausgewählt wird, so wird tester_1 als Administrator ohne Gründer-Status angelegt.',
	'CREATE_MOD'			=> 'Moderator erstellen',
	'CREATE_MOD_EXPLAIN'	=> 'Wenn „Ja“ ausgewählt wird, so wird tester_1 oder tester_2 (sofern auch ein Administrator erstellt wurde) als globaler Moderator angelegt.',

	'DB_EXISTS'				=> 'Die Datenbank %s existiert bereits.',
	'DB_PREFIX'				=> 'Datenbankpräfix',
	'DB_PREFIX_EXPLAIN'		=> 'Dieser Präfix wird allen Datenbanken vorangestellt, damit keine Datenbanken überschrieben werden, die nicht von QuickInstall angelegt wurden.',
	'DBHOST'				=> 'Datenbankserver',
	'DBHOST_EXPLAIN'		=> 'Meist localhost.',
	'DBMS'					=> 'Datenbank-Typ',
	'DBMS_EXPLAIN'			=> 'Dein Datenbanksystem. Wenn du dir unsicher sind, versuche es mit MySQL.',
	'DBPASSWD'				=> 'Datenbank-Passwort',
	'DBPASSWD_EXPLAIN'		=> 'Das Passwort für den Benutzer der Datenbank',
	'DBPORT'				=> 'Datenbankserver-Port',
	'DBPORT_EXPLAIN'		=> 'Kann meistens leer gelassen werden.',
	'DBUSER'				=> 'Datenbank-Benutzername',
	'DBUSER_EXPLAIN'		=> 'Der Benutzer für deine Datenbank. Dieser Benutzer muss das Recht haben, neue Datenbanken zu erstellen.',
	'DEFAULT'				=> 'Standard',
	'DEFAULT_ENV'			=> 'Standardumgebung (neuestes phpBB)',
	'DEFAULT_LANG'			=> 'Standardsprache',
	'DEFAULT_LANG_EXPLAIN'	=> 'Die Sprache wird für die installierten Boards verwendet.',
	'DELETE'				=> 'Löschen',
	'DELETE_FILES_IF_EXIST'	=> 'Dateien löschen, falls sie existieren',
	'DIR_EXISTS'			=> 'Das Verzeichnis %s existiert bereits.',
	'DISABLED'				=> 'Deaktiviert',
	'DROP_DB_IF_EXISTS'		=> 'Datenbank löschen, falls sie existiert',

	'EMAIL_DOMAIN'			=> 'E-Mail-Domain',
	'EMAIL_DOMAIN_EXPLAIN'	=> 'Die Domain, die für die E-Mail-Adresse der Testbenutzer verwendet wird. Die E-Mail-Adresse lautet tester_<samp>x</samp>@&lt;domain.tld&gt;.',
	'EMAIL_ENABLE'			=> 'E-Mail aktivieren',
	'EMAIL_ENABLE_EXPLAIN'	=> 'Aktiviert die E-Mail-Funktionalität. Für lokale Test-Boards sollte diese normalerweise deaktiviert sein, sofern nicht die E-Mail-Funktionalität getestet wird.',
	'ENABLED'				=> 'Aktiviert',

	'GENERAL_ERROR'			=> 'Allgemeiner Fehler',

	'IN_SETTINGS'			=> 'QuickInstall-Einstellungen verwalten.',
	'INCLUDE_MODS'			=> 'MODs einschließen',
	'INCLUDE_MODS_EXPLAIN'	=> 'Wähle einen in der Liste aufgeführten Ordner aus dem sources/mods/-Ordner aus, dessen Dateien in das Hauptverzeichnis des neuen Boards kopiert werden. Dabei werden bestehende Dateien überschrieben, so dass du hier modifizierte Boards ablegen kannst. Wenn du „Keine“ auswählst, wird diese Funktion nicht genutzt (dadurch kannst du deine Auswahl leichter zurücksetzen).',
	'INSTALL_BOARD'			=> 'Ein Board installieren',
	'INSTALL_QI'			=> 'QuickInstall installieren',
	'IS_NOT_VALID'			=> 'Ist nicht gültig.',

	'LICENSE'				=> 'Lizenz?',
	'LICENSE_EXPLAIN'		=> 'Dieses Script wird unter den Bestimmungen der <a href="license.txt">GNU General Public License version 2</a> veröffentlicht. Diese wurde vor allem gewählt, weil eine große Menge des phpBB-Programmcodes verwendet wird und phpBB ebenfalls unter dieser Lizenz steht und Modifikationen ebenfalls diese Lizenz nutzen müssen. Darüberhinaus ist es eine großartige Lizenz, die sicherstellt, dass freie Software frei bleibt :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installiert durch phpBB Quickinstall %s</strong>',

	// To translators: Lorem Ipsum is a dummy place holder string. Do not translate this string.
	'LOREM_IPSUM'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

	'MAKE_WRITABLE'			=> 'Dateien für jeden beschreibbar machen',
	'MAKE_WRITABLE_EXPLAIN'	=> 'Legt fest, dass Dateien, die config.php und die Verzeichnisse standardmäßig von jedem beschrieben werden können. Dies kann geändert werden, wenn neue Boards erstellt werden',
	'MANAGE_BOARDS'			=> 'Boards verwalten',
	'MAX'					=> 'Maximum',
	'MIGHT_TAKE_LONG'		=> '<strong>Bitte beachten:</strong> Die Installation eines Boards kann einige Zeit dauern — sogar mehr als eine Minute. Sende daher das Formular <strong>nicht</strong> mehrfach ab.',
	'MIN'					=> 'Minimum',

	'NEED_EMAIL_DOMAIN'		=> 'Es muss eine E-Mail-Domain angegeben sein, damit die Test-Benutzer angelegt werden können',
	'NEED_WRITABLE'			=> 'Für QuickInstall müssen die Board- und Cacheverzeichnisse jederzeit beschreibbar sein.<br />Die qi_config.php muss nur während der Installation von QuickInstall beschreibbar sein.',
	'NO'					=> 'Nein',
	'NO_ALT_ENV'			=> 'Die angegebene alternative Umgebung existiert nicht.',
	'NO_AUTOMOD'			=> 'AutoMOD konnte im sources-Verzeichnis nicht gefunden werden. Du musst AutoMOD herunterladen und dessen Hauptverzeichnis in das Verzeichnis sources/automod kopieren.',
	'NO_BOARDS'				=> 'Du hast keine Boards.',
	'NO_DB'					=> 'Es wurde keine Datenbank ausgewählt.',
	'NO_IMPACT_WIN'			=> 'Diese Einstellung hat keine Auswirkung auf Windows-Systeme vor Windows 7.',
	'NO_MODULE'				=> 'Das Modul %s konnte nicht geladen werden.',
	'NO_PASSWORD'			=> 'Kein Passwort',
	'NO_DBPASSWD_ERR'		=> 'Du hast ein Datenbankpasswort angegeben, aber zugleich „Kein Passwort“ ausgewählt. Du kannst nicht gleichzeitig ein Passwort <strong>haben</strong> und <strong>nicht haben</strong>.',
	'NONE'					=> 'Keine',
	'NUM_CATS'				=> 'Anzahl an Kategorien',
	'NUM_CATS_EXPLAIN'		=> 'Die Anzahl der Foren-Kategorien, die erstellt werden sollen.',
	'NUM_FORUMS'			=> 'Anzahl der Foren',
	'NUM_FORUMS_EXPLAIN'	=> 'Die Anzahl der Foren, die erstellt werden sollen. Diese werden gleichmäßig auf die erstellten Kategorien aufgeteilt.',
	'NUM_NEW_GROUP'			=> 'Kürzlich registrierte Benutzer',
	'NUM_NEW_GROUP_EXPLAIN'	=> 'Die Anzahl von Benutzern, die in die Gruppe der kürzlich registrierten Benutzer aufgenommen werden.<br />Wenn diese Zahl größer als die Anzahl an Benutzern ist, werden alle neuen Benutzer in der Gruppe sein.',
	'NUM_REPLIES'			=> 'Anzahl an Antworten',
	'NUM_REPLIES_EXPLAIN'	=> 'Die Anzahl von Antworten, die erstellt werden sollen. Jedes Thema erhält eine zufällige Zahl von Antworten im festgelegten Bereich.',
	'NUM_TOPICS'			=> 'Anzahl von Themen',
	'NUM_TOPICS_EXPLAIN'	=> 'Die Anzahl von Themen, die in jedem Forum erstellt wird. Jedes Forum erhält eine zufällige Zahl von Themen im festgelegten Bereich.',
	'NUM_USERS'				=> 'Anzahl an Benutzern',
	'NUM_USERS_EXPLAIN'		=> 'Die Anzahl an Benutzern, die erstellt werden sollen.<br />Sie bekommen den Benutzernamen tester_<samp>x</samp> (x geht von 1 bis zur Anzahl an Benutzern) und erhalten das Passwort „123456“.',

	'ONLY_LOCAL'			=> 'Bitte beachten: QuickInstall ist nur für die lokale Verwendung gedacht.<br />Es sollte nicht auf einem Webserver verwendet werden, der aus dem Internet zugänglich ist.',
	'OPTIONS'				=> 'Optionen',
	'OPTIONS_ADVANCED'		=> 'Erweiterte Optionen',

	'POPULATE'				=> 'Board befüllen',
	'POPULATE_OPTIONS'		=> 'Füll-Optionen',
	'POPULATE_MAIN_EXPLAIN'	=> 'Benutzer: tester_<samp>x</samp>, Passwort: 123456',
	'POPULATE_EXPLAIN'		=> 'Füllt das Board mit der unten festgelegten Zahl an Benutzern, Foren, Themen und Beiträgen. Beachte, dass die Erstellung von Boards umso länger dauert, je mehr Benutzer, Foren, Themen und Beiträge du erstellen lässt.<br />All diese Einstellungen können geändert werden, wenn neue Boards erstellt werden.',

	'QI_ABOUT'				=> 'Über',
	'QI_ABOUT_ABOUT'		=> 'Der große Bruder liebt dich und will, dass du glücklich bist.',
	'QI_DST'				=> 'Sommerzeit',
	'QI_DST_EXPLAIN'		=> 'Soll die Sommerzeit aktiv oder inaktiv sein?',
	'QI_LANG'				=> 'Sprache für QuickInstall',
	'QI_LANG_EXPLAIN'		=> 'Die Sprache, die QuickInstall verwenden soll. Ein entsprechendes Verzeichnis muss im Ordner language/ existieren. Diese Sprache wird auch als Standard-Sprache der Boards verwendet, wenn die entsprechenden Sprachdateien in sources/phpBB3/language/ abgelegt wurden.',
	'QI_MAIN'				=> 'Hauptseite',
	'QI_MAIN_ABOUT'			=> 'Hier kannst du ein neues Board installieren.<br /><br />„Name der Datenbank und des Verzeichnisses des Boards“ ist das einzige Feld, das du ausfüllen musst, die anderen Felder werden mit den Standardwerten der <em>includes/qi_config.php</em> befüllt.<br /><br />Klicken auf „Erweiterte Optionen“, um weitere Optionen anzuzeigen.',
	'QI_MANAGE'				=> 'Boards verwalten',
	'QI_MANAGE_ABOUT'		=> 'o_O',
	'QI_TZ'					=> 'Zeitzone',
	'QI_TZ_EXPLAIN'			=> 'Deine Zeitzone. Wird als Standard-Zeitzone in den erstellten Boards verwendet. Angabe in der Form -1, 0, 1 usw.',
	'QUICKINSTALL'			=> 'phpBB QuickInstall',

	'REDIRECT'				=> 'Weiterleitung',
	'REDIRECT_EXPLAIN'		=> 'Aktiviert die Weiterleitung zum neuerstellten Board. Dies kann geändert werden, wenn neue Boards erstellt werden.',
	'REDIRECT_BOARD'		=> 'Zum neuen Board weiterleiten',
	'REQUIRED'				=> 'wird benötigt',
	'RESET'					=> 'Zurücksetzen',

	'SELECT'				=> 'Auswählen',
	'SETTINGS'				=> 'Einstellungen',
	'SETTINGS_FAILURE'		=> 'Es sind Fehler aufgetreten. Details sind in untenstehender Meldung enthalten.',
	'SETTINGS_SUCCESS'		=> 'Deine Einstellungen wurden erfolgreich gespeichert.',
	'SERVER_NAME'			=> 'Servername',
	'SERVER_NAME_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein, da QuickInstall <strong>nicht</strong> für öffentlich zugängliche Webserver gedacht ist.',
	'SERVER_PORT'			=> 'Serverport',
	'SERVER_PORT_EXPLAIN'	=> 'Meist 80.',
	'SITE_DESC'				=> 'Beschreibung des Boards',
	'SITE_DESC_EXPLAIN'		=> 'Die Standard-Beschreibung der Boards. Diese kann geändert werden, wenn neue Boards erstellt werden.',
	'SITE_NAME'				=> 'Name des Boards',
	'SITE_NAME_EXPLAIN'		=> 'Der Standard-Name des Boards, der für die Bords verwendet wird. Er kann geändert werden, wenn neue Boards erstellt werden.',
	'SMTP_AUTH'				=> 'SMTP-Authentifizierungsmethode',
	'SMTP_AUTH_EXPLAIN'		=> 'Nur benötigt, wenn ein Benutzername/Passwort eingegeben ist.',
	'SMTP_DELIVERY'			=> 'SMTP-Server für E-Mail nutzen',
	'SMTP_DELIVERY_EXPLAIN'	=> 'Wähle „Ja“ aus, wenn du E-Mails über einen SMTP-Server senden möchtest (oder musst), anstatt die PHP-eigene Mail-Funktion zu nutzen.',
	'SMTP_HOST'				=> 'SMTP-Server-Adresse',
	'SMTP_HOST_EXPLAIN'		=> 'Adresse des SMTP-Servers, der genutzt werden soll',
	'SMTP_PASS'				=> 'SMTP-Passwort',
	'SMTP_PASS_EXPLAIN'		=> 'Gib nur ein Passwort ein, wenn dein SMTP-Server dies erfordert.',
	'SMTP_PORT'				=> 'SMTP-Server-Port',
	'SMTP_PORT_EXPLAIN'		=> 'Ändere diese Einstellung nur, wenn du weißt, dass dein SMTP-Server einen anderen Port nutzt.',
	'SMTP_USER'				=> 'SMTP-Benutzername',
	'SMTP_USER_EXPLAIN'		=> 'Gib nur einen Benutzernamen ein, wenn dein SMTP-Server dies erfordert.',
	'STAR_MANDATORY'		=> '* = erforderlich',
	'SUBMIT'				=> 'Absenden',
	'SUBSILVER'				=> 'Subsilver2 installieren',
	'SUBSILVER_EXPLAIN'		=> 'Wähle aus, ob das Subsilver2-Theme installiert werden soll und ob es als Standard-Style festgelegt werden soll. Dies kann geändert werden, wenn neue Boards erstellt werden.',
	'SUCCESS'				=> 'Erfolgreich',

	'TABLE_PREFIX'			=> 'Tabellenpräfix',
	'TABLE_PREFIX_EXPLAIN'	=> 'Dieser Tabellenpräfix wird für deine Boards verwendet. Du kannst ihn in den erweiterten Einstellungen ändern, wenn du neue Boards erstellst.',
	'TEST_CAT_NAME'			=> 'Test-Kategorie %d',
	'TEST_FORUM_NAME'		=> 'Test-Forum %d',
	'TEST_POST_START'		=> 'Test-Beitrag %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE'		=> 'Test-Thema %d',

	'UNCHECK_ALL'			=> 'Alles abwählen',
	'UP_TO_DATE'			=> 'Der große Bruder sagt, dass deine Version aktuell ist.',
	'UP_TO_DATE_NOT'		=> 'Der große Bruder sagt, dass deine Version veraltet ist.',
	'UPDATE_CHECK_FAILED'	=> 'Die Versionsprüfung mit dem großen Bruder ist gescheitert.',
	'UPDATE_TO'				=> '<a href="%1$s">Auf Version %2$s aktualisieren.</a>',

	'YES'					=> 'Ja',

	'VERSION_CHECK'			=> 'Versionsprüfung mit dem großen Bruder',
	'VISIT_BOARD'			=> '<a href="%s">Das Board aufrufen</a>',

	'WHAT'					=> 'Was?',
	'WHAT_EXPLAIN'			=> 'phpBB3 QuickInstall ist ein Tool, um phpBB auf die Schnelle zu installieren. Völlig überraschend... ;-)',
	'WHO_ELSE'				=> 'Wer sonst noch?',
	'WHO_ELSE_EXPLAIN'		=> '<ul><li>' . implode('</li><li>', array(
		'Besonderer Dank gilt dem phpBB-Team und insbesondere dem Entwickler-Team dafür, dass sie ein so schönes Stück an Software erstellt haben.',
		'Dank gilt dem phpBB.com-MOD-Team (besonders Josh aka „A_Jelly_Doughnut“) für AutoMOD, das in diesem Paket enthalten ist.',
		'Dank gilt Mike TUMS für das nette Logo!',
		'Dank gilt den Beta-Testern!',
		'Dank gilt der phpBB-Community auf phpBB.com, startrekguide.com und phpBBModders.net!',
	)) . '</li></ul>',
	'WHO_WHEN'				=> 'Wer? Wann?',
	'WHO_WHEN_EXPLAIN'		=> 'phpBB3 QuickInstall wurden ursprünglich von Igor „eviL&lt;3“ Wiedler im Sommer 2007 entwickelt und wurde von ihm teilweise im März 2008 umgeschrieben.<br />Seit März 2010 wird dieses Projekt von „Tumba25“ Kanerva betreut.',
	'WHY'					=> 'Wieso?',
	'WHY_EXPLAIN'			=> 'Wenn du viele Modifikationen erstellst, hast du (auch schon in phpBB 2) das Problem, dass du nicht alle Anpassungen in einer einzigen phpBB-Installation verwenden können. Daher ist am besten, wenn du getrennte Installationen verwenden. Allerdings ist es sehr aufwändig, die ganzen Dateien zu kopieren und jedes Mal die Installationsvorgänge durchzuführen. Um diesen Vorgang zu beschleunigen, wurde QuickInstall geboren.',
));
