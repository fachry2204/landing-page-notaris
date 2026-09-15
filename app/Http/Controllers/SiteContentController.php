<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;

class SiteContentController extends Controller
{
    public function show()
    {
        return response()->json(SiteContent::firstWhere('key', 'homepage')?->value ?? []);
    }
}
