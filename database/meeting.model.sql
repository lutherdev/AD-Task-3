CREATE TABLE IF NOT EXISTS meetings (
    id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    name VARCHAR(255),
    description TEXT,
    start_date DATE,
    end_date DATE
);