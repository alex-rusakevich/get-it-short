<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LinksController extends Controller
{
    public function index(): View {
        return view("gen_link");
    }

    public function link_redirect(string $link): View {
        $real_number = base_convert($link, 36, 10);

        return view("link_redirect", ["real_number" => $real_number]);
    }

    public function create_link(): View {
        return view("show_link");
    }

    public function show_link(string $link): View {
        $url = url("/".$link);
        $parsed = parse_url($url);
        $url = $parsed['host'] . $parsed['path'];

        return view("show_link", ["new_url" => $url]);
    }
}
