USE poll;

CREATE TABLE IF NOT EXISTS polls(
	id_poll INT PRIMARY KEY AUTO_INCREMENT,
	question VARCHAR(255) NOT NULL,
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS poll_options (
	id_poll_option INT PRIMARY KEY AUTO_INCREMENT, 
    id_poll INT NOT NULL,
	label VARCHAR(120) NOT NULL,
	vote INT NOT NULL DEFAULT 0,
    FOREIGN KEY (id_poll)
    REFERENCES polls (id_poll) 
    ON DELETE CASCADE
-- ON DELETE CASCADE: se a enquete for apagada, apaga todas as opções junto
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS settings(
	id_settings INT PRIMARY KEY AUTO_INCREMENT,
	id_poll INT NULL,
	FOREIGN KEY (id_poll)
    REFERENCES polls (id_poll)
    ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO settings (id_settings, id_poll) VALUES (1, NULL)
ON DUPLICATE KEY UPDATE id_poll = id_poll;

SELECT * FROM settings;