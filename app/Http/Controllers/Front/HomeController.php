<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Webinar;
use App\Models\Training;
use App\Models\Article;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function home(Request $request){
        try{
            $data = NULL;
            $sliders = Slider::translatedIn(LaravelLocalization::setLocale())->active()->latest()->get();
            $setting = Setting::translatedIn(LaravelLocalization::setLocale())->latest()->first();
            $articles = Article::translatedIn(LaravelLocalization::setLocale())->active()->paginate(9);
            $services = Service::translatedIn(LaravelLocalization::setLocale())->active()->paginate(9);
            $webinars = Webinar::translatedIn(LaravelLocalization::setLocale())->active()->paginate(9);
            $trainings = Training::translatedIn(LaravelLocalization::setLocale())->active()->paginate(9);
            $products = Product::translatedIn(LaravelLocalization::setLocale())->active()->paginate(9);
            $about_section = AboutSection::translatedIn(LaravelLocalization::setLocale())->active()->get();
            $request->session()->forget('get_user_ip_before_product');
            return view('front.home', compact(['setting', 'products', 'about_section', 'sliders' , 'articles' , 'services', 'trainings', 'webinars']));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Concat Technical Support");
            return back();
        }
    }

    public function about() {
        $section_1 = NULL;
        $section_2 = NULL;
        $section_3 = NULL;
        $section_4 = NULL;
        $section_5 = NULL;
        $about_us_data = AboutUs::translatedIn(LaravelLocalization::setLocale())->latest()->get();
        if(count($about_us_data) > 0){
            $section_1 = $about_us_data->where('section', 1);
            $section_2 = $about_us_data->where('section', 2);
            $section_3 = $about_us_data->where('section', 3);
            $section_4 = $about_us_data->where('section', 4);
            $section_5 = $about_us_data->where('section', 5)->last();
        }
        return view('front.about', compact(['section_1', 'section_2', 'section_3', 'section_4', 'section_5']));
    }
}
