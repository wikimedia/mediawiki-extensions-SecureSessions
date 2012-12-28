<?php

/**
 * SecureSessions extension for MediaWiki
 * (c) 2012 Tyler Romeo <tylerromeo@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

$messages = array();

/** English
 * @author Tyler Romeo
 */
$messages['en'] = array(
	'securesessions-desc' => 'Makes user sessions and session authentication more secure',
	'securesessions-personalurl' => 'Open sessions ($1)',
	'securesessions-ipsession' => 'Log out all other sessions.',
	'securesessions-iprestrict' => 'Restrict session to this IP address,',
	'securesessions-uarestrict' => 'Restrict session to this browser.',
	'securesessions-sessions' => 'Sessions',
	'securesessions-sessions-legend' => 'Session information',
	'securesessions-sessions-text' => 'Below is all of the open sessions for your account and information about them. You can close all other sessions using the button below. An asterisk (*) denotes the current session.',
	'securesessions-sessions-ip' => 'IP address:',
	'securesessions-sessions-activity' => 'Last activity:',
	'securesessions-sessions-clear' => 'Sign out all other sessions'
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author Tyler Romeo
 */
$messages['qqq'] = array(
	'securesessions-desc' => '{{desc|name=Secure Sessions|url=http://www.mediawiki.org/wiki/Extension:SecureSessions}}',
	'securesessions-personalurl' => 'Text for the personal URL next to the Logout link at the top of the page. It takes one parameter: the current number of open sessions',
	'securesessions-ipsession' => 'Label for the checkbox of whether the user wants to log out all other sessions when they log in.',
	'securesessions-iprestrict' => 'Label for the checkbox of whether the user wants to restrict their login session to the IP address they are using.',
	'securesessions-uarestrict' => 'Label for the checkbox of whether the user wants to restrict their login to the browser (user agent) they are using.',
	'securesessions-sessions' => 'Title for the special page Special:Sessions.',
	'securesessions-sessions-legend' => 'Label for the fieldset on Special:Sessions.',
	'securesessions-sessions-text' => 'Introductory text at the top of Special:Sessions. It briefly explains the purpose of the page.',
	'securesessions-sessions-ip' => 'Label for the IP address of a session description.',
	'securesessions-sessions-activity' => 'Label for the last activity time of a session description.',
	'securesessions-sessions-clear' => 'Label for the submit button on Special:Sessions that closes all sessions.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'securesessions-desc' => 'Ermöglicht eine erhöhte Sicherheit für Benutzersitzungen und Sitzungsauthentifizierungen',
	'securesessions-personalurl' => 'Offene Sitzungen ($1)',
	'securesessions-ipsession' => 'Alle anderen Sitzungen abmelden.',
	'securesessions-iprestrict' => 'Sitzung auf diese IP-Adresse beschränken.',
	'securesessions-uarestrict' => 'Sitzung auf diesen Browser beschränken.',
	'securesessions-sessions' => 'Sitzungen',
	'securesessions-sessions-legend' => 'Sitzungsinformationen',
	'securesessions-sessions-text' => 'Hier siehst du alle offenen Sitzungen für dein Benutzerkonto und Informationen über diese. Du kannst alle anderen Sitzungen schließen, indem du auf die Schaltfläche unten klickst. Ein Sternchen (*) kennzeichnet die aktuelle Sitzung.',
	'securesessions-sessions-ip' => 'IP-Adresse:',
	'securesessions-sessions-activity' => 'Letzte Aktivität:',
	'securesessions-sessions-clear' => 'Alle anderen Sitzungen abmelden',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'securesessions-sessions-ip' => 'IP-aadress:',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'securesessions-sessions-ip' => 'نشانی آی‌پی:',
	'securesessions-sessions-activity' => 'آخرین فعالیت:',
);

/** French (français)
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'securesessions-desc' => "Sécurise davantage les sessions utilisateur et l'authentification de session",
	'securesessions-personalurl' => 'Ouvrir des sessions ($1)',
	'securesessions-ipsession' => 'Terminer toutes les autres sessions.',
	'securesessions-iprestrict' => 'Restreindre la session à cette adresse IP,',
	'securesessions-uarestrict' => 'Restreindre la session à ce navigateur Web.',
	'securesessions-sessions' => 'Sessions',
	'securesessions-sessions-legend' => 'Informations sur la session',
	'securesessions-sessions-text' => 'Ci-dessous se trouvent toutes les sessions actives de votre compte et des informations sur elles. Vous pouvez terminer toutes les autres sessions en cliquant sur le bouton plus bas. Une astérique (*) indique la session active.',
	'securesessions-sessions-ip' => 'Adresse IP :',
	'securesessions-sessions-activity' => 'Dernière activité :',
	'securesessions-sessions-clear' => 'Terminer toutes les autres sessions.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'securesessions-desc' => 'Fai que as sesións de usuario e a autenticación da sesión sexa máis segura',
	'securesessions-personalurl' => 'Sesións abertas ($1)',
	'securesessions-ipsession' => 'Saír das outras sesións.',
	'securesessions-iprestrict' => 'Restrinxir a sesión a este enderezo IP.',
	'securesessions-uarestrict' => 'Restrinxir a sesión a este navegador.',
	'securesessions-sessions' => 'Sesións',
	'securesessions-sessions-legend' => 'Información da sesión',
	'securesessions-sessions-text' => 'A continuación están as sesións abertas da súa conta e a información sobre elas. Pode pechar as outras sesións usando o botón inferior. Un asterisco (*) denota a sesión actual.',
	'securesessions-sessions-ip' => 'Enderezo IP:',
	'securesessions-sessions-activity' => 'Última actividade:',
	'securesessions-sessions-clear' => 'Saír das outras sesións',
);

/** Italian (italiano)
 * @author Beta16
 * @author F. Cosoleto
 */
$messages['it'] = array(
	'securesessions-desc' => 'Rende più sicure le sessioni utente e le autenticazione di sessione',
	'securesessions-personalurl' => 'Sessioni aperte ($1)',
	'securesessions-ipsession' => 'Uscire da tutte le altre sessioni.',
	'securesessions-iprestrict' => 'Limitare la sessione a questo indirizzo IP,',
	'securesessions-uarestrict' => 'Limitare la sessione a questo browser.',
	'securesessions-sessions' => 'Sessioni',
	'securesessions-sessions-legend' => 'Informazioni sulla sessione',
	'securesessions-sessions-text' => 'Qui sono elencate tutte le sessioni aperte per il tuo account e alcune informazioni su di esse. È possibile chiudere tutte le altre sessioni utilizzando il pulsante qui sotto. Un asterisco (*) indica la sessione corrente.',
	'securesessions-sessions-ip' => 'Indirizzo IP:',
	'securesessions-sessions-activity' => 'Ultima attività:',
	'securesessions-sessions-clear' => 'Uscire da tutte le altre sessioni',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'securesessions-desc' => '利用者セッションおよびセッション認証のセキュリティを高める',
	'securesessions-personalurl' => 'セッション ($1)',
	'securesessions-ipsession' => '他のセッションをすべてログアウトする。',
	'securesessions-iprestrict' => 'セッションをこの IP アドレスに制限する。',
	'securesessions-uarestrict' => 'セッションをこのブラウザーに制限する。',
	'securesessions-sessions' => 'セッション',
	'securesessions-sessions-legend' => 'セッションの情報',
	'securesessions-sessions-text' => '以下の一覧は、あなたのアカウントの有効なセッションとその情報です。下のボタンで、他のセッションをすべてログアウトさせることができます。「*」印は現在のセッションを意味しています。',
	'securesessions-sessions-ip' => 'IP アドレス:',
	'securesessions-sessions-activity' => '最終活動日時:',
	'securesessions-sessions-clear' => '他のセッションをすべてログアウト',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'securesessions-sessions-ip' => 'IP-მისამართი:',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'securesessions-desc' => 'Дава поголема безбедност за кориснички сесии и нивната заверка',
	'securesessions-personalurl' => 'Отворени сесии ($1)',
	'securesessions-ipsession' => 'Одјава од сите други сесии',
	'securesessions-iprestrict' => 'Ограничи ја сесијата на оваа IP-адреса,',
	'securesessions-uarestrict' => 'Ограничи ја сесијата на овој прелистувач.',
	'securesessions-sessions' => 'Сесии',
	'securesessions-sessions-legend' => 'Информации за сесијата',
	'securesessions-sessions-text' => 'Подолу се наведени сите отворени сесии на вашата сметка и информациите за нив. Можете да ги затворите сите други сесии со копчето подолу. Тековната сесија е означена со ѕвездичка (*).',
	'securesessions-sessions-ip' => 'IP-адреса:',
	'securesessions-sessions-activity' => 'Последна активност:',
	'securesessions-sessions-clear' => 'Одјава од сите други сесии',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'securesessions-desc' => 'Maakt gebrukerssessies en sessieverificatie veiliger',
	'securesessions-personalurl' => 'Open sessies ($1)',
	'securesessions-ipsession' => 'Afmelden van alle andere sessies.',
	'securesessions-iprestrict' => 'Sessie tot dit IP adres beperken.',
	'securesessions-uarestrict' => 'Sessie tot deze browser beperken.',
	'securesessions-sessions' => 'Sessies',
	'securesessions-sessions-legend' => 'Sessiegegevens',
	'securesessions-sessions-text' => 'Hieronder staan alle open sessies voor uw gebruiken en de bijbehorende gegevens. U kunt alle andere sessies afmelden via de knop hieronder. De huidige sessie wordt met een asterisk (*) aangegeven.',
	'securesessions-sessions-ip' => 'IP-adres:',
	'securesessions-sessions-activity' => 'Laatste activiteit:',
	'securesessions-sessions-clear' => 'Afmelden van alle andere sessies',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'securesessions-desc' => "A rend le session utent e l'autenticassion ëd session pi sigure",
	'securesessions-personalurl' => 'Deurb session ($1)',
	'securesessions-ipsession' => "Seurt da tute j'àutre session.",
	'securesessions-iprestrict' => "Lìmita la session a st'adrëssa IP,",
	'securesessions-uarestrict' => 'Lìmita session a sto navigador.',
	'securesessions-sessions' => 'Session',
	'securesessions-sessions-legend' => 'Anformassion ëd session',
	'securesessions-sessions-text' => "Sota a-i son tute le session duverte për tò cont e anformassion dzora ëd lor. It peule saré tute j'àutre session dovrand ël boton sota. N'asterisch (*) a ìndica la session corenta.",
	'securesessions-sessions-ip' => 'Adrëssa IP:',
	'securesessions-sessions-activity' => 'Ùltima atività:',
	'securesessions-sessions-clear' => "Seurt da tute j'àutre session",
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'securesessions-personalurl' => 'Deschide sesiunile ($1)',
	'securesessions-ipsession' => 'Închide toate celelalte sesiuni.',
	'securesessions-sessions' => 'Sesiuni',
	'securesessions-sessions-legend' => 'Informații despre sesiune',
	'securesessions-sessions-ip' => 'Adresă IP:',
	'securesessions-sessions-activity' => 'Ultima activitate:',
	'securesessions-sessions-clear' => 'Închide toate celelalte sesiuni',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'securesessions-sessions' => 'සැසි',
	'securesessions-sessions-legend' => 'සැසියේ තොරතුරු',
	'securesessions-sessions-ip' => 'IP ලිපිනය:',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'securesessions-personalurl' => 'Öppna sessioner ($1)',
	'securesessions-ipsession' => 'Logga ut alla andra sessioner.',
	'securesessions-sessions' => 'Sessioner',
	'securesessions-sessions-ip' => 'IP-adress:',
	'securesessions-sessions-activity' => 'Senaste aktivitet:',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'securesessions-sessions-ip' => 'ஐ.பி. முகவரி:',
	'securesessions-sessions-activity' => 'கடைசி செயல்பாடு:',
);

/** Ukrainian (українська)
 * @author Steve.rusyn
 * @author Ата
 */
$messages['uk'] = array(
	'securesessions-desc' => 'Робить сесії користувачів та автентифікацію сесії більш безпечними',
	'securesessions-personalurl' => 'Відкрити сесії ($1)',
	'securesessions-ipsession' => 'Вийти з усіх інших сесій',
	'securesessions-iprestrict' => 'Обмежити сесію цією IP-адресою,',
	'securesessions-uarestrict' => 'Обмежити сесію цим браузером.',
	'securesessions-sessions' => 'Сесії',
	'securesessions-sessions-legend' => 'Інформація про сесію',
	'securesessions-sessions-text' => 'Нижче наведено усі відкриті сесії Вашого облікового запису та інформацію про них. Ви можете закрити усі інші сесії кнопкою унизу. Зірочка (*) вказує на поточну сесію.',
	'securesessions-sessions-ip' => 'IP-адреса:',
	'securesessions-sessions-activity' => 'Остання активність:',
	'securesessions-sessions-clear' => 'Вийти з усіх інших сесій',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shirayuki
 */
$messages['zh-hans'] = array(
	'securesessions-sessions-ip' => 'IP地址：',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'securesessions-sessions-ip' => 'IP位址：',
);
