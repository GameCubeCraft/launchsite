<?php

/*
 * Copyright 2015 TheShark34
 *
 * This file is part of S-Update-Server.
 *
 * S-Update-Server is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * S-Update-Server is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with S-Update-Server.  If not, see <http://www.gnu.org/licenses/>.
 */

use \Paladin\Route;

/**
 * The Login Route, displays the Login page.
 *
 * @author TheShark34
 * @package S-Update-Server\Routes
 * @version 3.0.0-BETA
 */
class Login extends Route {

    public function onCalling($args) {
        // If the password file doesn't exist
        if(!file_exists(\SUpdateServer\SessionManager::DEFAULT_PASSWORD_LOCATION))
            // Redirecting the user to the install page
            header("Location: Install");

        // If the request method is POST
        if($_SERVER['REQUEST_METHOD'] == "POST")
            // Checking the form response
            $this->checkFormResponse();
        // Else
        else
            // Displaying the login page
            \Paladin\Paladin::getPageLoader()->displayPage("\\SUpdateServer\\Pages", "Login", array(
                "badPassword" => false,
                "serverActivated" => \SUpdateServer\ServerState::isEnabled()
            ));
    }

    private function checkFormResponse() {
        // If the password isn't given
        if(!isset($_POST["password"]))
            // Displaying the login page
            \Paladin\Paladin::getPageLoader()->displayPage("\\SUpdateServer\\Pages", "Login", array(
                "badPassword" => false,
                "serverActivated" => \SUpdateServer\ServerState::isEnabled()
            ));
        // Else, checking the password
        else if(\SUpdateServer\SessionManager::getSessionManager()->checkPassword($_POST["password"])) {
            // Seting the user logged
            $_SESSION["logged"] = true;

            // Going to the index page
            header("Location: " . \Paladin\Paladin::getRootFolder());
        }
        // Else if the password is bad
        else
            // Displaying the login page, with a bad password message
            \Paladin\Paladin::getPageLoader()->displayPage("\\SUpdateServer\\Pages", "Login", array(
                "badPassword" => true,
                "serverActivated" => \SUpdateServer\ServerState::isEnabled()
            ));
    }

}

?>
