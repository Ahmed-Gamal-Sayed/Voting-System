
CREATE DATABASE voting_system;
USE voting_system;

-- Candidate Table
CREATE TABLE candidate (
    candidate_id INT AUTO_INCREMENT PRIMARY KEY,
    candidate_name VARCHAR(50) NOT NULL,
    candidate_icon VARCHAR(100) NOT NULL UNIQUE,
    candidate_serial INT NOT NULL UNIQUE,
    candidate_photo VARCHAR(100) NOT NULL,
    candidate_description VARCHAR(200) NOT NULL
);

-- Voter Table
CREATE TABLE voter (
    voter_id INT AUTO_INCREMENT PRIMARY KEY,
    voter_national_number BIGINT NOT NULL UNIQUE,
    voter_phone_number VARCHAR(15) NOT NULL
);

-- Check Voter Login Table
CREATE TABLE check_voter_login (
    voter_national_number BIGINT NOT NULL UNIQUE,
    voter_voting_date DATETIME NOT NULL,
    FOREIGN KEY (voter_national_number) REFERENCES voter(voter_national_number) ON DELETE CASCADE
);

-- Admin Table
CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_fullname VARCHAR(50) NOT NULL,
    admin_username VARCHAR(50) UNIQUE NOT NULL,
    admin_password VARCHAR(255) NOT NULL,
    admin_create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Voting Result Table
CREATE TABLE result_of_voting (
    candidate_serial INT NOT NULL UNIQUE,
    candidate_counter INT NOT NULL DEFAULT 0,
    FOREIGN KEY (candidate_serial) REFERENCES candidate(candidate_serial) ON DELETE CASCADE
);
