<?php

namespace App\Repository;


class Repository
{
    public $model;

    public function __construct($get_model) {
        $this->model = $get_model;
    }

    /**
     * Получить все данные из Бд-х
     *
     * @return void
     */
    public function get()
    {
        $builder = $this->model->select("*")->get();
        return $builder;
    }

    /**
     * Получить все активный данные из Бд-х
     *
     * @return void
     */
    public function getActive()
    {
        $builder = $this->model->select("*")->where("active", true)->get();
        return $builder;
    }

    /**
     * Получить первый Активный элемент из Бд-х
     *
     * @return void
     */
    public function getFirst()
    {
        $builder = $this->model->select("*")->where("active", true)->first();
        return $builder;
    }

    /**
     * Получить одну данный по ID
     *
     * @param [type] $id
     * @return void
     */
    public function getById($id)
    {
       $builder = $this->model->findOrFail($id);
       return $builder;
    }

    /**
     * Создать элемент
     *
     * @param [type] $data
     * @return void
     */
    public function create($data)
    {
        $this->model->create($data);
    }

    /**
     * Обновить элемент
     *
     * @param [type] $data
     * @return void
     */
    public function update($data)
    {
        $this->model->update($data);
    }


}
