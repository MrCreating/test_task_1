<?php

use test\BaseObject;

/**
 * Abstract service for API integrations
 */
abstract class AbstractService extends BaseObject
{
    public int $id;

    // settings of service (url, etc)
    public array $options = [];

    /**
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        parent::__construct($params);

        $this->options = $params;
    }

    /**
     * Get option of service setting
     */
    public function getOption (string $key): string
    {
        return $this->options[$key] ?? '';
    }

    /**
     * API URL service getter
     */
    abstract public function getAPI (): mixed;

    /**
     * Send request to API service with method.
     */
    abstract public function callMethod (string $method, array $params = []): mixed;

    /**
     * Get base service
     */
    public static function get (array $options): AbstractService
    {
        return new static($options);
    }
}