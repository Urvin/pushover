<?php

/**
 * @author Yuriy Gorbachev <urvindt@gmail.com>
 * @version 0.1
 */

//----------------------------------------------------------------------------//

require_once 'pushoverexception.class.php';
require_once 'pushover.class.php';

//----------------------------------------------------------------------------//

// Required params
$lPushover = new Pushover('application_token');
$lPushover->userToken = 'user_token';
$lPushover->notificationMessage = 'notification_text';

// Addtitional params
$lPushover->userDevice = 'user_device';
$lPushover->notificationTitle = 'notification_title';
$lPushover->notificationPriority = 0; // 0 is default, 1 - high priority, -1 - quiet notification
$lPushover->notificationTimestamp = time();
$lPushover->notificationUrl = 'http://google.com';
$lPushover->notificationUrlTitle = 'Search Google!';

//----------------------------------------------------------------------------//

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

//----------------------------------------------------------------------------//

?>
