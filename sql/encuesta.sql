

SET search_path = encuestas, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 162 (class 1259 OID 24585)
-- Dependencies: 7
-- Name: datos_academicos; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE datos_academicos (
    usuario_id integer,
    id integer NOT NULL,
    carrera_id integer,
    nivel_id integer,
    titulo character varying,
    departamento_id integer,
    cohorte character varying,
    promedio_sin_aplazo double precision,
    promedio_con_aplazo double precision,
    fecha_ultima_materia date,
    fecha_solicitud_titulo date,
    fecha_emision_titulo date,
    cohorte_graduacion character varying
);


ALTER TABLE encuestas.datos_academicos OWNER TO encuestas;

--
-- TOC entry 163 (class 1259 OID 24591)
-- Dependencies: 162 7
-- Name: datos_academicos_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE datos_academicos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER  TABLE encuestas.datos_academicos_id_seq OWNER TO encuestas;

--
-- TOC entry 2047 (class 0 OID 0)
-- Dependencies: 163
-- Name: datos_academicos_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE datos_academicos_id_seq OWNED BY datos_academicos.id;


--
-- TOC entry 167 (class 1259 OID 24605)
-- Dependencies: 7
-- Name: encuestas; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE encuestas (
    id integer NOT NULL,
    usuario_id integer,
    created date,
    modified date,
    pregunta_count integer,
    grupo_count integer,
    grupo_id integer,
    nombre character varying
);


ALTER TABLE encuestas.encuestas OWNER TO encuestas;

--
-- TOC entry 183 (class 1259 OID 32895)
-- Dependencies: 7
-- Name: encuestas_grupos; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE encuestas_grupos (
    id integer NOT NULL,
    encuesta_id integer,
    grupo_id integer
);


ALTER TABLE encuestas.encuestas_grupos OWNER TO encuestas;

--
-- TOC entry 182 (class 1259 OID 32893)
-- Dependencies: 7 183
-- Name: encuestas_grupos_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE encuestas_grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.encuestas_grupos_id_seq OWNER TO encuestas;

--
-- TOC entry 2048 (class 0 OID 0)
-- Dependencies: 182
-- Name: encuestas_grupos_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE encuestas_grupos_id_seq OWNED BY encuestas_grupos.id;


--
-- TOC entry 166 (class 1259 OID 24603)
-- Dependencies: 7 167
-- Name: encuestas_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE encuestas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.encuestas_id_seq OWNER TO encuestas;

--
-- TOC entry 2049 (class 0 OID 0)
-- Dependencies: 166
-- Name: encuestas_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE encuestas_id_seq OWNED BY encuestas.id;


--
-- TOC entry 175 (class 1259 OID 24644)
-- Dependencies: 7
-- Name: encuestas_preguntas; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE encuestas_preguntas (
    id integer NOT NULL,
    encuesta_id integer,
    pregunta_id integer
);


ALTER TABLE encuestas.encuestas_preguntas OWNER TO encuestas;

--
-- TOC entry 174 (class 1259 OID 24642)
-- Dependencies: 7 175
-- Name: encuestas_preguntas_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE encuestas_preguntas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.encuestas_preguntas_id_seq OWNER TO encuestas;

--
-- TOC entry 2050 (class 0 OID 0)
-- Dependencies: 174
-- Name: encuestas_preguntas_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE encuestas_preguntas_id_seq OWNED BY encuestas_preguntas.id;


--
-- TOC entry 177 (class 1259 OID 24656)
-- Dependencies: 7
-- Name: grupos; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE grupos (
    id integer NOT NULL,
    nombre character varying
);


ALTER TABLE encuestas.grupos OWNER TO encuestas;

--
-- TOC entry 176 (class 1259 OID 24654)
-- Dependencies: 7 177
-- Name: grupos_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.grupos_id_seq OWNER TO encuestas;

--
-- TOC entry 2051 (class 0 OID 0)
-- Dependencies: 176
-- Name: grupos_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE grupos_id_seq OWNED BY grupos.id;


--
-- TOC entry 185 (class 1259 OID 32901)
-- Dependencies: 7
-- Name: grupos_usuarios; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE grupos_usuarios (
    id integer NOT NULL,
    grupo_id integer,
    usuario_id integer
);


ALTER TABLE encuestas.grupos_usuarios OWNER TO encuestas;

--
-- TOC entry 184 (class 1259 OID 32899)
-- Dependencies: 185 7
-- Name: grupos_usuarios_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE grupos_usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.grupos_usuarios_id_seq OWNER TO encuestas;

--
-- TOC entry 2052 (class 0 OID 0)
-- Dependencies: 184
-- Name: grupos_usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE grupos_usuarios_id_seq OWNED BY grupos_usuarios.id;


