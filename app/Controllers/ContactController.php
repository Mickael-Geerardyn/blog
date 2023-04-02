<?php

    namespace App\Controllers;

    use Exception;
    use Twig\Error\LoaderError;
    use Twig\Error\RuntimeError;
    use Twig\Error\SyntaxError;

    class ContactController extends CoreController
    {
       private const TO = "contact@mickael.geerardyn.com";
        private const SUBJECT = "Vous avez un nouveau message de: ";
        protected const REQUIRED_FIELD_KEYS = ["name", "email", "message"];

        /**
         * @return bool
         * @throws LoaderError
         * @throws RuntimeError
         * @throws SyntaxError
         */
        public function sendEmail(): bool
        {
            try {
                foreach(self::REQUIRED_FIELD_KEYS as $key){

                    if(array_key_exists($key, $_POST) && !empty($_POST[$key])){

                        $name = htmlspecialchars($_POST["name"]);
                        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                        $message = htmlspecialchars($_POST["message"]);

                    } else{

                        throw new Exception("Les champs Nom, Email et Message sont requis");
                    }
                }

                $phoneNumber = htmlspecialchars($_POST["phone"]);
                $headers = ["From" => $email];

                if(mail(self::TO, self::SUBJECT.$name, $message, $headers)){

                    $this->twigEnvironment->display("/landing-blog.html.twig", ["loggedInUser" => $_SESSION["userObject"],"latestPosts" => $this->latestPosts, "success" => "Votre message a bien été transmis"]);
                    return true;
                }else{

                    throw new Exception("Une erreur inconnue est survenue lors de l'envoi du courriel, veuillez réessayer");
                }

            }catch(Exception $exception){

                $this->twigEnvironment->display('/landing-blog.html.twig', ["error" => $exception->getMessage() ]);

                return false;
            }
        }
    }