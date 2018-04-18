INSERT INTO usuarios (nombre, email, password) VALUES
  (
    'pepe'
    , 'elmagopepe@escuelademagia.com'
    , crypt('pepe', gen_salt('bf', 13))
  )
  , (
    'Marisol'
    , 'tomatero@soplahojas.com'
    , crypt('1234', gen_salt('bf', 13))
  )
;
