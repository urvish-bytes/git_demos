<?php
use App\User;
use Illuminate\Support\Facades\Input;

Route::get ( '/', function () {
	// $dummyDetails = User::paginate(15);
	return view ( 'welcome' );
} );

// Route::any ( '/search', function () {
		// $q = Input::get( 'q' );
		// // if($q != ""){
		// $user = dummyDetails::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
		// $pagination = $user->appends ( array (
		// 			'q' => Input::get ( 'q' ) 
		// 	) );
		// 	if (count ( $user ) > 0)
		// 	return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
		// // }
		// 	return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
// } );

Route::any('/search',function(){
    $q = Input::get ('q');
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});