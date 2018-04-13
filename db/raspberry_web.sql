---------------------------------
-- BASE DE DATOS RASPBERRY WEB --
---------------------------------

DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE usuarios (
    id            BIGSERIAL    PRIMARY KEY
  , nombre        VARCHAR(255) NOT NULL UNIQUE
  , apellidos     VARCHAR(255)
  , email         VARCHAR(255) NOT NULL UNIQUE
  , password      VARCHAR(255) NOT NULL
  , created_at    TIMESTAMP(0) DEFAULT current_timestamp
  , updated_at    TIMESTAMP(0) DEFAULT current_timestamp
  , auth_key      VARCHAR(255) UNIQUE
  , rol           VARCHAR(255) NOT NULL DEFAULT 'basico'
);

-- USUARIOS PERMANENTES DE LA APLICACIÓN --
INSERT INTO usuarios (nombre, email, password, rol) VALUES
  (
    'admin'
    , 'admin@hagomagia.com'
    , crypt('admin', gen_salt('bf', 13))
    , 'administrador'
  )
;
