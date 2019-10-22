CREATE TABLE state (
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(80) NOT NULL UNIQUE
);

CREATE TABLE city (
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(80) NOT NULL,
	state_id INTEGER,
	FOREIGN KEY (state_id) REFERENCES "state"(id)
);

CREATE TABLE restaurant (
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(80) NOT NULL,
	description VARCHAR(600),
	address VARCHAR(80) NOT NULL,
	city_id INTEGER,
	FOREIGN KEY (city_id) REFERENCES city(id)
);

CREATE TABLE picture (
	url VARCHAR(200) NOT NULL PRIMARY KEY,
	name VARCHAR(80) NOT NULL,
	description VARCHAR(600),
	restaurant_id INTEGER,
	FOREIGN KEY (restaurant_id) REFERENCES restaurant(id)
);

-- CREATE TABLE rating (
-- 	id SERIAL NOT NULL PRIMARY KEY,
-- 	reviewer_name VARCHAR(80) NOT NULL,
-- 	rating INTEGER NOT NULL,
-- 	description VARCHAR(200),
-- 	restaurant_id INTEGER,
-- 	FOREIGN KEY (restaurant_id) REFERENCES restaurant(id)
-- );

INSERT INTO state (id, name) VALUES (DEFAULT, 'Utah');
INSERT INTO state (id, name) VALUES (DEFAULT, 'Idaho');

INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Salt Lake City', 1);
INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Rexburg', 2);
INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Rexburg', 2);

INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'Red Iguana', 'Bustling, family-run Mexican cafe serving signature mole plus traditional & gluten-free favorites.', '736 W North Temple - Salt Lake City', 1);

INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'Taco Time', 'Longtime Mexican fast-food chain serving tacos, crisp burritos & kids meals in simple surrounds.', ' 274 S 2nd W - Rexburg', 2);

INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'AppleBees', 'Full-service chain bar & grill providing hearty American eats in an informal setting.', '975 University Blvd - Rexburg', 3);

INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0nReYfYyByCY1h-36T2XiVTtQ583py3jIpyE1CEEwsGa7mq5ObQ', 'RedIguana', 1);
INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyv8BHgwzMKIZpk5OZvLp6mAOQw5A1aQI3imf4a1Gu5aXGGXRJ', 'TacoTime Front', 2);
INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlYrsjmLo9gjQmu18dbI3y1EWFNRtVBMmv6GwU3xJZpBOOsA4O', 'AppleBees Front', 3);
