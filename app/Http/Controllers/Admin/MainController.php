<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MainController extends Controller
{
    public function openBlade(Request $req, ?string $pg = 'landing', ?string $sbpg = '')
    {
        $coredata = [ // system related vars for blade
            "lib" => [], // required js libraries
        ];
        $pagedata = [ // UI related vars for blade

        ];
        $tempdata = [ // local vars for this controller
            'blade' => "errors.404",
            'toast' => "error",
            'toast_var' => (object) [
                'title' => "unexpected error occured",
                'icon' => 'error',
                'message' => 'main category not found'
            ]
        ];

        try {
            //code...
            switch ($pg) {
                case 'foo':
                    # code...
                    break;

                case 'landing':
                    # fall through
                default:
                $tempdata = [ 
                    'blade' => "admin.pages.landing",
                    'toast' => "none",
                    'toast_var' => (object) [
                        'title' => "unexpected error occured",
                        'icon' => 'error',
                        'message' => "you shouldn't see this"
                    ]
                ];
                    break;
            }
        } catch (\Throwable $th) {
            $tempdata = [ // local vars for this controller
                'blade' => "errors.500",
                'toast' => "error",
                'toast_var' => (object) [
                    'title' => "[500] error caught",
                    'icon' => 'error',
                    'message' => "error caught at openBlade {$th->getLine()}: {$th->getMessage()}"
                ]
            ];
        }

        $compact = compact('coredata', 'pagedata');
        return view($tempdata['blade'], $compact)->with($tempdata['toast'], $tempdata['toast_var']);
    }
}
