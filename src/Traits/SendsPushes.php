<?php

namespace Tejuino\Admin\Traits;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use App\Models\Logs\Notification;
use Carbon\Carbon;
use Console;
use FCM;

trait SendsPushes
{

    /**
     * Send push notification
     *
     * @param  Array[String]    $devices    Devices
     * @param  String           $title      Notification title
     * @param  String           $body       Notification body
     * @param  Array            $data       Extra data
     * @return Boolean                      Success or failure
     */
    public function sendPush($devices, $title, $body, $data = [])
    {
        try
        {
            // Build FCM request
            $optionBuilder = new OptionsBuilder();
            $optionBuilder->setTimeToLive(60 * 20);
            $notificationBuilder = new PayloadNotificationBuilder($title);
            $notificationBuilder->setBody($body)->setSound('default');
            $dataBuilder = new PayloadDataBuilder();
            $dataBuilder->addData($data);

            // Send request
            $option = $optionBuilder->build();
            $notification = $notificationBuilder->build();
            $data = $dataBuilder->build();
            $downstreamResponse = FCM::sendTo($devices, $option, $notification, $data);

            // Log results
            $notificationLog = new Notification;
            $notificationLog->title = $title;
            $notificationLog->body = $body;
            $notificationLog->data = json_encode($data);
            $notificationLog->devices = sizeof($devices);
            $notificationLog->devices_android = sizeof($devices);
            $notificationLog->devices_ios = 0;
            $notificationLog->succeeded = $downstreamResponse->numberSuccess();
            $notificationLog->failures = $downstreamResponse->numberFailure();
            $notificationLog->modifications = $downstreamResponse->numberModification();
            $notificationLog->save();

            Console::log('    [g]' . $notificationLog->succeeded . ' Succeeded');
            Console::log('    [r]' . $notificationLog->failures . ' Failures');
            Console::log('    [y]' . $notificationLog->modifications . ' Modifications');

            return true;
        }
        catch(\Exception $ex)
        {
            Console::log('[r]' . $ex);
        }

        return false;
    }

}
