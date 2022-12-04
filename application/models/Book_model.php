<?php

class Book_model extends CI_Model{

    public function getAllData()
    {
        return $this->db->get('books')->result_array();
    }

    public function getDataById($id)
    {
        // var_dump($id);die;
        return $this->db->get_where('books', ['id' => $id])->result_array();
    }

    public function insertData($data)
    {
        return $this->db->insert('books', $data);
    }

    public function deleteData($id)
    {
        return $this->db->delete('books',['id' => $id]);
    }

    public function updateData($data)
    {
        $this->db->where('id', $data['id']);
        // unset($data['id']);
        // var_dump($data['id']);die;
        return $this->db->update('books', $data);
    }

}
