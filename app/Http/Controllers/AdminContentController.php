<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminContentController extends Controller
{
    public function show() { return response()->json(SiteContent::firstWhere('key', 'homepage')?->value ?? []); }

    public function update(Request $request)
    {
        $content = $request->validate(['content' => ['required', 'array']])['content'];
        SiteContent::updateOrCreate(['key' => 'homepage'], ['value' => $content]);
        return response()->json(['message' => 'Perubahan berhasil dipublikasikan.', 'content' => $content]);
    }

    public function upload(Request $request)
    {
        $request->validate(['file' => ['required', 'image', 'max:5120']]);
        $path = $request->file('file')->store('site', 'public');
        return response()->json(['url' => Storage::url($path)]);
    }
}
