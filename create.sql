create table if not exists contact (
  name varchar(30) NOT NULL,
  first_name varchar(30) NOT NULL,
  address varchar(30),
  postal_code integer(4),
  mail varchar(30)
    CONSTRAINT name_first_name PRIMARY KEY(name,first_name)
);
create table if not exists info (
  name varchar(30) references contact(name),
  first_name varchar(30) references contact(first_name),
  date_of_birth date CHECK date_of_bith < current_date,
  number_child char CHECK ( number_child >=0)
);
