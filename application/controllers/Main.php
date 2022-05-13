<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$data["files"] = directory_map("./upload");
		$this->load->view('main.php', $data);
	}

	public function upload()
	{
		$config["upload_path"] = './upload/';
		$config["allowed_types"] = '*';
		$config["max_size"] = '20000';

		$this->load->library("upload", $config);

		//echo $this->upload->do_upload('file');

		if ($this->upload->do_upload('file')) {
			redirect("main");
		} else {
			echo "<script>alert('gagal di upload')</script>";
		}
	}

	public function delete($fileName)
	{
		$fileName = urldecode($fileName);

		if (unlink("./upload/$fileName")) {
			redirect("main");
		} else {
			echo "<script>alert('gagal di delete')</script>";
		}
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('title', $keyword);
		$this->db->or_like('detail_post', $keyword);
		$this->db->or_like('slug_title', $keyword);
		$query['post'] = $this->db->get('post')->result();
		$this->load->view('pencarian', $query);
	}
}
