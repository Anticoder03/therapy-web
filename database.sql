CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    appointment_date DATE NOT NULL,
    status VARCHAR(20) NOT NULL default 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);