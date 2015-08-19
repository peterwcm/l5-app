<?php namespace App\Helpers;

class JsonHelper {

    /**
     * Get a success response for the API.
     *
     * @param array $data
     *     The data to be returned.
     *
     * @return array
     *     The success response.
     */
    public function getSuccessResponse($data = null) {
        return [
            'data' => $data,
        ];
    }

    /**
     * Get an error response for the API.
     *
     * @param string $code
     *     The error code.
     * @param string $msg
     *     The error message.
     *
     * @return array
     *     The error response.
     */
    public function getErrorResponse($code, $msg) {
        return [
            'error' => [
                'code' => $code,
                'message' => $msg,
            ]
        ];
    }

}
