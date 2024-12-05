SELECT 
    locations.KECAMATAN,
    COALESCE(SUM(CASE WHEN subquery.date_type = 'tanggal_pendaftaran' THEN subquery.COUNT ELSE 0 END), 0) AS PERKARA_MASUK,
    COALESCE(SUM(CASE WHEN subquery.date_type = 'tanggal_putusan' THEN subquery.COUNT ELSE 0 END), 0) AS PERKARA_PUTUS
FROM (
    SELECT 'Danau Panggang' AS KECAMATAN
    UNION ALL SELECT 'Babirik'
    UNION ALL SELECT 'Sungai Pandan'
    UNION ALL SELECT 'Amuntai Selatan'
    UNION ALL SELECT 'Amuntai Tengah'
    UNION ALL SELECT 'Amuntai Utara'
    UNION ALL SELECT 'Banjang'
    UNION ALL SELECT 'Haur Gading'
    UNION ALL SELECT 'Paminggir'
    UNION ALL SELECT 'Sungai Tabukan'
) AS locations
LEFT JOIN (
    SELECT 
        CASE 
            WHEN perkara_pihak1.`alamat` LIKE '%Danau Panggang%' THEN 'Danau Panggang'
            WHEN perkara_pihak1.`alamat` LIKE '%Babirik%' THEN 'Babirik'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Pandan%' THEN 'Sungai Pandan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Selatan%' THEN 'Amuntai Selatan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Tengah%' THEN 'Amuntai Tengah'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Utara%' THEN 'Amuntai Utara'
            WHEN perkara_pihak1.`alamat` LIKE '%Banjang%' THEN 'Banjang'
            WHEN perkara_pihak1.`alamat` LIKE '%Haur Gading%' THEN 'Haur Gading'
            WHEN perkara_pihak1.`alamat` LIKE '%Paminggir%' THEN 'Paminggir'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Tabukan%' THEN 'Sungai Tabukan'
            ELSE 'BALANGAN'
        END AS KECAMATAN,
        'tanggal_pendaftaran' AS date_type, COUNT(*) AS COUNT
    FROM perkara
    LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
    WHERE YEAR(tanggal_pendaftaran)='$lap_tahun' AND MONTH(tanggal_pendaftaran)='$lap_bulan' AND  jenis_perkara_nama = '$jenis_perkara'
    AND perkara_pihak1.`urutan`='1'
    GROUP BY KECAMATAN
    UNION ALL
    SELECT 
        CASE 
            WHEN perkara_pihak1.`alamat` LIKE '%Danau Panggang%' THEN 'Danau Panggang'
            WHEN perkara_pihak1.`alamat` LIKE '%Babirik%' THEN 'Babirik'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Pandan%' THEN 'Sungai Pandan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Selatan%' THEN 'Amuntai Selatan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Tengah%' THEN 'Amuntai Tengah'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Utara%' THEN 'Amuntai Utara'
            WHEN perkara_pihak1.`alamat` LIKE '%Banjang%' THEN 'Banjang'
            WHEN perkara_pihak1.`alamat` LIKE '%Haur Gading%' THEN 'Haur Gading'
            WHEN perkara_pihak1.`alamat` LIKE '%Paminggir%' THEN 'Paminggir'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Tabukan%' THEN 'Sungai Tabukan'
            ELSE 'BALANGAN'
        END AS KECAMATAN,
        'tanggal_putusan' AS date_type, COUNT(*) AS COUNT
    FROM perkara
    LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id`=perkara_putusan.`perkara_id`
    WHERE YEAR(tanggal_putusan)='$lap_tahun' AND MONTH(tanggal_putusan)='$lap_bulan' AND  jenis_perkara_nama = '$jenis_perkara'
    AND perkara_pihak1.`urutan`='1'
    GROUP BY KECAMATAN
) AS subquery ON locations.KECAMATAN = subquery.KECAMATAN
GROUP BY locations.KECAMATAN

UNION ALL

SELECT 
    'TOTAL' AS KECAMATAN,
    SUM(CASE WHEN date_type = 'tanggal_pendaftaran' THEN COUNT ELSE 0 END) AS PERKARA_MASUK,
    SUM(CASE WHEN date_type = 'tanggal_putusan' THEN COUNT ELSE 0 END) AS PERKARA_PUTUS
FROM (
    SELECT 
        CASE 
            WHEN perkara_pihak1.`alamat` LIKE '%Danau Panggang%' THEN 'Danau Panggang'
            WHEN perkara_pihak1.`alamat` LIKE '%Babirik%' THEN 'Babirik'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Pandan%' THEN 'Sungai Pandan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Selatan%' THEN 'Amuntai Selatan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Tengah%' THEN 'Amuntai Tengah'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Utara%' THEN 'Amuntai Utara'
            WHEN perkara_pihak1.`alamat` LIKE '%Banjang%' THEN 'Banjang'
            WHEN perkara_pihak1.`alamat` LIKE '%Haur Gading%' THEN 'Haur Gading'
            WHEN perkara_pihak1.`alamat` LIKE '%Paminggir%' THEN 'Paminggir'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Tabukan%' THEN 'Sungai Tabukan'
            ELSE 'BALANGAN'
        END AS KECAMATAN,
        'tanggal_pendaftaran' AS date_type, COUNT(*) AS COUNT
    FROM perkara
    LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id` 
    WHERE YEAR(tanggal_pendaftaran)='$lap_tahun' AND MONTH(tanggal_pendaftaran)='$lap_bulan' AND  jenis_perkara_nama = '$jenis_perkara'
    AND perkara_pihak1.`urutan`='1'
    GROUP BY KECAMATAN
    UNION ALL
    SELECT 
        CASE 
            WHEN perkara_pihak1.`alamat` LIKE '%Danau Panggang%' THEN 'Danau Panggang'
            WHEN perkara_pihak1.`alamat` LIKE '%Babirik%' THEN 'Babirik'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Pandan%' THEN 'Sungai Pandan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Selatan%' THEN 'Amuntai Selatan'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Tengah%' THEN 'Amuntai Tengah'
            WHEN perkara_pihak1.`alamat` LIKE '%Amuntai Utara%' THEN 'Amuntai Utara'
            WHEN perkara_pihak1.`alamat` LIKE '%Banjang%' THEN 'Banjang'
            WHEN perkara_pihak1.`alamat` LIKE '%Haur Gading%' THEN 'Haur Gading'
            WHEN perkara_pihak1.`alamat` LIKE '%Paminggir%' THEN 'Paminggir'
            WHEN perkara_pihak1.`alamat` LIKE '%Sungai Tabukan%' THEN 'Sungai Tabukan'
            ELSE 'BALANGAN'
        END AS KECAMATAN,
        'tanggal_putusan' AS date_type, COUNT(*) AS COUNT
    FROM perkara
    LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id`=perkara_putusan.`perkara_id`
    WHERE YEAR(tanggal_putusan)='$lap_tahun' AND MONTH(tanggal_putusan)='$lap_bulan' AND  jenis_perkara_nama = '$jenis_perkara'
    AND perkara_pihak1.`urutan`='1'
    GROUP BY KECAMATAN
) AS subquery
WHERE KECAMATAN IN ('Danau Panggang', 'Babirik', 'Sungai Pandan', 'Amuntai Selatan', 'Amuntai Tengah', 'Amuntai Utara', 'Banjang', 'Haur Gading', 'Paminggir', 'Sungai Tabukan')
ORDER BY KECAMATAN
LIMIT 0, 1000;
