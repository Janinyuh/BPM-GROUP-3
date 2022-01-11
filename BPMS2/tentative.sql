
THIS IS NOT THE REAL DATABASE FILE!!!!!


CREATE TABLE `ayuda` (
  `ayudaID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date_claimed` varchar(50) NOT NULL,
  FOREIGN KEY (userID) REFERENCES users(userID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


SELECT ayuda.name2, ayuda.amount, ayuda.date_claimed
FROM ayuda
INNER JOIN users
ON ayuda.userID = ayuda.userID
WHERE users.purok = 'Purok-1';


SELECT ayuda.name2, ayuda.amount, ayuda.date_claimed
FROM ayuda
WHERE EXISTS (SELECT purok FROM users WHERE users.userID = ayuda.userID AND purok = 'Purok-1');

INSERT INTO ayuda (userID, name2, amount, date_claimed) VALUES (2134, 'dfds', 7000, 'not yet')

SELECT users.Fname, users.Mname, users.Lname, ayuda.amount, ayuda.date_claimed
FROM ayuda
INNER JOIN users
ON ayuda.userID = users.userID;


CREATE TABLE `exitpass` (
  `epassID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Fname2` varchar(50) NOT NULL,
  `Mname2` varchar(50) NOT NULL,
  `Lname2` varchar(50) NOT NULL,
  `purok2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

