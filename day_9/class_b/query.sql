-- INSERT INTO t_estudante(naran_estudante, sexo, data_moris)
-- VALUES ('Elisito dos Santos', 'M', '1998-12-31');

-- INSERT INTO t_materia(materia)
-- values ('Geologia');

-- SELECT * FROM t_materia;

-- INSERT INTO t_aula(id_estudante, id_materia)
-- VALUES ('85c9990b-d8b4-4d51-85b6-671556585d03', '93900cc6-6805-422e-9169-0ac3d1794f66')

-- SELECT * FROM t_aula;

-- JOIN : 
	-- 1. LEFT JOIN
	-- 2. RIGHT JOIN
	-- 3. INNER JOIN
	-- 4. FULL JOIN
	
-- LEFT JOIN : Fo Prioridade ba Tabela parte karuk
-- SELECT c.id_estudante, naran_estudante, sexo, data_moris, b.id_materia,materia
-- FROM t_aula a
-- LEFT JOIN t_materia b on a.id_materia = b.id_materia
-- LEFT JOIN t_estudante c on a.id_estudante = c.id_estudante

-- select * from v_estudante_materia

