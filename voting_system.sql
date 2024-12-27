
CREATE DATABASE voting_system;

CREATE TABLE candidate (
    candidate_name VARCHAR(50) NOT NULL,
    candidate_address VARCHAR(50) NOT NULL,
    candidate_date VARCHAR(50) NOT NULL,
    candidate_serial INT(5) NOT NULL UNIQUE,
    candidate_photo VARCHAR(100) NOT NULL,
    candidate_description VARCHAR(200) NOT NULL
);

CREATE TABLE voter (
    voter_id INT(11) NOT NULL UNIQUE,
    voter_name VARCHAR(50) NOT NULL,
    voter_username VARCHAR(50) NOT NULL UNIQUE,
    voter_password VARCHAR(50) NOT NULL,
);

CREATE TABLE check_voter_login (
    voter_id INT(11) NOT NULL UNIQUE,
    voter_voting_date DATE NOT NULL;
);

CREATE TABLE admin_table (
    admin_id INT UNIQUE NOT NULL,
    admin_username VARCHAR(50) UNIQUE NOT NULL,
    admin_password VARCHAR(50) UNIQUE NOT NULL,
    admin_photo VARCHAR(50) NOT NULL,
    admin_description VARCHAR(250) NOT NULL,
    admin_create_date VARCHAR(50) NOT NULL
);

CREATE TABLE result_of_voting (
    candidate_serial INT NOT NULL,
    candidate_counter INT NOT NULL
);
