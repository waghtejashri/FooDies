<?php

class Comment extends CI_Controller
{
    function add_comment()
    {
        // if(!$this->input->post())
        // {
        //     redirect(base_url().'index.php/home/post'.$postID);
        // }
        
        // $user_type = $this->session->userdata('user_type');
        // if(!$user_type)
        // {
        //     redirect(base_url().'index.php/users/login');
        // }
        
        $this->load->model('comment_model');
        $data = array(
            'post_id' => $this->input->post('pid'),
            'user_id' => $this->session->userdata('user_id'),
            'comment' => $this->input->post('comment'),
        );
        $this->comment_model->add_comment($data);
        redirect(base_url().'index.php/home');///post/'.$postID);
    }
}