-- Query gabungan dispensasi kawin per kecamatan dengan statistik lengkap
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
    SUM(jumlah_L) as L,
    SUM(jumlah_P) as P,
    SUM(jumlah_L) + SUM(jumlah_P) as `L+P`,
    SUM(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN 1
            ELSE 0
        END
    ) as dikabulkan,
    SUM(
        CASE
            WHEN status_putusan = 'DITOLAK' THEN 1
            ELSE 0
        END
    ) as ditolak,
    COUNT(perkara_id) as total_putus
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
            END as kecamatan, sp.nama as status_putusan, SUM(
                CASE
                    WHEN mpl.jenis_mempelai = '1' THEN 1
                    ELSE 0
                END
            ) as jumlah_L, SUM(
                CASE
                    WHEN mpl.jenis_mempelai = '2' THEN 1
                    ELSE 0
                END
            ) as jumlah_P
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
    ) data_per_perkara
GROUP BY
    kecamatan
UNION ALL
SELECT
    99 as No,
    'TOTAL' as Kecamatan,
    SUM(jumlah_L) as L,
    SUM(jumlah_P) as P,
    SUM(jumlah_L) + SUM(jumlah_P) as `L+P`,
    SUM(
        CASE
            WHEN status_putusan = 'DIKABULKAN' THEN 1
            ELSE 0
        END
    ) as dikabulkan,
    SUM(
        CASE
            WHEN status_putusan = 'DITOLAK' THEN 1
            ELSE 0
        END
    ) as ditolak,
    COUNT(perkara_id) as total_putus
FROM (
        SELECT
            p.perkara_id, sp.nama as status_putusan, SUM(
                CASE
                    WHEN mpl.jenis_mempelai = '1' THEN 1
                    ELSE 0
                END
            ) as jumlah_L, SUM(
                CASE
                    WHEN mpl.jenis_mempelai = '2' THEN 1
                    ELSE 0
                END
            ) as jumlah_P
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
        GROUP BY
            p.perkara_id, sp.nama
    ) total_data
ORDER BY No;