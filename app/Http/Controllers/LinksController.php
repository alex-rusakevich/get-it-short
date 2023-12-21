<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Links;

use Carbon\Carbon;

class LinksController extends Controller
{
    public function index(): View {
        return view("gen_link");
    }

    public function link_redirect(string $link): View {
        $real_id = base_convert($link, 36, 10);
        $lnk_obj = Links::findOrfail($real_id);

        return view("link_redirect", array("real_link" => ($lnk_obj -> link)));
    }

    public function create_link(Request $request) {
        $this->validate($request, [
            'user_link' => 'required|filled|url',
        ]);
        
        $new_link = Links::create(array(
            'link' => $request->get('user_link'),
            'is_premium' => false,
            'expires_at' => Carbon::now() -> addDays(7)
        ));

        $lnk_code = base_convert($new_link->id, 10, 36);
        $lnk_code = sprintf("%04s", $lnk_code); // Make link at least 4 chars wide

        return back()->with('success', $lnk_code);
    }
}
