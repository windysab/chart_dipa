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
            SELECT jenis_perkara_nama, COUNT(*) AS jumlah_perkara
            FROM perkara
            LEFT JOIN perkara_penetapan ON perkara.perkara_id = perkara_penetapan.perkara_id
            LEFT JOIN perkara_pihak1 ON perkara.perkara_id = perkara_pihak1.perkara_id
            WHERE 
                YEAR(tanggal_pendaftaran) = ? AND MONTH(tanggal_pendaftaran) = ?
                AND perkara_pihak1.pihak_id != ?
                AND perkara_pihak1.urutan = ?
            GROUP BY jenis_perkara_nama
            ORDER BY 
                CASE 
                    WHEN jenis_perkara_nama LIKE '%cerai gugat%' THEN 1
                    WHEN jenis_perkara_nama LIKE '%cerai talak%' THEN 2
                    WHEN jenis_perkara_nama LIKE '%Asal Usul Anak%' THEN 3
                    WHEN jenis_perkara_nama LIKE '%Istbat Nikah%' THEN 4
                    WHEN jenis_perkara_nama LIKE '%dispensasi nikah%' THEN 5
                    WHEN jenis_perkara_nama LIKE '%ahli waris%' THEN 6
                    ELSE 7 
                END
        ");
        return $query->row();
    }
}
?>
