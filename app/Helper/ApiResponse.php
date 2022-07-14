<?php

namespace App\Helper;

trait ApiResponse
{
    protected $body;
    protected $code;
    protected $status;

    public function setData($data)
    {
        $this->body['data'] = $data;
        return $this;
    }//end of  function

    public function setMessage($message = null)
    {
        $this->body['message'] = $message;
        return $this;
    }//end of  function

    public function setError($error = null)
    {
        $this->body['error'] = $error;
        return $this;
    }//end of  function

    public function setCode($code = null)
    {
        $this->body['code'] = $code;
        return $this;
    }//end of  function

    public function setStatus($status = null)
    {
        $this->body['status'] = $status;
        return $this;
    }//end of  function

    public function send()
    {
        return response()->json($this->body, $this->code ?? 200);
    }//end of send function
}
