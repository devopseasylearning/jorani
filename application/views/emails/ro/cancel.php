<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2023 Webforx Technology
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bTechnology/jorani
 * @since         0.1.0
 */
?>
<html lang="ro">
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
        <p>{Firstname} {Lastname} dorește să anuleze o cerere de ore suplimentare. 
        Vezi <a href="{BaseUrl}leaves/{LeaveId}">detaliile</a> mai jos:</p>
        <table border="0">
            <tr>
                <td>De la &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>Până la &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Tip &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Durata &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Balanță &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Motiv &nbsp;</td><td>{Reason}</td>
            </tr>
           <tr>
                <td>Ultimul comentariu &nbsp;</td><td>{Comments}</td>
            </tr>
            <tr>
                <td><a href="{BaseUrl}requests/cancellation/accept/{LeaveId}">Confirmă anularea</a> &nbsp;</td>
                <td><a href="{BaseUrl}requests?cancel_rejected={LeaveId}">Refuză anularea</a></td>
            </tr>
        </table>
        <br />
        <hr>
        <h5>*** Acesta este un mesaj generat automat, vă rog să nu răspundeți la acest mesaj ***</h5>
    </body>
</html>
