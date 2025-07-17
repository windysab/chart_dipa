-- Query dispensasi kawin per kecamatan dengan detail usia pemohon dan status dikabulkan
-- Berdasarkan format tabel: No, Kecamatan, Jumlah Perkara Diterima, Umur 18 s/d 19 Tahun, Umur Dibawah 18 Tahun, Jumlah dikabulkan
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
    COUNT(
        CASE
            WHEN (
                umur_pemohon >= 18
                AND umur_pemohon <= 19
            ) THEN 1
        END
    ) as `Umur 18 s/d 19 Tahun`,
    COUNT(
        CASE
            WHEN umur_pemohon < 18 THEN 1
        END
    ) as `Umur Dibawah 18 Tahun`,
    COUNT(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN perkara_id
        END
    ) as `Jumlah dikabulkan`
FROM (
        SELECT DISTINCT
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
            ) as umur_pemohon
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
            AND TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) < 21 -- Fokus pada yang memerlukan dispensasi
    ) data_dispensasi
GROUP BY
    kecamatan
UNION ALL
SELECT
    99 as No,
    'Jumlah' as Kecamatan,
    COUNT(DISTINCT perkara_id) as `Jumlah Perkara Diterima`,
    COUNT(
        CASE
            WHEN (
                umur_pemohon >= 18
                AND umur_pemohon <= 19
            ) THEN 1
        END
    ) as `Umur 18 s/d 19 Tahun`,
    COUNT(
        CASE
            WHEN umur_pemohon < 18 THEN 1
        END
    ) as `Umur Dibawah 18 Tahun`,
    COUNT(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN perkara_id
        END
    ) as `Jumlah dikabulkan`
FROM (
        SELECT DISTINCT
            p.perkara_id, sp.nama as status_putusan, TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) as umur_pemohon
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
            AND TIMESTAMPDIFF(
                YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
            ) < 21
    ) total_dispensasi
ORDER BY No;

-- Query alternatif dengan breakdown per mempelai yang meminta dispensasi
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
    SUM(usia_18_19) as `Umur 18 s/d 19 Tahun`,
    SUM(usia_dibawah_18) as `Umur Dibawah 18 Tahun`,
    SUM(dikabulkan) as `Jumlah dikabulkan`
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
            END as kecamatan, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) >= 18
                    AND TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) <= 19 THEN 1
                    ELSE 0
                END
            ) as usia_18_19, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) < 18 THEN 1
                    ELSE 0
                END
            ) as usia_dibawah_18, CASE
                WHEN sp.nama = 'DIKABULKAN' THEN 1
                ELSE 0
            END as dikabulkan
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
        GROUP BY
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
            END, sp.nama
    ) summary_per_perkara
GROUP BY
    kecamatan
UNION ALL
SELECT
    99 as No,
    'Jumlah' as Kecamatan,
    COUNT(DISTINCT perkara_id) as `Jumlah Perkara Diterima`,
    SUM(usia_18_19) as `Umur 18 s/d 19 Tahun`,
    SUM(usia_dibawah_18) as `Umur Dibawah 18 Tahun`,
    SUM(dikabulkan) as `Jumlah dikabulkan`
FROM (
        SELECT
            p.perkara_id, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) >= 18
                    AND TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) <= 19 THEN 1
                    ELSE 0
                END
            ) as usia_18_19, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, mpl.tanggal_lahir, p.tanggal_pendaftaran
                    ) < 18 THEN 1
                    ELSE 0
                END
            ) as usia_dibawah_18, CASE
                WHEN sp.nama = 'DIKABULKAN' THEN 1
                ELSE 0
            END as dikabulkan
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
        GROUP BY
            p.perkara_id, sp.nama
    ) total_summary
ORDER BY No;