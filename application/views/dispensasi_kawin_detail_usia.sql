-- Query dispensasi kawin per kecamatan dengan detail usia dan status dikabulkan
SELECT
    CASE
        WHEN kecamatan = 'JUAI' THEN 1
        WHEN kecamatan = 'PARINGIN' THEN 2
        WHEN kecamatan = 'PARINGIN SELATAN' THEN 3
        WHEN kecamatan = 'AWAYAN' THEN 4
        WHEN kecamatan = 'TEBING TINGGI' THEN 5
        WHEN kecamatan = 'LAMPHONG' THEN 6
        WHEN kecamatan = 'HALONG' THEN 7
        WHEN kecamatan = 'BATUMANDI' THEN 8
        ELSE 9
    END as No,
    COALESCE(kecamatan, 'TIDAK DIKETAHUI') as Kecamatan,
    COUNT(DISTINCT perkara_id) as `Jumlah Perkara Diterima`,
    SUM(
        CASE
            WHEN (
                umur_mempelai >= 18
                AND umur_mempelai <= 19
            ) THEN 1
            ELSE 0
        END
    ) as `Umur 18 s/d 19 Tahun`,
    SUM(
        CASE
            WHEN umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Umur Dibawah 18 Tahun`,
    SUM(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN 1
            ELSE 0
        END
    ) as `Jumlah dikabulkan`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN pp1.alamat LIKE '%JUAI%' THEN 'JUAI'
                WHEN pp1.alamat LIKE '%PARINGIN%'
                AND pp1.alamat NOT LIKE '%SELATAN%' THEN 'PARINGIN'
                WHEN pp1.alamat LIKE '%PARINGIN SELATAN%' THEN 'PARINGIN SELATAN'
                WHEN pp1.alamat LIKE '%AWAYAN%' THEN 'AWAYAN'
                WHEN pp1.alamat LIKE '%TEBING TINGGI%' THEN 'TEBING TINGGI'
                WHEN pp1.alamat LIKE '%LAMPHONG%'
                OR pp1.alamat LIKE '%LAMPIHONG%' THEN 'LAMPHONG'
                WHEN pp1.alamat LIKE '%HALONG%' THEN 'HALONG'
                WHEN pp1.alamat LIKE '%BATUMANDI%' THEN 'BATUMANDI'
                ELSE 'LAINNYA'
            END as kecamatan, sp.nama as status_putusan, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
    ) data_detail
GROUP BY
    kecamatan
UNION ALL
SELECT
    99 as No,
    'Jumlah' as Kecamatan,
    COUNT(DISTINCT perkara_id) as `Jumlah Perkara Diterima`,
    SUM(
        CASE
            WHEN (
                umur_mempelai >= 18
                AND umur_mempelai <= 19
            ) THEN 1
            ELSE 0
        END
    ) as `Umur 18 s/d 19 Tahun`,
    SUM(
        CASE
            WHEN umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Umur Dibawah 18 Tahun`,
    SUM(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN 1
            ELSE 0
        END
    ) as `Jumlah dikabulkan`
FROM (
        SELECT
            p.perkara_id, sp.nama as status_putusan, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
    ) total_detail
ORDER BY No;