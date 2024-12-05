SELECT 
    all_kecamatan.KECAMATAN,
    COALESCE(subquery.PERKARA_MASUK, 0) AS PERKARA_MASUK,
    COALESCE(subquery.PERKARA_PUTUS, 0) AS PERKARA_PUTUS,
    COALESCE(subquery.PERKARA_TELAH_BHT, 0) AS PERKARA_TELAH_BHT,
    COALESCE(subquery.JUMLAH_AKTA_CERAI, 0) AS JUMLAH_AKTA_CERAI
FROM (
    SELECT 'Paringin' AS KECAMATAN
    UNION ALL SELECT 'Paringin Selatan'
    UNION ALL SELECT 'Lampihong'
    UNION ALL SELECT 'Batumandi'
    UNION ALL SELECT 'Awayan'
    UNION ALL SELECT 'Halong'
    UNION ALL SELECT 'Tebing Tinggi'
    UNION ALL SELECT 'Juai'
) AS all_kecamatan
LEFT JOIN (
    SELECT 
        KECAMATAN,
        SUM(CASE WHEN date_type = 'tanggal_pendaftaran' THEN COUNT ELSE 0 END) AS PERKARA_MASUK,
        SUM(CASE WHEN date_type = 'tanggal_putusan' THEN COUNT ELSE 0 END) AS PERKARA_PUTUS,
        SUM(CASE WHEN date_type = 'tanggal_bht' THEN COUNT ELSE 0 END) AS PERKARA_TELAH_BHT,
        SUM(CASE WHEN date_type = 'tgl_akta_cerai' THEN COUNT ELSE 0 END) AS JUMLAH_AKTA_CERAI
    FROM (
        SELECT 
			CASE 
				WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
				WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
				WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
				WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
				WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
				WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
				WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
				WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
				ELSE 'HULU SUNGAI UTARA'
				
			END AS KECAMATAN,
			'tgl_akta_cerai' AS date_type, COUNT(*) AS COUNT
		FROM perkara
		LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
		LEFT JOIN perkara_akta_cerai ON perkara.`perkara_id`=perkara_akta_cerai.`perkara_id`
		WHERE YEAR(tgl_akta_cerai)='$lap_tahun' AND MONTH(tgl_akta_cerai)='$lap_bulan'
		AND perkara_pihak1.`urutan`='1'
		GROUP BY KECAMATAN
		-- Repeat the above subquery for 'tanggal_pendaftaran', 'tanggal_putusan', 'tanggal_bht'
		UNION ALL
		SELECT 
			CASE 
			WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
				WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
				WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
				WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
				WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
				WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
				WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
				WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
				ELSE 'HULU SUNGAI UTARA'
			END AS KECAMATAN,
			'tanggal_pendaftaran' AS date_type, COUNT(*) AS COUNT
		FROM perkara
		LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
		WHERE YEAR(tanggal_pendaftaran)='$lap_tahun' AND MONTH(tanggal_pendaftaran)='$lap_bulan'
		AND perkara_pihak1.`urutan`='1'
		GROUP BY KECAMATAN
		UNION ALL
		SELECT 
		CASE 
		        WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
				WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
				WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
				WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
				WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
				WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
				WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
				WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
				ELSE 'HULU SUNGAI UTARA'
		END AS KECAMATAN,
		'tanggal_putusan' AS date_type, COUNT(*) AS COUNT
	FROM perkara
	LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
	LEFT JOIN perkara_putusan ON perkara.`perkara_id`=perkara_putusan.`perkara_id`
	WHERE YEAR(tanggal_putusan)='$lap_tahun' AND MONTH(tanggal_putusan)='$lap_bulan'
	AND perkara_pihak1.`urutan`='1'
	GROUP BY KECAMATAN
		UNION ALL
		SELECT 
			CASE 
			WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
				WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
				WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
				WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
				WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
				WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
				WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
				WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
				ELSE 'HULU SUNGAI UTARA'
			END AS KECAMATAN,
			'tanggal_bht' AS date_type, COUNT(*) AS COUNT
		FROM perkara
		LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
		LEFT JOIN perkara_putusan ON perkara.perkara_id=perkara_putusan.perkara_id
	LEFT JOIN perkara_akta_cerai ON perkara.perkara_id=perkara_akta_cerai.perkara_id
		WHERE YEAR(tanggal_bht)='$lap_tahun' AND MONTH(tanggal_bht)='$lap_bulan'
		AND perkara_pihak1.`urutan`='1'
		GROUP BY KECAMATAN
    ) AS subquery
    GROUP BY KECAMATAN
) AS subquery ON all_kecamatan.KECAMATAN = subquery.KECAMATAN
    

UNION ALL

