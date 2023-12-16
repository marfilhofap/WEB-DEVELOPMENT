-- 1. Hatama dados ba tabela (INSERT):
-- INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telfone)
-- VALUES ('Mario Ximenes', 'M', '2005-01-30', 75747322)

-- 2. SELECT

-- SELECT * FROM t_estudante -- ALL
-- SELECT naran_estudante, nu_telfone FROM t_estudante -- Cada Koluna
-- SELECT * FROM t_estudante WHERE sexo = 'M' -- Filtru
-- SELECT * FROM t_estudante order by data_moris DESC -- Order
-- SELECT * FROM t_estudante WHERE sexo = 'M' ORDER BY data_moris DESC LIMIT 2

-- UPDATE t_estudante
-- SET naran_estudante = 'Brando da Costa', sexo = 'F'
-- WHERE id_estudante = '62ef9795-7c32-4bcd-aa4d-dc7272982259'

DELETE FROM t_estudante
WHERE id_estudante = '17b4679e-49bb-4e6e-94cd-9dc1b7dba01e'




