CREATE TABLE encuestas
(
  id serial NOT NULL,
  usuario_id integer,
  created date,
  modified date,
  pregunta_count integer,
  grupo_count integer,
  grupo_id integer
)
WITH (
  OIDS=FALSE
);
ALTER TABLE encuestas
  OWNER TO encuestas;


CREATE TABLE preguntas
(
  id serial NOT NULL,
  created date,
  modified date,
  usuario_id integer,
  nombre character varying,
  valor character varying,
  orden integer,
  tipo_id integer
)
WITH (
  OIDS=FALSE
);
ALTER TABLE preguntas
  OWNER TO encuestas;



CREATE TABLE validaciones
(
  obligatoria boolean,
  regla_id integer,
  created date,
  modified date,
  usuario_id integer,
  maximo integer,
  minimo integer,
  id serial NOT NULL,
  mensaje character varying
)
WITH (
  OIDS=FALSE
);
ALTER TABLE validaciones
  OWNER TO encuestas;



CREATE TABLE reglas
(
  id serial NOT NULL,
  regla character varying
)
WITH (
  OIDS=FALSE
);
ALTER TABLE reglas
  OWNER TO encuestas;


CREATE TABLE encuestas_preguntas
(
  id serial NOT NULL,
  encuesta_id integer,
  pregunta_id integer
)
WITH (
  OIDS=FALSE
);
ALTER TABLE encuestas_preguntas
  OWNER TO encuestas;

CREATE TABLE preguntas_validaciones
(
  id serial NOT NULL,
  pregunta_id integer,
  validacion_id integer
)
WITH (
  OIDS=FALSE
);
ALTER TABLE preguntas_validaciones
  OWNER TO encuestas;

CREATE TABLE opciones
(
  id serial NOT NULL,
  nombre character varying,
  pregunta_id integer
)
WITH (
  OIDS=FALSE
);
ALTER TABLE opciones
  OWNER TO encuestas;

CREATE TABLE tipos
(
  id serial NOT NULL,
  nombre character varying,
  CONSTRAINT tipos_primarykey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE tipos
  OWNER TO encuestas;
