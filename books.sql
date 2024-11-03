
CREATE TABLE authors (
                         id SERIAL PRIMARY KEY,
                         name VARCHAR(45) NOT NULL,
                         surname VARCHAR(45) NOT NULL
);


CREATE TABLE books (
                       id SERIAL PRIMARY KEY,
                       title VARCHAR(255) NOT NULL,
                       publication_year INT CHECK (publication_year > 0),
                       isbn VARCHAR(20) UNIQUE NOT NULL,
                       author_id INT REFERENCES authors(id) ON DELETE CASCADE
);


CREATE TABLE reviews (
                         id SERIAL PRIMARY KEY,
                         rating INT CHECK (rating BETWEEN 1 AND 10),
                         content TEXT NOT NULL,
                         book_id INT REFERENCES books(id) ON DELETE CASCADE
);


SELECT a.name, a.surname, COUNT(b.id) AS book_count
FROM authors a
         LEFT JOIN books b ON a.id = b.author_id
GROUP BY a.id;


CREATE VIEW top_authors AS
SELECT a.name, a.surname, AVG(r.rating) AS average_rating
FROM authors a
         JOIN books b ON a.id = b.author_id
         JOIN reviews r ON b.id = r.book_id
GROUP BY a.id
ORDER BY average_rating DESC
LIMIT 5;
