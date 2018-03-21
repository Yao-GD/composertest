<?php
namespace Ygd\Packagetest;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Packagetest
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){

       //  $ylogin1 = $msg->input('username');
       //  //提取表单中的password
       //  $passwordsub = $msg->input('password');
       //  //$ylogin1 = '13020362037';
       //  //
       //  //查询表中对应username行的password值
       // // $password = YgdLogin::where('username',$ylogin1)->value('password');
       //  $password = DB::select('select * from user where username = :id', ['id' => $ylogin1]);
       
       //  // $ylogin1 = new YgdLogin;
       //  // $ylogin1->username = $request->username;
       //  // $ylogin1->password = $request->password;
        
       //  //dd($ylogin1);
       //  //dd($password); 
       //  //passwordsub = $request->password;
       //  if ($password == $passwordsub){
       //      # code...
            
       //      // return view('welcome');
       //      return echo 'yes';
       //   }else{

       //      return echo 'no';
       //   }


        $config_arr = $this->config->get('packagetest.options');
        //返回一个变量+字符串
        return $msg.' <strong>随便写的</strong>>';
    }

    // public function test_login()
    // {
    //     return
    // }
}