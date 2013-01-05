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
	'ABOUT_SECTIONS'		=> 'Über-Abschnitte',
	'ADMIN_EMAIL'			=> 'E-Mail-Adresse des Administrators',
	'ADMIN_EMAIL_EXPLAIN'	=> 'E-Mail-Adresse des Administrators, die in den Boards verwendet wird',
	'ADMIN_NAME'			=> 'Benutzername des Administrators',
	'ADMIN_NAME_EXPLAIN'	=> 'Der Standard-Benutzername für den Administrator in Ihren Boards. Dieser kann geändert werden, wenn neue Boards erstellt werden.',
	'ADMIN_PASS'			=> 'Passwort des Administrators',
	'ADMIN_PASS_EXPLAIN'	=> 'Das Standard-Passwort für den Administrator in Ihren Boards. Dieses kann geändert werden, wenn neue Boards erstellt werden.',
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
	'BOARDS_DIR_EXPLAIN'	=> 'Das Verzeichnis, in dem Ihre Boards erstellt werden. PHP benötigt Schreibrechte in diesem Verzeichnis.',
	'BOARDS_DIR_MISSING'	=> 'Das Verzeichnis „%s“ existiert nicht oder ist nicht beschreibbar.',
	'BOARDS_LIST'			=> 'Liste der Boards',
	'BOARDS_NOT_WRITABLE'	=> 'Das Boardverzeichnis ist nicht beschreibbar.',
	'BOARDS_URL'			=> 'Board-URL-Präfix',
	'BOARDS_URL_EXPLAIN'	=> 'URL-Präfix zum Boardverzeichnis. Wenn Sie ein absolutes Verzeichnis als Boardverzeichnis angegeben hast, kann es sein, dass Sie hier eine Domain und/oder Pfad angeben müssen, der zum Boardverzeichnis führt. Wenn das Boardverzeichnis relativ ist, können Sie es einfach kopieren.',

	'CACHE_DIR'				=> 'Cache-Verzeichnis',
	'CACHE_DIR_EXPLAIN'		=> 'Im Cache-Verzeichnis legt QuickInstall einige Dateien ab. PHP benötigt Schreibrechte in diesem Verzeichnis.',
	'CACHE_DIR_MISSING'		=> 'Das Verzeichnis „%s“ existiert nicht oder ist nicht beschreibbar.',
	'CACHE_NOT_WRITABLE'	=> 'Das Cacheverzeichnis ist nicht beschreibbar.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Sie können das letzte Profil nicht löschen.',
	'CHANGELOG'				=> 'Änderungshistorie',
	'CHECK_ALL'				=> 'Alles auswählen',
	'CHUNK_POST'			=> 'Paketgröße für Beiträge',
	'CHUNK_POST_EXPLAIN'	=> 'Anzahl der Beiträge pro Datenbank-Anfrage.',
	'CHUNK_SETTINGS'		=> 'Größe der Füllpakete',
	'CHUNK_SETTINGS_EXPLAIN'	=> 'QuickInstall versucht die Anzahl der Datenbank-Anfragen zu reduzieren, in dem Beiträge, Themen und Benutzer in Paketen gruppiert werden. Die Paketgröße beeinflusst die Dauer beim Befüllen des Boards. Es gibt keine perfekte Einstellung, die für alle passt. Wenn Sie mehrere Boards befüllen, können Sie mit der Einstellung herum experimentieren. Zu große Pakete verbrauchen zu viel Arbeitsspeicher und zu kleine Belasten die Datenbank zu häufig. Ein Kompromiss ist die beste Einstellung.',
	'CHUNK_TOPIC'			=> 'Paketgröße für Themen',
	'CHUNK_TOPIC_EXPLAIN'	=> 'Anzahl der Themen pro Datenbank-Anfrage.',
	'CHUNK_USER'			=> 'Paketgröße für Benutzer',
	'CHUNK_USER_EXPLAIN'	=> 'Anzahl der Benutzer pro Datenbank-Anfrage.',
	'CONFIG_BUTTON'			=> 'Klicke hier um die Konfiguration anzuzeigen.',
	'CONFIG_CONVERTED'		=> 'Ihre Konfiguration wurde vom alten System auf das Neue aktualisiert, in dem mehrere Profile gespeichert werden können. Es wurde unter dem Namen „default“ gespeichert.<br />Sie können jetzt die Einstellungen für verschiedene Profile speichern und laden, wenn Sie ein Board erstellen.',
	'CONFIG_EMPTY'			=> 'Das Konfigurations-Array war leer. Das sollte als Fehler im Bugtracker erfasst werden.',
	'CONFIG_IS_DISPLAYED'	=> 'Die Konfiguration wird unten angezeigt. Du kannst versuchen die Daten manuell in einer Datei zu speichern.<br />Stelle dabei sicher, dass der Dateiname auf „.cfg“ endet: zum Beispiel: „settings/main.cfg“.',
	'CONFIG_NOT_WRITABLE'	=> 'Das „settings/“ Verzeichnis ist nicht beschreibbar.',
	'CONFIG_NOT_WRITTEN'	=> 'Die Datei „qi_config.cfg“ konnte nicht geschrieben werden.',
	'CONFIG_OPTIONS'		=> 'Konfigurations-Optionen',
	'CONFIG_SETTINGS'		=> 'Board-Konfigurations-Einstellungen',
	'CONFIG_SETTINGS_EXPLAIN'	=> 'Die Einstellungen hier sind Konfigurations-Einstellungen für Ihr phpBB Board. Diese Einstellungen können Sie nach der Erstellung im Board ändern.',
	'CONFIG_WARNING'		=> 'Klicken Sie auf den Button um die Konfiguration anzuzeigen. <strong>Warnung:</strong> Passwörter, die Sie eingegeben haben, werden angezeigt.',
	'COOKIE_DOMAIN'			=> 'Cookie-Domain',
	'COOKIE_DOMAIN_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein.',
	'COOKIE_SECURE'			=> 'Sicherer Server',
	'COOKIE_SECURE_EXPLAIN'	=> 'Falls Ihr Server über SSL läuft, aktivieren Sie diese Option, ansonsten lassen Sie sie deaktiviert. Wenn diese Option aktiviert ist, obwohl der Server nicht über SSL aufgerufen wird, können Fehler bei der Weiterleitung auftreten.',
	'CREATE_ADMIN'			=> 'Administrator erstellen',
	'CREATE_ADMIN_EXPLAIN'	=> 'Wenn „Ja“ ausgewählt wird, so wird tester_1 als Administrator ohne Gründer-Status angelegt.',
	'CREATE_MOD'			=> 'Moderator erstellen',
	'CREATE_MOD_EXPLAIN'	=> 'Wenn „Ja“ ausgewählt wird, so wird tester_1 oder tester_2 (sofern auch ein Administrator erstellt wurde) als globaler Moderator angelegt.',

	'DB_EXISTS'				=> 'Die Datenbank „%s“ existiert bereits.',
	'DB_PREFIX'				=> 'Datenbankpräfix',
	'DB_PREFIX_EXPLAIN'		=> 'Dieser Präfix wird allen Datenbanken vorangestellt, damit keine Datenbanken überschrieben werden, die nicht von QuickInstall angelegt wurden.',
	'DB_SETTINGS'			=> 'Datenbank-Einstellungen',
	'DBHOST'				=> 'Datenbankserver',
	'DBHOST_EXPLAIN'		=> 'Meist „localhost“.<br />Wenn Sie SQLite verwenden, müssen Sie den absoluten Pfad zu einem Verzeichnis angegeben, dass vom Webserver beschrieben werden kann.',
	'DBMS'					=> 'Datenbank-Typ',
	'DBMS_EXPLAIN'			=> 'Ihr Datenbanksystem. Wenn Sie sich unsicher sind, versuchen Sie es mit MySQL.',
	'DBPASSWD'				=> 'Datenbank-Passwort',
	'DBPASSWD_EXPLAIN'		=> 'Das Passwort für den Benutzer der Datenbank.',
	'DBPORT'				=> 'Datenbankserver-Port',
	'DBPORT_EXPLAIN'		=> 'Kann meistens leer gelassen werden.',
	'DBUSER'				=> 'Datenbank-Benutzername',
	'DBUSER_EXPLAIN'		=> 'Der Benutzer für Ihre Datenbank. Dieser Benutzer muss das Recht haben, neue Datenbanken zu erstellen.',
	'DEFAULT'				=> 'Standard',
	'DEFAULT_ENV'			=> 'Standardumgebung (neuestes phpBB)',
	'DEFAULT_LANG'			=> 'Standardsprache',
	'DEFAULT_LANG_EXPLAIN'	=> 'Die Sprache wird für die installierten Boards verwendet. Das Sprachpaket muss in „sources/phpBB3/language“ sein, um angezeigt zu werden.',
	'DELETE'				=> 'Löschen',
	'DELETE_FILES_IF_EXIST'	=> 'Dateien löschen, falls sie existieren',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Soll die Einstellung „Dateien löschen, falls sie existieren“ standardmässig aktiviert sein, wenn ein Board erstellt wird?',
	'DELETE_PROFILE'		=> 'Profil löschen',
	'DELETE_PROFILE_EXPLAIN'	=> 'Das ausgewählte Profil löschen.<br /><strong>Anmerkung: Dieser Schritt kann nicht rückgängig gemacht werden.</strong>',
	'DIR_EXISTS'			=> 'Das Verzeichnis „%s“ existiert bereits.',
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
	'ERRORS'				=> 'Es sind Fehler aufgetreten.',
	'ERROR_DEL_BOARDS'		=> 'Die folgenden Boards konnten nicht gelöscht werden',
	'ERROR_DEL_FILES'		=> 'Die folgenden Dateien konnten nicht gelöscht werden',

	'FORGOT_THIS'				=> 'Bitte ausfüllen',//'SIE HABEN DAS HIER VERGESSEN!', // Should be upper case.
	'FUNCTIONS_MODS_MISSING'	=> '„includes/functions_mods.php“ nicht gefunden.',

	'GENERAL_ERROR'			=> 'Allgemeiner Fehler',
	'GO'					=> 'Los',
	'GRANT_PERMISSIONS'		=> 'Zusätzliche Rechte vergeben',
	'GRANT_PERMISSIONS_EXPLAIN'	=> '(z.B. 0060 für Gruppen Schreib- und Leserechte)',

	'IF_EMPTY_EXPLAIN'		=> 'Wenn Sie diese Option leer lassen, wird der Standardwert der Einstellung genutzt.',
	'IF_LEAVE_EMPTY'		=> 'Wenn Sie diese Option leer lassen, müssen Sie es beim Erstellen eines Boards angeben.',
	'IN_SETTINGS'			=> 'QuickInstall-Einstellungen verwalten.',
	'INCLUDE_MODS'			=> 'MODs einschließen',
	'INCLUDE_MODS_EXPLAIN'	=> 'Wählen Sie einen in der Liste aufgeführten Ordner aus dem sources/mods/-Ordner aus, dessen Dateien in das Hauptverzeichnis des neuen Boards kopiert werden. Dabei werden bestehende Dateien überschrieben, so dass Sie hier modifizierte Boards ablegen können. Wenn Sie „Keine“ auswählen, wird diese Funktion nicht genutzt (dadurch können Sie Ihre Auswahl leichter zurücksetzen).',
	'INSTALL_BOARD'			=> 'Ein Board installieren',
	'INSTALL_QI'			=> 'QuickInstall installieren',
	'IS_NOT_VALID'			=> 'Ist nicht gültig.',

	'LANG_SELECT'			=> 'Sprachauswahl',
	'LICENSE'				=> 'Lizenz?',
	'LICENSE_EXPLAIN'		=> 'Dieses Script wird unter den Bestimmungen der <a href="license.txt">GNU General Public License version 2</a> veröffentlicht. Diese wurde vor allem gewählt, weil eine große Menge des phpBB-Programmcodes verwendet wird und phpBB ebenfalls unter dieser Lizenz steht und Modifikationen ebenfalls diese Lizenz nutzen müssen. Darüberhinaus ist es eine großartige Lizenz, die sicherstellt, dass freie Software frei bleibt :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installiert durch phpBB Quickinstall %s</strong>',

	'MAKE_WRITABLE'			=> 'Dateien für jeden beschreibbar machen',
	'MAKE_WRITABLE_EXPLAIN'	=> 'Legt fest, dass Dateien, die „config.php“ und die Verzeichnisse standardmäßig von jedem beschrieben werden können.',
	'MAKE_WRITABLE_BOARD'	=> 'Dateien beschreibbar machen',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> '(Entspricht der Vergabe von 0666)',
	'MANAGE_BOARDS'			=> 'Boards verwalten',
	'MAX'					=> 'Maximum',
	'MIGHT_TAKE_LONG'		=> '<strong>Bitte beachten:</strong> Die Installation eines Boards kann einige Zeit dauern — sogar mehr als eine Minute. Senden Sie daher das Formular <strong>nicht</strong> mehrfach ab.',
	'MIN'					=> 'Minimum',

	'NEED_CONVERT'			=> 'Ihre Konfiguration muss auf das neue, profilbasiertem System aktualisiert werden. Stellen Sie sicher, dass das „settings/“ Verzeichnis existiert und für den Webserver beschreibbar ist. Klicken danach Sie auf „Absenden“.',
	'NEED_EMAIL_DOMAIN'		=> 'Es muss eine E-Mail-Domain angegeben sein, damit die Test-Benutzer angelegt werden können',
	'NEED_WRITABLE'			=> 'Die Verzeichnisse „cache“ und „boards“ müssen die ganze Zeit für QuickInstall beschreibbar sein.<br />Das „settings“ Verzeichnis muss im Stammverzeichnis von QuickInstall sein und ebenfalls beschreibbar sein.',
	'NO'					=> 'Nein',
	'NO_ALT_ENV'			=> 'Die angegebene alternative Umgebung existiert nicht.',
	'NO_AUTOMOD'			=> '<strong>AutoMOD wurde nicht im „source“ Verzeichnis gefunden.</strong><br />Sie müssen AutoMOD herunterladen und den Inhalt des „root“ Verzeichnisses nach „sources/automod“ kopieren. Wenn Sie AutoMOD 1.0.0 benutzen, ist es das Verzeichnis „upload“, das kopiert werden muss.',
	'NO_BOARDS'				=> 'Du hast keine Boards.',
	'NO_DB'					=> 'Es wurde keine Datenbank ausgewählt.',
	'NO_IMPACT_WIN'			=> 'Diese Einstellung hat keine Auswirkung auf Windows-Systeme vor Windows 7.',
	'NO_MODULE'				=> 'Das Modul %s konnte nicht geladen werden.',
	'NO_PASSWORD'			=> 'Kein Passwort',
	'NO_DBPASSWD_ERR'		=> 'Sie haben ein Datenbankpasswort angegeben, aber zugleich „Kein Passwort“ ausgewählt. Sie können nicht gleichzeitig ein Passwort <strong>haben</strong> und <strong>nicht haben</strong>.',
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
	'ONLY_LOCAL'			=> '<strong>Willkommen bei QuickInstall (QI)</strong>, ein Tool um phpBB auf die Schnelle zum Testen zu installieren.<br /><br />Einige Standardwerte wurden unten eingetragen. Das einzige was Sie auf jeden Fall ändern müssen sind „Datenbank-Benutzername“ und „Datenbank-Passwort“, wenn diese in QuickInstall gespeichert werden sollen. Aber es ist eine gute Idee auch die restlichen Einstellungen kurz anzusehen und zu überprüfen.<br />Stellen Sie sicher, dass die Verzeichnisse „boards“, „cache“ und „settings“ existieren und vom Webserver beschrieben werden können.<br /><br />Wenn Sie die Einstellungen und Verzeichnisse überprüft haben, drücken Sie auf „Absenden“ und die Einstellungen werden als Profil „default“ gespeichert. Wenn Sie das Profil unter einem anderem Namen speichern wollen, gib diesen im Feld „Neues Profil speichern“ ein.<div class="errorbox"><strong>Bitte beachten</strong>: QuickInstall ist nur für die lokale Verwendung gedacht und sollte nicht auf einem Webserver verwendet werden, der aus dem Internet zugänglich ist. <strong>Wenn Sie QuickInstall auf einem öffentlichen Webserver benutzen, tun Sie das auf Ihre eigene Gefahr.</strong> Es gibt keine Hilfestellung für die Verwendung auf öffentlichen Webservern.</div>',
	'OPTIONS'				=> 'Optionen',
	'OPTIONS_ADVANCED'		=> 'Erweiterte Optionen',
	'OTHER_CONFIG'			=> 'Weitere Board-Konfigurations-Einstellungen',
	'OTHER_CONFIG_EXPLAIN'	=> 'Diese Werte werden in der Konfigurations-Tabelle aktualisiert oder neu hinzugefügt, falls sie bisher nicht existieren. Also achten Sie auf Tippfehler. Diese Werte können auch geändert werden wenn das Board erstellt wird.<br />Eine Konfigurations-Einstellung pro Zeile, getrennt mit Semikola „;“. Name;Einstellung;Dynamisch, wenn die Einstellung nicht dynamisch ist, wird der dynamisch-Teil nicht benötigt. Zeilen die mit einem # anfangen werden als Kommentare interpretiert und nicht in die Datenbank eingefügt. Beispiel:<br />load_tplcompile;1;1<br />session_length;999999<br /># Dies ist ein Kommentar ...',
	'OTHER_SETTINGS'		=> 'Weitere Einstellungen',

	'PLAIN_TEXT'			=> '<strong>Warnung</strong>: QuickInstall speichert Passwörter und Benutzernamen im Klartext.',
	'POPULATE'				=> 'Board befüllen',
	'POPULATE_EXPLAIN'		=> 'Füllt das Board mit der unten festgelegten Zahl an Benutzern, Foren, Themen und Beiträgen. Beachten Sie, dass die Erstellung von Boards umso länger dauert, je mehr Benutzer, Foren, Themen und Beiträge Sie erstellen lassen.<br />All diese Einstellungen können geändert werden, wenn neue Boards erstellt werden.',
	'POPULATE_MAIN_EXPLAIN'	=> 'Benutzer: tester_<samp>x</samp>, Passwort: 123456',
	'POPULATE_OPTIONS'		=> 'Füll-Optionen',
	'POPULATE_SETTINGS'		=> 'Füll-Einstellungen',
	'PROFILE'				=> 'Profil',
	'PROFILES'				=> 'Profile',

	'QI_ABOUT'				=> 'Über',
	'QI_DST'				=> 'Sommerzeit',
	'QI_DST_EXPLAIN'		=> 'Soll die Sommerzeit an oder aus sein?',
	'QI_LANG'				=> 'Sprache für QuickInstall',
	'QI_LANG_EXPLAIN'		=> 'Das Sprachpaket muss in „language/“ Verzeichnis sein, um angezeigt zu werden.',
	'QI_MAIN'				=> 'Hauptseite',
	'QI_MAIN_ABOUT'			=> 'Hier können Sie ein neues Board installieren.<br /><br />„Name der Datenbank und des Verzeichnisses des Boards“ ist das einzige Feld, das Sie ausfüllen müssen, die anderen Felder werden mit den Standardwerten der „includes/default_settings.php“ befüllt.<br /><br />Klicken Sie auf „Erweiterte Optionen“, um weitere Optionen anzuzeigen.',
	'QI_MANAGE'				=> 'Boards verwalten',
	'QI_MANAGE_ABOUT'		=> 'o_O',
	'QI_TZ'					=> 'Zeitzone',
	'QI_TZ_EXPLAIN'			=> 'Ihre Zeitzone. Wird als Standard-Zeitzone in den erstellten Boards verwendet. Angabe in der Form -1, 0, 1 usw.',
	'QUICKINSTALL'			=> 'phpBB QuickInstall',

	'REDIRECT'				=> 'Weiterleitung',
	'REDIRECT_EXPLAIN'		=> 'Aktiviert die Weiterleitung zum neuerstellten Board.',
	'REDIRECT_BOARD'		=> 'Zum neuen Board weiterleiten',
	'REQUIRED'				=> 'wird benötigt',
	'RESET'					=> 'Zurücksetzen',
	'RETURN_MANAGE'			=> 'Zurück zu „Boards verwalten“',

	'SAVE_PROFILE'			=> 'Neues Profil speichern',
	'SAVE_PROFILE_EXPLAIN'	=> 'Tragen Sie den Namen für dieses Einstellungsprofil ein. Nur A-Z, a-z, 0-9, &quot;-&quot; (Minuszeichen), &quot;_&quot; (Unterstrich) und &quot;.&quot; (Punkt) sind erlaubt.<br /><strong>Anmerkung: Wenn bereits ein Profil mit dem Namen existiert, wird es überschrieben.</strong>',
	'SAVE_RESTORE'			=> 'Sichern/Wiederherstellen',
	'SELECT'				=> 'Auswählen',
	'SETTINGS'				=> 'Einstellungen',
	'SETTINGS_FAILURE'		=> 'Es sind Fehler aufgetreten. Details sind in untenstehender Meldung enthalten.',
	'SETTINGS_NOT_WRITABLE'	=> 'Das „settings“ Verzeichnis existiert nicht, ist kein Verzeichnis oder nicht beschreibbar.',
	'SETTINGS_SECTIONS'		=> 'Einstellungs-Abschnitte',
	'SETTINGS_SUCCESS'		=> 'Ihre Einstellungen wurden erfolgreich gespeichert.',
	'SERVER_COOKIE_SETTINGS'	=> 'Server- und Cookie-Einstellungen',
	'SERVER_NAME'			=> 'Servername',
	'SERVER_NAME_EXPLAIN'	=> 'Dies sollte normalerweise localhost sein, da QuickInstall <strong>nicht</strong> für öffentlich zugängliche Webserver gedacht ist.',
	'SERVER_PORT'			=> 'Serverport',
	'SERVER_PORT_EXPLAIN'	=> 'Meist „80“.',
	'SHOW_CONFIRM'			=> 'Löschen bestätigen',
	'SHOW_CONFIRM_EXPLAIN'	=> 'Beim Löschen von Boards und Profilen eine Bestätigung abgefragen.',
	'SITE_DESC'				=> 'Beschreibung des Boards',
	'SITE_DESC_EXPLAIN'		=> 'Die Standard-Beschreibung der Boards. Diese kann geändert werden, wenn neue Boards erstellt werden.',
	'SITE_NAME'				=> 'Name des Boards',
	'SITE_NAME_EXPLAIN'		=> 'Der Standard-Name des Boards, der für die Boards verwendet wird. Er kann geändert werden, wenn neue Boards erstellt werden.',
	'SMTP_AUTH'				=> 'SMTP-Authentifizierungsmethode',
	'SMTP_AUTH_EXPLAIN'		=> 'Nur benötigt, wenn ein Benutzername/Passwort eingegeben ist.',
	'SMTP_DELIVERY'			=> 'SMTP-Server für E-Mail nutzen',
	'SMTP_DELIVERY_EXPLAIN'	=> 'Wählen Sie „Ja“ aus, wenn Sie E-Mails über einen SMTP-Server senden möchten (oder müssen), anstatt die PHP-eigene Mail-Funktion zu nutzen.',
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
	'SUBSILVER'				=> 'Subsilver2 installieren',
	'SUBSILVER_EXPLAIN'		=> 'Wählen Sie aus, ob das Subsilver2-Theme installiert werden soll und ob es als Standard-Style festgelegt werden soll.',
	'SUCCESS'				=> 'Erfolgreich',
	'SURE_DELETE_PROFILE'	=> 'Sind Sie sich sicher, dass Sie das Profil löschen möchten? Dieser Vorgang kann nicht rückgängig gemacht werden.',
	'SURE_DELETE_BOARDS'	=> 'Sind Sie sich sicher, dass Sie das Board/die Boards löschen möchten? Dieser Vorgang kann nicht rückgängig gemacht werden.',

	'TABLE_PREFIX'			=> 'Tabellenpräfix',
	'TABLE_PREFIX_EXPLAIN'	=> 'Dieser Tabellenpräfix wird für Ihre Boards verwendet. Sie können ihn in den erweiterten Einstellungen ändern, wenn Sie neue Boards erstellen.',
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
	'WHY_EXPLAIN'			=> 'Wenn Sie viele Modifikationen erstellen, haben Sie (auch schon in phpBB 2) das Problem, dass Sie nicht alle Anpassungen in einer einzigen phpBB-Installation verwenden können. Daher ist am besten, wenn Sie getrennte Installationen verwenden. Allerdings ist es sehr aufwändig, die ganzen Dateien zu kopieren und jedes Mal die Installationsvorgänge durchzuführen. Um diesen Vorgang zu beschleunigen, wurde QuickInstall geboren.',
));
