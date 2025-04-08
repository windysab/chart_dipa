<?php
class CCTVModel3 extends CI_Model
{
	private $links = [
        'Halaman Parkir' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=883576768194955166649178',
        'ruang_tunggu' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=303329746330290962284656',
        'PTSP' => 'https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=514391471773000873180345'
    ];

	public function getLinks()
	{
		return $this->links;
	}

	public function getPerkaraData($year, $month)
	{
		$query = $this->db->query("
            SELECT jenis_perkara_nama, tanggal_pendaftaran, COUNT(*) AS jumlah_perkara
            FROM perkara
            LEFT JOIN perkara_penetapan ON perkara.perkara_id = perkara_penetapan.perkara_id
            LEFT JOIN perkara_pihak1 ON perkara.perkara_id = perkara_pihak1.perkara_id
            WHERE 
                YEAR(tanggal_pendaftaran) = ? AND MONTH(tanggal_pendaftaran) = ?
                AND perkara_pihak1.pihak_id != ? AND perkara_pihak1.urutan = ?
            GROUP BY jenis_perkara_nama, tanggal_pendaftaran
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
        ", [$year, $month, 0, 1]); // Pastikan parameter diisi dengan nilai yang sesuai
		return $query->result();
	}

	public function getTotalPerkaraData($year, $month)
	{
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
                YEAR(perkara.tanggal_pendaftaran) = ? AND MONTH(perkara.tanggal_pendaftaran) = ?
        ", [$year, $month]);
		return $query->row();
	}

	public function getMediasiData($year, $month)
	{
		$query = $this->db->query("
            SELECT hasil_mediasi, COUNT(*) AS jumlah
            FROM perkara p
            LEFT JOIN perkara_mediasi a ON p.perkara_id = a.perkara_id
            LEFT JOIN perkara_jadwal_mediasi b ON a.mediasi_id = b.mediasi_id
            LEFT JOIN perkara_putusan c ON p.perkara_id = c.perkara_id
            WHERE YEAR(dimulai_mediasi) = ? AND MONTH(dimulai_mediasi) = ?
            GROUP BY hasil_mediasi
        ", [$year, $month]);
		$result = $query->result();
		$data = ['D' => 0, 'S' => 0, 'T' => 0, 'Y2' => 0, 'Y1' => 0];
		foreach ($result as $row) {
			$data[$row->hasil_mediasi] = $row->jumlah;
		}
		return $data;
	}

	public function getJumlahPerkaraTerdaftar($year, $month)
	{
		$query = $this->db->query("
            SELECT COUNT(*) as jumlah_perkara
            FROM perkara
            LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
            LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
            LEFT JOIN perkara_putusan on perkara.perkara_id = perkara_putusan.perkara_id
            WHERE YEAR(perkara.tanggal_pendaftaran) = ? AND MONTH(perkara.tanggal_pendaftaran) = ?
        ", [$year, $month]);
		return $query->row()->jumlah_perkara;
	}

	public function getJumlahPerkaraDiputus($year, $month)
	{
		$query = $this->db->query("
            SELECT COUNT(*) AS jumlah_perkara
            FROM perkara
            LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
            LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
            LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
            WHERE YEAR(perkara_putusan.tanggal_putusan) = ? AND MONTH(perkara_putusan.tanggal_putusan) = ?
        ", [$year, $month]);
		return $query->row()->jumlah_perkara;
	}

	public function getSisaPerkara($year, $month)
	{
		$query = $this->db->query("
            SELECT 
                (SELECT COUNT(*) 
                 FROM perkara
                 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
                 LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
                 LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
                 WHERE YEAR(perkara.tanggal_pendaftaran) = ? AND MONTH(perkara.tanggal_pendaftaran) = ?) 
                - 
                (SELECT COUNT(*) 
                 FROM perkara
                 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
                 LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
                 LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
                 WHERE YEAR(perkara_putusan.tanggal_putusan) = ? AND MONTH(perkara_putusan.tanggal_putusan) = ?) 
                AS sisa_perkara
        ", [$year, $month, $year, $month]);
		return $query->row()->sisa_perkara;
	}

	public function getSisaPerkaraBulanSebelumnya($year, $month)
	{
		// Menghitung bulan sebelumnya
		$previous_month = $month - 1;
		if ($previous_month == 0) {
			$previous_month = 12;
			$year -= 1;
		}

		// Menjalankan query SQL untuk menghitung sisa perkara
		$query = $this->db->query("
        SELECT 
		(SELECT COUNT(*) 
             FROM perkara
             LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
             LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
             LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
             WHERE YEAR(perkara_putusan.tanggal_putusan) = ? AND MONTH(perkara_putusan.tanggal_putusan) = ?) 
			 -
            (SELECT COUNT(*) 
             FROM perkara
             LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
             LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
             LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
             WHERE YEAR(perkara.tanggal_pendaftaran) = ? AND MONTH(perkara.tanggal_pendaftaran) = ?) 
            AS sisa_perkara
    ", [$year, $previous_month, $year, $previous_month]);

		// Mengembalikan hasil query sebagai jumlah sisa perkara
		return $query->row()->sisa_perkara;
	}

	public function getViewCount()
	{
		$query = $this->db->query("SELECT view_count FROM view_stats WHERE page_name = 'cctv_view3'");
		if ($query->num_rows() > 0) {
			return $query->row()->view_count;
		} else {
			// Jika tidak ada baris yang sesuai, tambahkan baris baru dengan view_count = 0
			$this->db->query("INSERT INTO view_stats (page_name, view_count) VALUES ('cctv_view3', 0)");
			return 0;
		}
	}

	public function incrementViewCount()
	{
		$this->db->query("UPDATE view_stats SET view_count = view_count + 1 WHERE page_name = 'cctv_view3'");
	}

	public function getDailyViewCount()
	{
		$query = $this->db->query("SELECT COUNT(*) AS daily_count FROM view_logs WHERE page_name = 'cctv_view3' AND DATE(view_date) = CURDATE()");
		return $query->row()->daily_count;
	}

	public function getMonthlyViewCount()
	{
		$query = $this->db->query("SELECT COUNT(*) AS monthly_count FROM view_logs WHERE page_name = 'cctv_view3' AND MONTH(view_date) = MONTH(CURDATE()) AND YEAR(view_date) = YEAR(CURDATE())");
		return $query->row()->monthly_count;
	}

	public function getTotalViewCount()
	{
		$query = $this->db->query("SELECT COUNT(*) AS total_count FROM view_logs WHERE page_name = 'cctv_view3'");
		return $query->row()->total_count;
	}

	public function logView()
	{
		$this->db->query("INSERT INTO view_logs (page_name, view_date) VALUES ('cctv_view3', NOW())");
	}

	public function getEfilingData($year, $month)
	{
		$query = $this->db->query("
			SELECT 
				(SELECT COUNT(*) FROM perkara 
				 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id 
				 WHERE YEAR(perkara.tanggal_pendaftaran) = ? 
				 AND MONTH(perkara.tanggal_pendaftaran) = ?) AS masuk_bulan_ini,
				(SELECT COUNT(*) FROM perkara 
				 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id 
				 LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id 
				 WHERE YEAR(perkara_putusan.tanggal_putusan) = ? 
				 AND MONTH(perkara_putusan.tanggal_putusan) = ?) AS putus_bulan_ini,
				(SELECT COUNT(*) FROM perkara 
				 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id 
				 LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id 
				 WHERE YEAR(perkara.tanggal_pendaftaran) <= ? 
				 AND MONTH(perkara.tanggal_pendaftaran) < ? 
				 AND (perkara_putusan.tanggal_putusan IS NULL OR perkara_putusan.tanggal_minutasi IS NULL)) AS sisa_bulan_lalu,
				(SELECT COUNT(*) FROM perkara 
				 LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id 
				 LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id 
				 WHERE YEAR(perkara.tanggal_pendaftaran) <= ? 
				 AND MONTH(perkara.tanggal_pendaftaran) <= ? 
				 AND (perkara_putusan.tanggal_putusan IS NULL OR perkara_putusan.tanggal_minutasi IS NULL)) AS sisa_bulan_ini
		", [$year, $month, $year, $month, $year, $month, $year, $month]);
		return $query->row();
	}
}
