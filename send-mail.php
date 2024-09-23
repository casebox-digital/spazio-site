<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    
    date_default_timezone_set('America/Sao_Paulo');

    require 'vendor/autoload.php';
    

    // $response = [
    //     'status'    => false,
    //     'message'   => 'Erro ao enviar seus dados, por favor, tente novamente'
    // ];

    if (isset($_POST) && sizeof($_POST)) {

        $body = '';

        foreach ($_POST as $key => $value) {

            $body .= '
                        <p>
                            <strong>
                                ' . $key . ': 
                            </strong>
                            ' . $value . '
                        </p>
                    ';
        }
        
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("contato@spaziolefemme.com.br", "Spazio Le Femme");
        $email->setSubject('Site Spazio Le Femme - Secreto -' . date('d/m/Y H:i:s'));
        $email->addTo("spaziolefemme@gmail.com", "Spazio Le Femme");
        $email->addTo("contato@marcelocaldeira.com", "Marcelo");
        $email->addContent(
            "text/html", $body
        );
        $sendgrid = new \SendGrid('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');

        try {
            $response = $sendgrid->send($email);
            if ($response->statusCode() == "202" || $response->statusCode() == "200") {
                header("location:/obrigada/");
            }
            else {
                print $response->statusCode() . "<br>";
                print_r($response->headers());
                print "<br>" . $response->body() . "<br>";
            }
        } catch (Exception $e) {
            echo "Caught exception" . $e->getMessage();
        }
    }
