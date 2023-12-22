<?php

class Controller
{

    protected $errors = array();
    protected $errorList = '';

    // Autres méthodes de votre classe...

    protected function encryptPassword($password)
    {
        // Intégrez votre logique d'encryptage de mot de passe ici
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        return $passwordHash;
    }

    protected function verifyPassword($submittedPassword, $password)
    {
        // Intégrez votre logique de vérification de mot de passe ici
        $validPassword = password_verify($submittedPassword, $password);
        return $validPassword;
    }

    protected function isApprovedUsername($username)
    {
        // Intégrez votre logique pour approuver ou non un nom d'utilisateur ici
        $approved = in_array($username, DISALLOWED_USERNAMES) ? false : true;
        return $approved;
    }

    protected function validateUsername($username)
    {
        // Intégrez votre logique de validation de nom d'utilisateur ici

        if (!empty($username)) {
            if (strlen($username) < 3) {
                $this->errors[] = 'Le nom d\'utilisateur est trop court.';
            }
            // Ajoutez d'autres validations au besoin
        } else {
            $this->errors[] = 'Le nom d\'utilisateur est manquant.';
        }
    }

    protected function validatePassword($password)
    {
        // Intégrez votre logique de validation de mot de passe ici

        if (!empty($password)) {
            if (strlen($password) < 8) {
                $this->errors[] = 'Le mot de passe est trop court.';
            }
            // Ajoutez d'autres validations au besoin
        } else {
            $this->errors[] = 'Le mot de passe est manquant.';
        }
    }

    protected function validateEmail($email)
    {
        // Intégrez votre logique de validation d'adresse e-mail ici

        if (!empty($email)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = 'L\'adresse e-mail n\'est pas valide.';
            }
        } else {
            $this->errors[] = 'L\'adresse e-mail est manquante.';
        }
    }

    protected function getErrors()
    {
        // Intégrez votre logique pour récupérer et afficher les erreurs ici

        foreach ($this->errors as $error) {
            $this->errorList .= $error . "\n";
        }
        return $this->errorList;
    }
}