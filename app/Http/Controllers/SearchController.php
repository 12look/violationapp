<?php namespace App\Http\Controllers;

use App\Violation;
use Illuminate\Http\Request;

class SearchController extends Controller {

	/**
	 * Show the search result.
	 *
	 * @return Response
	 */
	public function getResults(Request $request)
	{
		$query = $request->input('query');
		
		if (!$query)
			return redirect()->route('home');

		$violations = Violation::where('number', 'LIKE', "%{$query}%")
								->orderBy('created_at', 'DESC')
								->paginate(2);

		return view('search.results')->with('violations', $violations);
	}

}
