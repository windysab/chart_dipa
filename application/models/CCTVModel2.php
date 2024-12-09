<?php
class CCTVModel2 extends CI_Model {
    private $links = [
        'ptsp' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=903585192303189000139601',
        'ruang_tunggu' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=748949181548419094064971',
        'kantin' => 'https://bjm1.cctvbadilag.my.id:5443/402556PAAMUNTAI/play.html?name=753561690560730572756385'
    ];

    public function getLinks() {
        return $this->links;
    }

    public function getPerkaraData() {
        $query = $this->db->query("
            SELECT 
                COUNT(perkara.perkara_id) AS total_perkara,
                COUNT(perkara_efiling_id.perkara_id) AS total_perkara_ecourt,
                (COUNT(perkara_efiling_id.perkara_id) * 100.0 / COUNT(perkara.perkara_id)) AS persen_perkara_ecourt,
                (COUNT(perkara.perkara_id) - COUNT(perkara_efiling_id.perkara_id)) AS total_perkara_non_ecourt
            FROM 
                perkara
            LEFT JOIN 
                perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
            WHERE 
                YEAR(perkara.tanggal_pendaftaran) = YEAR(CURDATE())
        ");
        return $query->row();
    }
}
?>
