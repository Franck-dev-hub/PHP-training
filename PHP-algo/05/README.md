# FR
- Objectif : manipuler les chaînes de caractères
- Niveau de difficulté : débutant
- Exercice :
  Jules César, général et stratège romain, a été (à ce qu'il semble) le premier militaire officiel à chiffrer ses messages. 
  Sa méthode était assez simple : il décalait les lettres de 3 rangs dans l'alphabet.
  Le but de cet exercice est de créer une fonction à laquelle on donne un message et un décalage,
  et la fonction renvoie alors le message décalé dans l'alphabet. 
  Il faudra faire attention que le message peut contenir des caractères ne faisant pas forcément partie de l'alphabet et dans ce cas,
  pour ne pas perdre la signification du texte, ces caractères doivent réapparaitre à l'identique dans le message chiffré.
  De plus, il faudra gérer le dépassement ('z' décalé vers la droite revient sur 'a', et 'a' décalé vers la gauche revient sur 'z').
  À noter que la fonction pourra être utilisée aussi bien pour chiffrer que pour déchiffrer
  (il suffit pour cela de lui passer le message chiffré avec l'opposé du décalage utilisé pour retrouver le message d'origine).

# EN
- Objective: manipulate character strings
- Difficulty level: beginner
- Exercise :
  Julius Caesar, a Roman general and strategist, was (it seems) the first official military man to encrypt his messages.
  His method was quite simple: he shifted the letters by 3 rows in the alphabet.
  The purpose of this exercise is to create a function that is given a message and an offset,
  and the function then returns the shifted message in the alphabet.
  It will be necessary to pay attention that the message may contain characters which are not necessarily part of the alphabet and in this case,
  so as not to lose the meaning of the text, these characters must reappear identically in the encrypted message.
  In addition, it will be necessary to manage the overflow ('z' shifted to the right returns to 'a', and 'a' shifted to the left returns to 'z').
  Note that the function can be used both to encrypt and decrypt (just pass the encrypted message with the opposite offset used to find the original message).