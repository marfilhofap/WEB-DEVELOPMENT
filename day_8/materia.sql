-- DDL

-- 1. CREATE

CREATE TABLE estudante (
    id_estudante uuid NOT NULL DEFAULT gen_random_uuid(),
    naran_estudante VARCHAR(100),
    sexo VARCHAR(10),
    data_moris DATE
);

-- 2. RENAME

ALTER TABLE estudante
RENAME TO students;

ALTER TABLE students
RENAME COLUMN naran_estudante TO student_name;

-- 3. TRUNCATE

TRUNCATE TABLE students;

-- 4. ALTER
-- 4.1 ADD New column

ALTER TABLE estudante
ADD COLUMN email VARCHAR(100);

-- 4.2 Modify a column (change its data type):

ALTER TABLE estudante
ALTER COLUMN data_moris TYPE TIMESTAMP;

-- 4.3 Drop a column:

ALTER TABLE estudante
DROP COLUMN email;


-- 5. DROP

DROP TABLE estudante;


-- DML
-- 6. INSERT

INSERT INTO estudante (naran_estudante, sexo, data_moris, email)
VALUES ('Fidel Pereira', 'M', '1990-01-15', 'marfilhofap@gmail.com');

-- 7. SELECT
-- 7.1 Select all columns from a table:

SELECT * FROM estudante;

-- 7.2 Select specific columns:

SELECT naran_estudante, sexo FROM estudante;

-- 7.3 Filter rows with a WHERE clause:

SELECT * FROM estudante
WHERE sexo = 'M';

-- 7.4 Ordering results with ORDER BY:

SELECT * FROM estudante
ORDER BY naran_estudante ASC;

-- 7.5 Limiting the number of rows with LIMIT:

SELECT * FROM estudante
LIMIT 10;

-- 7.6 Aggregate functions (e.g., COUNT, AVG, SUM):

SELECT count(*) FROM estudante;


-- 8. UPDATE

UPDATE estudante
SET naran_estudante = 'Fidel Alvares', sexo = 'M'
WHERE id_estudante = '9625acf9-2e28-44c7-ab4f-4e80161b575e';


-- 9. DELETE

DELETE FROM estudante
WHERE id_estudante = '9625acf9-2e28-44c7-ab4f-4e80161b575e';

DELETE FROM estudante;






