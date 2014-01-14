<?php

class BlogsController extends BaseController {

	/**
	 * Blog Repository
	 *
	 * @var Blog
	 */
	protected $blog;

	public function __construct(Blog $blog)
	{
		$this->blog = $blog;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = $this->blog->all();

		return View::make('blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blogs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Blog::$rules);

		if ($validation->passes())
		{
			$this->blog->create($input);

			return Redirect::route('blogs.index');
		}

		return Redirect::route('blogs.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = $this->blog->findOrFail($id);

		return View::make('blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = $this->blog->find($id);

		if (is_null($blog))
		{
			return Redirect::route('blogs.index');
		}

		return View::make('blogs.edit', compact('blog'));
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
		$validation = Validator::make($input, Blog::$rules);

		if ($validation->passes())
		{
			$blog = $this->blog->find($id);
			$blog->update($input);

			return Redirect::route('blogs.show', $id);
		}

		return Redirect::route('blogs.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->blog->find($id)->delete();

		return Redirect::route('blogs.index');
	}

}
