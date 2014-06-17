<?php
class Project extends Eloquent
{

	protected $table = 'projects';

	public function photos()
	{
		return json_decode($this->photos);
	}
	public function skills()
	{
		return explode(',', $this->skills);
	}

}