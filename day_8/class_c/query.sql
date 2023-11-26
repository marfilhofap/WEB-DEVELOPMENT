-- 1. INSERT
-- INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telfone)
-- VALUES ('Minalia dos Santos', 'F', '2001-11-01', 76444332)

-- 2. SELECT

-- SELECT * FROM t_estudante; -- ALL
-- SELECT naran_estudante, sexo FROM t_estudante; -- Espesific Column
-- SELECT * FROM t_estudante WHERE sexo = 'M' -- Filter
-- SELECT * FROM t_estudante order by data_moris DESC -- order
-- SELECT * 
-- FROM t_estudante 
-- WHERE sexo = 'M'
-- order by data_moris DESC
-- LIMIT 2

-- SELECT count(*) FROM t_estudante
-- where sexo='F'

-- 3. UPDATE 
-- UPDATE t_estudante 
-- SET naran_estudante = 'Andrea', sexo = 'F'
-- WHERE id_estudante = 'd915da19-3f54-4212-9f86-a6913833beb3'


-- DELETE
-- DELETE FROM t_estudante WHERE id_estudante = 'd915da19-3f54-4212-9f86-a6913833beb3'



-- TASK

Kria tabela ida konaba Valor Estudante
- id, naran, sexo, data_moris, valor_materia, Municipio

1. Inserir dadus total 10

2. Select dadus konaba :
    A- Estudante nebe valor boot liu nain 3
    B- Estudante Mane nebe valor boot liu nain 3
    C- Estudante Feto nebe valor boot liu nain 3
    D- Fo sai total estudante husi kada Munisipiu
    E- Fo sai Estudante Feto ida nebe tinan Kiik liu
    F- Fo sai Estudante Mane ida nebe tinan kiik liu 

-- A- Estudante nebe valor boot liu nain 3
-- SELECT * FROM t_estudante order by valor DESC LIMIT 3

-- B- Estudante Mane nebe valor boot liu nain 3
-- SELECT * FROM t_estudante WHERE sexo='M' order by valor DESC LIMIT 3

-- C- Estudante Feto nebe valor boot liu nain 3
-- SELECT * FROM t_estudante WHERE sexo='F' order by valor DESC LIMIT 3

-- D- Fo sai Estudante Feto ida nebe tinan Kiik liu
-- SELECT * FROM t_estudante WHERE  sexo = 'F' order by data_moris DESC LIMIT 1

-- F- Fo sai Estudante Mane ida nebe tinan Kiik liu
-- SELECT * FROM t_estudante WHERE  sexo = 'M' order by data_moris DESC LIMIT 1

-- G- SELECT municipio, count(municipio) FROM t_estudante
-- group by municipio

