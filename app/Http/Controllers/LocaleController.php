<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
     public function setLocale(Request $request)
    {
        try {
            $locale = $request->input('locale');
            if (in_array($locale, ['ar', 'en'])) {
                Session::put('locale', $locale);
                return response()->json(['success' => true, 'locale' => $locale]);
            }
            return response()->json(['success' => false, 'message' => 'Invalid locale'], 400);
        } catch (\Exception $e) {
            \Log::error('LocaleController error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
}