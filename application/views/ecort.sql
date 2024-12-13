SELECT 
    COUNT(*) as jumlah_perkara
FROM
    perkara
LEFT JOIN 
    perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
LEFT JOIN perkara_putusan on perkara.perkara_id = perkara_putusan.perkara_id
WHERE 
    YEAR(perkara.tanggal_pendaftaran) = '2024' AND MONTH(perkara.tanggal_pendaftaran) = '11'
ORDER BY perkara.perkara_id;


SELECT 
    COUNT(*) AS jumlah_perkara
FROM
    perkara
LEFT JOIN 
    perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
WHERE 
   YEAR(perkara_putusan.tanggal_putusan) = '2024' AND MONTH(perkara_putusan.tanggal_putusan) = '11'
ORDER BY perkara.perkara_id;

SELECT 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara.tanggal_pendaftaran) = '2024' AND MONTH(perkara.tanggal_pendaftaran) = '11') 
    - 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara_putusan.tanggal_putusan) = '2024' AND MONTH(perkara_putusan.tanggal_putusan) = '11') 
    AS sisa_perkara;


SELECT 
    perkara.nomor_perkara, perkara.tanggal_pendaftaran
FROM
    perkara
LEFT JOIN 
    perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
LEFT JOIN ecourt_kuasa_hukum ON perkara_efiling_id.efiling_id = ecourt_kuasa_hukum.efiling_id
WHERE
	YEAR(perkara.tanggal_pendaftaran) = '2024' AND MONTH(perkara.tanggal_pendaftaran) = '11'
ORDER BY perkara.perkara_id;
  