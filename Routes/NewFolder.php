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
 * The NewFolder Route, just create a new folder
 *
 * @author TheShark34
 * @package S-Update-Server\Routes
 * @version 3.0.0-BETA
 */
class NewFolder extends Route {

    public function onCalling($args) {
        // Checking the argument
        if(sizeof($args) == 0) {
            echo "Bad Arguments";
            return;
        }

        // Getting the total folder path
        $folder = "";
        foreach($args as $arg)
            $folder .= ($arg . "/");

        // Making the folder
        echo "Making folder : " . $folder;
        mkdir($folder);
    }

}

?>
