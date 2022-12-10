xp_create_subdir 'C:\Sistemas'
go
use master
go
create database colegio

on primary
(name='ColegioData', filename='C:\Sistemas\colegio01.mdf',Size=5MB, MaxSize=100MB , Filegrowth=20%)
log on
(name='ColegioLog', filename='C:\Sistemas\colegio01.ldf',Size=5MB, MaxSize=100MB , Filegrowth=20%)
go
