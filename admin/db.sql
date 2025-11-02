CREATE database fitbite_db;
USE fitbite_db;
CREATE TABLE meals (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  type ENUM('Breakfast', 'Lunch', 'Dinner') NOT NULL,
  calories INT NOT NULL,
  protein FLOAT,
  carbs FLOAT,
  fats FLOAT,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