--
-- TOC entry 179 (class 1259 OID 24672)
-- Dependencies: 7
-- Name: opciones; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE opciones (
    id integer NOT NULL,
    nombre character varying,
    pregunta_id integer
);


ALTER TABLE encuestas.opciones OWNER TO encuestas;

--
-- TOC entry 178 (class 1259 OID 24670)
-- Dependencies: 179 7
-- Name: opciones_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE opciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.opciones_id_seq OWNER TO encuestas;

--
-- TOC entry 2053 (class 0 OID 0)
-- Dependencies: 178
-- Name: opciones_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE opciones_id_seq OWNED BY opciones.id;


--
-- TOC entry 169 (class 1259 OID 24611)
-- Dependencies: 1905 7
-- Name: preguntas; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE preguntas (
    id integer NOT NULL,
    created date,
    modified date,
    usuario_id integer,
    nombre character varying,
    valor character varying,
    orden integer,
    tipo_id integer,
    opcion_count integer DEFAULT 0
);


ALTER TABLE encuestas.preguntas OWNER TO encuestas;

--
-- TOC entry 168 (class 1259 OID 24609)
-- Dependencies: 7 169
-- Name: preguntas_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE preguntas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.preguntas_id_seq OWNER TO encuestas;

--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 168
-- Name: preguntas_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE preguntas_id_seq OWNED BY preguntas.id;


--
-- TOC entry 172 (class 1259 OID 24630)
-- Dependencies: 7
-- Name: reglas; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE reglas (
    id integer NOT NULL,
    regla character varying,
    "ruleCake" character varying,
    orden integer
);


ALTER TABLE encuestas.reglas OWNER TO encuestas;

--
-- TOC entry 173 (class 1259 OID 24633)
-- Dependencies: 172 7
-- Name: reglas_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE reglas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.reglas_id_seq OWNER TO encuestas;

--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 173
-- Name: reglas_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE reglas_id_seq OWNED BY reglas.id;


--
-- TOC entry 181 (class 1259 OID 24681)
-- Dependencies: 7
-- Name: tipos; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE tipos (
    id integer NOT NULL,
    nombre character varying
);


ALTER TABLE encuestas.tipos OWNER TO encuestas;

--
-- TOC entry 180 (class 1259 OID 24679)
-- Dependencies: 181 7
-- Name: tipos_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE tipos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.tipos_id_seq OWNER TO encuestas;

--
-- TOC entry 2056 (class 0 OID 0)
-- Dependencies: 180
-- Name: tipos_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE tipos_id_seq OWNED BY tipos.id;


--
-- TOC entry 164 (class 1259 OID 24593)
-- Dependencies: 7
-- Name: usuarios; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE usuarios (
    id integer NOT NULL,
    dni character varying,
    apellido character varying,
    nombre character varying,
    sexo character varying,
    usuario character varying,
    rol character varying,
    fecha_nac date,
    cod_depto character varying,
    cod_loc character varying,
    cod_prov character varying,
    calle character varying,
    email_1 character varying,
    email_2 character varying,
    tel_fijo character varying,
    celular character varying,
    facebook character varying,
    twitter character varying,
    foto_perfil character varying,
    created date,
    modified date
);


ALTER TABLE encuestas.usuarios OWNER TO encuestas;

--
-- TOC entry 165 (class 1259 OID 24599)
-- Dependencies: 7 164
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.usuarios_id_seq OWNER TO encuestas;

--
-- TOC entry 2057 (class 0 OID 0)
-- Dependencies: 165
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- TOC entry 170 (class 1259 OID 24618)
-- Dependencies: 7
-- Name: validaciones; Type: TABLE; Schema: encuestas; Owner: encuestas; Tablespace: 
--

CREATE OR REPLACE TABLE validaciones (
    obligatoria boolean,
    regla_id integer,
    created date,
    modified date,
    usuario_id integer,
    maximo integer,
    minimo integer,
    id integer NOT NULL,
    mensaje character varying,
    vacia boolean,
    pregunta_id integer
);


ALTER TABLE encuestas.validaciones OWNER TO encuestas;

--
-- TOC entry 171 (class 1259 OID 24621)
-- Dependencies: 7 170
-- Name: validaciones_id_seq; Type: SEQUENCE; Schema: encuestas; Owner: encuestas
--

CREATE OR REPLACE SEQUENCE validaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE encuestas.validaciones_id_seq OWNER TO encuestas;

--
-- TOC entry 2058 (class 0 OID 0)
-- Dependencies: 171
-- Name: validaciones_id_seq; Type: SEQUENCE OWNED BY; Schema: encuestas; Owner: encuestas
--

ALTER SEQUENCE validaciones_id_seq OWNED BY validaciones.id;


