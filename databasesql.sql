CREATE DATABASE databasepfs;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  alamat VARCHAR(255),
  umur INT,
  email VARCHAR(100),
  PASSWORD VARCHAR(100)
);

SELECT * FROM users;

DELETE FROM users WHERE nama = 'Luthfi Abdillah';