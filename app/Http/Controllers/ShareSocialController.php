<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareSocialController extends Controller
{
    public function shareSocial()
    {
        $socialShare = \Share::page(
            'https://www.nicesnippets.com/blog/laravel-custom-foreign-key-name-example',
            'Laravel Custom Foreign Key Name Example',
        )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();

        return view('share-social', compact('socialShare'));
    }
}
