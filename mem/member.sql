use mysql;

create table member (
	no INT NOT NULL AUTO_INCREMENT, -- 회원번호(PK)
    name varchar(10) NOT NULL, -- 이름
    nick varchar(20) NOT NULL, -- 닉네임
    userid varchar(20) NOT NULL, -- 아이디
    pw varchar(35) NOT NULL, -- 비밀번호
    birth date NOT NULL, -- 생년월일 (1999-01-01)
    gender varchar(8) NOT NULL, -- 성별 (남/여)
    phone varchar(20) NOT NULL, -- 연락처
    parent_phone varchar(20), -- 부모님 연락처 (어린이회원만)
    address varchar(100) NOT NULL, -- 주소
    email varchar(30) NOT NULL, -- 이메일
    type varchar(12) NOT NULL, -- 회원유형(어린이회원/일반회원)
    sns char(2) NOT NULL, -- SNS 수신 동의(Y/N)
    job varchar(10), -- 직업
    CONSTRAINT testTable_PK PRIMARY KEY(no)
);