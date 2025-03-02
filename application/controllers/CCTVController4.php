 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class CCTVController4 extends CI_Controller
	{
		private $model;

		public function __construct()
		{
			parent::__construct();
			$this->load->model('CCTVModel4');
			$this->model = new CCTVModel4();
		}

		public function index()
		{
			$links = $this->model->getLinks();
			$this->load->view('template/header');
			$this->load->view('cctv_view4', ['links' => $links]);
			// $this->load->view('template/footer');
		}
	}
