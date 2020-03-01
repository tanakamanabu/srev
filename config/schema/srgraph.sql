USE srgraph;

CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sr_id INT NOT NULL,
    name VARCHAR(128) NOT NULL,
    created DATETIME,
    modified DATETIME
) CHARSET = utf8mb4;

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) NOT NULL,
    slug VARCHAR(128) NOT NULL,
    begin DATETIME NOT NULL,
    end DATETIME NOT NULL,
    created  DATETIME,
    modified DATETIME,
    UNIQUE (slug)
) CHARSET = utf8mb4;

CREATE TABLE event_rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    room_id INT,
    created DATETIME,
    modified DATETIME,
    UNIQUE (event_id,room_id),
    FOREIGN KEY (room_id) REFERENCES rooms(id),
    FOREIGN KEY (event_id) REFERENCES events(id)
) CHARSET = utf8mb4;

CREATE TABLE event_points (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    event_id INT,
    room_id INT,
    point INT,
    created  DATETIME,
    UNIQUE (event_id, room_id),
    FOREIGN KEY (room_id) REFERENCES rooms (id),
    FOREIGN KEY (event_id) REFERENCES events (id)
) CHARSET = utf8mb4;


