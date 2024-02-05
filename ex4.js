// definir le tableau
let T = [17, 38, 10, 25, 72];

// trier et afficher le tableau
T.sort((a, b) => a - b);
console.log("Tableau trié :", T);

// ajouter l'élément 12 au tableau et l'afficher
T.push(12);
console.log("Tableau avec élément 12 ajouté :", T);

//renverser et afficher le tableau
T.reverse();
console.log("Tableau renversé :", T);

// afficher l'indice de l'élément 17
console.log("Indice de l'élément 17 :", T.indexOf(17));

// enlever l'élément 38 et afficher le tableau
T.splice(T.indexOf(38), 1);
console.log("Tableau avec élément 38 enlevé :", T);

// afficher le sous-tableau du 2e au 3e élément
console.log("Sous-tableau du 2e au 3e élément :", T.slice(1, 3));

// afficher le sous-tableau du début au 2e élément
console.log("Sous-tableau du début au 2e élément :", T.slice(0, 2));

// afficher le sous-tableau du 3e élément à la fin de la liste
console.log("Sous-tableau du 3e élément à la fin de la liste :", T.slice(2));
