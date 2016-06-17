SELECT * FROM facultad f,carrera c, materia m WHERE m.ID_Carrera=c.ID_Carrera AND c.ID_Facultad=f.ID_Facultad

SELECT * from facultad f, carrera c WHERE f.ID_Facultad=c.ID_Facultad