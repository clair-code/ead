
CREATE TABLE video_aulas (
    id    int NOT NULL AUTO_INCREMENT,
    nome  varchar(255),
    url   text,
    usuario_id int,
    PRIMARY KEY (id)
);

