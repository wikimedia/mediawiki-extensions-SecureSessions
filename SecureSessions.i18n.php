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

$messages['qqq'] = array(
	'securesessions-desc' => 'Description of the extension to be shown on Special:Version.',
	'securesessions-personalurl' => 'Text for the personal URL next to the Logout link at the top of the page. It takes one parameter: the current number of open sessions',
	'securesessions-ipsession' => 'Label for the checkbox of whether the user wants to log out all other sessions when they log in.',
	'securesessions-iprestrict' => 'Label for the checkbox of whether the user wants to restrict their login session to the IP address they are using.',
	'securesessions-uarestrict' => 'Label for the checkbox of whether the user wants to restrict their login to the browser (user agent) they are using.',
	'sessions' => 'Title for the special page Special:Sessions.',
	'sessions-legend' => 'Label for the fieldset on Special:Sessions.',
	'sessions-text' => 'Introductory text at the top of Special:Sessions. It briefly explains the purpose of the page.',
	'sessions-ip' => 'Label for the IP address of a session description.',
	'sessions-activity' => 'Label for the last activity time of a session description.',
	'sessions-clear' => 'Label for the submit button on Special:Sessions that closes all sessions.'
);

$messages['en'] = array(
	'securesessions-desc' => 'Makes user sessions and session authentication more secure.',
	'securesessions-personalurl' => 'Open Sessions ($1)',
	'securesessions-ipsession' => 'Log out all other sessions.',
	'securesessions-iprestrict' => 'Restrict session to this IP address,',
	'securesessions-uarestrict' => 'Restrict session to this browser.',
	'sessions' => 'Sessions',
	'sessions-legend' => 'Session information',
	'sessions-text' => 'Below is all of the open sessions for your account and information about them. You can close all other sessions using the button below. An asterisk (*) denotes the current session.',
	'sessions-ip' => 'IP address:',
	'sessions-activity' => 'Last activity:',
	'sessions-clear' => 'Sign out all other sessions'
);
