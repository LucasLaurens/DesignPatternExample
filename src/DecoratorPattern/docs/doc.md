# __DECORATOR PATTERN__

> Rappel de principe de conception: Une classe doit être ouverte à l'extension mais fermée à la modification.

<hr>

## __Quels problèmes ce patron peut résoudre ?__

- De nouvelles responsabilités doivent être ajoutées (ou retirées) à un objet dynamiquement en cours d'exécution.

- Étendre d'une classe de façon souple pour composer de nouvelles fonctionnalités

<hr>

## __Solution qu'il apporte__

- Implémente une interface ou la classe abstraite de la classe à décorer

- Ajoute des fonctionnalités avant/après une requête

<hr>

## __Exemple d'application__

### __Contexte__

J'ai une pizzeria qui vend en ligne:

<img src="./contexte.png">
<hr>

Je veux donner la possibilité aux clients d'ajouter un supplément d'ingrédients dans la pizza:
- jambon
- olives
- chorizo
- ...

Propositions:

1.

<img src="./prop1.png">

Limites ?

<hr>

2.

<img src="./prop2.png">

Limites ?

<hr>
Solution:

Decorator pattern:

<img src="./Decorator_UML_class_diagram.png" style="background:white">
