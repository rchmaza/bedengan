create or replace table ground
(
    id          int auto_increment
        primary key,
    name        varchar(255)      not null,
    price       decimal default 0 not null,
    description text              null
);

create or replace table ground_image
(
    id        int auto_increment
        primary key,
    filename  varchar(255)         not null,
    is_cover  tinyint(1) default 0 not null,
    ground_id int                  not null,
    constraint ground_image_ground_id_fk
        foreign key (ground_id) references ground (id)
);

create or replace table user
(
    id       int auto_increment
        primary key,
    name     varchar(255)         not null,
    username varchar(255)         not null,
    password varchar(255)         not null,
    phone    varchar(20)          not null,
    is_admin tinyint(1) default 0 not null
);

create or replace table cart
(
    id         int auto_increment
        primary key,
    day        int  default 1         not null,
    start_date date default curdate() not null,
    end_date   date default curdate() not null,
    user_id    int                    not null,
    ground_id  int                    not null,
    constraint cart_ground_id_fk
        foreign key (ground_id) references ground (id),
    constraint cart_user_id_fk
        foreign key (user_id) references user (id)
);

create or replace table `order`
(
    id         int auto_increment
        primary key,
    total      decimal                                       default 0          not null,
    status     enum ('inactive', 'active', 'cancel', 'done') default 'inactive' not null,
    order_date date                                          default curdate()  not null,
    user_id    int                                                              not null,
    constraint order_user_id_fk
        foreign key (user_id) references user (id)
);

create or replace table order_detail
(
    id         int auto_increment
        primary key,
    name       varchar(255)              not null,
    day        int     default 1         not null,
    price      decimal default 0         not null,
    start_date date    default curdate() not null,
    end_date   date    default curdate() not null,
    ground_id  int                       not null,
    order_id   int                       not null,
    constraint order_detail_ground_id_fk
        foreign key (ground_id) references ground (id),
    constraint order_detail_order_id_fk
        foreign key (order_id) references `order` (id)
);


