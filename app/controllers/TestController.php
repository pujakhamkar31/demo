<?php

class TestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$name=Input::get('user_name');
		$pass=Input::get('user_password');	
		$log=Input::get('login');
		$reg=Input::get('register');
		
			
			
			//echo $log;
			if($log=="Login")
			{
		if($name=="puja" and $pass=="123" )
		{
				//echo $log;
				//echo $reg;

				//echo $name;
				return View::make('hello');
			
			
		}

	   else 
	   {
		   
		   echo'OOOops  something went wrong';
	   }
	
	}
	elseif($reg=="Register")
	{
		return View::make('registration');
	}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	/* public fuction storeregister()
	 {
		 return View::make('registration');
		 
	 }
	 
	 public fuction displayregister()
	 {
		 
		 echo "haaha";
	 }*/
	public function create()
	{
		
		return View::make('index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	   $name=Input::get('user');
	   echo'<center>';
		echo $name."You are register with us";
		echo '</center>';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
