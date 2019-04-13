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
        protected $onlineStatus = '';
        
        public function __construct()
        {
            $this->onlineStatus = config('app.online',true);
        }
    
        public function index()
        {
            return view('home.index')->with('data',$this->onlineStatus);
        }
        
        
        public function resume()
        {
//            dump($status);
            return view('home.resume')->with('data',$this->onlineStatus);
        }
        
        public function record()
        {
            return view('home.record')->with('data',$this->onlineStatus);
        }
    }