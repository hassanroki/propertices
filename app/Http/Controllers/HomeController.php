<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\ContactIcon;
use App\Models\ContactPhone;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\MainMenu;
use App\Models\Project;
use App\Models\Service;
use App\Models\SocialIcon;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index
    public function index()
    {
        // Welcome Table
        $welcomes           = Welcome::all();
        $welcomeCount       = $welcomes->count();

        // Social Icon Table
        $socialIcon         = SocialIcon::all();
        $socialIconCount    = $socialIcon->count();

        // Logo Table
        $logos              = Logo::all();
        $logoCount          = $logos->count();

        // Contact Icon
        $contactIcon        = ContactIcon::all();
        $contactIconCount   = $contactIcon->count();

        // Main Menu
        $mainMenu           = MainMenu::all();
        $mainMenuCount      = $mainMenu->count();

        // Banner
        $banners            = Banner::all();
        $bannerCount        = $banners->count();

        // About Us
        $aboutUs            = AboutUs::all();
        $aboutCount         = $aboutUs->count(); 
        
        // Services
        $services           = Service::all();
        $serviceCount       = $services->count();

        // Projects
        $projects           = Project::all();
        $projectCount       = $projects->count();

        // Contact Phone
        $contactPhones      = ContactPhone::all();
        $contactPhoneCount  = $contactPhones->count();

        // Footer Content
        $footers            = Footer::all();
        $footerCount        = $footers->count();

        return view('index', compact(
            [
                'welcomes',         'welcomeCount',
                'socialIcon',       'socialIconCount',
                'logos',            'logoCount',
                'contactIcon',      'contactIconCount',
                'mainMenu',         'mainMenuCount',
                'banners',          'bannerCount',
                'aboutUs',          'aboutCount',
                'services',         'serviceCount',
                'projects',         'projectCount',
                'contactPhones',    'contactPhoneCount',
                'footers',          'footerCount',
            ]
        ));
    }

    public function project(Project $project){
        // Welcome Table
        $welcomes           = Welcome::all();
        $welcomeCount       = $welcomes->count();

        // Social Icon Table
        $socialIcon         = SocialIcon::all();
        $socialIconCount    = $socialIcon->count();

        // Logo Table
        $logos              = Logo::all();
        $logoCount          = $logos->count();

        // Contact Icon
        $contactIcon        = ContactIcon::all();
        $contactIconCount   = $contactIcon->count();

        // Main Menu
        $mainMenu           = MainMenu::all();
        $mainMenuCount      = $mainMenu->count();

        // Projects
        $projects           = Project::all();
        $projectCount       = $projects->count();

        // Single Project View
        $singleProjectCount = $project->count();

         // Footer Content
         $footers            = Footer::all();
         $footerCount        = $footers->count();

        return view('frontend.project_view', compact([
                'welcomes',         'welcomeCount',
                'socialIcon',       'socialIconCount',
                'logos',            'logoCount',
                'contactIcon',      'contactIconCount',
                'mainMenu',         'mainMenuCount',
                'projects',         'projectCount',
                'project',          'singleProjectCount',
                'footers',          'footerCount',
            ]));
    }
}
