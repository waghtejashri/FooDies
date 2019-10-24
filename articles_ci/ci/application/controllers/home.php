<?php
class Home extends MY_Controller{ 
public function index()
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');

			$this->load->library('pagination');

		$config = [
			'base_url'			=>	base_url('home'),
			'per_page'			=>	10,
			'total_rows'		=>	$this->articles->count_all_articles(),
			'full_tag_open'		=>	"<ul class='pagination'>",
			'full_tag_close'	=>	"</ul>",
			'first_tag_open'	=>	'<li>',
			'first_tag_close'	=>	'</li>',
			'last_tag_open'		=>	'<li>',
			'last_tag_close'	=>	'</li>',
			'next_tag_open'		=>	'<li>',
			'next_tag_close'	=>	'</li>',
			'prev_tag_open'		=>	'<li>',
			'prev_tag_close'	=>	'</li>',
			'num_tag_open'		=>	'<li>',
			'num_tag_close'		=>	'</li>',
			'cur_tag_open'		=>	"<li class='active'><a>",
			'cur_tag_close'		=>	'</a></li>',
		];

		$this->pagination->initialize($config);
		$articles = $this->articles->all_articles_list( $config['per_page'], $this->uri->segment(3) );

		$this->load->view('articles_list',['articles'=>$articles]);
	}

		public function search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','Query','required');
		// var_dump($this->form_validation->run());
		// exit;
		if ( ! $this->form_validation->run())
			return $this->index();

		$query = $this->input->post('query');
		return redirect("home/search_results/$query");
		
		
	}

	public function search_results( $query )
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');

			$this->load->library('pagination');

		$config = [
			'base_url'			=>	base_url("home/search_results/$query"),
			'per_page'			=>	5,
			'total_rows'		=>	$this->articles->count_search_results( $query ),
			'full_tag_open'		=>	"<ul class='pagination'>",
			'full_tag_close'	=>	"</ul>",
			'first_tag_open'	=>	'<li>',
			'uri_segment'		=>	4,
			'first_tag_close'	=>	'</li>',
			'last_tag_open'		=>	'<li>',
			'last_tag_close'	=>	'</li>',
			'next_tag_open'		=>	'<li>',
			'next_tag_close'	=>	'</li>',
			'prev_tag_open'		=>	'<li>',
			'prev_tag_close'	=>	'</li>',
			'num_tag_open'		=>	'<li>',
			'num_tag_close'		=>	'</li>',
			'cur_tag_open'		=>	"<li class='active'><a>",
			'cur_tag_close'		=>	'</a></li>',
		];

		$this->pagination->initialize($config);

		$articles = $this->articles->search( $query, $config['per_page'], $this->uri->segment(4));
		$this->load->view('search_results',compact('articles'));
	}

	public function article( $id )
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');
		$this->load->model('comment_model');
		$post_id = $id;
		
		$article =  $this->articles->find( $id );
        $comments = $this->comment_model->get_comment($id);
		$this->load->view('article_detail', compact('article') );

		$this->load->view('comment_view', compact('post_id','comments'));
	}   
}
	
?>