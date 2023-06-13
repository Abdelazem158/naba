<?php

namespace App\Http\Repository\Eloquent;

use App\Models\AboutUs;
use Illuminate\Validation\Rule;
use DB;

class AboutUsRepository extends AbstractRepository
{
    protected $model;

    public function __construct(AboutUs $model)
    {
        $this->model = $model;
    }

    public function GetAllAbouteUs()
    {
        return $this->model->latest()->active()->paginate(PAGINATION_COUNT);
    }

    public function AboutUsStore($request)
    {
        try{
            // validation
            // create new AboutUs
            $about = new $this->model();

            // AboutUs translation ar
            $about->translateOrNew('ar')->title = $request->title_ar;
            $about->translateOrNew('en')->title = $request->title_en;
            // save image
            if (!$request->hasFile('image') == null) {
                $file = uploadIamge( $request->file('image'), 'about_us'); // function on helper file to upload file
                $about->image = $file;
            }
            $about->section = $request->section;
            $about->is_activate = 1;
            $about->added_by = auth()->guard('admin')->user()->id;
            $about->save();
            flash()->success("Added Has Been Done");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AboutUsEdit($id)
    {
        return $this->model->findOrFail($id);
    }

    public function AboutUsUpdate($request, $id)
    {
        try{
            // validation
            $validator = validator()->make($request->all(),[
                'title_ar' => ['required'],
                'title_en' => ['required'],
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            // get about_us by id
            $about = $this->model->findOrFail($id);
            // about_us translation ar
            $about->translateOrNew('ar')->title = $request->title_ar;
            $about->translateOrNew('en')->title = $request->title_en;
            //save image
            if (!$request->hasFile('image') == null) {
                $file = uploadIamge( $request->file('image'), 'about_us'); // function on helper file to upload file
                $about->image = $file;
            }
            $about->edited_by = auth()->guard('admin')->user()->id;
            $about->save();
            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AboutUsActivate($request)
    {
        try{
            $about = $this->model->findOrFail($request->record_id);
            if($about->is_activate == 0){
                $about->update(['is_activate' => 1]);
            }else{
                $about->update(['is_activate' => 0]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AboutUsDelete($request)
    {
        try{
            $about =  $this->model->findOrFail($request->record_id);
            $about->deleteTranslations();
            $about->delete();
            flash()->success("Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AboutUsGetMore($request)
    {
        try{
            if( isset($request->id) && $request->id > 0){
                $abouts = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $abouts = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $all_data = NULL;
            if($abouts && count($abouts) > 0){
                $all_data = $abouts;
            }
            return $all_data;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

    public function AboutUsSearch($request)
    {
        try{
            $query = $request->get('query');
            $abouts = NULL;
            if($query != ''){
                $abouts = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhereTranslationLike('title', '%'. $query .'%')
                                                ->orWhereTranslationLike('description', '%'. $query .'%')
                                                ->get();
            }else{
                $abouts = $this->model->latest()->limit(PAGINATION_COUNT)->get();
            }
            $all_data = NULL;
            if($abouts && count($abouts) > 0){
                if( $query != '' ){
                    $abouts[0]->searchButton = 0;
                }else{
                    $abouts[0]->searchButton = 1;
                }
                return $abouts;
            }
            return $all_data;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

}
