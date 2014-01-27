<?php

class GoalController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$goals = Goal::with('exercise')
					->where('user_id', Auth::user()->id)->get();

		return Response::json($goals, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, Goal::$rules);

		if ($validator->passes())
		{
			$input['user_id'] = $input['userId'];
			unset($input['userId']);
			$goal = new Goal;
			$goal->fill($input);
			$goal->save();

			return Response::json($goal, 200);
		}

		return Response::make($validator->messages(), 400);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goal = Goal::where('id', $id)
					->where('user_id', Auth::user()->id)->first();

		if ($goal && $goal->user_id === Auth::user()->id) {
			return Response::json($goal, 200);
		}

		return Response::make(null, 204);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validator = Validator::make($input, Goal::$rules);

		if ($validator->passes())
		{
			$goal = Goal::find($id);

			if (!$goal) {
				return Response::make('Not Found', 404);
			}

			if ($goal->user_id === Auth::user()->id) {
				$goal->update($input);
				return Response::json($goal, 200);
			}

			return Response::make('Trying to access a goal that doesn\'t belong to you', 400);

		}

		return Response::make($validator->messages(), 400);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$goal = Goal::find($id);

		if($goal->user_id === Auth::user()->id) {
			$goal->delete();
		}

		return Response::make(null, 204);
	}

}
