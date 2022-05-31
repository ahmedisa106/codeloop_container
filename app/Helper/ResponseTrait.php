<?php

namespace App\Helper;

trait ResponseTrait
{
    protected $body;
    protected $code;

    public function setData($data)
    {
        $this->body['data'] = $data;
        return $this->send();

    }//end of  function

    public function setAddedSuccess($message = null)
    {
        $this->body['data'] = $message ?? "تم الإضافة بنجاح";
        $this->code['code'] = 200;
        return $this->send();

    }//end of setSuccess function

    public function setUpdatedSuccess($message = null)
    {
        $this->body['data'] = $message ?? 'تم التديث بنجاح';
        $this->code['code'] = 200;
        return $this->send();

    }//end of setSuccess function

    public function setDeletedSuccess($message = null)
    {
        $this->body['data'] = $message ?? 'تم الحذف بنجاح';
        $this->code['code'] = 200;
        return $this->send();

    }//end of setSuccess function

    public function setError($error)
    {
        $this->body['error'] = $error;
        $this->code['code'] = 402;
        return $this->send();
    }//end of setError function

    public function send()
    {
        return response()->json($this->body, $this->code['code'] ?? 200);
    }//end of send function
}
