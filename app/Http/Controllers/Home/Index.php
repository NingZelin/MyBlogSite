<?php
    /**
     * Created by PhpStorm.
     * User: Crazy_Ning
     * Date: 2019/3/17
     * Time: 18:38
     * WebSite:www.iacblog.com
     */
    
    namespace App\Http\Controllers\Home;
    
    
    use App\Http\Controllers\Controller;

    class Index extends Controller
    {
        public function index()
        {
            return view('home.index');
        }
        
        
        public function resume()
        {
            return view('home.resume');
        }
        
        public function record()
        {
            return view('home.record');
        }
    }