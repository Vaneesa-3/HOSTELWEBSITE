-- Create the database
CREATE DATABASE IF NOT EXISTS books;
USE books;

-- Create the table
CREATE TABLE IF NOT EXISTS book (
    bookid    INT AUTO_INCREMENT PRIMARY KEY,
    bcategory VARCHAR(50)  NOT NULL,
    bookname  VARCHAR(100) NOT NULL,
    isbn      VARCHAR(20)  NOT NULL
);

-- Insert the data
INSERT INTO book (bookid, bcategory, bookname, isbn) VALUES
(1, 'system software',    'operating systems', '1234567'),
(2, 'programming', 'Java Black Book',   '22233367'),
(3, 'programming', 'Java programming',  '33333367'),
(4, 'programming', 'Complete hTML5',    '4444467');

-- Create the mailinglist table
CREATE TABLE IF NOT EXISTS mailinglist (
    id      INT(11) NOT NULL AUTO_INCREMENT,
    fname   VARCHAR(11) NOT NULL,
    lname   VARCHAR(11) NOT NULL,
    email   VARCHAR(25) NOT NULL,
    phone   VARCHAR(11) NOT NULL,
    favbook VARCHAR(50) NOT NULL,
    favos   VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert the rows
INSERT INTO mailinglist (id, fname, lname, email, phone, favbook, favos) VALUES
(1, 'User', 'Test', 'test.user@somemail.com', '1239727287', 'Java BlackBook', 'Windows'),
(2, 'saaa',  'qqq',    'xcx@bdsf.com',           '2323323',    'Internet and WWW How to Program', 'Linux');
