-- Query dispensasi kawin berdasarkan faktor penyebab dan usia pemohon
-- Format: NO, Faktor Penyebab, Usia 18-19 (L), Usia <18 (L), Usia 18-19 (P), Usia <18 (L), Jumlah Total (L dan P)
SELECT
    ROW_NUMBER() OVER (ORDER BY faktor_nama) as NO,
    COALESCE(faktor_nama, 'Menghindari Zina') as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L' AND umur_mempelai >= 18 AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L' AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P' AND umur_mempelai >= 18 AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P' AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
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