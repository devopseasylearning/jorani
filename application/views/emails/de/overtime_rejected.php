<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2023 Webforx Technology
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bTechnology/jorani
 * @since         0.1.0
 */
?>
<html lang="de">
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
        Dear {Firstname} {Lastname}, <br />
        <br />
        Die beantragten Überstunden wurden abgelehnt, hier die Details:
		<table border="0">
            <tr>
                <td>Datum &nbsp;</td><td>{Date}</td>
            </tr>
            <tr>
                <td>Dauer &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Begründung &nbsp;</td><td>{Cause}</td>
            </tr>
        </table>
        <hr>
        <h5>*** Dies ist eine automatisch generierte Nachricht; bitte antworten Sie nicht auf diese Nachricht ***</h5>
    </body>
</html>
