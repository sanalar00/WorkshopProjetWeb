function estNombreParfait(nombre) {
    let sommeDiviseurs = 0;
    for (let i = 1; i <= nombre / 2; i++) {
        if (nombre % i === 0) {
            sommeDiviseurs += i;
        }
    }
    return sommeDiviseurs === nombre;
}



function Nombres_parfait(n) {
    let nombresParfaits = [];
    for (let i = 2; i < n; i++) {
        if (estNombreParfait(i)) {
            nombresParfaits.push(i);
        }
    }
    return nombresParfaits;
}