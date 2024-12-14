-- Active: 1725373096967@@127.0.0.1@3306@sipp_4
SELECT 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara.tanggal_pendaftaran) = YEAR(CURRENT_DATE) AND MONTH(perkara.tanggal_pendaftaran) = MONTH(CURRENT_DATE)) 
    - 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara_putusan.tanggal_putusan) = YEAR(CURRENT_DATE) AND MONTH(perkara_putusan.tanggal_putusan) = MONTH(CURRENT_DATE)) 
    AS sisa_perkara_bulan_ini,
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara.tanggal_pendaftaran) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(perkara.tanggal_pendaftaran) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)) 
    - 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara_putusan.tanggal_putusan) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(perkara_putusan.tanggal_putusan) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)) 
    AS sisa_perkara_bulan_lalu,
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara.tanggal_pendaftaran) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH) AND MONTH(perkara.tanggal_pendaftaran) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH)) 
    - 
    (SELECT COUNT(*) 
     FROM perkara
     LEFT JOIN perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
     LEFT JOIN perkara_efiling ON perkara_efiling_id.efiling_id = perkara_efiling.efiling_id
     LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id
     WHERE YEAR(perkara_putusan.tanggal_putusan) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH) AND MONTH(perkara_putusan.tanggal_putusan) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH)) 
    AS sisa_perkara_dua_bulan_lalu
