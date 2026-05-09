# FR
- Objectif : manipuler les chaînes de caractères
- Niveau de difficulté : intermédiaire
- Exercice :
  L'ordinateur code tous ses caractères en binaire, suite de '1' et de '0'. Chuck Norris, qui est plus fort que l'ordinateur
  (rappelons qu'il peut claquer des doigts de pied et qu'il a compté deux fois jusqu'à l'infini), code ses messages en unaire, suite de '0' unique.
  Dans le codage Chuck Norris, le '0' est codé '00' et le '1' est codé '0'. Puis un espace, puis ensuite autant de '0' que le message contient de '0' ou '1' successifs.
  Par exemple la suite "10000111" sera traduite de la façon suivante :
    "0" pour le premier "1" puis "0" parce que la suite ne contient qu'un chiffre "1" ;
    "00" parce que là la suite est constituée de "0" puis "0000" parce qu'il y a quatre "0" successifs ;
    "0" pour la suite de "1", puis "000" parce qu'il y a trois "1" successifs.
  Ce qui donnera "0 0 00 0000 0 000".
  Le but de l'exercice est d'écrire une fonction qui code un message binaire (ex. '10000111') en unaire
  (ici '0 0 00 0000 0 000') puis une autre fonction qui décode un message unaire en binaire.

# EN
- Objective: manipulate character strings
- Difficulty level: intermediate
- Exercise:
  The computer encodes all its characters in binary, following '1' and '0'. Chuck Norris, who is stronger than the computer
  (recall that he can snap his toes and has counted twice to infinity), encodes his messages in unary, a sequence of unique '0'.
  In the Chuck Norris encoding, '0' is coded as '00' and '1' is coded as '0'. Then a space, then as many as '0' as the message contains successive '0' or '1'.
  For example, the sequence "10000111" will be translated as follows:
  "0" for the first "1" then "0" because the continuation only contains a number "1";
  "00" because there the sequence consists of "0" then "0000" because there are four successive "0";
  "0" for the continuation of "1," then "000" because there are three successive "1’s."
  This will give "0 0 00 0000 0 000".
  The goal of the exercise is to write a function that encodes a binary message (e.g., '10000111') in one key
  (here '0 0 00 0000 0 000') then another function that decodes a unary message into binary.