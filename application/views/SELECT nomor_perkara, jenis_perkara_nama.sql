SELECT nomor_perkara, jenis_perkara_nama, majelis_hakim_nama, panitera_pengganti_text, tanggal_pendaftaran, penetapan_majelis_hakim, penetapan_hari_sidang, sidang_pertama, tanggal_putusan, status_putusan.`nama` AS amar, pekerjaan, perkara_pihak2.alamat AS alamat_pihak2, prodeo, pihak.email AS email_pihak1 
FROM perkara
LEFT JOIN perkara_penetapan ON perkara.perkara_id = perkara_penetapan.perkara_id
LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
LEFT JOIN status_putusan ON status_putusan.id = perkara_putusan.status_putusan_id 
LEFT JOIN perkara_pihak1 ON perkara.perkara_id = perkara_pihak1.perkara_id
LEFT JOIN perkara_pihak2 ON perkara.perkara_id = perkara_pihak2.perkara_id
LEFT JOIN pihak ON perkara_pihak1.pihak_id = pihak.id
LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
WHERE perkara_pihak1.pihak_id != '1'
AND perkara_pihak1.urutan = '1'
AND pekerjaan NOT LIKE '%Pensiunan%'
AND nomor_perkara = '7/Pdt.G/2024/PA.Amt'
GROUP BY perkara.perkara_id
ORDER BY tanggal_pendaftaran DESC
