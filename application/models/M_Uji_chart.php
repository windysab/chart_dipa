<?php
Class M_Uji_chart extends CI_Model
{
  function uji_chart()
    // {
    //     $this->db->group_by('MONTH(tanggal_pendaftaran)');
    //     $this->db->select('MONTH(tanggal_pendaftaran) AS bulan');
    //     $this->db->select("count(*) as total");
    //     return $this->db->from('perkara')
    //       ->get()
    //       ->result();
    // }
    {
        $query = $this->db->query("select month(tanggal_pendaftaran) as bulan, count(*) as total
			from perkara
			where YEAR(tanggal_pendaftaran)='2021'
			group by month(tanggal_pendaftaran)
		");
		return $query->result();
}
}
?>