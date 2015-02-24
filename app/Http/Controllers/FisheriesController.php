<?php namespace Hatches\Http\Controllers;

use Hatches\Fishery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Hatches\Transformers\FisheryTransformer;

/**
 * Class FisheriesController
 */
class FisheriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * GET /fisheries
     *
     *
     * @param Request $request
     * @param Response $response
     * @param FisheryTransformer $fisheryTransformer
     * @return Response
     * @internal param $
     */
    public function index(Request $request, Response $response, FisheryTransformer $fisheryTransformer)
    {
        $limit = intval($request->input('limit', 25));
        $checkExistence = Fishery::count();
        $page = $request->input('page', 1);
        $pageLimit = $checkExistence / $limit;
        $pages = round($pageLimit, 0, 1);
        if ($page > $pages) {
            return $this->respondBadRequest('There are not that many pages of results');
        }elseif ($limit >= 100) {
            return $this->respondBadRequest('Bad Request, Naughty Request!');
        } elseif ($checkExistence < 1) {
            return $this->respondNotFound('There are no Fisheries!?');
        } else {
            $fishery = Fishery::paginate($limit);
            return $response->setContent([
                'data' => $fisheryTransformer->transformCollection($fishery->all())
            ], 200
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     * GET /fisheries/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /fisheries
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /fisheries/{id}
     *
     * @param  int $id
     * @param Response $response
     * @param FisheryTransformer $fisheryTransformer
     * @return Response
     * @internal param $
     */
    public function show($id, Response $response, FisheryTransformer $fisheryTransformer)
    {
        $fishery = Fishery::find($id);
        if (!$fishery) {
            return $this->respondNotFound('This fishery does not exist');
        }
        return $response->setContent(['data' => $fisheryTransformer->transform($fishery)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /fisheries/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /fisheries/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /fisheries/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}