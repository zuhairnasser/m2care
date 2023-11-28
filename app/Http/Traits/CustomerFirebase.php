<?php

namespace App\Http\Traits;

define('FIREBASE_API_KEY', 'AAAAX2pJpAQ:APA91bGpm1mUby8dK3Dy5ztj1-rHrNRJLvkFWP9trnqzNSwMdTjMDV-4PkZak8c4dnYkJ3vGKvEDlcXOHuOcoYgLBAehVrzAmQNB2mIl0Qw4PlQvMPDqpXm_NQelldRek-70tHBsNkek');

trait CustomerFirebase
{

    public function getPush($title, $message, $data = [], $image = 'http://rewash.store/images/favicon/favicon.ico', $is_background = false)
    {

        $res = array();

        $res['notification']['title'] = $title;
        $res['notification']['text'] = $message;
        $res['notification']['body'] = $message;
        $res['notification']['click_action'] = "FLUTTER_NOTIFICATION_CLICK";
        // $res['notification']['sound'] = "alert.mp3";

        $res['data']['title'] = $title;
        $res['data']['text'] = $message;
        $res['data']['body'] = $message;
        $res['data']['click_action'] = "FLUTTER_NOTIFICATION_CLICK";
        // $res['data']['sound'] = "alert.mp3";

        $res['data']['is_background'] = $is_background;
        $res['data']['message'] = $message;
        $res['data']['image'] = $image;

        //  $Notification = new Notification();
        //  $Notification->save();
        //  $data['notification_id'] = $Notification->id;
        $data['notification_id'] = rand(1111, 9999);

        $res['data']['payload'] = $data;
        $res['data']['timestamp'] = date('Y-m-d G:i:s');

        return $res;

    }

    public function send($to, $message)
    {

        $fields = array(

            'to' => $to,
            'notification' => $message['notification'],
            'data' => $message['data'],

        );

        return $this->sendPushNotification($fields);

    }

    // Sending message to a topic by topic name

    public function sendToTopic($to, $message)
    {

        $fields = array(

            'to' => '/topics/' . $to,

            'data' => $message,

        );

        return $this->sendPushNotification($fields);

    }

    // sending push message to multiple users by firebase registration ids

    public function sendMultiple($registration_ids, $message)
    {

        $fields = array(

            'to' => $registration_ids,

            'data' => $message,

        );

        return $this->sendPushNotification($fields);

    }

    // function makes curl request to firebase servers

    private function sendPushNotification($fields)
    {

        // Set POST variables

        $url = 'https://fcm.googleapis.com/fcm/send';

        $headers = array(

            'Authorization: key=' . FIREBASE_API_KEY,

            'Content-Type: application/json',

        );

        // Open connection

        $ch = curl_init();

        // Set the url, number of POST vars, POST data

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post

        $result = curl_exec($ch);

        if ($result === false) {

            die('Curl failed: ' . curl_error($ch));

        }

        // Close connection

        curl_close($ch);

        return $result;

    }

}
