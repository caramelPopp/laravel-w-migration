<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        echo "<br>";
        // var_dump
        echo "<h2 style='font-family: Arial;'>Parâmetros recebidos:</h2>";
        echo "<pre style='
                    font-size:14px; 
                    font-family: monospace; 
                    color:#444; 
                    white-space: pre-wrap; word-wrap: break-word; 
                    overflow-x: auto;
                    max-width: 90%; margin: 0 auto; '>";
        var_dump($_GET);
        echo "</pre>";

        echo "<br>";

        // Exibição mais "limpa"
        echo "<h2 style='font-family: Arial;'>Parâmetros recebidos formatados:</h2>";
        echo "<ul style='font-family: Arial; font-size: 16px; color: #333;'>";
        foreach ($_GET as $key => $value) {
            echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li><br>";
        }
        echo "</ul>";
    }
}