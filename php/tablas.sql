CREATE TABLE IF NOT EXISTS Usuarios(
    UsuarioId INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR (255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Fecha DATE NOT NULL,
    PRIMARY KEY (UsuarioId)
);



CREATE TABLE IF NOT EXISTS Imagenes(
    ImagenId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR (255),
    Destino VARCHAR(255),
    UsuarioId INT,
    PRIMARY KEY (ImagenId),
    FOREIGN KEY (UsuarioId)
);



CREATE TABLE IF NOT EXISTS Comentarios(
    ComentariosId INT NOT NULL AUTO_INCREMENT,
    Comentario TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (ComentariosId)
);

CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionId INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR (40) NOT NULL,
    Mensaje TEXT (4000) NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (PublicacionId),
    FOREIGN KEY (UsuarioId)  REFERENCES Usuarios (UsuarioId),
    FOREIGN KEY (VotosId) REFERENCES Votos (VotosId)
); 

CREATE TABLE IF NOT EXISTS Votos(
    VotosId INT NOT NULL AUTO_INCREMENT,
    Tipo BOOLEAN NOT NULL,
    PublicacionId INT,
    CategoriasId INT,
    PRIMARY KEY (VotosId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones (PublicacionId),
    FOREIGN KEY (CategoriasId) REFERENCES Categorias (CategoriasId)
);


CREATE TABLE IF NOT EXISTS Categorias(
    CategoriasId INT NOT NULL AUTO_INCREMENT,
    Descripcion TEXT NOT NULL,
    PalabraClave VARCHAR (255) NOT NULL,
    PublicacionId INT,
    VotosId INT,
    PRIMARY KEY (CategoriasId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones (PublicacionId),
    FOREIGN KEY (VotosId) REFERENCES Votos (VotosId)
);



CREATE TABLE IF NOT EXISTS Temas(
    TemasId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR (30) NOT NULL,
    Descripcion TEXT (100) NOT NULL,
    PRIMARY KEY (VotosId)
);