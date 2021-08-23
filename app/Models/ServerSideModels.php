<?php

namespace App\Models;

use CodeIgniter\Model;

class ServerSideModels extends Model
{
    public $builder;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    protected function _get_datatables_query($table, $column_order, $column_search, $order)
    {
        $this->builder = $this->db->table($table);
        $i = 0;

        foreach ($column_search as $item) {
            if ($_POST['search']['value']) {

                if ($i === 0) {
                    $this->builder->groupStart();
                    $this->builder->like($item, $_POST['search']['value']);
                } else {
                    $this->builder->orLike($item, $_POST['search']['value']);
                }

                if (count($column_search) - 1 == $i)
                    $this->builder->groupEnd();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->builder->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } elseif (isset($order)) {
            $this->builder->orderBy(key($order), $order[key($order)]);
        }
    }

    public function get_datatables($table, $column_order, $column_search, $order, $where = '', $like = '')
    {
        $this->_get_datatables_query($table, $column_order, $column_search, $order);
        if ($_POST['length'] != -1)
            $this->builder->limit($_POST['length'], $_POST['start']);
        if ($where)
            $this->builder->where($where);
        if ($like)
            $this->builder->like($like);

        $query = $this->builder->get();
        return $query->getResult();
    }

    public function count_filtered($table, $column_order, $column_search, $order, $where = '', $like = '')
    {
        $this->_get_datatables_query($table, $column_order, $column_search, $order);
        if ($where)
            $this->builder->where($where);
        if ($like)
            $this->builder->like($like);

        $this->builder->get();
        return $this->builder->countAll();
    }

    public function count_all($table, $where = '', $like = '')
    {
        if ($where)
            $this->builder->where($where);
        if ($like)
            $this->builder->like($like);

        $this->builder->from($table);

        return $this->builder->countAll();
    }
}
