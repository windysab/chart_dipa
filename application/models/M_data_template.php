
<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_data_template extends CI_Model
{
    function data_tamplate($nomor_perkara)
    {
        $query = $this->db->query("SELECT nomor_perkara, jenis_perkara_nama, perkara_penetapan.majelis_hakim_text , perkara_penetapan.panitera_pengganti_text, perkara_penetapan.jurusita_text, tanggal_transaksi, tanggal_pendaftaran, perkara_penetapan.penetapan_majelis_hakim, penetapan_hari_sidang, sidang_pertama, tanggal_putusan, tanggal_minutasi,tanggal_bht, mediator_text, tanggal_penetapan_sidang_ikrar, tgl_ikrar_talak, status_putusan.`nama` AS amar, faktor_perceraian.`nama` AS faktor_perceraian, perkara_biaya.`jumlah` AS `jumlah_biaya`, nomor_akta_cerai, pekerjaan, perkara_pihak2.alamat AS alamat_pihak2, prodeo, pihak.email AS email_pihak1 
		FROM perkara
      
        LEFT JOIN perkara_penetapan ON perkara.perkara_id = perkara_penetapan.perkara_id
        LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
        LEFT JOIN status_putusan ON status_putusan.id = perkara_putusan.status_putusan_id 
        LEFT JOIN perkara_pihak1 ON perkara.perkara_id = perkara_pihak1.perkara_id
        LEFT JOIN perkara_pihak2 ON perkara.perkara_id = perkara_pihak2.perkara_id
		LEFT JOIN  perkara_akta_cerai ON perkara.perkara_id = perkara_akta_cerai.perkara_id
		LEFT JOIN  perkara_mediasi ON perkara.perkara_id = perkara_mediasi.perkara_id
		LEFT JOIN perkara_ikrar_talak ON perkara.`perkara_id`=perkara_ikrar_talak.`perkara_id`
        LEFT JOIN faktor_perceraian  ON faktor_perceraian.`id` = perkara_akta_cerai.`faktor_perceraian_id`
		LEFT JOIN perkara_biaya ON perkara.perkara_id = perkara_biaya.perkara_id
        LEFT JOIN pihak ON perkara_pihak1.pihak_id = pihak.id
        LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
        WHERE perkara_pihak1.pihak_id != '1'
        AND perkara_pihak1.urutan = '1'
        AND pekerjaan NOT LIKE '%Pensiunan%'
        AND nomor_perkara = ".$this->db->escape($nomor_perkara)."
        GROUP BY perkara.perkara_id
        ORDER BY tanggal_pendaftaran DESC
        ");
        return $query->result();
    }
}
