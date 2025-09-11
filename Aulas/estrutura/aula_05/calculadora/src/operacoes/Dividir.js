export class Dividir {

   /**
    * @param {int|float} a 
    * @param {int|float} b
    * @returns {int|float}
    */
   executar(a, b) {
      if (b == 0) {
         throw new Error("Divisão por zero.");
      }

      return a / b;  
   }
}