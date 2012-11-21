<?php

/**
 * @author Yuriy Gorbachev <urvindt@gmail.com>
 * @version 0.1
 */

//----------------------------------------------------------------------------//

require_once 'pushoverexception.class.php';
require_once 'pushover.class.php';

//----------------------------------------------------------------------------//

$lPushover = new Pushover('Write application token here');
$lPushover->userToken = 'specify user token';
$lPushover->notificationMessage = 'Notification message';

$lPushover->userDevice = 'specify_user_device';
$lPushover->notificationTitle = 'specify notification_title';
$lPushover->notificationPriority = 0;
$lPushover->notificationTimestamp = time();
$lPushover->notificationUrl = 'http://google.com';
$lPushover->notificationUrlTitle = 'Search Google!';

try
{
	$lPushover->send();
	echo '<font color="green">Message sent</font>', PHP_EOL;
}
catch (PushoverException $aException)
{
	echo '<font color="red">Error sending messages</font><br>', PHP_EOL;
	echo '<ul>', PHP_EOL;
	foreach($aException->getMessages() as $lMessage)
		echo '<li>', $lMessage, '</li>', PHP_EOL;
	echo '</ul>', PHP_EOL;
}

