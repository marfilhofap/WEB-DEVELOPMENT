-- Querry INSERT
-- INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telfone)
-- VALUES('Andre da Costa', 'M', '2001-01-10', 74453325)

-- Querry SELECT
-- SELECT * FROM t_estudante -- SELECT ALL
-- SELECT naran_estudante, sexo, nu_telfone FROM t_estudante -- SELECT espesific column
-- SELECT * FROM t_estudante WHERE sexo = 'M'  -- SELECT Filtru
-- SELECT * FROM t_estudante order by data_moris ASC -- SELECT order
-- SELECT * FROM t_estudante WHERE sexo = 'M' order by data_moris ASC LIMIT 2
-- SELECT count(data_moris) FROM t_estudante WHERE sexo = 'F' -- SELECT Function

-- QUERY DELETE
-- DELETE FROM t_estudante WHERE id_estudante = '491d9b93-8995-4924-9e97-4623e34c34eb'

-- QUERY UPDATE
UPDATE t_estudante
SET naran_estudante = 'Milania dos Santos da Costa', nu_telfone = '78213445'
WHERE id_estudante='aea536a2-6292-4f70-8c9c-bc2ed2214bcf'

















