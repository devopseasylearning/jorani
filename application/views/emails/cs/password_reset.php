<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2023 Webforx Technology
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bTechnology/jorani
 * @since      0.1.0
 */
?>
<html lang="cs">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        <p>Vážený {Firstname} {Lastname},</p>
        <p>Vaše Jorani heslo bylo resetováno. Pokud jste změnu neprovedli vy, prosím kontaktujte svého manažera.</p>
        <hr>
        <h5>*** Toto je náhodně vygenerována zpráva, prosím neodpovídejte na tuto zprávu ***</h5>
    </body>
</html>