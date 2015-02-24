<?php namespace Hatches\Http\Controllers;

use Hatches\FishSpecies;
use Hatches\Http\Requests;
use Hatches\Transformers\FishSpeciesTransformer;
use Illuminate\Http\Request;
use Sorskod\Larasponse\Larasponse;

/**
 * Class FishSpeciesController
 *
 * @package Hatches\Http\Controllers
 */
class FishSpeciesController extends Controller {

    protected $fractal;

    public function __construct(Larasponse $fractal)
    {
        $this->fractal = $fractal;
    }

    /**
     * Display a listing of the resource.
     *
     *
     * @param \Illuminate\Http\Request $request
     * @return \Hatches\Http\Controllers\Response
     * @internal param $
     */
	public function index(Request $request)
    {
        $countFishSpecies = FishSpecies::count();
        $limit = $request->input('limit', 25);

        if ($limit > 100) {
            return $this->respondBadRequest('Bad Request, Naughty Request! Limit maximum is 100 per page.');
        } elseif ($countFishSpecies < 1) {
            return $this->respondNotFound('There are no Users!?');
        } else {
            $fishSpecies = FishSpecies::paginate($limit);
            return $this->fractal->paginatedCollection($fishSpecies, new FishSpeciesTransformer);
        }
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
