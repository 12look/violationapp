<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Violation;
use Request;
use Validator;
use Input;

class ViolationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('violation.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    $rules = [
	        'number'   		=> 'required|regex:/[а-я]{1}[0-9]{3}[а-я]{2}/',
	        'region'   		=> 'required|regex:/[0-9]{2}/',
	        'url'	   		=> 'required|url',
	        'description'	=> 'required'
		];

    // create custom validation messages
    	$messages = [
        	'required'	=> 'Все поля должны быть заполнены',
    	];

	    $validator = Validator::make(Input::all(), $rules, $messages);

	    // check if the validator failed -----------------------
	    if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();

	        // redirect our user back to the form with the errors from the validator
	        return redirect('violation/create')
	            ->withErrors($validator);

	    } else {

	    	$input = Request::all();
	        Violation::create($input);

	        return redirect('/');

	    }
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
