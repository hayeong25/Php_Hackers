use mysql;

create table member (
	no INT NOT NULL AUTO_INCREMENT, -- ȸ����ȣ(PK)
    name varchar(10) NOT NULL, -- �̸�
    nick varchar(20) NOT NULL, -- �г���
    userid varchar(15) NOT NULL, -- ���̵�
    pw varchar(20) NOT NULL, -- ��й�ȣ
    birth varchar(8) NOT NULL, -- ������� (1999-01-01)
    gender char(2) NOT NULL, -- ���� (��/��)
    phone varchar(15) NOT NULL, -- ����ó
    parent_phone varchar(15), -- �θ�� ����ó (���ȸ����)
    address varchar(50) NOT NULL, -- �ּ�
    email varchar(30) NOT NULL, -- �̸���
    type varchar(12) NOT NULL, -- ȸ������(���ȸ��/�Ϲ�ȸ��)
    sns char(2) NOT NULL, -- SNS ���� ����(Y/N)
    job varchar(10) NOT NULL, -- ����
    CONSTRAINT testTable_PK PRIMARY KEY(no)
);