


drop table secretcode;

CREATE TABLE secretcode(
                             id VARCHAR(45) PRIMARY KEY NOT NULL,
                             SecretName VARCHAR(45)  NOT NULL,
                             Secret VARCHAR(45) NOT NULL,
                             secretOwner VARCHAR(45) NOT NULL
);
