
-- table `governorship_votes`
CREATE TABLE "governorship_votes" (
	name VARCHAR(80) NOT NULL, 
	party VARCHAR(80) NOT NULL,
	gov_count VARCHAR(80) NOT NULL
);

-- data for table `governorship_votes`
INSERT INTO "governorship_votes" (name, party, gov_count) VALUES 
('PHARM. KUFRE EKPO M.', 'ANPP', '6'),
('REV. DR JOHN DUKE', 'PDP', '2'),
('ALAHJI MUSA SHOLA', 'ACN', '2');

--  table `presidential_votes`

CREATE TABLE "presidential_votes" (
	name VARCHAR(80) NOT NULL,
	party VARCHAR(80),
	pres_count VARCHAR (80),
	vote_date DATE NOT NULL DEFAULT CURRENT_DATE,
);


-- Dumping data for table `presidential_votes`


INSERT INTO "presidential_votes" (name, party, pres_count, vote_date) VALUES 
('DECONESS SALOME SEUN (JP.) ', 'ACN', '19', '0000-00-00 00:00:00'),
('MRS CYNTHIA ALABA ', 'ANPP', '34', '0000-00-00 00:00:00'),
('PROF. ELIJAH AMINU', 'PDP', '14', '0000-00-00 00:00:00');

-- table `voter`

CREATE TABLE voter (
  firstname varchar(19) NOT NULL,
  lastname varchar(19) NOT NULL,
  sex varchar(5) NOT NULL,
  age varchar(3) NOT NULL,
  address varchar(23) NOT NULL,
  lga varchar(19) NOT NULL,
  state varchar(19) NOT NULL,
  country varchar(19) NOT NULL,
  phone varchar(18) NOT NULL,
  email varchar(19) NOT NULL,
  election_district varchar(18) NOT NULL,
  occupation varchar(19) NOT NULL,
  username varchar(22) NOT NULL,
  election_id varchar(22) NOT NULL,
  PRIMARY KEY  (election_id
  );

-- 
-- Dumping data for table `voter`
-- 

INSERT INTO voter (firstname, lastname, sex, age, address, lga, state, country, phone, email, election_district, occupation, username, election_id) VALUES 
('IDARA', 'UKANA', 'Femal', '24', '14 EBONG UMOITONG STR.', 'UYO', 'AKWA IBOM', 'NIGERIA', '08067361023', 'WALTERJNR1@YAHOO.CO', 'WARD 3', 'NURSE', 'idara', '340');



-- CREATE TABLE picture (
-- 	url VARCHAR(200) NOT NULL PRIMARY KEY,
-- 	name VARCHAR(80) NOT NULL,
-- 	restaurant_id INTEGER,
-- 	FOREIGN KEY (restaurant_id) REFERENCES restaurant(id)
-- );

-- CREATE TABLE rating (
-- 	id SERIAL NOT NULL PRIMARY KEY,
-- 	reviewer_name VARCHAR(80) NOT NULL,
-- 	rating INTEGER NOT NULL,
-- 	description VARCHAR(200),
-- 	restaurant_id INTEGER,
-- 	FOREIGN KEY (restaurant_id) REFERENCES restaurant(id)
-- );

-- INSERT INTO "state" (id, name) VALUES (DEFAULT, 'Utah');
-- INSERT INTO "state" (id, name) VALUES (DEFAULT, 'Idaho');

-- INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Salt Lake City', 1);
-- INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Rexburg', 2);
-- INSERT INTO city (id, name, state_id) VALUES (DEFAULT, 'Rexburg', 2);

-- INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'Red Iguana', 'Bustling, family-run Mexican cafe serving signature mole plus traditional & gluten-free favorites.', '736 W North Temple - Salt Lake City', 1);

-- INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'Taco Time', 
-- 		'Longtime Mexican fast-food chain serving tacos, crisp burritos & kids meals 
-- 		in simple surrounds.', ' 274 S 2nd W - Rexburg', 2);

-- INSERT INTO restaurant (id, name, description, address, city_id) VALUES (DEFAULT, 'AppleBees', 
-- 		'Full-service chain bar & grill providing hearty American eats in an informal setting.', 
-- 		'975 University Blvd - Rexburg', 2);

-- INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0nReYfYyByCY1h-36T2XiVTtQ583py3jIpyE1CEEwsGa7mq5ObQ', 'RedIguana', 1);
-- INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyv8BHgwzMKIZpk5OZvLp6mAOQw5A1aQI3imf4a1Gu5aXGGXRJ', 'TacoTime Front', 2);
-- INSERT INTO picture (url, name, restaurant_id) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlYrsjmLo9gjQmu18dbI3y1EWFNRtVBMmv6GwU3xJZpBOOsA4O', 'AppleBees Front', 2);


DROP TABLE "state" CASCADE;
DROP TABLE city  CASCADE ;
DROP TABLE restaurant   CASCADE;
DROP TABLE picture CASCADE;