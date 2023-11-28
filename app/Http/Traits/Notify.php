<?php
namespace App\Http\Traits;
use App\Models\MS\Order;
use App\Models\MS\Phone;
use App\Models\MS\Invoice;
use App\Models\User;
use DB;
trait Notify
{
    public function order_log($user_id, $order_id, $comment = "")
    {
        
        $order = DB::table('orders')
            ->where('id', $order_id)
            ->first();
        DB::table('order_processes')->insert([
            'created_by' => $user_id,
            'order_id' => $order_id,
            'order_status_id' => $order->order_status_id,
            'comment' => $comment,
        ]);
    }
    public function invoice_notify_user($invoice_id, $process = 'new_invoice', $title = '', $message = '')
    {
        $invoice = Invoice::with('order')->find($invoice_id);
        $user = User::find($invoice->order->user_id);
        if($user->is_enable_notifications == 1){
        $regId = $user->firebase_id;
        $User_notification = DB::table('user_notifications')->insert([
            'user_id' => $user->id,
            'notification_title' => $title,
            'notification_text' => $message,
            'notification_type' => 'phone',
            'invoice_id' => $invoice_id,
        ]);
        
        $payload = [
            'process' => $process,
            'target_id' => $invoice_id,
            'details' => [],
        ];
        $json = $this->getPush($title, $message, $payload);
        $response = $this->send($regId, $json);
        }
    }
    public function phone_notify_user($phone_id, $process = 'new_phone', $title = '', $message = '')
    {
        $phone = Phone::with('user')->find($phone_id);
        $regId = $phone->user->firebase_id;
        if($phone->user->is_enable_notifications == 1){

        $User_notification = DB::table('user_notifications')->insert([
            'user_id' => $phone->user_id,
            'notification_title' => $title,
            'notification_text' => $message,
            'notification_type' => 'phone',
            'phone_id' => $phone_id,
        ]);
        $payload = [
            'process' => $process,
            'target_id' => $phone_id,
            'details' => [],
        ];
        $json = $this->getPush($title, $message, $payload);
        $response = $this->send($regId, $json);
        }
    }
    public function order_notify_user($order_id, $process = 'new_order', $title = '', $message = '')
    {
        $order = Order::with('user')->find($order_id);
        $regId = $order->user->firebase_id;
        if($order->user->is_enable_notifications == 1){

        $User_notification = DB::table('user_notifications')->insert([
            'user_id' => $order->user_id,
            'notification_title' => $title,
            'notification_text' => $message,
            'notification_type' => 'order',
            'order_id' => $order_id,
        ]);
        $payload = [
            'process' => $process,
            'target_id' => $order_id,
            'details' => [],
        ];
        $json = $this->getPush($title, $message, $payload);
        $response = $this->send($regId, $json);
        }
    }
    public function general_notify_user($user_id, $process = 'general_notify_user', $title = '', $message = '')
    {
        $user = User::find($user_id);
        $regId = $user->firebase_id;
        if($user->is_enable_notifications == 1){

        $User_notification = DB::table('user_notifications')->insert([
            'user_id' => $user->id,
            'notification_title' => $title,
            'notification_text' => $message,
            'notification_type' => 'order',
        ]);
        $payload = [
            'process' => $process,
            'target_id' => 0,
            'details' => [],
        ];
        $json = $this->getPush($title, $message, $payload);
        $response = $this->send($regId, $json);
        }
    }
    public function log_notify_user($user_id, $title = '', $message = '')
    {
        $User_notification = DB::table('user_notifications')->insert([
            'user_id' => $user_id,
            'notification_title' => $title,
            'notification_text' => $message,
            'notification_type' => 'general',
        ]);
    }
}
