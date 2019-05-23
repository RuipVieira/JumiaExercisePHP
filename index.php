<?php

require __DIR__ . "/vendor/autoload.php";

//use Classes;
use BLL\PhoneService;
use Classes\Phone\PhoneEntity;

include 'app/BLL/PhoneService.php';

$phoneService = new PhoneService();

$phoneNumberArray = $phoneService->getAll();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jumia Test Project - Phone Numbers</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
        <h1>Phone Numbers</h1>
        <br/>
        <select id="countrySort" name="sortOptions" onchange="sort()">
            <option value="0" selected disabled>Select country</option>
            <option value="1">Cameroon</option>
            <option value="2">Ethiopia</option>
            <option value="3">Morocco</option>
            <option value="4">Mozambique</option>
            <option value="5">Uganda</option>
        </select>

        <select id="stateSort" name="sortOptions" onchange="sort()">
            <option value="0" selected disabled>Select Number State</option>
            <option value="OK">Valid</option>
            <option value="NOK">Invalid</option>
        </select>
        <div id="container">
        <table id="dataRow">
            <thead>
            <tr>
                <th>Country</th>
                <th>State</th>
                <th>Country Code</th>
                <th>Phone Number</th>
            </tr>
            </thead>
            <tbody id="dataContainer">
            <?php
            foreach ($phoneNumberArray as $phoneNumber) {
                /** @var $phoneNumber PhoneEntity */
                $state = $phoneNumber->isValid() ? 'OK' : 'NOK';

                echo '<tr class="dataRow">';
                echo '<td class="country"> ' . $phoneNumber->getCountry() . ' </td>';
                echo '<td class="state">' . $state . '</td>';
                echo '<td class="country-code"> ' . $phoneNumber->getCountryCode() . ' </td>';
                echo '<td class="phone"> ' . $phoneNumber->getPhoneNumber() . ' </td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        </div>
    </body>
    <script src="script.js"></script>
</html>