CREATE TABLE genre(genre_id SERIAL PRIMARY KEY,
	genre_name VARCHAR(30) NOT NULL);

CREATE TABLE song_info(song_id SERIAL PRIMARY KEY,
	song_name text NOT NULL,
	album VARCHAR(50),
	artist VARCHAR(50),
	rating SMALLINT NOT NULL,
	genre INTEGER REFERENCES genre(genre_id));


CREATE TABLE user_info(user_id SERIAL PRIMARY KEY,
	username VARCHAR(50) NOT NULL);


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
	'Leprous', 5, (SELECT genre_id from genre WHERE genre_name='Metal'));

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Cockroach King', 'The Mountain', 
	'Haken', 5, (SELECT genre_id from genre WHERE genre_name='Metal'));

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Bohemian Rhapsody', 'A Night at the Opera', 
	'Queen', 5, (SELECT genre_id from genre WHERE genre_name='Rock'));

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Resistance', 'The Resistance', 
	'Muse', 4, (SELECT genre_id from genre WHERE genre_name='Rock'));

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('Take the A Train', '', 
	'Duke Ellingtion', 3, (SELECT genre_id from genre WHERE genre_name='Jazz'));

INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES ('A Night in Tunisia', '', 
	'Dizzy Gellespie', 4, (SELECT genre_id from genre WHERE genre_name='Jazz'));

--Joining tables together
SELECT * FROM song_info s
JOIN genre g ON s.song_id = g.genre_id
WHERE title = 'The Flood';

-- Updating table info
-- UPDATE id SET name = 'updtaed info' WHERE id=3;

--Link tables together
SELECT * FROM song_info s JOIN genre g ON s.genre = g.genre_id; 


