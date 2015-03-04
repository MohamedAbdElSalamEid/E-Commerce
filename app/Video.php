<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Video extends Model {

	protected $table = "video";
	/**
	 * Deletes a video
	 *
	 * @return bool
	 */
	public function delete() {
		// Delete the post
		return parent::delete();
	}

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function content() {
		return nl2br($this -> content);
	}

	/**
	 * Get the author.
	 *
	 * @return User
	 */
	public function author() {
		return $this -> belongsTo('App\User', 'user_id');
	}
	
	/**
	 * Get the video.
	 *
	 * @return Video
	 */
	public function videos() {
		return $this -> belongsTo('App\VideoAlbum', 'videoalbum_id');
	}

}
