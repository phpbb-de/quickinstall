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
	'ABOUT_SECTIONS'		=> 'Über-Abschnitte',
	'ADMIN_EMAIL'			=> 'E-Mail-Adresse des Administrators',
	'ADMIN_EMAIL_EXPLAIN'	=> 'E-Mail-Adresse des Administrators, die in den Boards verwendet wird',
	'ADMIN_NAME'			=> 'Benutzername des Administrators',
	'ADMIN_NAME_EXPLAIN'	=> 'Der Standard-Benutzername für den Administrator in deinen Boards. Dieser kann geändert werden, wenn neue Boards erstellt werden.',
	'ADMIN_PASS'			=> 'Passwort des Administrators',
	'ADMIN_PASS_EXPLAIN'	=> 'Das Standard-Passwort für den Administrator in deinen Boards. Dieses kann geändert werden, wenn neue Boards erstellt werden.',
	'ADMIN_SETTINGS'		=> 'Administrator-Einstellungen',
	'ALT_ENV'				=> 'Alternative Umgebung',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_EXPLAIN'		=> 'Legt fest, ob AutoMOD standardmäßig installiert werden soll.',
	'AUTOMOD_INSTALL'		=> 'AutoMOD installieren',

	'BACK_TO_MAIN'			=> '<a href="%s">Zurück zur Hauptseite</a>',
	'BACK_TO_MANAGE'		=> '<a href="%s">Zurück zur Einstellungs-Seite</a>',
	'BACK_TOP'				=> 'Nach oben',
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
	'BOARDS_DIR_MISSING'	=> 'Das Verzeichnis %s existiert nicht oder ist nicht beschreibbar.',
	'BOARDS_LIST'			=> 'Liste der Boards',
	'BOARDS_NOT_WRITABLE'	=> 'Das Boardverzeichnis ist nicht beschreibbar.',
	'BOARDS_URL'			=> 'Board-URL-Präfix',
	'BOARDS_URL_EXPLAIN'	=> 'URL-Präfix zum Boardverzeichnis. Wenn du ein absolutes Verzeichnis als Boardverzeichnis angegeben hast, kann es sein, dass du hier eine Domain und/oder Pfad angeben musst, der zum Boardverzeichnis führt. Wenn das Boardverzeichnis relativ ist, kannst du es einfach kopieren.',

	'CACHE_DIR'				=> 'Cache-Verzeichnis',
	'CACHE_DIR_EXPLAIN'		=> 'Im Cache-Verzeichnis legt quickinstall einige Dateien ab. PHP benötigt Schreibrechte in diesem Verzeichnis.',
	'CACHE_DIR_MISSING'		=> 'Das Verzeichnis %s existiert nicht oder ist nicht beschreibbar.',
	'CACHE_NOT_WRITABLE'	=> 'Das Cacheverzeichnis ist nicht beschreibbar.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Du kannst das letzte Profil nicht löschen.',
	'CHANGELOG'				=> 'Änderungshistorie',
	'CHECK_ALL'				=> 'Alles auswählen',
	'CHUNK_POST'			=> 'Paketgröße für Beiträge',
	'CHUNK_POST_EXPLAIN'	=> 'Anzahl der Beiträge pro Datenbank-Anfrage.',
	'CHUNK_SETTINGS'		=> 'Größe der Füllpakete',
	'CHUNK_SETTINGS_EXPLAIN'	=> 'QI versucht die Anzahl der Datenbank-Anfragen zu reduzieren, in dem Beiträge, Themen und Benutzer in Paketen gruppiert werden. Die Paketgröße beeinflusst die Dauer beim Befüllen des Boards. Es gibt keine perfekte Einstellung, die für alle passt. Wenn du mehrere Boards befüllst, kannst du mit der Einstellung herum experimentieren. Zu große Pakete verbrauchen zu viel Arbeitsspeicher und zu kleine Belasten die Datenbank zu häufig. Ein Kompromiss ist die beste Einstellung.',
	'CHUNK_TOPIC'			=> 'Paketgröße für Themen',
	'CHUNK_TOPIC_EXPLAIN'	=> 'Anzahl der Themen pro Datenbank-Anfrage.',
	'CHUNK_USER'			=> 'Paketgröße für Benutzer',
	'CHUNK_USER_EXPLAIN'	=> 'Anzahl der Benutzer pro Datenbank-Anfrage.',
	'CONFIG_BUTTON'			=> 'Klicke hier um die Konfiguration anzuzeigen.',
	'CONFIG_CONVERTED'		=> 'Deine Konfiguration wurde vom alten System auf das Neue aktualisiert, in dem mehrere Profile gespeichert werden können. Es wurde unter dem Namen „default“ gespeichert.<br />Du kannst jetzt die Einstellungen für verschiedene Profile speichern und laden, wenn du ein Board erstellst.',
	'CONFIG_EMPTY'			=> 'Das Konfigurations-Array war leer. Das sollte als Fehler im Bugtracker erfasst werden.',
	'CONFIG_IS_DISPLAYED'	=> 'Die Konfiguration wird unten angezeigt. Sie können versuchen die Daten manuell in einer Datei zu speichern.<br />Stellen Sie dabei sicher, dass der Dateiname auf „.cfg“ endet: zum Beispiel: „settings/main.cfg“.',
	'CONFIG_NOT_WRITABLE'	=> '#The &quot;settings/&quot; directory is not writable.',
	'CONFIG_NOT_WRITABLE'	=> 'Die Datei qi_config.cfg kann nicht beschrieben werden.',
	'CONFIG_NOT_WRITTEN'	=> '#The qi_config.cfg file could not be written.',
	'CONFIG_OPTIONS'		=> 'Konfigurations-Optionen',
	'CONFIG_SETTINGS'		=> 'Board-Konfigurations-Einstellungen',
	'CONFIG_SETTINGS_EXPLAIN'	=> 'Die Einstellungen hier sind Konfigurations-Einstellungen für dein phpBB Board. Diese Einstellungen kannst du nach der Erstellung im Board ändern.',
	'CONFIG_WARNING'		=> '#Click the button below to see the configuration. <b>Warning:</b> passwords you entered will be displayed.',
	'CONVENIENCE'			=> '#Convenience save/reset buttons',
	'CONVENIENCE_EXPLAIN'	=> '#These buttons are here for your (and mine) convenience. They are identical with the other save/reset buttons and saves/resets the whole form.',
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
	'DB_SETTINGS'			=> 'Datenbank-Einstellungen',
	'DBHOST'				=> 'Datenbankserver',
	'DBHOST_EXPLAIN'		=> '#Usually localhost.<br />If you use SQLite this needs to be the absolute path to a directory where your web server has write permissions.',
	'DBHOST_EXPLAIN'		=> 'Meist localhost.',
	'DBMS'					=> 'Datenbank-Typ',
	'DBMS_EXPLAIN'			=> 'Dein Datenbanksystem. Wenn du dir unsicher sind, versuche es mit MySQL.',
	'DBPASSWD'				=> 'Datenbank-Passwort',
	'DBPASSWD_EXPLAIN'		=> 'Das Passwort für den Benutzer der Datenbank.',
	'DBPORT'				=> 'Datenbankserver-Port',
	'DBPORT_EXPLAIN'		=> 'Kann meistens leer gelassen werden.',
	'DBUSER'				=> 'Datenbank-Benutzername',
	'DBUSER_EXPLAIN'		=> 'Der Benutzer für deine Datenbank. Dieser Benutzer muss das Recht haben, neue Datenbanken zu erstellen.',
	'DEFAULT'				=> 'Standard',
	'DEFAULT_ENV'			=> 'Standardumgebung (neuestes phpBB)',
	'DEFAULT_LANG'			=> 'Standardsprache',
	'DEFAULT_LANG_EXPLAIN'	=> '#This language will be used for the created forums. The language pack needs to be in &quot;sources/phpBB3/language&quot; to be visible in the list.',
	'DEFAULT_LANG_EXPLAIN'	=> 'Die Sprache wird für die installierten Boards verwendet.',
	'DELETE'				=> 'Löschen',
	'DELETE_FILES_IF_EXIST'	=> 'Dateien löschen, falls sie existieren',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Soll die Einstellung „Dateien löschen, falls sie existieren“ standardmässig aktiviert sein, wenn ein Board erstellt wird?',
	'DELETE_PROFILE'		=> 'Profil löschen',
	'DELETE_PROFILE_EXPLAIN'	=> 'Das ausgewählte Profil löschen.<br /><strong>Anmerkung: Dieser Schritt kann nicht rückgängig gemacht werden.</strong>',
	'DIR_EXISTS'			=> 'Das Verzeichnis %s existiert bereits.',
	'DIR_URL_SETTINGS'		=> 'Verzeichnis- und URL-Einstellungen',
	'DISABLED'				=> 'Deaktiviert',
	'DROP_DB_IF_EXISTS'		=> 'Datenbank löschen, falls sie existiert',
	'DROP_DB_IF_EXISTS_EXPLAIN'	=> 'Soll die Einstellung „Datenbank löschen, falls sie existiert“ standardmässig aktiviert sein, wenn ein Board erstellt wird?',

	'EMAIL_DOMAIN'			=> 'E-Mail-Domain',
	'EMAIL_DOMAIN_EXPLAIN'	=> 'Die Domain, die für die E-Mail-Adresse der Testbenutzer verwendet wird. Die E-Mail-Adresse lautet tester_<samp>x</samp>@&lt;domain.tld&gt;.',
	'EMAIL_ENABLE'			=> 'E-Mail aktivieren',
	'EMAIL_ENABLE_EXPLAIN'	=> 'Aktiviert die E-Mail-Funktionalität. Für lokale Test-Boards sollte diese normalerweise deaktiviert sein, sofern nicht die E-Mail-Funktionalität getestet wird.',
	'EMAIL_SETTINGS'		=> 'E-Mail-Einstellungen',
	'ENABLED'				=> 'Aktiviert',
	'ERRORS'				=> '#There where errors',
	'ERROR_DEL_BOARDS'		=> '#The following boards could not be deleted',
	'ERROR_DEL_FILES'		=> '#The following files could not be deleted',

	'FORGOT_THIS'				=> '#YOU FORGOT THIS!', // Should be upper case.
	'FUNCTIONS_MODS_MISSING'	=> '#includes/automod/functions_mods.php not found.',

	'GENERAL_ERROR'			=> 'Allgemeiner Fehler',
	'GO'					=> 'Los',
	'GO_QI_MAIN'			=> '#%sGo to QuickInstall main page%s',
	'GO_QI_SETTINGS'		=> '#%sGo to settings%s',
	'GRANT_PERMISSIONS'		=> 'Zusätzliche Rechte vergeben',
	'GRANT_PERMISSIONS_EXPLAIN'	=> '(Z.B. 0060 für Gruppen Schreib- und Leserechte)',

	'IF_EMPTY_EXPLAIN'		=> 'Wenn du diese Option leer lässt, wird der Standardwert der Einstellung genutzt.',
	'IF_LEAVE_EMPTY'		=> 'Wenn du diese Option leer lässt, musst du es beim Erstellen eines Boards angeben.',
	'IN_SETTINGS'			=> 'QuickInstall-Einstellungen verwalten.',
	'INCLUDE_MODS'			=> 'MODs einschließen',
	'INCLUDE_MODS_EXPLAIN'	=> 'Wähle einen in der Liste aufgeführten Ordner aus dem sources/mods/-Ordner aus, dessen Dateien in das Hauptverzeichnis des neuen Boards kopiert werden. Dabei werden bestehende Dateien überschrieben, so dass du hier modifizierte Boards ablegen kannst. Wenn du „Keine“ auswählst, wird diese Funktion nicht genutzt (dadurch kannst du deine Auswahl leichter zurücksetzen).',
	'INSTALL_BOARD'			=> 'Ein Board installieren',
	'INSTALL_QI'			=> 'QuickInstall installieren',
	'IS_NOT_VALID'			=> 'Ist nicht gültig.',

	'LANG_SELECT'			=> '#Language select',
	'LICENSE'				=> 'Lizenz?',
	'LICENSE_EXPLAIN'		=> 'Dieses Script wird unter den Bestimmungen der <a href="license.txt">GNU General Public License version 2</a> veröffentlicht. Diese wurde vor allem gewählt, weil eine große Menge des phpBB-Programmcodes verwendet wird und phpBB ebenfalls unter dieser Lizenz steht und Modifikationen ebenfalls diese Lizenz nutzen müssen. Darüberhinaus ist es eine großartige Lizenz, die sicherstellt, dass freie Software frei bleibt :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installiert durch phpBB Quickinstall %s</strong>',

	'MAKE_WRITABLE'			=> 'Dateien für jeden beschreibbar machen',
	'MAKE_WRITABLE_EXPLAIN'	=> 'Legt fest, dass Dateien, die config.php und die Verzeichnisse standardmäßig von jedem beschrieben werden können.',
	'MAKE_WRITABLE_BOARD'	=> 'Dateien beschreibbar machen',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> '(Entspricht der Vergabe von 0666)',
	'MANAGE_BOARDS'			=> 'Boards verwalten',
	'MAX'					=> 'Maximum',
	'MIGHT_TAKE_LONG'		=> '<strong>Bitte beachten:</strong> Die Installation eines Boards kann einige Zeit dauern — sogar mehr als eine Minute. Sende daher das Formular <strong>nicht</strong> mehrfach ab.',
	'MIN'					=> 'Minimum',

	'NEED_CONVERT'			=> '#Your config file needs to be converted to the new settings style with profiles. Make sure the &quot;settings&quot; directory exists and is writable by PHP. Then click submit.',
	'NEED_EMAIL_DOMAIN'		=> 'Es muss eine E-Mail-Domain angegeben sein, damit die Test-Benutzer angelegt werden können',
	'NEED_WRITABLE'			=> '#QuickInstall needs the &quot;boards&quot; and &quot;cache&quot; directories to be writable all the time.<br />The &quot;settings&quot; directory needs to be in the QI root path and it also needs to be writable.',
	'NEED_WRITABLE'			=> 'Für QuickInstall müssen die Board- und Cacheverzeichnisse jederzeit beschreibbar sein.<br />Die qi_config.php muss nur während der Installation von QuickInstall beschreibbar sein.',
	'NO'					=> 'Nein',
	'NO_ALT_ENV'			=> 'Die angegebene alternative Umgebung existiert nicht.',
	'NO_AUTOMOD'			=> '#<strong>AutoMOD not found in the sources directory.</strong><br />You need to download AutoMOD and copy the contents of the root directory to sources/automod. If you use AutoMOD 1.0.0. it is the contents of the upload directory.',
	'NO_AUTOMOD'			=> 'AutoMOD konnte im sources-Verzeichnis nicht gefunden werden. Du musst AutoMOD herunterladen und dessen Hauptverzeichnis in das Verzeichnis sources/automod kopieren.',
	'NO_AUTOMOD_TITLE'		=> '#AutoMOD not found',
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

	'OFF'					=> 'Aus',
	'ON'					=> 'An',
	'ONLY_LOCAL'			=> '#<strong>Welcome to QuickInstall (QI)</strong>, a tool to quickly install a phpBB board for testing.<br /><br />Some default settings have been loaded below. The only things you need to enter are &quot;Database user&quot; and &quot;Database password&quot; if you want those to be stored by QI. But it would be a good idea to also check the rest of the settings.<br />Make sure the &quot;boards&quot;, &quot;cache&quot; and &quot;settings&quot; directories exist and are writable by PHP.<br /><br />Once you have checked the settings and required directories simply click on the &quot;Submit&quot; button and this profile will be saved under the name &quot;default&quot;. If you want some other name you can enter it in the &quot;Save as new profile&quot; field.<div class="errorbox"><strong>Bitte beachten</strong>: QuickInstall ist nur für die lokale Verwendung gedacht und sollte nicht auf einem Webserver verwendet werden, der aus dem Internet zugänglich ist. <strong>Wenn du QI auf einem öffentlichen Webserver benutzt, tust du das auf deine eigene Gefahr.</strong> Es gibt keine Hilfestellung für die Verwendung auf öffentlichen Webservern.</div>',
	'OPTIONS'				=> 'Optionen',
	'OPTIONS_ADVANCED'		=> 'Erweiterte Optionen',
	'OTHER_CONFIG'			=> 'Weitere Board-Konfigurations-Einstellungen',
	'OTHER_CONFIG_EXPLAIN'	=> 'Diese Werte werden in der Konfigurations-Tabelle aktualisiert oder neu hinzugefügt, falls sie bisher nicht existieren. Also achte auf Tippfehler. Diese Werte können auch geändert werden wenn das Board erstellt wird.<br />Eine Konfigurations-Einstellung pro Zeile, getrennt mit Semikola „;“. Name;Einstellung;Dynamisch, wenn die Einstellung nicht dynamisch ist, wird der dynamisch-Teil nicht benötigt. Zeilen die mit einem # anfangen werden als Kommentare interpretiert und nicht in die Datenbank eingefügt. Beispiel:<br />load_tplcompile;1;1<br />session_length;999999<br /># Dies ist ein Kommentar ...',
	'OTHER_SETTINGS'		=> 'Weitere Einstellungen',

	'PHPINFO'				=> '#PHP information',
	'PHPINFO_EXPLAIN'		=> '#This page lists information on the version of PHP installed on this server. It includes details of loaded modules, available variables and default settings. This information may be useful when diagnosing problems. Please be aware that some hosting companies will limit what information is displayed here for security reasons. You are advised to not give out any details on this page except when asked by official team members on the support forums.',
	'PLAIN_TEXT'			=> '<strong>Warnung</strong>: QI speichert Passwörter und Benutzernamen im Klartext.',
	'POPULATE'				=> 'Board befüllen',
	'POPULATE_EXPLAIN'		=> 'Füllt das Board mit der unten festgelegten Zahl an Benutzern, Foren, Themen und Beiträgen. Beachte, dass die Erstellung von Boards umso länger dauert, je mehr Benutzer, Foren, Themen und Beiträge du erstellen lässt.<br />All diese Einstellungen können geändert werden, wenn neue Boards erstellt werden.',
	'POPULATE_MAIN_EXPLAIN'	=> 'Benutzer: tester_<samp>x</samp>, Passwort: 123456',
	'POPULATE_OPTIONS'		=> 'Füll-Optionen',
	'POPULATE_SETTINGS'		=> 'Füll-Einstellungen',
	'PROFILE'				=> 'Profil',
	'PROFILES'				=> 'Profile',

	'QI_ABOUT'				=> 'Über',
	'QI_DST'				=> 'Sommerzeit',
	'QI_DST_EXPLAIN'		=> 'Soll die Sommerzeit an oder aus sein?',
	'QI_LANG'				=> 'Sprache für QuickInstall',
	'QI_LANG_EXPLAIN'		=> '#The language will be visible when the language pack is available in the directory &quot;language/&quot;',
	'QI_LANG_EXPLAIN'		=> 'Die Sprache, die QuickInstall verwenden soll. Ein entsprechendes Verzeichnis muss im Ordner language/ existieren.',
	'QI_MAIN'				=> 'Hauptseite',
	'QI_MAIN_ABOUT'			=> 'Hier kannst du ein neues Board installieren.<br /><br />„Name der Datenbank und des Verzeichnisses des Boards“ ist das einzige Feld, das du ausfüllen musst, die anderen Felder werden mit den Standardwerten der <em>includes/default_settings.php</em> befüllt.<br /><br />Klicken auf „Erweiterte Optionen“, um weitere Optionen anzuzeigen.',
	'QI_MANAGE'				=> 'Boards verwalten',
	'QI_MANAGE_ABOUT'		=> 'o_O',
	'QI_TZ'					=> 'Zeitzone',
	'QI_TZ_EXPLAIN'			=> 'Deine Zeitzone. Wird als Standard-Zeitzone in den erstellten Boards verwendet. Angabe in der Form -1, 0, 1 usw.',
	'QUICKINSTALL'			=> 'phpBB QuickInstall',

	'REDIRECT'				=> 'Weiterleitung',
	'REDIRECT_EXPLAIN'		=> 'Aktiviert die Weiterleitung zum neuerstellten Board.',
	'REDIRECT_BOARD'		=> 'Zum neuen Board weiterleiten',
	'REQUIRED'				=> 'wird benötigt',
	'RESET'					=> 'Zurücksetzen',
	'RETURN_MANAGE'			=> '#Return to the Manage tab',

	'SAVE_PROFILE'			=> 'Neues Profil speichern',
	'SAVE_PROFILE_EXPLAIN'	=> 'Trage den Namen für dieses Einstellungsprofil ein. Nur A-Z, a-z, 0-9, „-“ (Minuszeichen), „_“ (Unterstrich) und „.“ (Punkt) sind erlaubt.<br /><strong>Anmerkung: Wenn bereits ein Profil mit dem Namen existiert, wird es überschrieben.</strong>',
	'SAVE_RESTORE'			=> 'Sichern/Wiederherstellen',
	'SELECT'				=> 'Auswählen',
	'SETTINGS'				=> 'Einstellungen',
	'SETTINGS_FAILURE'		=> 'Es sind Fehler aufgetreten. Details sind in untenstehender Meldung enthalten.',
	'SETTINGS_NOT_WRITABLE'	=> '#The settings directory do not exist, is not a directory or is not writable.',
	'SETTINGS_SECTIONS'		=> 'Einstellungs-Abschnitte',
	'SETTINGS_SUCCESS'		=> 'Deine Einstellungen wurden erfolgreich gespeichert.',
	'SERVER_COOKIE_SETTINGS'	=> 'Server- und Cookie-Einstellungen',
	'SERVER_NAME'			=> 'Servername',
	'SERVER_NAME_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein, da QuickInstall <strong>nicht</strong> für öffentlich zugängliche Webserver gedacht ist.',
	'SERVER_PORT'			=> 'Serverport',
	'SERVER_PORT_EXPLAIN'	=> 'Meist 80.',
	'SHOW_CONFIRM'			=> 'Löschen bestätigen',
	'SHOW_CONFIRM_EXPLAIN'	=> 'Beim Löschen von Boards und Profilen eine Bestätigung abgefragen.',
	'SITE_DESC'				=> 'Beschreibung des Boards',
	'SITE_DESC_EXPLAIN'		=> 'Die Standard-Beschreibung der Boards. Diese kann geändert werden, wenn neue Boards erstellt werden.',
	'SITE_NAME'				=> 'Name des Boards',
	'SITE_NAME_EXPLAIN'		=> 'Der Standard-Name des Boards, der für die Boards verwendet wird. Er kann geändert werden, wenn neue Boards erstellt werden.',
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
	'SQLITE_PATH_MISSING'	=> '#The entered database server path is either missing or not writeable.',
	'STAR_MANDATORY'		=> '* = erforderlich',
	'SUBMIT'				=> 'Absenden',
	'SUBSILVER'				=> 'Subsilver2 installieren',
	'SUBSILVER_EXPLAIN'		=> 'Wähle aus, ob das Subsilver2-Theme installiert werden soll und ob es als Standard-Style festgelegt werden soll.',
	'SUCCESS'				=> 'Erfolgreich',
	'SURE_DELETE_PROFILE'	=> '#Are you sure you want to delete this profile? It can not be undone.',
	'SURE_DELETE_BOARDS'	=> '#Are you sure you want to delete these boards/this board? It can not be undone.',

	'TABLE_PREFIX'			=> 'Tabellenpräfix',
	'TABLE_PREFIX_EXPLAIN'	=> 'Dieser Tabellenpräfix wird für deine Boards verwendet. Du kannst ihn in den erweiterten Einstellungen ändern, wenn du neue Boards erstellst.',
	'TEST_CAT_NAME'			=> 'Test-Kategorie %d',
	'TEST_FORUM_NAME'		=> 'Test-Forum %d',
	'TEST_POST_START'		=> 'Test-Beitrag %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE'		=> 'Test-Thema %d',
	'THESE_CAN_CHANGE'		=> 'Diese Einstellungen können beim Erstellen eines Boards geändert werden.',
	'THIS_CAN_CHANGE'		=> 'Diese Einstellung kann beim Erstellen eines Boards geändert werden.',
	'TIME_SETTINGS'			=> 'Zeitzonen-Einstellungen',

	'UNCHECK_ALL'			=> 'Alles abwählen',

	'YES'					=> 'Ja',

	'WHAT'					=> 'Was?',
	'WHAT_EXPLAIN'			=> 'phpBB3 QuickInstall ist ein Tool, um phpBB auf die Schnelle zu installieren. Völlig überraschend... ;-)',
	'WHO_ELSE'				=> 'Wer sonst noch?',
	'WHO_ELSE_EXPLAIN'		=> '<ul><li>' . implode('</li><li>', array(
		'Besonderer Dank gilt dem phpBB-Team und insbesondere dem Entwickler-Team dafür, dass sie ein so schönes Stück an Software erstellt haben.',
		'Dank gilt dem phpBB.com-MOD-Team (besonders Josh aka „A_Jelly_Doughnut“) für AutoMOD.',
		'Dank gilt Mike TUMS für das nette Logo!',
		'Dank gilt den Beta-Testern!',
		'Dank gilt der phpBB-Community auf phpBB.com, startrekguide.com und phpBBModders.net!',
	)) . '</li></ul>',
	'WHO_WHEN'				=> 'Wer? Wann?',
	'WHO_WHEN_EXPLAIN'		=> 'phpBB3 QuickInstall wurden ursprünglich von Igor „igorw“ Wiedler im Sommer 2007 entwickelt und wurde von ihm teilweise im März 2008 umgeschrieben.<br />Seit März 2010 wird dieses Projekt von „tumba25“ Kanerva betreut.',
	'WHY'					=> 'Wieso?',
	'WHY_EXPLAIN'			=> 'Wenn du viele Modifikationen erstellst, hast du (auch schon in phpBB 2) das Problem, dass du nicht alle Anpassungen in einer einzigen phpBB-Installation verwenden können. Daher ist am besten, wenn du getrennte Installationen verwenden. Allerdings ist es sehr aufwändig, die ganzen Dateien zu kopieren und jedes Mal die Installationsvorgänge durchzuführen. Um diesen Vorgang zu beschleunigen, wurde QuickInstall geboren.',
));
