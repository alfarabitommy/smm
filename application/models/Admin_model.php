<?php

class Admin_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'file'));
	}


	public function login($username, $password)
	{
		$sql = $this->db->query("select * from user where username='" . $username . "' and password='" . $password . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function login_user($email, $password)
	{
		$sql = $this->db->query("select * from customers where email='" . $email . "' and password='" . $password . "'");
		$data = $sql->result_array();

		return $data;
	}

	//model dashboard 

	public function getakumulasiiklans()
	{
		$sql = $this->db->query("select count(campaign_name) as cn, sum(jangkauan) as jw , sum(impresi) as imp , sum(jumlah_dibelanjakan) as bya from tbl_iklans");
		$data = $sql->result_array();
		return $data;
	}

	public function getakumulasikols1()
	{
		$sql = $this->db->query("select count(id) as total_kol, sum(followers_instagram+followers_tiktok) as total_follower from tbl_kols");
		$data = $sql->result_array();

		return $data;
	}

	public function getakumulasikols2()
	{
		$sql = $this->db->query("select product,count(product) as jml from `tbl_kols` group by product order by jml desc");
		$data = $sql->result_array();
		return $data;
	}

	public function gettotalsosmed()
	{
		$sql = $this->db->query("select sum(followers_instagram) as ig, sum(followers_tiktok) as tiktok from tbl_kols");
		$data = $sql->result_array();
		return $data;
	}

	// model untuk panel iklan
	public function getalliklans()
	{
		$sql = $this->db->query("select *, datediff(periode_berakhir,periode_mulai) as periode from tbl_iklans");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_add_iklan()
	{
		$date = date('Y-m-d H:i:s');
		$start = str_replace("T", " ", $this->input->post('periode_mulai'));
		$end = str_replace("T", " ", $this->input->post('periode_berakhir'));
		$data_file = array(
			'campaign_name' => $this->input->post('name'),
			'anggaran' => $this->input->post('anggaran'),
			'hasil' => $this->input->post('hasil'),
			'jangkauan' => $this->input->post('jangkauan'),
			'impresi' => $this->input->post('impresi'),
			'periode_mulai' => $start,
			'periode_berakhir' => $end,
			'jumlah_dibelanjakan' => $this->input->post('jumlah_dibelanjakan'),
			'date_created' => $date
		);

		$this->db->insert('tbl_iklans', $data_file);
	}

	public function select_iklan($id)
	{
		$sql = $this->db->query("select * from tbl_iklans where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_iklan()
	{
		$id = $this->input->post('id');
		$date = date('Y-m-d H:i:s');

		$start = str_replace("T", " ", $this->input->post('periode_mulai'));
		$end = str_replace("T", " ", $this->input->post('periode_berakhir'));

		$data_file = array(
			'campaign_name' => $this->input->post('name'),
			'anggaran' => $this->input->post('anggaran'),
			'hasil' => $this->input->post('hasil'),
			'jangkauan' => $this->input->post('jangkauan'),
			'impresi' => $this->input->post('impresi'),
			'periode_mulai' => $start,
			'periode_berakhir' => $end,
			'jumlah_dibelanjakan' => $this->input->post('jumlah_dibelanjakan'),
			'date_updated' => $date
		);

		$this->db->where('id', $id);
		$this->db->update('tbl_iklans', $data_file);
	}

	public function proses_hapus_iklan($id)
	{
		$sql = $this->db->query("delete from tbl_iklans where id='" . $id . "'");
		return $sql;
	}
	// end model untuk panel iklan

	// start model untuk KOL

	public function getallkols()
	{
		$sql = $this->db->query("select * from tbl_kols");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_add_kol()
	{
		$date = date('Y-m-d H:i:s');

		$uploadDate = str_replace("T", " ", $this->input->post('tanggal_upload'));
		$data_file = array(
			'nama' => $this->input->post('nama'),
			'whatsapp' => $this->input->post('whatsapp'),
			'platform' => $this->input->post('platform'),
			'tiktok_link' => $this->input->post('tiktok_link'),
			'instagram_link' => $this->input->post('instagram_link'),
			'alamat_domisili' => $this->input->post('alamat_domisili'),
			'followers_instagram' => $this->input->post('followers_instagram'),
			'followers_tiktok' => $this->input->post('followers_tiktok'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal_upload' => $uploadDate,
			'product' => $this->input->post('produk'),
			'created_at' => $date,
			'updated_at' => $date
		);

		$this->db->insert('tbl_kols', $data_file);
	}

	public function select_kol($id)
	{
		$sql = $this->db->query("select * from tbl_kols where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_kol()
	{
		$id = $this->input->post('id');
		$date = date('Y-m-d H:i:s');

		$uploadDate = str_replace("T", " ", $this->input->post('tanggal_upload'));
		$data_file = array(
			'nama' => $this->input->post('name'),
			'whatsapp' => $this->input->post('whatsapp'),
			'platform' => $this->input->post('platform'),
			'tiktok_link' => $this->input->post('tiktok_link'),
			'instagram_link' => $this->input->post('instagram_link'),
			'alamat_domisili' => $this->input->post('alamat_domisili'),
			'followers_instagram' => $this->input->post('followers_instagram'),
			'followers_tiktok' => $this->input->post('followers_tiktok'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal_upload' => $uploadDate,
			'product' => $this->input->post('produk'),
			'updated_at' => $date
		);

		$this->db->where('id', $id);
		$this->db->update('tbl_kols', $data_file);
	}

	public function proses_hapus_kol($id)
	{
		$sql = $this->db->query("delete from tbl_kols where id='" . $id . "'");
		return $sql;
	}

	// end model untuk KOL

	public function proses_add_customers()
	{
		$date = date('Y-m-d H:i:s');
		$data = array(
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'dob' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('dob')))),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'created_at' => $date
		);

		// die(var_dump($data));

		$this->db->insert('customers', $data);
	}

	// ABOUT
	public function proses_edit_about()
	{

		$id = $this->input->post('id');
		$date = date('Y-m-d H:i:s');

		$data_file = array(
			'lead' => $this->input->post('lead'),
			'content' => $this->input->post('content'),
			'modified_at' => $date
		);

		// die(var_dump($data_file));

		$this->db->where('id', $id);
		$this->db->update('about', $data_file);
	}

	public function select_about($id)
	{
		$sql = $this->db->query("select * from about where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function getallabouts()
	{
		$sql = $this->db->query("select * from about");
		$data = $sql->result_array();

		return $data;
	}

	// PRODUCTS
	public function getallproducts()
	{
		$sql = $this->db->query("select * from products");
		$data = $sql->result_array();

		return $data;
	}

	public function getallproductsrandom()
	{
		$sql = $this->db->query("select * from products order by rand()");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_add_product()
	{
		$date = date('Y-m-d H:i:s');
		$foto = str_replace(" ", "_", $_FILES['image1']['name']);
		$banner = str_replace(" ", "_", $_FILES['banner']['name']);
		// $foto2 = str_replace(" ","_",$_FILES['image2']['name']);
		// $foto3 = str_replace(" ","_",$_FILES['image3']['name']);
		// $foto4 = str_replace(" ","_",$_FILES['image4']['name']);

		if (!empty($foto) and !empty($banner)) {
			$tujuan_file = realpath(APPPATH . '../assets/products/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image1');
			$this->upload->data();

			$tujuan = realpath(APPPATH . '../assets/products/');
			$konfig = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfig);
			$this->upload->do_upload('banner');
			$this->upload->data();


			$data_file = array(
				'product_name' => $this->input->post('product_name'),
				'lead_desc' => $this->input->post('lead_desc'),
				'price' => $this->input->post('price'),
				'stock' => $this->input->post('stock'),
				'rating' => $this->input->post('rating'),
				'store_link' => $this->input->post('store_link'),
				'desc' => $this->input->post('desc'),
				'contains' => $this->input->post('contains'),
				'packaging' => $this->input->post('packaging'),
				'howto' => $this->input->post('howto'),
				'image1' => $foto,
				'banner' => $banner,
				// 'image2'=>$foto,
				// 'image3'=>$foto,
				// 'image4'=>$foto,
				// 'background'=>$foto,
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('products', $data_file);
		} else {
			$data_file = array(
				'product_name' => $this->input->post('product_name'),
				'lead_desc' => $this->input->post('lead_desc'),
				'price' => $this->input->post('price'),
				'stock' => $this->input->post('stock'),
				'rating' => $this->input->post('rating'),
				'store_link' => $this->input->post('store_link'),
				'desc' => $this->input->post('desc'),
				'contains' => $this->input->post('contains'),
				'packaging' => $this->input->post('packaging'),
				'howto' => $this->input->post('howto'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('products', $data_file);
		}
	}

	public function select_product($id)
	{
		$sql = $this->db->query("select * from products where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_product()
	{

		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$foto = str_replace(" ", "_", $_FILES['image1']['name']);
		$banner = str_replace(" ", "_", $_FILES['banner']['name']);

		if (!empty($foto) and !empty($banner)) {
			$tujuan_file = realpath(APPPATH . '../assets/products/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image1');
			$this->upload->data();




			$tujuan = realpath(APPPATH . '../admin/products/');
			$konfig = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfig);
			$this->upload->do_upload('banner');
			$this->upload->data();



			$data_file = array(
				'product_name' => $this->input->post('product_name'),
				'lead_desc' => $this->input->post('lead_desc'),
				'price' => $this->input->post('price'),
				'stock' => $this->input->post('stock'),
				'rating' => $this->input->post('rating'),
				'store_link' => $this->input->post('store_link'),
				'desc' => $this->input->post('desc'),
				'contains' => $this->input->post('contains'),
				'packaging' => $this->input->post('packaging'),
				'howto' => $this->input->post('howto'),
				'image1' => $foto,
				'banner' => $banner,
				// 'image2'=>$foto,
				// 'image3'=>$foto,
				// 'image4'=>$foto,
				// 'background'=>$foto,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('products', $data_file);
		} else {

			$data_file = array(
				'product_name' => $this->input->post('product_name'),
				'lead_desc' => $this->input->post('lead_desc'),
				'price' => $this->input->post('price'),
				'stock' => $this->input->post('stock'),
				'rating' => $this->input->post('rating'),
				'store_link' => $this->input->post('store_link'),
				'desc' => $this->input->post('desc'),
				'contains' => $this->input->post('contains'),
				'packaging' => $this->input->post('packaging'),
				'howto' => $this->input->post('howto'),
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);
			// die($id);
			// die(var_dump($data_file));

			$this->db->where('id', $id);
			$this->db->update('products', $data_file);
		}
	}

	public function proses_hapus_product($id)
	{

		$sql = $this->db->query("delete from products where id='" . $id . "'");
		return $sql;
	}

	// WHAT'S NEW
	public function getallwhatsnew($limit, $start)
	{
		$sql = $this->db->query("select * from whatsnew limit " . $limit . "," . $start . "");
		return $sql;
	}

	public function getallwhatsnews()
	{
		$sql = $this->db->query("select * from whatsnew")->result_array();
		return $sql;
	}

	public function 	gettotalwhatsnew()
	{
		$sql = $this->db->query("select * from whatsnew");
		$data = $sql->num_rows();
		return $data;
	}

	public function proses_add_whatsnew()
	{
		$date = date('Y-m-d H:i:s');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);

		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/whatsnew/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'image' => $foto,
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('whatsnew', $data_file);
		} else {
			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('whatsnew', $data_file);
		}
	}

	public function select_whatsnew($id)
	{
		$sql = $this->db->query("select * from whatsnew where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_whatsnew()
	{

		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);
		$tujuan_file = realpath(APPPATH . '../admin/whatsnew/');

		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/whatsnew/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'image' => $foto,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('whatsnew', $data_file);
		} else {

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('whatsnew', $data_file);
		}
	}

	public function proses_hapus_whatsnew($id)
	{

		$sql = $this->db->query("delete from whatsnew where id='" . $id . "'");
		return $sql;
	}


	// VIDEOS
	public function gettotalvideos()
	{
		$sql = $this->db->query("select * from videos");
		$data = $sql->num_rows();

		return $data;
	}

	public function getallvid($limit, $start)
	{
		$sql = $this->db->query("select * from videos limit " . $limit . "," . $start . "");
		return $sql;
	}

	public function proses_add_videos()
	{
		$date = date('Y-m-d H:i:s');
		$data_file = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'link' => $this->input->post('link'),
			'tags' => $this->input->post('tags'),
			'status' => $this->input->post('status'),
			'created_at' => $date
		);

		$this->db->insert('videos', $data_file);
	}

	public function select_videos($id)
	{
		$sql = $this->db->query("select * from videos where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_videos()
	{

		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');

		$data_file = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'link' => $this->input->post('link'),
			'tags' => $this->input->post('tags'),
			'status' => $this->input->post('status'),
			'created_at' => $date
		);

		$this->db->where('id', $id);
		$this->db->update('videos', $data_file);
	}

	public function proses_hapus_videos($id)
	{
		$sql = $this->db->query("delete from videos where id='" . $id . "'");
		return $sql;
	}


	// ACNEFACTS
	public function getallacnefacts($limit, $start)
	{
		$sql = $this->db->query("select * from acnefacts limit " . $limit . "," . $start . "");
		return $sql;
	}

	public function getallcomments($id, $type)
	{
		$sql = $this->db->query("select * from comment where segment = '" . $id . "' and type='" . $type . "'")->result_array();
		return $sql;
	}


	public function gettotalacnefacts()
	{
		$sql = $this->db->query("select * from acnefacts");
		$data = $sql->num_rows();
		return $data;
	}



	public function proses_add_acnefacts()
	{
		$date = date('Y-m-d H:i:s');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);

		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/acnefacts/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'image' => $foto,
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('acnefacts', $data_file);
		} else {
			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('acnefacts', $data_file);
		}
	}

	public function select_acnefacts($id)
	{
		$sql = $this->db->query("select * from acnefacts where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_acnefacts()
	{

		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);
		$tujuan_file = realpath(APPPATH . '../admin/acnefacts/');

		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/acnefacts/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'image' => $foto,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('acnefacts', $data_file);
		} else {

			$data_file = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'tags' => $this->input->post('tags'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('acnefacts', $data_file);
		}
	}

	public function proses_hapus_acnefacts($id)
	{

		$sql = $this->db->query("delete from acnefacts where id='" . $id . "'");
		return $sql;
	}

	// SLIDERS
	public function getallsliders()
	{
		$sql = $this->db->query("select * from sliders");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_add_sliders()
	{
		$date = date('Y-m-d H:i:s');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);
		$mobile = str_replace(" ", "_", $_FILES['mobile']['name']);

		if (!empty($foto) and !empty($mobile)) {
			$tujuan_file = realpath(APPPATH . '../assets/sliders/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$tujuan = realpath(APPPATH . '../assets/sliders/');
			$konfig = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfig);
			$this->upload->do_upload('mobile');
			$this->upload->data();

			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'image' => $foto,
				'mobile' => $mobile,
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('sliders', $data_file);
		} else {
			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'status' => $this->input->post('status'),
				'created_at' => $date
			);

			$this->db->insert('sliders', $data_file);
		}
	}

	public function select_sliders($id)
	{
		$sql = $this->db->query("select * from sliders where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_edit_sliders()
	{

		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$foto = str_replace(" ", "_", $_FILES['image']['name']);
		$mobile = str_replace(" ", "_", $_FILES['mobile']['name']);

		$tujuan_file = realpath(APPPATH . '../admin/sliders/');

		if (!empty($foto) && !empty($mobile)) {
			$tujuan_file = realpath(APPPATH . '../assets/sliders/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$tujuan = realpath(APPPATH . '../assets/sliders/');
			$konfig = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfig);
			$this->upload->do_upload('mobile');
			$this->upload->data();

			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'image' => $foto,
				'mobile' => $mobile,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('sliders', $data_file);
		} elseif (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/sliders/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('image');
			$this->upload->data();

			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'image' => $foto,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('sliders', $data_file);
		} elseif (!empty($mobile)) {
			$tujuan_file = realpath(APPPATH . '../assets/sliders/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('mobile');
			$this->upload->data();

			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'mobile' => $mobile,
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('sliders', $data_file);
		} else {

			$data_file = array(
				'title_1' => $this->input->post('title_1'),
				'title_2' => $this->input->post('title_2'),
				'lead_desc' => $this->input->post('lead_desc'),
				'link' => $this->input->post('link'),
				'status' => $this->input->post('status'),
				'modified_at' => $date
			);

			$this->db->where('id', $id);
			$this->db->update('sliders', $data_file);
		}
	}

	public function proses_hapus_sliders($id)
	{

		$sql = $this->db->query("delete from sliders where id='" . $id . "'");
		return $sql;
	}

	// CUSTOMERS
	public function getallcustomers()
	{
		$sql = $this->db->query("select * from customers");
		$data = $sql->result_array();

		return $data;
	}

	public function select_customers($id)
	{
		$sql = $this->db->query("select * from customers where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	// MESSAGES
	public function getallmessages()
	{
		$sql = $this->db->query("select * from contact");
		$data = $sql->result_array();

		return $data;
	}

	public function select_message($id)
	{
		$sql = $this->db->query("select * from contact where id='" . $id . "'");
		$data = $sql->result_array();

		return $data;
	}

	public function proses_add_message()
	{
		$date = date('Y-m-d H:i:s');
		$data_file = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message'),
			'created_at' => $date
		);

		$this->db->insert('contact', $data_file);
	}



	public function user()
	{

		$sql = $this->db->query("select * from user");

		$data = $sql->result_array();

		return $data;
	}


	public function select_user($id)
	{

		$sql = $this->db->query("select * from user where id_user='" . $id . "'");

		$data = $sql->result_array();

		return $data;
	}



	public function proses_add_user()
	{

		$data = array(
			'username' => $this->input->post('username'),

			'email' => $this->input->post('email'),

			'password' => md5($this->input->post('password')),

			'access' => $this->input->post('access')

		);

		$this->db->insert('user', $data);
	}


	public function proses_edit_user()
	{

		$id = $this->input->post('id_user');

		if ($this->input->post('password') != '') {

			$data = array(

				'username' => $this->input->post('username'),

				'email' => $this->input->post('email'),

				'password' => md5($this->input->post('password')),

				'access' => $this->input->post('access')

			);

			$this->db->where('id_user', $id);

			$this->db->update('user', $data);
		} else {

			$data = array(

				'username' => $this->input->post('username'),

				'email' => $this->input->post('email'),

				'access' => $this->input->post('access')

			);

			$this->db->where('id_user', $id);

			$this->db->update('user', $data);
		}
	}


	public function proses_hapus_user($id)
	{

		$sql = $this->db->query("delete from user where id_user='" . $id . "'");

		return $sql;
	}


	public function select_service()
	{

		$sql = $this->db->query("select * from service where id_service='1'");

		$data = $sql->result_array();

		return $data;
	}


	public function select_profile()
	{

		$sql = $this->db->query("select * from profile where id_profile='1'");

		$data = $sql->result_array();

		return $data;
	}


	public function proses_edit_service()
	{

		$id = $this->input->post('id_service');

		$data_file = array(
			'description' => $this->input->post('description')
		);

		$this->db->where('id_service', $id);
		$this->db->update('service', $data_file);
	}


	public function proses_edit_profile()
	{

		$id = $this->input->post('id_profile');

		$data_file = array(
			'description' => $this->input->post('description')
		);

		$this->db->where('id_profile', $id);
		$this->db->update('profile', $data_file);
	}



	public function blog()
	{

		$sql = $this->db->query("select * from blog");

		$data = $sql->result_array();

		return $data;
	}


	public function proses_add_blog()
	{

		$foto = str_replace(" ", "_", $_FILES['photo']['name']);
		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/all-images/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('photo');
			$this->upload->data();
			$data_file = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'photo' => $foto
			);
			$this->db->insert('blog', $data_file);
		} else {

			$data_file = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description')
			);
			$this->db->insert('blog', $data_file);
		}
	}



	public function proses_edit_blog()
	{


		$id = $this->input->post('id_blog');
		$foto = str_replace(" ", "_", $_FILES['photo']['name']);
		$tujuan_file = realpath(APPPATH . '../admin/all-images/');

		if (!empty($foto)) {
			$tujuan_file = realpath(APPPATH . '../assets/all-images/');
			$konfigurasi = array(
				'allowed_types' => 'jpg|jpeg|png|pdf|bmp|JPG',
				'upload_path' => $tujuan_file,
				'remove_spaces' => TRUE
			);
			$this->load->library('upload', $konfigurasi);
			$this->upload->do_upload('photo');
			$this->upload->data();

			$data_file = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'photo' => $foto
			);

			$this->db->where('id_blog', $id);
			$this->db->update('blog', $data_file);
		} else {

			$data_file = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description')
			);

			$this->db->where('id_blog', $id);
			$this->db->update('blog', $data_file);
		}
	}

	public function proses_hapus_blog($id)
	{

		$sql = $this->db->query("delete from blog where id_blog='" . $id . "'");
		return $sql;
	}


	public function select_blog($id)
	{

		$sql = $this->db->query("select * from blog where id_blog='" . $id . "'");

		$data = $sql->result_array();

		return $data;
	}


	public function proses_add_comment()
	{
		$tanggal = date('Y-m-d');
		$data_file = array(
			'email' => $this->input->post('email'),
			'segment' => $this->input->post('segment'),
			'type' => $this->input->post('type'),
			'tanggal' => $tanggal,
			'description' => $this->input->post('description')
		);

		$this->db->insert('comment', $data_file);
	}
}
