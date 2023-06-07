<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Processes;
use App\Models\Theme;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    private $slug;
    public function saveHtml(Request $request)
    {

        $folderPath = 'Themes';
        // Get the HTML code from the #canvas element
        $html = $request->input('canvas-content');
        $user_id = $request->input('user_id');
        $fileName = $request->input('file_name');
        $pageName = ucfirst($request->input('page_name'));
        $navigation = $request->input('nav-content');
        $footer = $request->input('footer-content');

        $existingTheme = Theme::with('pages')->where('name', $fileName)->first();

        if($existingTheme)
        {
            if($existingTheme->pages->where('page_name', $pageName)->isNotEmpty()) 
            {
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . $pageName . 'page' . '.txt', $html);
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . 'navigation' . '.txt', $navigation);
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . 'footer' . '.txt', $footer);

            }
            else
            {

                // creation using sql command
                $page = new Page([
                    'theme_id' => $existingTheme->id,
                    'page_name' => $pageName,
                    'path_of_content' => $folderPath . '/' .  $existingTheme->name . '/' . $pageName . 'page' . '.txt',
                    'slug' => $pageName . 'page'
                ]);
                
                $existingTheme->pages()->save($page);
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . $page->slug . '.txt', $html);
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . 'navigation' . '.txt', $navigation);
                Storage::put($folderPath . '/' .  $existingTheme->name . '/' . 'footer' . '.txt', $footer);

            }
        }
        else
        {
            $theme = Theme::create([
                'user_id' => $user_id,
                'name' => $fileName,
            ]);

            $page = new Page([
                'theme_id' => $theme->id,
                'page_name' => $pageName,
                'path_of_content' => $folderPath . '/' .  $fileName . '/' . $pageName . 'page' . '.txt',
                'slug' => $pageName . 'page'
            ]);
            
            $theme->pages()->save($page);

            $theme->processes()->create([
                'name' => $theme->name
            ]);
            Storage::put($folderPath . '/' .  $fileName . '/' . $page->slug . '.txt', $html);
            Storage::put($folderPath . '/' .  $fileName . '/' . 'navigation' . '.txt', $navigation);
            Storage::put($folderPath . '/' .  $fileName . '/' . 'footer' . '.txt', $footer);

        }
       

        // Redirect back with a success message
        return response()->json(['message' => 'Form submitted successfully']);

    }

    public function showTheme($nav = "")
    {
        $approvedtheme = Processes::where('is_approved', true)->first();
        if ($approvedtheme)
        {
            $approvedtheme->load('processable');
        
            // Access the pages relationship like this:
            $pageid = $approvedtheme->processable_id;
    
            $theme = Theme::with('pages')->find($pageid);

            if ($theme) {
                
                if($nav){
                    $nav = ucfirst($nav);
    
                    $canvas_content = Storage::get('Themes' . '/' . $theme->name . '/' . $nav . 'page' . '.txt');
                    $navigation_content = Storage::get('Themes' . '/' . $theme->name . '/' . 'navigation.txt');
                    $footer_content = Storage::get('Themes' . '/' . $theme->name . '/' . 'footer.txt');
    
                }   
                else{
                    $canvas_content = Storage::get('Themes' . '/' . $theme->name . '/' . 'Homepage.txt');
                    $navigation_content = Storage::get('Themes' . '/' . $theme->name . '/' . 'navigation.txt');
                    $footer_content = Storage::get('Themes' . '/' . $theme->name . '/' . 'footer.txt');
                }
               
                return view('home', [
                    'canvas_content' => $canvas_content,
                    'navigation_content' => $navigation_content,
                    'footer_content' => $footer_content
                    
            ]);
            } 
        }
       
        else {
            return view('components.undermaintenance');
        }
     

    }


    // Preview the theme
    public function previewTheme($theme, $page)
    {
        
        $folderPath = 'Themes';
        $theme = Theme::where('name', $theme)->first();
        
        if ($page != 'Homepage')
        {
            $canvas_content = Storage::get($folderPath . '/' .  $theme->name . '/' . $page . 'page' . '.txt');

        }
        else
        {
            $canvas_content = Storage::get($folderPath . '/' .  $theme->name . '/' . 'Homepage' . '.txt');
        }
        
        $navigation_content = Storage::get($folderPath . '/' .  $theme->name . '/' . 'navigation' . '.txt');
        $footer_content = Storage::get($folderPath . '/' .  $theme->name . '/' . 'footer' . '.txt');


        return view('previewtheme', [
            'canvas_content' => $canvas_content,
            'navigation_content' => $navigation_content,
            'footer_content' => $footer_content
            
    ]);

    }

//  preview pages
    public function previewPage(){

    }
}
