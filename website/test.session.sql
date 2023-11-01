--@block 
CREATE TABLE photo(
    photo_id INT NOT NULL,
    photo_name VARCHAR(300),
    file_path VARCHAR(300),
    page_id VARCHAR(300),
    photo_date VARCHAR(300),
    PRIMARY KEY(photo_id)
);


CREATE TABLE projects (
    project_id INT NOT NULL,
    project_name VARCHAR(300),
    project_description VARCHAR(1000),
    project_city VARCHAR(20),
    project_state VARCHAR(20), 
    PRIMARY KEY(project_id)
);

CREATE TABLE website_text (
    text_id INT NOT NULL,
    text_field VARCHAR(1000),
    PRIMARY KEY(text_id)
);

CREATE TABLE project_info (
    project_info_id INT NOT NULL,
    project_id INT,
    project_info_text VARCHAR(1000),
    PRIMARY KEY(project_info_id),
    FOREIGN KEY(project_id) REFERENCES projects(project_id)
);

CREATE TABLE project_photos (
    project_photo_id INT NOT NULL,
    photo_id INT,
    project_id INT,
    PRIMARY KEY (project_photo_id),
    FOREIGN KEY(photo_id) REFERENCES photo(photo_id),
    FOREIGN KEY(project_id) REFERENCES projects(project_id)
);

