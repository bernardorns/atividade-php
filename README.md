# atividade-php
# Descrição do Código PHP

Este código PHP define um array associativo para armazenar informações de um usuário, incluindo nome, idade e uma lista de hobbies. Ele verifica a idade do usuário, exibe uma mensagem correspondente e imprime a lista de hobbies. Além disso, uma função personalizada é usada para exibir uma saudação personalizada.

## Estrutura do Código

1. **Declaração do Array `$dadosUsuario`**: 
   - Contém as chaves `nome`, `idade` e `hobbies`.
   - O nome do usuário é "Bernardo".
   - A idade é 21 anos.
   - O campo `hobbies` é uma lista (array) que atualmente está vazia.

2. **Verificação da Idade**:
   - Utiliza um operador ternário para definir `$mensagemIdade` como "Menor de idade" ou "Maior de idade", com base na idade do usuário.
   - Exibe a mensagem correspondente.

3. **Exibição da Lista de Hobbies**:
   - Percorre o array `hobbies` com um `foreach` e imprime cada item na tela.

4. **Função `mostrarSaudacao($nome, $anos)`**:
   - Retorna uma mensagem personalizada contendo o nome e a idade do usuário.

5. **Chamada da Função `mostrarSaudacao`**:
   - Exibe a mensagem final na tela.

Este código pode ser usado para armazenar e exibir informações básicas de um usuário em um sistema PHP simples.
