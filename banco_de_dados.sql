# -------------------------------------
CREATE DATABASE todoList IF NOT EXISTS;


# -------------------------------------
create table todoList.todo
(
    id          int auto_increment
        primary key,
    title       varchar(150)         not null,
    description text                 not null,
    date        timestamp            not null,
    status      tinyint(1) default 0 null
);
