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
   $guests = $userDetails->appt_guests->answer;

$message = "Veja os apartamentos com disponibilidade de ".$checkinDate." até ".$checkoutDate." para ".$guests. " pessoas:";



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
      "show": {
        "body": "LOFT, acomoda até 3 pessoas. R$190 por noite, total do Pacote R$2039.",
        "images": [ {
            "label": "Original Owl",
            "url": "https://taranisimages.s3-sa-east-1.amazonaws.com/1567419879875.jpg"
            
        }
        ]
      }
    },
    {
      "show": {
        "body": "SUITE, acomoda até 2 pessoas. R$200 por noite. Total no pacote R$2039",
        "images": [ {
            "label": "Original Owl",
            "url": "https://taranisimages.s3-sa-east-1.amazonaws.com/1567419259111.jpg"
            
        }
        ]
      }
    },
        {
      
      "collect": {
        "name": "choose_room",
        "questions": [
          {
            "question": "<?= "Esses são nossos apartamentos com disponibilidade de ".$checkinDate." até ".$checkoutDate." para ".$guests. " pessoas:"; ?>, qual você gostaria de reservar? ",
            "name": "appt_room_type",
            "type": "Twilio.ALPHANUMERIC"
          }
        ],
        "on_complete": {
          "redirect": "http://194c2831.ngrok.io/bot/choose_room.php"
        }
      }
    


    }
      

  ]
}






