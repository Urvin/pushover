## pushover class
> pushover class is a PHP wrapper class for using the Pushover (https://pushover.net) REST API. Have a look at their API docs (https://pushover.net/api) for more information about all the parameters.

## Properties

* applicationToken
> Your app API key.

* userToken
> The user's API key.

* userDevice
> Leave this empty if you want to send to all user's devices.

* notificationTitle
> Set title of push notification.

* notificationMessage
> Set message of push notification.

* notificationUrl
> Add an url to your notification.

* notificationUrlTitle
> Set a title if you want to show a text instead of the actual url.

* notificationPriority
> Default = 0, if 1 the user's quiet hours will be ignored + messages displayed in red.

* notificationTimestamp
> Messages are stored on the Pushover servers with a timestamp of when they were initially received through the API. This timestamp is sent to and shown on client devices, and messages are listed in order of these timestamps. In most cases, this default timestamp is acceptable. This is not for scheduling!

## Methods

* send
> Send the message to the API