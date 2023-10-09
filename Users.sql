CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL
);

INSERT INTO Users (UserID, Username, Password, Email)
VALUES (1, 'omanadil', 'suara@123', 'omandakhi0@gmail.com');