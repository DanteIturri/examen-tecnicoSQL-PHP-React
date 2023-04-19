Array.prototype.ordenarDatos = function () {
  let ordenado = false;

  while (!ordenado) {
    ordenado = true;

    for (let i = 0; i < this.length - 1; i++) {
      if (this[i] > this[i + 1]) {
        let aux = this[i + 1];
        this[i + 1] = this[i];
        this[i] = aux;
        ordenado = false;
      }
    }
  }
  return this;
};

let numeros = [7, 2, 5, 13, 11, 29, 23];
console.log(numeros);

console.log();

let numerosOrdenados = numeros.ordenarDatos();

console.log(numerosOrdenados);
