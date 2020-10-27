use literario;

insert into professor(id_usuario) values(1);

insert into conteudo(id_professor) values(1);

insert into area(nome,id_conteudo,nivel,icone)
values('Literatura',1,1,'book');
insert into area(nome,id_conteudo,nivel,icone)
values('Gramática',1,1,'format_quote');
insert into area(nome,id_conteudo,nivel,icone)
values('Redação',1,1,'format_align_justify');
commit;