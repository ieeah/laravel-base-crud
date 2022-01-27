<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;

class ComicsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$comics = Comic::paginate(5);
		return view('comics.index', compact('comics'));
		// $comics = Comic::all();
		// return view('comics.index', compact('comics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('comics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$new_comic = new Comic();
		$data = $request->all();
		$data['slug'] = Str::slug($data['title'], '-');
		$new_comic->fill($data);
		$new_comic->save();

		return redirect()->route('comics.show', $new_comic->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Comic $comic)
	{

		if ($comic) {
			return view('comics.show', compact('comic'));
		}
		abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$to_edit = Comic::find($id);
		if($to_edit) {
			return view('comics.edit', compact('to_edit'));
		}
		abort(404);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$data = $request->all();
		$data['slug'] = Str::slug($data['title'], '-');
		$edited = Comic::find($id);
		$edited->update($data); // update non richiede il save();

		return redirect()->route('comics.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$delete = Comic::find($id);
		$delete->delete();
		return redirect()->route('comics.index')->with('deleted', $delete->title);
	}
}
