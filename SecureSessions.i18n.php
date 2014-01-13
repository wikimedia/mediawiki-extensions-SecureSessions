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
	'securesessions-sessions-clear' => 'Sign out all other sessions',
	'securesessions-prefs-country' => 'Restrict login by country:',
	'securesessions-prefs-tor' => 'Disallow logins from Tor exit nodes.',
	'securesessions-disallowedcountry' => 'This account is not allowed to log in from this country.',
	'securesessions-disallowedtor' => 'This account is not allowed to log in from Tor exit nodes.'
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author Tyler Romeo
 */
$messages['qqq'] = array(
	'securesessions-desc' => '{{desc|name=Secure Sessions|url=http://www.mediawiki.org/wiki/Extension:SecureSessions}}',
	'securesessions-personalurl' => 'Used as text for the link which points to [[Special:Sessions]], next to the Logout link at the top of the page.

Parameters:
* $1 - the current number of open sessions',
	'securesessions-ipsession' => 'Label for the checkbox of whether the user wants to log out all other sessions when they log in.',
	'securesessions-iprestrict' => 'Label for the checkbox of whether the user wants to restrict their login session to the IP address they are using.',
	'securesessions-uarestrict' => 'Label for the checkbox of whether the user wants to restrict their login to the browser (user agent) they are using.',
	'securesessions-sessions' => '{{doc-special|Sessions|unlisted=1}}
{{Identical|Session}}',
	'securesessions-sessions-legend' => 'Label for the fieldset on Special:Sessions.',
	'securesessions-sessions-text' => 'Introductory text at the top of Special:Sessions. It briefly explains the purpose of the page.',
	'securesessions-sessions-ip' => 'Label for the IP address of a session description.
{{Identical|IP address}}',
	'securesessions-sessions-activity' => 'Label for the last activity time of a session description.',
	'securesessions-sessions-clear' => 'Label for the submit button on Special:Sessions that closes all sessions.',
	'securesessions-prefs-country' => 'Label for the user option restricting login to a certain country',
	'securesessions-prefs-tor' => 'Label for the user option restricting login from Tor exit nodes',
	'securesessions-disallowedcountry' => 'Message for logins that are aborted because the user is not allowed to log in from that country',
	'securesessions-disallowedtor' => 'Message for logins that are aborted because the user tried to log in from a Tor exit node.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'securesessions-desc' => "Fai más segures les sesiones d'usuariu y la autenticación de sesión",
	'securesessions-personalurl' => 'Sesiones abiertes ($1)',
	'securesessions-ipsession' => 'Colar de les otres sesiones.',
	'securesessions-iprestrict' => 'Llendar la sesión a esta direición IP.',
	'securesessions-uarestrict' => 'Llendar la sesión a esti navegador.',
	'securesessions-sessions' => 'Sesiones',
	'securesessions-sessions-legend' => 'Información de la sesión',
	'securesessions-sessions-text' => "Abaxo tan les sesiones abiertes de la so cuenta y la información d'elles. Pue zarrar toles demás sesiones usando'l botón inferior. Un asteriscu (*) denota a sesión actual.",
	'securesessions-sessions-ip' => 'Direición IP:',
	'securesessions-sessions-activity' => 'Última actividá:',
	'securesessions-sessions-clear' => 'Colar de les otres sesiones',
	'securesessions-prefs-country' => "Llendar l'accesu por país:",
	'securesessions-prefs-tor' => 'Torgar los anicios de sesión dende noyos de salida Tor.',
	'securesessions-disallowedcountry' => "Esta cuenta nun tien permisu p'aniciar sesión dende esti país.",
	'securesessions-disallowedtor' => "Esta cuenta nun tien permisu p'aniciar sesión dende noyos de salida Tor.",
);

/** Breton (brezhoneg)
 * @author Fohanno
 */
$messages['br'] = array(
	'securesessions-sessions' => "Dalc'hoù",
);

/** Czech (čeština)
 * @author Vks
 */
