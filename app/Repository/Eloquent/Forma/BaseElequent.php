<?php

namespace App\Repository\Eloquent\Forma;

use App\Repository\Interfaces\Forma\BaseInterface;
use Illuminate\Database\Eloquent\Model;

class BaseElequent implements BaseInterface
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * @param $data
     * @auther Nader Ahmed
     * @return mixed
     */
    public function store($data)
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $data
     * @auther Nader Ahmed
     * @return mixed
     */
    public function update(int $id,$data)
    {
        return $this->getById($id)->update($data);
    }

    /**
     * @param int $id
     * @auther Nader Ahmed
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->getById($id)->delete();
    }

    /**
     * @param array $where = null
     * @auther Nader Ahmed
     * @return int
     */
    public function getCount(array $where = null)
    {
        return $this->model->where($where)->count();
    }

    /**
     * @param array $where = null
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getWhere(array $where = null)
    {
        return $this->model->where($where)->get();
    }

    /**
     * @param int $limit
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getByLimit(int $limit)
    {
        return $this->model->get();
    }

    /**
     * @param string $str
     * @param string $value
     * @auther Nader Ahmed
     * @return mixed
     */
    public function getAllByOrder(string $str,string $value)
    {
        return $this->model->orderBy($str,'DESC')->get();
    }
}


