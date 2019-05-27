<?php

namespace App\Repository\Interfaces\Forma;


interface BaseInterface
{

    /**
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getAll();

    /**
     * @param $data
     * @auther Nader Ahmed
     * @return mixed
     */
    public function store($data);

    /**
     * @param int $id
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @param $data
     * @auther Nader Ahmed
     * @return mixed
     */
    public function update(int $id,$data);

    /**
     * @param int $id
     * @auther Nader Ahmed
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param array $where = null
     * @auther Nader Ahmed
     * @return int
     */
    public function getCount(array $where = null);

    /**
     * @param array $where = null
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getWhere(array $where = null);

    /**
     * @param int $limit
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getByLimit(int $limit);

    /**
     * @param string $str
     * @param string $value
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getAllByOrder(string $str,string $value);
}
