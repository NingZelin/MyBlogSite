<?php
    /**
     * Created by PhpStorm.
     * User: Crazy_Ning
     * Date: 2019/3/17
     * Time: 18:38
     * WebSite:www.iacblog.com
     */
    
    namespace App\Http\Controllers\Home;
    
    
    use App\Http\Controllers\Commom\Funcs;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;

    class Index extends Controller
    {
        protected $onlineStatus = '';
        
        public function __construct()
        {
            Funcs::setUV();
            DB::table('visiter')->where('id',1)->increment('pv');
            $this->onlineStatus = config('app.online',true);
        }
    
        public function index()
        {
            $visi = DB::table('visiter')->find(1,['*']);
            $visi = Funcs::toArray($visi);
            return view('home.index')->with(['data'=>$this->onlineStatus,'visi'=>$visi]);
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