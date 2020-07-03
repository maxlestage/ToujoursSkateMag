-- Doctrine Migration File Generated on 2020-06-20 15:59:08

-- Version 20200620150844
ALTER TABLE articles ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL, DROP creat_at, DROP update_at;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200620150844', CURRENT_TIMESTAMP);
