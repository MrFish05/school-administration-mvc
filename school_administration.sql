DROP DATABASE IF EXISTS school_administration;
CREATE DATABASE school_administration;
USE school_administration;

-- ROOMS
CREATE TABLE rooms (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- TEACHERS
CREATE TABLE teachers (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- CLASSES
CREATE TABLE classes (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  room_id BIGINT UNSIGNED NOT NULL,
  teacher_id BIGINT UNSIGNED NOT NULL,
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (room_id) REFERENCES rooms(id),
  FOREIGN KEY (teacher_id) REFERENCES teachers(id)
);

-- STUDENTS
CREATE TABLE students (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  birthday DATE NOT NULL,
  class_id BIGINT UNSIGNED NOT NULL,
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (class_id) REFERENCES classes(id)
);

-- TEACHES (renamed from taughts)
CREATE TABLE teaches (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  teacher_id BIGINT UNSIGNED NOT NULL,
  class_id BIGINT UNSIGNED NOT NULL,
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (teacher_id) REFERENCES teachers(id),
  FOREIGN KEY (class_id) REFERENCES classes(id)
);

-- INSERT ROOMS (15)
INSERT INTO rooms (name) VALUES
('Room A'), ('Room B'), ('Room C'), ('Room D'), ('Room E'),
('Room F'), ('Room G'), ('Room H'), ('Room I'), ('Room J'),
('Room K'), ('Room L'), ('Room M'), ('Room N'), ('Room O');

-- INSERT TEACHERS (12)
INSERT INTO teachers (first_name, last_name) VALUES
('Luca', 'Bianchi'),
('Marco', 'Rossi'),
('Giulia', 'Ferrari'),
('Anna', 'Romano'),
('Paolo', 'Ricci'),
('Sara', 'Marino'),
('Davide', 'Greco'),
('Elena', 'Conti'),
('Francesco', 'Gallo'),
('Martina', 'Costa'),
('Alessandro', 'Mancini'),
('Chiara', 'Lombardi');

-- INSERT CLASSES (10)
INSERT INTO classes (name, room_id, teacher_id) VALUES
('1A', 1, 1),
('1B', 2, 2),
('2A', 3, 3),
('2B', 4, 4),
('3A', 5, 5),
('3B', 6, 6),
('4A', 7, 7),
('4B', 8, 8),
('5A', 9, 9),
('5B', 10, 10);

-- INSERT TEACHES
INSERT INTO teaches (teacher_id, class_id) VALUES
(1,1),(2,2),(3,3),(4,4),(5,5),
(6,6),(7,7),(8,8),(9,9),(10,10);

-- INSERT STUDENTS (10 per class = 100 total)
INSERT INTO students (first_name, last_name, birthday, class_id) VALUES
-- Class 1
('Andrea','Rossi','2009-01-10',1),
('Matteo','Ferrari','2009-02-12',1),
('Sofia','Ricci','2009-03-15',1),
('Giovanni','Romano','2009-04-20',1),
('Alice','Conti','2009-05-18',1),
('Leonardo','Greco','2009-06-11',1),
('Giorgia','Marino','2009-07-09',1),
('Simone','Costa','2009-08-14',1),
('Chiara','Bianchi','2009-09-21',1),
('Davide','Moretti','2009-10-30',1),

-- Class 2
('Lorenzo','Gallo','2009-01-11',2),
('Francesca','Mancini','2009-02-13',2),
('Alessio','Rizzo','2009-03-16',2),
('Martina','Lombardi','2009-04-21',2),
('Nicolo','Barbieri','2009-05-19',2),
('Elisa','Fontana','2009-06-12',2),
('Stefano','Santoro','2009-07-10',2),
('Irene','Rinaldi','2009-08-15',2),
('Fabio','Caruso','2009-09-22',2),
('Beatrice','Ferrara','2009-10-31',2),

-- Class 3
('Tommaso','Galli','2009-01-05',3),
('Greta','Martini','2009-02-07',3),
('Riccardo','Leone','2009-03-09',3),
('Noemi','Longo','2009-04-11',3),
('Samuele','Gentile','2009-05-13',3),
('Aurora','Martinelli','2009-06-15',3),
('Edoardo','Vitale','2009-07-17',3),
('Camilla','Serra','2009-08-19',3),
('Filippo','Coppola','2009-09-21',3),
('Marta','De Santis','2009-10-23',3),

-- Class 4
('Gabriele','Riva','2009-01-02',4),
('Asia','Monti','2009-02-04',4),
('Cristian','Parisi','2009-03-06',4),
('Eleonora','Villa','2009-04-08',4),
('Daniele','Ferraro','2009-05-10',4),
('Valentina','Conte','2009-06-12',4),
('Pietro','Ferri','2009-07-14',4),
('Silvia','Fabbri','2009-08-16',4),
('Mattia','Bianco','2009-09-18',4),
('Serena','Marchetti','2009-10-20',4),

-- Class 5–10 (shortened pattern but still valid)
('Antonio','Silvestri','2009-01-01',5),
('Federica','Testa','2009-01-02',5),
('Claudio','Pellegrini','2009-01-03',5),
('Veronica','Palumbo','2009-01-04',5),
('Roberto','Sanna','2009-01-05',5),
('Monica','Farina','2009-01-06',5),
('Diego','Ruggiero','2009-01-07',5),
('Gloria','Orlando','2009-01-08',5),
('Enrico','Negri','2009-01-09',5),
('Laura','Bellini','2009-01-10',5),

('Salvatore','Piazza','2009-02-01',6),
('Angela','Valentini','2009-02-02',6),
('Ivan','Caputo','2009-02-03',6),
('Clara','Grasso','2009-02-04',6),
('Raffaele','De Rosa','2009-02-05',6),
('Paola','Sala','2009-02-06',6),
('Michele','Rossetti','2009-02-07',6),
('Nadia','Piras','2009-02-08',6),
('Gianluca','Mazza','2009-02-09',6),
('Tiziana','Puglisi','2009-02-10',6),

('Vincenzo','Vitali','2009-03-01',7),
('Teresa','Basile','2009-03-02',7),
('Omar','Neri','2009-03-03',7),
('Lucia','Pagano','2009-03-04',7),
('Ciro','Rizzi','2009-03-05',7),
('Daniela','Cattaneo','2009-03-06',7),
('Bruno','Bernardi','2009-03-07',7),
('Alba','Fusco','2009-03-08',7),
('Renato','Marra','2009-03-09',7),
('Patrizia','Trevisan','2009-03-10',7),

('Giuseppe','Donati','2009-04-01',8),
('Carla','Sartori','2009-04-02',8),
('Massimo','Guerra','2009-04-03',8),
('Lidia','Ferretti','2009-04-04',8),
('Domenico','Zanetti','2009-04-05',8),
('Rita','Grimaldi','2009-04-06',8),
('Emanuele','Ruggieri','2009-04-07',8),
('Silvana','Corsi','2009-04-08',8),
('Umberto','Messina','2009-04-09',8),
('Antonella','Raimondi','2009-04-10',8),

('Fabiana','Rinaldo','2009-05-01',9),
('Giorgio','Bertoli','2009-05-02',9),
('Elio','Sorrentino','2009-05-03',9),
('Ivana','Carli','2009-05-04',9),
('Marco','Pastore','2009-05-05',9),
('Luisa','Locatelli','2009-05-06',9),
('Adriano','Amato','2009-05-07',9),
('Flavia','Doria','2009-05-08',9),
('Bruna','Gatti','2009-05-09',9),
('Oscar','Mori','2009-05-10',9),

('Paolo','Ricci','2009-06-01',10),
('Serena','Romano','2009-06-02',10),
('Danilo','Ferrari','2009-06-03',10),
('Chiara','Greco','2009-06-04',10),
('Fabio','Conti','2009-06-05',10),
('Laura','Marino','2009-06-06',10),
('Alessio','Costa','2009-06-07',10),
('Marta','Bianchi','2009-06-08',10),
('Simone','Moretti','2009-06-09',10),
('Elena','Barbieri','2009-06-10',10);