--
-- TOC entry 1901 (class 2604 OID 24601)
-- Dependencies: 163 162
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY datos_academicos ALTER COLUMN id SET DEFAULT nextval('datos_academicos_id_seq'::regclass);


--
-- TOC entry 1903 (class 2604 OID 24608)
-- Dependencies: 166 167 167
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY encuestas ALTER COLUMN id SET DEFAULT nextval('encuestas_id_seq'::regclass);


--
-- TOC entry 1912 (class 2604 OID 32898)
-- Dependencies: 183 182 183
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY encuestas_grupos ALTER COLUMN id SET DEFAULT nextval('encuestas_grupos_id_seq'::regclass);


--
-- TOC entry 1908 (class 2604 OID 24647)
-- Dependencies: 174 175 175
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY encuestas_preguntas ALTER COLUMN id SET DEFAULT nextval('encuestas_preguntas_id_seq'::regclass);


--
-- TOC entry 1909 (class 2604 OID 24659)
-- Dependencies: 176 177 177
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY grupos ALTER COLUMN id SET DEFAULT nextval('grupos_id_seq'::regclass);


--
-- TOC entry 1913 (class 2604 OID 32904)
-- Dependencies: 184 185 185
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY grupos_usuarios ALTER COLUMN id SET DEFAULT nextval('grupos_usuarios_id_seq'::regclass);


--
-- TOC entry 1910 (class 2604 OID 24675)
-- Dependencies: 178 179 179
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY opciones ALTER COLUMN id SET DEFAULT nextval('opciones_id_seq'::regclass);


--
-- TOC entry 1904 (class 2604 OID 24614)
-- Dependencies: 169 168 169
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY preguntas ALTER COLUMN id SET DEFAULT nextval('preguntas_id_seq'::regclass);


--
-- TOC entry 1907 (class 2604 OID 24635)
-- Dependencies: 173 172
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY reglas ALTER COLUMN id SET DEFAULT nextval('reglas_id_seq'::regclass);


--
-- TOC entry 1911 (class 2604 OID 24684)
-- Dependencies: 180 181 181
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY tipos ALTER COLUMN id SET DEFAULT nextval('tipos_id_seq'::regclass);


--
-- TOC entry 1902 (class 2604 OID 24602)
-- Dependencies: 165 164
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- TOC entry 1906 (class 2604 OID 24623)
-- Dependencies: 171 170
-- Name: id; Type: DEFAULT; Schema: encuestas; Owner: encuestas
--

ALTER TABLE ONLY validaciones ALTER COLUMN id SET DEFAULT nextval('validaciones_id_seq'::regclass);


--
-- TOC entry 2019 (class 0 OID 24585)
-- Dependencies: 162 2043
-- Data for Name: datos_academicos; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY datos_academicos (usuario_id, id, carrera_id, nivel_id, titulo, departamento_id, cohorte, promedio_sin_aplazo, promedio_con_aplazo, fecha_ultima_materia, fecha_solicitud_titulo, fecha_emision_titulo, cohorte_graduacion) FROM stdin;
\.


--
-- TOC entry 2059 (class 0 OID 0)
-- Dependencies: 163
-- Name: datos_academicos_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('datos_academicos_id_seq', 1, false);


--
-- TOC entry 2024 (class 0 OID 24605)
-- Dependencies: 167 2043
-- Data for Name: encuestas; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY encuestas (id, usuario_id, created, modified, pregunta_count, grupo_count, grupo_id, nombre) FROM stdin;
\.


--
-- TOC entry 2040 (class 0 OID 32895)
-- Dependencies: 183 2043
-- Data for Name: encuestas_grupos; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY encuestas_grupos (id, encuesta_id, grupo_id) FROM stdin;
\.


--
-- TOC entry 2060 (class 0 OID 0)
-- Dependencies: 182
-- Name: encuestas_grupos_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('encuestas_grupos_id_seq', 1, false);


--
-- TOC entry 2061 (class 0 OID 0)
-- Dependencies: 166
-- Name: encuestas_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('encuestas_id_seq', 16, true);


--
-- TOC entry 2032 (class 0 OID 24644)
-- Dependencies: 175 2043
-- Data for Name: encuestas_preguntas; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY encuestas_preguntas (id, encuesta_id, pregunta_id) FROM stdin;
\.


--
-- TOC entry 2062 (class 0 OID 0)
-- Dependencies: 174
-- Name: encuestas_preguntas_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('encuestas_preguntas_id_seq', 1, true);


--
-- TOC entry 2034 (class 0 OID 24656)
-- Dependencies: 177 2043
-- Data for Name: grupos; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY grupos (id, nombre) FROM stdin;
\.


--
-- TOC entry 2063 (class 0 OID 0)
-- Dependencies: 176
-- Name: grupos_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('grupos_id_seq', 1, false);


