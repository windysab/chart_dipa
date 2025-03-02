<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lipa8_model extends CI_Model {

    public function get_report_data() {
        $query = $this->db->query("
            SELECT jp.nama AS jenis_perkara, 
                SUM(CASE WHEN LEFT(vpk.tanggal_pendaftaran,7) < '2025-01' AND ((vpk.tanggal_putusan IS NULL) OR (LEFT(vpk.tanggal_putusan,7) >= '2025-01')) THEN 1 ELSE 0 END) AS sisa_lalu, 
                SUM(CASE WHEN LEFT(vpk.tanggal_pendaftaran,7) ='2025-01' THEN 1 ELSE 0 END) AS diterima_bulan_ini, 
                SUM(CASE WHEN ((LEFT(vpk.tanggal_putusan,7)='2025-01' AND vpk.`status_putusan_id` IN (7,67,85)) OR LEFT(vpk.tanggal_cabut,7)='2025-01') THEN 1 ELSE 0 END) AS dicabut, 
                SUM(CASE WHEN LEFT(vpk.tanggal_putusan,7)='2025-01' AND vpk.`status_putusan_id`=62 THEN 1 ELSE 0 END) AS dikabulkan, 
                SUM(CASE WHEN LEFT(vpk.tanggal_putusan,7)='2025-01' AND (vpk.`status_putusan_id`=63 OR vpk.`status_putusan_id`=92) THEN 1 ELSE 0 END) AS ditolak, 
                SUM(CASE WHEN LEFT(vpk.tanggal_putusan,7)='2025-01' AND vpk.`status_putusan_id`=64 THEN 1 ELSE 0 END) AS tidak_dapat_diterima, 
                SUM(CASE WHEN LEFT(vpk.tanggal_putusan,7)='2025-01' AND (vpk.`status_putusan_id`=65 OR vpk.`status_putusan_id`=93) THEN 1 ELSE 0 END) AS digugurkan, 
                SUM(CASE WHEN LEFT(vpk.tanggal_putusan,7)='2025-01' AND vpk.`status_putusan_id`=66 THEN 1 ELSE 0 END) AS dicoret_dari_register 
            FROM jenis_perkara jp 
            LEFT JOIN (
                SELECT perkara.tanggal_pendaftaran, perkara.jenis_perkara_id, perkara_putusan.status_putusan_id, perkara_putusan.tanggal_cabut, perkara_putusan.tanggal_putusan 
                FROM perkara 
                LEFT JOIN perkara_putusan ON perkara_putusan.perkara_id=perkara.perkara_id
            ) AS vpk ON jp.id=vpk.jenis_perkara_id 
            WHERE (jp.id >=341 AND jp.id<=371) 
            GROUP BY jp.nama 
            ORDER BY jp.id
        ");
        return $query->result_array();
    }
}
?>
