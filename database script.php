CREATE TABLE users(
userID VARCHAR(255) NOT NULL PRIMARY KEY,
userName VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
surname VARCHAR(50) NOT NULL,
email TINYTEXT NOT NULL,
pass LONGTEXT NOT NULL
);

CREATE TABLE userdata(
userid VARCHAR(255) NOT NULL REFERENCES users(userID),
timestampms VARCHAR(14) NOT NULL,
latitude INT NOT NULL,
longtitude INT NOT NULL,
accuracy INT NOT NULL,
year INT NOT NULL,
month INT NOT NULL,
day INT NOT NULL,
hour INT NOT NULL
PRIMARY KEY (userid, timestampms),
);

CREATE TABLE activity(
    userid VARCHAR(255) NOT NULL REFERENCES users(userID),
    timestampms VARCHAR(14),
    type ENUM('ON_FOOT', 'WALKING', 'UNKNOWN', 'STILL', 'RUNNING', 'IN_VEHICLE', 'ON_BICYCLE', 'IN_ROAD_VEHICLE', 'IN_RAIL_VEHICLE', 'IN_TWO_WHEELER_VEHICLE', 'IN_FOUR_WHEELER_VEHICLE', 'TILTING'),
    confidence INT,
    PRIMARY KEY (userid, timestampms)
);