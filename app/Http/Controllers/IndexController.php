<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\AboutProduct;
use App\Models\Benefits;
use App\Models\Clients;
use App\Models\Costs;
use App\Models\Elements;
use App\Models\Faq;
use App\Models\GuideInfo;
use App\Models\Guides;
use App\Models\MainInfo;
use App\Models\OurProducts;
use App\Models\OurProductsInfo;
use App\Models\Problems;
use App\Models\Reviews;
use App\Models\Timeline;
use App\Models\Title;
use App\Models\Seo;
use App\Models\ResourceVideo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $title = Cache::remember('title', 43200, function() {
            return Title::all();
        });

        $hero = Cache::remember('main_info', 43200, function() {
            $hero = MainInfo::first();
            if ($hero) {
                $hero->video = json_decode($hero->video, true);
            }
            return $hero;
        });

        $elements = Cache::remember('elements', 43200, function() {
            $elements = Elements::first();
            if ($elements && $elements->presentation) {
                $elements->presentation = json_decode($elements->presentation, true);
            }
            return $elements;
        });

        $aboutProduct = Cache::remember('about_product', 43200, function() {
            return AboutProduct::all();
        });

        $costs = Cache::remember('costs', 43200, function() {
            return Costs::all();
        });

        $benefits = Cache::remember('benefits', 43200, function() {
            return Benefits::all();
        });

        $problems = Cache::remember('problems', 43200, function() {
            return Problems::all();
        });

        $clients = Cache::remember('clients', 43200, function() {
            return Clients::all();
        });

        $about = Cache::remember('about_company', 43200, function() {
            return AboutCompany::first();
        });

        $reviews = Cache::remember('reviews', 43200, function() {
            return Reviews::all();
        });

        $seo = Cache::remember('seo', 43200, function() {
            return Seo::query()->where('slug', 'main')->first();
        });
        return view('home', [
            'hero' => $hero,
            'aboutProduct' => $aboutProduct,
            'costs' => $costs,
            'benefits' => $benefits,
            'problems' => $problems,
            'clients' => $clients,
            'about' => $about,
            'reviews' => $reviews,
            'elements' => $elements,
            'title' => $title,
            'seo' => $seo
            
        ]);
    }

    public function about()
    {
        $about = AboutCompany::first();
        $colors = ['#b695f1', '#f1a9b6', '#95f1b6', '#f1d795', '#95d1f1'];

        $timeline = Timeline::all();
        $seo = Seo::query()->where('slug', 'about')->first();
        return view('about', compact('timeline', 'colors', 'about','seo'));
    }

    public function resources()
    {
        $videos = ResourceVideo::all();
        $faq = Faq::all();
        $guideInfo = GuideInfo::first();
        $guides = Guides::all();
        $seo = Seo::query()->where('slug', 'resources')->first();
        return view('resources', compact('faq', 'guideInfo', 'guides','seo', 'videos'));
    }

    public function products()
    {
        $seo = Seo::query()->where('slug', 'products')->first();
        $productInfo = OurProductsInfo::first();
        $ourProducts = OurProducts::all();
        return view('products', compact('productInfo', 'ourProducts', 'seo'));
    }

    public function banner($id)
    {
        $seo = Seo::query()->where('slug', 'products')->first();
        $aboutProduct = AboutProduct::with('contents')->findOrFail($id);
        return view('banner', compact('aboutProduct', 'seo'));
    }
}
