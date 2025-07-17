-- Query rekap dispensasi kawin per kecamatan Balangan (versi final)
-- Menampilkan jumlah pemohon laki-laki, perempuan, total, dan status putusan
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
    (
        COUNT(
            CASE
                WHEN mpl.jenis_mempelai = '1' THEN 1
            END
        ) + COUNT(
            CASE
                WHEN mpw.jenis_mempelai = '2' THEN 1
            END
        )
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
    LEFT JOIN (
        SELECT DISTINCT
            CASE
                WHEN alamat LIKE '%JUAI%' THEN 'JUAI'
                WHEN alamat LIKE '%PARINGIN%'
                AND alamat NOT LIKE '%SELATAN%' THEN 'PARINGIN'
                WHEN alamat LIKE '%PARINGIN SELATAN%' THEN 'PARINGIN SELATAN'
                WHEN alamat LIKE '%AWAYAN%' THEN 'AWAYAN'
                WHEN alamat LIKE '%TEBING TINGGI%' THEN 'TEBING TINGGI'
                WHEN alamat LIKE '%LAMPHONG%'
                OR alamat LIKE '%LAMPIHONG%' THEN 'LAMPHONG'
                WHEN alamat LIKE '%HALONG%' THEN 'HALONG'
                WHEN alamat LIKE '%BATUMANDI%' THEN 'BATUMANDI'
                ELSE 'LAINNYA'
            END as kecamatan,
            perkara_id
        FROM perkara_pihak1
        WHERE
            alamat LIKE '%Balangan%'
    ) kec ON p.perkara_id = kec.perkara_id
WHERE
    YEAR(p.tanggal_pendaftaran) = '2023'
    AND p.jenis_perkara_nama LIKE '%Dispensasi%'
    AND pp1.alamat LIKE '%Balangan%'
GROUP BY
    kecamatan
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
    (
        COUNT(
            CASE
                WHEN mpl.jenis_mempelai = '1' THEN 1
            END
        ) + COUNT(
            CASE
                WHEN mpw.jenis_mempelai = '2' THEN 1
            END
        )
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

-- Query alternatif untuk melihat detail per perkara dispensasi kawin
SELECT
    p.nomor_perkara,
    p.jenis_perkara_nama,
    p.tanggal_pendaftaran,
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
    END as kecamatan,
    CASE
        WHEN mpl.jenis_mempelai = '1' THEN 'Laki-laki'
        WHEN mpw.jenis_mempelai = '2' THEN 'Perempuan'
        ELSE 'Tidak Diketahui'
    END as jenis_pemohon,
    sp.nama as status_putusan,
    pp1.alamat
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
ORDER BY p.tanggal_pendaftaran DESC;