<?php


Route::domain('{account}.mychannel.curbappeallive.com')->group(function ($account) {

    Route::get('/', 'CurbAppealLiveController@index');
  
  });
  
  
  // Route::prefix('reactiongo')->group(function() {
  //     Route::get('/', 'ReactionGoController@index');
  // });
  
  // Route::get('/', function ($account) {
  
  //     // if(strpos($_SERVER['HTTP_USER_AGENT'],'Phone') | strpos($_SERVER['HTTP_USER_AGENT'],'Android')){      
  //         return view('main');               
  //   //  }
  //     // else{   
  //     //     echo "give them the desktop version";   
  //     // }
  
  
  //   //  return view('cards.main');
  //    // return 'https://'.$account.'.cards.curbappeallive.com';
  // });
  
  