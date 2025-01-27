<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Product;
use Illuminate\Validation\Rule;
use DB;
use Illuminate\Support\Facades\Session;

class ProductRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function ProductStore($request)
    {
        try{
            // validation 
            // create new  
            $product = new $this->model();
            // product translation ar
            $product->translateOrNew('ar')->title = $request->title_ar;
            $product->translateOrNew('ar')->second_title = $request->second_title_ar;
            $product->translateOrNew('ar')->description = $request->description_ar;
            $product->translateOrNew('ar')->second_description = $request->second_description_ar;
            $product->translateOrNew('ar')->video_title = $request->video_title_ar;
            $product->translateOrNew('ar')->video_description = $request->video_description_ar;
            // product translation en
            if(!$request->title_en == NULL){
                $product->translateOrNew('en')->title = $request->title_en;
            }
            if(!$request->second_title_en == NULL){
                $product->translateOrNew('en')->second_title = $request->second_title_en;
            }
            if(!$request->description_en == NULL){
                $product->translateOrNew('en')->description = $request->description_en;
            }
            if(!$request->second_description_en == NULL){
                $product->translateOrNew('en')->second_description = $request->second_description_en;
            }
            if(!$request->video_title_en == NULL){
                $product->translateOrNew('en')->video_title = $request->video_title_en;
            }
            if(!$request->video_description_en == NULL){
                $product->translateOrNew('en')->video_description = $request->video_description_en;
            }
            //save image
            if (!$request->hasFile('image') == null) {
                $file = uploadIamge( $request->file('image'), 'products'); // function on helper file to upload file
                $product->image = $file;
            }
            $product->color_title = $request->color_title;
            $product->video_link = $request->video_link;
            $product->backgrounnd_link = $request->backgrounnd_link;
            // $product->category_id = $request->category_id;
            $product->added_by = auth()->guard('admin')->user()->id;
            $product->is_activate = 1;
            $product->save();
            flash()->success("Added Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductEdit($id)
    {
        return $this->model->findOrFail($id);
    }

    public function ProductUpdate($request, $id)
    {
        try{
            // dd($request->all());
            // validation 
            $validator = validator()->make($request->all(),[
                'title_ar' => ['required'],
                'second_title_ar' => ['required'],
                'description_ar' => ['required'],
                'second_description_ar' => ['required'],
                'video_title_ar' => ['required'],
                'video_description_ar' => ['required'],
                'video_link' => ['required'],
                'color_title' => ['required'],
                // 'category_id' => ['required', 'exists:categories,id'],
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            // get city by id
            $product = $this->model->findOrFail($id);
            // product translation ar
            $product->translateOrNew('ar')->title = $request->title_ar;
            $product->translateOrNew('ar')->second_title = $request->second_title_ar;
            $product->translateOrNew('ar')->description = $request->description_ar;
            $product->translateOrNew('ar')->second_description = $request->second_description_ar;
            $product->translateOrNew('ar')->video_title = $request->video_title_ar;
            $product->translateOrNew('ar')->video_description = $request->video_description_ar;
            // product translation en
            if(!$request->title_en == NULL){
                $product->translateOrNew('en')->title = $request->title_en;
            }
            if(!$request->second_title_en == NULL){
                $product->translateOrNew('en')->second_title = $request->second_title_en;
            }
            if(!$request->description_en == NULL){
                $product->translateOrNew('en')->description = $request->description_en;
            }
            if(!$request->second_description_en == NULL){
                $product->translateOrNew('en')->second_description = $request->second_description_en;
            }
            if(!$request->video_title_en == NULL){
                $product->translateOrNew('en')->video_title = $request->video_title_en;
            }
            if(!$request->video_description_en == NULL){
                $product->translateOrNew('en')->video_description = $request->video_description_en;
            }
            //save image
            if (!$request->hasFile('image') == null) {
                $file = uploadIamge( $request->file('image'), 'products'); // function on helper file to upload file
                $product->image = $file;
            }
            $product->video_link = $request->video_link;
            $product->backgrounnd_link = $request->backgrounnd_link;
            $product->color_title = $request->color_title;
            // $product->category_id = $request->category_id;
            $product->edited_by = auth()->guard('admin')->user()->id;
            $product->save();
            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductActivate($request)
    {
        try{
            $product = $this->model->findOrFail($request->record_id);
            if($product->is_activate == 0){
                $product->update(['is_activate' => 1]);
            }else{
                $product->update(['is_activate' => 0]);
            }
            if(Session::has('nav_products')) {
                Session::forget("nav_products");
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductDelete($request)
    {
        try{
            $product =  $this->model->findOrFail($request->record_id);
            $product->deleteTranslations();
            $product->delete();
            if(Session::has('nav_products')) {
                Session::forget("nav_products");
            }
            flash()->success("Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductGetMore($request)
    {
        try{
            if( isset($request->id) && $request->id > 0){
                $products = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $products = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $all_data = NULL;
            if($products && count($products) > 0){
                $all_data = $products;
            }
            return $all_data;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

    public function ProductSearch($request)
    {
        try{
            $query = $request->get('query');
            $products = NULL;
            if($query != ''){
                $products = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhereTranslationLike('title', '%'. $query .'%')
                                                ->get();
            }else{
                $products = $this->model->latest()->limit(PAGINATION_COUNT)->get();
            }
            $all_data = NULL;
            if($products && count($products) > 0){
                if( $query != '' ){
                    $products[0]->searchButton = 0;
                }else{
                    $products[0]->searchButton = 1;
                }
                return $products;
            }
            return $all_data;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

}