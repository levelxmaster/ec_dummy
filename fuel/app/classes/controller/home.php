<?php
class Controller_Home extends Controller
{
	// public function before() 
	// {
	// 	// 未ログイン時、ログインページへリダイレクト	
	// 	if (!Auth::check()) {
	// 		Response::redirect('/login');

	// 	}
	// }

    public function action_index()
    {
		$db = DB::select('*')->from('dummy')->where('id',1)->execute();
        // $db = DB::instance();
        // $db = DB::instance(); // or 'default'

        $view = View::forge('home/index');

		$view->username = 'Joe14';
		$view->title = 'Home';
		$view->set('username', $db[0]['name']);

		return $view;
    }
}