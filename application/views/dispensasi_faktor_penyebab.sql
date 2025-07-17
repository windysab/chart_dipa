-- Query dispensasi kawin berdasarkan faktor penyebab dan usia pemohon
-- Format sesuai tabel: NO, Faktor Penyebab, Usia 18-19 (L), Usia <18 (L), Usia 18-19 (P), Usia <18 (P), Jumlah Total (L dan P)
SELECT
    1 as NO,
    'Menghindari Zina' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai, COALESCE(fp.nama, 'Menghindari Zina') as faktor_nama
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            LEFT JOIN perkara_dispensasi_kawin pdk ON p.perkara_id = pdk.perkara_id
            LEFT JOIN faktor_dispensasi_kawin fp ON pdk.faktor_dispensasi_kawin_id = fp.id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
            AND sp.nama = 'DIKABULKAN'
            AND COALESCE(fp.nama, 'Menghindari Zina') = 'Menghindari Zina'
    ) data_faktor_1
UNION ALL
SELECT
    2 as NO,
    'Ekonomi' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai, COALESCE(fp.nama, 'Menghindari Zina') as faktor_nama
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            LEFT JOIN perkara_dispensasi_kawin pdk ON p.perkara_id = pdk.perkara_id
            LEFT JOIN faktor_dispensasi_kawin fp ON pdk.faktor_dispensasi_kawin_id = fp.id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
            AND sp.nama = 'DIKABULKAN'
            AND COALESCE(fp.nama, 'Menghindari Zina') = 'Ekonomi'
    ) data_faktor_2
UNION ALL
SELECT
    3 as NO,
    'Pendidikan' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai, COALESCE(fp.nama, 'Menghindari Zina') as faktor_nama
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            LEFT JOIN perkara_dispensasi_kawin pdk ON p.perkara_id = pdk.perkara_id
            LEFT JOIN faktor_dispensasi_kawin fp ON pdk.faktor_dispensasi_kawin_id = fp.id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
            AND sp.nama = 'DIKABULKAN'
            AND COALESCE(fp.nama, 'Menghindari Zina') = 'Pendidikan'
    ) data_faktor_3
UNION ALL
SELECT
    4 as NO,
    'Hamil Duluan' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai, COALESCE(fp.nama, 'Menghindari Zina') as faktor_nama
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            LEFT JOIN perkara_dispensasi_kawin pdk ON p.perkara_id = pdk.perkara_id
            LEFT JOIN faktor_dispensasi_kawin fp ON pdk.faktor_dispensasi_kawin_id = fp.id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
            AND sp.nama = 'DIKABULKAN'
            AND COALESCE(fp.nama, 'Menghindari Zina') = 'Hamil Duluan'
    ) data_faktor_4
UNION ALL
SELECT
    5 as NO,
    'Orang Tua' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_mempelai, COALESCE(fp.nama, 'Menghindari Zina') as faktor_nama
        FROM
            perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            LEFT JOIN perkara_dispensasi_kawin pdk ON p.perkara_id = pdk.perkara_id
            LEFT JOIN faktor_dispensasi_kawin fp ON pdk.faktor_dispensasi_kawin_id = fp.id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
            AND mpl.tanggal_lahir IS NOT NULL
            AND sp.nama = 'DIKABULKAN'
            AND COALESCE(fp.nama, 'Menghindari Zina') = 'Orang Tua'
    ) data_faktor_5
UNION ALL
SELECT
    99 as NO,
    'Jumlah' as `Faktor Penyebab Terjadinya Dispensasi`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'L'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai >= 18
            AND umur_mempelai <= 19 THEN 1
            ELSE 0
        END
    ) as `Usia 18-19 Perempuan`,
    SUM(
        CASE
            WHEN jenis_kelamin = 'P'
            AND umur_mempelai < 18 THEN 1
            ELSE 0
        END
    ) as `Usia Dibawah 18 Tahun Laki-laki`,
    COUNT(*) as `Jumlah Total Dispensasi (L dan P)`
FROM (
        SELECT
            p.perkara_id, CASE
                WHEN mpl.jenis_mempelai = '1' THEN 'L'
                WHEN mpl.jenis_mempelai = '2' THEN 'P'
                ELSE 'L'
            END as jenis_kelamin, TIMESTAMPDIFF(
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
            AND sp.nama = 'DIKABULKAN'
    ) total_data
ORDER BY NO;