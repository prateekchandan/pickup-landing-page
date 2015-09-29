<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClickCount extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'click_count';

	public function plus_one()
	{
		$this->count+=1;
		$this->save();
	}
}
