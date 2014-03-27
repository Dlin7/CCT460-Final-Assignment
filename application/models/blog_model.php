<?php
  class Blog_model extends CI_MODEL {
    function getPosts()
    {
      $query = $this->db->get('DATA');
      return $query->result_array();
    }

    function create_post()
    {
      $data['Title'] = $this->input->post('Title');
      $data['Content'] = $this->input->post('Content');
      $data['Category'] = $this->input->post('Category');


      return $this->db->insert('DATA', $data);

    }

    function getPost($id)
    {
      $query = $this->db->get_where('DATA', array('ID' => $id));
      return $query->result_array();
    }

    function update_post($id)
    {
      $data['Title'] = $this->input->post('Title');
      $data['Content'] = $this->input->post('Content');
      $data['Category'] = $this->input->post('Category');
      $this->db->where('ID', $id);
      $this->db->update('DATA', $data);
    }

    function delete_post($id) 
    { 
      $this->db->delete('DATA', array('ID' => $id)); 
    }
  }
