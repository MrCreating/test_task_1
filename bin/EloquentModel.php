<?php

namespace test;

class EloquentModel extends BaseObject
{
    // code....

    /**
     * @return string
     */
    abstract function table (): string;

    /**
     * @param mixed|NULL $condition
     * @return $this
     */
    public function where (mixed $condition = NULL): EloquentModel
    {
        return $this;
    }

    /**
     * @param mixed|NULL $condition
     * @return $this
     */
    public function orderBy (mixed $condition = NULL): EloquentModel
    {
        return $this;
    }

    /**
     * @param bool $validate
     * @return bool
     */
    public function save (bool $validate = true): bool
    {
        return true;
    }


    /**
     * @param string $permission
     * @return bool
     */
    public function requires (string $permission): bool
    {
        return true;
    }

    /**
     * @param array $params
     * @return EloquentModel
     */
    public static function find (array $params = []): EloquentModel
    {
        return new static($params);
    }

    /**
     * @param mixed|NULL $condition
     * @return EloquentModel|null
     */
    public static function findOne (mixed $condition = NULL): ?EloquentModel
    {
        // this is example.

        if ($condition == 1) {
            return new static($condition);
        }

        return NULL;
    }

    // code....
}