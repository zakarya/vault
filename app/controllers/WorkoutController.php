<?php

class WorkoutController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$workouts = Workout::all();

		return Response::json($workouts, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, Workout::$rules);

		if($validator->passes()) {
			$workout = new Workout;
			$workout->fill($input);
			$workout->save();

			return Response::json($workout, 200);
		}

		return Response::json($validator->messages(), 400);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$workout = Workout::find($id);

		return Response::json($workout, 200);
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
		$validator = Validator::make($input, Workout::$rules);

		if ($validator->passes())
		{
			$workout = Workout::find($id);
			$workout->update($input);

			return Response::json($workout, 200);
		}

		return Response::json($validator->messages(), 400);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$workout = Workout::find($id);

		if ($workout) {
			$workout->delete();
		}

		return Response::json(null, 204);
	}

}