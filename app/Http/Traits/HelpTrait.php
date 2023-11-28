<?php

namespace App\Http\Traits;
use Carbon\Carbon;
use DateTime;
use Storage;

trait HelpTrait {
   

function convert2english($string) {
    $newNumbers = range(0, 9);
    // 1. Persian HTML decimal
   // $persianDecimal = array('&#1776;', '&#1777;', '&#1778;', '&#1779;', '&#1780;', '&#1781;', '&#1782;', '&#1783;', '&#1784;', '&#1785;');
    // 2. Arabic HTML decimal
   // $arabicDecimal = array('&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;');
    // 3. Arabic Numeric
    $arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    // 4. Persian Numeric
    $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

   // $string =  str_replace($persianDecimal, $newNumbers, $string);
    //$string =  str_replace($arabicDecimal, $newNumbers, $string);
    $string =  str_replace($arabic, $newNumbers, $string);
    return str_replace($persian, $newNumbers, $string);
}


  public function DateAdditionAndSubtraction($date,$value,$type){

  $date = new Carbon($date);
  if($type == '-'){
    $date->subMinutes($value);
  }elseif($type == '+'){
   $date->addMinutes($value);
  }
 return  $date;
  }



  public function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}



  public function createImageFromBase64($file_data = "" , $dir = 'images'){
      
 
      //generating unique file name;
      $file_name = 'image_'.time().rand(111,999).'.png';
      //@list($type, $file_data) = explode(';', $file_data);
      //@list(, $file_data)      = explode(',', $file_data);
      if($file_data!=""){
        // storing image in storage/app/public Folder
      //  \Storage::disk('public')->put('orders/'.$order_id.'/'.$file_name,base64_decode($file_data));

if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

     // file_put_contents($dir.'/'.$file_name, base64_decode($file_data));
     
       Storage::disk('custom_folder')->put($dir.'/'.$file_name,base64_decode($file_data));

      }

      return '/'.$dir.'/'.$file_name;

}


      function getPercentOfNumber($number, $percent){
    return ($percent / 100) * $number;
} 



    public function get_percentage($total, $number)
    {
      if ( $total > 0 ) {
       return round($number / ($total / 100),2);
      } else {
        return 0;
      }
    }
    
    
         public function check_balance(){
             
             

     }
     
     
     
     public function sendSMS ($numbers,$msg){
  
 // $var = ltrim($numbers, '0');
 //  $numbers = ltrim($var, '0');
 //  $numbers = ltrim($var, '0');

   //Storage::disk('local')->append('sms.txt', $numbers);
  
 

$data =  [  "userName"  => 'm2telecom' , "userSender"  => 'M2telecom' ,  "apiKey" => "1680e0e9a5faf9af2d775411b37aa713" , 'numbers'=> $numbers  , 'msg' => $msg];
$url = 'https://www.msegat.com/gw/sendsms.php';
$CURLOPT_HTTPHEADER = [
'Content-Type:application/json',
];
//create a new cURL resource
$ch = curl_init($url);
$payload = json_encode($data);
//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//set the content type to application/json
//curl_setopt($ch, CURLOPT_HTTPHEADER, $CURLOPT_HTTPHEADER);
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute the POST request
$result = curl_exec($ch);
if (curl_error($ch)) {
    $error_msg = curl_error($ch);
    echo $error_msg;
}
//close cURL resource
curl_close($ch);
$json_decode_result = json_decode($result, TRUE);

return $json_decode_result;


 
      
      


}

    
    
    
}