--
-- TOC entry 2042 (class 0 OID 32901)
-- Dependencies: 185 2043
-- Data for Name: grupos_usuarios; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY grupos_usuarios (id, grupo_id, usuario_id) FROM stdin;
\.


--
-- TOC entry 2064 (class 0 OID 0)
-- Dependencies: 184
-- Name: grupos_usuarios_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('grupos_usuarios_id_seq', 1, false);


--
-- TOC entry 2036 (class 0 OID 24672)
-- Dependencies: 179 2043
-- Data for Name: opciones; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY opciones (id, nombre, pregunta_id) FROM stdin;
\.


--
-- TOC entry 2065 (class 0 OID 0)
-- Dependencies: 178
-- Name: opciones_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('opciones_id_seq', 131, true);


--
-- TOC entry 2026 (class 0 OID 24611)
-- Dependencies: 169 2043
-- Data for Name: preguntas; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY preguntas (id, created, modified, usuario_id, nombre, valor, orden, tipo_id, opcion_count) FROM stdin;
\.


--
-- TOC entry 2066 (class 0 OID 0)
-- Dependencies: 168
-- Name: preguntas_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('preguntas_id_seq', 75, true);


--
-- TOC entry 2029 (class 0 OID 24630)
-- Dependencies: 172 2043
-- Data for Name: reglas; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY reglas (id, regla, "ruleCake", orden) FROM stdin;
16	Expresion regular	custom	\N
1	Pregunta Obligatoria	notEmpty	\N
2	Al menos X opciones selecionadas	multiple	\N
3	Como maximo X opciones seleccionadas	multiple	\N
4	Entre X opciones seleccionadas Min y Max	multiple	\N
5	Largo minimo	minLength	\N
6	Largo maximo	maxLength	\N
7	Largo entre	between	\N
10	Valor en el rango de	range	\N
11	Numerico	numeric	\N
12	Decimal	decimal	\N
13	Alfanumerico	alphaNumeric	\N
14	Email	email	\N
15	Fecha 	date	\N
8	Valor >=	comparison	\N
9	Valor <=	comparison	\N
\.


--
-- TOC entry 2067 (class 0 OID 0)
-- Dependencies: 173
-- Name: reglas_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('reglas_id_seq', 1, false);


--
-- TOC entry 2038 (class 0 OID 24681)
-- Dependencies: 181 2043
-- Data for Name: tipos; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY tipos (id, nombre) FROM stdin;
1	Texto
2	Area Texto
3	Checkbox
4	Select
5	Multiple Select
\.


--
-- TOC entry 2068 (class 0 OID 0)
-- Dependencies: 180
-- Name: tipos_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('tipos_id_seq', 1, false);


--
-- TOC entry 2021 (class 0 OID 24593)
-- Dependencies: 164 2043
-- Data for Name: usuarios; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY usuarios (id, dni, apellido, nombre, sexo, usuario, rol, fecha_nac, cod_depto, cod_loc, cod_prov, calle, email_1, email_2, tel_fijo, celular, facebook, twitter, foto_perfil, created, modified) FROM stdin;
\.


--
-- TOC entry 2069 (class 0 OID 0)
-- Dependencies: 165
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('usuarios_id_seq', 4, true);


--
-- TOC entry 2027 (class 0 OID 24618)
-- Dependencies: 170 2043
-- Data for Name: validaciones; Type: TABLE DATA; Schema: encuestas; Owner: encuestas
--

COPY validaciones (obligatoria, regla_id, created, modified, usuario_id, maximo, minimo, id, mensaje, vacia, pregunta_id) FROM stdin;
\.


--
-- TOC entry 2070 (class 0 OID 0)
-- Dependencies: 171
-- Name: validaciones_id_seq; Type: SEQUENCE SET; Schema: encuestas; Owner: encuestas
--

SELECT pg_catalog.setval('validaciones_id_seq', 3, true);


--
-- TOC entry 1915 (class 2606 OID 32889)
-- Dependencies: 172 172 2044
-- Name: reglas.id.primarykey; Type: CONSTRAINT; Schema: encuestas; Owner: encuestas; Tablespace: 
--

ALTER TABLE ONLY reglas
    ADD CONSTRAINT "reglas.id.primarykey" PRIMARY KEY (id);


--
-- TOC entry 1917 (class 2606 OID 24689)
-- Dependencies: 181 181 2044
-- Name: tipos_primarykey; Type: CONSTRAINT; Schema: encuestas; Owner: encuestas; Tablespace: 
--

ALTER TABLE ONLY tipos
    ADD CONSTRAINT tipos_primarykey PRIMARY KEY (id);


-- Completed on 2013-12-18 14:06:21 ART

--
-- PostgreSQL database dump complete
--

