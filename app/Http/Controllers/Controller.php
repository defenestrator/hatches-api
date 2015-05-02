<?php namespace Hatches\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    /**
     * @var int
     */
    protected $statusCode = 200;
    protected $resourceKey = 'data';
    /**
     * @param mixed $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'There are no fish in this run. That\'s a 404 error, good buddy.')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Error, something is temporarily busted,
                                                    our regularly scheduled program will resume shortly.')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondAuthenticationError($message = 'Authentication Error. Please login before continuing.')
    {
        return $this->setStatusCode(422)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondBadRequest($message = 'Bad Request! Naughty Request!')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondForbiddenRequest($message = 'Sorry, you aren\'t allowed to do that!')
    {
        return $this->setStatusCode(403)->respondWithError($message);
    }

}