$messages['cs'] = array(
	'securesessions-sessions-ip' => 'IP adresa:',
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
	'securesessions-prefs-country' => 'Anmeldung beschränken auf Staat:',
	'securesessions-prefs-tor' => 'Anmeldungen von Tor-Ausgangsknoten verweigern.',
	'securesessions-disallowedcountry' => 'Dieses Konto ist nicht zur Anmeldung aus diesem Staat berechtigt.',
	'securesessions-disallowedtor' => 'Dieses Konto ist nicht zur Anmeldung von Tor-Ausgangsknoten berechtigt.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'securesessions-desc' => 'Pówušujo wěstotu wužywarskich pósejźenjow a pósejźeńskeje awtentifikacije',
	'securesessions-personalurl' => 'Wócynjone pósejźenja ($1)',
	'securesessions-ipsession' => 'Wšykne druge pósejźenja wótzjawiś.',
	'securesessions-iprestrict' => 'Pósejźenje na toś tu IP-adresu wobgranicowaś.',
	'securesessions-uarestrict' => 'Pósejźenje na toś ten wobglědowak wobgranicowaś.',
	'securesessions-sessions' => 'Pósejźenja',
	'securesessions-sessions-legend' => 'Pósejźeńske informacije',
	'securesessions-sessions-text' => 'Dołojce wiźiš wšykne wócynjene pósejźenja za twójo konto a informacije wó nich. Móžoš wšykne druge pósejźenja z pomocu slědujucym tłocaškom zacyniś. Gwězdka (*) wóznamjenjujo aktualne pósejźenje.',
	'securesessions-sessions-ip' => 'IP-adresa:',
	'securesessions-sessions-activity' => 'Slědna aktiwita:',
	'securesessions-sessions-clear' => 'Wšykne druge pósejźenja wótzjawiś',
	'securesessions-prefs-country' => 'Pśizjawjenje pó kraju wobgranicowaś:',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'securesessions-sessions-ip' => 'IP-aadress:',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author Reza1615
 */
$messages['fa'] = array(
	'securesessions-sessions' => 'نشست‌ها',
	'securesessions-sessions-ip' => 'نشانی آی‌پی:',
	'securesessions-sessions-activity' => 'آخرین فعالیت:',
);

/** Finnish (suomi)
 * @author Veikk0.ma
 */
$messages['fi'] = array(
	'securesessions-desc' => 'Tekee käyttäjien istunnoista ja istuntojen varmistamisesta turvallisempaa',
	'securesessions-personalurl' => 'Avoimet istunnot ($1)',
	'securesessions-ipsession' => 'Kirjaudu ulos kaikista muista istunnoista.',
	'securesessions-iprestrict' => 'Rajoita istunto tähän IP-osoitteeseen,',
	'securesessions-uarestrict' => 'Rajoita istunto tähän selaimeen.',
	'securesessions-sessions' => 'Istunnot',
	'securesessions-sessions-legend' => 'Istunnon tiedot',
	'securesessions-sessions-text' => 'Alla näkyvät kaikki tunnuksesi avoimet istunnot ja tietoa niistä. Voit sulkea kaikki muut istunnot painamalla alla olevaa nappia. Nykyinen istunto on merkitty asteriskilla (*).',
	'securesessions-sessions-ip' => 'IP-osoite:',
	'securesessions-sessions-activity' => 'Viimeisin toiminta:',
	'securesessions-sessions-clear' => 'Sulje kaikki muut istunnot.',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'securesessions-desc' => 'Sécurise davantage les sessions utilisateur et l’authentification de session',
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
	'securesessions-prefs-country' => 'Restreindre la connexion par pays:',
	'securesessions-prefs-tor' => 'Interdire les connexions depuis les nœuds de sortie de Tor.',
	'securesessions-disallowedcountry' => 'Ce compte n’est pas autorisé à se connecter depuis ce pays.',
	'securesessions-disallowedtor' => 'Ce compte n’est pas autorisé à se connecter depuis des nœuds de sortie de Tor.',
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
	'securesessions-prefs-country' => 'Restrinxir o acceso por país:',
	'securesessions-prefs-tor' => 'Impedir os accesos desde os nodos de saída Tor.',
	'securesessions-disallowedcountry' => 'Esta conta non ten permiso para acceder desde este país.',
	'securesessions-disallowedtor' => 'Esta conta non ten permiso para acceder desde nodos de saída Tor.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'securesessions-desc' => 'Powyša wěstotu wužiwarskich posedźenjow a posedźenskeje awtentifikacije',
	'securesessions-personalurl' => 'Wočinjene posedźenja ($1)',
	'securesessions-ipsession' => 'Wšě druhe posedźenja wotzjewić.',
	'securesessions-iprestrict' => 'Posedźenje na tutu IP-adresu wobmjezować.',
	'securesessions-uarestrict' => 'Posedźenje na tutón wobhladowak wobmjezować',
	'securesessions-sessions' => 'Posedźenja',
	'securesessions-sessions-legend' => 'Posedźenske informacije',
	'securesessions-sessions-text' => 'Deleka widźiš wšě wočinjene  posedźenja za twoje konto a informacije wo nich. Móžeš wšě druhe posedźenja z pomocu slědowacym tłóčatkom začinić. Hwěžka (*) woznamjenja aktualne posedźenje.',
	'securesessions-sessions-ip' => 'IP-adresa:',
	'securesessions-sessions-activity' => 'Poslednja aktiwita:',
	'securesessions-sessions-clear' => 'Wšě druhe posedźenja wotzjewić',
	'securesessions-prefs-country' => 'Přizjewjenje po kraju wobmjezować:',
	'securesessions-prefs-tor' => 'Přizjewjenja z wuchadnych sukow Tor zakazać.',
	'securesessions-disallowedcountry' => 'Tute konto njesmě so z tutoho kraja přizjewić.',
	'securesessions-disallowedtor' => 'Tute konto njesmě so z wuchadnych sukow Tor přizjewić.',
);

/** Italian (italiano)
 * @author Beta16
 * @author F. Cosoleto
 * @author Gianfranco
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
	'securesessions-prefs-country' => "Limita l'accesso per paese:",
	'securesessions-prefs-tor' => "Impedisci l'accesso a nodi di uscita Tor.",
	'securesessions-disallowedcountry' => 'A questa utenza non è consentito effettuare il login da questo paese.',
	'securesessions-disallowedtor' => 'A questa utenza non è consentito effettuare il login da nodi di uscita Tor.',
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
	'securesessions-sessions-activity' => 'ბოლო აქტიურობა:',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'securesessions-desc' => '사용자 세션과 세션 인증을 보다 안전하게 합니다',
	'securesessions-personalurl' => '열린 세션 ($1)',
	'securesessions-ipsession' => '다른 모든 세션 로그아웃하기',
	'securesessions-iprestrict' => '세션을 이 IP 주소만으로 제한합니다.',
	'securesessions-uarestrict' => '세션을 이 브라우저만으로 제한합니다.',
	'securesessions-sessions' => '세션',
	'securesessions-sessions-legend' => '세션 정보',
	'securesessions-sessions-text' => '아래에 있는 내용은 당신의 계정에 대한 모든 열린 세션과 그에 대한 정보입니다. 아래의 버튼을 눌러 모든 다른 세션을 닫을 수 있습니다. 현재 세션은 별표(*)로 표시됩니다.',
	'securesessions-sessions-ip' => 'IP 주소:',
	'securesessions-sessions-activity' => '마지막 활동:',
	'securesessions-sessions-clear' => '다른 모든 세션 닫기',
	'securesessions-prefs-country' => '국가에 따른 로그인 제한:',
	'securesessions-prefs-tor' => '토르 출구 노드에서 로그인을 불허하기',
	'securesessions-disallowedcountry' => '이 계정은 이 국가에서 로그인하도록 허용되지 않았습니다.',
	'securesessions-disallowedtor' => '이 계정은 토르 출구 노드에서 로그인이 허용되지 않습니다.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'securesessions-desc' => 'Mécht Benotzersessiounen an Authentificatioun vun der Sessioun méi sécher',
	'securesessions-personalurl' => 'Ope Sessiounen ($1)',
	'securesessions-ipsession' => 'Aus allen anere Sessiounen erausgoen.',
	'securesessions-iprestrict' => 'Sessioun op dës IP-Adress limitéieren.',
	'securesessions-uarestrict' => 'Sessioun op dëse Browser limitéieren.',
	'securesessions-sessions' => 'Sessiounen',
	'securesessions-sessions-legend' => 'Informatioun vun der Sessioun',
	'securesessions-sessions-text' => "Hei drënner ass eng Lëscht vun all den oppene Sessioune fir Äre Benotzerkont mat den Informatiounen doriwwer. Dir kënnt all d'Sessioune ma t dem Knäppchen drënner zoumaachen. Ee Stär (*) markéiert déi aktuell Sessioun.",
	'securesessions-sessions-ip' => 'IP-Adress:',
	'securesessions-sessions-activity' => 'Lescht Aktivitéit:',
	'securesessions-sessions-clear' => 'All aner Sessiounen zoumaachen',
	'securesessions-prefs-country' => "Aloggen limitéieren op d'Land:",
	'securesessions-disallowedcountry' => 'Dëse Kont ass net autoriséiert fir sech aus dësem Land anzeloggen.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'securesessions-desc' => 'Дава поголема безбедност за кориснички сесии и нивното скривање',
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
	'securesessions-prefs-country' => 'ограничи најава по земји:',
	'securesessions-prefs-tor' => 'Забрани најава од излезни јазли на Tor.',
	'securesessions-disallowedcountry' => 'На сметката не ѝ е дозволено да се најавува од оваа земја.',
	'securesessions-disallowedtor' => 'На сметката не ѝ е дозволено да се најавува од излезни јазли на Tor.',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'securesessions-sessions-ip' => 'IP-Adress:',
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
	'securesessions-sessions-text' => 'Hieronder staan alle open sessies voor uw gebruiken en de bijbehorende gegevens. U kunt alle andere sessies afmelden via de knop hieronder. De huidige sessie wordt met een asterisk (*) opgegeven.',
	'securesessions-sessions-ip' => 'IP-adres:',
	'securesessions-sessions-activity' => 'Laatste activiteit:',
	'securesessions-sessions-clear' => 'Afmelden van alle andere sessies',
	'securesessions-prefs-country' => 'Aanmelden beperken op land:',
	'securesessions-prefs-tor' => 'Aanmelden vanaf Tor exitnodes weigeren',
	'securesessions-disallowedcountry' => 'Deze gebruiker mag niet aanmelden vanuit dit land.',
	'securesessions-disallowedtor' => 'Deze gebruiker mag niet aanmelden vanaf Tor exitnodes.',
);

/** Polish (polski)
 * @author Woytecr
 */
$messages['pl'] = array(
	'securesessions-sessions-ip' => 'Adres IP:',
	'securesessions-sessions-activity' => 'Ostatnia aktywność:',
	'securesessions-sessions-clear' => 'Wyloguj wszystkie pozostałe sesje',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'securesessions-desc' => "A rend le session utent e l'autenticassion ëd session pi sigure",
	'securesessions-personalurl' => 'Duverté dle session ($1)',
	'securesessions-ipsession' => "Seurt da tute j'àutre session.",
	'securesessions-iprestrict' => "Lìmita la session a st'adrëssa IP,",
	'securesessions-uarestrict' => 'Limité la session a cost navigador.',
	'securesessions-sessions' => 'Session',
	'securesessions-sessions-legend' => 'Anformassion ëd session',
	'securesessions-sessions-text' => "Sì-sota a-i son tute le session duverte ëd tò cont e dj'anformassion dzora ëd lor. A peul saré tute j'àutre session dovrand ël boton sota. N'asterisch (*) a mostra la session corenta.",
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

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'securesessions-desc' => "Fà le sessiune utende e l'autendicazione d'a sessione cchiù secure",
	'securesessions-personalurl' => 'Iapre le sessiune ($1)',
	'securesessions-ipsession' => 'Isse da tutte le otre sessiune.',
	'securesessions-iprestrict' => 'Sessione ristrette a stu indirizze IP,',
	'securesessions-uarestrict' => 'Sessione ristrette a stu browser.',
	'securesessions-sessions' => 'Sessiune',
	'securesessions-sessions-legend' => "'Mbormaziune sus a sessione",
	'securesessions-sessions-text' => "Aqquà sotte stonne tutte le sessiune aperte pu cunde tune e le 'mbormaziune sus a lore. Tu puè achiudere tutte le otre sessiune ausanne 'u buttone aqquà sotte. 'N'asterische (*) te dice 'a sessione de mò.",
	'securesessions-sessions-ip' => 'Indirizze IP:',
	'securesessions-sessions-activity' => 'Urtema attività:',
	'securesessions-sessions-clear' => 'Isse da tutte le otre sessiune.',
	'securesessions-prefs-country' => "Restringe 'a trasute pe paese:",
	'securesessions-prefs-tor' => "Nò permettere 'a trasute da node ca esistene de Tor.",
	'securesessions-disallowedcountry' => "Stu cunde non g'è abbilitate a trasè da stu paese.",
	'securesessions-disallowedtor' => "Stu cunde non g'è abbilitate a trasè da 'nu node esistende de Tor.",
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'securesessions-desc' => 'Делает сеансы пользователей и сессии аутентификации более безопасными',
	'securesessions-personalurl' => 'Открытые сеансы ($1)',
	'securesessions-ipsession' => 'Выйти из всех остальных сеансов.',
	'securesessions-iprestrict' => 'Ограничить сессии этим IP-адресом,',
	'securesessions-uarestrict' => 'Ограничить сессии этим браузером.',
	'securesessions-sessions' => 'Сессии',
	'securesessions-sessions-legend' => 'Информация о сессии',
	'securesessions-sessions-text' => 'Ниже приведены все открытые сеансы для вашей учётной записи и сведения о них. Вы можете закрыть все другию сеансы, используя кнопку, расположенную ниже. Звёздочка (*) обозначает текущий сеанс.',
	'securesessions-sessions-ip' => 'IP-адрес:',
	'securesessions-sessions-activity' => 'Последняя активность:',
	'securesessions-sessions-clear' => 'Выйти из всех остальных сеансов',
	'securesessions-prefs-country' => 'Ограничение входа в систему по странам:',
	'securesessions-prefs-tor' => 'Запретить вход в систему из узлов сети Tor.',
	'securesessions-disallowedcountry' => 'Этой учётной записи не разрешён вход из данной страны.',
	'securesessions-disallowedtor' => 'Этой учётной записи не разрешен вход из узлов сети Tor.',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'securesessions-personalurl' => 'විවෘත සැසි ($1)',
	'securesessions-ipsession' => 'වෙනත් සියලුම සැසි වලින් නික්මෙන්න.',
	'securesessions-iprestrict' => 'මෙම IP ලිපිනයට සැසිය අවහිර කරන්න,',
	'securesessions-uarestrict' => 'මෙම ගවේශකයට සැසිය අවහිර කරන්න.',
	'securesessions-sessions' => 'සැසි',
	'securesessions-sessions-legend' => 'සැසියේ තොරතුරු',
	'securesessions-sessions-ip' => 'IP ලිපිනය:',
	'securesessions-sessions-activity' => 'අවසන් ක්‍රියාකාරකම:',
	'securesessions-sessions-clear' => 'වෙනත් සියලුම සැසි වලින් නික්මෙන්න',
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
 * @author Andriykopanytsia
 * @author Base
 * @author Steve.rusyn
 * @author SteveR
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
	'securesessions-prefs-country' => 'Обмежити вхід за країнами:',
	'securesessions-prefs-tor' => 'Не дозволяти входи через вузли виходу Tor.',
	'securesessions-disallowedcountry' => 'Цьому обліковому запису не дозволено вхід з цієї країни.',
	'securesessions-disallowedtor' => 'Цьому обліковому запису не дозволено вхід у систему з вузлів виходу Tor.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shirayuki
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'securesessions-desc' => '使用户会话和会话认证更安全',
	'securesessions-personalurl' => '打开的会话 ($1)',
	'securesessions-ipsession' => '注销所有其他会话。',
	'securesessions-iprestrict' => '限制会话到此IP地址，',
	'securesessions-uarestrict' => '限制会话到此浏览器，',
	'securesessions-sessions' => '会话',
	'securesessions-sessions-legend' => '会话信息',
	'securesessions-sessions-text' => '以下是您的帐户所有打开的会话，以及有关它们的信息。您可以使用下面的按钮关闭所有其他会话。带有一个星号(*)表示是当前的会话。',
	'securesessions-sessions-ip' => 'IP地址：',
	'securesessions-sessions-activity' => '最后活动：',
	'securesessions-sessions-clear' => '注销所有其他会话',
	'securesessions-prefs-country' => '按国家限制登录：',
	'securesessions-prefs-tor' => '禁止从 Tor 出口节点登录。',
	'securesessions-disallowedcountry' => '此账户不允许从此国家登录。',
	'securesessions-disallowedtor' => '此账户不允许从 Tor 出口节点登录。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'securesessions-sessions-ip' => 'IP位址：',
);
