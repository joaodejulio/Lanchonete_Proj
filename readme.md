1º- Entra no diretório que deseja fazer o download
    
    cd /c/xampp/htdocs
    
2º- Clona o projeto do github para a maquina.(já vai criar a pasta com o nome certo)
    
    git clone https://github.com/joaodejulio/Lanchonete_Proj.git
    
3º- Crie uma branch para fazer as alterações desejadas
    
        git checkout -b nomedabranch
    
4º- Depois de prontas as alterações, adicione esses arquivos ao prox commit(o '.' é pra add todos os arquivos modificados, pra saber quais foram digite git status antes deste passo)

    git add . 

5º- Realize o commit

    git commit -m 'resumo das modificacoes'

6º- Suba as alterações para o github

    git push origin nomedabranch
    
7º- Na pagina do projeto do github vá na aba 'branch' e crie um 'Pull Request' da sua branch
