use mysql;

create table member (
	no INT NOT NULL AUTO_INCREMENT, -- ȸ����ȣ(PK)
    name varchar(10) NOT NULL, -- �̸�
    nick varchar(20) NOT NULL, -- �г���
    userid varchar(20) NOT NULL, -- ���̵�
    pw varchar(35) NOT NULL, -- ��й�ȣ
    birth date NOT NULL, -- ������� (1999-01-01)
    gender varchar(8) NOT NULL, -- ���� (��/��)
    phone varchar(20) NOT NULL, -- ����ó
    parent_phone varchar(20), -- �θ�� ����ó (���ȸ����)
    address varchar(100) NOT NULL, -- �ּ�
    email varchar(30) NOT NULL, -- �̸���
    type varchar(12) NOT NULL, -- ȸ������(���ȸ��/�Ϲ�ȸ��)
    sns char(2) NOT NULL, -- SNS ���� ����(Y/N)
    job varchar(10), -- ����
    CONSTRAINT testTable_PK PRIMARY KEY(no)
);