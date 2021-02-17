<?php
	class Posts extends CI_Controller{
		public function index(){


			$data['title'] = 'Latest Posts';
			$data['posts'] = $this->Monitor_model->get_posts();
			print_r($data['posts']);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}