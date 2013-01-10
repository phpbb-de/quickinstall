<?php
/**
*
* qi [Deutsch — Sie]
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
// ’ » „ “ ” …
//

$lang = array_merge($lang, array(
	'ABOUT_QUICKINSTALL'	=> 'Über phpBB3 QuickInstall',
	'ABOUT_SECTIONS'		=> 'Über QuickInstall',
	'ADMIN_EMAIL'			=> 'E-Mail-Adresse des Administrators',
	'ADMIN_EMAIL_EXPLAIN'	=> 'E-Mail-Adresse des Administrators, die beim Erstellen der verwendet wird',
	'ADMIN_NAME'			=> 'Benutzername des Administrators',
	'ADMIN_NAME_EXPLAIN'	=> 'Der Standard-Benutzername für den Administrator der Boards. Dieser kann beim Erstellen neuer Boards geändert werden.',
	'ADMIN_PASS'			=> 'Passwort des Administrators',
	'ADMIN_PASS_EXPLAIN'	=> 'Das Standard-Passwort für den Administrator der Boards. Dieses kann beim Erstellen neuer Boards geändert werden.',
	'ADMIN_SETTINGS'		=> 'Administrator-Einstellungen',
	'ALT_ENV'				=> 'Alternative Umgebung',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_EXPLAIN'		=> 'Legt fest, ob AutoMOD installiert werden soll.',
	'AUTOMOD_INSTALL'		=> 'AutoMOD installieren',

	'BACK_TO_MAIN'			=> '<a href="%s">Zurück zur Hauptseite</a>',
	'BACK_TO_MANAGE'		=> '<a href="%s">Zurück zur Einstellungs-Seite</a>',
	'BACK_TOP'				=> 'Nach oben',
	'BOARD_CREATED'			=> 'Das Board wurde erfolgreich erstellt!',
	'BOARD_DBNAME'			=> 'Datenbank- und Verzeichnisname des Boards',
	'BOARD_DESC'			=> 'Beschreibung des Boards',
	'BOARD_EMAIL'			=> 'E-Mail-Adresse des Boards',
	'BOARD_EMAIL_EXPLAIN'	=> 'Der Absender für E-Mails der erstellten Boards.',
	'BOARD_NAME'			=> 'Name des Boards',
	'BOARDS_DELETED'		=> 'Die Boards wurden erfolgreich gelöscht.',
	'BOARDS_DELETED_TITLE'	=> 'Boards gelöscht',
	'BOARDS_DIR'			=> 'Board-Verzeichnis',
	'BOARDS_DIR_EXPLAIN'	=> 'Das Verzeichnis, in dem die Boards erstellt werden. PHP benötigt Schreibrechte in diesem Verzeichnis.',
	'BOARDS_DIR_MISSING'	=> 'Das Verzeichnis „%s“ existiert nicht oder ist nicht beschreibbar.',
	'BOARDS_LIST'			=> 'Liste der Boards',
	'BOARDS_NOT_WRITABLE'	=> 'Das Board-Verzeichnis ist nicht beschreibbar.',
	'BOARDS_URL'			=> 'Board-URL-Präfix',
	'BOARDS_URL_EXPLAIN'	=> 'URL-Präfix zum Board-Verzeichnis. Wenn Sie ein absolutes Verzeichnis als Board-Verzeichnis angegeben hast, kann es sein, dass Sie hier eine Domain und/oder Pfad angeben müssen, der zum Board-Verzeichnis führt. Wenn das Board-Verzeichnis relativ ist, können Sie es einfach kopieren.',

	'CACHE_DIR'				=> 'Cache-Verzeichnis',
	'CACHE_DIR_EXPLAIN'		=> 'QuickInstall legt im Cache-Verzeichnis einige Dateien ab. PHP benötigt Schreibrechte auf dieses Verzeichnis.',
	'CACHE_DIR_MISSING'		=> 'Das Verzeichnis „%s“ existiert nicht oder ist nicht beschreibbar.',
	'CACHE_NOT_WRITABLE'	=> 'Das Cache-Verzeichnis ist nicht beschreibbar.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Das letzte Profil kann nicht gelöscht werden.',
	'CHANGELOG'				=> 'Änderungsprotokoll',
	'CHECK_ALL'				=> 'Alles auswählen',
	'CHUNK_POST'			=> 'Paketgröße für Beiträge',
	'CHUNK_POST_EXPLAIN'	=> 'Anzahl der Beiträge pro Datenbank-Anfrage.',
	'CHUNK_SETTINGS'		=> 'Größe der Füllpakete',
	'CHUNK_SETTINGS_EXPLAIN'	=> 'QuickInstall versucht die Anzahl der Datenbank-Anfragen zu reduzieren, indem Beiträge, Themen und Benutzer in Paketen gruppiert werden. Die Paketgröße beeinflusst die Dauer beim Befüllen des Boards. Es gibt keine perfekte Einstellung, die für alle passt. Wenn Sie mehrere Boards befüllen, können Sie mit der Einstellung herum experimentieren. Zu große Pakete verbrauchen zu viel Arbeitsspeicher und zu kleine Belasten die Datenbank zu häufig. Ein Kompromiss ist die beste Einstellung.',
	'CHUNK_TOPIC'			=> 'Paketgröße für Themen',
	'CHUNK_TOPIC_EXPLAIN'	=> 'Anzahl der Themen pro Datenbank-Anfrage.',
	'CHUNK_USER'			=> 'Paketgröße für Benutzer',
	'CHUNK_USER_EXPLAIN'	=> 'Anzahl der Benutzer pro Datenbank-Anfrage.',
	'CONFIG_BUTTON'			=> 'Klicke hier um die Konfiguration anzuzeigen.',
	'CONFIG_CONVERTED'		=> 'Die Konfiguration der bestehenden QuickInstall Installation wurde aktualisiert. Da es dieser Version möglich ist, mehrere Profile zu speichern, wurde das bestehende Profil unter dem Namen „default“ gespeichert.<br />Sie können jetzt die Einstellungen für verschiedene Profile speichern und laden, wenn Sie ein Board erstellen.',
	'CONFIG_EMPTY'			=> 'Das Konfigurations-Array war leer. Dies sollte im Bugtracker als Fehler erfasst werden.',
	'CONFIG_IS_DISPLAYED'	=> 'Die Konfiguration wird unterhalb angezeigt. Man kann versuchen die Daten manuell in einer Datei zu speichern.<br /> Der Dateiname muss auf „.cfg“ enden. Zum Beispiel: „settings/main.cfg“.',
	'CONFIG_NOT_WRITABLE'	=> 'Das Verzeichnis „settings/“ ist nicht beschreibbar.',
	'CONFIG_NOT_WRITTEN'	=> 'Die Datei „qi_config.cfg“ konnte nicht erstellt werden.',
	'CONFIG_OPTIONS'		=> 'Konfigurations-Optionen',
	'CONFIG_SETTINGS'		=> 'Board-Konfigurations-Einstellungen',
	'CONFIG_SETTINGS_EXPLAIN'	=> 'Diese Einstellungen werden als Standard-Konfigurations-Einstellung der neuen phpBB Boards verwendet. Diese Einstellungen können nach dem Erstellen der Boards im Administrations-Bereich des jeweiligen Boards geändert werden.',
	'CONFIG_WARNING'		=> 'Klicken Sie auf die Schaltfläche, um die Konfiguration anzuzeigen. <strong>Warnung:</strong> Passwörter, die Sie eingegeben haben, werden angezeigt.',
	'COOKIE_DOMAIN'			=> 'Cookie-Domain',
	'COOKIE_DOMAIN_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein.',
	'COOKIE_SECURE'			=> 'Sicherer Server',
	'COOKIE_SECURE_EXPLAIN'	=> 'Falls der Server über SSL läuft, muss diese Option aktiviert werden. Wenn das nicht der Fall ist, deaktiviert lassen. Wird diese Option aktiviert, obwohl der Server nicht über SSL aufgerufen werden kann, können Fehler bei der Weiterleitung auftreten.',
	'CREATE_ADMIN'			=> 'Administrator erstellen',
	'CREATE_ADMIN_EXPLAIN'	=> 'Bei Auswahl von „Ja“ wird der Benutzer tester_1 als Administrator ohne Gründer-Status angelegt.',
	'CREATE_MOD'			=> 'Moderator erstellen',
	'CREATE_MOD_EXPLAIN'	=> 'Bei Auswahl von „Ja“ wird der Benutzer tester_1 oder tester_2 (abhängig davon, ob auch ein Administrator erstellt wurde) als globaler Moderator angelegt.',

	'DB_EXISTS'				=> 'Die Datenbank „%s“ existiert bereits.',
	'DB_PREFIX'				=> 'Datenbank-Präfix',
	'DB_PREFIX_EXPLAIN'		=> 'Dieser Präfix wird allen Datenbanken vorangestellt, damit bestehende Datenbanken von QuickInstall nicht überschrieben werden.',
	'DB_SETTINGS'			=> 'Datenbank-Einstellungen',
	'DBHOST'				=> 'Datenbankserver',
	'DBHOST_EXPLAIN'		=> 'Im Normalfall ist das „localhost“.<br /><strong>Hinweis:</strong> Bei der Verwendung von SQLite, muss der absolute Pfad zu einem für den Webserver beschreibbaren Verzeichnis, angegeben werden.',
	'DBMS'					=> 'Datenbank-Typ',
	'DBMS_EXPLAIN'			=> 'Das Datenbanksystem des Servers. Ist dieses nicht bekannt, kann man es mit MySQL versuchen.',
	'DBPASSWD'				=> 'Datenbank-Passwort',
	'DBPASSWD_EXPLAIN'		=> 'Das Passwort für den Benutzer der Datenbank.',
	'DBPORT'				=> 'Datenbankserver-Port',
	'DBPORT_EXPLAIN'		=> 'Kann im Normalfall leer gelassen werden.',
	'DBUSER'				=> 'Datenbank-Benutzername',
	'DBUSER_EXPLAIN'		=> 'Ein Benutzerkonto mit Zugriff auf die Datenbank. Dieses Konto muss die Berechtigung zum Erstellen neuer Datenbanken besitzen.',
	'DEFAULT'				=> 'Standard',
	'DEFAULT_ENV'			=> 'Standardumgebung (neuestes phpBB)',
	'DEFAULT_LANG'			=> 'Standardsprache',
	'DEFAULT_LANG_EXPLAIN'	=> 'Diese Sprache wird beim Erstellen neuer Boards verwendet. Damit sie verwendet werden kann, muss das jeweilige Sprachpaket im Verzeichnis „sources/phpBB3/language“ hinterlegt worden sein.',
	'DELETE'				=> 'Löschen',
	'DELETE_FILES_IF_EXIST'	=> 'Vorhandene Dateien löschen',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Soll die Einstellung „Vorhandene Dateien löschen“ beim Erstellen neuer Boards standardmässig aktiviert sein?',
	'DELETE_PROFILE'		=> 'Profil löschen',
	'DELETE_PROFILE_EXPLAIN'	=> 'Das ausgewählte Profil löschen.<br /><strong>Anmerkung: Dieser Schritt kann nicht rückgängig gemacht werden.</strong>',
	'DIR_EXISTS'			=> 'Das Verzeichnis „%s“ existiert bereits.',
	'DIR_URL_SETTINGS'		=> 'Verzeichnis- und URL-Einstellungen',
	'DISABLED'				=> 'Deaktiviert',
	'DROP_DB_IF_EXISTS'		=> 'Vorhandene Datenbank löschen',
	'DROP_DB_IF_EXISTS_EXPLAIN'	=> 'Soll die Einstellung „Vorhandene Datenbank löschen“ beim Erstellen neuer Boards standardmässig aktiviert sein?',

	'EMAIL_DOMAIN'			=> 'E-Mail-Domain',
	'EMAIL_DOMAIN_EXPLAIN'	=> 'Die Domain, die für die E-Mail-Adresse der Testbenutzer verwendet wird. Die E-Mail-Adresse lautet tester_<samp>x</samp>@&lt;domain.tld&gt;.',
	'EMAIL_ENABLE'			=> 'E-Mail aktivieren',
	'EMAIL_ENABLE_EXPLAIN'	=> 'Aktiviert die E-Mail-Funktionalität. Sofern nicht die E-Mail-Funktionalität des Boards getestet werden soll, deaktiviert lassen.',
	'EMAIL_SETTINGS'		=> 'E-Mail-Einstellungen',
	'ENABLED'				=> 'Aktiviert',
	'ERRORS'				=> 'Es sind Fehler aufgetreten.',
	'ERROR_DEL_BOARDS'		=> 'Die folgenden Boards konnten nicht gelöscht werden',
	'ERROR_DEL_FILES'		=> 'Die folgenden Dateien konnten nicht gelöscht werden',

	'FORGOT_THIS'				=> 'Bitte ausfüllen',//'SIE HABEN DAS HIER VERGESSEN!', // Should be upper case.
	'FUNCTIONS_MODS_MISSING'	=> '„includes/functions_mods.php“ nicht gefunden.',

	'GENERAL_ERROR'			=> 'Allgemeiner Fehler',
	'GO'					=> 'Los',
	'GRANT_PERMISSIONS'		=> 'Zusätzliche Rechte vergeben',
	'GRANT_PERMISSIONS_EXPLAIN'	=> '(z.B. 0060 für Gruppen Schreib- und Leserechte)',

	'IF_EMPTY_EXPLAIN'		=> 'Dieses Feld frei lassen, wenn der Standardwert des Profils genutzt werden soll.',
	'IF_LEAVE_EMPTY'		=> 'Wird dieses Feld nicht ausgefüllt, müssen beim Erstellen eines neuen Boards die erforderlichen Angaben vorgenommen werden.',
	'IN_SETTINGS'			=> 'QuickInstall-Einstellungen verwalten.',
	'INCLUDE_MODS'			=> 'MODs einschließen',
	'INCLUDE_MODS_EXPLAIN'	=> 'Wählen aus der Liste einen Ordner des Verzeichnisses „sources/mods/“ aus, um die darin enthaltenen Dateien in das Hauptverzeichnis des neuen Boards zu kopieren. Bestehende Dateien werden bei diesem Vorgang überschrieben. Dadurch ist es möglich, bereits modifizierte Boards zu erstellen. Wenn Sie „Keine“ auswählen, wird diese Funktion nicht genutzt (dadurch kann die Auswahl leichter zurück gesetzt werden).',
	'INSTALL_BOARD'			=> 'Ein Board installieren',
	'INSTALL_QI'			=> 'QuickInstall installieren',
	'IS_NOT_VALID'			=> 'Ist nicht gültig.',

	'LANG_SELECT'			=> 'Sprachauswahl',
	'LICENSE'				=> 'Lizenz?',
	'LICENSE_EXPLAIN'		=> 'Dieses Script wird unter den Bestimmungen der <a href="license.txt">GNU General Public License version 2</a> veröffentlicht. Diese wurde vor allem deswegen gewählt, weil phpBB selbst und alle vom phpBB MOD-Team validierten Modifikationen unter dieser Lizenz veröffentlicht werden. Darüberhinaus wird mit dieser großartigen Lizenz sichergestellt, dass freie Software frei bleibt :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installiert durch phpBB Quickinstall %s</strong>',

	'MAKE_WRITABLE'			=> 'Dateien für jeden beschreibbar machen',
	'MAKE_WRITABLE_EXPLAIN'	=> 'Legt fest, dass Dateien, die „config.php“ und alle Verzeichnisse standardmäßig von jedem beschrieben werden können.',
	'MAKE_WRITABLE_BOARD'	=> 'Dateien beschreibbar machen',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> '(Entspricht der Vergabe von 0666)',
	'MANAGE_BOARDS'			=> 'Boards verwalten',
	'MAX'					=> 'Maximum',
	'MIGHT_TAKE_LONG'		=> '<strong>Bitte beachten:</strong> Die Installation eines Boards kann einige Zeit in Anspruch nehmen — in den meisten Fällen wird der Vorgang länger als eine Minute dauern. Das Formular sollte daher <strong>nicht</strong> mehrfach abgesendet werden.',
	'MIN'					=> 'Minimum',

	'NEED_CONVERT'			=> 'Die bestehende Konfiguration muss auf das neue, profilbasierte System aktualisiert werden. Es sollte sicher gestellt werden, dass das Verzeichnis „settings“ existiert und für den Webserver beschreibbar ist. Klicken danach Sie auf „Absenden“.',
	'NEED_EMAIL_DOMAIN'		=> 'Es muss eine E-Mail-Domain angegeben sein, damit die Test-Benutzer angelegt werden können',
	'NEED_WRITABLE'			=> 'Die Verzeichnisse „cache“ und „boards“ müssen für QuickInstall immer beschreibbar sein.<br />Das Verzeichnis „settings“ muss im QuickInstall-Stammverzeichnis hinterlegt werden und ebenfalls beschreibbar sein.',
	'NO'					=> 'Nein',
	'NO_ALT_ENV'			=> 'Die angegebene alternative Umgebung existiert nicht.',
	'NO_AUTOMOD'			=> '<strong>AutoMOD wurde nicht im Verzeichnis „source“ gefunden.</strong><br />Sie müssen AutoMOD herunterladen und den Inhalt des Verzeichnisses „root“ nach „sources/automod“ kopieren. Wenn Sie AutoMOD 1.0.0 benutzen, muss das Verzeichnis „upload“ kopiert werden. Um Problemen und Komplikationen beim Testen vorzubeugen, wird empfohlen, immer die aktuellste Version von AutoMOD zu verwenden.',
	'NO_BOARDS'				=> 'Du hast keine Boards.',
	'NO_DB'					=> 'Es wurde keine Datenbank ausgewählt.',
	'NO_IMPACT_WIN'			=> 'Diese Einstellung hat keine Auswirkung auf Windows-Systeme vor Windows 7.',
	'NO_MODULE'				=> 'Das Modul %s konnte nicht geladen werden.',
	'NO_PASSWORD'			=> 'Kein Passwort',
	'NO_DBPASSWD_ERR'		=> 'Es wurde ein Datenbankpasswort angegeben, aber zugleich die Option „Kein Passwort“ ausgewählt. Diese Kombination ist <strong>nicht</strong> zulässig und sollte entsprechend geändert werden.',
	'NONE'					=> 'Keine',
	'NUM_CATS'				=> 'Anzahl an Kategorien',
	'NUM_CATS_EXPLAIN'		=> 'Die Anzahl der Foren-Kategorien, die erstellt werden sollen.',
	'NUM_FORUMS'			=> 'Anzahl der Foren',
	'NUM_FORUMS_EXPLAIN'	=> 'Die Anzahl der Foren, die erstellt werden sollen. Diese werden gleichmäßig auf die zu erstellenden Kategorien aufgeteilt.',
	'NUM_NEW_GROUP'			=> 'Kürzlich registrierte Benutzer',
	'NUM_NEW_GROUP_EXPLAIN'	=> 'Die Anzahl an Benutzern, die der Gruppe der kürzlich registrierten Benutzer zugeteilt werden.<br />Wenn diese Zahl größer als die Anzahl der gesamten Benutzer ist, werden alle neuen Benutzer in dieser Gruppe sein.',
	'NUM_REPLIES'			=> 'Anzahl an Antworten',
	'NUM_REPLIES_EXPLAIN'	=> 'Die Anzahl an Antworten, die erstellt werden sollen. Jedes Thema erhält eine zufällige Anzahl an Antworten im festgelegten Bereich.',
	'NUM_TOPICS'			=> 'Anzahl von Themen',
	'NUM_TOPICS_EXPLAIN'	=> 'Die Anzahl an Themen, die in jedem Forum erstellt wird. Jedes Forum erhält eine zufällige Anzahl an Themen im festgelegten Bereich.',
	'NUM_USERS'				=> 'Anzahl an Benutzern',
	'NUM_USERS_EXPLAIN'		=> 'Die Anzahl an Benutzern, die erstellt werden sollen.<br />Sie bekommen den Benutzernamen tester_<samp>x</samp> (x geht von 1 bis zur Gesamtzahl an Benutzern) und erhalten das Passwort „123456“.',

	'OFF'					=> 'Aus',
	'ON'					=> 'An',
	'ONLY_LOCAL'			=> '<strong>Willkommen bei QuickInstall (QI)</strong>, ein Tool um phpBB auf schnelle und einfache Weise für Testzwecke zu installieren.<br /><br />Einige Standardwerte wurden unterhalb bereits eingetragen. Die einzigen Einstellungen, die auf jeden Fall geändert werden müssen sind „Datenbank-Benutzername“ und „Datenbank-Passwort“, wenn diese in QuickInstall gespeichert werden sollen. Es wird empfohlen, auch die restlichen Einstellungen zu überprüfen.<br />Es sollte sicher gestellt sein, dass die Verzeichnisse „boards“, „cache“ und „settings“ existieren und vom Webserver beschrieben werden können.<br /><br />Wenn die Einstellungen und Verzeichnisse überprüft wurden, auf „Absenden“ drücken. Die Einstellungen werden dann als Profil „default“ gespeichert. Wenn das Profil unter einem anderem Namen gespeichert werden soll, diesen im Feld „Neues Profil speichern“ angeben.<div class="errorbox"><strong>Bitte beachten</strong>: QuickInstall ist nur für die lokale Verwendung gedacht und sollte nicht auf Webservern verwendet werden, die über das Internet frei zugänglich sind. <strong>Die Verwendung von QuickInstall auf öffentlich zugänglichen Webservern erfolgt auf eigene Gefahr.</strong>Ausserdem, leisten wir bei derartigen Installation keinerlei Hilfestellung.</div>',
	'OPTIONS'				=> 'Optionen',
	'OPTIONS_ADVANCED'		=> 'Erweiterte Optionen',
	'OTHER_CONFIG'			=> 'Weitere Board-Konfigurations-Einstellungen',
	'OTHER_CONFIG_EXPLAIN'	=> 'Diese Werte werden in der Konfigurations-Tabelle aktualisiert oder neu hinzugefügt. Daher sollten Tippfehler vermieden werden. Diese Werte können beim Erstellen eines Boards jederzeit geändert werden.<br />Eine Konfigurations-Einstellung pro Zeile, getrennt mit Semikola „;“. Name;Einstellung;Dynamisch. Wenn die Einstellung nicht dynamisch ist, wird der dynamisch-Teil nicht benötigt. Zeilen die mit einem # anfangen werden als Kommentare interpretiert und nicht in die Datenbank eingefügt. Beispiel:<br />load_tplcompile;1;1<br />session_length;999999<br /># Dies ist ein Kommentar ...',
	'OTHER_SETTINGS'		=> 'Weitere Einstellungen',

	'PLAIN_TEXT'			=> '<strong>Warnung</strong>: QuickInstall speichert Passwörter und Benutzernamen im Klartext.',
	'POPULATE'				=> 'Board befüllen',
	'POPULATE_EXPLAIN'		=> 'Füllt das Board mit der unten festgelegten Anzahl an Benutzern, Foren, Themen und Beiträgen. Es ist zu beachten, dass die Erstellung der Boards umso länger dauert, je mehr Benutzer, Foren, Themen und Beiträge zu erstellen sind.<br />Diese Einstellungen können beim Erstellen neuer Boards jederzeit geändert werden.',
	'POPULATE_MAIN_EXPLAIN'	=> 'Benutzer: tester_<samp>x</samp>, Passwort: 123456',
	'POPULATE_OPTIONS'		=> 'Füll-Optionen',
	'POPULATE_SETTINGS'		=> 'Füll-Einstellungen',
	'PROFILE'				=> 'Profil',
	'PROFILES'				=> 'Profile',

	'QI_ABOUT'				=> 'Über',
	'QI_DST'				=> 'Sommerzeit',
	'QI_DST_EXPLAIN'		=> 'Soll die Sommerzeit an oder aus sein?',
	'QI_LANG'				=> 'Sprache für QuickInstall',
	'QI_LANG_EXPLAIN'		=> 'Das Sprachpaket muss im Verzeichnis „language/“ sein, um angezeigt zu werden.',
	'QI_MAIN'				=> 'Hauptseite',
	'QI_MAIN_ABOUT'			=> 'Hier kann ein neues Board installiert werden.<br /><br />„Name der Datenbank und des Verzeichnisses des Boards“ ist das einzige Feld, das ausgefüllt werden muss. Die anderen Felder werden mit den Standardwerten der „includes/default_settings.php“ befüllt.<br /><br />Auf „Erweiterte Optionen“ klicken, um weitere Optionen anzuzeigen.',
	'QI_MANAGE'				=> 'Boards verwalten',
	'QI_MANAGE_ABOUT'		=> 'o_O',
	'QI_TZ'					=> 'Zeitzone',
	'QI_TZ_EXPLAIN'			=> 'Die Zeitzone des Board. Sie wird als Standard-Zeitzone für die zu erstellenden Boards verwendet. Angabe in der Form -1, 0, 1 usw.',
	'QUICKINSTALL'			=> 'phpBB QuickInstall',

	'REDIRECT'				=> 'Weiterleitung',
	'REDIRECT_EXPLAIN'		=> 'Aktiviert die Weiterleitung zum neuerstellten Board.',
	'REDIRECT_BOARD'		=> 'Zum neuen Board weiterleiten',
	'REQUIRED'				=> 'wird benötigt',
	'RESET'					=> 'Zurücksetzen',
	'RETURN_MANAGE'			=> 'Zurück zu „Boards verwalten“',

	'SAVE_PROFILE'			=> 'Neues Profil speichern',
	'SAVE_PROFILE_EXPLAIN'	=> 'Geben Sie den Namen für dieses Einstellungsprofil ein. Nur A-Z, a-z, 0-9, „-“ (Minuszeichen), „_“ (Unterstrich) und „.“ (Punkt) sind erlaubt.<br /><strong>Anmerkung: Wenn bereits ein Profil mit diesem Namen existiert, wird es überschrieben.</strong>',
	'SAVE_RESTORE'			=> 'Sichern/Wiederherstellen',
	'SELECT'				=> 'Auswählen',
	'SETTINGS'				=> 'Einstellungen',
	'SETTINGS_FAILURE'		=> 'Es sind Fehler aufgetreten. Details können der Meldung unterhalb entnommen werden.',
	'SETTINGS_NOT_WRITABLE'	=> 'Das Verzeichnis „settings“ existiert nicht, ist kein Verzeichnis oder nicht beschreibbar.',
	'SETTINGS_SECTIONS'		=> 'Einstellungs-Abschnitte',
	'SETTINGS_SUCCESS'		=> 'Ihre Einstellungen wurden erfolgreich gespeichert.',
	'SERVER_COOKIE_SETTINGS'	=> 'Server- und Cookie-Einstellungen',
	'SERVER_NAME'			=> 'Servername',
	'SERVER_NAME_EXPLAIN'	=> 'Im Normalfall ist das „localhost“, da QuickInstall <strong>nicht</strong> für öffentlich zugängliche Webserver gedacht ist.',
	'SERVER_PORT'			=> 'Serverport',
	'SERVER_PORT_EXPLAIN'	=> 'Im Normalfall „80“.',
	'SHOW_CONFIRM'			=> 'Löschen bestätigen',
	'SHOW_CONFIRM_EXPLAIN'	=> 'Beim Löschen von Boards und Profilen eine Bestätigung anfordern.',
	'SITE_DESC'				=> 'Beschreibung des Boards',
	'SITE_DESC_EXPLAIN'		=> 'Die Standard-Beschreibung der Boards. Diese kann beim Erstellen neuer Boards jederzeit geändert werden.',
	'SITE_NAME'				=> 'Name des Boards',
	'SITE_NAME_EXPLAIN'		=> 'Der Standard-Name des Boards. Dieser kann beim Erstellen neuer Boards jederzeit geändert werden.',
	'SMTP_AUTH'				=> 'SMTP-Authentifizierungsmethode',
	'SMTP_AUTH_EXPLAIN'		=> 'Nur benötigt, wenn ein Benutzername/Passwort eingegeben ist.',
	'SMTP_DELIVERY'			=> 'SMTP-Server für E-Mail nutzen',
	'SMTP_DELIVERY_EXPLAIN'	=> '„Ja“ auswählen, wenn E-Mails über einen SMTP-Server versendet werden (oder müssen) und nicht die PHP-eigene Mail-Funktion genutzt werden soll.',
	'SMTP_HOST'				=> 'SMTP-Server-Adresse',
	'SMTP_HOST_EXPLAIN'		=> 'Adresse des SMTP-Servers, der genutzt werden soll',
	'SMTP_PASS'				=> 'SMTP-Passwort',
	'SMTP_PASS_EXPLAIN'		=> 'Geben Sie nur ein Passwort ein, wenn Ihr SMTP-Server dies erfordert.',
	'SMTP_PORT'				=> 'SMTP-Server-Port',
	'SMTP_PORT_EXPLAIN'		=> 'Ändern Sie diese Einstellung nur, wenn Sie wissen, dass Ihr SMTP-Server einen anderen Port nutzt.',
	'SMTP_USER'				=> 'SMTP-Benutzername',
	'SMTP_USER_EXPLAIN'		=> 'Geben Sie nur einen Benutzernamen ein, wenn Ihr SMTP-Server dies erfordert.',
	'SQLITE_PATH_MISSING'	=> 'Das angegebene Datenbankverzeichnis existiert nicht oder ist nicht beschreibbar.',
	'STAR_MANDATORY'		=> '* = erforderlich',
	'SUBMIT'				=> 'Absenden',
	'SUBSILVER'				=> 'subsilver2 installieren',
	'SUBSILVER_EXPLAIN'		=> 'Legt fest, ob der Style subsilver2 installiert und als Standard-Style für das Board verwendet werden soll.',
	'SUCCESS'				=> 'Erfolgreich',
	'SURE_DELETE_PROFILE'	=> 'Soll dieses Profil tatsächlich gelöscht werden? Dieser Vorgang kann nicht rückgängig gemacht werden.',
	'SURE_DELETE_BOARDS'	=> 'Soll(en) dieses Board/die Boards tatsächlich gelöscht werden? Dieser Vorgang kann nicht rückgängig gemacht werden.',

	'TABLE_PREFIX'			=> 'Tabellenpräfix',
	'TABLE_PREFIX_EXPLAIN'	=> 'Ein Präfix, der für alle Tabellen des Boards verwendet wird. Dieser kann beim Erstellen neuer Boards in den erweiterten Einstellungen jederzeit geändert werden.',
	'TEST_CAT_NAME'			=> 'Test-Kategorie %d',
	'TEST_FORUM_NAME'		=> 'Test-Forum %d',
	'TEST_POST_START'		=> 'Test-Beitrag %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE'		=> 'Test-Thema %d',
	'THESE_CAN_CHANGE'		=> 'Diese Einstellungen können beim Erstellen eines Boards jederzeit geändert werden.',
	'THIS_CAN_CHANGE'		=> 'Diese Einstellung kann beim Erstellen eines Boards jederzeit geändert werden.',
	'TIME_SETTINGS'			=> 'Zeitzonen-Einstellungen',

	'UNCHECK_ALL'			=> 'Alles abwählen',

	'YES'					=> 'Ja',

	'WHAT'					=> 'Was?',
	'WHAT_EXPLAIN'			=> 'phpBB3 QuickInstall ist ein Tool, um phpBB auf die schnelle und einfache Weise zu installieren. Völlig überraschend... ;-)',
	'WHO_ELSE'				=> 'Wer sonst noch?',
	'WHO_ELSE_EXPLAIN'		=> '<ul><li>' . implode('</li><li>', array(
		'Besonderer Dank gilt dem phpBB-Team, insbesondere dem Entwickler-Team. Dafür, dass sie ein so schönes Stück Software erstellt haben.',
		'Dank gilt dem phpBB.com-MOD-Team (besonders Josh aka „A_Jelly_Doughnut“) für AutoMOD.',
		'Dank gilt Mike TUMS für das tolle Logo!',
		'Dank gilt den Beta-Testern!',
		'Dank gilt der phpBB-Community auf phpBB.com, startrekguide.com und phpBBModders.net!',
	)) . '</li></ul>',
	'WHO_WHEN'				=> 'Wer? Wann?',
	'WHO_WHEN_EXPLAIN'		=> 'phpBB3 QuickInstall wurde ursprünglich von Igor „igorw“ Wiedler im Sommer 2007 entwickelt und teilweise im März 2008 von ihm umgeschrieben.<br />Seit März 2010 wird dieses Projekt von Kanerva „tumba25“ betreut.',
	'WHY'					=> 'Wieso?',
	'WHY_EXPLAIN'			=> 'Wenn man viele Modifikationen entwickelt, hat man oft das Problem (auch schon unter phpBB2), dass man nicht all seine Modifikationen und Anpassungen in einer einzigen phpBB-Installation verwalten möchte. Für viele Entwickler ist es daher von Vorteil, wenn sie mehrere, von einander getrennte Installationen für ihre Projekte verwalten können. Bisher war aber genau das, immer mit großen Aufwand verbunden. Man musste die benötigten Verzeichnisse und Datenbanken erstellen, alle erfoderlichen Dateien mehrfach kopieren und für jedes neue Board die entsprechenden Installationsvorgänge durchführen. Natürlich war es auch notwendig, jedes Board von Hand zu konfigurieren. Um diesen Vorgang zu beschleunigen, wurde die Idee für QuickInstall geboren.',
));
