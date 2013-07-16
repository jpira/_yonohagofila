CREATE TABLE alarma (id INT AUTO_INCREMENT, local_id INT, id_usuario INT, descripcion VARCHAR(100) NOT NULL, fecha_creacion datetime NOT NULL, slug VARCHAR(50), UNIQUE INDEX alarma_sluggable_idx (slug), INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE calendario (id INT AUTO_INCREMENT, local_id INT, fecha_evento datetime NOT NULL, tipoevento_id INT, descripcion_evento VARCHAR(255) NOT NULL, id_usuario INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(50), UNIQUE INDEX calendario_sluggable_idx (slug), INDEX local_id_idx (local_id), INDEX tipoevento_id_idx (tipoevento_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE credencial (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, id_usuario INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(110), UNIQUE INDEX credencial_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE estadistica (id INT AUTO_INCREMENT, usuario_id INT, INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE eventoslocal (id INT AUTO_INCREMENT, nombre VARCHAR(255), local_id INT, tipoevento_id INT, id_usuario INT, fecha_evento datetime, fecha_creacion datetime NOT NULL, INDEX local_id_idx (local_id), INDEX tipoevento_id_idx (tipoevento_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE horario_atencion (id INT AUTO_INCREMENT, horario VARCHAR(100) NOT NULL, local_id INT, id_usuario INT NOT NULL, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(110), UNIQUE INDEX horario_atencion_sluggable_idx (slug), INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE local (id INT AUTO_INCREMENT, nombre VARCHAR(200) NOT NULL, imagen VARCHAR(255), estado TINYINT(1) NOT NULL, direccion VARCHAR(200) NOT NULL, telefono VARCHAR(200) NOT NULL, facebook VARCHAR(200), twitter VARCHAR(200), youtube VARCHAR(200), web VARCHAR(200), usuario_asociado VARCHAR(200) NOT NULL, id_usuario INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(210), UNIQUE INDEX local_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE logs (id INT AUTO_INCREMENT, usuario_id INT, username VARCHAR(255), ip VARCHAR(255) NOT NULL, proxy VARCHAR(255), estado TINYINT(1) NOT NULL, fecha_creacion datetime NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE parametro (id INT AUTO_INCREMENT, local_id INT, descripcion VARCHAR(255) NOT NULL, numero_personas INT NOT NULL, tiempo_respuesta VARCHAR(50) NOT NULL, costo_ingreso VARCHAR(50) NOT NULL, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, id_usuario INT, INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE perfil (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, id_usuario INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(110), UNIQUE INDEX perfil_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE perfil_credencial (perfil_id INT, credencial_id INT, id_usuario INT, fecha_creacion datetime NOT NULL, PRIMARY KEY(perfil_id, credencial_id)) ENGINE = INNODB;
CREATE TABLE preregistro (id INT AUTO_INCREMENT, nombrelugar VARCHAR(255), nombrecontacto VARCHAR(255), telcontacto VARCHAR(255), estado TINYINT(1) NOT NULL, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE promedio (id INT AUTO_INCREMENT, promedio VARCHAR(100) NOT NULL, local_id INT, id_usuario INT NOT NULL, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, slug VARCHAR(110), UNIQUE INDEX promedio_sluggable_idx (slug), INDEX local_id_idx (local_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ranking (id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, id_usuario INT, fecha_creacion datetime NOT NULL, slug VARCHAR(110), UNIQUE INDEX ranking_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ranking_usuario (id INT AUTO_INCREMENT, usuario_id INT, local_id INT, ranking_id INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, puntos INT NOT NULL, INDEX ranking_id_idx (ranking_id), INDEX local_id_idx (local_id), INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE reserva (id INT AUTO_INCREMENT, local_id INT, numero_personas INT NOT NULL, fecha_reserva DATE NOT NULL, hora_reserva TIME NOT NULL, hora_llegada TIME, promedio_id INT, estado VARCHAR(30), fecha_creacion datetime NOT NULL, id_usuario INT, slug VARCHAR(50), UNIQUE INDEX reserva_sluggable_idx (slug), INDEX local_id_idx (local_id), INDEX promedio_id_idx (promedio_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tiposeventos (id INT AUTO_INCREMENT, nombre VARCHAR(255), id_usuario INT, fecha_creacion datetime NOT NULL, fecha_actualizacion datetime, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario (id INT AUTO_INCREMENT, perfil_id INT, email VARCHAR(150) NOT NULL, contrasena VARCHAR(150) NOT NULL, nombre VARCHAR(255) NOT NULL, tipo_identificacion VARCHAR(50) NOT NULL, identificacion VARCHAR(100) NOT NULL, telefono VARCHAR(100) NOT NULL, foto VARCHAR(255), estado VARCHAR(50), token VARCHAR(50), fecha_nacimiento datetime NOT NULL, fecha_creacion datetime NOT NULL, slug VARCHAR(160), UNIQUE INDEX usuario_sluggable_idx (slug), INDEX perfil_id_idx (perfil_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario_bloqueado (id INT AUTO_INCREMENT, usuario_id INT, local_id INT, id_usuario INT, fecha_creacion datetime NOT NULL, INDEX local_id_idx (local_id), INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE alarma ADD CONSTRAINT alarma_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE calendario ADD CONSTRAINT calendario_tipoevento_id_tiposeventos_id FOREIGN KEY (tipoevento_id) REFERENCES tiposeventos(id);
ALTER TABLE calendario ADD CONSTRAINT calendario_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE estadistica ADD CONSTRAINT estadistica_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE eventoslocal ADD CONSTRAINT eventoslocal_tipoevento_id_tiposeventos_id FOREIGN KEY (tipoevento_id) REFERENCES tiposeventos(id);
ALTER TABLE eventoslocal ADD CONSTRAINT eventoslocal_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE horario_atencion ADD CONSTRAINT horario_atencion_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE parametro ADD CONSTRAINT parametro_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE perfil_credencial ADD CONSTRAINT perfil_credencial_perfil_id_perfil_id FOREIGN KEY (perfil_id) REFERENCES perfil(id);
ALTER TABLE perfil_credencial ADD CONSTRAINT perfil_credencial_credencial_id_credencial_id FOREIGN KEY (credencial_id) REFERENCES credencial(id);
ALTER TABLE promedio ADD CONSTRAINT promedio_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_ranking_id_ranking_id FOREIGN KEY (ranking_id) REFERENCES ranking(id);
ALTER TABLE ranking_usuario ADD CONSTRAINT ranking_usuario_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE reserva ADD CONSTRAINT reserva_promedio_id_promedio_id FOREIGN KEY (promedio_id) REFERENCES promedio(id);
ALTER TABLE reserva ADD CONSTRAINT reserva_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
ALTER TABLE usuario ADD CONSTRAINT usuario_perfil_id_perfil_id FOREIGN KEY (perfil_id) REFERENCES perfil(id);
ALTER TABLE usuario_bloqueado ADD CONSTRAINT usuario_bloqueado_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id);
ALTER TABLE usuario_bloqueado ADD CONSTRAINT usuario_bloqueado_local_id_local_id FOREIGN KEY (local_id) REFERENCES local(id);
