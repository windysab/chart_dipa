SELECT
    faktor.FaktorPerceraian,
    COALESCE(agg.`Usia 16-19 (P)`, 0) AS `Usia 16-19 (P)`,
    COALESCE(agg.`Usia 20-25 (P)`, 0) AS `Usia 20-25 (P)`,
    COALESCE(agg.`Usia 26-30 (P)`, 0) AS `Usia 26-30 (P)`,
    COALESCE(agg.`Usia 31-35 (P)`, 0) AS `Usia 31-35 (P)`,
    COALESCE(agg.`Usia 36+ (P)`, 0) AS `Usia 36+ (P)`,
    COALESCE(agg.`Total (P)`, 0) AS `Total (P)`
FROM (
        SELECT '9' AS id, 'Perselisihan Terus Menerus' AS FaktorPerceraian
        UNION ALL
        SELECT '10', 'Kawin Paksa'
        UNION ALL
        SELECT '11', 'Murtad'
        UNION ALL
        SELECT '12', 'Ekonomi'
        UNION ALL
        SELECT '14', 'Lain-Lain'
    ) AS faktor
    LEFT JOIN (
        SELECT
            pac.faktor_perceraian_id, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 16 AND 19
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 16-19 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 20 AND 25
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 20-25 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 26 AND 30
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 26-30 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 31 AND 35
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 31-35 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) >= 36
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 36+ (P)`, SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Total (P)`
        FROM
            perkara_akta_cerai pac
            JOIN perkara p ON pac.perkara_id = p.perkara_id
            JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            JOIN pihak pd ON pp1.pihak_id = pd.id
        WHERE
            YEAR(pac.tgl_akta_cerai) = '2023'
            AND pp1.alamat LIKE '%Balangan%'
        GROUP BY
            pac.faktor_perceraian_id
    ) AS agg ON faktor.id = agg.faktor_perceraian_id
UNION ALL
SELECT
    'TOTAL' AS FaktorPerceraian,
    SUM(
        COALESCE(agg.`Usia 16-19 (P)`, 0)
    ) AS `Usia 16-19 (P)`,
    SUM(
        COALESCE(agg.`Usia 20-25 (P)`, 0)
    ) AS `Usia 20-25 (P)`,
    SUM(
        COALESCE(agg.`Usia 26-30 (P)`, 0)
    ) AS `Usia 26-30 (P)`,
    SUM(
        COALESCE(agg.`Usia 31-35 (P)`, 0)
    ) AS `Usia 31-35 (P)`,
    SUM(
        COALESCE(agg.`Usia 36+ (P)`, 0)
    ) AS `Usia 36+ (P)`,
    SUM(COALESCE(agg.`Total (P)`, 0)) AS `Total (P)`
FROM (
        SELECT '9' AS id, 'Perselisihan Terus Menerus' AS FaktorPerceraian
        UNION ALL
        SELECT '10', 'Kawin Paksa'
        UNION ALL
        SELECT '11', 'Murtad'
        UNION ALL
        SELECT '12', 'Ekonomi'
        UNION ALL
        SELECT '14', 'Lain-Lain'
    ) AS faktor
    LEFT JOIN (
        SELECT
            pac.faktor_perceraian_id, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 16 AND 19
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 16-19 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 20 AND 25
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 20-25 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 26 AND 30
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 26-30 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) BETWEEN 31 AND 35
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 31-35 (P)`, SUM(
                CASE
                    WHEN TIMESTAMPDIFF(
                        YEAR, pd.tanggal_lahir, p.tanggal_pendaftaran
                    ) >= 36
                    AND pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Usia 36+ (P)`, SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Total (P)`
        FROM
            perkara_akta_cerai pac
            JOIN perkara p ON pac.perkara_id = p.perkara_id
            JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            JOIN pihak pd ON pp1.pihak_id = pd.id
        WHERE
            YEAR(pac.tgl_akta_cerai) = '2023'
            AND pp1.alamat LIKE '%Balangan%'
        GROUP BY
            pac.faktor_perceraian_id
    ) AS agg ON faktor.id = agg.faktor_perceraian_id;