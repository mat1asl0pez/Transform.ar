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
    ComentarioId INT AUTO_INCREMENT,
    Texto TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    UsuarioId INT NOT NULL,
    PublicacionId INT NOT NULL,
    PRIMARY KEY (ComentarioId),
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios(UsuarioId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones(PublicacionId)
);

CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionId INT AUTO_INCREMENT,
    Titulo TEXT (255) NOT NULL,
    Texto TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    UsuarioId INT NOT NULL,
    VotosId INT NOT NULL,
    PRIMARY KEY(PublicacionId),
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios(UsuarioId),
    FOREIGN KEY (VotosId) REFERENCES Votos(VotosId)
); 

CREATE TABLE IF NOT EXISTS Votos(
    VotosId INT NOT NULL AUTO_INCREMENT,
    Tipo BOOLEAN NOT NULL,
    PublicacionId INT NOT NULL,
    CategoriasId INT NOT NULL,
    PRIMARY KEY (VotosId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones (PublicacionId),
    FOREIGN KEY (CategoriasId) REFERENCES Categorias (CategoriasId)
);

CREATE TABLE IF NOT EXISTS Categorias(
    CategoriasId INT NOT NULL AUTO_INCREMENT,
    Descripcion TEXT NOT NULL,
    PalabraClave VARCHAR (255) NOT NULL,
    PublicacionId INT NOT NULL,
    VotosId INT NOT NULL,
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