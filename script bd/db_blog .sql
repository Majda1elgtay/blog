/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  14/05/2023 21:53:36                      */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists COMMENTS;

drop table if exists LIKES;

drop table if exists POSTS;

drop table if exists USERS;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   NAME                 varchar(20) not null,
   PASSWORD             varchar(50) not null,
   PROFILE              varchar(300) not null,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table : COMMENTS                                             */
/*==============================================================*/
create table COMMENTS
(
   ID_CMNTS             int not null,
   ID_POSTS             int not null,
   ID_ADMIN             int not null,
   ID_USERS             int not null,
   USER_NAME            varchar(40) not null,
   COMMENT              longtext not null,
   DATE                 date not null,
   primary key (ID_CMNTS)
);

/*==============================================================*/
/* Table : LIKES                                                */
/*==============================================================*/
create table LIKES
(
   ID_LIKES             int not null,
   ID_USERS             int not null,
   ID_ADMIN             int not null,
   ID_POSTS             int not null,
   primary key (ID_LIKES)
);

/*==============================================================*/
/* Table : POSTS                                                */
/*==============================================================*/
create table POSTS
(
   ID_POSTS             int not null,
   ID_ADMIN             int not null,
   NAME                 varchar(20) not null,
   TITLE                varchar(90) not null,
   CONTENT              varchar(10000) not null,
   CATEGORY             varchar(60) not null,
   IMAGE                varchar(200) not null,
   DATE                 date not null,
   STATUS               varchar(30) not null,
   primary key (ID_POSTS)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   ID_USERS             int not null,
   NAME                 varchar(20) not null,
   EMAIL                varchar(60) not null,
   PASSWORD             varchar(50) not null,
   PROFILE              varchar(300) not null,
   primary key (ID_USERS)
);

alter table COMMENTS add constraint FK_ASSOCIATION_1 foreign key (ID_POSTS)
      references POSTS (ID_POSTS) on delete restrict on update restrict;

alter table COMMENTS add constraint FK_ASSOCIATION_2 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table COMMENTS add constraint FK_ASSOCIATION_3 foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table LIKES add constraint FK_ASSOCIATION_4 foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table LIKES add constraint FK_ASSOCIATION_5 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table LIKES add constraint FK_ASSOCIATION_6 foreign key (ID_POSTS)
      references POSTS (ID_POSTS) on delete restrict on update restrict;

alter table POSTS add constraint FK_ASSOCIATION_7 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

