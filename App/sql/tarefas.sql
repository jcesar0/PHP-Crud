USE  tarefasdb;

CREATE TABLE tarefas (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    description VARCHAR (260),
    status INT(1) NOT NULL DEFAULT 0,
    create_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY (id)
);