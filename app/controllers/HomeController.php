<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome() {
        return View::make('hello');
    }

    public function showContacto() {
        return View::make('mail');
    }

    public function contact() {
        return View::make('contact');
    }

    public function news() {
        return View::make('news');
    }

    public function gracias() {
        return View::make('gracias');
    }

    public function add() {
        $post = (!empty($_POST)) ? true : false;

        if ($post) {

            $name = stripslashes($_POST['text_2']);
            $email = $_POST['text_8'];

            $subject = 'Requerimiento desde web';


            $clinica = stripslashes($_POST['text_1']);
            $direccion = stripslashes($_POST['text_3']);
            $cpostal = stripslashes($_POST['text_7']);
            $poblacion = stripslashes($_POST['text_4']);
            $provincia = stripslashes($_POST['text_5']);
            $telefono = stripslashes($_POST['text_6']);

            $p_1 = stripslashes($_POST['p_1']);
            $p_2 = stripslashes($_POST['p_2']);
            $p_3 = stripslashes($_POST['p_3']);
            $p_4 = stripslashes($_POST['p_4']);
            $p_5 = stripslashes($_POST['p_5']);
            $p_6 = stripslashes($_POST['p_6']);
            $p_7 = stripslashes($_POST['p_7']);

            $p_8 = stripslashes($_POST['p_8']);
            $p_9 = stripslashes($_POST['p_9']);
            $p_10 = stripslashes($_POST['p_10']);
            $p_11 = stripslashes($_POST['p_11']);
            $p_12 = stripslashes($_POST['p_12']);
            $p_13 = stripslashes($_POST['p_13']);
            $p_14 = stripslashes($_POST['p_14']);



            $data = array(
                'email' => $email,
                'name' => $name,
                'subject' => $subject,
                'clinica' => $clinica,
                'direccion' => $direccion,
                'cpostal' => $cpostal,
                'poblacion' => $poblacion,
                'provincia' => $provincia,
                'telefono' => $telefono,
                'p_1' => $p_1,
                'p_2' => $p_2,
                'p_3' => $p_3,
                'p_4' => $p_4,
                'p_5' => $p_5,
                'p_6' => $p_6,
                'p_7' => $p_7,
                'p_8' => $p_8,
                'p_9' => $p_9,
                'p_10' => $p_10,
                'p_11' => $p_11,
                'p_12' => $p_12,
                'p_13' => $p_13,
                'p_14' => $p_14
            );


            $error = '';



            /*
              if (!$error) {
              Yii::import("ext.mailer.*");
              $mail = new PHPMailer();
              $mail->SetFrom("luis@manifiesto.biz", "WEB Sunstart");
              $mail->Subject = "Solicitud Productos Sunstart";
              $text = $this->renderPartial('contactmail', $data, true);
              $mail->MsgHTML($text);
              $mail->AddAddress("luis@manifiesto.biz", "Web Sunstart");
              $mail->AddCC($email, $name);
              $mail->Send();
              echo 'OK';

              } else {
              echo $error;
              } */

            $contactName = Input::get('text_2');
            $contactEmail = Input::get('text_8');
            //$contactMessage = Input::get('message');

            //$data = array('name' => $contactName, 'email' => $contactEmail, 'message' => $contactMessage);
            
            Mail::send('message', $data, function($message) use ($contactEmail, $contactName) {
                //$message->from('test.manif@gmail.com', '$contactName');
                $message->to('guidor@es.sunstar.com', 'SUNSTART WEB')->subject('Requerimiento desde web');
            });




 
          /* Mail::send('message', $data, function($message) {
                $message->from('info@sunstarguidor.com', 'Info SUNSTAR');
                $message->to($data['name'], $data['name'])->subject('Requerimiento desde web');
            });*/







            return Redirect::to('gracias');
        }
    }

}
