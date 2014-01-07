<?php

class ExerciseController extends BaseController {

	/**
	 * Exercise Repository
	 *
	 * @var Exercise
	 */
	protected $exercise;

	public function __construct(Exercise $exercise)
	{
		$this->exercise = $exercise;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exercises = $this->exercise->all();

		return Response::json($exercises, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, Exercise::$rules);

		if ($validator->passes())
		{
			$exercise = $this->exercise->create($input);

			return Response::json($exercise, 201);
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
		$exercise = $this->exercise->findOrFail($id);
		return Response::json($exercise, 200);
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
		$validator = Validator::make($input, Exercise::$rules);

		if ($validator->passes())
		{
			$exercise = $this->exercise->find($id);
			$exercise->update($input);

			return Response::json($exercise, 200);
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
		$this->exercise->find($id)->delete();

		return Response::json(null, 204);
	}

}
