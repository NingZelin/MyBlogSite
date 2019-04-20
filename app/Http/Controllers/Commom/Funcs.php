<?php
    
    
    namespace App\Http\Controllers\Commom;
    
    
    use Illuminate\Support\Facades\DB;

    class Funcs
    {
        public static function toArray($data)
        {
            return json_decode(json_encode($data,256),true);
        }
        
        public static function setUV()
        {
            $ip = request()->ip();
            $uv = DB::table('uvs')->where('ip',$ip)->first('*');
            $uv = self::toArray($uv);
            if ($uv === null){
                DB::table('uvs')->insert(['ip'=>$ip,'last_time'=>time()]);
                DB::table('visiter')->where('id',1)->increment('uv');
                return true;
            }
            if ($uv['last_time'] + 86400 < time()){
                DB::table('uvs')->where('ip',$uv['ip'])->update(['last_time'=>time()]);
                DB::table('visiter')->where('id',1)->increment('uv');
                return true;
            }
            return 0;
        }
    }