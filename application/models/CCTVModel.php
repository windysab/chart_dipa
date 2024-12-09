<?php
class CCTVModel {
    private $links = [
        'ptsp' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=903585192303189000139601',
        'ruang_tunggu' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=748949181548419094064971',
        'kantin' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=753561690560730572756385'
    ];

    public function getLinks() {
        return $this->links;
    }
}
?>
