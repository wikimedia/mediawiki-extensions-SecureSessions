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
