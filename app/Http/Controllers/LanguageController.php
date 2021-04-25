<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function index(string $locale)
    {
        if (in_array($locale, ['ar', 'en'])) {
            session()->put('locale', $locale);
        }

        return back();
    }
}
