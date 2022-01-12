create table courses
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp    null,
    updated_at timestamp    null,
    name       varchar(255) not null
)
    collate = utf8mb4_unicode_ci;

create table deaneries
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp    null,
    updated_at timestamp    null,
    name       varchar(255) not null
)
    collate = utf8mb4_unicode_ci;

create table degrees
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp    null,
    updated_at timestamp    null,
    name       varchar(255) not null
)
    collate = utf8mb4_unicode_ci;

create table employees_types
(
    created_at timestamp null,
    updated_at timestamp null,
    id         bigint unsigned auto_increment
        primary key,
    name       char(255) not null
)
    collate = utf8mb4_unicode_ci;

create table failed_jobs
(
    id         bigint unsigned auto_increment
        primary key,
    uuid       varchar(255)                          not null,
    connection text                                  not null,
    queue      text                                  not null,
    payload    longtext                              not null,
    exception  longtext                              not null,
    failed_at  timestamp default current_timestamp() not null,
    constraint failed_jobs_uuid_unique
        unique (uuid)
)
    collate = utf8mb4_unicode_ci;

create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

create table notecuts
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp null,
    updated_at timestamp null,
    corte1     char(2)   not null,
    corte2     char(2)   not null,
    total      char(2)   not null
)
    collate = utf8mb4_unicode_ci;

create table password_resets
(
    email      varchar(255) not null,
    token      varchar(255) not null,
    created_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create index password_resets_email_index
    on password_resets (email);

create table pensums
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp null,
    updated_at timestamp null
)
    collate = utf8mb4_unicode_ci;

create table personal_access_tokens
(
    id             bigint unsigned auto_increment
        primary key,
    tokenable_type varchar(255)    not null,
    tokenable_id   bigint unsigned not null,
    name           varchar(255)    not null,
    token          varchar(64)     not null,
    abilities      text            null,
    last_used_at   timestamp       null,
    created_at     timestamp       null,
    updated_at     timestamp       null,
    constraint personal_access_tokens_token_unique
        unique (token)
)
    collate = utf8mb4_unicode_ci;

create index personal_access_tokens_tokenable_type_tokenable_id_index
    on personal_access_tokens (tokenable_type, tokenable_id);

create table records
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp null,
    updated_at timestamp null
)
    collate = utf8mb4_unicode_ci;

create table roles
(
    id         bigint unsigned auto_increment
        primary key,
    name       char(255) not null,
    created_at timestamp null,
    updated_at timestamp null
)
    collate = utf8mb4_unicode_ci;

create table sections
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp    null,
    updated_at timestamp    null,
    name       varchar(255) not null
)
    collate = utf8mb4_unicode_ci;

create table status
(
    id         bigint unsigned auto_increment
        primary key,
    name       char(10)  not null,
    created_at timestamp null,
    updated_at timestamp null
)
    collate = utf8mb4_unicode_ci;

create table employees
(
    id           bigint unsigned auto_increment
        primary key,
    created_at   timestamp       null,
    updated_at   timestamp       null,
    name         char(255)       not null,
    email        char(50)        not null,
    job          char(255)       not null,
    organization char(255)       not null,
    birthday     date            not null,
    password     char(255)       not null,
    salary       decimal(8, 2)   not null,
    SSO          decimal(8, 2)   not null,
    LPH          decimal(8, 2)   not null,
    IVSS         decimal(8, 2)   not null,
    status_id    bigint unsigned not null,
    role_id      bigint unsigned not null,
    constraint employees_email_unique
        unique (email),
    constraint employees_role_id_foreign
        foreign key (role_id) references roles (id),
    constraint employees_status_id_foreign
        foreign key (status_id) references status (id)
)
    collate = utf8mb4_unicode_ci;

create table events
(
    id          bigint unsigned auto_increment
        primary key,
    created_at  timestamp       null,
    updated_at  timestamp       null,
    title       char(255)       not null,
    description text            not null,
    color       char(20)        not null,
    start       char(255)       null,
    end         char(255)       null,
    status_id   bigint unsigned not null,
    constraint events_status_id_foreign
        foreign key (status_id) references status (id)
)
    collate = utf8mb4_unicode_ci;

create table news
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp                   null,
    updated_at timestamp                   null,
    title      char(255)                   not null,
    content    text                        not null,
    resume     text                        not null,
    tags_id    text                        not null,
    image      char(255) default 'new.png' not null,
    status_id  bigint unsigned             not null,
    constraint news_status_id_foreign
        foreign key (status_id) references status (id)
)
    collate = utf8mb4_unicode_ci;

create table students
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp                       null,
    updated_at timestamp                       null,
    name       char(255)                       not null,
    email      char(50)                        not null,
    birth      date                            not null,
    phone      char(15)                        not null,
    password   char(255)                       not null,
    image      varchar(255) default 'user.png' not null,
    degree     varchar(255)                    not null,
    university varchar(255)                    not null,
    role_id    bigint unsigned                 not null,
    status_id  bigint unsigned                 not null,
    constraint students_email_unique
        unique (email),
    constraint students_role_id_foreign
        foreign key (role_id) references roles (id),
    constraint students_status_id_foreign
        foreign key (status_id) references status (id)
)
    collate = utf8mb4_unicode_ci;

create table tags
(
    id         bigint unsigned auto_increment
        primary key,
    name       varchar(255) not null,
    created_at timestamp    null,
    updated_at timestamp    null,
    constraint tags_name_unique
        unique (name)
)
    collate = utf8mb4_unicode_ci;

create table users
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp                       null,
    updated_at timestamp                       null,
    name       char(255)                       not null,
    email      char(50)                        not null,
    birth      date                            not null,
    phone      char(15)                        not null,
    password   char(255)                       not null,
    image      varchar(255) default 'user.png' not null,
    role_id    bigint unsigned                 not null,
    status_id  bigint unsigned                 not null,
    constraint users_email_unique
        unique (email),
    constraint users_role_id_foreign
        foreign key (role_id) references roles (id),
    constraint users_status_id_foreign
        foreign key (status_id) references status (id)
)
    collate = utf8mb4_unicode_ci;

