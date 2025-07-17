-- Query dispensasi kawin per kecamatan Balangan (versi diperbaiki)
-- Menggunakan subquery untuk menghitung lebih akurat
SELECT
    CASE
        WHEN kecamatan = 'AWAYAN' THEN 1
        WHEN kecamatan = 'BATUMANDI' THEN 2
        WHEN kecamatan = 'HALONG' THEN 3
        WHEN kecamatan = 'JUAI' THEN 4
        WHEN kecamatan = 'LAMPHONG' THEN 5
        WHEN kecamatan = 'PARINGIN' THEN 6
        WHEN kecamatan = 'PARINGIN SELATAN' THEN 7
        WHEN kecamatan = 'TEBING TINGGI' THEN 8
        ELSE 9
    END as No,
    COALESCE(kecamatan, 'TIDAK DIKETAHUI') as Kecamatan,
    COALESCE(L_count, 0) as L,
    COALESCE(P_count, 0) as P,
    COALESCE(L_count, 0) + COALESCE(P_count, 0) as `L+P`,
    COALESCE(dikabulkan, 0) as dikabulkan,
    COALESCE(ditolak, 0) as ditolak,
    COALESCE(total_putus, 0) as total_putus
FROM (
        SELECT DISTINCT
            CASE
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
            END as kecamatan
        FROM perkara p
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
    ) kec_list
    LEFT JOIN (
        SELECT
            CASE
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
            END as kecamatan, COUNT(
                CASE
                    WHEN mpl.jenis_mempelai = '1' THEN 1
                END
            ) as L_count, COUNT(
                CASE
                    WHEN mpw.jenis_mempelai = '2' THEN 1
                END
            ) as P_count, SUM(
                CASE
                    WHEN sp.nama = 'DIKABULKAN' THEN 1
                    ELSE 0
                END
            ) as dikabulkan, SUM(
                CASE
                    WHEN sp.nama = 'DITOLAK' THEN 1
                    ELSE 0
                END
            ) as ditolak, COUNT(p.perkara_id) as total_putus
        FROM
            perkara p
            LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
            AND mpl.jenis_mempelai = '1'
            LEFT JOIN perkara_mempelai_dk mpw ON p.perkara_id = mpw.perkara_id
            AND mpw.jenis_mempelai = '2'
            LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
            LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
            LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
        WHERE
            YEAR(p.tanggal_pendaftaran) = '2023'
            AND p.jenis_perkara_nama LIKE '%Dispensasi%'
            AND pp1.alamat LIKE '%Balangan%'
        GROUP BY
            CASE
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
            END
    ) counts ON kec_list.kecamatan = counts.kecamatan
UNION ALL
SELECT
    99 as No,
    'TOTAL' as Kecamatan,
    COUNT(
        CASE
            WHEN mpl.jenis_mempelai = '1' THEN 1
        END
    ) as L,
    COUNT(
        CASE
            WHEN mpw.jenis_mempelai = '2' THEN 1
        END
    ) as P,
    COUNT(
        CASE
            WHEN mpl.jenis_mempelai = '1' THEN 1
        END
    ) + COUNT(
        CASE
            WHEN mpw.jenis_mempelai = '2' THEN 1
        END
    ) as `L+P`,
    SUM(
        CASE
            WHEN sp.nama = 'DIKABULKAN' THEN 1
            ELSE 0
        END
    ) as dikabulkan,
    SUM(
        CASE
            WHEN sp.nama = 'DITOLAK' THEN 1
            ELSE 0
        END
    ) as ditolak,
    COUNT(p.perkara_id) as total_putus
FROM
    perkara p
    LEFT JOIN perkara_mempelai_dk mpl ON p.perkara_id = mpl.perkara_id
    AND mpl.jenis_mempelai = '1'
    LEFT JOIN perkara_mempelai_dk mpw ON p.perkara_id = mpw.perkara_id
    AND mpw.jenis_mempelai = '2'
    LEFT JOIN perkara_putusan pp ON p.perkara_id = pp.perkara_id
    LEFT JOIN status_putusan sp ON pp.status_putusan_id = sp.id
    LEFT JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
WHERE
    YEAR(p.tanggal_pendaftaran) = '2023'
    AND p.jenis_perkara_nama LIKE '%Dispensasi%'
    AND pp1.alamat LIKE '%Balangan%'
ORDER BY No;