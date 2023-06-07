<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Page;
use App\Models\User;
use App\Models\Theme;
use App\Models\ButtonStyle;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EditorController extends Controller
{

    private $carouselimgs = [];
    private $newimg;
    public function uploadimages(Request $request)
    {
        $img = $request->file('img');
        $user = $request->input('userid');
        $user = User::find($user);
        $filename = $img->getClientOriginalName();
      
        // Check if the user already has an image with the same file name in the 'image' collection

            try {
                // Validate the value...
                if ($user->getMedia('singleimage',['name' => $img->getClientOriginalName()])) {
                

                }
                else {
                    // Add the new image to the 'image' collection
                    $img = $user->addMedia($img)->toMediaCollection('singleimage', 'public_images');
                    $this->newimg = $img->getUrl();
                
                }
                
                foreach ($request->file('images') as $carouselimages) {
                    // Check if the user already has an image with the same file name in the 'carousel-images' collection
                    if ($user->getMedia('carousel-images',['name' => $carouselimages->getClientOriginalName()])) {
        
                    }
        
                    else {
                                    // Add the new image to the 'carousel-images' collection
                        $user->addMedia($carouselimages)->toMediaCollection('carousel-images', 'public_images');
                    }
        
                }
                
            } catch (Throwable $e) {
                report($e);
         
                return response()->json(['error' => 'File already exist in the database'], 404);
            }
            
            
        
        return response()->json([
            'success' => true,
            'message' => 'Form data submitted successfully!',
        ]);
        
    }

    // function for uploading logo
    public function uploadlogo(Request $request)
    {
        $user = $request->input('userid');
        
        $request->validate([
            'logoimg' => [
                'required',
            ],
        ]);


        $logo = $request->file('logoimg');
        $user = User::find($user);
        $fileName = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
        $image = $user->getMedia('logo',['file_name' => $logo->getClientOriginalName()]);

        // Check if the user already has an image with the same file name in the 'image' collection
                if (Media::where('name',$fileName)->exists()) {
                    $logo = $user->getMedia('logo',$fileName);
                    
                }
                else {
                    // Add the new image to the 'image' collection

                    $logo = $user->addMedia($logo)->toMediaCollection('logo', 'public');
           
                
                }

                return redirect()->back()->with('success', 'Logo uploaded!');

    }

// function for showing existing logos
public function existinglogos(Request $request)
{
    $logosArray = [];
    $user = auth()->user();
    $logos = Media::where('collection_name','logo')->get();

    

    foreach($logos as $logo)
    {
        $logosArray[] = [
            'name' => $logo->name,
            'url' => $logo->getUrl()
        ];
    }


            return response()->json([
                'logo' => $logosArray
            ]);

}
    public function uploadsingleimage(Request $request) {

        $request->validate([
            'singleimg' => [
                'required',
            ]
        ]);
        $img = $request->file('singleimg');
        $user = $request->input('userid');
        $user = User::find($user);
        $img = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);



                if (Media::where('name',$img)->exists()) {

                    $image = Media::where('collection_name', 'singleimage')
                    ->where('name', $img)
                    ->first()
                    ->getUrl();                }
                else {
                    // Add the new image to the 'image' collection
                    $user->addMedia($img)->toMediaCollection('singleimage', 'public');
                    $image = Media::where('collection_name', 'singleimage')
                    ->where('name', $img)
                    ->first()
                    ->getUrl();
                }
                
                return response()->json([
                    'imageurl' => $image
                ]);
                
    }
    
    //single image
    public function showimage()
    
    {
        $user = auth()->user();
        $image = Arr::get($this->newimg, '0');
        $imageUrl = $image ? $image->getUrl() : '';
        return response()->json($imageUrl);
    }

    //multiple images
    public function showcarouselimg()
    
    {
        $singlemedia = [];
        $user = auth()->user();
        $media = Media::where('collection_name','carousel-images')->get();

        foreach($this->newimg as $img)
        {
            $singlemedia[] = [
                'url' => $img->getUrl()
            ];
            
        }
      
        
        if (!$media->isEmpty()) {

   // Initialize an empty array to store the image objects
$images = [];

// Iterate over the media collection and format each image object
foreach ($media as $image) {
    $images[] = [
        'name' => $image->name,
        'url' => $image->getUrl(),
    ];
}
        
            // Remove any null values from the array
            $images = array_filter($images);
            $singlemedia = array_filter($singlemedia);
        
            // Return the images as JSON
            return response()->json(['images' => $images,
                                     'singlemedia' => $singlemedia
        ]);
        
        } else {
            // Handle the case where $media is empty
            // ...
            return response()->json(['images' => 'empty']);
        }
        
    }


    public function uploadcard(Request $request){

        $request->validate([
            'card' => [
                'required'
            ],
            ]);

        $img = $request->file('card');
        $user = $request->input('userid');
        $user = User::find($user);
        $fileName = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);

                // Check if the user already has an image with the same file name in the 'image' collection
                if (Media::where('name',$fileName)->exists()) {
                    $image = $user->getMedia('singleimage')->where('name', $img)->first()->getUrl();

                    
                }
                else {
                    // Add the new image to the 'image' collection
                    $image = $user->addMedia($img)->toMediaCollection('singleimage', 'public');
                    $image = $user->getMedia('singleimage')->where('name', $img)->first()->getUrl();
                }

                return response()->json([

                    'imageurl' => $image
                ]);

    }


    public function existingimages() {
        $user = auth()->user();
        $media = Media::where('collection_name','carousel-images')->get();
        
        if (!$media->isEmpty()) {

   // Initialize an empty array to store the image objects
$images = [];

// Iterate over the media collection and format each image object
foreach ($media as $image) {
    $images[] = [
        'name' => $image->name,
        'url' => $image->getUrl(),
    ];
}
        
            // Remove any null values from the array
            $images = array_filter($images);
        
            // Return the images as JSON
            return response()->json(['images' => $images]);
        
        } else {
            // Handle the case where $media is empty
            // ...
            return response()->json(['images' => 'empty']);
        }
        

    }

    public function editorPage($themename = "")
    {
        $folderPath = 'Themes';
        $title = $themename;
        // dd($themename); 
        $filePath = $folderPath . '/' .  $themename . '/' . 'Homepage' . '.txt';
        $navigationpath = $folderPath . '/' .  $themename . '/' . 'navigation' . '.txt';
        $footerpath = $folderPath . '/' .  $themename . '/' . 'footer' . '.txt';
        if(Storage::exists($filePath) && Storage::exists($navigationpath))
        {
                    $canvas_content = Storage::get($filePath);
                    $navigation_content = Storage::get($navigationpath);
                    $footer_content = Storage::get($footerpath);
        }
        else
        {
            $canvas_content = "";
            $navigation_content = "";
            $footer_content = "";
        }


            return view('editor.editorpage', [
                'canvas_content' => $canvas_content,
                'navigation_content' => $navigation_content,
                'footer_content' => $footer_content,
                'title' => $title
                
        ]);
        
    }
    public function editedPages($theme, $navname)
    {

            $folderPath = 'Themes';
            $page = Page::whereHas('theme', function ($query) use ($theme) {
                $query->where('name', $theme);
            })
            ->where('slug',$navname . 'page')
            ->first();


            ($page) ? $filePath = $page->path_of_content : $filePath = "";
            
            if(!empty($filePath) && Storage::exists($filePath))
            {
                $canvas_content = Storage::get($filePath);
                $navigation_content = Storage::get($folderPath . '/' .  $theme . '/' . 'navigation' . '.txt');
                $footer_content = Storage::get($folderPath . '/' .  $theme . '/' . 'footer' . '.txt');
            }

            else{
                $canvas_content = "";
                $navigation_content = Storage::get($folderPath . '/' .  $theme . '/' . 'navigation' . '.txt');
                $footer_content = Storage::get($folderPath . '/' .  $theme . '/' . 'footer' . '.txt');
            }
            
            return view('editor.editorpage',[
                'canvas_content' => $canvas_content,
                'navigation_content' => $navigation_content,
                'footer_content' => $footer_content,
                'slug' => $navname,
                'title' => $theme

                
        ]);
        
    }

    public function editorthemes() {


        $themes = Theme::whereHas('user', function($query) {
            $query->where('id', Auth::id());
        })->get();

        ($themes) ? $themes : $themes = "";
        

        
        return view('editor.editorlandingpage',[
            'themes' => $themes
        ]);
    }

    public function showSingleImgs(){
        $user = auth()->user();
        $media = Media::where('collection_name','singleimage')->get();


        // Initialize an empty array to store the image objects
        $images = [];

        // Iterate over the media collection and format each image object
        foreach ($media as $image) {
            $images[] = [
                'name' => $image->name,
                'url' => $image->getUrl(),
            ];

         }
         return response()->json($images);
    }


    public function showExistingCarouselImgs(){
        $user = auth()->user();
        $media = Media::where('collection_name','singleimage')->get();


        // Initialize an empty array to store the image objects
        $images = [];

        // Iterate over the media collection and format each image object
        foreach ($media as $image) {
            $images[] = [
                'name' => $image->name,
                'url' => $image->getUrl(),
            ];

         }
         return response()->json($images);
    }

    // upload pdf

    public function uploadPdf(Request $request){

        $request->validate([
            'pdffile' => [
                'required'
            ]
            ]);

        $user = auth()->user();
        $pdf = $request->file('pdffile');
        
        $originalName =  preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME));


        if (Media::where('name',$originalName)->exists()) {

            $pdf = Media::where('name', $originalName)->first()->getUrl();
            

        }
        else{
            $pdf = $user->addMedia($pdf)
            ->toMediaCollection('pdf');
            $pdf = Media::where('name', $originalName)->first()->getUrl();
        }

        return response()->json([
            'pdfurl' => $pdf
        ]);

    }


    public function uploadphoto(Request $request){
        $request->validate([
            'imgs' => [
                'required',
                'array',
                'max:5', // Maximum of 5 images
            ],
            'imgs.*' => [ //validation for each image
                'image',
                // 'mimes:jpeg,png,jpg,gif',
                // 'max:2048', // Optional: Limit file size to 2MB
            ],
        ]);
        $imgs = $request->file('imgs');
        
        $user = $request->input('userid');
        $user = User::find($user);
        

        foreach($imgs as $img)
        {
            $img = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME));
            
            if (Media::where('name',$img)->exists())
            {
            
            }
            else
            {
                
                $user->addMedia($img)->toMediaCollection('singleimage', 'public_images');
            }

        }
        return back()->with(['success','image uploaded!']);
    }


    public function deletepage($themename,$page) {

       
        if ($themename){
            
            $pagetodelete = Page::whereHas('theme', function ($query) use ($themename) {
                $query->where('name', $themename);
            })
            ->where('page_name', $page)
            ->delete();
                    }

        return response()->json([
            'page' => $page,
            'themename' => $themename,
            'pagetodelete' => $pagetodelete
        ]);
    }

}
