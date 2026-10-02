-- Module 6: Database assignment
-- Run this once in phpMyAdmin (or your host's SQL tool) after you
-- create your database, to create the "comments" table it needs.

CREATE TABLE comments (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    title VARCHAR(150) NOT NULL,
    comments TEXT NOT NULL,
    commentdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
