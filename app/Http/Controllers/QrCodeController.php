<?php
// app/Http/Controllers/QrCodeController.php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class QrCodeController extends Controller
{

public function generate()
{    $name = 'Ayman Rasmy';
    $email = 'ayman.rasmy@staronegypt.com.eg';
    $phone = '01070117177';
    $address = '95 Abu Bakr Al Seddek ST., Safir Square, Heliopolis.';
    $location = '95 Abu Bakr Al Seddek ST., Safir Square, Heliopolis';
    $link = 'https://staronegypt.com.eg/';
    $bio = "Accomplished Sales Director leading strategy and growth initiatives within an innovative interior design firm focused on the 'Supply and Apply' concept. Proven track record in orchestrating high-impact sales campaigns to cater to diverse client needs across an array of applications, types, and scopes. Adept at forging strategic partnerships, driving revenue, and guiding a dynamic sales team to exceed targets while ensuring unparalleled customer satisfaction.";
    $imagePath = public_path('images/1.png');
    $vCardData = [
        'BEGIN' => 'VCARD',
        'VERSION' => '3.0',
        'FN' => $name,
        'TEL' => $phone,
        'EMAIL' => $email,
        'ADR' => $address,
        'TITLE' => 'Sales Director',
        'URL' => $link,
        'URL;TYPE=HOME' => 'https://staronegypt.com.eg/sales/',
        'URL;TYPE=WORK' => 'https://staronegypt.com.eg/Portfolio',
        'NOTE' => $bio,
        'PHOTO' =>$imagePath,
        'ORG' => $name,
        'END' => 'VCARD',
    ];
    $qrCode = QrCode::size(1000)
    ->format('png')
    ->merge(public_path('logo.png'), 0.6, true)
    ->style('square')
    ->generate(implode("\n", array_map(function ($value, $key) {
        return "$key:$value";
    }, $vCardData, array_keys($vCardData))));

    return view('welcome', compact('qrCode'));
}
public function generateLink()
{
    $qrCode = QrCode::size(1000)
    ->format('png')
    ->merge(public_path('logo.png'), 0.6, true)
    ->style('square')
    ->generate('https://staronegypt.com.eg/');

    return view('welcome', compact('qrCode'));
}
}

