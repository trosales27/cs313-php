CREATE TABLE genre(genre_id SERIAL PRIMARY KEY,
	genre_name VARCHAR(50) NOT NULL UNIQUE	);

CREATE TABLE song_info(song_id SERIAL PRIMARY KEY,
	song_name text NOT NULL,
	album VARCHAR(50),
	artist VARCHAR(50),
	rating SMALLINT NOT NULL,
	genre VARCHAR(50) REFERENCES genre(genre_name));


CREATE TABLE user_info(user_id SERIAL PRIMARY KEY,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(60));


SELECT * FROM song_info WHERE rating >= 4;

INSERT INTO genre (genre_name) VALUES ('Rock');
INSERT INTO genre (genre_name) VALUES ('Metal');
INSERT INTO genre (genre_name) VALUES ('Jazz');
-- INSERT INTO genre (genre_name) VALUES ('Electronic');
-- INSERT INTO genre (genre_name) VALUES ('Rap');
-- INSERT INTO genre (genre_name) VALUES ('R&B');
-- INSERT INTO genre (genre_name) VALUES ('Punk');
-- INSERT INTO genre (genre_name) VALUES ('Alternative');
-- INSERT INTO genre (genre_name) VALUES ('Country');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('The Flood', 'The Congregation', 
	'Leprous', 5, 'Metal');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Cockroach King', 'The Mountain', 
	'Haken', 5, 'Metal');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Bohemian Rhapsody', 'A Night at the Opera', 
	'Queen', 5, 'Rock');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Resistance', 'The Resistance', 
	'Muse', 4, 'Rock');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Take the A Train', '', 
	'Duke Ellingtion', 3, 'Jazz');

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('A Night in Tunisia', '', 
	'Dizzy Gellespie', 4, 'Jazz');

--Joining tables together
SELECT * FROM song_info s
JOIN genre g ON s.song_id = g.genre_id
WHERE title = 'The Flood';

-- Updating table info
-- UPDATE id SET name = 'updtaed info' WHERE id=3;

--Link tables together
SELECT * FROM song_info s JOIN genre g ON s.genre = g.genre_id; 


