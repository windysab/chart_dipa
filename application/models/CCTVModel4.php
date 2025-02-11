<?php
class CCTVModel4 extends CI_Model
{
	private $links = [
		'PTSP' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=846338227280923732711848',
		'Ruang Tunggu Sidang' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=303329746330290962284656',
		'Kantin/Mushola/Halaman Parkir' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=883576768194955166649178'
	];

	public function getLinks()
	{
		return $this->links;
	}
}
