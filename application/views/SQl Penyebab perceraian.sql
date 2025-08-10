SELECT
    faktor.nama AS FaktorPerceraian,
    COALESCE(agg.`Laki-Laki`, 0) AS `Laki-Laki`,
    COALESCE(agg.`Perempuan`, 0) AS `Perempuan`,
    COALESCE(agg.`Total`, 0) AS `Total`
FROM
    faktor_perceraian faktor
    LEFT JOIN (
        SELECT
            pac.faktor_perceraian_id,
            SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'L' THEN 1
                    ELSE 0
                END
            ) AS `Laki-Laki`,
            SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Perempuan`,
            COUNT(*) AS `Total`
        FROM
            perkara_akta_cerai pac
            JOIN perkara p ON pac.perkara_id = p.perkara_id
            JOIN perkara_pihak1 pp1 ON p.perkara_id = pp1.perkara_id
            JOIN pihak pd ON pp1.pihak_id = pd.id
        WHERE
            YEAR(pac.tgl_akta_cerai) = '2025 '
            AND pp1.alamat LIKE '%Balangan%'
        GROUP BY
            pac.faktor_perceraian_id
    ) AS agg ON faktor.id = agg.faktor_perceraian_id
WHERE
    faktor.aktif = 'Y'
UNION ALL
SELECT
    'TOTAL' AS FaktorPerceraian,
    SUM(COALESCE(agg.`Laki-Laki`, 0)) AS `Laki-Laki`,
    SUM(COALESCE(agg.`Perempuan`, 0)) AS `Perempuan`,
    SUM(COALESCE(agg.`Total`, 0)) AS `Total`
FROM
    faktor_perceraian faktor
    LEFT JOIN (
        SELECT
            pac.faktor_perceraian_id,
            SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'L' THEN 1
                    ELSE 0
                END
            ) AS `Laki-Laki`,
            SUM(
                CASE
                    WHEN pd.jenis_kelamin = 'P' THEN 1
                    ELSE 0
                END
            ) AS `Perempuan`,
            COUNT(*) AS `Total`
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
WHERE
    faktor.aktif = 'Y';
