<?php

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function proses_login()
	{
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->load->model('Admin_model','proses_login');
		$data['log'] = $this->proses_login->login($username,$password);

		$cek = count($data['log']);

		if($cek > 0){
			$newdata = array(
			'id_user'=> $data['log'][0]['id_user'],
			'username' => $data['log'][0]['username'],
			'access' => $data['log'][0]['access']
			);
			$this->session->set_userdata($newdata);

			redirect(base_url().'admin/dashboard');
		} else {
			$this->session->set_flashdata('login_error', 'Email atau password salah');
			redirect(base_url().'admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin/');
	}

	public function dashboard()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/dashboard/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function edit_about()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','about');

		$t['data'] = $this->about->select_about($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/about/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_about()
	{
		$this->load->model('Admin_model','about');
		$this->about->proses_edit_about();

		redirect(base_url().'admin/edit_about/1');
	}

	public function products()
	{
		$this->load->model('Admin_model','products');
		$t['products'] = $this->products->getallproducts();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/products/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function add_products()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/products/add',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_add_product()
	{
		$this->load->model('Admin_model','products');
		$this->products->proses_add_product();

		redirect(base_url().'admin/products');
	}

	public function edit_product()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','products');

		$t['data'] = $this->products->select_product($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/products/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_product()
	{
		$this->load->model('Admin_model','products');
		$this->products->proses_edit_product();

		redirect(base_url().'admin/products');
	}

	public function delete_product()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','products');
		$this->products->proses_hapus_product($id);

		redirect(base_url().'admin/products');
	}

	public function whatsnew()
	{
		$this->load->model('Admin_model','whatsnew');
		$t['whatsnew'] = $this->whatsnew->getallwhatsnew();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/whatsnew/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function add_whatsnew()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/whatsnew/add',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_add_whatsnew()
	{
		$this->load->model('Admin_model','whatsnew');
		$this->whatsnew->proses_add_whatsnew();

		redirect(base_url().'admin/whatsnew');
	}

	public function edit_whatsnew()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','whatsnew');

		$t['data'] = $this->whatsnew->select_whatsnew($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/whatsnew/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_whatsnew()
	{
		$this->load->model('Admin_model','whatsnew');
		$this->whatsnew->proses_edit_whatsnew();

		redirect(base_url().'admin/whatsnew');
	}

	public function delete_whatsnew()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','whatsnew');
		$this->whatsnew->proses_hapus_whatsnew($id);

		redirect(base_url().'admin/whatsnew');
	}


	// VIDEOS
	public function videos()
	{
		$this->load->model('Admin_model','videos');
		$t['videos'] = $this->videos->getallvideos();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/videos/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function add_videos()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/videos/add',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_add_videos()
	{
		$this->load->model('Admin_model','videos');
		$this->videos->proses_add_videos();

		redirect(base_url().'admin/videos');
	}

	public function edit_videos()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','videos');

		$t['data'] = $this->videos->select_videos($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/videos/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_videos()
	{
		$this->load->model('Admin_model','videos');
		$this->videos->proses_edit_videos();

		redirect(base_url().'admin/videos');
	}

	public function delete_videos()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','videos');
		$this->videos->proses_hapus_videos($id);

		redirect(base_url().'admin/videos');
	}

	// ACNEFACTS
	public function acnefacts()
	{
		$this->load->model('Admin_model','acnefacts');
		$t['acnefacts'] = $this->acnefacts->getallacnefacts();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/acnefacts/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function add_acnefacts()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/acnefacts/add',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_add_acnefacts()
	{
		$this->load->model('Admin_model','acnefacts');
		$this->acnefacts->proses_add_acnefacts();

		redirect(base_url().'admin/acnefacts');
	}

	public function edit_acnefacts()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','acnefacts');

		$t['data'] = $this->acnefacts->select_acnefacts($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/acnefacts/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_acnefacts()
	{
		$this->load->model('Admin_model','acnefacts');
		$this->acnefacts->proses_edit_acnefacts();

		redirect(base_url().'admin/acnefacts');
	}

	public function delete_acnefacts()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','acnefacts');
		$this->acnefacts->proses_hapus_acnefacts($id);

		redirect(base_url().'admin/acnefacts');
	}

	// SLIDER
	public function sliders()
	{
		$this->load->model('Admin_model','sliders');
		$t['sliders'] = $this->sliders->getallsliders();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/sliders/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function add_sliders()
	{
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/sliders/add',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_add_sliders()
	{
		$this->load->model('Admin_model','sliders');
		$this->sliders->proses_add_sliders();

		redirect(base_url().'admin/sliders');
	}

	public function edit_sliders()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','sliders');

		$t['data'] = $this->sliders->select_sliders($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/sliders/edit',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function proses_edit_sliders()
	{
		$this->load->model('Admin_model','sliders');
		$this->sliders->proses_edit_sliders();

		redirect(base_url().'admin/sliders');
	}

	public function delete_sliders()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','sliders');
		$this->sliders->proses_hapus_sliders($id);

		redirect(base_url().'admin/sliders');
	}


	// CUSTOMERS
	public function customers()
	{
		$this->load->model('Admin_model','customers');
		$t['customers'] = $this->customers->getallcustomers();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/customers/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function view_customers()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','customers');

		$t['data'] = $this->customers->select_customers($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/customers/view',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	// MESSAGE
	public function messages()
	{
		$this->load->model('Admin_model','message');
		$t['message'] = $this->message->getallmessages();
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/messages/content',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}

	public function view_message()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','message');

		$t['data'] = $this->message->select_message($id);
		$t['info'] = $this->session->userdata('username');
		$a['header'] =  $this->load->view('admin/layout/header',$t, true);
		$a['footer'] =  $this->load->view('admin/layout/footer',null, true);
		$a['content'] =  $this->load->view('admin/messages/view',$t, true);

		$page = $this->load->view('admin/master',$a);

		return $page;
	}






public function user(){


	$this->load->model('Admin_model','user');

	$t['user'] = $this->user->user();

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/user/content',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}




public function edit_user(){

	$id = $this->uri->segment(3);

	$this->load->model('Admin_model','user');

	$t['data'] = $this->user->select_user($id);

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/user/edit_user',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}


public function proses_edit_user(){


	$this->load->model('Admin_model','edit_user');

	$this->edit_user->proses_edit_user();

	redirect(base_url().'admin/user');


}


public function about(){


	$this->load->model('Admin_model','about');

	$t['data'] = $this->about->select_about();

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/about/content',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}


public function service(){


	$this->load->model('Admin_model','service');

	$t['data'] = $this->service->select_service();

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/service/content',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}

public function proses_edit_service(){


	$this->load->model('Admin_model','edit_service');

	$this->edit_service->proses_edit_service();

	redirect(base_url().'admin/service');


}


public function profile(){


	$this->load->model('Admin_model','profile');

	$t['data'] = $this->profile->select_profile();

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/profile/content',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}


public function proses_edit_profile(){


	$this->load->model('Admin_model','edit_profile');

	$this->edit_profile->proses_edit_profile();

	redirect(base_url().'admin/profile');


}



public function blog(){


	$this->load->model('Admin_model','blog');

	$t['blog'] = $this->blog->blog();

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/blog/content',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}


public function add_blog(){


	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/blog/add_blog',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}

public function proses_add_blog(){

	$this->load->model('Admin_model','proses_add_blog');

	$this->proses_add_blog->proses_add_blog();

	redirect(base_url().'admin/blog');


}


public function edit_blog(){

	$id = $this->uri->segment(3);

	$this->load->model('Admin_model','data_blog');

	$t['data'] = $this->data_blog->select_blog($id);

	$t['info'] = $this->session->userdata('username');

	$a['nav'] =  $this->load->view('admin/layout/nav',$t, true);

	$a['top'] =  $this->load->view('admin/layout/top',$t, true);

	$a['header'] =  $this->load->view('admin/layout/header',$t, true);

	$a['footer'] =  $this->load->view('admin/layout/footer',null, true);

	$a['content'] =  $this->load->view('admin/blog/edit_blog',$t, true);

	$page = $this->load->view('admin/dashboard',$a);

	return $page;

}


public function proses_edit_blog(){

	$this->load->model('Admin_model','proses_edit_blog');

	$this->proses_edit_blog->proses_edit_blog();

	redirect(base_url().'admin/blog');


}


public function hapus_blog(){


	$id = $this->uri->segment(3);

	$this->load->model('Admin_model','proses_hapus_blog');

	$this->proses_hapus_blog->proses_hapus_blog($id);

	redirect(base_url().'admin/blog');

}



}
