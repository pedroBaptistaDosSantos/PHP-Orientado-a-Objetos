# O que é um Método Abstrato?

Métodos abstratos são os métodos que estão declarados em uma classe, mas não são definidos na classe o código desses métodos.<br>
Declarando um método abstrato as classes filhas são obrigadas a utilizar.<br>
Quando é declarado um método abstrato, obrigatoriamente a classe também deve ser declarada como abstrata. 

<br>
<br>


# Diagrama de Classe (UML)

```mermaid
classDiagram
    class Cheque
    <<Abstract>> Cheque
    Cheque <|-- ChequeComum
    Cheque <|-- ChequeEspecial
    Cheque : +Float valor
    Cheque : +String tipo
    Cheque: +__construct(float valor, string tipo) 
    Cheque: +converterReal(float valor) string
    Cheque:  +calcularJuro() string
    

      class ChequeComum{
          +String calcularJuro()
      }
      class ChequeEspecial{
          +String calcularJuro()
    }
```