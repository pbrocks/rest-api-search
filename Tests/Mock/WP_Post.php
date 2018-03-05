<?php


namespace CalderaLearn\RestSearch\Tests\Mock;

// phpcs:disable

/**
 * Class WP_Post
 *
 * Mock for WP_Post
 *
 * @package CalderaLearn\RestSearch\Mock
 */
class WP_Post extends \stdClass
{
	/** @var string */
	public $post_title;

	/**
	 * WP_Post constructor.
	 * @param mixed $post Could be anything, not used
	 */
	public function __construct($post)
	{
		//Don't do anything
	}
}
