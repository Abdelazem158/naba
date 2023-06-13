<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AboutUsRequests\AboutUsStoreRequest;
use App\Http\Repository\Eloquent\AboutUsRepository;

class AboutUsController extends Controller
{

    public $about_us;

    public function __construct(AboutUsRepository $about_us)
    {
        $this->about_us = $about_us;
    }

    public function index()
    {
        try{
            $about_us = $this->about_us->GetAllAbouteUs();
            // dd($about_us->where('section', 3));
            return view('admin.about_us.index', compact('about_us'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function create()
    {
        try{
            return view('admin.about_us.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(AboutUsStoreRequest $request)
    {
        return $this->about_us->AboutUsStore($request);
    }

    public function edit($id)
    {
        try{
            if((int)$id > 0){
                $about_us = $this->about_us->AboutUsEdit($id);
                return view('admin.about_us.edit', compact('about_us'));
            }else{
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        return $this->about_us->AboutUsUpdate($request, $id);
    }

    public function activate(Request $request)
    {
        return $this->about_us->AboutUsActivate($request);
    }

    public function delete(Request $request)
    {
        return $this->about_us->AboutUsDelete($request);
    }

    public function getMore(Request $request)
    {
        return $this->about_us->AboutUsGetMore($request);
    }

    public function search(Request $request)
    {
        return $this->about_us->AboutUsSearch($request);
    }

}
