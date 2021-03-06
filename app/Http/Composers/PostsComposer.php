<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

use App\Models\Post;

class PostsComposer
{
	protected $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	/**
	 * Bind data to the view
	 *
	 *@param View $view
	 *@return void
	 *
	 */

	public function compose(View $view)
	{
		$view->with('popularPosts', $this->post->popular()->isLive()->take(5)->get());
	}
}