SELECT 
    'TOTAL',
    SUM(COALESCE(subquery.PERKARA_MASUK, 0)) AS PERKARA_MASUK,
    SUM(COALESCE(subquery.PERKARA_PUTUS, 0)) AS PERKARA_PUTUS,
    SUM(COALESCE(subquery.PERKARA_TELAH_BHT, 0)) AS PERKARA_TELAH_BHT,
    SUM(COALESCE(subquery.JUMLAH_AKTA_CERAI, 0)) AS JUMLAH_AKTA_CERAI
FROM (
    SELECT 
        KECAMATAN,
        SUM(CASE WHEN date_type = 'tanggal_pendaftaran' THEN COUNT ELSE 0 END) AS PERKARA_MASUK,
        SUM(CASE WHEN date_type = 'tanggal_putusan' THEN COUNT ELSE 0 END) AS PERKARA_PUTUS,
        SUM(CASE WHEN date_type = 'tanggal_bht' THEN COUNT ELSE 0 END) AS PERKARA_TELAH_BHT,
        SUM(CASE WHEN date_type = 'tgl_akta_cerai' THEN COUNT ELSE 0 END) AS JUMLAH_AKTA_CERAI
    FROM (
        SELECT 
            CASE 
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
                WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
                WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
                WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
                WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
                WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
                WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
                ELSE 'HULU SUNGAI UTARA'
                
            END AS KECAMATAN,
            'tgl_akta_cerai' AS date_type, COUNT(*) AS COUNT
        FROM perkara
        LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
        LEFT JOIN perkara_akta_cerai ON perkara.`perkara_id`=perkara_akta_cerai.`perkara_id`
        WHERE YEAR(tgl_akta_cerai)='$lap_tahun' AND MONTH(tgl_akta_cerai)='$lap_bulan'
        AND perkara_pihak1.`urutan`='1'
        GROUP BY KECAMATAN
        -- Repeat the above subquery for 'tanggal_pendaftaran', 'tanggal_putusan', 'tanggal_bht'
        UNION ALL
        SELECT 
            CASE 
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
                WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
                WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
                WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
                WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
                WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
                WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
                ELSE 'HULU SUNGAI UTARA'
                
            END AS KECAMATAN,
            'tanggal_pendaftaran' AS date_type, COUNT(*) AS COUNT
        FROM perkara
        LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
        WHERE YEAR(tanggal_pendaftaran)='$lap_tahun' AND MONTH(tanggal_pendaftaran)='$lap_bulan'
        AND perkara_pihak1.`urutan`='1'
        GROUP BY KECAMATAN
        UNION ALL
        SELECT
        CASE 
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
                WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
                WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
                WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
                WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
                WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
                WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
                ELSE 'HULU SUNGAI UTARA'
        END AS KECAMATAN,
        'tanggal_putusan' AS date_type, COUNT(*) AS COUNT
    FROM perkara
    LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id`=perkara_putusan.`perkara_id`
    WHERE YEAR(tanggal_putusan)='$lap_tahun' AND MONTH(tanggal_putusan)='$lap_bulan'
    AND perkara_pihak1.`urutan`='1'
    GROUP BY KECAMATAN
        UNION ALL
        SELECT 
            CASE 
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin Selatan%' THEN 'Paringin Selatan'
                WHEN perkara_pihak1.`alamat` LIKE '%Paringin%' THEN 'Paringin'
                WHEN perkara_pihak1.`alamat` LIKE '%Lampihong%' THEN 'Lampihong'
                WHEN perkara_pihak1.`alamat` LIKE '%Batumandi%' THEN 'Batumandi'
                WHEN perkara_pihak1.`alamat` LIKE '%Awayan%' THEN 'Awayan'
                WHEN perkara_pihak1.`alamat` LIKE '%Halong%' THEN 'Halong'
                WHEN perkara_pihak1.`alamat` LIKE '%Tebing Tinggi%' THEN 'Tebing Tinggi'
                WHEN perkara_pihak1.`alamat` LIKE '%Juai%' THEN 'Juai'				
                ELSE 'HULU SUNGAI UTARA'
                
            END AS KECAMATAN,
            'tanggal_bht' AS date_type, COUNT(*) AS COUNT
        FROM perkara
        LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
        LEFT JOIN perkara_putusan ON perkara.perkara_id=perkara_putusan.perkara_id
    LEFT JOIN perkara_akta_cerai ON perkara.perkara_id=perkara_akta_cerai.perkara_id
        WHERE YEAR(tanggal_bht)='$lap_tahun' AND MONTH(tanggal_bht)='$lap_bulan'
        AND perkara_pihak1.`urutan`='1'
        GROUP BY KECAMATAN
    ) AS subquery
    GROUP BY KECAMATAN
) AS subquery
WHERE KECAMATAN IN ('Paringin', 'Paringin Selatan', 'Lampihong', 'Batumandi', '
Awayan', 'Halong', 'Tebing Tinggi', 'Juai')
