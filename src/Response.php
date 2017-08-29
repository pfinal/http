<?php

namespace PFinal\Http;

/**
 * Http Response
 * @author 邹义良
 */
class Response
{
    protected $transferInfo;
    protected $header;
    protected $body;

    public function __construct(array $data)
    {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }

    /**
     * http响应状态码
     *
     * @return int
     */
    public function getStatusCode()
    {
        return isset($this->transferInfo['http_code']) ? $this->transferInfo['http_code'] : 0;
    }

    /**
     * http响应body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * 传输状态信息
     *
     * @return array
     */
    public function getTransferInfo()
    {
        return (array)$this->transferInfo;
    }

    /**
     * http响应头
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }
}