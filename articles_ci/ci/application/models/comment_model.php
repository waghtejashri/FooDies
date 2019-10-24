<?php

class Comment_Model extends CI_Model
{
    function add_comment($data)
    {
        $this->db->insert('comments',$data);
        return $this->db->insert_id();
    }
    
    function get_comment($pid)
    {
        $query = $this->db
                            ->select(['comments.comment_id','comments.user_id','comments.comment','comments.date_added','users.uname'])
                            ->join('users','users.id = comments.user_id', 'left')
                            ->where('post_id',$pid)
                            ->order_by('date_added','asc')
                            ->from('comments','users')
                            ->get();
        return $query->result_array();
    }
}

