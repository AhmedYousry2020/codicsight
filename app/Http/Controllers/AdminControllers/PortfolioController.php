<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Session::get('lang','en');
        app()->setLocale($lang);

        $portfolios = Portfolio::all();
        return view('dashboard.pages.portfolios.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name_en"=>"required|string",
            "description_en"=>'required',
            "name_ar"=>"required|string",
            "description_ar"=>'required',
            "category_ar"=>"required|string",
            "category_en"=>'required|string',
            "main_image"=>'required',
            "image_1"=>'required',
            "image_2"=>'required',
            "image_3"=>'required',
            "image_4"=>'required',
            "thumbnail_1"=>'required',
            "thumbnail_2"=>'required',
            "client"=>"required|string",
            "Author"=>"required|string",
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.portfolios.create'), 'errors'=> $validator->errors()->all(),'data'=>$request->all()]);

        }
       $requestAll = $validator->validated();
        if($request->hasFile('main_image'))
        {
            $requestAll['main_image'] = $this->storeImage($requestAll['main_image'], '/uploads');
        }
        if($request->hasFile('image_1'))
        {
            $requestAll['image_1'] = $this->storeImage($requestAll['image_1'], '/uploads');
        }
        if($request->hasFile('image_2'))
        {
            $requestAll['image_2'] = $this->storeImage($requestAll['image_2'], '/uploads');
        }
        if($request->hasFile('image_3'))
        {
            $requestAll['image_3'] = $this->storeImage($requestAll['image_3'], '/uploads');
        }
        if($request->hasFile('image_4'))
        {
            $requestAll['image_4'] = $this->storeImage($requestAll['image_4'], '/uploads');
        }

        if($request->hasFile('thumbnail_1'))
        {
            $requestAll['thumbnail_1'] = $this->storeImage($requestAll['thumbnail_1'], '/uploads');
        }
        if($request->hasFile('thumbnail_2'))
        {
            $requestAll['thumbnail_2'] = $this->storeImage($requestAll['thumbnail_2'], '/uploads');
        }
       $portfolio = Portfolio::create($requestAll);

       if($portfolio){
        return response()->json(['success' => true, 'redirect' => route('dashboard.portfolios.index')]);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('dashboard.pages.portfolios.edit',compact('portfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $validator = Validator::make($request->all(),[
            "name_en"=>"required|string",
            "description_en"=>'required',
            "name_ar"=>"required|string",
            "description_ar"=>'required',
            "category_ar"=>"required|string",
            "category_en"=>'required|string',
            "main_image"=>'nullable',
            "image_1"=>'nullable',
            "image_2"=>'nullable',
            "image_3"=>'nullable',
            "image_4"=>'nullable',
            "thumbnail_1"=>'nullable',
            "thumbnail_2"=>'nullable',
            "client"=>"required|string",
            "Author"=>"required|string",
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.portfolios.create'), 'errors'=> $validator->errors()->all(),'data'=>$request->all()]);

        }
       $requestAll = $validator->validated();
        if($request->hasFile('main_image'))
        {
            $requestAll['main_image'] = $this->storeImage($requestAll['main_image'], '/uploads');
        }
        if($request->hasFile('image_1'))
        {
            $requestAll['image_1'] = $this->storeImage($requestAll['image_1'], '/uploads');
        }
        if($request->hasFile('image_2'))
        {
            $requestAll['image_2'] = $this->storeImage($requestAll['image_2'], '/uploads');
        }
        if($request->hasFile('image_3'))
        {
            $requestAll['image_3'] = $this->storeImage($requestAll['image_3'], '/uploads');
        }
        if($request->hasFile('image_4'))
        {
            $requestAll['image_4'] = $this->storeImage($requestAll['image_4'], '/uploads');
        }

        if($request->hasFile('thumbnail_1'))
        {
            $requestAll['thumbnail_1'] = $this->storeImage($requestAll['thumbnail_1'], '/uploads');
        }
        if($request->hasFile('thumbnail_2'))
        {
            $requestAll['thumbnail_2'] = $this->storeImage($requestAll['thumbnail_2'], '/uploads');
        }
       if($portfolio->update($requestAll)){
        return response()->json(['success' => true, 'redirect' => route('dashboard.portfolios.index')]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return response()->json(['success' => true, 'redirect' => route('dashboard.portfolios.index')]);
    }

    private function storeImage($photo, $folder)
    {
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = Str::uuid() . '.' . $file_extension;
        $saved = $photo->storeAs($folder, $file_name, ['disk' => 'public']);
        if ($saved) {
            return $file_name;
        }
    }
}
