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
 * @link https://www.mediawiki.org/wiki/Extension:SecureSessions
 * @ingroup Extensions
 * @author Tyler Romeo <tylerromeo@gmail.com>
 * @copyright (c) 2012 by Tyler Romeo
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'SecureSessions',
	'version' => 0.5,
	'author' => 'Tyler Romeo',
	'url' => 'https://www.mediawiki.org/wiki/Extension:SecureSessions',
	'descriptionmsg' => 'securesessions-desc'
);

/**
 * Set options for what properties to check on each user request. The value
 * should be an array with zero or more of the following keys:
 *  * 'ip' - Restrict session to an IP address
 *  * 'useragent' - Restrict session to the User Agent header
 *  * 'onesession' - When a user logs in, log out all other sessions
 * For each of these keys, it should be assigned to one of the following values:
 *  * true - Force this restriction on all users
 *  * null - Allow the user to decide on login
 *  * false - Disable this restriction
 * If this is set to the boolean value true, it is assumed to be an array
 * containing all of the above values. If it is set to the boolean value false,
 * it is assumed to be an empty array.
 */
$wgEnhancedSessionAuth = true;

/**
 * Whether to cycle the session ID on every request. There may be some performance
 * implications if your wiki is not using memcached sessions.
 */
$wgSessionCycleId = false;

// Setup for the extension.
$wgAutoloadClasses['SecureSessions'] = __DIR__ . '/SecureSessions.hooks.php';
$wgAutoloadClasses['SpecialSessions'] = __DIR__ . '/SpecialSessions.php';
$wgExtensionFunctions[] = array( 'SecureSessions', 'setup' );
$wgSpecialPages['Sessions'] = 'SpecialSessions';
$wgExtensionMessagesFiles['SecureSessions'] = __DIR__ . '/SecureSessions.i18n.php';
