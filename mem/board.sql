use mysql;

create table board (
	no INT AUTO_INCREMENT PRIMARY KEY, -- 글번호(PK)
    notice char(2) NOT NULL, -- 공지사항 여부(Y/N)
    name varchar(10) NOT NULL, -- 작성자
    category varchar(20) NOT NULL, -- 구분
    title varchar(100) NOT NULL, -- 제목
    content varchar(500) NOT NULL, -- 내용
    see int NOT NULL, -- 조회수
    regdate date NOT NULL, -- 작성일 (1999-01-01)
    uuid varchar(100), -- 파일 고유번호
    uploadpath varchar(200), -- 파일 업로드 경로
    filename varchar(100) -- 파일명
);