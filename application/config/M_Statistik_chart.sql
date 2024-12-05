<?php
Class M_Statistik_chart extends CI_Model
{
    public function get_chart_data($year, $month)
    {
        $sql = "
            SELECT jenis_perkara_nama, COUNT(*) AS jumlah_perkara
            FROM perkara
            LEFT JOIN perkara_penetapan ON perkara.perkara_id = perkara_penetapan.perkara_id
            LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
            LEFT JOIN status_putusan ON status_putusan.id = perkara_putusan.status_putusan_id 
            LEFT JOIN perkara_pihak1 ON perkara.perkara_id = perkara_pihak1.perkara_id
            LEFT JOIN perkara_pihak2 ON perkara.perkara_id = perkara_pihak2.perkara_id
            LEFT JOIN pihak ON perkara_pihak1.pihak_id = pihak.id
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
        ";

$bindings = [$year, $month, '1', '1'];

$query = $this -> db -> query ($sql, $bindings);

return $query -> result ();

} } ?> 