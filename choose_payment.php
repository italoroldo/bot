<?php

error_reporting(0);

// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';



   $userDetails = $_REQUEST[ 'Memory' ];

   $user_phone = $_REQUEST['UserIdentifier'];

   $userDetails = json_decode( $userDetails );

   $userDetails = $userDetails->twilio->collected_data->schedule_appt->answers;

   $checkinDate = $userDetails->appt_checkin->answer;
   $checkoutDate = $userDetails->appt_checkout->answer;
   $room_type = $userDetails->room_type->answer;
   $paymenbt_type = $userDetails->payment_type->answer;
   $guests = $userDetails->appt_guests->answer;




/*
// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC13ab7003f4f84e41c0e7c5316e946734';
$token = 'dc79fa8f5b33b54b3ce9410d0966f77f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+5554981438220',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12075693139',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);


/*
   $response = array(
       'actions' => array (
           array(
               'say' => $message
           ),
           array(
              'show' => array(
                
                  'body' => "Apto 1",
                  'images' => array(
                      'label' => 'test',
                      'url' =>'https://demo.twilio.com/owl.png'
                  )
                )

                    


            )
       )
   );

   echo json_encode( $response );


   ,
    
      "collect": {
        "name": "choose_room",
        "questions": [
          {
            "question": "Qual dos quartos voceê se interessou?",
            "name": "appt_room_type",
            "type": "Twilio.NUMBER"
          }
        ],
        "on_complete": {
          "redirect": "https://527a1447.ngrok.io/taranis/app/bot/choose_room.php"
        }
      }



{
  "actions": [
    {
      
      "collect": {
        "name": "choose_room",
        "questions": [
          {
            "question": "<?= "Esses são nossos apartamentos com disponibilidade de ".$checkinDate." até ".$checkoutDate." para ".$guests. " pessoas:"; ?>, qual você gostaria de reservar? ",
            "name": "appt_room_type",
            "type": "Twilio.NUMBER"
          }
        ],
        "on_complete": {
          "redirect": "https://527a1447.ngrok.io/taranis/app/bot/choose_room.php"
        }
      }
    


    }
  ]
}

      
   */
?>


{
  "actions": [
    {      
      "collect": {
        "name": "save_email",
        "questions": [
          {
            "question": "Sua reserva foi efetuada mas está pendente! Faça o pagamento em até 30 minutos para concluir. Agora digite seu nome completo e e-mail e enviaremos uma cópia de sua pré-reserva por e-mail!",
            "name": "email",
            "type": "Twilio.ALPHANUMERIC"
          }
        ],
        "on_complete": {
          "redirect": "http://194c2831.ngrok.io/bot/save_email.php"
        }
      }
    


    }
      

  ]
}






