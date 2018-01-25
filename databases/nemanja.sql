## Inserting actors with their first and last names
# INSERT INTO actors (first_name, last_name) VALUES
#   ('Ben','Stiller'),
#   ('Johny','Depp'),
#   ('Johny','Depp'),
#   ('Leonardo','DiCaprio'),
#   ('Denzel','Washington'),
#   ('Robert','Downey Jr.'),
#   ('Matt','Damon'),
#   ('Dwayne','Johnson'),
#   ('Robert','De Niro'),
#   ('Tom','Hanks'),
#   ('Tom','Cruise');

## Renaming tables
# RENAME TABLE actors TO people;

## Deleting all actors from actors table
# DELETE FROM actors;

## Showing all actors from actors table
# SELECT * FROM actors;

## Adding new column to table
# ALTER TABLE movies ADD COLUMN Director INT NULL;

## Joins
## Joining director table with ActorID table
# SELECT * FROM movies ,actors WHERE movies.director = actors.ActorID;

## When dealing with more than 1/2 tables, You must specify a table ex. actors.ActorID

## Selecting title, release year, rating and actor first and last name from movies and actors table and displaying those first and last name as Director table:
# SELECT movies.title, movies.release_year, movies.rating, CONCAT(actors.first_name,' ', actors.last_name) AS Director FROM movies, actors WHERE movies.Director = actors.ActorID;

#FOR INNER JOIN ALL FIELDS MUST EXIST OR IT WON'T BE SHOWN !!