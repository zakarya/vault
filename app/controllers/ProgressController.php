<?php

class ProgressController extends BaseController {

	public function index()
	{
		$parents = Exercise::where('is_parent', true)->get();

		$workouts = Workout::with('exercises')->where('user_id', Auth::user()->id)->get();

		$max = array();
		foreach($parents as $parent) {
			$max[$parent->id]['level'] = 0;
		}
		foreach($workouts as $workout) {
			foreach($workout->exercises as $exercise) {
				if ($exercise->level > $max[$exercise->parent_id]['level']) {
					$max[$exercise->parent_id]['level'] = $exercise->level;
					$max[$exercise->parent_id]['id'] = $exercise->id;
				}
			}
		}

		$progressions = array();
		$count = 0;
		foreach($parents as $parent) {
			$progress = new stdClass;
			$progress->parent_name = $parent->parent_name;
			$progress->exercise = Exercise::find($max[$parent->id]['id'])->toArray();
			$progressions[$count] = $progress;
			$count++;
		}

		return Response::json($progressions, 200);
	}
}