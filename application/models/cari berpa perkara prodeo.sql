SELECT COUNT(*) AS jumlah_prodeo
FROM
    perkara
    LEFT JOIN perkara_penetapan ON perkara.`perkara_id` = perkara_penetapan.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id` = perkara_putusan.`perkara_id`
WHERE (
        (
            YEAR(tanggal_pendaftaran) = '2024'
            AND MONTH(tanggal_pendaftaran) = '07'
        )
        OR (
            YEAR(penetapan_majelis_hakim) = '2024'
            AND MONTH(penetapan_majelis_hakim) = '07'
        )
        OR (
            YEAR(penetapan_hari_sidang) = '2024'
            AND MONTH(penetapan_hari_sidang) = '07'
        )
        OR (
            YEAR(sidang_pertama) = '2024'
            AND MONTH(sidang_pertama) = '07'
        )
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) = '07'
        )
        OR tanggal_putusan IS NULL
    )
    AND prodeo = '1'
    AND (
        tanggal_putusan IS NULL
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) <= '07'
        )
    )
ORDER BY perkara.`perkara_id`

SELECT COUNT(*) AS jumlah_prodeo
FROM perkara
    LEFT JOIN perkara_penetapan ON perkara.`perkara_id` = perkara_penetapan.`perkara_id`
WHERE (
        (
            YEAR(tanggal_pendaftaran) = '2024'
            AND MONTH(tanggal_pendaftaran) = '08'
        )
        OR (
            YEAR(penetapan_majelis_hakim) = '2024'
            AND MONTH(penetapan_majelis_hakim) = '08'
        )
        OR (
            YEAR(penetapan_hari_sidang) = '2024'
            AND MONTH(penetapan_hari_sidang) = '08'
        )
    )
    AND prodeo = '1'

SELECT
    nomor_perkara,
    tanggal_pendaftaran,
    tanggal_putusan,
    status_putusan_nama,
    prodeo
FROM
    perkara
    LEFT JOIN perkara_penetapan ON perkara.`perkara_id` = perkara_penetapan.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id` = perkara_putusan.`perkara_id`
WHERE (
        (
            YEAR(tanggal_pendaftaran) = '2024'
            AND MONTH(tanggal_pendaftaran) = '07'
        )
        OR (
            YEAR(penetapan_majelis_hakim) = '2024'
            AND MONTH(penetapan_majelis_hakim) = '07'
        )
        OR (
            YEAR(penetapan_hari_sidang) = '2024'
            AND MONTH(penetapan_hari_sidang) = '07'
        )
        OR (
            YEAR(sidang_pertama) = '2024'
            AND MONTH(sidang_pertama) = '07'
        )
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) = '07'
        )
        OR tanggal_putusan IS NULL
    )
    AND prodeo = '1'
    AND (
        tanggal_putusan IS NULL
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) <= '07'
        )
    )
ORDER BY perkara.`perkara_id`

SELECT
    nomor_perkara,
    tanggal_pendaftaran,
    tanggal_putusan,
    status_putusan_nama,
    prodeo,
    sidang_keliling
FROM
    perkara
    LEFT JOIN perkara_penetapan ON perkara.`perkara_id` = perkara_penetapan.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id` = perkara_putusan.`perkara_id`
    LEFT JOIN perkara_jadwal_sidang ON perkara.`perkara_id` = perkara_jadwal_sidang.`perkara_id`
WHERE (
        (
            YEAR(tanggal_pendaftaran) = '2024'
            AND MONTH(tanggal_pendaftaran) = '07'
        )
        OR (
            YEAR(penetapan_majelis_hakim) = '2024'
            AND MONTH(penetapan_majelis_hakim) = '07'
        )
        OR (
            YEAR(penetapan_hari_sidang) = '2024'
            AND MONTH(penetapan_hari_sidang) = '07'
        )
        OR (
            YEAR(sidang_pertama) = '2024'
            AND MONTH(sidang_pertama) = '07'
        )
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) = '07'
        )
        OR tanggal_putusan IS NULL
    )
    And sidang_keliling = 'Y'
    AND prodeo = '1'
    AND (
        tanggal_putusan IS NULL
        OR (
            YEAR(tanggal_putusan) = '2024'
            AND MONTH(tanggal_putusan) <= '07'
        )
    )
ORDER BY perkara.`perkara_id`


SELECT
    COUNT(*) AS jumlah_sidang_keliling
FROM
    perkara
    LEFT JOIN perkara_penetapan ON perkara.`perkara_id` = perkara_penetapan.`perkara_id`
    LEFT JOIN perkara_putusan ON perkara.`perkara_id` = perkara_putusan.`perkara_id`
    LEFT JOIN perkara_jadwal_sidang ON perkara.`perkara_id` = perkara_jadwal_sidang.`perkara_id`
WHERE (
        (
            YEAR(tanggal_pendaftaran) = '2024'
            AND MONTH(tanggal_pendaftaran) = '05'
        )
      
    )
    And sidang_keliling = 'Y'
   
ORDER BY perkara.`perkara_id`
