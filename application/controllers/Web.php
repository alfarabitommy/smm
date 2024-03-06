<?php

class Web extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
	}

	public function index()
	{
		$this->load->model('Admin_model','home');
		$t['sliders'] = $this->home->getallsliders();
		$t['products'] = $this->home->getallproducts();
		$t['about'] = $this->home->getallabouts();
		$t['whatsnew'] = $this->home->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/home',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function register()
	{
		$this->load->model('Admin_model','register');
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->register->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',$t, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/register',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function login()
	{
		$this->load->model('Admin_model','login');
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->login->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',$t, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/login',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function proses_register()
	{
		$this->load->model('Admin_model','register');
		$this->register->proses_add_customers();

		$this->session->set_flashdata('registered', 'Thanks for registering, now you can enter your email and password for login');
		redirect(base_url().'web/login');
	}

	public function proses_login()
	{
		$this->load->library('session');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('Admin_model','proses_login_user');
		$data['log'] = $this->proses_login_user->login_user($email,$password);

		$cek = count($data['log']);

		if($cek > 0){
			$newdata = array(
			'id'=> $data['log'][0]['id'],
			'name' => $data['log'][0]['name'],
			);
			$this->session->set_userdata($newdata);

			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'You have entered wrong email or password');
			redirect(base_url().'web/login');
		}
	}

    public function products()
	{
		$this->load->model('Admin_model','products');
		$t['products'] = $this->products->getallproducts();
		$t['whatsnew'] = $this->products->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/products',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function productsdetail()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','details');
		$type="products";
		$t['data'] = $this->details->select_product($id);
		$t['info'] = $this->session->userdata('username');
		$t['random'] = $this->details->getallproductsrandom();
		$t['comment'] = $this->details->getallcomments($id,$type);
		$t['whatsnew'] = $this->details->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/product-detail',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

    public function whatsnew()
	{
		$this->load->model('Admin_model','whatsnew');

		$this->load->library('pagination');
		$config['base_url'] = base_url('web/whatsnew');
		$config['total_rows'] = $this->whatsnew->gettotalwhatsnew();
		$config['per_page'] = 2;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagination-bx col-lg-12 clearfix "><ul class = "custom-pagination pagination">';
		$config['full_tag_close']   = '</ul></div>';
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = '<li class = "active"><a href = "#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['next_tag_open']    = '<li>';
		$config['next_tagl_close']  = '</li>';
		$config['prev_tag_open']    = '<li>';
		$config['prev_tagl_close']  = 'Next</li>';
		$config['first_tag_open']   = '<li>';
		$config['first_tagl_close'] = '</li>';
		$config['last_tag_open']    = '<li>';
		$config['last_tagl_close']  = '</li>';
		$this->pagination->initialize($config);
		$d['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$t['whatsnew'] = $this->whatsnew->getallwhatsnew($d['page'],$config["per_page"])->result_array();
		$t['whatsnewfoot'] = $this->whatsnew->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/whatsnew',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function whatsnewdetail()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','details');
		$type="whatsnew";
		$t['data'] = $this->details->select_whatsnew($id);
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->details->getallwhatsnews();
		$t['comment'] = $this->details->getallcomments($id,$type);
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/whatsnew-detail',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

    public function acnefacts()
	{
		$this->load->model('Admin_model','acnefacts');
		$this->load->library('pagination');
		$config['base_url'] = base_url('web/acnefacts');
		$config['total_rows'] = $this->acnefacts->gettotalacnefacts();
		$config['per_page'] = 2;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagination-bx col-lg-12 clearfix "><ul class = "custom-pagination pagination">';
		$config['full_tag_close']   = '</ul></div>';
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = '<li class = "active"><a href = "#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['next_tag_open']    = '<li>';
		$config['next_tagl_close']  = '</li>';
		$config['prev_tag_open']    = '<li>';
		$config['prev_tagl_close']  = 'Next</li>';
		$config['first_tag_open']   = '<li>';
		$config['first_tagl_close'] = '</li>';
		$config['last_tag_open']    = '<li>';
		$config['last_tagl_close']  = '</li>';
		$this->pagination->initialize($config);
		$d['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$t['acnefacts'] = $this->acnefacts->getallacnefacts($d['page'],$config["per_page"])->result_array();
		$t['whatsnew'] = $this->acnefacts->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/acnefacts',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function acnefactsdetail()
	{
		$id = $this->uri->segment(3);
		$type= "acnefacts";
		$this->load->model('Admin_model','details');

		$t['data'] = $this->details->select_acnefacts($id);
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->details->getallwhatsnews();
		$t['comment'] = $this->details->getallcomments($id,$type);
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/acnefacts-detail',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

    public function videos()
	{
		$this->load->model('Admin_model','videos');


				$this->load->library('pagination');
				$config['base_url'] = base_url('web/videos');
				$config['total_rows'] = $this->videos->gettotalvideos();
				$config['per_page'] = 2;
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);
				$config['first_link']       = 'First';
				$config['last_link']        = 'Last';
				$config['next_link']        = 'Next';
				$config['prev_link']        = 'Prev';
				$config['full_tag_open']    = '<div class="pagination-bx col-lg-12 clearfix "><ul class = "custom-pagination pagination">';
				$config['full_tag_close']   = '</ul></div>';
				$config['num_tag_open']     = '<li>';
				$config['num_tag_close']    = '</li>';
				$config['cur_tag_open']     = '<li class = "active"><a href = "#">';
				$config['cur_tag_close']    = '</a></li>';
				$config['next_tag_open']    = '<li>';
				$config['next_tagl_close']  = '</li>';
				$config['prev_tag_open']    = '<li>';
				$config['prev_tagl_close']  = 'Next</li>';
				$config['first_tag_open']   = '<li>';
				$config['first_tagl_close'] = '</li>';
				$config['last_tag_open']    = '<li>';
				$config['last_tagl_close']  = '</li>';
				$this->pagination->initialize($config);
				$d['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				$t['videos'] = $this->videos->getallvid($d['page'],$config["per_page"])->result_array();


		$t['whatsnew'] = $this->videos->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/videos',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function videosdetail()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','details');
		$type= "videos";
		$t['data'] = $this->details->select_videos($id);
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->details->getallwhatsnews();
		$t['comment'] = $this->details->getallcomments($id,$type);
		$a['header'] =  $this->load->view('web/layout/header',null, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/videos-detail',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function contact()
	{
		$this->load->model('Admin_model','contact');
		$t['info'] = $this->session->userdata('username');
		$t['whatsnew'] = $this->contact->getallwhatsnews();
		$a['header'] =  $this->load->view('web/layout/header',$t, true);
		$a['footer'] =  $this->load->view('web/layout/footer',$t, true);
		$a['content'] =  $this->load->view('web/contact',$t, true);

		$page = $this->load->view('web/master',$a);

		return $page;
	}

	public function proses_add_message()
	{
		$this->load->model('Admin_model','message');
		$this->message->proses_add_message();

		redirect(base_url().'web/contact');
	}

	public function add_comment()
	{
		$id = $this->uri->segment(3);
		$url = $this->input->post('type');
		$this->load->model('Admin_model','comment');
		$this->comment->proses_add_comment();
		redirect(base_url().'web/'.$url.'detail/'.$id);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
