<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../CSS/MyCSS.css">
    </head>
    <body>
        
            <table align="center">
            <tr>
                <td>Fecha: </td>
                <td>{{$factura->fechaFact}}</td>
            </tr>
            <tr>
                <td>Cliente: </td>
                <td>{{$cliente->nombreCli}}</td>
            </tr>
            <tr>
                <td>Empresa: </td>
                <td>La chispa</td>
            </tr>
            <tr>
                <td>Servicio adquirido: </td>
                <td>{{$servicio->nombreSer}}</td>
            </tr>
            <tr>
                <td>Costo: </td>
                <td>{{$factura->totalFact}}</td>
            </tr>
        </table>
    
        
    </body>
</html>
