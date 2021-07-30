<?php

namespace App\Models;

use CodeIgniter\Model;

class TableModels extends Model
{
    public function getData($table, $column)
    {
        $this->perintah = $this->db->table($table)
            ->select($column);
    }

    public function setData($table, $column, $where = '', $wherein = [], $like = '', $groupby = '', $orderBy = [])
    {
        $this->getData($table, $column);
        if (!empty($where)) {
            $this->perintah->where($where);
        }
        if (!empty($wherein)) {
            $this->perintah->whereIn(key($wherein), $wherein[key($wherein)]);
        }
        if (!empty($like)) {
            $this->perintah->like($like);
        }
        if (!empty($groupby)) {
            $this->perintah->groupBy($groupby);
        }
        if (!empty($orderBy)) {
            $this->perintah->orderBy(key($orderBy), $orderBy[key($orderBy)]);
        }

        return $this->perintah->get();
    }

    // PROSES INSERT
    public function getInsert($table, $data)
    {
        return $this->db->table($table)->insert($data);
    }

    // PROSES UPDATE
    public function getUpdate($table, $data, $where)
    {
        return $this->db->table($table)->where($where)->update($data);
    }

    // PROSES DELETE
    public function getDelete($table, $where)
    {
        return $this->db->table($table)->where($where)->delete();
    }
}
