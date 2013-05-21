CREATE TABLE alarma (id INT AUTO_INCREMENT, local_id INT, id_usuario INT NOT NULL, descripcion VARCHAR(100) NOT NULL, fecha_creacion DATETIME NOT NULL, slug VARCHAR(50), UNIQUE INDEX alarma_sluggable_idx (slug), INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE calendario (id INT AUTO_INCREMENT, local_id INT, fecha_evento DATETIME NOT NULL, tipo_evento VARCHAR(50) NOT NULL, descripcion_evento VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, id_usuario INT NOT NULL, fecha_actualizacion DATETIME NOT NULL, slug VARCHAR(50), UNIQUE INDEX calendario_sluggable_idx (slug), INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE credencial (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, id_usuario INT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, slug VARCHAR(110), UNIQUE INDEX credencial_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE estadistica (id INT AUTO_INCREMENT, usuario_id INT, INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE local (id INT AUTO_INCREMENT, nombre VARCHAR(200) NOT NULL, id_usuario INT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, slug VARCHAR(210), UNIQUE INDEX local_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE parametro (id INT AUTO_INCREMENT, local_id INT, descripcion VARCHAR(255) NOT NULL, imagen VARCHAR(255), numero_personas INT NOT NULL, promedio_consumo VARCHAR(50) NOT NULL, tiempo_respuesta VARCHAR(50) NOT NULL, horario_atencion VARCHAR(50), costo_ingreso VARCHAR(50) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, id_usuario INT NOT NULL, INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE perfil (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, id_usuario INT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, slug VARCHAR(110), UNIQUE INDEX perfil_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE perfil_credencial (perfil_id INT, credencial_id INT, fecha_creacion DATETIME NOT NULL, PRIMARY KEY(perfil_id, credencial_id)) ENGINE = INNODB;
CREATE TABLE ranking (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, fecha_creacion DATETIME NOT NULL, id_usuario INT NOT NULL, slug VARCHAR(110), UNIQUE INDEX ranking_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ranking_usuario (id INT AUTO_INCREMENT, usuario_id INT, local_id INT, ranking_id INT, id_usuario INT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, puntos INT NOT NULL, INDEX ranking_id_idx (ranking_id), INDEX local_id_idx (local_id), INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE reserva (id INT AUTO_INCREMENT, local_id INT, numero_personas INT NOT NULL, promedio_consumo VARCHAR(50) NOT NULL, fecha_reserva DATETIME NOT NULL, estado VARCHAR(50) NOT NULL, fecha_creacion DATETIME NOT NULL, id_usuario INT NOT NULL, INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario (id INT AUTO_INCREMENT, perfil_id INT, email VARCHAR(150) NOT NULL, contrasena VARCHAR(150) NOT NULL, nombre VARCHAR(255) NOT NULL, tipo_identificacion VARCHAR(50) NOT NULL, identificacion VARCHAR(100) NOT NULL, foto VARCHAR(255), estado TINYINT, fecha_nacimiento DATETIME NOT NULL, fecha_creacion DATETIME NOT NULL, slug VARCHAR(160) NOT NULL, INDEX perfil_id_idx (perfil_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario_bloqueado (id INT AUTO_INCREMENT, usuario_id INT, local_id INT, fecha_creacion DATETIME NOT NULL, id_usuario INT NOT NULL, INDEX local_id_idx (local_id), INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE alarma ADD CONSTRAINT alarma_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE calendario ADD CONSTRAINT calendario_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE estadistica ADD CONSTRAINT estadistica_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE parametro ADD CONSTRAINT parametro_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE perfil_credencial ADD CONSTRAINT perfil_credencial_perfil_id_perfil_id FOREIGN KEY (perfil_id) REFERENCES perfil(id);
ALTER TABLE perfil_credencial ADD CONSTRAINT perfil_credencial_credencial_id_credencial_id FOREIGN KEY (credencial_id) REFERENCES credencial(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_ranking_id_ranking_id FOREIGN KEY (ranking_id) REFERENCES ranking(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE reserva ADD CONSTRAINT reserva_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE usuario ADD CONSTRAINT usuario_perfil_id_perfil_id FOREIGN KEY (perfil_id) REFERENCES perfil(id);
ALTER TABLE usuario_bloqueado ADD CONSTRAINT usuario_bloqueado_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE usuario_bloqueado ADD CONSTRAINT usuario_bloqueado_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
