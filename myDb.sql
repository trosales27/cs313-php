CREATE TABLE song_info(song_id SERIAL PRIMARY KEY,
	song_name text NOT NULL,
	album VARCHAR,
	artist VARCHAR);

CREATE TABLE genre(song_id int REFERENCES song_info(song_id),
	genre VARCHAR NOT NULL,
	rating VARCHAR NOT NULL);

CREATE TABLE user_info(user_id SERIAL PRIMARY KEY,
	username VARCHAR NOT NULL);